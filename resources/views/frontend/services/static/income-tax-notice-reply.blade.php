@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Income Tax Notice Reply',
    'crumb' => 'Notice Reply',
    'category' => ['label' => 'Income Tax Services', 'slug' => 'income-tax-services'],
    'eyebrow_icon' => 'bi-envelope-exclamation',
    'seo_title' => 'Income Tax Notice Reply & Representation',
    'seo_description' => 'Received an income tax notice? CA-drafted replies for 143(1), 139(9), 142(1), 143(2), 148 and demand notices — deadline-tracked e-proceedings with full representation.',
    'intro' => 'An income tax notice is not a verdict — it\'s a question that deserves the right answer. Our CAs decode your notice, build the evidence, and file a precise, deadline-safe reply through e-proceedings.',
    'chips' => [
        ['bi-mortarboard', 'CA-Drafted Replies'],
        ['bi-alarm-fill', 'Deadline-Safe Response'],
        ['bi-shield-fill-check', 'Full Representation'],
    ],
    'illustration' => [
        ['bi-envelope-open', 'Notice Decoded & Explained'],
        ['bi-folder-check', 'Evidence Compiled'],
        ['bi-file-earmark-arrow-up', 'Reply Filed in E-Proceedings'],
        ['bi-emoji-smile', 'Matter Closed, Peace Restored!'],
    ],
    'overview' => [
        ['bi-question-circle', 'Why did I get a notice?', 'Usually a mismatch: income in your AIS/26AS missing from the return, high-value transactions, unclaimed TDS credit, a defective form, or random scrutiny selection. The notice section number tells us exactly what the department wants.'],
        ['bi-alarm', 'Why respond fast?', 'Every notice carries a deadline — often 15 to 30 days. Silence converts questions into demands: best-judgment assessments, penalties, even prosecution in extreme cases. A timely, complete first reply usually ends the matter.'],
        ['bi-graph-up-arrow', 'Why professional help?', 'The reply is a legal submission, not a form. Knowing what to concede, what to contest and which documents prove your case is exactly the judgment a seasoned CA brings.'],
    ],
    'benefits_eyebrow' => 'Notice Triggers',
    'benefits_title' => 'Common Reasons for Income Tax Notices',
    'benefits' => [
        ['bi-arrow-left-right', 'AIS / 26AS Mismatch', 'Interest, dividends, share sales or salary in the department\'s data but missing from your ITR.'],
        ['bi-cash-stack', 'High-Value Transactions', 'Large deposits, property deals, credit card spends or investments flagged by data analytics.'],
        ['bi-file-earmark-x', 'Defective Return', 'Wrong ITR form, missing schedules or unpaid self-assessment tax — Section 139(9).'],
        ['bi-graph-down', 'Under-Reported Income', 'Suspected income escaping assessment reopened under Section 148.'],
        ['bi-percent', 'TDS Discrepancies', 'Credit claimed that deductors never reported, or vice versa.'],
        ['bi-shuffle', 'Random Scrutiny', 'CASS selection under 143(2) — nothing "wrong" yet, but full documentation required.'],
    ],
    'eligibility_eyebrow' => 'Notice Types',
    'eligibility_title' => 'Notices We Handle Daily',
    'eligibility' => [
        ['bi-envelope', '143(1) Intimation & 139(9)', 'Processing adjustments, tax/refund differences and defective-return fixes.'],
        ['bi-search', '142(1) & 143(2) Scrutiny', 'Information calls and full scrutiny assessments with documentation and hearings.'],
        ['bi-arrow-counterclockwise', '148 Reassessment', 'Income-escaping cases — from the initial 148A show-cause to final assessment.'],
        ['bi-cash-coin', '156 Demand & 245 Adjustment', 'Demand notices, rectifications under 154, and refund set-off objections.'],
    ],
    'callout' => 'Most notice deadlines are 15–30 days from service — send us your notice today, not next week.',
    'documents' => [
        ['bi-envelope-exclamation', 'The Notice Itself', 'PDF or portal screenshot with DIN'],
        ['bi-journal', 'Filed ITR & Computation', 'for the assessment year in question'],
        ['bi-arrow-left-right', 'AIS / 26AS', 'we download and reconcile these'],
        ['bi-bank', 'Bank Statements', 'for the relevant period'],
        ['bi-graph-up', 'Investment Proofs', 'broker statements, property deeds, FDs'],
        ['bi-file-earmark-text', 'Income Evidence', 'Form 16, invoices, rent agreements'],
        ['bi-receipt', 'Deduction Proofs', '80C/80D receipts, loan certificates'],
        ['bi-person-vcard', 'Portal Access', 'e-filing login for e-proceedings'],
    ],
    'process_note' => 'Every reply is deadline-tracked from the moment you share the notice',
    'process_title' => 'From Notice to Closure in 5 Steps',
    'process' => [
        ['bi-envelope-open', 'Notice Analysis', 'We decode the section, allegation and deadline — explained to you in plain language.'],
        ['bi-folder-check', 'Evidence Building', 'Documents are gathered and reconciled against the department\'s data.'],
        ['bi-file-earmark-ruled', 'Draft Reply', 'A point-wise legal response is drafted and reviewed with you.'],
        ['bi-file-earmark-arrow-up', 'Filing & Follow-Up', 'Submitted in e-proceedings with all annexures; queries answered as they come.'],
        ['bi-patch-check', 'Closure', 'Order tracked to acceptance — or escalated to rectification/appeal if needed.'],
    ],
    'faqs' => [
        ['I just received a notice. What should I do first?', 'Don\'t panic and don\'t ignore it. Verify it\'s genuine (every notice carries a DIN verifiable on the e-filing portal), note the deadline, and share it with us — diagnosis is free.'],
        ['What happens if I ignore an income tax notice?', 'The officer proceeds ex-parte: a best-judgment assessment under 144, tax demand with interest, penalties up to 200% for misreporting, and in serious cases prosecution. Even a wrong notice must be answered.'],
        ['Is a 143(1) intimation the same as a scrutiny notice?', 'No — 143(1) is automated processing that may adjust arithmetic or obvious mismatches. If you disagree, a rectification (154) or updated response usually resolves it. Scrutiny under 143(2) is a deeper examination.'],
        ['What is a Section 148 notice?', 'It reopens a past year where the department believes income escaped assessment — now preceded by a 148A show-cause. Strict timelines and higher stakes make professional drafting essential here.'],
        ['Can a tax demand be paid in instalments or contested?', 'Both. We first verify the demand\'s correctness — many arise from unprocessed TDS credit — then either get it rectified, file an appeal with a stay request, or arrange instalments with the assessing officer.'],
        ['Do I ever need to visit the tax office?', 'Rarely — assessments are faceless and document-based through the e-proceedings portal. Where a personal or video hearing is required, our CAs represent you under authorisation.'],
        ['My refund was adjusted against an old demand. Can that be reversed?', 'A 245 intimation allows you to object before adjustment. If the underlying demand is wrong, we contest it and pursue rectification so your refund is released.'],
        ['How much does a notice reply cost?', 'It depends on the notice type — a defective-return fix is simple, a 148 reassessment is a full engagement. You get a fixed quote after the free diagnosis, before any commitment.'],
    ],
    'cta' => ['heading' => 'Got a Tax Notice? Let Experts Answer It.', 'sub' => 'Free notice diagnosis today — deadline-safe reply this week.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
