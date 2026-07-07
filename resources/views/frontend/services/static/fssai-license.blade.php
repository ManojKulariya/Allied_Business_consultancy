@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'FSSAI License & Registration',
    'crumb' => 'FSSAI License',
    'category' => ['label' => 'Licenses & Registrations', 'slug' => 'licenses-registrations'],
    'eyebrow_icon' => 'bi-patch-check',
    'seo_title' => 'FSSAI License & Registration Online',
    'seo_description' => 'FSSAI Basic Registration, State License or Central License — the right food safety approval for your business, filed correctly the first time. 7–30 day turnaround.',
    'intro' => 'Every food business needs the FSSAI\'s approval — the question is which one. We assess your turnover and operations, get you the correct Basic Registration, State or Central License, and keep you compliant thereafter.',
    'chips' => [
        ['bi-patch-check-fill', 'Correct Category Assessed'],
        ['bi-clock-history', '7–30 Working Days'],
        ['bi-shield-fill-check', 'Renewal Tracking Included'],
    ],
    'illustration' => [
        ['bi-clipboard-data', 'Turnover & Category Assessed'],
        ['bi-file-earmark-text', 'Application Documents Prepared'],
        ['bi-file-earmark-arrow-up', 'FSSAI Portal Filing Done'],
        ['bi-award', 'License Certificate Issued!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is an FSSAI license?', 'Mandatory approval from the Food Safety and Standards Authority of India for anyone manufacturing, storing, distributing, transporting or selling food — confirming your operations meet food safety standards.'],
        ['bi-people', 'Who needs it?', 'Every food business — restaurants, cloud kitchens, manufacturers, traders, importers, and even home-based food sellers — the specific category depends on annual turnover and business scale.'],
        ['bi-graph-up-arrow', 'Why does the category matter?', 'Applying for the wrong tier (Basic vs State vs Central) means rejection and lost time. Getting the assessment right the first time is what actually saves weeks of delay.'],
    ],
    'benefits_title' => 'Why FSSAI Registration Matters',
    'benefits' => [
        ['bi-shield-check', 'Legal Compliance', 'Operating without a valid licence risks penalties, closure orders and prosecution.'],
        ['bi-award', 'Consumer Trust', 'The FSSAI logo signals food safety compliance that customers actively look for.'],
        ['bi-cart-check', 'Platform & Marketplace Access', 'Food delivery apps and retail chains require a valid FSSAI licence to list you.'],
        ['bi-bank', 'Business Credibility', 'Banks and investors treat FSSAI compliance as a baseline operational standard.'],
        ['bi-graph-up', 'Expansion Ready', 'A Central License in place makes multi-state expansion administratively simpler.'],
        ['bi-file-earmark-check', 'Import-Export Enabled', 'Food import/export activity specifically requires a Central FSSAI License.'],
    ],
    'eligibility_eyebrow' => 'Which Category Applies',
    'eligibility_title' => 'FSSAI Registration Categories',
    'eligibility' => [
        ['bi-1-circle', 'Basic Registration', 'Annual turnover up to ₹12 lakh — petty food businesses, small vendors, home-based sellers.'],
        ['bi-2-circle', 'State License', 'Turnover between ₹12 lakh and ₹20 crore — most restaurants, manufacturers and traders.'],
        ['bi-3-circle', 'Central License', 'Turnover above ₹20 crore, or import/export and multi-state operations.'],
        ['bi-arrow-repeat', 'Renewal Cycle', 'Licenses are valid for 1–5 years as chosen, and must be renewed before expiry.'],
    ],
    'callout' => 'Operating even a small food stall without FSSAI registration risks penalties up to ₹5 lakh under the Food Safety and Standards Act.',
    'documents' => [
        ['bi-credit-card-2-front', 'PAN Card', 'of the proprietor or business entity'],
        ['bi-person-vcard', 'Aadhaar Card', 'of proprietor / partners / directors'],
        ['bi-house-door', 'Business Address Proof', 'rent agreement or ownership document'],
        ['bi-image', 'Passport-Size Photo', 'of the applicant'],
        ['bi-list-check', 'List of Food Products', 'items to be manufactured, sold or handled'],
        ['bi-file-earmark-text', 'Business Constitution Proof', 'incorporation certificate or partnership deed'],
        ['bi-diagram-3', 'Layout Plan', 'of the processing/storage unit, for State/Central License'],
        ['bi-file-earmark-check', 'NOC from Local Authority', 'municipal or panchayat NOC, where applicable'],
    ],
    'process_note' => 'Timeline: 7 days (Basic) to 30 working days (State/Central License)',
    'process_title' => 'FSSAI Registration in 5 Simple Steps',
    'process' => [
        ['bi-chat-dots', 'Free Consultation', 'We assess your turnover and operations to identify the correct category.'],
        ['bi-folder-check', 'Document Collection', 'Business, address and food-category details gathered and verified.'],
        ['bi-file-earmark-arrow-up', 'Application Filing', 'Application submitted on the FSSAI portal (FoSCoS) with all annexures.'],
        ['bi-search-heart', 'Department Processing', 'We respond to any clarification queries until approval is granted.'],
        ['bi-patch-check', 'License Issued', 'FSSAI certificate delivered, ready to display at your premises.'],
    ],
    'faqs' => [
        ['Do small food businesses really need FSSAI registration?', 'Yes — even petty food businesses below ₹12 lakh turnover need Basic Registration; the obligation applies regardless of scale, only the category changes.'],
        ['What is the difference between State and Central License?', 'State License covers businesses with turnover between ₹12 lakh and ₹20 crore operating within one state; Central License applies above ₹20 crore turnover or for import/export and multi-state operations.'],
        ['How long does FSSAI registration take?', 'Basic Registration typically within 7 working days; State and Central Licenses can take up to 30 working days depending on department processing and any premises inspection required.'],
        ['Is a premises inspection required?', 'For State and Central Licenses, an inspection may be conducted before or after approval depending on the food category and risk classification — we prepare you for what to expect.'],
        ['What is the validity period of an FSSAI license?', 'You can choose a validity of 1 to 5 years at the time of application — longer validity reduces renewal frequency but requires higher upfront fees.'],
        ['Can I sell on food delivery apps without FSSAI registration?', 'No — Swiggy, Zomato and similar platforms mandatorily require a valid FSSAI registration number before listing any food business.'],
        ['What happens if my license expires?', 'Operating with an expired license is treated the same as operating without one — renewal should be filed at least 30 days before expiry to avoid a compliance gap.'],
        ['Do cloud kitchens and home-based sellers need FSSAI too?', 'Yes — any entity manufacturing, packaging or selling food, regardless of whether it has a physical storefront, falls within FSSAI\'s scope.'],
    ],
    'cta' => ['heading' => 'Ready to Get FSSAI Registered?', 'sub' => 'The right category, filed correctly the first time.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
