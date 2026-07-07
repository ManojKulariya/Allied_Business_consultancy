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
                'site_tagline' => ['Helping Entrepreneurs Start, Manage, Protect & Grow Their Businesses', 'text', 'Tagline'],
                'site_logo' => [null, 'image', 'Logo'],
                'site_logo_light' => [null, 'image', 'Logo (Light)'],
                'site_favicon' => [null, 'image', 'Favicon'],
                'maintenance_message' => ['We are performing scheduled maintenance. We will be back online shortly!', 'textarea', 'Maintenance Message'],
            ],
            'contact' => [
                'contact_email' => ['alliedbusinessconsultancy@gmail.com', 'text', 'Contact Email'],
                'contact_phone' => ['+91 7300070618', 'text', 'Contact Phone'],
                'contact_address' => ["M-02, Mezzanine Floor, Shree Amar Heights,\nDCM, Ajmer Road, Nirman Nagar,\nJaipur \u{2013} 302019", 'textarea', 'Address'],
                'contact_map_embed' => [
                    '<iframe src="https://maps.google.com/maps?q='
                        .'M-02%2C%20Shree%20Amar%20Heights%2C%20DCM%2C%20Ajmer%20Road%2C%20Nirman%20Nagar%2C%20Jaipur%20-%20302019'
                        .'&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen loading="lazy"></iframe>',
                    'textarea',
                    'Google Map Embed Code',
                ],
                'working_hours' => ['Mon - Sat: 9:00 AM - 6:00 PM', 'text', 'Working Hours'],
            ],
            'contact_page' => [
                'contact_hero_heading' => ["Let's Start Your Business Journey Together", 'text', 'Hero Heading'],
                'contact_hero_description' => ['Have a question about company registration, GST or compliance? Reach out — our advisors reply within one business day.', 'textarea', 'Hero Description'],
                'contact_hero_cta_text' => ['Call Now', 'text', 'Hero CTA Button Text'],
                'contact_hero_cta_link' => ['tel:+917300070618', 'text', 'Hero CTA Button Link'],
                'contact_cta_heading' => ['Need Expert Business Advice?', 'text', 'Consultation CTA Heading'],
                'contact_cta_description' => ['Talk to our experts today and get the right guidance for your business.', 'textarea', 'Consultation CTA Description'],
                'contact_cta_button_text' => ['Get Free Consultation', 'text', 'Consultation CTA Button Text'],
                'contact_cta_button_link' => ['/contact-us', 'text', 'Consultation CTA Button Link'],
            ],
            'header' => [
                'header_show_topbar' => ['1', 'boolean', 'Show Top Bar'],
                'header_topbar_text' => ['Welcome to Allied Business Consultancy', 'text', 'Top Bar Text'],
                'header_cta_text' => ['Get A Quote', 'text', 'Header Button Text'],
                'header_cta_url' => ['/contact-us', 'text', 'Header Button URL'],
                'header_sticky' => ['1', 'boolean', 'Sticky Header'],
            ],
            'footer' => [
                'footer_about' => ['Allied Business Consultancy helps entrepreneurs easily start, manage, protect and grow their businesses — a single point of contact for company registration, taxation, GST and compliance, with transparent pricing and complete confidentiality.', 'textarea', 'Footer About Text'],
                'footer_copyright' => ['© {year} Allied Business Consultancy. All Rights Reserved.', 'text', 'Copyright Text'],
                'footer_newsletter_title' => ['Subscribe to Our Newsletter', 'text', 'Newsletter Title'],
                'footer_newsletter_text' => ['Get the latest updates and insights delivered to your inbox.', 'textarea', 'Newsletter Text'],
            ],
            'seo' => [
                'meta_title' => ['Allied Business Consultancy — Company Registration, GST & Tax Experts in Jaipur', 'text', 'Default Meta Title'],
                'meta_description' => ['Allied Business Consultancy helps entrepreneurs start, manage, protect and grow their businesses — company registration, GST, income tax, accounting and compliance services in Jaipur, Rajasthan.', 'textarea', 'Default Meta Description'],
                'meta_keywords' => ['business consultancy Jaipur, company registration Rajasthan, GST registration, income tax filing, chartered accountant Jaipur, business compliance', 'textarea', 'Default Meta Keywords'],
                'og_image' => [null, 'image', 'Default Share Image'],
            ],
            'announcement' => [
                'announcement_enabled' => ['1', 'boolean', 'Show Announcement Bar'],
                'announcement_text' => ['🎉 Free business consultation this month — limited slots available!', 'text', 'Announcement Text'],
                'announcement_button_text' => ['Book Now', 'text', 'Button Text'],
                'announcement_button_url' => ['/contact-us', 'text', 'Button Link'],
                'announcement_bg_color' => ['#0B3C5D', 'color', 'Background Color'],
                'announcement_text_color' => ['#FFFFFF', 'color', 'Text Color'],
            ],
            'theme' => [
                'theme_primary_color' => ['#0B3C5D', 'color', 'Primary Color'],
                'theme_secondary_color' => ['#1F6FEB', 'color', 'Secondary Color'],
                'theme_accent_color' => ['#D4AF37', 'color', 'Accent Color'],
                'theme_bg_color' => ['#F8FAFC', 'color', 'Page Background'],
                'theme_heading_color' => ['#1E293B', 'color', 'Heading Text Color'],
                'theme_text_color' => ['#64748B', 'color', 'Body Text Color'],
                'theme_border_color' => ['#E2E8F0', 'color', 'Border Color'],
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
                'mail_from_address' => ['alliedbusinessconsultancy@gmail.com', 'text', 'From Email'],
                'mail_from_name' => ['Allied Business Consultancy', 'text', 'From Name'],
                'mail_notification_recipients' => ['alliedbusinessconsultancy@gmail.com', 'text', 'Notification Recipients (comma separated)'],
            ],
            'scripts' => [
                'google_analytics_id' => [null, 'text', 'Google Analytics ID (G-XXXX)'],
                'google_tag_manager_id' => [null, 'text', 'Google Tag Manager ID'],
                'facebook_pixel_id' => [null, 'text', 'Facebook Pixel ID'],
                'head_scripts' => [null, 'textarea', 'Extra <head> Scripts'],
                'body_scripts' => [null, 'textarea', 'Extra <body> End Scripts'],
                'custom_css' => [null, 'textarea', 'Custom CSS'],
            ],
            'analytics' => [
                'analytics_enabled' => ['1', 'boolean', 'Enable Tracking'],
                'ga4_measurement_id' => [null, 'text', 'GA4 Measurement ID (G-XXXXXXXXXX)'],
                'ga4_property_id' => [null, 'text', 'GA4 Property ID (numeric, e.g. 123456789)'],
                'ga4_service_account_json' => [null, 'textarea', 'Google Service Account JSON (paste full file contents)'],
                'clarity_project_id' => [null, 'text', 'Microsoft Clarity Project ID'],
                'analytics_ip_ignore' => [null, 'textarea', 'IP Addresses to Ignore (one per line)'],
                'analytics_cookie_consent' => ['0', 'boolean', 'Require Cookie Consent Before Tracking'],
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
