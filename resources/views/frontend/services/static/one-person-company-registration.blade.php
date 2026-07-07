@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'One Person Company (OPC) Registration',
    'crumb' => 'One Person Company',
    'category' => ['label' => 'Business Registration', 'slug' => 'business-registration'],
    'eyebrow_icon' => 'bi-person-workspace',
    'seo_title' => 'One Person Company (OPC) Registration',
    'seo_description' => 'Register a One Person Company online in 7–10 working days. Limited liability for solo founders with full control — complete MCA filing, DSC, PAN & TAN at a fixed fee.',
    'intro' => 'Run your business solo — with the protection of a company. An OPC gives a single founder limited liability, corporate credibility and complete control, and we handle the entire MCA process for you.',
    'chips' => [
        ['bi-person-check-fill', 'Built for Solo Founders'],
        ['bi-clock-history', '7–10 Working Days'],
        ['bi-tags-fill', 'Fixed Transparent Pricing'],
    ],
    'illustration' => [
        ['bi-person-badge', 'Sole Director & Member Verified'],
        ['bi-person-plus', 'Nominee Appointed'],
        ['bi-file-earmark-text', 'SPICe+ Filed with MCA'],
        ['bi-award', 'OPC Incorporated!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is a One Person Company?', 'A company under the Companies Act, 2013 that needs only one person as both shareholder and director. It is a separate legal entity — your personal assets stay protected from business risks.'],
        ['bi-people', 'Who should register one?', 'Solo entrepreneurs, consultants, freelancers and single-owner businesses who want corporate status, limited liability and better access to banking — without needing a co-founder.'],
        ['bi-graph-up-arrow', 'Why choose this structure?', 'You get the credibility and protection of a private limited company while remaining the only decision-maker. A nominee ensures continuity, and conversion to a private limited company is possible as you grow.'],
    ],
    'benefits_title' => 'Why Solo Founders Choose an OPC',
    'benefits' => [
        ['bi-shield-check', 'Limited Liability', 'Business debts stay with the company — your personal savings and property remain protected.'],
        ['bi-person-check', 'Complete Control', 'One owner, one decision-maker. No partners or boards to consult on daily decisions.'],
        ['bi-building-check', 'Separate Legal Entity', 'The OPC owns assets, signs contracts and can sue or be sued in its own name.'],
        ['bi-award', 'Corporate Credibility', 'Banks, vendors and clients treat a registered company more seriously than a proprietorship.'],
        ['bi-arrow-repeat', 'Business Continuity', 'Your appointed nominee keeps the company alive in case of death or incapacity.'],
        ['bi-file-earmark-minus', 'Lighter Compliance', 'Fewer board-meeting formalities and a simpler annual return (MGT-7A) than a private limited company.'],
    ],
    'eligibility' => [
        ['bi-person-badge', 'One Director + One Member', 'A single individual acts as both — the simplest company structure permitted by law.'],
        ['bi-person-plus', 'One Nominee', 'You must name a nominee who takes over ownership if you are unable to continue.'],
        ['bi-globe-americas', 'Resident Rule', 'The member must be an individual who has stayed in India for at least 120 days in the previous financial year.'],
        ['bi-exclamation-octagon', 'One OPC Per Person', 'An individual can incorporate only one OPC and be nominee in only one other.'],
    ],
    'callout' => 'No minimum capital required — and OPCs can now convert to private limited at any time.',
    'documents' => [
        ['bi-credit-card-2-front', 'PAN Card', 'of the owner and the nominee'],
        ['bi-person-vcard', 'Aadhaar Card', 'of the owner and the nominee'],
        ['bi-file-earmark-person', 'Identity Proof', 'passport, voter ID or driving licence'],
        ['bi-file-earmark-text', 'Address Proof', 'recent bank statement or utility bill'],
        ['bi-image', 'Passport-Size Photo', 'of the owner'],
        ['bi-person-plus', 'Nominee Consent (INC-3)', 'signed consent from your nominee'],
        ['bi-house-door', 'Office Address Proof', 'rent agreement or ownership document'],
        ['bi-lightning-charge', 'Office Utility Bill', 'electricity / water bill (≤ 2 months old)'],
    ],
    'process_note' => 'Typical timeline: 7–10 working days, subject to MCA approvals',
    'process' => [
        ['bi-chat-dots', 'Free Consultation', 'We confirm OPC is the right fit and plan your incorporation.'],
        ['bi-folder-check', 'Documents & DSC', 'We collect documents from you and your nominee, and issue your digital signature.'],
        ['bi-search-heart', 'Name Approval', 'Your company name is reserved with MCA through SPICe+ Part A.'],
        ['bi-file-earmark-arrow-up', 'Incorporation Filing', 'SPICe+ Part B with MOA, AOA and nominee consent is filed with the ROC.'],
        ['bi-patch-check', 'Certificate Issued', 'You receive the COI with CIN, plus company PAN and TAN — ready to operate.'],
    ],
    'faqs' => [
        ['Who can register a One Person Company?', 'Any Indian citizen who stayed in India for at least 120 days in the previous financial year can incorporate an OPC as its sole member and director.'],
        ['Why is a nominee required?', 'The nominee steps in as the member if the owner dies or becomes incapable, ensuring the company continues. The nominee must consent in Form INC-3 and can be changed later.'],
        ['Is there a minimum capital requirement?', 'No. You can start an OPC with any capital amount you choose.'],
        ['Can an OPC be converted into a private limited company?', 'Yes. An OPC can convert voluntarily at any time — the earlier mandatory turnover and capital thresholds for conversion were removed in 2021.'],
        ['What annual compliances apply to an OPC?', 'Financial statements (AOC-4), the simplified annual return (MGT-7A), income tax return, and auditor appointment. We provide a complete compliance calendar.'],
        ['Can an OPC raise investment from others?', 'An OPC has a single shareholder by definition, so equity investment requires converting to a private limited company first — a straightforward process we can manage.'],
        ['Are there businesses an OPC cannot do?', 'Yes — an OPC cannot carry on non-banking financial investment activities or be converted into a Section 8 (non-profit) company.'],
        ['How is an OPC taxed?', 'Like other companies — at the corporate tax rate applicable to its turnover, with the same deductions. We advise the optimal regime during onboarding.'],
    ],
    'cta' => ['heading' => 'Ready to Register Your One Person Company?'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
