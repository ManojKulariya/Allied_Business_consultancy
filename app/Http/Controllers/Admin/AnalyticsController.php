<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Analytics\ClarityService;
use App\Services\Analytics\GoogleAnalyticsService;
use App\Services\Analytics\LeadAnalyticsService;
use App\Services\Analytics\ServicePerformanceService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AnalyticsController extends Controller
{
    public function __construct(
        private readonly GoogleAnalyticsService $analytics,
        private readonly ClarityService $clarity,
        private readonly LeadAnalyticsService $leads,
        private readonly ServicePerformanceService $servicePerformance,
    ) {
    }

    /**
     * Main Analytics dashboard. Default reporting window is the trailing
     * 30 days for every section except the top summary cards (which are
     * each their own calendar period) and Live Users (realtime).
     */
    public function index(): View
    {
        $start = now()->subDays(29)->toDateString();
        $end = now()->toDateString();

        $configured = $this->analytics->isConfigured();

        $visitorSummary = $configured ? $this->analytics->getVisitorSummary() : null;

        return view('admin.analytics.index', [
            'configured' => $configured,
            'analyticsError' => $configured ? $this->analytics->getLastError() : null,
            'clarityConfigured' => $this->clarity->isConfigured(),
            'visitorSummary' => $visitorSummary,
            'engagement' => $configured ? $this->analytics->getEngagementMetrics($start, $end) : null,
            'trafficSources' => $configured ? $this->analytics->getTrafficSources($start, $end) : [],
            'visitorTrend' => $configured ? $this->analytics->getVisitorTrend('7d') : [],
            'topPages' => $configured ? $this->analytics->getTopPages($start, $end, 10) : [],
            'topServices' => $configured ? $this->analytics->getTopPages($start, $end, 10, '/services/') : [],
            'topBlogs' => $configured ? $this->analytics->getTopPages($start, $end, 10, '/blog/') : [],
            'countries' => $configured ? $this->analytics->getCountries($start, $end) : [],
            'regions' => $configured ? $this->analytics->getRegions($start, $end) : [],
            'cities' => $configured ? $this->analytics->getCities($start, $end) : [],
            'devices' => $configured ? $this->analytics->getDevices($start, $end) : [],
            'operatingSystems' => $configured ? $this->analytics->getOperatingSystems($start, $end) : [],
            'browsers' => $configured ? $this->analytics->getBrowsers($start, $end) : [],
            'landingPages' => $configured ? $this->analytics->getLandingPages($start, $end) : [],
            'exitPages' => $configured ? $this->analytics->getExitPages($start, $end) : [],
            'realtime' => $configured ? $this->analytics->getRealtimeUsers() : ['total' => 0, 'rows' => []],
            'leadSummary' => $this->leads->summary(),
            'mostRequestedServices' => $this->servicePerformance->mostRequested($start, $end),
            'highestConversionServices' => $this->servicePerformance->highestConversion($start, $end),
            'leastVisitedServices' => $this->servicePerformance->leastVisited($start, $end),
        ]);
    }

    /**
     * AJAX: visitor trend chart data for a given period, without
     * re-rendering the whole dashboard.
     */
    public function chartData(Request $request): JsonResponse
    {
        $period = in_array($request->query('period'), ['7d', '30d', '90d', '12m'], true)
            ? $request->query('period')
            : '7d';

        return response()->json([
            'period' => $period,
            'trend' => $this->analytics->isConfigured() ? $this->analytics->getVisitorTrend($period) : [],
        ]);
    }

    /**
     * AJAX: polled every ~30s by the Live Users widget.
     */
    public function realtime(): JsonResponse
    {
        return response()->json(
            $this->analytics->isConfigured() ? $this->analytics->getRealtimeUsers() : ['total' => 0, 'rows' => []]
        );
    }

    /**
     * Behavior Analytics — Microsoft Clarity has no embeddable data API,
     * so this page just links out to the official Clarity dashboard.
     */
    public function behavior(): View
    {
        return view('admin.analytics.behavior', [
            'clarityConfigured' => $this->clarity->isConfigured(),
            'clarityDashboardUrl' => $this->clarity->dashboardUrl(),
            'clarityProjectId' => $this->clarity->projectId(),
        ]);
    }
}
