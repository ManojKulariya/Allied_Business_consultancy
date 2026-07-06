<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;

/**
 * The 12-category Services navigation architecture.
 * Replaces the early 3-category demo set (removed only if still untouched)
 * and is idempotent for the new structure — existing categories/services
 * keep any admin edits.
 */
class ServicesArchitectureSeeder extends Seeder
{
    /** Early demo rows to retire (exact seeded names only). */
    private const OLD_DEMO_CATEGORIES = ['Financial Advisory', 'Tax & Compliance', 'Business Strategy'];

    /**
     * category => [icon, [service, featured?]]
     */
    private const ARCHITECTURE = [
        'Business Registration' => ['bi-building-add', [
            ['Private Limited Company Registration', true],
            ['LLP Registration', false],
            ['One Person Company Registration', false],
            ['Partnership Firm Registration', false],
            ['Sole Proprietorship Registration', false],
        ]],
        'GST Services' => ['bi-receipt', [
            ['GST Registration', true],
            ['GST Return Filing', false],
            ['GST Annual Return (GSTR-9)', false],
            ['GST Cancellation & Revocation', false],
        ]],
        'Income Tax Services' => ['bi-cash-coin', [
            ['Income Tax Return Filing', true],
            ['Tax Planning & Advisory', false],
            ['TDS Return Filing', false],
            ['Income Tax Notice Reply', false],
        ]],
        'Accounting & Bookkeeping' => ['bi-journal-check', [
            ['Monthly Bookkeeping', false],
            ['Financial Statement Preparation', false],
            ['Virtual CFO Services', true],
        ]],
        'Audit & Assurance' => ['bi-shield-check', [
            ['Statutory Audit', false],
            ['Internal Audit', false],
            ['Tax Audit', false],
        ]],
        'ROC & MCA Compliance' => ['bi-clipboard2-check', [
            ['Annual ROC Filing', false],
            ['Director KYC (DIR-3)', false],
            ['Company Name Change', false],
            ['Registered Office Change', false],
        ]],
        'Payroll & HR Services' => ['bi-people', [
            ['Payroll Processing', false],
            ['PF & ESI Registration', false],
            ['PF & ESI Return Filing', false],
        ]],
        'Business Consultancy' => ['bi-briefcase', [
            ['Business Growth Strategy', true],
            ['Financial Modelling & Projections', false],
            ['Startup Advisory', false],
        ]],
        'Loan & Finance Assistance' => ['bi-bank', [
            ['Project Report for Bank Loan', false],
            ['Working Capital Assistance', false],
            ['CMA Data Preparation', false],
        ]],
        'Trademark & Legal Services' => ['bi-award', [
            ['Trademark Registration', true],
            ['Trademark Objection Reply', false],
            ['Legal Drafting & Agreements', false],
        ]],
        'Digital Signature Services' => ['bi-pen', [
            ['Class 3 Digital Signature', false],
            ['DGFT Digital Signature', false],
            ['DSC Renewal', false],
        ]],
        'Licenses & Registrations' => ['bi-card-checklist', [
            ['FSSAI License', false],
            ['Import Export Code (IEC)', false],
            ['MSME / Udyam Registration', true],
            ['Shop & Establishment License', false],
        ]],
    ];

    public function run(): void
    {
        $this->retireOldDemoData();

        $categoryOrder = 0;

        foreach (self::ARCHITECTURE as $categoryName => [$icon, $services]) {
            $categoryOrder++;

            $category = ServiceCategory::query()->firstOrCreate(
                ['name' => $categoryName],
                [
                    'icon' => $icon,
                    'description' => "Professional {$categoryName} solutions handled end-to-end by our experts.",
                    'sort_order' => $categoryOrder,
                    'status' => 1,
                ]
            );

            foreach (array_values($services) as $index => [$title, $featured]) {
                Service::query()->firstOrCreate(
                    ['title' => $title],
                    [
                        'service_category_id' => $category->id,
                        'excerpt' => "Fast, compliant and fully managed {$title} with transparent pricing and a dedicated expert.",
                        'content' => "<p>Our specialists manage the complete {$title} process — documentation, filings and follow-ups — so you can stay focused on your business.</p><p>Contact us for a free consultation and a fixed-fee quote.</p>",
                        'is_featured' => $featured,
                        'sort_order' => $index + 1,
                        'status' => 1,
                    ]
                );
            }
        }

        cache()->forget('services.menu');
    }

    /**
     * Force-delete the early demo categories (and their services) so they
     * don't appear alongside the real architecture. Runs only while a
     * category still carries its original seeded name.
     */
    private function retireOldDemoData(): void
    {
        ServiceCategory::query()
            ->whereIn('name', self::OLD_DEMO_CATEGORIES)
            ->get()
            ->each(function (ServiceCategory $category) {
                $category->services()->withTrashed()->forceDelete();
                $category->forceDelete();
            });
    }
}
