@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Limited Liability Partnership (LLP) Registration',
    'crumb' => 'LLP Registration',
    'category' => ['label' => 'Business Registration', 'slug' => 'business-registration'],
    'eyebrow_icon' => 'bi-people',
    'seo_title' => 'LLP Registration',
    'seo_description' => 'Register a Limited Liability Partnership online in 10–15 working days. FiLLiP filing, LLP agreement drafting, DSC and PAN — partnership flexibility with limited liability at a fixed fee.',
    'intro' => 'Get the flexibility of a partnership with the protection of limited liability. We register your LLP end-to-end — name reservation, FiLLiP filing and a professionally drafted LLP agreement.',
    'chips' => [
        ['bi-patch-check-fill', 'MCA Compliant Filing'],
        ['bi-clock-history', '10–15 Working Days'],
        ['bi-tags-fill', 'Fixed Transparent Pricing'],
    ],
    'illustration' => [
        ['bi-search', 'LLP Name Reserved'],
        ['bi-file-earmark-text', 'FiLLiP Filed with MCA'],
        ['bi-file-earmark-ruled', 'LLP Agreement Executed'],
        ['bi-award', 'Your LLP Is Live!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is an LLP?', 'A hybrid structure under the LLP Act, 2008 — partners run the business under a flexible agreement, while the LLP itself is a separate legal entity and each partner\'s liability is limited to their contribution.'],
        ['bi-people', 'Who should register one?', 'Professional firms (CAs, architects, consultants), family businesses, agencies and service companies that want liability protection without the heavier compliance of a company.'],
        ['bi-graph-up-arrow', 'Why choose this structure?', 'Lower running costs than a private limited company, no mandatory audit until you cross ₹40 lakh turnover or ₹25 lakh contribution, and complete freedom to define profit-sharing in your agreement.'],
    ],
    'benefits_title' => 'Why Businesses Choose an LLP',
    'benefits' => [
        ['bi-shield-check', 'Limited Liability', 'Each partner\'s risk is capped at their agreed contribution — personal assets stay safe.'],
        ['bi-sliders', 'Flexible Management', 'Rights, duties and profit-sharing are whatever your LLP agreement says — no rigid company rules.'],
        ['bi-cash-stack', 'Lower Compliance Cost', 'No mandatory audit below ₹40 lakh turnover / ₹25 lakh contribution, and fewer annual filings.'],
        ['bi-building-check', 'Separate Legal Entity', 'The LLP owns property and signs contracts in its own name, with perpetual succession.'],
        ['bi-percent', 'Tax Efficient', 'Flat 30% taxation with no dividend distribution tax — profits withdrawn by partners are not taxed again.'],
        ['bi-person-plus', 'Easy to Add Partners', 'Admitting or retiring partners is a simple amendment to the agreement.'],
    ],
    'eligibility' => [
        ['bi-people', 'Minimum 2 Partners', 'Any individuals or body corporates — there is no upper limit on the number of partners.'],
        ['bi-person-badge', '2 Designated Partners', 'At least two partners handle compliance duties, and at least one must be a resident of India.'],
        ['bi-fonts', 'A Unique LLP Name', 'The name must not match an existing company, LLP or registered trademark.'],
        ['bi-geo-alt', 'A Registered Office in India', 'Residential or commercial premises with valid address proof.'],
    ],
    'callout' => 'No minimum capital — contribution can be any amount, even in instalments.',
    'documents' => [
        ['bi-credit-card-2-front', 'PAN Card', 'of all partners'],
        ['bi-person-vcard', 'Aadhaar Card', 'of all partners'],
        ['bi-file-earmark-person', 'Identity Proof', 'passport, voter ID or driving licence'],
        ['bi-file-earmark-text', 'Address Proof', 'recent bank statement or utility bill'],
        ['bi-image', 'Passport-Size Photos', 'of all partners'],
        ['bi-house-door', 'Office Address Proof', 'rent agreement or ownership document'],
        ['bi-lightning-charge', 'Office Utility Bill', 'electricity / water bill (≤ 2 months old)'],
        ['bi-file-earmark-check', 'Owner NOC', 'if the office premises are rented'],
    ],
    'process_note' => 'Typical timeline: 10–15 working days, including LLP agreement filing',
    'process' => [
        ['bi-chat-dots', 'Free Consultation', 'We confirm LLP suits your business and plan contributions and roles.'],
        ['bi-folder-check', 'Documents & DSC', 'We collect partner documents and issue digital signatures for designated partners.'],
        ['bi-search-heart', 'Name Reservation', 'Your LLP name is reserved with MCA through RUN-LLP.'],
        ['bi-file-earmark-arrow-up', 'FiLLiP Filing', 'The incorporation form is filed with the ROC and DPINs are allotted.'],
        ['bi-file-earmark-ruled', 'LLP Agreement', 'We draft and file your agreement (Form 3) within 30 days of incorporation.'],
    ],
    'faqs' => [
        ['How is an LLP different from a private limited company?', 'An LLP is governed by its partners\' agreement with lighter compliance and no shareholding — better for service firms. A company suits businesses raising equity investment. We help you choose in a free consultation.'],
        ['Is an audit mandatory for an LLP?', 'Only when annual turnover exceeds ₹40 lakh or partner contribution exceeds ₹25 lakh. Below these limits, no statutory audit is required.'],
        ['What are the annual filings for an LLP?', 'Form 11 (annual return) by 30 May, Form 8 (statement of accounts) by 30 October, and the income tax return. We can manage all of these for you.'],
        ['Can NRIs or foreign nationals be partners?', 'Yes, subject to FDI rules — though at least one designated partner must be a resident of India.'],
        ['What is the LLP agreement and why does it matter?', 'It is the constitution of your LLP — capital, profit-sharing, duties, admission and exit of partners. It must be filed in Form 3 within 30 days of incorporation; we draft it professionally as part of our service.'],
        ['How is an LLP taxed?', 'At a flat 30% (plus surcharge and cess). There is no dividend distribution tax — profit shares withdrawn by partners are exempt in their hands.'],
        ['Can an existing partnership firm become an LLP?', 'Yes. A registered partnership firm can be converted into an LLP, carrying forward its business while gaining limited liability.'],
        ['Is there a minimum capital contribution?', 'No. Partners may contribute any amount in cash, property or even agreed services, as recorded in the LLP agreement.'],
    ],
    'cta' => ['heading' => 'Ready to Register Your LLP?'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
