@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'GST Cancellation & Revocation',
    'crumb' => 'Cancellation & Revocation',
    'category' => ['label' => 'GST Services', 'slug' => 'gst-services'],
    'eyebrow_icon' => 'bi-x-circle',
    'seo_title' => 'GST Cancellation & Revocation',
    'seo_description' => 'Cancel your GST registration cleanly — REG-16 filing, final return GSTR-10 and ITC reversal handled end-to-end. Registration cancelled by the department? We file your revocation.',
    'intro' => 'Closing down, restructuring, or hit by a suo-moto cancellation? We handle both directions — clean voluntary cancellation with your final return, and revocation applications that bring a cancelled GSTIN back to life.',
    'chips' => [
        ['bi-patch-check-fill', 'Clean Legal Closure'],
        ['bi-arrow-counterclockwise', 'Revocation Experts'],
        ['bi-file-earmark-check', 'GSTR-10 Included'],
    ],
    'illustration' => [
        ['bi-journal-check', 'Pending Returns Cleared'],
        ['bi-file-earmark-arrow-up', 'REG-16 Application Filed'],
        ['bi-award', 'Cancellation Order Received'],
        ['bi-file-earmark-check', 'Final Return GSTR-10 Filed!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is GST cancellation?', 'The formal closure of your GSTIN — either voluntarily (business closed, turnover below threshold, restructuring) or by the department for non-compliance. Once cancelled, you stop charging GST and filing returns.'],
        ['bi-arrow-counterclockwise', 'What is revocation?', 'The remedy when the department cancels your registration suo-moto: a revocation application (REG-21) filed within 90 days that restores the same GSTIN after pending defaults are cured.'],
        ['bi-graph-up-arrow', 'Why do it properly?', 'An abandoned GSTIN keeps accruing late fees and notices, while a botched cancellation leaves ITC reversal and final-return liabilities hanging. A clean exit protects the directors\' and business\'s record.'],
    ],
    'benefits_eyebrow' => 'When It Applies',
    'benefits_title' => 'Common Reasons for GST Cancellation',
    'benefits' => [
        ['bi-shop', 'Business Closure', 'Operations have been discontinued or the firm is being wound up.'],
        ['bi-graph-down', 'Below Threshold', 'Turnover has fallen under the registration limit and you want out of monthly filings.'],
        ['bi-arrow-left-right', 'Restructuring', 'Merger, demerger, sale of business or conversion to a new entity with a fresh GSTIN.'],
        ['bi-slash-circle', 'No Longer Liable', 'You now supply only exempt goods or services, or moved fully out of taxable activity.'],
        ['bi-person-x', 'Death of Proprietor', 'Legal heirs close or transfer the registration of a deceased proprietor.'],
        ['bi-exclamation-octagon', 'Suo-Moto by Department', 'Six months of non-filing (or fraud findings) — this is where revocation comes in.'],
    ],
    'eligibility_eyebrow' => 'Two Directions',
    'eligibility_title' => 'Cancellation vs Revocation',
    'eligibility' => [
        ['bi-file-earmark-minus', 'Voluntary Cancellation (REG-16)', 'You apply with closure details, stock position and reason; the officer issues the order in REG-19.'],
        ['bi-exclamation-octagon', 'Departmental Cancellation (REG-17)', 'The officer issues a show-cause notice; unanswered, the GSTIN is cancelled suo-moto.'],
        ['bi-arrow-counterclockwise', 'Revocation Window (REG-21)', 'Apply within 90 days of a suo-moto cancellation order — after clearing every pending return and due.'],
        ['bi-file-earmark-check', 'Final Return (GSTR-10)', 'Due within 3 months of cancellation, reporting closing stock and reversing proportionate ITC.'],
    ],
    'callout' => 'All pending returns must be filed before cancellation or revocation can proceed — we clear the backlog as part of the service.',
    'documents' => [
        ['bi-person-vcard', 'Portal Credentials', 'GSTIN login for filings and status tracking'],
        ['bi-file-earmark-text', 'Reason Evidence', 'closure proof, sale deed or restructuring documents'],
        ['bi-box-seam', 'Closing Stock Details', 'stock on hand with ITC availed on it'],
        ['bi-journal', 'Last Filed Returns', 'to identify and clear any pending periods'],
        ['bi-cash-coin', 'Payment Challans', 'for dues, interest or late fees payable'],
        ['bi-credit-card-2-front', 'PAN & Aadhaar', 'of proprietor / authorised signatory'],
        ['bi-envelope-exclamation', 'SCN / Cancellation Order', 'REG-17 / REG-19 copies, for revocation cases'],
        ['bi-vector-pen', 'Authorisation', 'letter or board resolution for the signatory'],
    ],
    'process_note' => 'Cancellation: 2–4 weeks typically · Revocation: strict 90-day window from the cancellation order',
    'process_title' => 'Closure or Comeback in 5 Steps',
    'process' => [
        ['bi-chat-dots', 'Free Consultation', 'We assess your case — clean exit, or revival through revocation.'],
        ['bi-journal-check', 'Compliance Clean-Up', 'Pending returns are filed and dues, interest and late fees are settled.'],
        ['bi-file-earmark-arrow-up', 'Application Filing', 'REG-16 for cancellation — or REG-21 with a reasoned reply for revocation.'],
        ['bi-search-heart', 'Officer Processing', 'We respond to queries and hearings until the order is issued.'],
        ['bi-patch-check', 'Order & Final Return', 'Cancellation order in hand, GSTR-10 filed — or your GSTIN restored to active.'],
    ],
    'faqs' => [
        ['How long does voluntary GST cancellation take?', 'Usually 2–4 weeks after applying in REG-16, provided all returns are filed and dues cleared. The officer then issues the cancellation order in REG-19.'],
        ['What is the final return GSTR-10 and when is it due?', 'A one-time return due within 3 months of cancellation, declaring closing stock and reversing the input credit sitting in it. Skipping it attracts notices and late fees even after closure.'],
        ['Do I have to reverse input tax credit on cancellation?', 'Yes — ITC on closing stock, semi-finished goods and capital goods (proportionate to remaining life) must be paid back through the final return.'],
        ['What is the deadline for revocation?', '90 days from the service of the cancellation order. Act fast — every pending return must be filed before the application, and that clean-up takes time.'],
        ['Can I cancel my GST with pending returns?', 'No. The portal blocks cancellation until all returns up to date are filed. We compute the cheapest path through the backlog and clear it first.'],
        ['Can I get a new GSTIN after cancellation?', 'Yes — a fresh registration is possible, though prior defaults may be scrutinised. For suo-moto cancellations, revocation of the old GSTIN is usually cheaper and preserves your ITC chain.'],
        ['Does cancellation end my liability for past periods?', 'No. Assessments, audits and demands for periods before cancellation survive it — which is why a clean, well-documented exit matters.'],
        ['Why was my GST cancelled suo-moto?', 'Most commonly six consecutive months of non-filing (three quarters for composition), non-commencement of business, or fraudulent registration. We diagnose the exact ground from your notice and build the revocation reply around it.'],
    ],
    'cta' => ['heading' => 'Need a Clean GST Exit — or Your GSTIN Back?', 'sub' => 'Cancellation and revocation handled end-to-end, deadlines guaranteed.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
