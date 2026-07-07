@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Trademark Objection Reply',
    'crumb' => 'Objection Reply',
    'category' => ['label' => 'Trademark & Legal Services', 'slug' => 'trademark-legal-services'],
    'eyebrow_icon' => 'bi-shield-exclamation',
    'seo_title' => 'Trademark Objection Reply Services',
    'seo_description' => 'Received a trademark examination report? We draft strong, evidence-backed replies to Section 9 and Section 11 objections and represent you at the hearing if needed.',
    'intro' => 'An objection isn\'t a rejection — it\'s a question your reply needs to answer well. Our team analyses the examination report, builds the legal and evidentiary response, and represents you at hearing if one is required.',
    'chips' => [
        ['bi-file-earmark-text', 'Examination Report Analysed'],
        ['bi-mortarboard', 'Legally Reasoned Replies'],
        ['bi-mic', 'Hearing Representation'],
    ],
    'illustration' => [
        ['bi-envelope-open', 'Objection Grounds Identified'],
        ['bi-folder-check', 'Evidence & Arguments Compiled'],
        ['bi-file-earmark-arrow-up', 'Reply Filed'],
        ['bi-award', 'Objection Overcome!'],
    ],
    'overview' => [
        ['bi-question-circle', 'Why was my trademark objected to?', 'Two broad grounds: Section 9 (the mark is descriptive, generic, or lacks distinctiveness) or Section 11 (it conflicts with an existing similar mark) — the examination report specifies exactly which applies.'],
        ['bi-file-earmark-text', 'What is expected in the reply?', 'A point-by-point legal response addressing each ground raised, typically supported by evidence of distinctiveness, prior use, or arguments distinguishing your mark from cited conflicts.'],
        ['bi-graph-up-arrow', 'Why does the quality of reply matter?', 'The reply is often the only chance to avoid a hearing — a well-argued, evidence-backed response resolves many objections at this stage; a weak one escalates to a hearing or outright refusal.'],
    ],
    'benefits_title' => 'Why a Strong Objection Reply Matters',
    'benefits' => [
        ['bi-shield-check', 'Application Saved', 'A well-drafted reply is often enough to overcome the objection without a hearing.'],
        ['bi-mortarboard', 'Legally Sound Arguments', 'Grounds addressed with the specific case law and provisions examiners expect.'],
        ['bi-folder-check', 'Evidence That Counts', 'Usage proof, distinctiveness evidence and market presence marshalled effectively.'],
        ['bi-clock-history', 'Faster Resolution', 'A complete, well-argued reply reduces back-and-forth and processing delays.'],
        ['bi-mic', 'Hearing Representation', 'If a hearing is scheduled, we represent your case before the Registrar.'],
        ['bi-award', 'Protects Your Investment', 'The time and cost already spent on filing isn\'t wasted to an avoidable refusal.'],
    ],
    'eligibility_title' => 'When You Need This Service',
    'eligibility' => [
        ['bi-envelope-exclamation', 'Received an Examination Report', 'The Registrar has raised objections that need a formal reply within 30 days.'],
        ['bi-file-earmark-x', 'Section 9 Objections', 'The mark is considered descriptive, generic, or non-distinctive.'],
        ['bi-search', 'Section 11 Objections', 'A conflict with an existing similar registered or pending mark.'],
        ['bi-mic', 'Hearing Notice Issued', 'The Registrar has scheduled a hearing to decide the application\'s fate.'],
    ],
    'callout' => 'The reply deadline is strict — typically 30 days from the examination report. Acting immediately preserves every option.',
    'documents' => [
        ['bi-file-earmark-text', 'Examination Report', 'the objection notice issued by the Registry'],
        ['bi-file-earmark-check', 'Original Application', 'TM-A filing and supporting documents'],
        ['bi-clock-history', 'Proof of Prior Use', 'invoices, packaging, advertisements showing usage dates'],
        ['bi-graph-up', 'Sales & Turnover Data', 'evidence of the mark\'s market presence'],
        ['bi-newspaper', 'Promotional Material', 'advertising and marketing showing brand recognition'],
        ['bi-globe', 'Online Presence Evidence', 'website, social media showing consistent use'],
        ['bi-file-earmark-ruled', 'Distinguishing Arguments', 'how your mark differs from any cited conflict'],
        ['bi-vector-pen', 'Authorisation', 'Power of Attorney if not already on file'],
    ],
    'process_note' => 'Reply must be filed within 30 days of the examination report',
    'process_title' => 'Objection Reply in 5 Simple Steps',
    'process' => [
        ['bi-envelope-open', 'Report Analysis', 'The examination report is studied to identify exact objection grounds.'],
        ['bi-folder-check', 'Evidence Gathering', 'Usage proof, distinctiveness evidence and arguments are compiled.'],
        ['bi-file-earmark-ruled', 'Reply Drafting', 'A point-by-point legal response is drafted addressing every ground raised.'],
        ['bi-file-earmark-arrow-up', 'Filing', 'The reply is filed within the statutory 30-day window.'],
        ['bi-mic', 'Hearing (If Required)', 'We represent your case if the Registrar schedules a hearing.'],
    ],
    'faqs' => [
        ['How much time do I have to reply to a trademark objection?', 'Typically 30 days from the date of the examination report — missing this deadline can result in the application being treated as abandoned.'],
        ['What is the difference between Section 9 and Section 11 objections?', 'Section 9 concerns the mark itself — is it too generic or descriptive to function as a trademark? Section 11 concerns conflict — does it clash with an existing similar mark? Each needs a different argument strategy.'],
        ['Will I need to attend a hearing?', 'Not always — many objections are resolved through a well-drafted written reply alone. A hearing is scheduled only if the examiner remains unconvinced or specifically requires one.'],
        ['What evidence helps overcome a Section 9 objection?', 'Proof of extensive prior use, sales figures, advertising spend and market recognition — demonstrating the mark has acquired distinctiveness through use, even if not inherently distinctive.'],
        ['What if the cited conflicting mark is actually different from mine?', 'That is precisely the argument a Section 11 reply makes — differences in appearance, sound, meaning, or the goods/services covered, all reduce likelihood of confusion.'],
        ['Can I withdraw and refile if the objection seems too strong?', 'Sometimes, yes — for a genuinely conflicting mark, we may recommend refiling with modifications rather than pursuing a weak reply, and advise honestly on which path serves you better.'],
        ['What happens if my reply is rejected?', 'You can request a hearing to argue the case in person before the Registrar, and if still unsuccessful, an appeal lies to the appropriate appellate forum.'],
        ['Can you also handle opposition from a third party after publication?', 'Yes — third-party opposition during the journal publication stage is a related but separate proceeding we also handle, distinct from an examiner\'s own objection.'],
    ],
    'cta' => ['heading' => 'Received a Trademark Objection?', 'sub' => 'Act within the 30-day window — a strong reply can save your application.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
