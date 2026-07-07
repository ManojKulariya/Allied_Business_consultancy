@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Income Tax Return Filing',
    'crumb' => 'ITR Filing',
    'category' => ['label' => 'Income Tax Services', 'slug' => 'income-tax-services'],
    'eyebrow_icon' => 'bi-cash-coin',
    'seo_title' => 'Income Tax Return (ITR) Filing',
    'seo_description' => 'Expert ITR filing for salaried, business and capital-gains income — correct form selection, old vs new regime comparison, maximum refunds and error-free e-verification.',
    'intro' => 'File the right return, in the right form, under the right regime. Our experts prepare your ITR from your documents, compare old vs new regime, claim every eligible deduction and track your refund to your bank.',
    'chips' => [
        ['bi-patch-check-fill', 'CA-Reviewed Filing'],
        ['bi-arrow-down-left-circle', 'Maximum Refund'],
        ['bi-clock-history', 'Same-Week Filing'],
    ],
    'illustration' => [
        ['bi-folder-check', 'Documents & Form 16 Received'],
        ['bi-arrow-left-right', 'AIS / 26AS Reconciled'],
        ['bi-calculator', 'Best Regime Selected'],
        ['bi-award', 'ITR Filed & E-Verified!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is ITR filing?', 'Your annual declaration of income, deductions and taxes to the Income Tax Department. The correct form (ITR-1 to ITR-7) depends on your income sources — salary, business, capital gains, house property or foreign assets.'],
        ['bi-people', 'Who should file?', 'Anyone above the basic exemption limit — and even below it, filing pays: refunds of TDS, visa and loan documentation, and carrying forward losses are available only to filers.'],
        ['bi-graph-up-arrow', 'Why file with experts?', 'Mismatches with AIS/26AS are the top notice trigger. We reconcile every entry, pick the tax-optimal regime and claim deductions you didn\'t know applied — usually paying for the service in savings.'],
    ],
    'benefits_title' => 'Why Timely, Accurate ITR Filing Pays',
    'benefits' => [
        ['bi-arrow-down-left-circle', 'Claim Your Refund', 'Excess TDS on salary, interest or property comes back only when you file.'],
        ['bi-bank', 'Loan & Visa Ready', 'Banks and embassies routinely ask for 2–3 years of ITRs as income proof.'],
        ['bi-graph-down-arrow', 'Carry Forward Losses', 'Capital-market and business losses offset future gains — but only if filed on time.'],
        ['bi-shield-check', 'Avoid Notices & Penalties', 'Reconciled filing prevents 234F late fees, interest and mismatch notices.'],
        ['bi-calculator', 'Regime Optimisation', 'We compute old vs new regime both ways and file whichever saves you more.'],
        ['bi-award', 'Clean Financial Record', 'A consistent filing history builds credibility for tenders, funding and immigration.'],
    ],
    'eligibility_title' => 'Who Should File ITR?',
    'eligibility' => [
        ['bi-person-badge', 'Salaried Individuals', 'Income above the exemption limit, multiple employers, or TDS refunds to claim.'],
        ['bi-shop', 'Business & Professionals', 'Proprietors, freelancers and consultants — including presumptive scheme (44AD/44ADA) filers.'],
        ['bi-graph-up', 'Investors & Property Owners', 'Capital gains from shares, mutual funds, crypto or property, and rental income.'],
        ['bi-globe', 'Mandatory Cases', 'Foreign assets or income, high-value transactions, or TDS/TCS above thresholds — filing is compulsory regardless of income.'],
    ],
    'callout' => 'Due dates: 31 July (individuals) · 31 October (audit cases) — belated returns cost up to ₹5,000 under Section 234F.',
    'documents' => [
        ['bi-credit-card-2-front', 'PAN & Aadhaar', 'linked and active'],
        ['bi-file-earmark-text', 'Form 16 / 16A', 'from employer and other deductors'],
        ['bi-arrow-left-right', 'AIS & Form 26AS', 'we download these from the portal'],
        ['bi-bank', 'Bank Statements', 'interest income and account details'],
        ['bi-graph-up', 'Capital Gains Statements', 'broker P&L, mutual fund and property deals'],
        ['bi-piggy-bank', 'Investment Proofs', '80C, 80D, NPS, home-loan interest'],
        ['bi-house-door', 'Rental Details', 'rent received and municipal taxes paid'],
        ['bi-journal', 'Business Financials', 'P&L and balance sheet, for business income'],
    ],
    'process_note' => 'Typical turnaround: 2–4 working days from complete documents',
    'process_title' => 'ITR Filing in 5 Simple Steps',
    'process' => [
        ['bi-chat-dots', 'Free Consultation', 'We identify your income sources and the correct ITR form.'],
        ['bi-folder-check', 'Document Collection', 'Send your Form 16 and proofs — we pull AIS/26AS ourselves.'],
        ['bi-arrow-left-right', 'Reconciliation & Computation', 'Every AIS entry matched; tax computed under both regimes.'],
        ['bi-file-earmark-check', 'Review & Approval', 'A clear computation sheet shows your tax or refund before filing.'],
        ['bi-patch-check', 'Filing & E-Verification', 'Return filed, e-verified, and refund tracked to your account.'],
    ],
    'faqs' => [
        ['What is the last date to file my ITR?', '31 July following the financial year for most individuals, 31 October for audit cases. A belated return is allowed until 31 December with late fees — and loses some benefits like loss carry-forward.'],
        ['What is the penalty for late filing?', 'A late fee of ₹5,000 under Section 234F (₹1,000 if total income is under ₹5 lakh), plus interest on unpaid tax and loss of carry-forward benefits.'],
        ['Should I choose the old or new tax regime?', 'It depends on your deductions — HRA, 80C, 80D, home-loan interest and NPS tilt the maths. We compute both and file the cheaper one; salaried taxpayers can switch regimes each year.'],
        ['Which ITR form applies to me?', 'ITR-1 for simple salary income up to ₹50 lakh; ITR-2 adds capital gains and multiple properties; ITR-3 for business income; ITR-4 for presumptive schemes. Choosing wrong makes the return defective — we get it right.'],
        ['Do I need to file if my income is below the exemption limit?', 'Not always mandatory, but often worthwhile — to claim TDS refunds, maintain records for visas and loans, or when high-value transactions make filing compulsory.'],
        ['What happens after filing?', 'E-verify within 30 days (we do it with you), then the CPC processes the return and issues an intimation under 143(1). Refunds typically arrive within a few weeks of processing.'],
        ['I missed reporting some income in a filed return. What now?', 'A revised return can be filed up to 31 December of the assessment year. Beyond that, ITR-U (updated return) allows correction for up to four years with additional tax.'],
        ['Do you handle crypto and foreign income?', 'Yes — VDA schedules for crypto (taxed at 30%), foreign asset disclosure in Schedule FA, and DTAA relief claims are part of our standard practice.'],
    ],
    'cta' => ['heading' => 'Ready to File Your ITR the Smart Way?', 'sub' => 'Right form, best regime, maximum refund — reviewed by experts.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
