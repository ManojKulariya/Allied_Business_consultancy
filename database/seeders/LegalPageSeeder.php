<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

/**
 * Static Legal pages linked from the footer's Legal column.
 * Kept separate from DemoContentSeeder since this is real, permanent
 * site content — not placeholder/demo data.
 */
class LegalPageSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            [
                'title' => 'Privacy Policy',
                'slug' => 'privacy-policy',
                'sort_order' => 1,
                'content' => $this->privacyPolicy(),
            ],
            [
                'title' => 'Terms & Conditions',
                'slug' => 'terms-and-conditions',
                'sort_order' => 2,
                'content' => $this->termsAndConditions(),
            ],
            [
                'title' => 'Refund Policy',
                'slug' => 'refund-policy',
                'sort_order' => 3,
                'content' => $this->refundPolicy(),
            ],
            [
                'title' => 'Disclaimer',
                'slug' => 'disclaimer',
                'sort_order' => 4,
                'content' => $this->disclaimer(),
            ],
            [
                'title' => 'Sitemap',
                'slug' => 'sitemap',
                'sort_order' => 5,
                'content' => $this->sitemap(),
            ],
        ];

        foreach ($pages as $page) {
            Page::query()->updateOrCreate(
                ['slug' => $page['slug']],
                $page + ['show_in_footer' => true, 'status' => 1]
            );
        }
    }

    private function privacyPolicy(): string
    {
        return <<<'HTML'
            <p>Allied Business Consultancy ("we", "us", "our") respects your privacy. This policy explains what information we collect when you use this website and how we use it.</p>
            <h2>Information We Collect</h2>
            <p>When you submit an enquiry, contact form or newsletter subscription, we collect your name, email address, phone number and any message details you provide. We also collect standard technical information such as IP address and browser type for security and analytics purposes.</p>
            <h2>How We Use Your Information</h2>
            <ul>
                <li>To respond to your enquiries and provide the services you request.</li>
                <li>To send you requested updates, such as newsletter content, if you have subscribed.</li>
                <li>To improve our website and services.</li>
            </ul>
            <h2>Data Sharing</h2>
            <p>We do not sell or rent your personal information. We may share information with trusted service providers (such as email or hosting providers) solely to operate this website and deliver our services.</p>
            <h2>Your Rights</h2>
            <p>You may request access to, correction of, or deletion of your personal data at any time by contacting us at <a href="mailto:alliedbusinessconsultancy@gmail.com">alliedbusinessconsultancy@gmail.com</a>.</p>
            <h2>Contact Us</h2>
            <p>For any privacy-related questions, write to us at M-02, Mezzanine Floor, Shree Amar Heights, DCM, Ajmer Road, Nirman Nagar, Jaipur – 302019, or call +91 7300070618.</p>
            HTML;
    }

    private function termsAndConditions(): string
    {
        return <<<'HTML'
            <p>These Terms & Conditions govern your use of the Allied Business Consultancy website and the professional services we offer. By using this website, you agree to these terms.</p>
            <h2>Use of This Website</h2>
            <p>Content on this website is provided for general informational purposes about our services. It does not constitute professional advice and should not be relied upon as a substitute for a formal consultation.</p>
            <h2>Service Engagements</h2>
            <p>Any professional service (company registration, GST, income tax, compliance, accounting, or advisory work) is governed by a separate engagement agreement or fee quote issued directly to the client, which takes precedence over general website content.</p>
            <h2>Intellectual Property</h2>
            <p>All content, logos and materials on this website are the property of Allied Business Consultancy and may not be reproduced without written permission.</p>
            <h2>Limitation of Liability</h2>
            <p>While we take care to keep information on this website accurate and up to date, Allied Business Consultancy is not liable for any loss arising from reliance on website content in place of formal professional advice.</p>
            <h2>Governing Law</h2>
            <p>These terms are governed by the laws of India, with courts in Jaipur, Rajasthan having jurisdiction.</p>
            HTML;
    }

    private function refundPolicy(): string
    {
        return <<<'HTML'
            <p>This policy outlines how refunds and cancellations are handled for services engaged through Allied Business Consultancy.</p>
            <h2>Professional Fees</h2>
            <p>Fees for advisory and consultation services are payable as agreed at the time of engagement. Once work has commenced on your assignment, fees already paid for completed work are non-refundable.</p>
            <h2>Government Filings</h2>
            <p>For services involving statutory filings (such as company registration, GST or trademark applications), government fees paid to regulatory authorities are non-refundable once the filing has been submitted, regardless of the outcome of the application.</p>
            <h2>Cancellations</h2>
            <p>If you wish to cancel an engagement before work has commenced, please notify us in writing. Any applicable refund for undelivered work will be assessed on a case-by-case basis and processed within 7–10 business days.</p>
            <h2>Contact for Refund Requests</h2>
            <p>To raise a refund or cancellation request, email <a href="mailto:alliedbusinessconsultancy@gmail.com">alliedbusinessconsultancy@gmail.com</a> or call +91 7300070618 with your engagement details.</p>
            HTML;
    }

    private function disclaimer(): string
    {
        return <<<'HTML'
            <p>The information provided on this website is for general informational purposes only and does not constitute legal, financial, tax or professional advice.</p>
            <h2>No Professional Relationship</h2>
            <p>Viewing this website or contacting us through it does not create a client relationship with Allied Business Consultancy. A formal engagement begins only after a mutually agreed scope of work and fee arrangement.</p>
            <h2>Accuracy of Information</h2>
            <p>Tax rates, statutory timelines, government fees and compliance requirements referenced on this website are subject to change by the relevant authorities. We make reasonable efforts to keep this information current but recommend confirming details with us directly before acting on them.</p>
            <h2>Third-Party Links</h2>
            <p>This website may link to third-party or government websites for reference. We are not responsible for the content or accuracy of external websites.</p>
            HTML;
    }

    private function sitemap(): string
    {
        $links = [
            'Home' => route('frontend.home'),
            'Blog' => safe_route('frontend.blogs.index'),
            'Contact Us' => safe_route('frontend.contact'),
            'Privacy Policy' => safe_route('frontend.page', 'privacy-policy'),
            'Terms & Conditions' => safe_route('frontend.page', 'terms-and-conditions'),
            'Refund Policy' => safe_route('frontend.page', 'refund-policy'),
            'Disclaimer' => safe_route('frontend.page', 'disclaimer'),
        ];

        $items = collect($links)
            ->map(fn ($url, $label) => "<li><a href=\"{$url}\">{$label}</a></li>")
            ->implode('');

        return "<p>A quick overview of the main sections of this website.</p><ul>{$items}</ul>";
    }
}
