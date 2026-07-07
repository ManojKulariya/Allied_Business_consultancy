@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'PF & ESI Registration',
    'crumb' => 'PF & ESI Registration',
    'category' => ['label' => 'Payroll & HR Services', 'slug' => 'payroll-hr-services'],
    'eyebrow_icon' => 'bi-shield-plus',
    'seo_title' => 'PF & ESI Registration for Employers',
    'seo_description' => 'Get your EPFO and ESIC employer registration done right — applicability check, document filing and portal setup for businesses crossing 20 (PF) or 10 (ESI) employees.',
    'intro' => 'Crossed the employee threshold? PF and ESI registration become mandatory the day you do. We assess applicability, prepare your application and get your establishment registered with EPFO and ESIC without delay.',
    'chips' => [
        ['bi-patch-check-fill', 'EPFO & ESIC Registered'],
        ['bi-clock-history', '3–7 Working Days'],
        ['bi-shield-fill-check', 'Applicability Verified First'],
    ],
    'illustration' => [
        ['bi-people', 'Employee Count Verified'],
        ['bi-file-earmark-text', 'Application Documents Prepared'],
        ['bi-file-earmark-arrow-up', 'EPFO & ESIC Portals Filed'],
        ['bi-award', 'Employer Codes Issued!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is PF registration?', 'Enrolment with the Employees\' Provident Fund Organisation (EPFO) that gives your establishment a code and requires monthly PF contributions — a retirement savings scheme jointly funded by employer and employee.'],
        ['bi-shield-plus', 'What is ESI registration?', 'Enrolment with the Employees\' State Insurance Corporation (ESIC) that provides eligible employees medical care, cash benefits and coverage for sickness, maternity and workplace injury.'],
        ['bi-graph-up-arrow', 'Why do they matter together?', 'Both are triggered by employee headcount and, once applicable, are mandatory — not optional. Registering promptly avoids penalties and gives your workforce the social security benefits they are legally entitled to.'],
    ],
    'benefits_title' => 'Benefits of PF & ESI Registration',
    'benefits' => [
        ['bi-piggy-bank', 'Retirement Security', 'Employees build a retirement corpus through consistent, employer-matched PF contributions.'],
        ['bi-heart-pulse', 'Medical Coverage', 'ESI-registered employees and their families access cashless medical treatment.'],
        ['bi-shield-check', 'Legal Compliance', 'Meets mandatory EPFO/ESIC obligations, avoiding penalties and prosecution risk.'],
        ['bi-award', 'Employer Credibility', 'Registered establishments are more attractive to quality talent and easier to onboard as vendors.'],
        ['bi-cash-coin', 'Tax Benefits', 'Employer PF contributions are an allowable business expense under the Income Tax Act.'],
        ['bi-people', 'Employee Retention', 'Statutory benefits are a baseline expectation — offering them properly builds trust.'],
    ],
    'eligibility_title' => 'Who Needs PF & ESI Registration?',
    'eligibility' => [
        ['bi-people', 'PF — 20+ Employees', 'Mandatory once any establishment employs 20 or more persons; voluntary registration is available below that.'],
        ['bi-shield-plus', 'ESI — 10+ Employees', 'Mandatory for establishments with 10 or more employees (varies slightly by state) in notified areas.'],
        ['bi-cash-coin', 'ESI Wage Ceiling', 'Applies to employees earning up to ₹21,000 per month (₹25,000 for persons with disability).'],
        ['bi-building', 'Covered Establishments', 'Factories, shops, and a wide range of commercial establishments as notified under each Act.'],
    ],
    'callout' => 'Once applicable, registration must happen promptly — the obligation doesn\'t wait for your convenience, and neither should the paperwork.',
    'documents' => [
        ['bi-award', 'Certificate of Incorporation', 'or business registration proof'],
        ['bi-credit-card-2-front', 'PAN Card', 'of the business entity'],
        ['bi-people', 'Employee Details', 'names, dates of joining, salaries'],
        ['bi-house-door', 'Address Proof', 'of the business premises'],
        ['bi-bank', 'Cancelled Cheque', 'of the business bank account'],
        ['bi-file-earmark-text', 'Partnership Deed / MOA', 'as applicable to the entity type'],
        ['bi-person-vcard', 'Director / Partner KYC', 'PAN and Aadhaar of signatories'],
        ['bi-vector-pen', 'Digital Signature', 'of the authorised signatory'],
    ],
    'process_note' => 'Typical timeline: 3–7 working days once applicability is confirmed',
    'process_title' => 'Registration in 5 Simple Steps',
    'process' => [
        ['bi-chat-dots', 'Applicability Check', 'We confirm whether PF, ESI or both apply based on your headcount and wages.'],
        ['bi-folder-check', 'Document Collection', 'Entity, address and employee details are gathered and verified.'],
        ['bi-file-earmark-arrow-up', 'Portal Application', 'Registration filed on the EPFO Unified Portal and ESIC portal.'],
        ['bi-search-heart', 'Verification', 'We respond to any department queries until approval is granted.'],
        ['bi-patch-check', 'Codes Issued', 'PF establishment code and ESIC employer code delivered, ready for monthly compliance.'],
    ],
    'faqs' => [
        ['At what employee count does PF become mandatory?', '20 or more employees triggers mandatory EPFO registration. Establishments below this can register voluntarily, which some choose to do for employee benefit and retention reasons.'],
        ['At what employee count does ESI become mandatory?', '10 or more employees (in most states) working in a notified area, with the scheme covering those earning up to ₹21,000 per month.'],
        ['Do all employees need to be enrolled once we register?', 'For PF, generally yes, though employees already earning above the PF wage ceiling at the time of joining have limited exemption options. For ESI, only employees within the wage ceiling are covered.'],
        ['What is the employer\'s contribution rate?', 'PF: 12% of basic wages from both employer and employee (with some components adjusted for EPS). ESI: 3.25% employer and 0.75% employee of gross wages, subject to periodic revision.'],
        ['Can a business register voluntarily before crossing the threshold?', 'Yes — voluntary PF registration is common among startups wanting to offer the benefit early; once registered voluntarily, ongoing compliance obligations apply just as they would for mandatory registration.'],
        ['What happens if we delay registration after becoming eligible?', 'Delayed registration attracts interest and damages under the respective Acts, calculated from the date the establishment became liable — not from when you eventually register.'],
        ['Is ESI applicable in every location?', 'ESI coverage is notified area-wise; a location must be a notified ESI area for the scheme to apply. We verify this as part of the applicability check.'],
        ['What ongoing compliance follows registration?', 'Monthly PF and ESI contribution deposits and return filings — see our dedicated PF & ESI Return Filing service for the ongoing compliance that follows registration.'],
    ],
    'cta' => ['heading' => 'Ready to Register for PF & ESI?', 'sub' => 'Applicability checked, paperwork handled, employer codes delivered.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
