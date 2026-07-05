<?php

namespace App\Services\Admin;

use App\Models\Blog;
use App\Models\Career;
use App\Models\Contact;
use App\Models\JobApplication;
use App\Models\Newsletter;
use App\Models\Page;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\User;
use Spatie\Activitylog\Models\Activity;

class DashboardService
{
    /**
     * Aggregate all dashboard data: stat cards, recent items, activity feed.
     */
    public function getData(): array
    {
        return [
            'stats' => $this->stats(),
            'recentContacts' => Contact::query()->latest()->limit(5)->get(),
            'recentApplications' => JobApplication::query()->with('career:id,title,slug')->latest()->limit(5)->get(),
            'recentActivities' => Activity::query()->with('causer:id,name')->latest()->limit(10)->get(),
            'monthlyContacts' => $this->monthlyContacts(),
        ];
    }

    /**
     * Stat cards for the dashboard top row.
     */
    private function stats(): array
    {
        return [
            [
                'label' => 'Total Pages',
                'value' => Page::query()->count(),
                'icon' => 'bi-file-earmark-text',
                'color' => 'primary',
                'route' => 'admin.pages.index',
            ],
            [
                'label' => 'Blog Posts',
                'value' => Blog::query()->count(),
                'icon' => 'bi-newspaper',
                'color' => 'success',
                'route' => 'admin.blogs.index',
            ],
            [
                'label' => 'Services',
                'value' => Service::query()->count(),
                'icon' => 'bi-briefcase',
                'color' => 'info',
                'route' => 'admin.services.index',
            ],
            [
                'label' => 'Testimonials',
                'value' => Testimonial::query()->count(),
                'icon' => 'bi-chat-quote',
                'color' => 'warning',
                'route' => 'admin.testimonials.index',
            ],
            [
                'label' => 'Unread Messages',
                'value' => Contact::query()->unread()->count(),
                'icon' => 'bi-envelope-exclamation',
                'color' => 'danger',
                'route' => 'admin.contacts.index',
            ],
            [
                'label' => 'Job Openings',
                'value' => Career::query()->open()->count(),
                'icon' => 'bi-person-workspace',
                'color' => 'secondary',
                'route' => 'admin.careers.index',
            ],
            [
                'label' => 'Subscribers',
                'value' => Newsletter::query()->active()->count(),
                'icon' => 'bi-envelope-heart',
                'color' => 'dark',
                'route' => 'admin.newsletters.index',
            ],
            [
                'label' => 'Admin Users',
                'value' => User::query()->count(),
                'icon' => 'bi-people',
                'color' => 'primary',
                'route' => 'admin.users.index',
            ],
        ];
    }

    /**
     * Contacts per month for the last 6 months (dashboard chart).
     */
    private function monthlyContacts(): array
    {
        $months = collect(range(5, 0))->map(fn (int $i) => now()->subMonths($i)->format('Y-m'));

        $counts = Contact::query()
            ->where('created_at', '>=', now()->subMonths(6)->startOfMonth())
            ->get()
            ->groupBy(fn (Contact $c) => $c->created_at->format('Y-m'))
            ->map->count();

        return [
            'labels' => $months->map(fn (string $m) => \Carbon\Carbon::parse($m.'-01')->format('M Y'))->all(),
            'data' => $months->map(fn (string $m) => $counts[$m] ?? 0)->all(),
        ];
    }
}
