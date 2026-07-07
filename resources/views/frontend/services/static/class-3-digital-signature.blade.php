@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Class 3 Digital Signature Certificate',
    'crumb' => 'Class 3 DSC',
    'category' => ['label' => 'Digital Signature Services', 'slug' => 'digital-signature-services'],
    'eyebrow_icon' => 'bi-vector-pen',
    'seo_title' => 'Class 3 Digital Signature Certificate (DSC)',
    'seo_description' => 'Get your Class 3 Digital Signature Certificate for MCA, GST, income tax e-filing and e-tendering — video verification, USB token included, issued in 1–2 days.',
    'intro' => 'The digital equivalent of your signature and seal, legally valid everywhere it counts. We handle your Class 3 DSC application end-to-end — video verification, token dispatch — usually done within a day or two.',
    'chips' => [
        ['bi-patch-check-fill', 'Legally Valid Nationwide'],
        ['bi-clock-history', '1–2 Working Days'],
        ['bi-usb-drive', 'USB Token Included'],
    ],
    'illustration' => [
        ['bi-person-vcard', 'Identity Details Verified'],
        ['bi-camera-video', 'Video Verification Completed'],
        ['bi-shield-check', 'Certificate Issued by CA'],
        ['bi-usb-drive', 'DSC Token Delivered!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is a Class 3 DSC?', 'The highest-assurance digital signature certificate issued by a licensed Certifying Authority, used to sign documents electronically with full legal validity under the Information Technology Act, 2000.'],
        ['bi-people', 'Who needs one?', 'Company directors, LLP partners, GST-registered taxpayers, professionals filing on the MCA or income tax portals, and anyone participating in e-tendering or e-procurement.'],
        ['bi-graph-up-arrow', 'Why Class 3 specifically?', 'Class 3 is mandatory for MCA filings, GST registration/returns, income tax e-filing above certain thresholds, and virtually all e-tendering portals — lower classes are no longer issued for these purposes.'],
    ],
    'benefits_title' => 'Why You Need a Class 3 DSC',
    'benefits' => [
        ['bi-file-earmark-check', 'Mandatory for MCA Filings', 'Every ROC form — incorporation, annual returns, resolutions — requires a valid DSC.'],
        ['bi-receipt', 'GST & Tax E-Filing', 'Used to authenticate GST registration, returns and income tax filings above threshold.'],
        ['bi-cart-check', 'E-Tendering Access', 'A prerequisite for participating in government and PSU e-procurement portals.'],
        ['bi-shield-check', 'Legally Equivalent to Signature', 'Carries the same legal standing as a physical signature under IT Act provisions.'],
        ['bi-lightning-charge', 'Fast, Secure Authentication', 'Instant, tamper-proof signing — no physical paperwork or courier delays.'],
        ['bi-globe', 'Works Across Platforms', 'One certificate usable across MCA, GST, income tax and multiple e-tender portals.'],
    ],
    'eligibility_title' => 'Who Should Apply?',
    'eligibility' => [
        ['bi-person-badge', 'Company Directors & LLP Partners', 'Required for signing ROC forms and statutory filings on the MCA portal.'],
        ['bi-shop', 'GST-Registered Businesses', 'For companies and LLPs, DSC is mandatory for GST registration and returns.'],
        ['bi-person-check', 'Professionals & Auditors', 'CAs, CS and other professionals certifying filings on behalf of clients.'],
        ['bi-cart-check', 'E-Tender Participants', 'Vendors and contractors bidding on government or PSU procurement portals.'],
    ],
    'callout' => 'Video verification (in place of physical presence) has made DSC issuance faster than ever — often completed within a day.',
    'documents' => [
        ['bi-credit-card-2-front', 'PAN Card', 'of the applicant'],
        ['bi-person-vcard', 'Aadhaar Card', 'linked to an active mobile number'],
        ['bi-image', 'Passport-Size Photograph', 'recent, for the application'],
        ['bi-phone', 'Active Mobile Number', 'for OTP and video verification'],
        ['bi-envelope', 'Active Email ID', 'for certificate delivery and notifications'],
        ['bi-file-earmark-text', 'Organisation Authorisation', 'letter, for DSCs issued in an organisational capacity'],
        ['bi-house-door', 'Address Proof', 'if required by the specific Certifying Authority'],
        ['bi-camera-video', 'Video Verification', 'a short live video call for identity confirmation'],
    ],
    'process_note' => 'Typical timeline: 1–2 working days from application to token dispatch',
    'process_title' => 'DSC Issuance in 4 Simple Steps',
    'process' => [
        ['bi-chat-dots', 'Application Initiation', 'We prepare your DSC application with the required identity details.'],
        ['bi-folder-check', 'Document Submission', 'PAN, Aadhaar and photograph submitted to the Certifying Authority.'],
        ['bi-camera-video', 'Video Verification', 'A brief live video call confirms your identity as per CCA norms.'],
        ['bi-usb-drive', 'Token Issuance', 'The Class 3 DSC is issued and the USB token couriered or handed over.'],
    ],
    'faqs' => [
        ['What is the difference between Class 3 and other DSC classes?', 'Class 3 is currently the only class issued for most purposes in India — it offers the highest identity assurance and is mandatory for MCA, GST, income tax and e-tendering use.'],
        ['How long is a Class 3 DSC valid?', 'Typically issued for 1, 2 or 3 years as chosen at application — renewal is required before expiry to maintain uninterrupted signing capability.'],
        ['Can I use one DSC for multiple purposes?', 'Yes — a single Class 3 DSC can sign MCA forms, GST returns, income tax filings and e-tender documents, as long as it is registered on each relevant portal.'],
        ['Do I need to be physically present for the application?', 'No — video verification has replaced the earlier requirement for physical presence or in-person biometric verification for most applicants.'],
        ['What is a DSC token and do I need to keep it safe?', 'It is a secure USB device storing your private key — the DSC cannot be used without it, so safekeeping is essential; a lost token requires re-issuance of a fresh certificate.'],
        ['Can a company obtain a DSC, or only individuals?', 'DSCs are issued to individuals, but organisational DSCs can be obtained in an individual\'s name with an organisation affiliation, used for signing on behalf of the company.'],
        ['What happens if my DSC expires while I have pending filings?', 'Filings cannot be signed with an expired DSC — timely renewal well before expiry avoids last-minute filing delays; we track expiry dates for retained clients.'],
        ['Is a DSC required for every director of a company?', 'Yes — every director who needs to sign ROC forms or resolutions on the MCA portal requires their own valid DSC; it cannot be shared between individuals.'],
    ],
    'cta' => ['heading' => 'Ready for Your Class 3 Digital Signature?', 'sub' => 'Fast video-verified issuance — usually done within a day or two.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
