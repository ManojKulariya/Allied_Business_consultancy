@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Section 8 Company Registration',
    'crumb' => 'Section 8 Company',
    'category' => ['label' => 'Business Registration', 'slug' => 'business-registration'],
    'eyebrow_icon' => 'bi-heart',
    'seo_title' => 'Section 8 Company (NGO) Registration',
    'seo_description' => 'Register a Section 8 non-profit company in 15–20 working days — central licence, MOA/AOA drafting, incorporation and guidance on 12A/80G tax registrations.',
    'intro' => 'The most credible legal structure for a non-profit in India. We obtain your Section 8 licence and incorporate your organisation — built for charity, education, environment, arts, sports and social welfare.',
    'chips' => [
        ['bi-patch-check-fill', 'Central Govt. Licence'],
        ['bi-clock-history', '15–20 Working Days'],
        ['bi-heart-fill', 'Built for Non-Profits'],
    ],
    'illustration' => [
        ['bi-heart', 'Charitable Objects Defined'],
        ['bi-file-earmark-text', 'Licence + SPICe+ Filed'],
        ['bi-award', 'Section 8 Licence Granted'],
        ['bi-stars', 'NGO Ready to Serve!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is a Section 8 company?', 'A non-profit company under Section 8 of the Companies Act, 2013. All income must be applied to its charitable objects — no dividends to members — in exchange for a central government licence and special privileges.'],
        ['bi-people', 'Who should register one?', 'NGOs, foundations, educational and research bodies, industry associations and CSR-driven initiatives that want the strongest governance credentials for donors, CSR funds and government partnerships.'],
        ['bi-graph-up-arrow', 'Why choose it over a trust or society?', 'Corporate-grade governance, national validity, MCA transparency and the highest donor confidence — the preferred format for serious, scalable non-profits.'],
    ],
    'benefits_title' => 'Why Non-Profits Choose Section 8',
    'benefits' => [
        ['bi-award', 'Maximum Credibility', 'MCA-regulated with public filings — the structure donors, CSR teams and ministries trust most.'],
        ['bi-shield-check', 'Limited Liability', 'Members\' personal assets stay protected while serving the cause.'],
        ['bi-percent', 'Tax Benefit Ready', 'Eligible for 12A (income exemption) and 80G (donor deduction) registrations.'],
        ['bi-cash-coin', 'No Minimum Capital', 'Start with any amount; no "Limited" suffix is required in the name.'],
        ['bi-arrow-repeat', 'Perpetual Succession', 'The organisation outlives its founders — governance passes smoothly.'],
        ['bi-globe', 'CSR & Grant Eligible', 'Structured to receive CSR funds and, with FCRA, foreign contributions.'],
    ],
    'eligibility' => [
        ['bi-people', 'Minimum 2 Directors & Members', 'Individuals or entities; at least one director resident in India.'],
        ['bi-heart', 'Charitable Objects', 'Promotion of commerce, art, science, education, sports, research, social welfare, religion, charity or environment.'],
        ['bi-slash-circle', 'No Profit Distribution', 'Income and property must be applied solely to the objects — no dividends to members.'],
        ['bi-fonts', 'Suitable Name', 'Typically ends with Foundation, Forum, Association, Federation, Council or similar.'],
    ],
    'callout' => '12A and 80G tax registrations are separate applications after incorporation — we handle those too.',
    'documents' => [
        ['bi-credit-card-2-front', 'PAN Card', 'of all directors & members'],
        ['bi-person-vcard', 'Aadhaar Card', 'of all directors & members'],
        ['bi-file-earmark-person', 'Identity Proof', 'passport, voter ID or driving licence'],
        ['bi-file-earmark-text', 'Address Proof', 'recent bank statement or utility bill'],
        ['bi-image', 'Passport-Size Photos', 'of all directors'],
        ['bi-house-door', 'Office Address Proof', 'rent agreement or ownership + NOC'],
        ['bi-clipboard-data', '3-Year Financial Projection', 'estimated income & expenditure statement'],
        ['bi-file-earmark-ruled', 'Draft Objects', 'we draft the MOA (INC-13) and declarations'],
    ],
    'process_note' => 'Typical timeline: 15–20 working days including licence approval',
    'process' => [
        ['bi-chat-dots', 'Free Consultation', 'We define your objects and confirm Section 8 is the right vehicle.'],
        ['bi-folder-check', 'Documents & DSC', 'KYC collection, digital signatures and drafting of MOA, AOA and declarations.'],
        ['bi-search-heart', 'Name Approval', 'A name reflecting your objects is reserved through SPICe+ Part A.'],
        ['bi-file-earmark-arrow-up', 'Licence & Incorporation', 'The Section 8 licence and SPICe+ Part B are filed together with the ROC.'],
        ['bi-patch-check', 'Certificate Issued', 'COI with CIN, PAN and TAN issued — then we begin 12A/80G if opted.'],
    ],
    'faqs' => [
        ['How is a Section 8 company different from a trust or society?', 'It is regulated centrally by the MCA with audited public filings, giving it national validity and the highest credibility with donors and CSR funders. Trusts and societies are state-regulated with lighter oversight.'],
        ['Can a Section 8 company earn profits?', 'It can generate surpluses — but every rupee must be ploughed back into its objects. Distribution of profits or dividends to members is prohibited.'],
        ['Are donations to a Section 8 company tax-deductible?', 'Only after the company obtains 80G registration; its own income exemption needs 12A. Both are separate post-incorporation applications we can file for you.'],
        ['Can it receive foreign donations?', 'Only after FCRA registration, which generally requires three years of operations and a track record of spending on its objects (prior permission is possible for specific donations).'],
        ['Can directors or founders draw a salary?', 'Yes — reasonable remuneration for genuine services is permitted. What is barred is profit distribution, not fair compensation.'],
        ['Is there a minimum capital requirement?', 'No. A Section 8 company can be incorporated with any capital, and the name needs no "Private Limited" suffix.'],
        ['What annual compliances apply?', 'Broadly those of a company: audited accounts, AOC-4, MGT-7, income tax return, plus donor-related filings like Form 10BD once 80G is active. We provide a full calendar.'],
        ['Can an existing NGO convert to a Section 8 company?', 'A trust or society cannot directly convert, but its activities and assets can be transitioned into a new Section 8 company — we advise on the cleanest route.'],
    ],
    'cta' => ['heading' => 'Ready to Launch Your Non-Profit?', 'sub' => 'Build your cause on the structure donors trust the most.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
