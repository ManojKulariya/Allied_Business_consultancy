@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'MSME / Udyam Registration',
    'crumb' => 'MSME / Udyam',
    'category' => ['label' => 'Licenses & Registrations', 'slug' => 'licenses-registrations'],
    'eyebrow_icon' => 'bi-patch-check',
    'seo_title' => 'MSME / Udyam Registration',
    'seo_description' => 'Get your Udyam (MSME) registration in 1–2 working days — collateral-free credit access, delayed-payment protection, subsidies and tender benefits. Lifetime-valid certificate.',
    'intro' => 'One registration, a lifetime of benefits. Udyam registration officially recognises your business as an MSME — unlocking easier credit, payment protection, subsidies and priority in government purchases.',
    'chips' => [
        ['bi-patch-check-fill', 'Official Udyam Certificate'],
        ['bi-clock-history', '1–2 Working Days'],
        ['bi-infinity', 'Lifetime Validity'],
    ],
    'illustration' => [
        ['bi-person-vcard', 'Aadhaar Verified'],
        ['bi-credit-card-2-front', 'PAN & GST Linked'],
        ['bi-file-earmark-arrow-up', 'Udyam Form Submitted'],
        ['bi-award', 'MSME Certificate Issued!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is Udyam registration?', 'The government\'s official MSME registration on the Udyam portal. Businesses are classified as micro, small or medium based on investment in plant & machinery and annual turnover.'],
        ['bi-people', 'Who should register?', 'Manufacturers, service providers, traders (wholesale and retail), proprietorships, firms, LLPs and companies — any business within the MSME investment and turnover limits.'],
        ['bi-graph-up-arrow', 'Why register?', 'MSME status is the key that opens priority-sector lending, interest subsidies, the 45-day payment protection rule, tender relaxations and dozens of central and state schemes.'],
    ],
    'benefits_title' => 'What Your Udyam Certificate Unlocks',
    'benefits' => [
        ['bi-bank', 'Collateral-Free Credit', 'Priority-sector lending and CGTMSE-backed loans without collateral security.'],
        ['bi-alarm', '45-Day Payment Protection', 'Buyers must pay MSMEs within 45 days — with compound interest payable on delays.'],
        ['bi-percent', 'Interest & Fee Subsidies', 'Interest subvention schemes plus concessions on patent, trademark and ISO costs.'],
        ['bi-cart-check', 'Tender Advantages', 'EMD exemptions and MSE purchase preference in government procurement.'],
        ['bi-lightning-charge', 'Utility Concessions', 'Many states offer electricity-duty and other levies at concessional MSME rates.'],
        ['bi-shield-check', 'Scheme Eligibility', 'Gateway to PMEGP, CLCSS and a wide range of central and state MSME schemes.'],
    ],
    'eligibility_title' => 'MSME Classification',
    'eligibility' => [
        ['bi-1-circle', 'Micro Enterprise', 'Investment up to ₹2.5 crore and turnover up to ₹10 crore.'],
        ['bi-2-circle', 'Small Enterprise', 'Investment up to ₹25 crore and turnover up to ₹100 crore.'],
        ['bi-3-circle', 'Medium Enterprise', 'Investment up to ₹125 crore and turnover up to ₹500 crore.'],
        ['bi-shop', 'All Entity Types Welcome', 'Proprietorships, partnerships, LLPs, companies — and traders too.'],
    ],
    'callout' => 'Registration is free on the government portal and the certificate never expires.',
    'documents' => [
        ['bi-person-vcard', 'Aadhaar Card', 'of the proprietor / partner / director'],
        ['bi-credit-card-2-front', 'PAN Card', 'of the business or owner'],
        ['bi-receipt', 'GSTIN', 'where GST registration is applicable'],
        ['bi-phone', 'Aadhaar-Linked Mobile', 'for OTP verification during filing'],
        ['bi-bank', 'Bank Details', 'account number and IFSC'],
        ['bi-shop', 'Business Details', 'activity, address and commencement date'],
        ['bi-people', 'Employee Count', 'approximate headcount'],
        ['bi-cash-stack', 'Investment & Turnover', 'figures auto-verified from ITR/GST data'],
    ],
    'process_note' => 'Typical timeline: 1–2 working days',
    'process' => [
        ['bi-chat-dots', 'Free Consultation', 'We confirm your classification and the benefits you can claim.'],
        ['bi-folder-check', 'Details Collection', 'Aadhaar, PAN, GST and business information are gathered.'],
        ['bi-phone', 'OTP Verification', 'Filing is authenticated with Aadhaar OTP on the Udyam portal.'],
        ['bi-file-earmark-arrow-up', 'Application Submitted', 'PAN and GST data are validated automatically by the portal.'],
        ['bi-patch-check', 'Certificate Issued', 'Your permanent Udyam Registration Number and certificate arrive by email.'],
    ],
    'faqs' => [
        ['Is Udyam registration free?', 'Yes — the government portal charges nothing. Our professional fee covers accurate classification, filing and guidance on claiming benefits.'],
        ['How long is the certificate valid?', 'For the lifetime of the enterprise. Only your investment/turnover data needs periodic updating, which happens largely automatically through ITR and GST linkage.'],
        ['Can traders register under Udyam?', 'Yes — wholesale and retail traders are eligible for Udyam registration and priority-sector lending benefits.'],
        ['What is the 45-day payment rule?', 'Buyers of goods or services from a registered MSME must pay within 45 days of acceptance, failing which they owe compound interest at three times the bank rate — a powerful cash-flow protection.'],
        ['Can I have multiple Udyam registrations?', 'No — one registration per PAN, covering all activities and branches of the enterprise together.'],
        ['What happens if my business grows beyond the limits?', 'Your classification is upgraded (e.g., micro to small) based on the latest data. Benefits of the lower category continue for a transition period as per rules.'],
        ['Is GST mandatory for Udyam registration?', 'GSTIN is required only where GST law itself makes you liable to register. Businesses exempt from GST can register on Udyam without it.'],
        ['Do I need to renew or re-register?', 'No renewals. Enterprises with the old Udyog Aadhaar had to migrate to Udyam — if you still hold a UAM, we can migrate you.'],
    ],
    'cta' => ['heading' => 'Ready to Claim Your MSME Benefits?', 'sub' => 'Get your lifetime-valid Udyam certificate and start saving from day one.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
