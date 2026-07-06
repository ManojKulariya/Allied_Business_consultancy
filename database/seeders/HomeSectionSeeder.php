<?php

namespace Database\Seeders;

use App\Models\HomeSection;
use Illuminate\Database\Seeder;

class HomeSectionSeeder extends Seeder
{
    /**
     * The 16 homepage sections. Each key maps to a
     * resources/views/frontend/sections/{key}.blade.php partial.
     * Existing rows keep their admin edits; only missing rows are inserted
     * (and empty data columns are back-filled so the edit form shows fields).
     */
    public function run(): void
    {
        $sections = [
            [
                'section_key' => 'hero',
                'name' => 'Hero Banner',
                'title' => 'Grow Your Business With Trusted Financial Expertise',
                'subtitle' => 'Chartered Accountants & Business Consultants',
                'content' => '<p>From tax strategy to business transformation — Allied Business Consultancy delivers measurable results for ambitious companies.</p>',
                'cta_text' => 'Book Free Consultation',
                'cta_url' => '/contact-us',
                'cta_text_2' => 'Explore Services',
                'cta_url_2' => '/services',
                'data' => [
                    'small_heading' => 'Trusted by 250+ businesses',
                    'highlight_text' => 'Trusted Financial Expertise',
                    'bg_image_mobile' => null,
                    'right_image' => null,
                    'video_url' => null,
                    'badge_value' => '15+',
                    'badge_label' => 'Years of Excellence',
                    'card_1_icon' => 'bi-graph-up-arrow',
                    'card_1_title' => '98% Success Rate',
                    'card_1_text' => 'Client growth targets met',
                    'card_2_icon' => 'bi-shield-check',
                    'card_2_title' => 'Certified Experts',
                    'card_2_text' => 'CA, CPA & MBA advisors',
                    'stat_1_value' => '250+',
                    'stat_1_label' => 'Happy Clients',
                    'stat_2_value' => '15+',
                    'stat_2_label' => 'Years Experience',
                    'stat_3_value' => '40+',
                    'stat_3_label' => 'Expert Consultants',
                ],
            ],
            [
                'section_key' => 'clients',
                'name' => 'Trusted Clients Logos',
                'title' => 'Trusted by leading companies across industries',
            ],
            [
                'section_key' => 'about',
                'name' => 'About Preview',
                'title' => 'Your Growth Partner in Finance & Strategy',
                'subtitle' => 'About Allied Business',
                'content' => '<p>Allied Business Consultancy helps organisations unlock sustainable growth through practical, data-driven financial and strategic advice. Our senior consultants combine deep industry knowledge with hands-on execution.</p>',
                'cta_text' => 'More About Us',
                'cta_url' => '/about-us',
                'data' => [
                    'mission' => 'To empower businesses with clear, actionable financial guidance that turns ambition into measurable results.',
                    'vision' => 'To be the most trusted business consultancy for growing companies in the region.',
                    'experience_value' => '15+',
                    'experience_label' => 'Years Experience',
                    'features' => 'Certified Chartered Accountants, Tailored Growth Strategies, Transparent Fixed Pricing, Dedicated Account Manager',
                    'signature_name' => 'Rajesh Sharma',
                    'signature_title' => 'Founder & Managing Partner',
                    'signature_image' => null,
                ],
            ],
            [
                'section_key' => 'services',
                'name' => 'Services Grid',
                'title' => 'Comprehensive Business Solutions',
                'subtitle' => 'What We Do',
                'cta_text' => 'View All Services',
                'cta_url' => '/services',
                'data' => ['limit' => '6'],
            ],
            [
                'section_key' => 'why-choose-us',
                'name' => 'Why Choose Us Cards',
                'title' => 'Why Businesses Choose Allied',
                'subtitle' => 'The Allied Advantage',
            ],
            [
                'section_key' => 'stats',
                'name' => 'Statistics Counters',
                'title' => 'Results That Speak for Themselves',
            ],
            [
                'section_key' => 'industries',
                'name' => 'Industries We Serve',
                'title' => 'Industries We Serve',
                'subtitle' => 'Sector Expertise',
            ],
            [
                'section_key' => 'process',
                'name' => 'Our Process Timeline',
                'title' => 'How We Work With You',
                'subtitle' => 'Our Process',
            ],
            [
                'section_key' => 'featured-services',
                'name' => 'Featured Services Strip',
                'title' => 'Our Signature Services',
                'subtitle' => 'Most In Demand',
                'data' => ['limit' => '4'],
            ],
            [
                'section_key' => 'testimonials',
                'name' => 'Testimonials Slider',
                'title' => 'What Our Clients Say',
                'subtitle' => 'Client Stories',
                'data' => ['limit' => '9'],
            ],
            [
                'section_key' => 'team',
                'name' => 'Team Members',
                'title' => 'Meet Our Expert Consultants',
                'subtitle' => 'Leadership Team',
                'data' => ['limit' => '4'],
            ],
            [
                'section_key' => 'blog',
                'name' => 'Latest Blog Posts',
                'title' => 'Insights & Updates',
                'subtitle' => 'From Our Blog',
                'data' => ['limit' => '3'],
            ],
            [
                'section_key' => 'faq',
                'name' => 'FAQ Accordion',
                'title' => 'Frequently Asked Questions',
                'subtitle' => 'Need Help?',
            ],
            [
                'section_key' => 'cta',
                'name' => 'Call To Action Banner',
                'title' => 'Ready to Transform Your Business?',
                'subtitle' => 'Book a free 30-minute consultation with a senior consultant — no obligations.',
                'cta_text' => 'Book Free Consultation',
                'cta_url' => '/contact-us',
                'data' => ['phone' => '+91 00000 00000'],
            ],
            [
                'section_key' => 'contact',
                'name' => 'Contact Information + Map',
                'title' => 'Get In Touch',
                'subtitle' => 'Contact Us',
                'cta_text' => 'Send Us a Message',
                'cta_url' => '/contact-us',
            ],
            [
                'section_key' => 'newsletter',
                'name' => 'Newsletter Signup',
                'title' => 'Stay Ahead With Expert Insights',
                'subtitle' => 'Monthly tax tips, compliance deadlines and growth strategies — straight to your inbox.',
            ],
        ];

        foreach (array_values($sections) as $index => $definition) {
            $existing = HomeSection::query()->where('section_key', $definition['section_key'])->first();

            if (! $existing) {
                HomeSection::query()->create($definition + ['sort_order' => $index + 1, 'status' => 1]);

                continue;
            }

            // Back-fill data keys so new admin form fields appear without
            // overwriting values the admin has already edited.
            if (! empty($definition['data'])) {
                $merged = array_merge($definition['data'], $existing->data ?? []);

                if ($merged !== ($existing->data ?? [])) {
                    $existing->update(['data' => $merged]);
                }
            }
        }

        cache()->forget('home_sections.active');
    }
}
