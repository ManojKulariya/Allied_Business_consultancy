@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Working Capital Assistance',
    'crumb' => 'Working Capital Assistance',
    'category' => ['label' => 'Loan & Finance Assistance', 'slug' => 'loan-finance-assistance'],
    'eyebrow_icon' => 'bi-arrow-repeat',
    'seo_title' => 'Working Capital Loan Assistance',
    'seo_description' => 'End-to-end working capital loan assistance — cash credit, overdraft and CGTMSE-backed limits. Documentation, CMA data and bank liaison handled by experts.',
    'intro' => 'Free the cash trapped in your operating cycle. We assess your working capital gap, prepare the complete loan proposal and CMA data, and liaise with banks until your cash credit or overdraft limit is sanctioned.',
    'chips' => [
        ['bi-arrow-repeat', 'Cash Credit & OD'],
        ['bi-shield-check', 'CGTMSE Guidance'],
        ['bi-bank', 'Bank Liaison Included'],
    ],
    'illustration' => [
        ['bi-calculator', 'Working Capital Gap Assessed'],
        ['bi-file-earmark-bar-graph', 'CMA Data Prepared'],
        ['bi-bank', 'Proposal Submitted to Bank'],
        ['bi-award', 'Limit Sanctioned!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is working capital assistance?', 'Support in securing short-term credit — cash credit, overdraft or working capital demand loans — that funds your day-to-day operating cycle: inventory, receivables and vendor payments.'],
        ['bi-arrow-repeat', 'Why does the operating cycle need funding?', 'Most businesses pay suppliers before customers pay them. That gap — buying inventory, extending credit to buyers, waiting for collection — is exactly what working capital finance bridges.'],
        ['bi-graph-up-arrow', 'Why get assistance rather than apply directly?', 'Banks assess working capital limits against specific ratios and CMA data formats. Correctly presented, a proposal moves faster and often secures a better limit than an ad-hoc application.'],
    ],
    'benefits_title' => 'What Working Capital Assistance Delivers',
    'benefits' => [
        ['bi-arrow-repeat', 'Smoother Cash Flow', 'Bridge the gap between paying suppliers and collecting from customers without strain.'],
        ['bi-graph-up', 'Room to Grow', 'Take on larger orders and longer payment terms without cash constraints holding you back.'],
        ['bi-bank', 'Right-Sized Limits', 'Correctly assessed working capital gap means neither under-funding nor over-borrowing.'],
        ['bi-shield-check', 'CGTMSE-Backed Options', 'Collateral-free limits explored for eligible MSMEs under the credit guarantee scheme.'],
        ['bi-clock-history', 'Faster Sanction', 'Complete documentation and CMA data reduce back-and-forth with the bank.'],
        ['bi-percent', 'Competitive Terms', 'A well-presented proposal supports better negotiation on interest rates and margins.'],
    ],
    'eligibility_title' => 'Who Should Apply for Working Capital?',
    'eligibility' => [
        ['bi-shop', 'Trading & Manufacturing Businesses', 'Inventory-heavy operations with a natural cash-to-cash gap.'],
        ['bi-graph-up', 'Growing Order Books', 'Winning larger contracts than current cash flow comfortably supports.'],
        ['bi-people', 'Extended Receivable Cycles', 'Customers paying on 30–90 day terms while suppliers expect faster payment.'],
        ['bi-arrow-repeat', 'Seasonal Businesses', 'Cyclical demand requiring a flexible limit rather than a fixed term loan.'],
    ],
    'callout' => 'Eligible MSMEs can often access working capital limits without collateral through CGTMSE-backed guarantee schemes.',
    'documents' => [
        ['bi-file-earmark-bar-graph', 'Financial Statements', 'last 2–3 years, audited or provisional'],
        ['bi-bank', 'Bank Statements', 'last 12 months of operating account activity'],
        ['bi-receipt', 'GST Returns', 'recent filings to substantiate turnover'],
        ['bi-people', 'Debtor & Creditor Ageing', 'receivables and payables outstanding'],
        ['bi-box-seam', 'Stock Statement', 'current inventory position and valuation'],
        ['bi-award', 'Business Registration Proof', 'incorporation, GST, Udyam as applicable'],
        ['bi-person-vcard', 'KYC Documents', 'of proprietor / partners / directors'],
        ['bi-house-door', 'Collateral Details', 'if offering security, property/asset documents'],
    ],
    'process_note' => 'Typical timeline: 2–4 weeks from application to sanction, bank-dependent',
    'process_title' => 'Assistance Process in 5 Simple Steps',
    'process' => [
        ['bi-chat-dots', 'Free Consultation', 'We assess your operating cycle and estimate the working capital gap.'],
        ['bi-calculator', 'Gap Assessment', 'Inventory, receivable and payable cycles analysed to size the right limit.'],
        ['bi-file-earmark-bar-graph', 'CMA Data & Proposal', 'Financial data prepared in bank format with a supporting proposal.'],
        ['bi-bank', 'Bank Liaison', 'Application submitted and we coordinate with the bank through processing.'],
        ['bi-patch-check', 'Sanction & Disbursement', 'Limit sanctioned and documentation completed for drawdown.'],
    ],
    'faqs' => [
        ['What is the difference between cash credit and overdraft?', 'Cash credit is extended against stock and receivables as security, revolving up to a sanctioned limit; overdraft is typically extended against the account relationship or other collateral, offering similar flexible drawdown.'],
        ['How is my working capital limit calculated?', 'Banks typically use methods based on your operating cycle, projected turnover and holding levels of stock and receivables — we compute this in advance so the ask is well-supported.'],
        ['Can I get working capital finance without collateral?', 'Yes, for eligible MSMEs — the CGTMSE scheme allows banks to extend collateral-free credit up to specified limits, backed by a government guarantee. We assess your eligibility upfront.'],
        ['What is CMA data and why does the bank need it?', 'Credit Monitoring Arrangement data is the standardised projected-and-actual financial format Indian banks use to assess working capital proposals — our CMA Data Preparation service builds this alongside your application.'],
        ['How long does sanction typically take?', 'Two to four weeks from a complete application, depending on the bank\'s internal process and loan size — we track the file and follow up throughout to avoid unnecessary delays.'],
        ['Can an existing limit be enhanced as my business grows?', 'Yes — enhancement requests follow a similar process to fresh sanction, using updated financials and turnover to justify the higher limit.'],
        ['What interest rates apply to working capital loans?', 'Rates vary by bank, borrower profile and whether the facility is secured or CGTMSE-backed — part of our assistance includes helping you compare and negotiate terms across lenders.'],
        ['Is working capital assistance only for existing businesses?', 'Primarily yes, since it is assessed against an operating cycle — new businesses typically start with term loans or MUDRA financing, transitioning to working capital limits as trading history builds.'],
    ],
    'cta' => ['heading' => 'Ready to Free Up Your Working Capital?', 'sub' => 'Right-sized limits, complete documentation, faster sanction.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
