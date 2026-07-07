<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        // Header menu
        $header = Menu::query()->firstOrCreate(
            ['location' => 'header'],
            ['name' => 'Header Menu', 'status' => 1]
        );

        $headerItems = [
            ['label' => 'Home', 'route_name' => 'frontend.home', 'sort_order' => 1],
            ['label' => 'About Us', 'route_name' => 'frontend.about', 'sort_order' => 2],
            ['label' => 'Services', 'route_name' => 'frontend.services.index', 'sort_order' => 3],
            ['label' => 'Blog', 'route_name' => 'frontend.blogs.index', 'sort_order' => 4],
            ['label' => 'Career', 'route_name' => 'frontend.careers.index', 'sort_order' => 5],
            ['label' => 'Contact', 'route_name' => 'frontend.contact', 'sort_order' => 6],
        ];

        foreach ($headerItems as $item) {
            $header->items()->updateOrCreate(
                ['route_name' => $item['route_name']],
                $item + ['status' => 1]
            );
        }

        // Footer quick links
        $footer = Menu::query()->firstOrCreate(
            ['location' => 'footer'],
            ['name' => 'Footer Quick Links', 'status' => 1]
        );

        $footerItems = [
            ['label' => 'Home', 'route_name' => 'frontend.home', 'sort_order' => 1],
            ['label' => 'About Us', 'route_name' => 'frontend.about', 'sort_order' => 2],
            ['label' => 'Services', 'route_name' => 'frontend.services.index', 'sort_order' => 3],
            ['label' => 'Blog', 'route_name' => 'frontend.blogs.index', 'sort_order' => 4],
            ['label' => 'Career', 'route_name' => 'frontend.careers.index', 'sort_order' => 5],
            ['label' => 'Contact Us', 'route_name' => 'frontend.contact', 'sort_order' => 6],
        ];

        foreach ($footerItems as $item) {
            $footer->items()->updateOrCreate(
                ['route_name' => $item['route_name']],
                $item + ['status' => 1]
            );
        }

        // Prune any stale items outside the curated footer set (e.g. old
        // Quick Links replaced by a later content audit).
        $footer->items()
            ->whereNotIn('route_name', collect($footerItems)->pluck('route_name'))
            ->delete();
    }
}
