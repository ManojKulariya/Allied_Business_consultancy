@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Shop & Establishment License',
    'crumb' => 'Shop & Establishment',
    'category' => ['label' => 'Licenses & Registrations', 'slug' => 'licenses-registrations'],
    'eyebrow_icon' => 'bi-shop',
    'seo_title' => 'Shop & Establishment License Registration',
    'seo_description' => 'Get your Shop & Establishment License — mandatory for shops, offices and commercial establishments under state labour law. Fast filing, 3–10 working days.',
    'intro' => 'The basic licence almost every commercial establishment needs, yet the one most founders forget. We register your shop, office or establishment under your state\'s Shops and Establishments Act — quickly and correctly.',
    'chips' => [
        ['bi-patch-check-fill', 'State Labour Law Compliant'],
        ['bi-clock-history', '3–10 Working Days'],
        ['bi-bank', 'Enables Bank Account Opening'],
    ],
    'illustration' => [
        ['bi-shop', 'Premises Details Verified'],
        ['bi-people', 'Employee Count Recorded'],
        ['bi-file-earmark-arrow-up', 'State Portal Filing Done'],
        ['bi-award', 'License Certificate Issued!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is a Shop & Establishment License?', 'A registration mandated under each state\'s Shops and Establishments Act, governing working hours, holidays, wages and working conditions for shops, commercial establishments and offices.'],
        ['bi-people', 'Who needs it?', 'Virtually every commercial establishment — shops, offices, restaurants, hotels, theatres and other places where trade, business or services are carried on — usually within a set number of days of commencing operations.'],
        ['bi-graph-up-arrow', 'Why is it easy to overlook?', 'Unlike GST or PAN, this state-level licence gets little attention despite being a basic legal requirement — and banks, PF/ESI registration and several other approvals often ask for it as supporting proof.'],
    ],
    'benefits_title' => 'Why This License Matters',
    'benefits' => [
        ['bi-shield-check', 'Basic Legal Compliance', 'Meets the fundamental state labour law requirement for operating a commercial establishment.'],
        ['bi-bank', 'Bank Account Opening', 'Frequently requested by banks as proof of business existence for current accounts.'],
        ['bi-file-earmark-check', 'Supporting Document', 'Accepted as address and operational proof for GST, PF/ESI and other registrations.'],
        ['bi-people', 'Employee Welfare Framework', 'Establishes documented working hours, leave and wage compliance from the start.'],
        ['bi-award', 'Avoids Penalties', 'Operating without registration risks fines under the applicable state Act.'],
        ['bi-graph-up', 'Multi-Branch Ready', 'Each branch or premises can be registered as your operations expand.'],
    ],
    'eligibility_title' => 'Who Needs to Register?',
    'eligibility' => [
        ['bi-shop', 'Shops & Retail Outlets', 'Any premises where goods are sold, wholesale or retail.'],
        ['bi-building', 'Commercial Establishments', 'Offices, IT companies, consultancies and service businesses.'],
        ['bi-cup-hot', 'Hospitality & Food Businesses', 'Restaurants, cafes, hotels and similar establishments.'],
        ['bi-people', 'Any Employer of Staff', 'Establishments employing even one person typically fall within scope.'],
    ],
    'callout' => 'Most states require registration within 30 days of commencing business — earlier filing avoids any compliance gap.',
    'documents' => [
        ['bi-credit-card-2-front', 'PAN Card', 'of the proprietor or business entity'],
        ['bi-person-vcard', 'Aadhaar Card', 'of the proprietor / partners / directors'],
        ['bi-house-door', 'Premises Address Proof', 'rent agreement or ownership document'],
        ['bi-lightning-charge', 'Utility Bill', 'electricity/water bill for the premises (≤ 2 months old)'],
        ['bi-image', 'Passport-Size Photo', 'of the applicant'],
        ['bi-people', 'Employee Details', 'number of employees and their basic details'],
        ['bi-file-earmark-text', 'Business Constitution Proof', 'incorporation certificate or partnership deed'],
        ['bi-file-earmark-check', 'Owner NOC', 'if the premises are rented'],
    ],
    'process_note' => 'Timeline varies by state: typically 3–10 working days',
    'process_title' => 'Registration in 5 Simple Steps',
    'process' => [
        ['bi-chat-dots', 'Free Consultation', 'We confirm applicability under your specific state\'s Act.'],
        ['bi-folder-check', 'Document Collection', 'Premises, business and employee details gathered.'],
        ['bi-file-earmark-arrow-up', 'Application Filing', 'Registration filed on the relevant state labour department portal.'],
        ['bi-search-heart', 'Verification', 'We respond to any queries raised during department processing.'],
        ['bi-patch-check', 'License Issued', 'Certificate delivered, ready to display at your premises.'],
    ],
    'faqs' => [
        ['Is this license required even for a small office?', 'Yes — most state Acts apply to any commercial establishment regardless of size, including small offices and single-person operations, though specific thresholds vary by state.'],
        ['How long does registration take?', 'Typically 3–10 working days, depending on the state\'s specific process — some states offer instant online registration, others require document verification.'],
        ['What is the validity period?', 'Varies by state — some issue licenses valid for 1 year requiring annual renewal, others issue longer-validity or lifetime registrations. We confirm your state\'s specific rule at the outset.'],
        ['Do I need a separate license for each branch?', 'Yes — each place of business or branch premises typically requires its own registration under the applicable state Act.'],
        ['Is this the same as trade licence from the municipal corporation?', 'No — these are separate registrations under different authorities (state labour department vs municipal corporation), though both may be required depending on your business and location.'],
        ['What happens if I operate without this registration?', 'Penalties vary by state but typically include fines, and the missing registration can also complicate bank account opening and other regulatory approvals that ask for it as proof.'],
        ['Can this registration be done online?', 'Most states now offer online filing through their labour department portal — we handle the digital submission and any physical follow-up your specific state still requires.'],
        ['Does this license cover employee-related compliance too?', 'It establishes the framework for working hours, holidays and conditions of service — separate registrations (PF, ESI) still apply once you cross their respective employee thresholds.'],
    ],
    'cta' => ['heading' => 'Ready to Register Your Shop or Office?', 'sub' => 'The basic licence every establishment needs — filed correctly for your state.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
