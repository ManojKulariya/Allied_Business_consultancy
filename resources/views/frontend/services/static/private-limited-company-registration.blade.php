@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Private Limited Company Registration',
    'crumb' => 'Private Limited Company',
    'category' => ['label' => 'Business Registration', 'slug' => 'business-registration'],
    'eyebrow_icon' => 'bi-building-add',
    'seo_title' => 'Pvt Ltd Company Registration',
    'seo_description' => 'Register your Private Limited Company online in 7–10 working days. End-to-end MCA filing, name approval, DSC, PAN & TAN — transparent fixed pricing with expert CA support.',
    'intro' => 'Start your company the right way. We handle everything — name approval, digital signatures, MCA filing, PAN & TAN — so you get your Certificate of Incorporation without the paperwork stress.',
    'chips' => [
        ['bi-patch-check-fill', 'MCA Compliant Filing'],
        ['bi-clock-history', '7–10 Working Days'],
        ['bi-tags-fill', 'Fixed Transparent Pricing'],
    ],
    'illustration' => [
        ['bi-search', 'Company Name Approved'],
        ['bi-file-earmark-text', 'SPICe+ Form Filed with MCA'],
        ['bi-award', 'Certificate of Incorporation'],
        ['bi-rocket-takeoff', 'Your Company Is Live!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is a Private Limited Company?', 'A company registered under the Companies Act, 2013 that exists as a separate legal person. Ownership is held through shares, and the personal assets of shareholders stay protected from business liabilities.'],
        ['bi-people', 'Who should register one?', 'Startups planning to raise investment, growing businesses ready to formalise, and founders who want a credible structure that banks, investors and large clients trust. Just two people are enough to begin.'],
        ['bi-graph-up-arrow', 'Why choose this structure?', 'It balances protection and growth: limited liability for owners, easy transfer of shares, straightforward fundraising, and a professional image — the default choice for serious, scalable businesses.'],
    ],
    'benefits_title' => 'Why Founders Choose a Private Limited Company',
    'benefits' => [
        ['bi-shield-check', 'Limited Liability', 'Your personal assets are protected — liability is limited to the capital you invest.'],
        ['bi-building-check', 'Separate Legal Entity', 'The company can own property, sign contracts and operate in its own name.'],
        ['bi-cash-coin', 'Easy Fund Raising', 'The preferred structure of angel investors, VCs and banks for equity and debt funding.'],
        ['bi-award', 'Brand Credibility', '"Pvt. Ltd." after your name builds instant trust with clients, vendors and talent.'],
        ['bi-arrow-repeat', 'Perpetual Succession', 'The company continues to exist regardless of changes in ownership or management.'],
        ['bi-arrow-left-right', 'Easy Ownership Transfer', 'Shares can be transferred without disturbing day-to-day business operations.'],
    ],
    'eligibility' => [
        ['bi-person-badge', 'Minimum 2 Directors', 'At least one director must be a resident of India. Directors need a DIN, which we obtain during filing.'],
        ['bi-people', 'Minimum 2 Shareholders', 'Directors and shareholders can be the same people — two founders are enough.'],
        ['bi-fonts', 'A Unique Company Name', 'The proposed name must not match an existing company, LLP or registered trademark.'],
        ['bi-geo-alt', 'A Registered Office in India', 'Residential or commercial — you only need valid address proof, not owned premises.'],
    ],
    'callout' => 'No minimum capital required — you can start with any amount.',
    'documents' => [
        ['bi-credit-card-2-front', 'PAN Card', 'of all directors & shareholders'],
        ['bi-person-vcard', 'Aadhaar Card', 'of all directors & shareholders'],
        ['bi-file-earmark-person', 'Identity Proof', 'passport, voter ID or driving licence'],
        ['bi-file-earmark-text', 'Address Proof', 'recent bank statement or utility bill'],
        ['bi-image', 'Passport-Size Photos', 'of all directors'],
        ['bi-house-door', 'Office Address Proof', 'rent agreement or ownership document'],
        ['bi-lightning-charge', 'Office Utility Bill', 'electricity / water bill (≤ 2 months old)'],
        ['bi-file-earmark-check', 'Owner NOC', 'if the office premises are rented'],
    ],
    'process_note' => 'Typical timeline: 7–10 working days, subject to MCA approvals',
    'process' => [
        ['bi-chat-dots', 'Free Consultation', 'We understand your business and confirm the right structure for you.'],
        ['bi-folder-check', 'Documents & DSC', 'We collect your documents and issue digital signatures for all directors.'],
        ['bi-search-heart', 'Name Approval', 'Your company name is reserved with MCA through SPICe+ Part A.'],
        ['bi-file-earmark-arrow-up', 'Incorporation Filing', 'SPICe+ Part B with MOA & AOA is drafted and filed with the ROC.'],
        ['bi-patch-check', 'Certificate Issued', 'You receive the COI with CIN, plus company PAN and TAN — ready to operate.'],
    ],
    'faqs' => [
        ['How long does private limited company registration take?', 'Typically 7–10 working days from the day we receive your complete documents, depending on MCA name approval and processing times.'],
        ['Is there a minimum capital requirement?', 'No. The Companies Act does not prescribe any minimum paid-up capital — you can start your company with any amount you choose.'],
        ['Can the same two people be both directors and shareholders?', 'Yes. Two founders acting as both directors and shareholders is the most common setup for new companies.'],
        ['Can NRIs or foreign nationals become directors?', 'Yes, provided at least one director on the board is a resident of India. Foreign shareholding is also permitted, subject to FDI rules for your sector.'],
        ['What do I receive after incorporation?', 'The Certificate of Incorporation with your CIN, company PAN and TAN, MOA & AOA, DINs for directors and their digital signature certificates.'],
        ['What compliances apply after registration?', 'Key ones include opening a company bank account, appointing an auditor within 30 days, annual ROC filings and income tax returns. We provide a full compliance calendar and can manage it for you.'],
        ['Can I convert my company to another structure later?', 'Yes. A private limited company can later be converted into a public limited company or an LLP by following the prescribed MCA procedures.'],
        ['Can a salaried person become a director?', 'Generally yes — the Companies Act does not restrict it. Do check your employment agreement for any clause requiring employer consent.'],
    ],
    'cta' => ['heading' => 'Ready to Register Your Private Limited Company?'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
