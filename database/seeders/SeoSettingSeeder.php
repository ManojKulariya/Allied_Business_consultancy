<?php

namespace Database\Seeders;

use App\Models\SeoSetting;
use Illuminate\Database\Seeder;

class SeoSettingSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            [
                'route_name' => 'frontend.home',
                'page_label' => 'Home',
                'meta_title' => 'GST, Tax & Registration | Allied Business Consultancy',
                'meta_description' => 'Allied Business Consultancy is a single point of contact for company registration, taxation, GST and compliance — helping entrepreneurs start, manage, protect and grow their businesses with transparent, expert guidance.',
                'meta_keywords' => 'company registration Jaipur, GST registration, income tax filing, chartered accountant Jaipur, business compliance services, CA firm Rajasthan',
            ],
            [
                'route_name' => 'frontend.about',
                'page_label' => 'About Us',
                'meta_title' => 'About Us | Allied Business Consultancy',
                'meta_description' => "Allied Business Consultancy is helping entrepreneurs to easily start, manage, protect & grow their businesses — 15+ years of experience, trusted by 250+ businesses across Rajasthan and Delhi NCR.",
                'meta_keywords' => 'about allied business consultancy, chartered accountants Jaipur, business consultancy Rajasthan',
            ],
            [
                'route_name' => 'frontend.services.index',
                'page_label' => 'Services',
                'meta_title' => 'Our Services | Allied Business Consultancy',
                'meta_description' => "Explore Allied Business Consultancy's full range of services — company registration, GST, income tax, trademark & legal, accounting & bookkeeping, and ROC/MCA compliance for startups, MSMEs and private limited companies.",
                'meta_keywords' => 'business registration services, GST services Jaipur, income tax services, trademark registration, accounting services, ROC compliance',
            ],
            [
                'route_name' => 'frontend.blogs.index',
                'page_label' => 'Blog',
                'meta_title' => 'Blog & Insights | Allied Business Consultancy',
                'meta_description' => "Practical guides and updates on company registration, GST, income tax and compliance from Allied Business Consultancy's advisory team.",
                'meta_keywords' => 'business blog, GST updates, income tax guides, compliance news India',
            ],
            [
                'route_name' => 'frontend.teams.index',
                'page_label' => 'Our Team',
                'meta_title' => 'Our Team | Allied Business Consultancy',
                'meta_description' => "Meet the certified Chartered Accountants and business consultants behind Allied Business Consultancy's client advisory team.",
                'meta_keywords' => 'Allied Business Consultancy team, chartered accountants Jaipur',
            ],
            [
                'route_name' => 'frontend.galleries.index',
                'page_label' => 'Gallery',
                'meta_title' => 'Gallery | Allied Business Consultancy',
                'meta_description' => 'A look at Allied Business Consultancy — our office, our team and moments from client engagements.',
                'meta_keywords' => 'Allied Business Consultancy gallery, office photos',
            ],
            [
                'route_name' => 'frontend.testimonials.index',
                'page_label' => 'Testimonials',
                'meta_title' => 'Client Testimonials | Allied Business Consultancy',
                'meta_description' => 'Read what our clients say about working with Allied Business Consultancy for company registration, GST and tax compliance.',
                'meta_keywords' => 'Allied Business Consultancy reviews, client testimonials',
            ],
            [
                'route_name' => 'frontend.faqs.index',
                'page_label' => 'FAQs',
                'meta_title' => 'Frequently Asked Questions | Allied Business Consultancy',
                'meta_description' => 'Answers to common questions about company registration, GST, income tax and compliance services at Allied Business Consultancy.',
                'meta_keywords' => 'GST FAQ, company registration FAQ, income tax questions',
            ],
            [
                'route_name' => 'frontend.careers.index',
                'page_label' => 'Careers',
                'meta_title' => 'Careers | Allied Business Consultancy',
                'meta_description' => 'Explore career opportunities at Allied Business Consultancy — join a growing team of chartered accountants and business consultants in Jaipur.',
                'meta_keywords' => 'Allied Business Consultancy careers, jobs Jaipur, CA firm jobs',
            ],
            [
                'route_name' => 'frontend.contact',
                'page_label' => 'Contact Us',
                'meta_title' => 'Contact Us | Allied Business Consultancy',
                'meta_description' => 'Get in touch with Allied Business Consultancy for company registration, GST, income tax and compliance guidance. Call, email or visit our Jaipur office — we reply within one business day.',
                'meta_keywords' => 'contact allied business consultancy, business consultant Jaipur contact, GST registration enquiry, company registration contact Jaipur',
            ],
        ];

        foreach ($pages as $page) {
            SeoSetting::query()->updateOrCreate(
                ['route_name' => $page['route_name']],
                $page
            );
        }
    }
}
