@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Project Report for Bank Loan',
    'crumb' => 'Project Report',
    'category' => ['label' => 'Loan & Finance Assistance', 'slug' => 'loan-finance-assistance'],
    'eyebrow_icon' => 'bi-file-earmark-bar-graph',
    'seo_title' => 'Project Report for Bank Loan',
    'seo_description' => 'Bank-ready project reports with viability analysis, projected financials and ratio workings — prepared to CMA and bank formats for faster loan sanction.',
    'intro' => 'The document that decides whether your loan gets sanctioned. We prepare bank-ready project reports — viability analysis, projected financials and every ratio the credit team checks — in the exact format your lender expects.',
    'chips' => [
        ['bi-bank', 'Bank-Format Ready'],
        ['bi-graph-up-arrow', 'Viability Analysis Included'],
        ['bi-clock-history', '5–7 Working Days'],
    ],
    'illustration' => [
        ['bi-clipboard-data', 'Project Details Gathered'],
        ['bi-calculator', 'Viability & Ratios Computed'],
        ['bi-file-earmark-bar-graph', 'Report Drafted'],
        ['bi-award', 'Loan-Ready Report Delivered!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is a project report?', 'A structured document presenting your business or project\'s viability to a lender — promoter background, technical feasibility, cost of project, means of finance, and projected financials over the loan tenure.'],
        ['bi-bank', 'Why does it matter to the bank?', 'It is the primary basis on which a credit officer assesses repayment capacity. A well-reasoned report with realistic assumptions and correct ratios moves faster through sanction than a generic template.'],
        ['bi-graph-up-arrow', 'Why professional preparation?', 'Banks read dozens of these a month and know a padded projection on sight. Credible assumptions, correctly computed ratios (DSCR, current ratio) and clean formatting are what actually build lender confidence.'],
    ],
    'benefits_title' => 'What a Strong Project Report Delivers',
    'benefits' => [
        ['bi-bank', 'Faster Sanction', 'A complete, correctly formatted report avoids the back-and-forth that stalls applications.'],
        ['bi-graph-up', 'Higher Approval Likelihood', 'Realistic, well-supported projections build the credit team\'s confidence in repayment.'],
        ['bi-calculator', 'Correct Ratio Workings', 'DSCR, current ratio and other bank metrics computed the way lenders expect.'],
        ['bi-cash-coin', 'Right-Sized Loan Ask', 'Cost of project and means of finance mapped accurately — neither under- nor over-asking.'],
        ['bi-file-earmark-check', 'Consistent With CMA Data', 'Report and CMA data align, avoiding the mismatches that trigger lender queries.'],
        ['bi-clipboard-check', 'Reusable for Multiple Lenders', 'A well-built report adapts easily if you approach more than one bank or NBFC.'],
    ],
    'eligibility_title' => 'Who Needs a Project Report?',
    'eligibility' => [
        ['bi-rocket-takeoff', 'New Business / Project Loans', 'Setting up a new unit, expansion or diversification requiring term financing.'],
        ['bi-building', 'Term Loan Applicants', 'Machinery, infrastructure or capacity expansion financed through a bank term loan.'],
        ['bi-shop', 'MSME & SME Borrowers', 'Businesses applying under MUDRA, CGTMSE or standard SME credit schemes.'],
        ['bi-bank', 'Working Capital + Term Loan Mix', 'Composite credit proposals combining working capital and project finance.'],
    ],
    'callout' => 'A project report and CMA data are often required together — we prepare both consistently so lenders see one coherent story.',
    'documents' => [
        ['bi-person-vcard', 'Promoter KYC & Background', 'PAN, Aadhaar and business experience'],
        ['bi-file-earmark-bar-graph', 'Existing Financials', 'if an existing business, last 2–3 years'],
        ['bi-cash-stack', 'Project Cost Details', 'machinery, civil work, working capital margin'],
        ['bi-bank', 'Means of Finance', 'promoter contribution, proposed loan amount'],
        ['bi-graph-up', 'Revenue Assumptions', 'pricing, capacity utilisation, market details'],
        ['bi-receipt', 'Quotations', 'for machinery or major capital expenditure'],
        ['bi-house-door', 'Project Location Proof', 'land/premises documents for the proposed unit'],
        ['bi-file-earmark-text', 'Licences Held', 'existing registrations relevant to the project'],
    ],
    'process_note' => 'Typical timeline: 5–7 working days from complete information',
    'process_title' => 'Report Preparation in 5 Simple Steps',
    'process' => [
        ['bi-chat-dots', 'Free Consultation', 'We understand the project, loan purpose and target lender.'],
        ['bi-clipboard-data', 'Data Collection', 'Promoter, cost and revenue details gathered against our checklist.'],
        ['bi-calculator', 'Viability & Ratio Analysis', 'Projected P&L, cash flow, DSCR and other bank ratios computed.'],
        ['bi-file-earmark-bar-graph', 'Report Drafting', 'The full report is drafted in bank-acceptable format and reviewed with you.'],
        ['bi-patch-check', 'Finalisation', 'Report delivered ready for submission, with support for lender queries.'],
    ],
    'faqs' => [
        ['What is included in a bank project report?', 'Promoter background, project description, technical and market feasibility, cost of project, means of finance, projected profitability, cash flow and balance sheet, and key financial ratios over the loan tenure.'],
        ['How is a project report different from CMA data?', 'The project report tells the story — why the project is viable; CMA data is the standardised financial format banks use to assess it numerically. Most loan applications need both, and we prepare them consistently together.'],
        ['How long does preparation take?', 'Typically 5–7 working days once we have complete project and financial information — faster for straightforward proposals, longer for complex multi-year projects.'],
        ['Can you prepare reports for MUDRA or CGTMSE-backed loans?', 'Yes — we tailor the report and ratios to the specific scheme\'s requirements, whether MUDRA, CGTMSE, or a standard bank term loan.'],
        ['What if I\'m applying to multiple banks?', 'We build the report to be lender-agnostic in its core content, then adjust formatting and specific annexures for each bank\'s particular submission requirements.'],
        ['Do you guarantee loan approval?', 'No professional can guarantee a bank\'s credit decision — what we guarantee is a complete, well-reasoned, correctly formatted report that gives your application its best chance.'],
        ['What if my project has no prior financial history?', 'New projects use projected financials built on realistic market and cost assumptions rather than historicals — we clearly document the basis for every assumption so the lender can assess it fairly.'],
        ['Can the report be updated if the bank asks for revisions?', 'Yes — revision support based on lender queries or updated figures is part of the engagement until your report is submission-ready.'],
    ],
    'cta' => ['heading' => 'Ready for a Bank-Ready Project Report?', 'sub' => 'Realistic projections, correct ratios, faster sanction.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
