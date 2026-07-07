@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Company Name Change',
    'crumb' => 'Company Name Change',
    'category' => ['label' => 'ROC & MCA Compliance', 'slug' => 'roc-mca-compliance'],
    'eyebrow_icon' => 'bi-fonts',
    'seo_title' => 'Company Name Change — MCA Approved',
    'seo_description' => 'Change your company name the compliant way — special resolution, RUN name approval, MCA filing and a fresh Certificate of Incorporation, typically in 15–20 working days.',
    'intro' => 'Rebranding, restructuring, or simply outgrowing your old name? We manage the entire legal name change — approval, resolutions, MCA filing — and deliver your new Certificate of Incorporation.',
    'chips' => [
        ['bi-patch-check-fill', 'MCA-Approved Process'],
        ['bi-clock-history', '15–20 Working Days'],
        ['bi-file-earmark-check', 'New COI Included'],
    ],
    'illustration' => [
        ['bi-search', 'New Name Reserved (RUN)'],
        ['bi-people', 'Special Resolution Passed'],
        ['bi-file-earmark-arrow-up', 'INC-24 Filed with MCA'],
        ['bi-award', 'New Certificate Issued!'],
    ],
    'overview' => [
        ['bi-question-circle', 'Why do companies change their name?', 'Rebranding, a shift in business activity, resolving a name too similar to another entity, converting from public to private (or vice versa), or reflecting a merger, acquisition or new ownership.'],
        ['bi-file-earmark-ruled', 'What actually changes?', 'Your name changes on the Certificate of Incorporation, PAN, GST and every statutory record — your CIN, financial history and legal identity all continue exactly as before.'],
        ['bi-graph-up-arrow', 'Why get it right the first time?', 'A rejected name reservation or an incomplete MCA filing means restarting the clock. Correct drafting of the special resolution and altered MOA avoids the most common delays.'],
    ],
    'benefits_title' => 'Why Businesses Change Their Registered Name',
    'benefits' => [
        ['bi-award', 'Stronger Brand Alignment', 'Legal name matches the brand your customers actually recognise.'],
        ['bi-briefcase', 'Reflects New Business Direction', 'Especially useful after a pivot, diversification or new business line.'],
        ['bi-shield-check', 'Resolves Naming Conflicts', 'Proactively fixes similarity issues with an existing company or registered trademark.'],
        ['bi-people', 'Marks Ownership Changes', 'Signals a change of control, merger or joint venture cleanly to the market.'],
        ['bi-arrow-left-right', 'Structure Conversion Support', 'Accompanies conversion from private to public limited or vice versa.'],
        ['bi-graph-up', 'Continuity Preserved', 'CIN, PAN linkage, bank accounts and contracts continue — only the name changes.'],
    ],
    'eligibility_title' => 'Eligibility for a Name Change',
    'eligibility' => [
        ['bi-people', 'Shareholder Approval', 'A special resolution (75% majority) approving the new name and altered MOA/AOA.'],
        ['bi-check-circle', 'No Pending Defaults', 'ROC filings should generally be current before the MCA processes the change.'],
        ['bi-fonts', 'A Genuinely Available Name', 'Must clear the same uniqueness checks as a fresh incorporation — no conflicting name or trademark.'],
        ['bi-file-earmark-check', 'Central Government Nod', 'Deemed approval once the Registrar processes the resolution and revised documents.'],
    ],
    'callout' => 'Existing contracts, licences, bank accounts and litigation carry forward automatically under the new name — nothing needs re-signing from scratch.',
    'documents' => [
        ['bi-people', 'Board Resolution', 'approving the proposed name change'],
        ['bi-file-earmark-ruled', 'Special Resolution', 'passed by shareholders at a general meeting'],
        ['bi-search', 'Proposed Name Options', '2–3 alternatives in case of rejection'],
        ['bi-file-earmark-text', 'Altered MOA & AOA', 'reflecting the new name'],
        ['bi-journal-check', 'Latest Financial Statements', 'for reference in the application'],
        ['bi-award', 'Existing Certificate of Incorporation', 'and PAN of the company'],
        ['bi-file-earmark-check', 'NOC', 'from lenders, if the company has secured loans'],
        ['bi-vector-pen', 'Digital Signatures', 'of authorised directors for e-filing'],
    ],
    'process_note' => 'Typical timeline: 15–20 working days, subject to MCA processing',
    'process_title' => 'MCA Approval in 5 Simple Steps',
    'process' => [
        ['bi-chat-dots', 'Free Consultation', 'We check name availability and plan the resolution timeline.'],
        ['bi-search-heart', 'Name Reservation (RUN)', 'The new name is reserved with the MCA through the RUN service.'],
        ['bi-people', 'Board & Shareholder Approval', 'Board resolution followed by a special resolution at a general meeting.'],
        ['bi-file-earmark-arrow-up', 'MGT-14 & INC-24 Filing', 'The resolution and name-change application are filed with the ROC.'],
        ['bi-patch-check', 'New Certificate Issued', 'MCA issues a fresh Certificate of Incorporation with your new name.'],
    ],
    'faqs' => [
        ['Does changing the company name affect its PAN or CIN?', 'The CIN structure updates to reflect the new name, but your PAN generally remains — we update its records with the new name so returns and TDS stay linked correctly.'],
        ['Do existing contracts and licences need to be redone?', 'No — contracts, GST registration, licences and litigation continue seamlessly, referencing the new name once records are updated. There is no need to re-execute existing agreements.'],
        ['How long does a company name change take?', 'Typically 15–20 working days end-to-end: a few days for name reservation, then MCA processing of the special resolution and INC-24 application.'],
        ['What if my preferred name gets rejected?', 'We submit 2–3 alternatives upfront so a rejection doesn\'t restart the process — the next preference is simply re-submitted for approval.'],
        ['Is shareholder approval mandatory for a name change?', 'Yes — a special resolution with at least 75% shareholder approval is a statutory requirement before the MCA will process any name change.'],
        ['Do we need a new PAN-linked bank account after the name change?', 'No new account is required — banks update the account name against the fresh Certificate of Incorporation and PAN records, which we assist with.'],
        ['Can a private company change its name to reflect a "Limited" conversion?', 'Yes — a name change can be combined with conversion from private to public limited (or the reverse), though that adds its own approval requirements alongside the name change.'],
        ['What documents change after approval?', 'The Certificate of Incorporation, MOA/AOA, PAN, GST registration, bank records and statutory registers — we guide you through updating each one after the MCA approval.'],
    ],
    'cta' => ['heading' => 'Ready to Give Your Company a New Name?', 'sub' => 'Approval-ready filing that gets your new Certificate of Incorporation fast.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
