@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Statutory Audit Services',
    'crumb' => 'Statutory Audit',
    'category' => ['label' => 'Audit & Assurance', 'slug' => 'audit-assurance'],
    'eyebrow_icon' => 'bi-shield-check',
    'seo_title' => 'Statutory Audit Services',
    'seo_description' => 'Companies Act statutory audits by experienced Chartered Accountants — smooth planning, CARO reporting and on-time ADT filings, with minimal disruption to your team.',
    'intro' => 'The audit your company must have — done rigorously, without drama. Our audit team plans early, works around your staff, and delivers a clean, on-time statutory audit with every Companies Act reporting requirement covered.',
    'chips' => [
        ['bi-patch-check-fill', 'Companies Act Compliant'],
        ['bi-mortarboard', 'Experienced CA Team'],
        ['bi-calendar-check-fill', 'AGM-Deadline Safe'],
    ],
    'illustration' => [
        ['bi-clipboard-data', 'Audit Plan & Checklist Shared'],
        ['bi-search', 'Vouching & Verification Done'],
        ['bi-file-earmark-check', 'CARO Points Cleared'],
        ['bi-award', 'Audit Report Signed!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is a statutory audit?', 'The independent examination of a company\'s financial statements required by the Companies Act, 2013 — an auditor\'s opinion on whether they show a true and fair view of the business.'],
        ['bi-people', 'Who requires it?', 'Every company registered in India — private or public, profitable or not, from day one. LLPs join the club once turnover crosses ₹40 lakh or contribution crosses ₹25 lakh.'],
        ['bi-graph-up-arrow', 'Why does it matter?', 'Beyond being mandatory, the audit is your credibility document: banks lend against it, investors diligence it, and the ROC expects it with your annual filing. A messy audit trails the company for years.'],
    ],
    'benefits_title' => 'What a Well-Run Statutory Audit Delivers',
    'benefits' => [
        ['bi-shield-check', 'Regulatory Compliance', 'Companies Act, CARO 2020 and auditing standards — every reporting box ticked, on time.'],
        ['bi-bank', 'Lender Confidence', 'Audited financials are the first document every bank and NBFC asks for.'],
        ['bi-search-heart', 'Errors Caught Early', 'Misstatements, reconciliation gaps and control weaknesses surface before regulators find them.'],
        ['bi-graph-up', 'Investor-Grade Credibility', 'Clean audit opinions speed up due diligence for funding and acquisitions.'],
        ['bi-people', 'Stakeholder Assurance', 'Shareholders, vendors and large customers trust numbers an independent auditor has signed.'],
        ['bi-clipboard-check', 'Better Discipline', 'The annual audit cycle forces reconciliations and documentation hygiene year-round.'],
    ],
    'eligibility_eyebrow' => 'Applicability',
    'eligibility_title' => 'Who Requires a Statutory Audit?',
    'eligibility' => [
        ['bi-building-check', 'Every Company', 'Private limited, OPC, public limited and Section 8 — mandatory regardless of turnover or profit.'],
        ['bi-people', 'LLPs Above Thresholds', 'Turnover over ₹40 lakh or partner contribution over ₹25 lakh triggers the LLP audit.'],
        ['bi-calendar-range', 'From the First Year', 'Even a company with zero revenue must be audited before its first AGM and ROC filings.'],
        ['bi-person-badge', 'Auditor Appointment Rules', 'First auditor within 30 days of incorporation; appointments filed with the ROC in Form ADT-1.'],
    ],
    'callout' => 'Audited financials feed your AGM, AOC-4 and MGT-7 deadlines — a late audit cascades into ROC penalties.',
    'documents' => [
        ['bi-journal', 'Books of Account', 'ledgers, trial balance and software backup'],
        ['bi-file-earmark-bar-graph', 'Draft Financials', 'or we prepare them alongside the audit'],
        ['bi-bank', 'Bank Statements', 'with year-end balance confirmations'],
        ['bi-box-seam', 'Inventory Records', 'closing stock statements and valuation'],
        ['bi-building', 'Fixed Asset Register', 'additions, disposals and depreciation'],
        ['bi-receipt', 'Statutory Payment Proofs', 'GST, TDS, PF/ESI challans and returns'],
        ['bi-file-earmark-ruled', 'Legal & Secretarial', 'minutes, registers and prior-year audit report'],
        ['bi-people', 'Balance Confirmations', 'from major debtors, creditors and lenders'],
    ],
    'process_note' => 'Start before year-end closes — early planning is what keeps audits painless',
    'process_title' => 'The Audit in 5 Structured Steps',
    'process' => [
        ['bi-chat-dots', 'Planning & Scoping', 'Business understanding, materiality and a documents checklist upfront.'],
        ['bi-clipboard-data', 'Controls Review', 'Key processes and internal controls are walked through and tested.'],
        ['bi-search', 'Substantive Testing', 'Vouching, verification, confirmations and analytical review of balances.'],
        ['bi-file-earmark-check', 'Findings & Adjustments', 'Observations discussed; adjustment entries and CARO points resolved.'],
        ['bi-patch-check', 'Reporting', 'Audit report with CARO annexure signed, UDIN generated — AGM ready.'],
    ],
    'faqs' => [
        ['Is a statutory audit mandatory for a small private limited company?', 'Yes — every company must be audited under the Companies Act regardless of size, turnover or activity. Even a dormant company files audited financials.'],
        ['When should the statutory audit be completed?', 'Before your AGM (due by 30 September for most companies), since audited financials must be adopted there and filed with the ROC in AOC-4 within 30 days of the AGM.'],
        ['Who can conduct a statutory audit?', 'Only a practising Chartered Accountant or CA firm, independent of the company. The appointment is formalised in Form ADT-1 filed with the ROC.'],
        ['What is CARO and does it apply to us?', 'The Companies (Auditor\'s Report) Order 2020 adds detailed reporting on loans, assets, defaults and more. It applies to most companies above small thresholds — we confirm applicability during planning.'],
        ['What happens if the audit reveals problems?', 'Issues are first discussed with management for correction. Unresolved material issues are reflected as qualifications in the report — our early-start approach exists precisely to fix things before that stage.'],
        ['How long does a statutory audit take?', 'For a typical SME, two to four weeks from complete books — faster when records are clean. Listed and larger entities follow a phased quarterly rhythm.'],
        ['What penalties apply for skipping the audit?', 'The company faces fines starting at ₹25,000 (up to ₹5 lakh) and officers face personal fines; unaudited ROC filings are simply not accepted, compounding annual-filing penalties.'],
        ['Can you also prepare the financial statements you audit?', 'Independence rules separate the roles: where we audit, statements come from your team (we guide format); where we prepare statements, we coordinate with an independent auditor. Either way, one of our teams keeps it seamless.'],
    ],
    'cta' => ['heading' => 'Ready for a Painless Statutory Audit?', 'sub' => 'Early planning, clear checklists and an on-time signed report.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
