<?php

namespace Database\Seeders;

use App\Models\SeoSetting;
use Illuminate\Database\Seeder;

class SeoSettingSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            ['route_name' => 'frontend.home', 'page_label' => 'Home', 'meta_title' => 'Allied Business Consultancy — Your Trusted Business Partner'],
            ['route_name' => 'frontend.about', 'page_label' => 'About Us', 'meta_title' => 'About Us — Allied Business Consultancy'],
            ['route_name' => 'frontend.services.index', 'page_label' => 'Services', 'meta_title' => 'Our Services — Allied Business Consultancy'],
            ['route_name' => 'frontend.blogs.index', 'page_label' => 'Blog', 'meta_title' => 'Blog & Insights — Allied Business Consultancy'],
            ['route_name' => 'frontend.teams.index', 'page_label' => 'Our Team', 'meta_title' => 'Meet Our Team — Allied Business Consultancy'],
            ['route_name' => 'frontend.galleries.index', 'page_label' => 'Gallery', 'meta_title' => 'Gallery — Allied Business Consultancy'],
            ['route_name' => 'frontend.testimonials.index', 'page_label' => 'Testimonials', 'meta_title' => 'Client Testimonials — Allied Business Consultancy'],
            ['route_name' => 'frontend.faqs.index', 'page_label' => 'FAQs', 'meta_title' => 'Frequently Asked Questions — Allied Business Consultancy'],
            ['route_name' => 'frontend.careers.index', 'page_label' => 'Careers', 'meta_title' => 'Careers — Join Allied Business Consultancy'],
            ['route_name' => 'frontend.contact', 'page_label' => 'Contact Us', 'meta_title' => 'Contact Us — Allied Business Consultancy'],
        ];

        foreach ($pages as $page) {
            SeoSetting::query()->updateOrCreate(
                ['route_name' => $page['route_name']],
                $page
            );
        }
    }
}
