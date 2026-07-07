@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'GST Registration',
    'crumb' => 'GST Registration',
    'category' => ['label' => 'GST Services', 'slug' => 'gst-services'],
    'eyebrow_icon' => 'bi-receipt',
    'seo_title' => 'GST Registration Online',
    'seo_description' => 'Get your GSTIN in 3–7 working days. Expert-prepared GST registration with Aadhaar authentication, document support and post-registration compliance guidance — fixed professional fee, zero government fee.',
    'intro' => 'Get GST-registered without the back-and-forth. We prepare and file your application, handle officer queries, and deliver your GSTIN with clear guidance on invoicing and returns from day one.',
    'chips' => [
        ['bi-patch-check-fill', 'Valid PAN-India'],
        ['bi-clock-history', '3–7 Working Days'],
        ['bi-gift-fill', 'Govt. Fees: Zero'],
    ],
    'illustration' => [
        ['bi-folder-check', 'Documents Verified'],
        ['bi-fingerprint', 'Aadhaar Authentication Done'],
        ['bi-file-earmark-arrow-up', 'REG-01 Application Filed'],
        ['bi-award', 'GSTIN Issued!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is GST registration?', 'Enrolment under the Goods and Services Tax that gives your business a unique 15-digit GSTIN. It lets you collect tax, claim input credit and issue GST-compliant invoices recognised across India.'],
        ['bi-people', 'Who must register?', 'Businesses crossing ₹40 lakh turnover (₹20 lakh for services; lower in special-category states), inter-state suppliers, e-commerce sellers and several mandatory categories — regardless of turnover.'],
        ['bi-graph-up-arrow', 'Why register early?', 'Input tax credit on your purchases, access to B2B clients and marketplaces, and freedom to sell across state lines — plus you avoid penalties that apply from the day liability arose.'],
    ],
    'benefits_title' => 'What GST Registration Unlocks',
    'benefits' => [
        ['bi-shield-check', 'Legal Recognition', 'Operate as a registered supplier with a GSTIN that vendors, clients and banks can verify.'],
        ['bi-arrow-down-left-circle', 'Input Tax Credit', 'Recover the GST you pay on purchases and expenses — a direct saving on costs.'],
        ['bi-truck', 'Inter-State Sales', 'Sell to any state and generate e-way bills without restrictions.'],
        ['bi-cart-check', 'Marketplace Access', 'Mandatory for selling on Amazon, Flipkart and most e-commerce platforms.'],
        ['bi-award', 'B2B Credibility', 'Corporate buyers prefer registered vendors so they can claim their own credit.'],
        ['bi-percent', 'Composition Option', 'Eligible small businesses can opt for low flat-rate tax with quarterly compliance.'],
    ],
    'eligibility_title' => 'Who Should Register?',
    'eligibility' => [
        ['bi-graph-up', 'Threshold Crossers', 'Turnover above ₹40 lakh for goods or ₹20 lakh for services (₹20L/₹10L in special-category states).'],
        ['bi-truck', 'Inter-State & Online Sellers', 'Supplying to other states or through e-commerce operators makes registration mandatory from rupee one.'],
        ['bi-people', 'Mandatory Categories', 'Casual taxable persons, reverse-charge payers, agents, input service distributors and non-resident suppliers.'],
        ['bi-hand-thumbs-up', 'Voluntary Applicants', 'Below-threshold businesses can register voluntarily to claim ITC and serve B2B clients.'],
    ],
    'callout' => 'There is no government fee for GST registration — beware of portals charging "government charges".',
    'documents' => [
        ['bi-credit-card-2-front', 'PAN Card', 'of the business or proprietor'],
        ['bi-person-vcard', 'Aadhaar Card', 'of proprietor / partners / directors'],
        ['bi-image', 'Passport-Size Photo', 'of the authorised signatory'],
        ['bi-file-earmark-text', 'Business Constitution Proof', 'COI / partnership deed, as applicable'],
        ['bi-house-door', 'Principal Place of Business', 'rent agreement or ownership document'],
        ['bi-lightning-charge', 'Premises Utility Bill', 'electricity / water bill (≤ 2 months old)'],
        ['bi-bank', 'Bank Proof', 'cancelled cheque or bank statement'],
        ['bi-vector-pen', 'DSC / Authorisation', 'DSC for companies; letter for signatories'],
    ],
    'process_note' => 'Typical timeline: 3–7 working days with Aadhaar authentication',
    'process_title' => 'Your GSTIN in 5 Simple Steps',
    'process' => [
        ['bi-chat-dots', 'Free Consultation', 'We confirm your liability, state-wise needs and the right scheme (regular or composition).'],
        ['bi-folder-check', 'Document Collection', 'Your KYC, premises and bank documents are collected and verified.'],
        ['bi-file-earmark-arrow-up', 'Application Filing', 'Form REG-01 is filed with Aadhaar authentication and your ARN is generated.'],
        ['bi-search-heart', 'Officer Verification', 'We respond to any clarification notices until approval.'],
        ['bi-patch-check', 'GSTIN Issued', 'Your registration certificate (REG-06) arrives with invoicing and return guidance.'],
    ],
    'faqs' => [
        ['How much does GST registration cost?', 'The government charges nothing. You pay only our professional fee for accurate preparation, filing and query handling — quoted upfront.'],
        ['How long does it take to get a GSTIN?', 'With Aadhaar authentication, typically 3–7 working days. If the officer raises a clarification, add a few days — we handle those responses for you.'],
        ['Do I need separate registrations for multiple states?', 'Yes — GST registration is state-wise. A business operating from premises in three states needs three GSTINs under the same PAN.'],
        ['What is the composition scheme?', 'A simplified scheme for businesses up to ₹1.5 crore turnover (₹50 lakh for most services): pay a low flat rate, file quarterly, but you cannot collect GST or claim ITC. We advise if it suits you.'],
        ['What happens if I don\'t register when liable?', 'Tax becomes payable with interest, plus a penalty of 10% of tax due (minimum ₹10,000) — or 100% where evasion is established. Registering promptly is far cheaper.'],
        ['Can I register from a home or virtual office?', 'Yes — residential premises and compliant virtual offices are acceptable with proper address proof and NOC.'],
        ['What do the 15 digits of a GSTIN mean?', 'The first two digits are the state code, the next ten are your PAN, followed by an entity code, a default letter and a check digit.'],
        ['What compliance starts after registration?', 'GST-compliant invoicing, monthly or quarterly returns (GSTR-1 and GSTR-3B), and annual returns where applicable. Our return filing service can take this over end-to-end.'],
    ],
    'cta' => ['heading' => 'Ready to Get Your GSTIN?', 'sub' => 'Fast, accurate registration with experts who handle the follow-ups.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
