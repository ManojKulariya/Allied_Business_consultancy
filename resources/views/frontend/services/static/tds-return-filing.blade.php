@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'TDS Return Filing',
    'crumb' => 'TDS Returns',
    'category' => ['label' => 'Income Tax Services', 'slug' => 'income-tax-services'],
    'eyebrow_icon' => 'bi-percent',
    'seo_title' => 'TDS Return Filing Services',
    'seo_description' => 'Quarterly TDS return filing — 24Q, 26Q, 27Q and 26QB — with challan reconciliation, PAN validation, Form 16/16A generation and default correction. Zero ₹200/day late fees.',
    'intro' => 'Deducting TDS is easy — reporting it correctly is not. We prepare and file your quarterly TDS returns, reconcile challans, validate PANs and issue Form 16/16A — so deductees get their credit and you get no defaults.',
    'chips' => [
        ['bi-calendar-check-fill', 'Quarterly, On Time'],
        ['bi-file-earmark-check', 'Form 16 / 16A Included'],
        ['bi-shield-fill-check', 'Default-Free Filing'],
    ],
    'illustration' => [
        ['bi-cash-stack', 'Deductions & Challans Collected'],
        ['bi-person-check', 'PANs Validated'],
        ['bi-file-earmark-arrow-up', 'Quarterly Return Filed'],
        ['bi-award', 'Form 16 / 16A Issued!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is a TDS return?', 'A quarterly statement of the tax you deducted at source — from salaries, contractor payments, rent, professional fees or property purchases — mapping every deduction to a PAN and a deposited challan.'],
        ['bi-people', 'Who must file?', 'Every business or person holding a TAN who deducts TDS: employers (24Q), businesses paying vendors and professionals (26Q), payers to non-residents (27Q), and property buyers above ₹50 lakh (26QB).'],
        ['bi-graph-up-arrow', 'Why accuracy matters?', 'Your return is how employees and vendors get tax credit in their 26AS. Wrong PANs, short payments or late filings trigger ₹200/day fees, interest and defaults that take months to fix.'],
    ],
    'benefits_title' => 'Why Businesses Outsource TDS Compliance',
    'benefits' => [
        ['bi-alarm', 'No ₹200/Day Late Fees', 'A managed quarterly calendar keeps Section 234E fees and 271H penalties at zero.'],
        ['bi-people', 'Happy Deductees', 'Employees and vendors see credit in their 26AS/AIS on time — fewer disputes, faster onboarding.'],
        ['bi-arrow-left-right', 'Challan Reconciliation', 'Every deduction matched to a CIN before filing — the top cause of defaults, eliminated.'],
        ['bi-person-check', 'PAN Validation', 'Invalid PANs (which force 20% deduction) are caught before they enter your return.'],
        ['bi-file-earmark-check', 'Certificates Done', 'Form 16 and 16A generated from TRACES and delivered every quarter/year.'],
        ['bi-wrench', 'Default Resolution', 'Existing TRACES demands? We file correction statements and close them out.'],
    ],
    'eligibility_eyebrow' => 'Return Types',
    'eligibility_title' => 'Returns We File for You',
    'eligibility' => [
        ['bi-people', 'Form 24Q — Salaries', 'Quarterly return for TDS on employee salaries; Q4 includes the annual salary detail for Form 16.'],
        ['bi-briefcase', 'Form 26Q — Domestic Payments', 'Contractors, rent, professional fees, interest, commission and other resident payments.'],
        ['bi-globe', 'Form 27Q — Non-Residents', 'Payments to NRIs and foreign entities, with DTAA rate application where eligible.'],
        ['bi-house-door', 'Form 26QB / 26QC', 'TDS on property purchases above ₹50 lakh and on high rent — challan-cum-statements.'],
    ],
    'callout' => 'Quarterly due dates: 31 July · 31 October · 31 January · 31 May — each missed day costs ₹200 under Section 234E.',
    'documents' => [
        ['bi-person-vcard', 'TAN & Login', 'TAN details with TRACES/portal access'],
        ['bi-cash-stack', 'Deduction Register', 'payment-wise TDS deducted in the quarter'],
        ['bi-receipt', 'Challan Details', 'CINs of all TDS deposits made'],
        ['bi-credit-card-2-front', 'Deductee PANs', 'with names as per PAN records'],
        ['bi-people', 'Salary Workings', 'employee-wise salary and regime declarations (24Q)'],
        ['bi-file-earmark-text', 'Vendor Invoices', 'sections applied — 194C, 194J, 194I etc.'],
        ['bi-globe', 'NR Payment Papers', 'invoices, TRC and Form 15CA/CB for 27Q'],
        ['bi-journal', 'Previous Returns', 'prior filings and any TRACES default notices'],
    ],
    'process_note' => 'A fixed quarterly rhythm — deduction data in, filed return and certificates out',
    'process_title' => 'Quarterly Filing in 5 Simple Steps',
    'process' => [
        ['bi-chat-dots', 'Onboarding', 'We map your payment types, sections and deductee base once.'],
        ['bi-cloud-arrow-up', 'Data Collection', 'Quarterly deduction and challan data arrives in any format you use.'],
        ['bi-arrow-left-right', 'Validation & Matching', 'PANs verified, challans reconciled, section rates checked.'],
        ['bi-file-earmark-arrow-up', 'Return Filing', 'The quarterly statement is validated (FVU) and filed; acknowledgement shared.'],
        ['bi-patch-check', 'Certificates & Report', 'Form 16/16A generated from TRACES with a clean compliance summary.'],
    ],
    'faqs' => [
        ['What are the due dates for TDS returns?', 'Quarter 1 (Apr–Jun) by 31 July, Q2 by 31 October, Q3 by 31 January, and Q4 by 31 May. TDS itself must be deposited by the 7th of the following month (30 April for March).'],
        ['What does late filing cost?', '₹200 per day under Section 234E until filed (capped at the TDS amount), plus a possible penalty of ₹10,000–₹1 lakh under 271H for late or incorrect returns. Interest applies separately on late deposit.'],
        ['Do I need a TAN to file TDS returns?', 'Yes — all regular TDS returns require a TAN. The exception is property TDS (26QB) and high-rent TDS (26QC), which individuals file with just PAN. We obtain TANs too, if you need one.'],
        ['What happens if a deductee\'s PAN is wrong?', 'Credit doesn\'t reach them, and TDS applies at 20% under Section 206AA. We validate every PAN against records before filing and fix past mismatches through correction statements.'],
        ['When do employees get Form 16?', 'By 15 June following the financial year, generated from TRACES after the Q4 return. Form 16A for non-salary TDS is due within 15 days of each quarterly filing — both included in our service.'],
        ['I received a TRACES default notice. Can you fix it?', 'Yes — short payment, short deduction, interest and PAN-error defaults are resolved through correction statements and, where needed, supplementary challans. Clearing old defaults is a common first assignment.'],
        ['I bought a property above ₹50 lakh. What do I file?', 'Deduct 1% TDS from the seller and file Form 26QB within 30 days of the month-end of deduction, then issue Form 16B. We handle the whole sequence, including for multiple buyers/sellers.'],
        ['Is a nil TDS return mandatory?', 'A nil return is not compulsory for a quarter with no deductions, but filing a declaration of non-liability on TRACES avoids "non-filer" follow-ups — we advise per your pattern.'],
    ],
    'cta' => ['heading' => 'Ready for Default-Free TDS Compliance?', 'sub' => 'Quarterly returns, certificates and corrections — handled end-to-end.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
