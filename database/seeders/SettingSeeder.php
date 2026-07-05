<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // group => [key => [value, type, label]]
            'site' => [
                'site_name' => ['Allied Business Consultancy', 'text', 'Site Name'],
                'site_tagline' => ['Your Trusted Business Partner', 'text', 'Tagline'],
                'site_logo' => [null, 'image', 'Logo'],
                'site_logo_light' => [null, 'image', 'Logo (Light)'],
                'site_favicon' => [null, 'image', 'Favicon'],
                'maintenance_message' => ['We are performing scheduled maintenance. We will be back online shortly!', 'textarea', 'Maintenance Message'],
            ],
            'contact' => [
                'contact_email' => ['info@alliedbusiness.com', 'text', 'Contact Email'],
                'contact_phone' => ['+91 00000 00000', 'text', 'Contact Phone'],
                'contact_address' => ['123 Business Avenue, Corporate District', 'textarea', 'Address'],
                'contact_map_embed' => [null, 'textarea', 'Google Map Embed Code'],
                'working_hours' => ['Mon - Sat: 9:00 AM - 6:00 PM', 'text', 'Working Hours'],
            ],
            'header' => [
                'header_show_topbar' => ['1', 'boolean', 'Show Top Bar'],
                'header_topbar_text' => ['Welcome to Allied Business Consultancy', 'text', 'Top Bar Text'],
                'header_cta_text' => ['Get A Quote', 'text', 'Header Button Text'],
                'header_cta_url' => ['/contact-us', 'text', 'Header Button URL'],
                'header_sticky' => ['1', 'boolean', 'Sticky Header'],
            ],
            'footer' => [
                'footer_about' => ['Allied Business Consultancy provides expert business solutions to help your company grow and succeed in today\'s competitive market.', 'textarea', 'Footer About Text'],
                'footer_copyright' => ['© {year} Allied Business Consultancy. All Rights Reserved.', 'text', 'Copyright Text'],
                'footer_newsletter_title' => ['Subscribe to Our Newsletter', 'text', 'Newsletter Title'],
                'footer_newsletter_text' => ['Get the latest updates and insights delivered to your inbox.', 'textarea', 'Newsletter Text'],
            ],
            'seo' => [
                'meta_title' => ['Allied Business Consultancy — Your Trusted Business Partner', 'text', 'Default Meta Title'],
                'meta_description' => ['Professional business consultancy services: strategy, finance, HR, marketing and more.', 'textarea', 'Default Meta Description'],
                'meta_keywords' => ['business consultancy, corporate advisory, business strategy', 'textarea', 'Default Meta Keywords'],
                'og_image' => [null, 'image', 'Default Share Image'],
                'google_analytics_id' => [null, 'text', 'Google Analytics ID'],
            ],
        ];

        $sortOrder = 0;
        foreach ($settings as $group => $items) {
            foreach ($items as $key => [$value, $type, $label]) {
                Setting::query()->updateOrCreate(
                    ['key' => $key],
                    [
                        'group' => $group,
                        'value' => $value,
                        'type' => $type,
                        'label' => $label,
                        'sort_order' => $sortOrder++,
                    ]
                );
            }
        }

        clear_settings_cache();
    }
}
