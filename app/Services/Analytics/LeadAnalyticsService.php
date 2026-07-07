<?php

namespace App\Services\Analytics;

use App\Models\Contact;
use Illuminate\Support\Facades\Cache;

/**
 * Contact-form lead metrics — sourced entirely from the existing `contacts`
 * table (no external API involved), so these are always live/accurate and
 * only need a short cache to avoid repeated counts on one dashboard render.
 */
class LeadAnalyticsService
{
    private const CACHE_MINUTES = 15;

    public function summary(): array
    {
        return Cache::remember('analytics.leads.summary', self::CACHE_MINUTES * 60, function () {
            $today = now()->startOfDay();

            return [
                'today' => Contact::query()->where('created_at', '>=', $today)->count(),
                'this_week' => Contact::query()->where('created_at', '>=', now()->startOfWeek())->count(),
                'this_month' => Contact::query()->where('created_at', '>=', now()->startOfMonth())->count(),
                'unread' => Contact::query()->unread()->count(),
                'total' => Contact::query()->count(),
            ];
        });
    }

    /**
     * Leads grouped by the service they expressed interest in — feeds the
     * Service Performance "Most Requested Services" table.
     */
    public function leadsByService(): array
    {
        return Cache::remember('analytics.leads.by-service', self::CACHE_MINUTES * 60, function () {
            return Contact::query()
                ->whereNotNull('service_interested')
                ->where('service_interested', '!=', '')
                ->selectRaw('service_interested, count(*) as leads_count')
                ->groupBy('service_interested')
                ->orderByDesc('leads_count')
                ->get()
                ->map(fn ($row) => ['service' => $row->service_interested, 'leads' => (int) $row->leads_count])
                ->all();
        });
    }
}
