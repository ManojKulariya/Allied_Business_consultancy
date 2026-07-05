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
            ],
            'theme' => [
                'theme_primary_color' => ['#0d6efd', 'color', 'Primary Color'],
                'theme_secondary_color' => ['#6c757d', 'color', 'Secondary Color'],
                'theme_accent_color' => ['#fd7e14', 'color', 'Accent Color'],
                'theme_font_heading' => ['Poppins', 'select', 'Heading Font', [
                    'Poppins' => 'Poppins', 'Montserrat' => 'Montserrat', 'Raleway' => 'Raleway',
                    'Playfair Display' => 'Playfair Display', 'Inter' => 'Inter', 'Roboto' => 'Roboto',
                ]],
                'theme_font_body' => ['Inter', 'select', 'Body Font', [
                    'Inter' => 'Inter', 'Roboto' => 'Roboto', 'Open Sans' => 'Open Sans',
                    'Lato' => 'Lato', 'Source Sans 3' => 'Source Sans 3', 'Nunito' => 'Nunito',
                ]],
                'theme_font_size_base' => ['1rem', 'select', 'Base Font Size', [
                    '0.875rem' => 'Small (14px)', '1rem' => 'Normal (16px)', '1.125rem' => 'Large (18px)',
                ]],
                'theme_btn_style' => ['rounded', 'select', 'Button Style', [
                    'rounded' => 'Rounded', 'pill' => 'Pill', 'square' => 'Square',
                ]],
                'theme_border_radius' => ['0.5rem', 'select', 'Border Radius', [
                    '0' => 'None', '0.25rem' => 'Small', '0.5rem' => 'Medium', '1rem' => 'Large',
                ]],
                'theme_mode' => ['light', 'select', 'Color Mode', [
                    'light' => 'Light', 'dark' => 'Dark', 'auto' => 'Auto (system)',
                ]],
            ],
            'mail' => [
                'mail_host' => [null, 'text', 'SMTP Host'],
                'mail_port' => ['587', 'text', 'SMTP Port'],
                'mail_username' => [null, 'text', 'SMTP Username'],
                'mail_password' => [null, 'password', 'SMTP Password'],
                'mail_encryption' => ['tls', 'select', 'Encryption', [
                    'tls' => 'TLS', 'ssl' => 'SSL', '' => 'None',
                ]],
                'mail_from_address' => ['noreply@alliedbusiness.com', 'text', 'From Email'],
                'mail_from_name' => ['Allied Business Consultancy', 'text', 'From Name'],
                'mail_notification_recipients' => ['admin@alliedbusiness.com', 'text', 'Notification Recipients (comma separated)'],
            ],
            'scripts' => [
                'google_analytics_id' => [null, 'text', 'Google Analytics ID (G-XXXX)'],
                'google_tag_manager_id' => [null, 'text', 'Google Tag Manager ID'],
                'facebook_pixel_id' => [null, 'text', 'Facebook Pixel ID'],
                'head_scripts' => [null, 'textarea', 'Extra <head> Scripts'],
                'body_scripts' => [null, 'textarea', 'Extra <body> End Scripts'],
                'custom_css' => [null, 'textarea', 'Custom CSS'],
            ],
        ];

        $sortOrder = 0;
        foreach ($settings as $group => $items) {
            foreach ($items as $key => $config) {
                [$value, $type, $label] = $config;
                $options = $config[3] ?? null;

                Setting::query()->updateOrCreate(
                    ['key' => $key],
                    [
                        'group' => $group,
                        'type' => $type,
                        'label' => $label,
                        'options' => $options ? json_encode($options) : null,
                        'sort_order' => $sortOrder++,
                    ] + (Setting::query()->where('key', $key)->exists() ? [] : ['value' => $value])
                );
            }
        }

        clear_settings_cache();
    }
}
