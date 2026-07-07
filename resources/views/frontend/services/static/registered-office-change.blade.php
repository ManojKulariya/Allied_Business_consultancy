@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Registered Office Change',
    'crumb' => 'Registered Office Change',
    'category' => ['label' => 'ROC & MCA Compliance', 'slug' => 'roc-mca-compliance'],
    'eyebrow_icon' => 'bi-geo-alt',
    'seo_title' => 'Registered Office Address Change — MCA Filing',
    'seo_description' => 'Change your company\'s registered office address — within city, across cities, or between states — with correct INC-22/INC-23 MCA filing, typically completed in 7–30 working days.',
    'intro' => 'Moving offices, or moving states? We handle every category of registered office change — same city, different city, or across state lines — with the exact MCA filings each one demands.',
    'chips' => [
        ['bi-patch-check-fill', 'MCA-Compliant Filing'],
        ['bi-signpost-split', 'All Change Types Covered'],
        ['bi-clock-history', '7–30 Working Days'],
    ],
    'illustration' => [
        ['bi-geo-alt', 'New Address Verified'],
        ['bi-people', 'Board/Shareholder Approval Done'],
        ['bi-file-earmark-arrow-up', 'INC-22 Filed with MCA'],
        ['bi-award', 'Registered Office Updated!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is a registered office?', 'The official address on file with the MCA where all statutory notices, registers and correspondence are legally deemed to be received — it need not be where you actually operate day to day.'],
        ['bi-signpost-split', 'Why does the process vary?', 'Moving within the same city is a simple board-level filing. Crossing to another ROC jurisdiction, or another state, adds shareholder approval and — for inter-state moves — Regional Director permission.'],
        ['bi-graph-up-arrow', 'Why get it right?', 'An outdated registered office means missed statutory notices and returned mail from the ROC — filing the correct form for your specific move keeps records, and your compliance, current.'],
    ],
    'benefits_eyebrow' => 'Common Reasons',
    'benefits_title' => 'Why Companies Change Their Registered Office',
    'benefits' => [
        ['bi-building', 'Business Expansion', 'Moving to larger premises as the team and operations grow.'],
        ['bi-cash-coin', 'Cost Optimisation', 'Relocating to a more cost-effective address or shared workspace.'],
        ['bi-geo', 'Closer to Operations', 'Aligning the registered address with where the business actually functions.'],
        ['bi-arrow-left-right', 'Ownership or Structure Changes', 'Following a merger, acquisition or change in promoters\' base.'],
        ['bi-map', 'Market Repositioning', 'Relocating to a different city or state for strategic or client-proximity reasons.'],
        ['bi-house-door', 'Lease Expiry', 'Rental agreement ending, prompting a move to new premises.'],
    ],
    'eligibility_eyebrow' => 'Types of Office Change',
    'eligibility_title' => 'Which Category Applies to You?',
    'eligibility' => [
        ['bi-1-circle', 'Within the Same City', 'Board resolution and Form INC-22 — the simplest and fastest category.'],
        ['bi-2-circle', 'Same State, Different ROC', 'Special resolution plus Form INC-22 and MGT-14, since it changes ROC jurisdiction.'],
        ['bi-3-circle', 'Different State (Inter-State)', 'Special resolution, Regional Director approval (Form INC-23), then INC-22 and MGT-14.'],
        ['bi-4-circle', 'Change of MOA on Move', 'Inter-state moves also require altering the registered office clause in the MOA.'],
    ],
    'callout' => 'Inter-state moves take the longest — budget for Regional Director processing time in addition to the filing itself.',
    'documents' => [
        ['bi-house-door', 'New Address Proof', 'rent agreement, lease deed or ownership document'],
        ['bi-lightning-charge', 'Utility Bill', 'electricity/water bill for the new premises (≤ 2 months old)'],
        ['bi-file-earmark-check', 'Owner NOC', 'if the new premises are rented'],
        ['bi-people', 'Board Resolution', 'approving the change of address'],
        ['bi-file-earmark-ruled', 'Special Resolution', 'for inter-ROC or inter-state moves'],
        ['bi-newspaper', 'Newspaper Advertisement', 'required for inter-state moves, in English and vernacular'],
        ['bi-file-earmark-text', 'Altered MOA', 'for inter-state moves changing the state clause'],
        ['bi-vector-pen', 'Digital Signatures', 'of directors for e-filing'],
    ],
    'process_note' => 'Timeline: 7–15 working days (same city/ROC) · up to 30 working days (inter-state, with RD approval)',
    'process_title' => 'Office Change in 5 Simple Steps',
    'process' => [
        ['bi-chat-dots', 'Free Consultation', 'We identify which of the four change categories applies to your move.'],
        ['bi-people', 'Approvals Obtained', 'Board resolution — and special resolution where the category requires it.'],
        ['bi-newspaper', 'Public Notice', 'Newspaper advertisement published for inter-state moves.'],
        ['bi-file-earmark-arrow-up', 'MCA / RD Filing', 'INC-22, MGT-14 and INC-23 (where applicable) filed in sequence.'],
        ['bi-patch-check', 'Confirmation', 'Approval received and the registered office updated on the MCA master data.'],
    ],
    'faqs' => [
        ['How long does a registered office change take?', 'Within the same city or ROC jurisdiction, 7–15 working days. Moving to a different state adds Regional Director approval, typically extending the timeline to around 30 working days.'],
        ['What is the difference between the registered office and a place of business?', 'The registered office is the legal address for MCA correspondence and statutory records; a business can operate from multiple other locations without those being the registered office.'],
        ['Do I need shareholder approval for every office change?', 'Only when the move crosses ROC jurisdiction within the same state, or crosses state lines — a simple move within the same city needs only a board resolution.'],
        ['Is a newspaper notice really required?', 'Yes, but only for inter-state moves — publication in one English and one vernacular newspaper in the relevant state is a mandatory step before the Regional Director grants approval.'],
        ['What happens to GST registration after an office move?', 'GST registration is address-specific and needs a corresponding amendment application — we handle this alongside the MCA filing so both records stay consistent.'],
        ['Can the move be reversed if we relocate again later?', 'Yes — each subsequent move is simply a new registered-office change filing, following whichever of the four categories applies at that time.'],
        ['Does an inter-state move require altering the MOA?', 'Yes — the state mentioned in the Memorandum of Association\'s registered office clause must be updated as part of the inter-state filing.'],
        ['What if we only need a temporary address change?', 'MCA filings reflect the current registered office as a matter of record; for short-term arrangements, we advise on whether a formal change is necessary or a correspondence address suffices.'],
    ],
    'cta' => ['heading' => 'Ready to Update Your Registered Office?', 'sub' => 'The right filing for your specific move — handled from resolution to confirmation.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
