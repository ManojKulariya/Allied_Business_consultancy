<?php

namespace App\Services\Analytics;

use App\Models\Service;
use Illuminate\Support\Facades\Cache;

/**
 * Correlates GA4 page-view data for /services/* pages with contact-form
 * leads (Contact.service_interested) to surface which services get the
 * most traffic, which convert best, and which are under-visited.
 */
class ServicePerformanceService
{
    private const CACHE_MINUTES = 15;

    public function __construct(
        private readonly GoogleAnalyticsService $analytics,
        private readonly LeadAnalyticsService $leads,
    ) {
    }

    /**
     * One row per active service: views (GA4, if connected), leads
     * (from the contacts table) and a conversion rate (leads / views).
     */
    public function performance(string $startDate, string $endDate): array
    {
        $cacheKey = 'analytics.service-performance.'.md5($startDate.$endDate);

        return Cache::remember($cacheKey, self::CACHE_MINUTES * 60, function () use ($startDate, $endDate) {
            $services = Service::query()->active()->get(['id', 'title', 'slug']);

            $pageViews = collect($this->analytics->getTopPages($startDate, $endDate, 200, '/services/'))
                ->keyBy(fn ($row) => trim($row['path'], '/'));

            $leadCounts = collect($this->leads->leadsByService())->keyBy('service');

            return $services->map(function (Service $service) use ($pageViews, $leadCounts) {
                $views = (int) ($pageViews->get('services/'.$service->slug)['views'] ?? 0);
                $leadCount = (int) ($leadCounts->get($service->title)['leads'] ?? 0);

                return [
                    'service' => $service->title,
                    'slug' => $service->slug,
                    'views' => $views,
                    'leads' => $leadCount,
                    'conversion_rate' => $views > 0 ? round(($leadCount / $views) * 100, 2) : 0.0,
                ];
            })->values()->all();
        });
    }

    public function mostRequested(string $startDate, string $endDate, int $limit = 10): array
    {
        return collect($this->performance($startDate, $endDate))
            ->sortByDesc('leads')->take($limit)->values()->all();
    }

    public function highestConversion(string $startDate, string $endDate, int $limit = 10): array
    {
        return collect($this->performance($startDate, $endDate))
            ->filter(fn ($row) => $row['views'] > 0)
            ->sortByDesc('conversion_rate')->take($limit)->values()->all();
    }

    public function leastVisited(string $startDate, string $endDate, int $limit = 10): array
    {
        return collect($this->performance($startDate, $endDate))
            ->sortBy('views')->take($limit)->values()->all();
    }
}
