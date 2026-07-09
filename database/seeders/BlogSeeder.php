<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Database\Seeder;

/**
 * Starter blog content — categories and articles are fully editable in
 * the admin panel. Idempotent: skips seeding once any blog content exists
 * so admin edits are never overwritten on re-seed.
 */
class BlogSeeder extends Seeder
{
    private const CATEGORIES = [
        'GST & Tax Updates' => 'GST registration, filing deadlines, rate changes and compliance updates explained in plain language.',
        'Business Registration' => 'Company registration, LLP formation and startup incorporation guides for entrepreneurs in India.',
        'Compliance & Regulatory' => 'ROC filings, MCA compliance, statutory deadlines and regulatory changes businesses need to track.',
        'Growth & Strategy' => 'Financial planning, virtual CFO insights and practical strategy advice for growing businesses.',
    ];

    public function run(): void
    {
        if (Blog::query()->exists()) {
            return;
        }

        $categories = [];
        $order = 0;

        foreach (self::CATEGORIES as $name => $description) {
            $categories[$name] = BlogCategory::query()->firstOrCreate(
                ['name' => $name],
                ['sort_order' => ++$order, 'status' => 1, 'meta_description' => $description]
            );
        }

        $posts = $this->posts($categories);

        foreach ($posts as $index => $post) {
            Blog::query()->create($post + [
                'published_at' => now()->subDays((count($posts) - $index) * 4),
                'status' => 1,
            ]);
        }
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function posts(array $categories): array
    {
        return [
            [
                'blog_category_id' => $categories['GST & Tax Updates']->id,
                'title' => '5 Common GST Filing Mistakes and How to Avoid Them',
                'excerpt' => 'From mismatched input credit to missed nil returns — the errors we see most often in GST filings, and the simple habits that prevent them.',
                'is_featured' => true,
                'tags' => ['GST', 'Tax Filing', 'Compliance'],
                'content' => <<<'HTML'
                    <p>Most GST notices trace back to a small handful of avoidable mistakes. After reviewing hundreds of filings, here are the five we see most often — and exactly how to prevent each one.</p>

                    <h2>1. Claiming Input Tax Credit Before It Appears in GSTR-2B</h2>
                    <p>Since the introduction of GSTR-2B, input tax credit can only be claimed once a supplier's invoice reflects in your auto-drafted statement. Claiming credit based on an invoice alone — before the supplier files their own return — is one of the fastest ways to trigger a mismatch notice.</p>
                    <p><strong>The fix:</strong> reconcile your purchase register against GSTR-2B every month before filing GSTR-3B, not after.</p>

                    <h2>2. Treating "No Sales" as "No Filing Required"</h2>
                    <p>A month with zero transactions still requires a nil return. Businesses that skip filing during a quiet month often don't realise the late fee clock is running until it has already added up.</p>

                    <h3>Why this catches people off guard</h3>
                    <p>Unlike income tax, GST has no informal "below threshold, skip it" exception for registered businesses — registration itself creates the filing obligation, active or not.</p>

                    <h2>3. Misclassifying Goods Under the Wrong HSN Code</h2>
                    <p>An incorrect HSN code can apply the wrong tax rate without anyone noticing until an audit. Cross-check your product classifications annually, especially after any rate notification.</p>

                    <h2>4. Missing the Annual ITC Reconciliation Deadline</h2>
                    <p>Input tax credit for a financial year must be claimed by 30 November of the following year, or with your annual return — whichever is earlier. Credits missed by this date are gone for good.</p>

                    <h2>5. Ignoring Reverse Charge Liability</h2>
                    <p>Payments to unregistered vendors, certain imports, and specified services attract reverse charge — meaning you, not your supplier, owe the tax. This is one of the most commonly overlooked liabilities in GST compliance.</p>

                    <blockquote>A reconciled GSTR-2B before every filing catches four of these five mistakes automatically — it is the single highest-leverage habit in GST compliance.</blockquote>

                    <p>If any of this sounds familiar, our GST Return Filing service builds exactly this reconciliation into every monthly cycle — <a href="/services/gst-return-filing">see how it works</a>.</p>
                    HTML,
            ],
            [
                'blog_category_id' => $categories['Business Registration']->id,
                'title' => 'Private Limited vs LLP: Which Structure Fits Your Startup?',
                'excerpt' => 'Both offer limited liability, but they solve different problems. A practical comparison for founders deciding between the two most popular startup structures.',
                'is_featured' => false,
                'tags' => ['Private Limited', 'LLP', 'Startup'],
                'content' => <<<'HTML'
                    <p>Founders often ask us the same question in the first five minutes of a consultation: "Private Limited or LLP?" The honest answer is that it depends entirely on what you're optimising for.</p>

                    <h2>Choose a Private Limited Company If You Plan to Raise Investment</h2>
                    <p>Venture capital and angel investors overwhelmingly prefer private limited companies. The shareholding structure, ESOP mechanics and exit pathways are all built around this format — trying to raise institutional capital through an LLP is possible but unusual and often slower.</p>

                    <h2>Choose an LLP If You Want Lower Compliance Costs</h2>
                    <p>LLPs skip the mandatory board meetings, statutory registers and heavier annual filings that companies carry. Below ₹40 lakh turnover, an LLP doesn't even need a statutory audit. For service firms, consultancies and professional practices, this lighter load is often the deciding factor.</p>

                    <h3>The tax picture is nearly identical</h3>
                    <p>Both structures pay a flat 30% corporate tax rate (plus surcharge and cess), so tax efficiency rarely tips the decision either way.</p>

                    <h2>What About Converting Later?</h2>
                    <p>An LLP can convert into a private limited company as the business grows — it's a well-trodden path, not a wall. Many founders deliberately start as an LLP to keep early costs down, then convert once a funding round is on the table.</p>

                    <p>Still unsure? Our <a href="/services/private-limited-company-registration">Private Limited Company Registration</a> and <a href="/services/llp-registration">LLP Registration</a> pages break down the requirements for each — or book a free consultation and we'll help you decide based on your actual plans, not just theory.</p>
                    HTML,
            ],
            [
                'blog_category_id' => $categories['Compliance & Regulatory']->id,
                'title' => 'Annual ROC Compliance Checklist for 2026',
                'excerpt' => 'Every form your company needs to file this year, in the order they actually come due — from AOC-4 to the often-forgotten DIR-3 KYC.',
                'is_featured' => false,
                'tags' => ['ROC Compliance', 'MCA', 'Annual Filing'],
                'content' => <<<'HTML'
                    <p>Annual compliance isn't one deadline — it's a sequence of them, each depending on the one before it. Here is the order that keeps everything on track.</p>

                    <h2>Step 1: Hold Your AGM</h2>
                    <p>Most companies must hold their Annual General Meeting by 30 September. Every other date on this list counts backward or forward from this one.</p>

                    <h2>Step 2: File Form ADT-1 (Within 15 Days)</h2>
                    <p>If your auditor was appointed or reappointed at the AGM, this intimation is due within 15 days — easy to forget because it's the first deadline, arriving before the bigger filings.</p>

                    <h2>Step 3: File Form AOC-4 (Within 30 Days)</h2>
                    <p>Your audited financial statements go to the Registrar within 30 days of the AGM. This is the financial half of annual compliance.</p>

                    <h2>Step 4: File Form MGT-7 or MGT-7A (Within 60 Days)</h2>
                    <p>The annual return — covering shareholding, director details and corporate structure — follows within 60 days of the AGM. Small companies and OPCs use the simplified MGT-7A.</p>

                    <h3>Don't forget: DIR-3 KYC is separate and easy to miss</h3>
                    <p>Every director's DIR-3 KYC is due by 30 September each year, regardless of the company's own AGM date. It's tied to the individual DIN, not the company — and missing it deactivates the DIN the very next day, which can stall every other filing above.</p>

                    <blockquote>The single biggest cause of compliance backlogs we see is directors treating DIR-3 KYC as optional because it's "just a KYC update." It isn't optional, and its deadline doesn't move with your AGM.</blockquote>

                    <p>We manage this entire sequence for clients on a fixed annual calendar — see our <a href="/services/annual-roc-filing">Annual ROC Filing</a> and <a href="/services/director-kyc-dir-3">Director KYC</a> services for the details.</p>
                    HTML,
            ],
            [
                'blog_category_id' => $categories['Growth & Strategy']->id,
                'title' => 'How to Build a Financial Model Investors Actually Trust',
                'excerpt' => 'Investors read dozens of models a month. Here is what makes the difference between one that gets questioned and one that gets funded.',
                'is_featured' => false,
                'tags' => ['Financial Modelling', 'Fundraising', 'Startups'],
                'content' => <<<'HTML'
                    <p>A financial model's job isn't to predict the future perfectly — it's to demonstrate that you understand your own business well enough to plan for it. Investors can tell the difference between the two within minutes.</p>

                    <h2>Start From Real Drivers, Not a Growth Curve</h2>
                    <p>The weakest models start with a revenue target and work backward. The strongest start with actual drivers — customer acquisition cost, sales cycle length, churn — and let revenue emerge from those assumptions instead of being imposed on them.</p>

                    <h2>Show Your Assumptions, Don't Hide Them</h2>
                    <p>Every number that feeds into the model should trace back to a stated, editable assumption. A model where changing one input breaks the formulas — or where numbers appear to come from nowhere — is the fastest way to lose an investor's confidence.</p>

                    <h2>Build Three Scenarios, Not One</h2>
                    <p>A base case alone reads as either overconfident or naive. Base, upside and downside scenarios show that you've thought about what could go wrong, and that the business survives more than one version of the future.</p>

                    <h3>The downside case matters more than founders think</h3>
                    <p>Investors often go straight to the downside scenario first — it tells them how the business behaves under stress, which is a better signal of resilience than the upside case ever is.</p>

                    <h2>Keep It in Excel</h2>
                    <p>Fancy modelling software impresses no one. Investors want to open the file, change an assumption, and watch it flow through — which means it needs to be in the tool they already know.</p>

                    <p>Building your first investor-ready model? Our <a href="/services/financial-modelling-projections">Financial Modelling & Projections</a> service is built around exactly this — transparent, defensible, editable.</p>
                    HTML,
            ],
            [
                'blog_category_id' => $categories['GST & Tax Updates']->id,
                'title' => 'Understanding the New MSME / Udyam Classification Limits',
                'excerpt' => 'Micro, small and medium — the investment and turnover thresholds that decide your MSME category, and why the classification matters more than most owners realise.',
                'is_featured' => false,
                'tags' => ['MSME', 'Udyam', 'Business Registration'],
                'content' => <<<'HTML'
                    <p>Your MSME classification isn't just a label — it determines which government schemes, credit facilities and payment protections actually apply to your business.</p>

                    <h2>The Three Tiers</h2>
                    <p>A micro enterprise is defined by investment up to ₹2.5 crore and turnover up to ₹10 crore. Small enterprises extend to ₹25 crore investment and ₹100 crore turnover. Medium enterprises go up to ₹125 crore investment and ₹500 crore turnover. Crossing a threshold in either measure — not just one — moves you up a tier.</p>

                    <h2>Why the Tier You're In Actually Matters</h2>
                    <p>Micro and small enterprises get priority-sector lending status, meaning banks are required to allocate a portion of their lending specifically to this segment. They also benefit most directly from the 45-day payment protection rule, which obligates buyers to pay MSME suppliers within 45 days or face compound interest.</p>

                    <h3>Traders are included too</h3>
                    <p>A common misconception is that Udyam registration is only for manufacturers. Wholesale and retail traders are explicitly eligible and receive the same priority-lending benefits.</p>

                    <h2>Classification Updates Automatically</h2>
                    <p>Because Udyam registration links to your PAN and GST data, your classification updates itself as your investment and turnover figures change — there's no separate renewal filing to remember, though it's worth checking annually that your tier still reflects reality.</p>

                    <p>Not registered yet? It takes a day or two and never expires — see our <a href="/services/msme-udyam-registration">MSME / Udyam Registration</a> service for the full process.</p>
                    HTML,
            ],
            [
                'blog_category_id' => $categories['Growth & Strategy']->id,
                'title' => '7 Signs Your Business Needs a Virtual CFO',
                'excerpt' => 'You don\'t need a full-time CFO to get CFO-level financial thinking. Here are the signals that tell you it\'s time to bring in senior financial leadership.',
                'is_featured' => false,
                'tags' => ['Virtual CFO', 'Financial Leadership', 'Growth'],
                'content' => <<<'HTML'
                    <p>Most growing businesses don't lack financial data — they lack someone senior enough to turn that data into decisions. Here's how to tell when that gap is starting to cost you.</p>

                    <h2>1. Your Numbers Arrive Too Late to Act On</h2>
                    <p>If your P&L for a given month lands weeks after it closes, you're always making decisions on stale information.</p>

                    <h2>2. You Can't Answer "What's Our Cash Runway?" Without Digging</h2>
                    <p>This should be a five-second answer. If it isn't, cash planning is happening reactively rather than by design.</p>

                    <h2>3. Pricing Decisions Are Based on Gut Feel</h2>
                    <p>Growing revenue without knowing true unit economics is how businesses scale their way into a margin problem.</p>

                    <h2>4. You're Fundraising Without a Model Investors Trust</h2>
                    <p>A credible financial model is table stakes for any serious raise — building one under deadline pressure rarely produces your best work.</p>

                    <h2>5. Your Board or Investors Are Asking Questions You Can't Answer Confidently</h2>
                    <p>This is usually the moment founders realise the finance function has outgrown what the current team can deliver.</p>

                    <h2>6. You Have an Accountant, But No One Setting Financial Strategy</h2>
                    <p>Bookkeeping and compliance are necessary but different work from budgeting, forecasting and capital allocation decisions.</p>

                    <h2>7. You're Making Six-Figure Decisions Without a Financial Sounding Board</h2>
                    <p>Hiring, expansion and pricing decisions all get better with a second, financially literate perspective in the room.</p>

                    <blockquote>If three or more of these sound familiar, the gap isn't a hiring problem — it's a leadership gap that a fractional engagement can close immediately.</blockquote>

                    <p>Our <a href="/services/virtual-cfo-services">Virtual CFO Services</a> are built exactly for this stage — senior financial leadership, without the full-time cost.</p>
                    HTML,
            ],
            [
                'blog_category_id' => $categories['Compliance & Regulatory']->id,
                'title' => 'TDS Return Filing: A Practical Guide for Employers',
                'excerpt' => 'Everything an employer needs to know about quarterly TDS compliance — from the ECR filing cycle to the penalties that follow a missed deadline.',
                'is_featured' => false,
                'tags' => ['TDS', 'Payroll', 'Compliance'],
                'content' => <<<'HTML'
                    <p>If your business deducts tax at source from salaries, vendor payments or rent, quarterly TDS return filing is not optional — and the penalties for getting it wrong compound quickly.</p>

                    <h2>The Quarterly Cycle</h2>
                    <p>TDS returns are due four times a year: 31 July, 31 October, 31 January and 31 May, each covering the preceding quarter. Form 24Q handles salary deductions; Form 26Q covers domestic non-salary payments like contractor fees and rent.</p>

                    <h2>Why Reconciliation Matters More Than the Filing Itself</h2>
                    <p>The actual filing is mechanical. What determines whether it goes smoothly is whether your deduction records, challan payments and deductee PANs all agree with each other before you file — mismatches here are what generate defaults on the TRACES portal.</p>

                    <h3>PAN errors are the most common default</h3>
                    <p>An invalid or mismatched PAN doesn't just cause a filing error — it forces 20% TDS deduction under Section 206AA regardless of the deductee's actual tax slab, which then requires correction on both sides.</p>

                    <h2>What Late Filing Actually Costs</h2>
                    <p>Section 234E imposes ₹200 per day until filed, capped at the TDS amount itself. Beyond that, Section 271H allows a penalty of ₹10,000 to ₹1 lakh for filings that are both late and incorrect — the two penalties are independent of each other.</p>

                    <h2>Don't Forget Form 16 / 16A</h2>
                    <p>Once your Q4 return is filed, Form 16 for employees is due by 15 June. Form 16A for non-salary deductions is due within 15 days of each quarterly filing — both generated from the same TRACES data your ECR produces.</p>

                    <p>We handle this full cycle — deduction tracking, ECR filing, challan payment and certificate generation — through our <a href="/services/tds-return-filing">TDS Return Filing</a> service.</p>
                    HTML,
            ],
        ];
    }
}
