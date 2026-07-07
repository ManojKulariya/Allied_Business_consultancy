@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Annual ROC Filing',
    'crumb' => 'Annual ROC Filing',
    'category' => ['label' => 'ROC & MCA Compliance', 'slug' => 'roc-mca-compliance'],
    'eyebrow_icon' => 'bi-clipboard2-check',
    'seo_title' => 'Annual ROC Filing for Companies & LLPs',
    'seo_description' => 'Annual ROC compliance made simple — AOC-4, MGT-7/7A and LLP Form 11/8 filed on time by experienced professionals. Avoid ₹100/day penalties with a managed compliance calendar.',
    'intro' => 'Every company and LLP owes the Registrar an annual account of itself. We prepare and file every ROC form on your compliance calendar — correctly, on time, and without the ₹100-a-day penalty clock ever starting.',
    'chips' => [
        ['bi-calendar-check-fill', 'Zero Missed Deadlines'],
        ['bi-patch-check-fill', 'MCA-Compliant Filing'],
        ['bi-tags-fill', 'Fixed Annual Fee'],
    ],
    'illustration' => [
        ['bi-journal-check', 'Financials Finalised'],
        ['bi-people', 'AGM Conducted & Minuted'],
        ['bi-file-earmark-arrow-up', 'AOC-4 & MGT-7 Filed'],
        ['bi-award', 'ROC Compliant for the Year!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is annual ROC filing?', 'The yearly submission every company and LLP makes to the Registrar of Companies — financial statements, annual returns and related disclosures — confirming the entity is active, solvent and properly governed.'],
        ['bi-exclamation-circle', 'Why does it matter so much?', 'ROC filings are public record: banks, investors and clients can pull them anytime. Miss them, and penalties accrue daily with no upper cap — plus the ROC can eventually strike the company off the register.'],
        ['bi-graph-up-arrow', 'Why file with experts?', 'The forms interlock with your AGM date, audit completion and DIN status. One missed sequence delays everything else — a managed calendar keeps every filing on schedule the first time.'],
    ],
    'benefits_title' => 'Why Timely ROC Compliance Pays Off',
    'benefits' => [
        ['bi-shield-check', 'Penalty-Free Standing', 'No ₹100-per-day-per-form additive fines — the single most avoidable cost in company compliance.'],
        ['bi-bank', 'Loan & Tender Ready', 'Banks and government tenders check ROC filing history before considering any application.'],
        ['bi-person-check', 'Director Protection', 'Persistent default risks director disqualification (Section 164) — timely filing keeps DINs safe.'],
        ['bi-building-check', 'Active Company Status', 'Avoids the ROC striking off the company for continuous non-filing.'],
        ['bi-graph-up', 'Investor Confidence', 'A clean MCA filing history is one of the first things due diligence checks.'],
        ['bi-file-earmark-check', 'Audit Continuity', 'Annual filing discipline keeps your statutory audit and books in sync year after year.'],
    ],
    'eligibility_eyebrow' => 'Mandatory ROC Forms',
    'eligibility_title' => 'What Gets Filed Every Year',
    'eligibility' => [
        ['bi-file-earmark-bar-graph', 'Form AOC-4', 'Financial statements filed within 30 days of the AGM — the financial half of annual compliance.'],
        ['bi-journal-text', 'Form MGT-7 / MGT-7A', 'The annual return (MGT-7A for small companies/OPCs) filed within 60 days of the AGM.'],
        ['bi-people', 'Form ADT-1', 'Auditor appointment or reappointment intimation, filed within 15 days of the AGM.'],
        ['bi-diagram-3', 'LLP Form 11 & Form 8', 'The LLP equivalents — annual return by 30 May and statement of accounts by 30 October.'],
    ],
    'callout' => 'Penalty snapshot: ₹100 per day, per form, with no upper ceiling — a form pending 90 days already costs ₹9,000, and it keeps climbing.',
    'documents' => [
        ['bi-file-earmark-bar-graph', 'Audited Financial Statements', 'P&L, balance sheet and notes'],
        ['bi-people', 'AGM Minutes & Notice', 'board and shareholder meeting records'],
        ['bi-person-badge', 'Director Details', 'DIN, DSC status and any changes during the year'],
        ['bi-clipboard-data', 'Shareholding Pattern', 'share transfers or allotments during the year'],
        ['bi-file-earmark-ruled', 'Auditor Appointment Details', 'for ADT-1, if applicable'],
        ['bi-journal', 'Statutory Registers', 'members, directors and charges registers'],
        ['bi-bank', 'Loan & Charge Details', 'for CHG forms, if secured borrowings exist'],
        ['bi-file-earmark-check', 'Previous Year Filings', 'for reference and continuity'],
    ],
    'process_note' => 'Typical timeline: filings complete within 60 days of your AGM',
    'process_title' => 'Annual Filing in 5 Simple Steps',
    'process' => [
        ['bi-chat-dots', 'Compliance Calendar', 'We map your AGM date, audit timeline and every form due for the year.'],
        ['bi-journal-check', 'Financial Finalisation', 'Audited statements and AGM minutes are readied for filing.'],
        ['bi-file-earmark-arrow-up', 'AOC-4 Filing', 'Financial statements filed within 30 days of the AGM.'],
        ['bi-people', 'MGT-7 / MGT-7A Filing', 'The annual return filed within 60 days of the AGM.'],
        ['bi-patch-check', 'Confirmation & Records', 'Filed challans and SRNs shared for your permanent records.'],
    ],
    'faqs' => [
        ['What are the penalties for late ROC filing?', 'A flat additional fee of ₹100 per day, per form, with no maximum cap — plus the risk of director disqualification under Section 164 if defaults persist across multiple years.'],
        ['What is the due date for AOC-4 and MGT-7?', 'AOC-4 within 30 days of the AGM; MGT-7 (or MGT-7A for small companies/OPCs) within 60 days of the AGM. Most companies must hold their AGM by 30 September.'],
        ['Is annual ROC filing required even if the company had no business activity?', 'Yes — dormant and zero-revenue companies must still file. "No transactions" is not an exemption from Companies Act compliance.'],
        ['What is the difference between AOC-4 and MGT-7?', 'AOC-4 reports your financial statements; MGT-7/7A reports your annual return — shareholding pattern, director details and other corporate information. Both are mandatory and cover different aspects.'],
        ['Do LLPs file the same forms as companies?', 'No — LLPs file Form 11 (annual return, due 30 May) and Form 8 (statement of accounts and solvency, due 30 October) instead of AOC-4/MGT-7.'],
        ['Can a company be struck off for not filing?', 'Yes — continuous default for two or more financial years is a specific ground under Section 248 for the ROC to strike the company off the register, which also disqualifies its directors.'],
        ['What happens if my auditor changes during the year?', 'Form ADT-1 must be filed within 15 days of the appointment or reappointment at the AGM — we track this alongside your other annual filings.'],
        ['Can I file previous years\' pending ROC forms now?', 'Yes — belated filings are accepted with the accumulated additional fee. Clearing the backlog stops the daily penalty from growing further and restores good standing.'],
    ],
    'cta' => ['heading' => 'Ready for Stress-Free ROC Compliance?', 'sub' => 'A managed calendar means every filing lands before the deadline, every year.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
