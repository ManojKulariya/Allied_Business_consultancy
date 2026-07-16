@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Import Export Code (IEC) Registration',
    'crumb' => 'IEC Registration',
    'category' => ['label' => 'Licenses & Registrations', 'slug' => 'licenses-registrations'],
    'eyebrow_icon' => 'bi-globe',
    'seo_title' => 'IEC Registration Online',
    'seo_description' => 'Get your 10-digit Import Export Code from DGFT in 1–3 working days — a one-time registration, valid for life, required for all cross-border trade.',
    'intro' => 'The single code that unlocks global trade for your business. We prepare and file your IEC application on the DGFT portal — a one-time registration that stays valid for the life of your business.',
    'chips' => [
        ['bi-globe', 'Lifetime Validity'],
        ['bi-clock-history', '1–3 Working Days'],
        ['bi-patch-check-fill', 'One-Time Registration'],
    ],
    'illustration' => [
        ['bi-file-earmark-text', 'Business Details Verified'],
        ['bi-bank', 'Bank Details Linked'],
        ['bi-file-earmark-arrow-up', 'DGFT Application Filed'],
        ['bi-award', 'IEC Issued — Trade Ready!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is an IEC?', 'A 10-digit code issued by the Directorate General of Foreign Trade, mandatory for any business or individual engaged in importing or exporting goods and services from India.'],
        ['bi-people', 'Who needs it?', 'Anyone importing goods for business, exporting products or services, or receiving/making international payments linked to trade — from first-time exporters to established trading houses.'],
        ['bi-graph-up-arrow', 'Why is it a one-time process?', 'Unlike most licences, IEC has no renewal requirement or expiry — it is issued once and remains valid for the lifetime of the business, needing only periodic annual updation on the portal.'],
    ],
    'benefits_title' => 'Why Every Trading Business Needs an IEC',
    'benefits' => [
        ['bi-globe', 'Mandatory for Trade', 'No import or export shipment can be customs-cleared without a valid IEC.'],
        ['bi-bank', 'International Payments', 'Required by banks to process most foreign currency trade transactions.'],
        ['bi-award', 'Export Scheme Benefits', 'Access to RoDTEP, duty drawback and other export incentive schemes.'],
        ['bi-lightning-charge', 'Quick, One-Time Process', 'No annual renewal — apply once and trade for the life of your business.'],
        ['bi-graph-up', 'Global Market Access', 'Opens the door to international customers, suppliers and marketplaces.'],
        ['bi-shield-check', 'Credibility with Partners', 'A valid IEC signals a legitimate, compliant trading entity to overseas partners.'],
    ],
    'eligibility_title' => 'Who Should Apply for an IEC?',
    'eligibility' => [
        ['bi-box-seam', 'Importers', 'Businesses bringing goods into India for trade, manufacturing or resale.'],
        ['bi-send', 'Exporters', 'Businesses selling goods or services to customers outside India.'],
        ['bi-laptop', 'Service Exporters', 'IT, consulting and other service providers receiving payments from abroad.'],
        ['bi-shop', 'Any Business Structure', 'Proprietorships, partnerships, LLPs and companies are all eligible to apply.'],
    ],
    'callout' => 'IEC has no renewal — but annual updation on the DGFT portal (even with no changes) is required to keep it active.',
    'documents' => [
        ['bi-credit-card-2-front', 'PAN Card', 'of the business entity or proprietor'],
        ['bi-file-earmark-text', 'Business Registration Proof', 'incorporation certificate or firm registration'],
        ['bi-house-door', 'Address Proof', 'of the business premises'],
        ['bi-bank', 'Cancelled Cheque', 'or bank certificate for the current account'],
        ['bi-person-vcard', 'Applicant KYC', 'PAN and Aadhaar of proprietor/partner/director'],
        ['bi-image', 'Passport-Size Photograph', 'of the applicant'],
        ['bi-envelope', 'Active Email & Mobile', 'for DGFT portal registration and OTP'],
        ['bi-vector-pen', 'Digital Signature Certificate', 'DGFT-compatible DSC for filing'],
    ],
    'process_note' => 'Typical timeline: 1–3 working days from complete documents',
    'process_title' => 'IEC Registration in 4 Simple Steps',
    'process' => [
        ['bi-chat-dots', 'Free Consultation', 'We confirm your business is ready for the IEC application.'],
        ['bi-folder-check', 'Document Collection', 'Entity, address and bank details gathered and verified.'],
        ['bi-file-earmark-arrow-up', 'DGFT Filing', 'Application submitted on the DGFT portal with digital signature.'],
        ['bi-patch-check', 'IEC Issued', 'Your 10-digit Import Export Code is generated, ready for use immediately.'],
    ],
    'faqs' => [
        ['Does IEC need to be renewed every year?', 'No renewal is required, but annual updation on the DGFT portal between April and June is mandatory (even with zero changes) to keep the IEC active — we track this for retained clients.'],
        ['Can an individual apply for an IEC, or only companies?', 'Any legal entity can apply — individuals (proprietorships), partnerships, LLPs and companies are all eligible for their own IEC.'],
        ['Is IEC required for service exports too?', 'Yes — IT services, consulting and other service exports receiving foreign payments also require an IEC, not just goods trade.'],
        ['What happens if I don\'t update my IEC annually?', 'A non-updated IEC can be deactivated by DGFT, blocking your ability to trade until it is reactivated through the update process.'],
        ['Do I need a DGFT-specific digital signature for this?', 'Yes — filing on the DGFT portal requires a DGFT-compatible DSC; our Digital Signature Services can arrange this alongside your IEC application if you don\'t already have one.'],
        ['Can I use my IEC for multiple types of goods or services?', 'Yes — a single IEC covers all your import-export activity across products and services; there is no need for separate codes per product category.'],
        ['Is a minimum turnover required to apply for an IEC?', 'No — there is no turnover threshold; even a business planning its first export shipment can and should apply before that shipment.'],
        ['Can IEC details be updated if my business address or bank changes?', 'Yes — modifications are filed through the same DGFT portal, and we assist with amendments whenever your registered details change.'],
    ],
    'cta' => ['heading' => 'Ready to Start Trading Globally?', 'sub' => 'One code, lifetime validity — get your IEC in as little as a day.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
