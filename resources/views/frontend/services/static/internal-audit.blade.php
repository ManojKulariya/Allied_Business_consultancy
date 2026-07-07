@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Internal Audit Services',
    'crumb' => 'Internal Audit',
    'category' => ['label' => 'Audit & Assurance', 'slug' => 'audit-assurance'],
    'eyebrow_icon' => 'bi-search',
    'seo_title' => 'Internal Audit Services',
    'seo_description' => 'Risk-based internal audits that strengthen controls, plug revenue leakages and prevent fraud — process reviews, SOP compliance and actionable reports for management.',
    'intro' => 'Find the leaks before they sink the ship. Our risk-based internal audits examine your processes, controls and compliance — delivering findings management can act on, not a report that gathers dust.',
    'chips' => [
        ['bi-bullseye', 'Risk-Based Approach'],
        ['bi-cash-coin', 'Leakage & Fraud Focus'],
        ['bi-file-earmark-check', 'Actionable Reporting'],
    ],
    'illustration' => [
        ['bi-diagram-3', 'Key Processes Mapped'],
        ['bi-search', 'Controls Tested on Ground'],
        ['bi-exclamation-triangle', 'Gaps & Leakages Identified'],
        ['bi-graph-up-arrow', 'Controls Fixed, Value Saved!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is an internal audit?', 'An independent, ongoing review of your operations, controls and compliance — commissioned by management to find inefficiencies, leakages and risks while there is still time to fix them.'],
        ['bi-bullseye', 'What are its objectives?', 'Safeguarding assets, verifying that processes follow SOPs, testing the reliability of financial data, detecting fraud indicators, and ensuring regulatory compliance across functions.'],
        ['bi-graph-up-arrow', 'How is it different from a statutory audit?', 'The statutory audit tells outsiders your accounts are fair; the internal audit tells YOU where money and control are slipping. One is an opinion, the other is an improvement engine.'],
    ],
    'benefits_title' => 'What Internal Audits Save and Strengthen',
    'benefits' => [
        ['bi-cash-coin', 'Revenue Leakage Plugged', 'Unbilled work, pricing errors, discount abuse and pilferage surface with numbers attached.'],
        ['bi-shield-exclamation', 'Fraud Deterrence', 'Regular independent checks are the strongest practical deterrent to internal fraud.'],
        ['bi-diagram-3', 'Stronger Processes', 'SOP gaps and control weaknesses fixed before they become losses or audit qualifications.'],
        ['bi-receipt', 'Compliance Confidence', 'GST, TDS, payroll and licensing compliance tested across branches and functions.'],
        ['bi-graph-up', 'Better Decisions', 'Management gets ground-truth data on inventory, receivables and cost centres.'],
        ['bi-building-check', 'Governance Credibility', 'Boards, investors and lenders read a functioning internal audit as maturity.'],
    ],
    'eligibility_title' => 'Who Needs Internal Audit?',
    'eligibility' => [
        ['bi-building-check', 'Mandated Companies (Sec 138)', 'Listed companies, and public/private companies above turnover, borrowing or deposit thresholds.'],
        ['bi-diagram-3', 'Multi-Location Businesses', 'Branches, warehouses, franchisees or dealers that headquarters cannot watch daily.'],
        ['bi-cart-check', 'High-Transaction Operations', 'Retail, e-commerce, manufacturing and logistics where small leaks compound fast.'],
        ['bi-rocket-takeoff', 'Scaling & Funded Companies', 'Investors expect internal controls to grow with the topline — before problems do.'],
    ],
    'callout' => 'Even where Section 138 doesn\'t mandate it, most businesses recover multiples of the audit fee in plugged leakages.',
    'documents' => [
        ['bi-diagram-3', 'Process Documentation', 'SOPs, policies and authority matrices, as available'],
        ['bi-journal', 'Books & MIS Reports', 'accounting data for the review period'],
        ['bi-box-seam', 'Inventory Records', 'stock registers, GRNs and movement data'],
        ['bi-cart', 'Purchase & Sales Data', 'orders, invoices, rate contracts and approvals'],
        ['bi-people', 'Payroll Records', 'attendance, salary registers and reimbursements'],
        ['bi-bank', 'Bank & Cash Records', 'statements, BRS and cash books'],
        ['bi-receipt', 'Compliance Filings', 'GST, TDS and statutory returns filed'],
        ['bi-file-earmark-ruled', 'Previous Audit Reports', 'internal or statutory findings, if any'],
    ],
    'process_note' => 'One-time diagnostic or a quarterly retainer — most clients start with one high-risk area',
    'process_title' => 'The Review in 5 Structured Steps',
    'process' => [
        ['bi-chat-dots', 'Scoping & Risk Ranking', 'Functions are ranked by risk; the audit plan targets what matters most.'],
        ['bi-diagram-3', 'Process Walkthroughs', 'We map how work actually happens — versus how SOPs say it should.'],
        ['bi-search', 'Fieldwork & Testing', 'Sample testing, surprise checks, stock counts and data analytics.'],
        ['bi-exclamation-triangle', 'Findings & Discussion', 'Every observation is validated with process owners before reporting.'],
        ['bi-file-earmark-check', 'Report & Follow-Up', 'Prioritised recommendations with owners and dates — and a follow-up review.'],
    ],
    'faqs' => [
        ['Is internal audit legally required for my company?', 'Section 138 mandates it for listed companies and larger unlisted/private companies crossing turnover or borrowing thresholds. For everyone else it is voluntary — and usually pays for itself.'],
        ['How is internal audit different from statutory audit?', 'Different customers: the statutory audit assures outsiders that accounts are true and fair; the internal audit serves management, hunting inefficiency, leakage and control gaps inside operations.'],
        ['How often should internal audits happen?', 'Quarterly is the sweet spot for most SMEs — frequent enough to deter and detect, light enough not to disrupt. High-risk functions (cash, inventory) may warrant monthly checks.'],
        ['Can you audit just one problem area?', 'Yes — many engagements start with a single pain point: inventory shrinkage, branch cash handling, procurement pricing or receivables. Scope grows only if the findings justify it.'],
        ['Will this disrupt my team\'s work?', 'Minimal by design — data analytics first, focused fieldwork second. Surprise elements (cash/stock counts) are short and coordinated with a single point of contact.'],
        ['What does the report actually contain?', 'Findings ranked by financial impact and risk, root causes, and specific recommendations with suggested owners and timelines — plus an executive summary your board can read in five minutes.'],
        ['Do you check for fraud?', 'Fraud indicators are part of every review — unusual patterns, control overrides, vendor collusion signs. Where something concrete surfaces, we scope a dedicated forensic examination.'],
        ['Can you help implement the fixes too?', 'Yes — SOP drafting, approval-matrix design and control implementation are natural extensions, delivered by a separate team so audit independence is preserved.'],
    ],
    'cta' => ['heading' => 'Ready to Find What Your Business Is Leaking?', 'sub' => 'A risk-based review that typically pays for itself in one cycle.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
