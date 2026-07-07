@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'DSC Renewal Services',
    'crumb' => 'DSC Renewal',
    'category' => ['label' => 'Digital Signature Services', 'slug' => 'digital-signature-services'],
    'eyebrow_icon' => 'bi-arrow-repeat',
    'seo_title' => 'Digital Signature Certificate Renewal',
    'seo_description' => 'Renew your expiring or expired Digital Signature Certificate quickly — MCA, GST, income tax and DGFT DSC renewal handled in 1–2 working days, no filing disruption.',
    'intro' => 'An expired DSC stops every filing dead in its tracks. We track your certificate\'s expiry and renew it before it lapses — or recover quickly if it already has — so your MCA, GST or DGFT filings never stall.',
    'chips' => [
        ['bi-calendar-check-fill', 'Proactive Expiry Tracking'],
        ['bi-clock-history', '1–2 Working Days'],
        ['bi-arrow-repeat', 'Same Token, New Validity'],
    ],
    'illustration' => [
        ['bi-exclamation-triangle', 'Expiry Identified'],
        ['bi-folder-check', 'Renewal Documents Verified'],
        ['bi-camera-video', 'Video Verification Completed'],
        ['bi-award', 'DSC Renewed & Active!'],
    ],
    'overview' => [
        ['bi-question-circle', 'Why do DSCs need renewal?', 'Every Digital Signature Certificate is issued with a fixed validity — 1, 2 or 3 years. Once that period ends, the certificate can no longer sign documents until formally renewed with the Certifying Authority.'],
        ['bi-exclamation-circle', 'What happens if I miss the renewal date?', 'Every portal that needs your DSC — MCA, GST, income tax, DGFT — simply rejects the signing attempt. Pending filings stall until a fresh or renewed certificate is issued.'],
        ['bi-graph-up-arrow', 'Why track renewal proactively?', 'DSC expiry doesn\'t announce itself loudly — it\'s easy to miss until you\'re mid-filing against a deadline. Proactive tracking means renewal happens on your schedule, not in a scramble.'],
    ],
    'benefits_title' => 'Why Timely DSC Renewal Matters',
    'benefits' => [
        ['bi-calendar-check-fill', 'No Filing Disruption', 'Statutory deadlines don\'t wait — an active DSC keeps every filing on schedule.'],
        ['bi-clock-history', 'Fast Turnaround', 'Renewal is typically quicker than fresh issuance since identity is already established.'],
        ['bi-shield-check', 'Continued Legal Validity', 'Uninterrupted ability to sign documents with full legal standing.'],
        ['bi-bell', 'Proactive Reminders', 'We track expiry dates for retained clients and renew before lapse, not after.'],
        ['bi-usb-drive', 'Same Token Reusable', 'Existing USB tokens can often be reused, saving cost and hassle.'],
        ['bi-arrow-repeat', 'Applies Across DSC Types', 'MCA, GST, income tax and DGFT-specific certificates all renewable through one process.'],
    ],
    'eligibility_title' => 'When You Need DSC Renewal',
    'eligibility' => [
        ['bi-calendar-check-fill', 'Approaching Expiry', 'Certificate nearing its validity end date — the ideal time to renew.'],
        ['bi-exclamation-triangle', 'Already Expired', 'Certificate has lapsed and filings are currently blocked.'],
        ['bi-person-badge', 'Continuing Directors & Signatories', 'Anyone who regularly signs MCA, GST or tax filings on an ongoing basis.'],
        ['bi-globe', 'Active DGFT Filers', 'Import-export businesses needing uninterrupted DGFT portal access.'],
    ],
    'callout' => 'Renew 2–3 weeks before expiry to avoid any filing gap — we send proactive reminders for retained clients.',
    'documents' => [
        ['bi-credit-card-2-front', 'PAN Card', 'of the certificate holder'],
        ['bi-person-vcard', 'Aadhaar Card', 'linked to an active mobile number'],
        ['bi-file-earmark-text', 'Existing DSC Details', 'certificate reference for renewal continuity'],
        ['bi-image', 'Passport-Size Photograph', 'recent, if required by the Certifying Authority'],
        ['bi-phone', 'Active Mobile & Email', 'for OTP and verification'],
        ['bi-usb-drive', 'Existing USB Token', 'if being reused for the renewed certificate'],
        ['bi-file-earmark-check', 'Organisation Authorisation', 'updated letter, if organisational details changed'],
        ['bi-camera-video', 'Video Verification', 'live identity confirmation, as per current norms'],
    ],
    'process_note' => 'Typical timeline: 1–2 working days from application',
    'process_title' => 'Renewal in 4 Simple Steps',
    'process' => [
        ['bi-bell', 'Expiry Check', 'We identify certificates approaching or past their validity date.'],
        ['bi-folder-check', 'Document Verification', 'Identity and existing certificate details confirmed with the Certifying Authority.'],
        ['bi-camera-video', 'Video Verification', 'A brief live video call re-confirms your identity as per current norms.'],
        ['bi-patch-check', 'Renewed Certificate Issued', 'The DSC is renewed with fresh validity, ready for continued use.'],
    ],
    'faqs' => [
        ['How early should I renew my DSC?', 'Ideally 2–3 weeks before expiry — this avoids any gap in signing capability and gives buffer time if any verification issue arises during renewal.'],
        ['Can I still renew if my DSC has already expired?', 'Yes — an expired certificate can be renewed, though the process is functionally similar to fresh issuance since the old certificate can no longer be used for authentication.'],
        ['Can I reuse my existing USB token after renewal?', 'Often yes, if the token is compatible and functioning — this saves the cost of a new token, though very old tokens may need replacement.'],
        ['Does renewal require video verification again?', 'Yes — current Certifying Authority norms require identity re-verification at each renewal, following the same video verification process as fresh issuance.'],
        ['Will my DSC have the same validity period after renewal?', 'You choose the renewal term (1, 2 or 3 years) at the time of renewal, independent of what the original certificate\'s term was.'],
        ['What happens to filings I couldn\'t complete because my DSC expired?', 'Once renewed, you can proceed with pending filings immediately — though any late-filing penalties that accrued during the lapse period are separate from the DSC renewal itself and depend on the specific portal\'s rules.'],
        ['Can I renew a DGFT-specific DSC the same way?', 'Yes — DGFT, MCA, GST and income tax DSCs all follow a similar renewal process, though DGFT-specific encoding is preserved for certificates originally issued for that purpose.'],
        ['Do you send reminders before my DSC expires?', 'Yes — for retained clients, we proactively track expiry dates and reach out well before renewal is due, so it never becomes a last-minute scramble.'],
    ],
    'cta' => ['heading' => 'Is Your DSC Nearing Expiry?', 'sub' => 'Renew today — before it disrupts a filing you actually need to make.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
