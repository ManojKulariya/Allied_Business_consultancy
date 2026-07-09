<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

/**
 * The About Us page — real content, kept consistent with the facts already
 * seeded into the homepage's "About Preview" section (HomeSectionSeeder).
 */
class AboutPageSeeder extends Seeder
{
    public function run(): void
    {
        Page::query()->updateOrCreate(
            ['slug' => 'about-us'],
            [
                'title' => 'About Us',
                'subtitle' => 'Your Growth Partner in Finance & Strategy',
                'content' => $this->content(),
                'status' => 1,
                'show_in_footer' => false,
                'meta_title' => 'About Allied Business Consultancy',
                'meta_description' => 'Allied Business Consultancy is a single point of contact for company registration, taxation, GST and compliance — helping entrepreneurs start, manage, protect and grow their businesses.',
            ]
        );
    }

    private function content(): string
    {
        return <<<'HTML'
            <p>Allied Business Consultancy is helping entrepreneurs to easily start, manage, protect &amp; grow their businesses. We act as a single point of contact for company registration, taxation, GST and compliance — serving startups, MSMEs, traders and private limited companies across Rajasthan and Delhi NCR with practical, transparent advisory.</p>

            <h2>Who We Are</h2>
            <p>With 15+ years of combined experience and the trust of 250+ businesses, our team of certified Chartered Accountants and business consultants brings together deep regulatory expertise and a genuinely client-first approach. Whether you are registering a new company, filing your taxes, or navigating GST and ROC compliance, we handle the paperwork so you can focus on running your business.</p>

            <h2>Our Mission</h2>
            <p>To simplify compliance and taxation for every business we work with, so founders can focus on running their business — not chasing paperwork.</p>

            <h2>Our Vision</h2>
            <p>To be the most trusted business consultancy for entrepreneurs and growing companies across Rajasthan and Delhi NCR.</p>

            <h2>Why Choose Us</h2>
            <ul>
                <li>Certified Chartered Accountants</li>
                <li>Transparent, Fixed Pricing — no hidden charges</li>
                <li>Complete Confidentiality</li>
                <li>Single Point of Contact for every service</li>
            </ul>

            <h2>What We Do</h2>
            <p>Our services span company registration, GST services, income tax filing, trademark &amp; legal services, accounting &amp; bookkeeping, and ROC/MCA compliance — everything a business needs to start, stay compliant, and grow.</p>

            <h2>Get in Touch</h2>
            <p>Allied Business Consultancy, M-02, Mezzanine Floor, Shree Amar Heights, DCM, Ajmer Road, Nirman Nagar, Jaipur – 302019<br>
            Email: <a href="mailto:alliedbusinessconsultancy@gmail.com">alliedbusinessconsultancy@gmail.com</a><br>
            Phone: <a href="tel:+917300070618">+91 7300070618</a></p>
            HTML;
    }
}
