<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Counter;
use App\Models\Faq;
use App\Models\Industry;
use App\Models\ProcessStep;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\WhyChooseItem;
use Illuminate\Database\Seeder;

/**
 * Starter content for the homepage modules — every record is fully
 * editable/deletable in the admin panel. Idempotent: skips any module
 * that already has records so admin content is never touched.
 */
class DemoContentSeeder extends Seeder
{
    public function run(): void
    {
        // Service categories + services are owned by ServicesArchitectureSeeder
        $this->whyChooseItems();
        $this->counters();
        $this->industries();
        $this->processSteps();
        $this->testimonials();
        $this->team();
        $this->faqs();
        $this->clients();
    }

    private function serviceCategories(): void
    {
        if (ServiceCategory::query()->exists()) {
            return;
        }

        foreach ([
            ['name' => 'Financial Advisory', 'icon' => 'bi-cash-stack'],
            ['name' => 'Tax & Compliance', 'icon' => 'bi-receipt'],
            ['name' => 'Business Strategy', 'icon' => 'bi-bullseye'],
        ] as $i => $category) {
            ServiceCategory::query()->create($category + ['sort_order' => $i + 1]);
        }
    }

    private function services(): void
    {
        if (Service::query()->exists()) {
            return;
        }

        $categories = ServiceCategory::query()->pluck('id', 'name');

        $services = [
            ['Accounting & Bookkeeping', 'Financial Advisory', 'bi-journal-check', 'Accurate, timely books with monthly management reports so you always know where your business stands.', true],
            ['Tax Planning & Filing', 'Tax & Compliance', 'bi-receipt-cutoff', 'Proactive tax strategy and stress-free filing for companies, partnerships and individuals.', true],
            ['GST & Regulatory Compliance', 'Tax & Compliance', 'bi-clipboard2-check', 'End-to-end GST registration, returns and audits — stay compliant without the paperwork burden.', false],
            ['Business Growth Strategy', 'Business Strategy', 'bi-graph-up-arrow', 'Data-driven roadmaps that identify your highest-impact growth levers and how to pull them.', true],
            ['Company Formation & Setup', 'Business Strategy', 'bi-building-add', 'From incorporation to bank accounts and licences — launch your venture the right way.', false],
            ['Audit & Assurance', 'Financial Advisory', 'bi-shield-check', 'Independent statutory and internal audits that build stakeholder confidence.', true],
        ];

        foreach ($services as $i => [$title, $category, $icon, $excerpt, $featured]) {
            Service::query()->create([
                'service_category_id' => $categories[$category],
                'title' => $title,
                'icon' => $icon,
                'excerpt' => $excerpt,
                'content' => '<p>'.$excerpt.'</p><p>Talk to our specialists to see how this service can be tailored to your business.</p>',
                'is_featured' => $featured,
                'sort_order' => $i + 1,
            ]);
        }
    }

    private function whyChooseItems(): void
    {
        if (WhyChooseItem::query()->exists()) {
            return;
        }

        foreach ([
            ['Certified Experts', 'bi-patch-check', 'Chartered Accountants, CPAs and MBAs with 15+ years of hands-on experience.'],
            ['Transparent Pricing', 'bi-tags', 'Fixed, upfront fees with no hidden charges — you always know what you pay for.'],
            ['Dedicated Manager', 'bi-person-badge', 'One senior point of contact who knows your business inside out.'],
            ['On-Time Delivery', 'bi-alarm', 'Deadlines met, filings on schedule — 99.6% on-time record across all clients.'],
        ] as $i => [$title, $icon, $description]) {
            WhyChooseItem::query()->create([
                'title' => $title,
                'icon' => $icon,
                'description' => $description,
                'sort_order' => $i + 1,
            ]);
        }
    }

    private function counters(): void
    {
        if (Counter::query()->exists()) {
            return;
        }

        foreach ([
            ['Happy Clients', 250, null, '+', 'bi-emoji-smile'],
            ['Years of Experience', 15, null, '+', 'bi-award'],
            ['Projects Completed', 1200, null, '+', 'bi-briefcase'],
            ['Client Satisfaction', 98, null, '%', 'bi-heart'],
        ] as $i => [$title, $value, $prefix, $suffix, $icon]) {
            Counter::query()->create([
                'title' => $title,
                'value' => $value,
                'prefix' => $prefix,
                'suffix' => $suffix,
                'icon' => $icon,
                'duration' => 2000,
                'sort_order' => $i + 1,
            ]);
        }
    }

    private function industries(): void
    {
        if (Industry::query()->exists()) {
            return;
        }

        foreach ([
            ['Manufacturing', 'bi-gear-wide-connected'],
            ['Retail & E-commerce', 'bi-cart3'],
            ['Healthcare', 'bi-heart-pulse'],
            ['Real Estate', 'bi-buildings'],
            ['Information Technology', 'bi-cpu'],
            ['Hospitality', 'bi-cup-hot'],
            ['Education', 'bi-mortarboard'],
            ['Logistics', 'bi-truck'],
        ] as $i => [$name, $icon]) {
            Industry::query()->create([
                'name' => $name,
                'icon' => $icon,
                'description' => "Specialised advisory for the {$name} sector.",
                'sort_order' => $i + 1,
            ]);
        }
    }

    private function processSteps(): void
    {
        if (ProcessStep::query()->exists()) {
            return;
        }

        foreach ([
            ['Discovery Call', 'bi-telephone', 'A free consultation to understand your goals, challenges and current position.'],
            ['Analysis & Planning', 'bi-clipboard-data', 'We audit your financials and build a tailored action plan with clear milestones.'],
            ['Implementation', 'bi-rocket-takeoff', 'Our specialists execute the plan alongside your team, with weekly progress updates.'],
            ['Review & Growth', 'bi-graph-up', 'Quarterly reviews keep results on track and uncover the next opportunity.'],
        ] as $i => [$title, $icon, $description]) {
            ProcessStep::query()->create([
                'title' => $title,
                'icon' => $icon,
                'description' => $description,
                'sort_order' => $i + 1,
            ]);
        }
    }

    private function testimonials(): void
    {
        if (Testimonial::query()->exists()) {
            return;
        }

        foreach ([
            ['Amit Verma', 'Managing Director', 'Verma Textiles Pvt. Ltd.', 'Allied restructured our finances and cut our tax outgo by 22% in the first year. Their team feels like an extension of ours.', 5],
            ['Priya Nair', 'Founder & CEO', 'NairTech Solutions', 'From incorporation to our first funding round, Allied guided every financial decision. Absolutely dependable.', 5],
            ['Rohan Mehta', 'CFO', 'Mehta Logistics', 'The GST compliance burden disappeared overnight. Filings are always on time and audits are stress-free now.', 5],
            ['Sunita Rao', 'Owner', 'Rao Hospitality Group', 'Their growth strategy work helped us open two new locations profitably. Practical advice, not just reports.', 4],
            ['Karan Singh', 'Director', 'Singh Realty', 'Professional, responsive and genuinely invested in our success. The dedicated manager model works brilliantly.', 5],
        ] as $i => [$name, $designation, $company, $content, $rating]) {
            Testimonial::query()->create([
                'name' => $name,
                'designation' => $designation,
                'company' => $company,
                'content' => $content,
                'rating' => $rating,
                'sort_order' => $i + 1,
            ]);
        }
    }

    private function team(): void
    {
        if (Team::query()->exists()) {
            return;
        }

        foreach ([
            ['Rajesh Sharma', 'Founder & Managing Partner', 'Chartered Accountant with 18 years across audit, tax and corporate finance.'],
            ['Meera Iyer', 'Head of Tax Advisory', 'Specialist in direct & indirect taxation for SMEs and startups.'],
            ['Vikram Desai', 'Lead Business Strategist', 'Ex-Big-4 consultant focused on growth strategy and operational excellence.'],
            ['Ananya Kulkarni', 'Audit & Assurance Partner', 'Leads statutory and internal audit engagements across manufacturing and retail.'],
        ] as $i => [$name, $designation, $bio]) {
            Team::query()->create([
                'name' => $name,
                'designation' => $designation,
                'bio' => $bio,
                'social_links' => ['linkedin' => 'https://linkedin.com/company/alliedbusiness'],
                'sort_order' => $i + 1,
            ]);
        }
    }

    private function faqs(): void
    {
        if (Faq::query()->exists()) {
            return;
        }

        foreach ([
            ['What services does Allied Business Consultancy offer?', 'We provide accounting & bookkeeping, tax planning & filing, GST compliance, audit & assurance, company formation and business growth strategy — all under one roof.', 'General'],
            ['How do I get started?', 'Book a free 30-minute discovery call. We will understand your requirements and recommend the right engagement model — no obligations.', 'General'],
            ['What are your fees?', 'We work on transparent fixed fees agreed upfront. After the discovery call you receive a written quote — no hourly surprises, no hidden charges.', 'Pricing'],
            ['Can you take over from my current accountant?', 'Yes. We handle the entire transition including records handover, pending filings and system migration, typically within two weeks.', 'Services'],
            ['Do you work with startups?', 'Absolutely — from incorporation and compliance calendars to investor-ready financials, our startup desk supports you at every stage.', 'Services'],
            ['How quickly do you respond to queries?', 'Every client has a dedicated account manager. Standard queries are answered within one business day; urgent compliance matters the same day.', 'Support'],
        ] as $i => [$question, $answer, $category]) {
            Faq::query()->create([
                'question' => $question,
                'answer' => '<p>'.$answer.'</p>',
                'category' => $category,
                'sort_order' => $i + 1,
            ]);
        }
    }

    private function clients(): void
    {
        if (Client::query()->exists()) {
            return;
        }

        // Placeholder logo records — replace logos via Admin → Clients
        foreach ([
            'Verma Textiles', 'NairTech', 'Mehta Logistics', 'Rao Hospitality',
            'Singh Realty', 'GreenLeaf Organics', 'Apex Manufacturing', 'BlueOcean Retail',
        ] as $i => $name) {
            Client::query()->create([
                'name' => $name,
                'sort_order' => $i + 1,
            ]);
        }
    }
}
