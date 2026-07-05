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

        if ($header->items()->doesntExist()) {
            $items = [
                ['label' => 'Home', 'route_name' => 'frontend.home', 'sort_order' => 1],
                ['label' => 'About Us', 'route_name' => 'frontend.about', 'sort_order' => 2],
                ['label' => 'Services', 'route_name' => 'frontend.services.index', 'sort_order' => 3],
                ['label' => 'Blog', 'route_name' => 'frontend.blogs.index', 'sort_order' => 4],
                ['label' => 'Careers', 'route_name' => 'frontend.careers.index', 'sort_order' => 5],
                ['label' => 'Contact Us', 'route_name' => 'frontend.contact', 'sort_order' => 6],
            ];

            foreach ($items as $item) {
                $header->items()->create($item + ['status' => 1]);
            }
        }

        // Footer quick links
        $footer = Menu::query()->firstOrCreate(
            ['location' => 'footer'],
            ['name' => 'Footer Quick Links', 'status' => 1]
        );

        if ($footer->items()->doesntExist()) {
            $items = [
                ['label' => 'About Us', 'route_name' => 'frontend.about', 'sort_order' => 1],
                ['label' => 'Our Services', 'route_name' => 'frontend.services.index', 'sort_order' => 2],
                ['label' => 'Our Team', 'route_name' => 'frontend.teams.index', 'sort_order' => 3],
                ['label' => 'FAQs', 'route_name' => 'frontend.faqs.index', 'sort_order' => 4],
                ['label' => 'Careers', 'route_name' => 'frontend.careers.index', 'sort_order' => 5],
                ['label' => 'Contact', 'route_name' => 'frontend.contact', 'sort_order' => 6],
            ];

            foreach ($items as $item) {
                $footer->items()->create($item + ['status' => 1]);
            }
        }
    }
}
