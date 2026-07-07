@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Producer Company Registration',
    'crumb' => 'Producer Company',
    'category' => ['label' => 'Business Registration', 'slug' => 'business-registration'],
    'eyebrow_icon' => 'bi-flower1',
    'seo_title' => 'Producer Company (FPC) Registration',
    'seo_description' => 'Register a Farmer Producer Company in 15–20 working days — incorporation for 10+ producers, NABARD/FPO scheme readiness and Section 80PA tax benefits guidance.',
    'intro' => 'Give farmers and producers the power of a company. We incorporate your Producer Company — collective bargaining, better market access and government FPO support, with limited liability for every member.',
    'chips' => [
        ['bi-patch-check-fill', 'MCA Registered FPC'],
        ['bi-clock-history', '15–20 Working Days'],
        ['bi-people-fill', 'Built for Producer Groups'],
    ],
    'illustration' => [
        ['bi-people', '10+ Producer Members United'],
        ['bi-file-earmark-text', 'Incorporation Filed with MCA'],
        ['bi-award', 'Producer Company Limited Born'],
        ['bi-graph-up-arrow', 'Collective Growth Begins!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is a Producer Company?', 'A special company form owned exclusively by primary producers — farmers, dairy, fishery, forestry or artisan producers. It combines cooperative principles with the discipline and credibility of a company.'],
        ['bi-people', 'Who should register one?', 'Farmer groups, SHG federations, dairy and horticulture collectives, and NGOs organising producers — any group of at least 10 producers (or 2 producer institutions) ready to aggregate.'],
        ['bi-graph-up-arrow', 'Why choose this structure?', 'Collective purchasing and selling means better prices; the company form brings limited liability, bank credit access and eligibility for the government\'s FPO promotion schemes.'],
    ],
    'benefits_title' => 'Why Producer Groups Incorporate an FPC',
    'benefits' => [
        ['bi-people', 'Collective Bargaining', 'Aggregate produce and inputs to negotiate far better prices than any single farmer can.'],
        ['bi-shield-check', 'Limited Liability', 'Members risk only their share capital — personal land and assets stay protected.'],
        ['bi-percent', 'Tax Benefit (80PA)', 'Eligible producer companies with turnover up to ₹100 crore can claim 100% deduction on eligible business profits.'],
        ['bi-bank', 'Credit & Grant Access', 'Gateway to NABARD support, equity grant and credit guarantee schemes for FPOs.'],
        ['bi-cart-check', 'Better Market Access', 'Sell processed and branded produce directly to institutions, retailers and exporters.'],
        ['bi-building-check', 'Professional Governance', 'Board-run, audited and MCA-registered — credibility with banks and buyers.'],
    ],
    'eligibility' => [
        ['bi-people', '10 Producer Members', 'At least ten individual primary producers — or two or more producer institutions.'],
        ['bi-person-badge', 'Minimum 5 Directors', 'A board of five to fifteen directors drawn from the membership.'],
        ['bi-cash-stack', '₹5 Lakh Authorised Capital', 'The minimum authorised share capital prescribed for producer companies.'],
        ['bi-flower1', 'Primary Producer Activity', 'Members must be engaged in production — farming, dairy, fishery, forestry, handloom or allied activities.'],
    ],
    'callout' => 'The name always ends with "Producer Company Limited" — but none of the public-company compliance burden applies.',
    'documents' => [
        ['bi-credit-card-2-front', 'PAN Card', 'of all directors & members'],
        ['bi-person-vcard', 'Aadhaar Card', 'of all directors & members'],
        ['bi-flower1', 'Producer Proof', 'land records, khasra or producer certificates'],
        ['bi-file-earmark-text', 'Address Proof', 'recent bank statement or utility bill'],
        ['bi-image', 'Passport-Size Photos', 'of all directors'],
        ['bi-house-door', 'Office Address Proof', 'rent agreement or ownership document'],
        ['bi-lightning-charge', 'Office Utility Bill', 'electricity / water bill (≤ 2 months old)'],
        ['bi-file-earmark-check', 'Owner NOC', 'if the office premises are rented'],
    ],
    'process_note' => 'Typical timeline: 15–20 working days, subject to MCA approvals',
    'process' => [
        ['bi-chat-dots', 'Free Consultation', 'We assess your producer group and plan membership and capital structure.'],
        ['bi-folder-check', 'Documents & DSC', 'KYC and producer proofs collected; digital signatures issued to directors.'],
        ['bi-search-heart', 'Name Approval', 'Your "…Producer Company Limited" name is reserved via SPICe+ Part A.'],
        ['bi-file-earmark-arrow-up', 'Incorporation Filing', 'SPICe+ Part B with tailored MOA & AOA is filed with the ROC.'],
        ['bi-patch-check', 'Certificate Issued', 'COI with CIN, PAN and TAN issued — your FPC is ready to operate.'],
    ],
    'faqs' => [
        ['Who counts as a "primary producer"?', 'Anyone engaged in an activity connected with primary produce — growing crops, dairy, poultry, fishery, forestry, bee-keeping, handloom or handicrafts. Membership is restricted to such producers or their institutions.'],
        ['How many people are needed to start?', 'A minimum of ten individual producers, or two producer institutions, or a mix — plus a board of at least five directors chosen from among them.'],
        ['What activities can a Producer Company undertake?', 'Production, harvesting, procurement, grading, pooling, marketing, processing and export of members\' produce, plus supplying inputs, machinery and financial services to members.'],
        ['What is the Section 80PA tax benefit?', 'Producer companies with turnover under ₹100 crore can claim a 100% deduction on profits from eligible activities (like marketing members\' produce) — effectively making those profits tax-free while the provision remains in force.'],
        ['Can a Producer Company take government support?', 'Yes — FPCs are the preferred vehicle in the central FPO promotion scheme, with access to equity grants, credit guarantees and NABARD/SFAC handholding.'],
        ['Can non-farmers invest in a Producer Company?', 'No. Shares can be held only by producer members, and they are not publicly tradeable — this keeps control with producers.'],
        ['How are profits shared with members?', 'Through limited dividends and, more importantly, patronage bonuses distributed in proportion to each member\'s business with the company.'],
        ['What annual compliances apply?', 'Audited accounts, AOC-4 and MGT-7 filings, income tax return and an annual general meeting. We provide a complete compliance calendar and can manage it.'],
    ],
    'cta' => ['heading' => 'Ready to Organise Your Producers?', 'sub' => 'Build collective strength with the structure made for farmers.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
