@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Nidhi Company Registration',
    'crumb' => 'Nidhi Company',
    'category' => ['label' => 'Business Registration', 'slug' => 'business-registration'],
    'eyebrow_icon' => 'bi-safe',
    'seo_title' => 'Nidhi Company Registration',
    'seo_description' => 'Register a Nidhi Company in 20–30 working days — member-based deposits and lending without an RBI licence. Incorporation, NDH-4 guidance and compliance support.',
    'intro' => 'Build a member-owned savings and lending institution. A Nidhi Company accepts deposits from and lends only to its members — no RBI licence required — and we set it up compliantly from day one.',
    'chips' => [
        ['bi-patch-check-fill', 'No RBI Licence Needed'],
        ['bi-clock-history', '20–30 Working Days'],
        ['bi-people-fill', 'Member-Only Banking'],
    ],
    'illustration' => [
        ['bi-people', '7 Founding Members Onboard'],
        ['bi-file-earmark-text', 'Incorporated as Nidhi Limited'],
        ['bi-cash-coin', 'Member Deposits & Loans Begin'],
        ['bi-award', 'NDH-4 Declaration Filed!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is a Nidhi Company?', 'A public company under Section 406 of the Companies Act and the Nidhi Rules, formed to cultivate thrift among members. It accepts deposits from and lends only to its own members — a mutual-benefit institution.'],
        ['bi-people', 'Who should register one?', 'Community groups, chit-fund-style savings circles wanting a legal structure, and entrepreneurs building local finance businesses around secured member lending.'],
        ['bi-graph-up-arrow', 'Why choose this structure?', 'It is the most accessible way to run a deposit-and-loan business legally: no RBI licence, lighter regulation than an NBFC, and a trusted savings vehicle for your community.'],
    ],
    'benefits_title' => 'Why Founders Choose a Nidhi Company',
    'benefits' => [
        ['bi-bank2', 'No RBI Licence', 'Nidhis are exempt from RBI registration — governed instead by MCA\'s Nidhi Rules.'],
        ['bi-piggy-bank', 'Legal Deposit-Taking', 'Accept recurring, fixed and savings deposits from members lawfully.'],
        ['bi-cash-coin', 'Secured Member Lending', 'Lend to members against gold, property and deposits at regulated rates.'],
        ['bi-people', 'Community Trust', 'A registered "Nidhi Limited" builds far more confidence than informal circles.'],
        ['bi-shield-check', 'Limited Liability', 'Shareholders\' personal assets remain protected.'],
        ['bi-graph-up', 'Scalable Model', 'Open branches as you grow, subject to profitability conditions under the rules.'],
    ],
    'eligibility' => [
        ['bi-people', '7 Members, 3 Directors', 'Incorporates as a public limited company with at least seven shareholders and three directors.'],
        ['bi-cash-stack', '₹10 Lakh Paid-Up Capital', 'The minimum equity share capital prescribed by the Nidhi Rules.'],
        ['bi-person-plus', 'Growth Targets', 'Reach 200 members and ₹20 lakh net owned funds within the prescribed period.'],
        ['bi-fonts', '"Nidhi Limited" Name', 'The company name must end with the words Nidhi Limited.'],
    ],
    'callout' => 'Declaration as a Nidhi via Form NDH-4 is mandatory — we prepare your company to meet the thresholds and file it.',
    'documents' => [
        ['bi-credit-card-2-front', 'PAN Card', 'of all directors & members'],
        ['bi-person-vcard', 'Aadhaar Card', 'of all directors & members'],
        ['bi-file-earmark-person', 'Identity Proof', 'passport, voter ID or driving licence'],
        ['bi-file-earmark-text', 'Address Proof', 'recent bank statement or utility bill'],
        ['bi-image', 'Passport-Size Photos', 'of all directors'],
        ['bi-house-door', 'Office Address Proof', 'rent agreement or ownership document'],
        ['bi-lightning-charge', 'Office Utility Bill', 'electricity / water bill (≤ 2 months old)'],
        ['bi-file-earmark-check', 'Owner NOC', 'if the office premises are rented'],
    ],
    'process_note' => 'Typical timeline: 20–30 working days for incorporation; NDH-4 follows once thresholds are met',
    'process' => [
        ['bi-chat-dots', 'Free Consultation', 'We explain the Nidhi model, restrictions and capital planning.'],
        ['bi-folder-check', 'Documents & DSC', 'KYC of seven members collected; digital signatures issued to directors.'],
        ['bi-search-heart', 'Name Approval', 'Your "… Nidhi Limited" name is reserved through SPICe+ Part A.'],
        ['bi-file-earmark-arrow-up', 'Incorporation Filing', 'SPICe+ Part B with Nidhi-compliant MOA & AOA is filed with the ROC.'],
        ['bi-patch-check', 'Launch & NDH-4', 'Company incorporated; we guide member growth and file the NDH-4 declaration.'],
    ],
    'faqs' => [
        ['Does a Nidhi Company need an RBI licence?', 'No. Nidhis are exempt from RBI registration. They are regulated by the MCA under the Nidhi Rules, which cap what they can and cannot do.'],
        ['Who can deposit with or borrow from a Nidhi?', 'Only its members. The company cannot accept deposits from or lend to the general public — anyone dealing with it must first be admitted as a member.'],
        ['What are the key requirements after incorporation?', 'Reach at least 200 members and ₹20 lakh net owned funds, keep the NOF-to-deposit ratio within 1:20, park 10% of deposits in unencumbered term deposits, and file the NDH-4 declaration along with periodic NDH returns.'],
        ['What loans can a Nidhi give?', 'Only secured loans to members — against gold and silver, immovable property, deposits, NSCs and similar securities, within the loan limits linked to deposit size.'],
        ['What is a Nidhi prohibited from doing?', 'Chit funds, hire purchase, leasing, insurance, securities business, unsecured lending, partnering for lending, advertising for deposits from the public, and paying brokerage for deposits.'],
        ['Can a Nidhi open branches?', 'Yes — after three consecutive years of net profit, branches can be opened within the district, and beyond it with Regional Director approval.'],
        ['What is the minimum capital needed?', 'A minimum paid-up equity capital of ₹10 lakh at incorporation, building to ₹20 lakh net owned funds within the prescribed timeline.'],
        ['How are Nidhi deposits and interest rates regulated?', 'The Nidhi Rules cap deposit interest at NBFC-linked ceilings and cap the margin on loans, keeping the model genuinely mutual rather than commercial money-lending.'],
    ],
    'cta' => ['heading' => 'Ready to Start Your Nidhi Company?', 'sub' => 'Turn community savings into a regulated, trusted institution.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
