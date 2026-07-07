@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Tax Audit Services',
    'crumb' => 'Tax Audit',
    'category' => ['label' => 'Audit & Assurance', 'slug' => 'audit-assurance'],
    'eyebrow_icon' => 'bi-clipboard-check',
    'seo_title' => 'Tax Audit u/s 44AB',
    'seo_description' => 'Section 44AB tax audits by experienced CAs — Form 3CA/3CB-3CD prepared clause by clause, filed before 30 September, with disallowance risks flagged in advance.',
    'intro' => 'Cross the turnover line, and the Income Tax Act wants a tax audit. We handle Section 44AB end-to-end — every 3CD clause examined, disallowance risks flagged early, and the report e-filed before the deadline.',
    'chips' => [
        ['bi-patch-check-fill', 'Sec 44AB Specialists'],
        ['bi-calendar-check-fill', 'Filed Before 30 September'],
        ['bi-shield-fill-check', 'Disallowance Risks Flagged'],
    ],
    'illustration' => [
        ['bi-calculator', 'Turnover & Applicability Checked'],
        ['bi-journal-check', 'Books Examined Clause-wise'],
        ['bi-file-earmark-text', 'Form 3CD Prepared'],
        ['bi-award', 'Audit Report E-Filed!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is a tax audit?', 'An audit of your books mandated by Section 44AB of the Income Tax Act once turnover crosses set limits — reported to the department in Form 3CA/3CB with the detailed 44-clause statement in Form 3CD.'],
        ['bi-people', 'Who does it apply to?', 'Businesses beyond ₹1 crore turnover (₹10 crore when cash dealings stay within 5%), professionals beyond ₹50 lakh receipts, and presumptive-scheme users who declare lower-than-deemed profits.'],
        ['bi-graph-up-arrow', 'Why does quality matter?', 'Form 3CD is a self-declaration map for the assessing officer — cash payments, TDS defaults, loans in cash, related-party dealings. A carelessly filled 3CD invites scrutiny; a well-prepared one closes doors.'],
    ],
    'benefits_title' => 'What a Careful Tax Audit Protects',
    'benefits' => [
        ['bi-shield-check', 'Penalty Protection', 'On-time filing avoids the 271B penalty — 0.5% of turnover up to ₹1.5 lakh.'],
        ['bi-search-heart', 'Disallowances Pre-Empted', '40A(3) cash payments, 43B dues and TDS defaults surface before the officer finds them.'],
        ['bi-file-earmark-check', 'Clean 3CD Record', 'Precise clause-wise reporting that doesn\'t volunteer problems you don\'t have.'],
        ['bi-calculator', 'Accurate Tax Position', 'Depreciation, ICDS adjustments and allowances verified against the Act.'],
        ['bi-arrow-left-right', 'Return Consistency', 'The ITR, 3CD and books tell one story — the single best scrutiny-avoidance strategy.'],
        ['bi-bank', 'Credibility Dividend', 'Tax-audited financials double as bank-grade documents for credit facilities.'],
    ],
    'eligibility_eyebrow' => 'Applicability',
    'eligibility_title' => 'Who Needs a Tax Audit u/s 44AB?',
    'eligibility' => [
        ['bi-shop', 'Businesses', 'Turnover above ₹1 crore — relaxed to ₹10 crore when cash receipts AND payments each stay within 5%.'],
        ['bi-person-badge', 'Professionals', 'Gross receipts above ₹50 lakh from the profession during the year.'],
        ['bi-percent', 'Presumptive Opt-Outs', 'Declaring profits below the deemed 8%/6% (44AD) or 50% (44ADA) while exceeding the basic exemption.'],
        ['bi-calendar-range', 'Due Date', 'Audit report to be filed by 30 September; the ITR follows by 31 October.'],
    ],
    'callout' => 'Digital-first businesses often qualify for the ₹10 crore relaxed limit — we verify the 5% cash test before assuming an audit is due.',
    'documents' => [
        ['bi-journal', 'Books of Account', 'ledgers, cash book and software backup'],
        ['bi-file-earmark-bar-graph', 'Financial Statements', 'P&L and balance sheet for the year'],
        ['bi-bank', 'Bank Statements', 'all business accounts for the full year'],
        ['bi-receipt', 'GST Returns & Reconciliation', 'GSTR-1/3B with books-to-returns matching'],
        ['bi-percent', 'TDS Returns & Challans', 'deduction, deposit and filing proofs'],
        ['bi-cash-stack', 'Loan Statements', 'with 269SS/269T mode-of-transaction details'],
        ['bi-building', 'Fixed Asset Register', 'for depreciation under the Income Tax Act'],
        ['bi-people', 'Related-Party Details', 'transactions with specified persons (40A(2)(b))'],
    ],
    'process_note' => 'Start by August — quality 3CD work needs runway before 30 September',
    'process_title' => 'The Tax Audit in 5 Structured Steps',
    'process' => [
        ['bi-calculator', 'Applicability Check', 'Turnover, cash-percentage and presumptive tests decide if and which audit applies.'],
        ['bi-folder-check', 'Data Collection', 'Books, statements, returns and registers gathered against our 3CD checklist.'],
        ['bi-search', 'Examination', 'Cash payments, TDS compliance, loans, stock and ICDS points tested clause by clause.'],
        ['bi-file-earmark-text', 'Form 3CA/3CB-3CD', 'The report is drafted, reviewed with you, and finalised with UDIN.'],
        ['bi-patch-check', 'E-Filing & Acceptance', 'Uploaded on the portal and accepted from your login — ready for the ITR.'],
    ],
    'faqs' => [
        ['What is the turnover limit for tax audit?', 'For businesses, ₹1 crore — raised to ₹10 crore where both cash receipts and cash payments stay within 5% of totals. For professionals, ₹50 lakh of gross receipts.'],
        ['What is the penalty for missing the tax audit?', 'Section 271B: 0.5% of turnover or gross receipts, capped at ₹1.5 lakh — unless reasonable cause is shown. The bigger cost is usually the scrutiny risk of late, rushed filings.'],
        ['What is the difference between Form 3CA and 3CB?', 'Form 3CA applies when your accounts are already audited under another law (like the Companies Act); Form 3CB applies otherwise. Both carry Form 3CD, the detailed particulars statement.'],
        ['I file under presumptive taxation. Do I need a tax audit?', 'Not while you declare the deemed profit or more. Declare less (with income above the exemption limit), and audit applies — 44AD users also face a five-year lock-out from the scheme after opting down.'],
        ['What does Form 3CD actually report?', 'Forty-plus clauses: nature of business, books maintained, cash transactions, TDS compliance, loans and repayments, related-party payments, stock valuation, ICDS adjustments and more. It\'s the department\'s x-ray of your year.'],
        ['Does a company need both statutory and tax audit?', 'Yes, when above 44AB limits — they are separate audits under separate laws, though efficiently done together. Form 3CA simply references the statutory audit.'],
        ['What are the common disallowances a tax audit catches?', 'Cash payments over ₹10,000 (40A(3)), unpaid statutory dues (43B), TDS shortfalls triggering 30% disallowance (40(a)(ia)), and cash loans breaching 269SS/269T — all flagged and fixed before filing.'],
        ['What if I miss the 30 September deadline?', 'File as soon as possible with the audit report — penalty exposure exists but reasonable-cause relief is available in genuine cases. Talk to us immediately rather than skipping the year.'],
    ],
    'cta' => ['heading' => 'Turnover Crossed the Line? Sort Your Tax Audit Now.', 'sub' => 'Clause-by-clause 3CD care, filed well before the deadline.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
