<?php

namespace App\Services\Analytics;

use Carbon\Carbon;
use Google\Analytics\Data\V1beta\Client\BetaAnalyticsDataClient;
use Google\Analytics\Data\V1beta\DateRange;
use Google\Analytics\Data\V1beta\Dimension;
use Google\Analytics\Data\V1beta\Filter;
use Google\Analytics\Data\V1beta\Filter\StringFilter;
use Google\Analytics\Data\V1beta\Filter\StringFilter\MatchType;
use Google\Analytics\Data\V1beta\FilterExpression;
use Google\Analytics\Data\V1beta\Metric;
use Google\Analytics\Data\V1beta\OrderBy;
use Google\Analytics\Data\V1beta\OrderBy\MetricOrderBy;
use Google\Analytics\Data\V1beta\RunReportRequest;
use Google\Analytics\Data\V1beta\RunReportResponse;
use Google\Analytics\Data\V1beta\RunRealtimeReportRequest;
use Illuminate\Support\Facades\Cache;

/**
 * Thin wrapper around the official Google Analytics Data API (GA4) client.
 *
 * Every public method is safe to call even when GA4 isn't configured or the
 * API call fails — it returns an empty/zero default instead of throwing, so
 * a single misbehaving widget never takes down the whole dashboard.
 *
 * Successful responses are cached for 15 minutes (per property) to avoid
 * hitting the Data API on every dashboard page load; failures are not
 * cached, so a fixed configuration retries on the very next request.
 */
class GoogleAnalyticsService
{
    private const CACHE_MINUTES = 15;

    private const REALTIME_CACHE_SECONDS = 60;

    /** Earliest possible GA4 start date — used as the lower bound for "all-time" totals. */
    private const EPOCH = '2015-08-14';

    private ?BetaAnalyticsDataClient $client = null;

    private bool $clientResolved = false;

    public function isConfigured(): bool
    {
        return (bool) setting('ga4_property_id') && (bool) setting('ga4_service_account_json');
    }

    /**
     * Visitor counts for the six standard summary periods (calendar-aligned).
     */
    public function getVisitorSummary(): array
    {
        $today = Carbon::today();

        $periods = [
            'today' => [$today->toDateString(), $today->toDateString()],
            'yesterday' => [$today->copy()->subDay()->toDateString(), $today->copy()->subDay()->toDateString()],
            'this_week' => [$today->copy()->startOfWeek()->toDateString(), $today->toDateString()],
            'this_month' => [$today->copy()->startOfMonth()->toDateString(), $today->toDateString()],
            'this_year' => [$today->copy()->startOfYear()->toDateString(), $today->toDateString()],
            'total' => [self::EPOCH, $today->toDateString()],
        ];

        $summary = [];

        foreach ($periods as $key => [$start, $end]) {
            $summary[$key] = $this->cached("visitors.{$key}.{$today->toDateString()}", function () use ($start, $end) {
                return (int) $this->singleMetricTotal('totalUsers', $start, $end);
            }) ?? 0;
        }

        return $summary;
    }

    /**
     * Active / new / returning users and engagement metrics for a period.
     */
    public function getEngagementMetrics(string $startDate, string $endDate): array
    {
        $default = [
            'active_users' => 0, 'new_users' => 0, 'returning_users' => 0,
            'avg_session_duration' => 0.0, 'bounce_rate' => 0.0, 'pages_per_session' => 0.0,
        ];

        return $this->cached("engagement.{$startDate}.{$endDate}", function () use ($startDate, $endDate) {
            $rows = $this->report(
                dimensions: [],
                metrics: ['activeUsers', 'newUsers', 'averageSessionDuration', 'bounceRate', 'screenPageViewsPerSession'],
                startDate: $startDate,
                endDate: $endDate,
            );

            $row = $rows[0] ?? [];
            $active = (int) ($row['activeUsers'] ?? 0);
            $new = (int) ($row['newUsers'] ?? 0);

            return [
                'active_users' => $active,
                'new_users' => $new,
                'returning_users' => max(0, $active - $new),
                'avg_session_duration' => round((float) ($row['averageSessionDuration'] ?? 0), 1),
                'bounce_rate' => round((float) ($row['bounceRate'] ?? 0) * 100, 1),
                'pages_per_session' => round((float) ($row['screenPageViewsPerSession'] ?? 0), 2),
            ];
        }) ?? $default;
    }

    /**
     * Sessions grouped by default channel group (Organic Search, Direct,
     * Referral, Social, Paid, Email, Other) for the pie chart.
     */
    public function getTrafficSources(string $startDate, string $endDate): array
    {
        return $this->cached("traffic-sources.{$startDate}.{$endDate}", function () use ($startDate, $endDate) {
            $rows = $this->report(
                dimensions: ['sessionDefaultChannelGroup'],
                metrics: ['sessions'],
                startDate: $startDate,
                endDate: $endDate,
                orderByMetric: 'sessions',
            );

            return collect($rows)->map(fn ($row) => [
                'label' => $row['sessionDefaultChannelGroup'] ?: 'Unassigned',
                'value' => (int) $row['sessions'],
            ])->all();
        }) ?? [];
    }

    /**
     * Daily (or monthly, for 12m) visitor trend for the line chart.
     */
    public function getVisitorTrend(string $period): array
    {
        [$start, $end, $dimension] = match ($period) {
            '30d' => [now()->subDays(29)->toDateString(), now()->toDateString(), 'date'],
            '90d' => [now()->subDays(89)->toDateString(), now()->toDateString(), 'date'],
            '12m' => [now()->subMonths(11)->startOfMonth()->toDateString(), now()->toDateString(), 'yearMonth'],
            default => [now()->subDays(6)->toDateString(), now()->toDateString(), 'date'],
        };

        return $this->cached("trend.{$period}.".now()->toDateString(), function () use ($start, $end, $dimension) {
            $rows = $this->report(
                dimensions: [$dimension],
                metrics: ['totalUsers'],
                startDate: $start,
                endDate: $end,
                orderByDimension: $dimension,
            );

            return collect($rows)->map(fn ($row) => [
                'date' => $row[$dimension],
                'visitors' => (int) $row['totalUsers'],
            ])->all();
        }) ?? [];
    }

    /**
     * Top pages by views, optionally restricted to a path prefix
     * (e.g. "/services/" or "/blog/" for the Top Services / Top Blogs
     * sections).
     */
    public function getTopPages(string $startDate, string $endDate, int $limit = 10, ?string $pathPrefix = null): array
    {
        $cacheKey = "top-pages.{$startDate}.{$endDate}.{$limit}.".($pathPrefix ?? 'all');

        return $this->cached($cacheKey, function () use ($startDate, $endDate, $limit, $pathPrefix) {
            $rows = $this->report(
                dimensions: ['pagePath', 'pageTitle'],
                metrics: ['screenPageViews', 'totalUsers', 'averageSessionDuration', 'bounceRate'],
                startDate: $startDate,
                endDate: $endDate,
                orderByMetric: 'screenPageViews',
                limit: $limit,
                pathPrefix: $pathPrefix,
            );

            return collect($rows)->map(fn ($row) => [
                'path' => $row['pagePath'],
                'title' => $row['pageTitle'],
                'views' => (int) $row['screenPageViews'],
                'visitors' => (int) $row['totalUsers'],
                'avg_time' => round((float) $row['averageSessionDuration'], 1),
                'bounce_rate' => round((float) $row['bounceRate'] * 100, 1),
            ])->all();
        }) ?? [];
    }

    /** Landing pages (session entry points). */
    public function getLandingPages(string $startDate, string $endDate, int $limit = 10): array
    {
        return $this->cached("landing-pages.{$startDate}.{$endDate}.{$limit}", function () use ($startDate, $endDate, $limit) {
            $rows = $this->report(
                dimensions: ['landingPage'],
                metrics: ['sessions'],
                startDate: $startDate,
                endDate: $endDate,
                orderByMetric: 'sessions',
                limit: $limit,
            );

            return collect($rows)->map(fn ($row) => ['path' => $row['landingPage'], 'sessions' => (int) $row['sessions']])->all();
        }) ?? [];
    }

    /**
     * Exit pages. Note: GA4's standard dimension set has moved away from
     * Universal Analytics' exitPage concept — if this dimension isn't
     * available on the connected property, this gracefully returns empty
     * rather than breaking the dashboard.
     */
    public function getExitPages(string $startDate, string $endDate, int $limit = 10): array
    {
        return $this->cached("exit-pages.{$startDate}.{$endDate}.{$limit}", function () use ($startDate, $endDate, $limit) {
            $rows = $this->report(
                dimensions: ['exitPage'],
                metrics: ['sessions'],
                startDate: $startDate,
                endDate: $endDate,
                orderByMetric: 'sessions',
                limit: $limit,
            );

            return collect($rows)->map(fn ($row) => ['path' => $row['exitPage'], 'sessions' => (int) $row['sessions']])->all();
        }) ?? [];
    }

    public function getCountries(string $startDate, string $endDate, int $limit = 10): array
    {
        return $this->geoBreakdown('country', $startDate, $endDate, $limit);
    }

    public function getRegions(string $startDate, string $endDate, int $limit = 10): array
    {
        return $this->geoBreakdown('region', $startDate, $endDate, $limit);
    }

    public function getCities(string $startDate, string $endDate, int $limit = 10): array
    {
        return $this->geoBreakdown('city', $startDate, $endDate, $limit);
    }

    public function getDevices(string $startDate, string $endDate): array
    {
        return $this->simpleBreakdown('deviceCategory', $startDate, $endDate);
    }

    public function getOperatingSystems(string $startDate, string $endDate): array
    {
        return $this->simpleBreakdown('operatingSystem', $startDate, $endDate);
    }

    public function getBrowsers(string $startDate, string $endDate): array
    {
        return $this->simpleBreakdown('browser', $startDate, $endDate);
    }

    /**
     * Realtime active users, broken down by current page/country/device/browser.
     * Short-lived cache (60s) since this is meant to feel "live".
     */
    public function getRealtimeUsers(): array
    {
        $default = ['total' => 0, 'rows' => []];

        if (! $this->isConfigured()) {
            return $default;
        }

        $cacheKey = 'ga4.realtime.'.setting('ga4_property_id');

        return Cache::remember($cacheKey, self::REALTIME_CACHE_SECONDS, function () use ($default) {
            $client = $this->client();
            if (! $client) {
                return $default;
            }

            try {
                $request = new RunRealtimeReportRequest([
                    'property' => $this->propertyName(),
                    'dimensions' => [
                        new Dimension(['name' => 'unifiedScreenName']),
                        new Dimension(['name' => 'country']),
                        new Dimension(['name' => 'deviceCategory']),
                    ],
                    'metrics' => [new Metric(['name' => 'activeUsers'])],
                    'limit' => 20,
                ]);

                $response = $client->runRealtimeReport($request);

                $rows = [];
                $total = 0;
                foreach ($response->getRows() as $row) {
                    $active = (int) $row->getMetricValues()[0]->getValue();
                    $total += $active;
                    $rows[] = [
                        'page' => $row->getDimensionValues()[0]->getValue(),
                        'country' => $row->getDimensionValues()[1]->getValue(),
                        'device' => $row->getDimensionValues()[2]->getValue(),
                        'active_users' => $active,
                    ];
                }

                return ['total' => $total, 'rows' => $rows];
            } catch (\Throwable $e) {
                report($e);

                return $default;
            }
        });
    }

    private function geoBreakdown(string $dimension, string $startDate, string $endDate, int $limit): array
    {
        return $this->cached("geo.{$dimension}.{$startDate}.{$endDate}.{$limit}", function () use ($dimension, $startDate, $endDate, $limit) {
            $rows = $this->report(
                dimensions: [$dimension],
                metrics: ['totalUsers'],
                startDate: $startDate,
                endDate: $endDate,
                orderByMetric: 'totalUsers',
                limit: $limit,
            );

            return collect($rows)
                ->filter(fn ($row) => filled($row[$dimension]) && $row[$dimension] !== '(not set)')
                ->map(fn ($row) => ['label' => $row[$dimension], 'value' => (int) $row['totalUsers']])
                ->values()->all();
        }) ?? [];
    }

    private function simpleBreakdown(string $dimension, string $startDate, string $endDate): array
    {
        return $this->cached("breakdown.{$dimension}.{$startDate}.{$endDate}", function () use ($dimension, $startDate, $endDate) {
            $rows = $this->report(
                dimensions: [$dimension],
                metrics: ['totalUsers'],
                startDate: $startDate,
                endDate: $endDate,
                orderByMetric: 'totalUsers',
                limit: 10,
            );

            return collect($rows)->map(fn ($row) => ['label' => $row[$dimension], 'value' => (int) $row['totalUsers']])->all();
        }) ?? [];
    }

    /**
     * Sum of a single metric with zero dimensions — GA4 returns exactly one
     * aggregate row in this shape.
     */
    private function singleMetricTotal(string $metric, string $startDate, string $endDate): int
    {
        $rows = $this->report(dimensions: [], metrics: [$metric], startDate: $startDate, endDate: $endDate);

        return (int) ($rows[0][$metric] ?? 0);
    }

    /**
     * Low-level runReport wrapper — builds the request, executes it, and
     * returns plain associative rows keyed by dimension/metric name.
     * Throws on failure; callers are expected to wrap via cached().
     */
    private function report(
        array $dimensions,
        array $metrics,
        string $startDate,
        string $endDate,
        ?string $orderByMetric = null,
        ?string $orderByDimension = null,
        int $limit = 100000,
        ?string $pathPrefix = null,
    ): array {
        $client = $this->client();

        if (! $client) {
            return [];
        }

        $request = new RunReportRequest([
            'property' => $this->propertyName(),
            'date_ranges' => [new DateRange(['start_date' => $startDate, 'end_date' => $endDate])],
            'dimensions' => array_map(fn ($name) => new Dimension(['name' => $name]), $dimensions),
            'metrics' => array_map(fn ($name) => new Metric(['name' => $name]), $metrics),
            'limit' => $limit,
        ]);

        if ($orderByMetric) {
            $request->setOrderBys([new OrderBy(['metric' => new MetricOrderBy(['metric_name' => $orderByMetric]), 'desc' => true])]);
        } elseif ($orderByDimension) {
            $request->setOrderBys([new OrderBy(['dimension' => new OrderBy\DimensionOrderBy(['dimension_name' => $orderByDimension])])]);
        }

        if ($pathPrefix) {
            $request->setDimensionFilter(new FilterExpression([
                'filter' => new Filter([
                    'field_name' => 'pagePath',
                    'string_filter' => new StringFilter(['match_type' => MatchType::BEGINS_WITH, 'value' => $pathPrefix]),
                ]),
            ]));
        }

        $response = $client->runReport($request);

        return $this->parseRows($response, $dimensions, $metrics);
    }

    private function parseRows(RunReportResponse $response, array $dimensionNames, array $metricNames): array
    {
        $rows = [];

        foreach ($response->getRows() as $row) {
            $entry = [];
            $dimensionValues = $row->getDimensionValues();
            $metricValues = $row->getMetricValues();

            foreach ($dimensionNames as $i => $name) {
                $entry[$name] = $dimensionValues[$i]->getValue();
            }

            foreach ($metricNames as $i => $name) {
                $entry[$name] = $metricValues[$i]->getValue();
            }

            $rows[] = $entry;
        }

        return $rows;
    }

    /**
     * Cache successful results for 15 minutes; failures are never cached so
     * a configuration fix takes effect on the very next request.
     */
    private function cached(string $key, \Closure $callback): mixed
    {
        if (! $this->isConfigured()) {
            return null;
        }

        $cacheKey = 'ga4.'.md5(setting('ga4_property_id').'.'.$key);

        if (Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }

        try {
            $result = $callback();
            Cache::put($cacheKey, $result, self::CACHE_MINUTES * 60);

            return $result;
        } catch (\Throwable $e) {
            report($e);

            return null;
        }
    }

    private function client(): ?BetaAnalyticsDataClient
    {
        if ($this->clientResolved) {
            return $this->client;
        }

        $this->clientResolved = true;

        if (! $this->isConfigured()) {
            return null;
        }

        $credentials = json_decode((string) setting('ga4_service_account_json'), true);

        if (! is_array($credentials)) {
            return null;
        }

        try {
            $this->client = new BetaAnalyticsDataClient(['credentials' => $credentials]);
        } catch (\Throwable $e) {
            report($e);
            $this->client = null;
        }

        return $this->client;
    }

    private function propertyName(): string
    {
        $id = (string) setting('ga4_property_id');

        return str_starts_with($id, 'properties/') ? $id : "properties/{$id}";
    }
}
