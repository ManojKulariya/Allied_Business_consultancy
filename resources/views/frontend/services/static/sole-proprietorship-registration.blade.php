@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Sole Proprietorship Registration',
    'crumb' => 'Sole Proprietorship',
    'category' => ['label' => 'Business Registration', 'slug' => 'business-registration'],
    'eyebrow_icon' => 'bi-person',
    'seo_title' => 'Sole Proprietorship Registration',
    'seo_description' => 'Start a Sole Proprietorship in 3–5 working days — GST, MSME/Udyam and Shop & Establishment registrations plus current account support, all at the lowest cost.',
    'intro' => 'The simplest and fastest way to start a business in India. We set up your proprietorship with the right registrations — GST, MSME/Udyam, Shop & Establishment — so you can open a current account and start billing.',
    'chips' => [
        ['bi-rocket-takeoff-fill', 'Fastest Way to Start'],
        ['bi-clock-history', '3–5 Working Days'],
        ['bi-tags-fill', 'Lowest Cost Structure'],
    ],
    'illustration' => [
        ['bi-person-check', 'Proprietor KYC Verified'],
        ['bi-receipt', 'GST / Udyam Registered'],
        ['bi-bank', 'Current Account Opened'],
        ['bi-award', 'Business Up & Running!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is a sole proprietorship?', 'A business owned and run by one person, with no separate legal identity — you and the business are the same in law. Identity comes from registrations like GST, Udyam and Shop & Establishment.'],
        ['bi-people', 'Who should choose it?', 'Freelancers, shopkeepers, traders, home businesses and first-time entrepreneurs testing an idea — anyone who wants to start immediately with minimum cost and paperwork.'],
        ['bi-graph-up-arrow', 'Why start here?', 'Zero incorporation formalities, income taxed at your personal slab rates, and full control. When the business grows, upgrading to an OPC, LLP or private limited company is straightforward.'],
    ],
    'benefits_title' => 'Why Beginners Choose a Proprietorship',
    'benefits' => [
        ['bi-lightning', 'Start in Days', 'No incorporation process — a few registrations and a bank account and you are in business.'],
        ['bi-cash-coin', 'Minimal Cost', 'The cheapest structure to open and to run — no ROC fees, no statutory audits by default.'],
        ['bi-person-check', 'Complete Control', 'All decisions and all profits are yours alone.'],
        ['bi-percent', 'Slab-Rate Taxation', 'Business income is taxed at your individual slab rates, with presumptive schemes like 44AD available.'],
        ['bi-file-earmark-minus', 'Simplest Compliance', 'Essentially your income tax return plus GST returns if registered — nothing more.'],
        ['bi-arrow-up-right-circle', 'Easy to Upgrade', 'Convert to OPC, LLP or a private limited company whenever you are ready to scale.'],
    ],
    'eligibility' => [
        ['bi-person-badge', 'Any Resident Individual', 'One adult with a PAN and Aadhaar can be a proprietor — no co-founder needed.'],
        ['bi-receipt', 'GST When Applicable', 'Required beyond ₹40 lakh turnover (₹20 lakh for services) or for inter-state and online sales.'],
        ['bi-shop', 'Local Licences', 'Shop & Establishment registration applies to shops and offices under your state\'s rules.'],
        ['bi-bank', 'Bank Current Account', 'Banks need at least two government registrations in the firm\'s name — we set these up.'],
    ],
    'callout' => 'No registration is legally required to *be* a proprietor — the right registrations simply give your business a bankable identity.',
    'documents' => [
        ['bi-credit-card-2-front', 'PAN Card', 'of the proprietor'],
        ['bi-person-vcard', 'Aadhaar Card', 'of the proprietor'],
        ['bi-image', 'Passport-Size Photo', 'of the proprietor'],
        ['bi-file-earmark-text', 'Bank Details', 'cancelled cheque or bank statement'],
        ['bi-house-door', 'Business Address Proof', 'rent agreement or ownership document'],
        ['bi-lightning-charge', 'Premises Utility Bill', 'electricity / water bill (≤ 2 months old)'],
        ['bi-file-earmark-check', 'Owner NOC', 'if the premises are rented'],
        ['bi-shop', 'Business Details', 'trade name and nature of activity'],
    ],
    'process_note' => 'Typical timeline: 3–5 working days for the core registrations',
    'process' => [
        ['bi-chat-dots', 'Free Consultation', 'We identify exactly which registrations your business needs.'],
        ['bi-folder-check', 'Document Collection', 'Your KYC and premises documents are collected and verified.'],
        ['bi-receipt', 'Registrations Filed', 'GST, MSME/Udyam and Shop & Establishment applications are submitted.'],
        ['bi-bank', 'Bank Account Support', 'We help you open the current account in your trade name.'],
        ['bi-patch-check', 'Ready to Bill', 'Certificates delivered with invoicing and compliance guidance.'],
    ],
    'faqs' => [
        ['Is any registration mandatory for a proprietorship?', 'There is no single mandatory registration. GST applies above the threshold or for inter-state/online sales; Shop & Establishment applies to premises; Udyam is optional but unlocks MSME benefits. We recommend the right mix for your case.'],
        ['How is a proprietorship taxed?', 'Business income is added to your personal income and taxed at slab rates. Presumptive taxation under Section 44AD/44ADA can greatly simplify accounting for eligible businesses.'],
        ['Can I use a trade name?', 'Yes — you can trade under any name (e.g., "Sharma Enterprises"). For exclusive rights to the name, register it as a trademark; we offer that service too.'],
        ['Is my liability limited?', 'No. A proprietorship is not a separate entity, so business debts are personally yours. If liability protection matters, consider an OPC or LLP.'],
        ['Can I hire employees?', 'Yes, a proprietorship can employ staff. PF and ESI registrations become applicable once you cross the respective employee thresholds.'],
        ['What does a bank need to open a current account?', 'Typically two government documents in the business name — for example your GST certificate and Udyam registration. Our package is designed around this requirement.'],
        ['Can I convert to a company or LLP later?', 'Yes, and it is common: proprietors upgrade once revenue and risk grow. We manage the entire transition, including moving registrations.'],
        ['Do I need a separate PAN for the business?', 'No — a proprietorship uses the proprietor\'s personal PAN for all tax purposes.'],
    ],
    'cta' => ['heading' => 'Ready to Start Your Business?'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
