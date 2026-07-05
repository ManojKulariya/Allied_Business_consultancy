<?php

namespace Database\Seeders;

use App\Models\HomeSection;
use Illuminate\Database\Seeder;

class HomeSectionSeeder extends Seeder
{
    public function run(): void
    {
        $sections = [
            [
                'section_key' => 'hero',
                'name' => 'Hero Slider',
                'title' => 'Grow Your Business With Confidence',
                'subtitle' => 'Trusted advisory for strategy, finance and operations',
                'cta_text' => 'Get Started',
                'cta_url' => '/contact-us',
                'cta_text_2' => 'Our Services',
                'cta_url_2' => '/services',
            ],
            [
                'section_key' => 'about',
                'name' => 'About Preview',
                'title' => 'Who We Are',
                'subtitle' => 'Your trusted business partner since day one',
                'content' => '<p>Allied Business Consultancy helps organisations unlock growth through practical, data-driven advice.</p>',
                'cta_text' => 'Learn More',
                'cta_url' => '/about-us',
            ],
            [
                'section_key' => 'services',
                'name' => 'Services Grid',
                'title' => 'What We Do',
                'subtitle' => 'Comprehensive consulting services tailored to your goals',
                'data' => ['limit' => '6', 'show_featured_only' => '1'],
            ],
            [
                'section_key' => 'stats',
                'name' => 'Statistics Counter',
                'background_color' => '#0d6efd',
                'data' => [
                    'stat_1_value' => '250+', 'stat_1_label' => 'Clients Served',
                    'stat_2_value' => '15+', 'stat_2_label' => 'Years Experience',
                    'stat_3_value' => '98%', 'stat_3_label' => 'Client Satisfaction',
                    'stat_4_value' => '40+', 'stat_4_label' => 'Expert Consultants',
                ],
            ],
            [
                'section_key' => 'why-choose-us',
                'name' => 'Why Choose Us',
                'title' => 'Why Choose Allied Business',
                'subtitle' => 'What sets our consultancy apart',
            ],
            [
                'section_key' => 'testimonials',
                'name' => 'Testimonials Carousel',
                'title' => 'What Our Clients Say',
                'data' => ['limit' => '8'],
            ],
            [
                'section_key' => 'clients',
                'name' => 'Client Logos',
                'title' => 'Trusted By Leading Companies',
                'data' => ['limit' => '12'],
            ],
            [
                'section_key' => 'blog',
                'name' => 'Latest Blog Posts',
                'title' => 'Insights & News',
                'subtitle' => 'The latest from our experts',
                'data' => ['limit' => '3'],
            ],
            [
                'section_key' => 'cta',
                'name' => 'Call To Action Banner',
                'title' => 'Ready to Transform Your Business?',
                'subtitle' => 'Book a free consultation with our experts today.',
                'cta_text' => 'Book Free Consultation',
                'cta_url' => '/contact-us',
                'background_color' => '#1e293b',
            ],
            [
                'section_key' => 'contact',
                'name' => 'Contact Strip + Map',
                'title' => 'Get In Touch',
            ],
        ];

        foreach (array_values($sections) as $index => $section) {
            HomeSection::query()->updateOrCreate(
                ['section_key' => $section['section_key']],
                // keep admin edits on re-seed: only fill on first insert
                HomeSection::query()->where('section_key', $section['section_key'])->exists()
                    ? []
                    : $section + ['sort_order' => $index + 1, 'status' => 1]
            );
        }
    }
}
