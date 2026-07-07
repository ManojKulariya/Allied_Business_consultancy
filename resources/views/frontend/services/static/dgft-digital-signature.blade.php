@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'DGFT Digital Signature Certificate',
    'crumb' => 'DGFT DSC',
    'category' => ['label' => 'Digital Signature Services', 'slug' => 'digital-signature-services'],
    'eyebrow_icon' => 'bi-globe',
    'seo_title' => 'DGFT Digital Signature Certificate for IEC',
    'seo_description' => 'DGFT-specific Class 3 Digital Signature Certificate for the DGFT portal — IEC applications, import-export licences and shipping bill authentication. Fast issuance.',
    'intro' => 'Import-export compliance runs entirely on the DGFT portal — and that requires its own specifically encoded DSC. We handle the full application so your IEC filings, licences and shipping documentation are ready to sign.',
    'chips' => [
        ['bi-globe', 'DGFT Portal Ready'],
        ['bi-patch-check-fill', 'Import-Export Compliant'],
        ['bi-clock-history', '1–2 Working Days'],
    ],
    'illustration' => [
        ['bi-person-vcard', 'Applicant Details Verified'],
        ['bi-camera-video', 'Video Verification Done'],
        ['bi-globe', 'DGFT Encoding Applied'],
        ['bi-usb-drive', 'DGFT-Ready Token Delivered!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is a DGFT DSC?', 'A Class 3 Digital Signature Certificate specifically encoded for use on the Directorate General of Foreign Trade portal — required to sign IEC applications, licence requests and other DGFT filings.'],
        ['bi-globe', 'Why is it different from a regular DSC?', 'The DGFT portal requires a DSC with specific organisational encoding recognised by its system — a standard MCA or income tax DSC will not authenticate correctly on DGFT without this specific issuance.'],
        ['bi-graph-up-arrow', 'Who needs it?', 'Any business engaged in import or export activity — applying for or amending an Import Export Code, filing licence applications, or managing shipping bill and export incentive documentation online.'],
    ],
    'benefits_title' => 'Why a DGFT-Specific DSC Matters',
    'benefits' => [
        ['bi-file-earmark-check', 'IEC Application & Amendment', 'Sign your Import Export Code applications and modifications correctly.'],
        ['bi-globe', 'Full DGFT Portal Access', 'Licence applications, scheme benefits and other DGFT services made accessible.'],
        ['bi-shield-check', 'Correctly Encoded', 'Avoids the authentication failures that occur with a non-DGFT-specific DSC.'],
        ['bi-lightning-charge', 'Faster Trade Compliance', 'Digital signing speeds up licence and scheme applications significantly.'],
        ['bi-cash-coin', 'Export Incentive Access', 'Required for claiming benefits under various export promotion schemes.'],
        ['bi-clock-history', 'Quick, One-Time Setup', 'Issued once and used across all your ongoing DGFT portal interactions.'],
    ],
    'eligibility_title' => 'Who Needs a DGFT DSC?',
    'eligibility' => [
        ['bi-box-seam', 'Importers & Exporters', 'Businesses actively engaged in cross-border trade of goods or services.'],
        ['bi-file-earmark-plus', 'New IEC Applicants', 'First-time Import Export Code applicants filing through the DGFT portal.'],
        ['bi-arrow-repeat', 'IEC Modification Cases', 'Existing IEC holders updating business or bank details.'],
        ['bi-award', 'Export Scheme Beneficiaries', 'Businesses claiming benefits under RoDTEP, EPCG and similar schemes.'],
    ],
    'callout' => 'A regular Class 3 DSC will not authenticate correctly on the DGFT portal — the DGFT-specific encoding is essential, not optional.',
    'documents' => [
        ['bi-credit-card-2-front', 'PAN Card', 'of the applicant or business entity'],
        ['bi-person-vcard', 'Aadhaar Card', 'linked to an active mobile number'],
        ['bi-image', 'Passport-Size Photograph', 'recent, for the application'],
        ['bi-building', 'IEC Certificate', 'existing Import Export Code, if already allotted'],
        ['bi-file-earmark-text', 'Business Registration Proof', 'incorporation certificate or firm registration'],
        ['bi-phone', 'Active Mobile & Email', 'for OTP and verification'],
        ['bi-file-earmark-check', 'Authorisation Letter', 'for organisational DSC issuance'],
        ['bi-camera-video', 'Video Verification', 'live identity confirmation call'],
    ],
    'process_note' => 'Typical timeline: 1–2 working days from application to token dispatch',
    'process_title' => 'DGFT DSC Issuance in 4 Simple Steps',
    'process' => [
        ['bi-chat-dots', 'Application Initiation', 'We prepare your DSC application with DGFT-specific encoding requirements.'],
        ['bi-folder-check', 'Document Submission', 'Identity, business and IEC details submitted to the Certifying Authority.'],
        ['bi-camera-video', 'Video Verification', 'A brief live video call confirms your identity as per CCA norms.'],
        ['bi-usb-drive', 'Token Issuance', 'The DGFT-encoded DSC is issued and the token delivered to you.'],
    ],
    'faqs' => [
        ['Can I use my existing MCA or income tax DSC on the DGFT portal?', 'No — the DGFT portal requires a DSC with its own specific organisational encoding; a standard DSC issued for other purposes will typically fail authentication there.'],
        ['Is a DGFT DSC required for a new IEC application?', 'Yes — the Import Export Code application itself is filed and signed online through the DGFT portal, requiring a valid DGFT-compatible DSC.'],
        ['How long does DGFT DSC issuance take?', 'Typically 1–2 working days from a complete application, following the same video-verification process as a standard Class 3 DSC.'],
        ['What is the validity period?', 'Usually issued for 1, 2 or 3 years, same as standard DSCs — timely renewal is needed to maintain uninterrupted access to the DGFT portal.'],
        ['Do I need a separate DSC for each IEC I hold?', 'No — one DGFT DSC per authorised individual can typically be used across the IEC(s) they are authorised to manage, depending on portal linkage.'],
        ['Is this DSC also usable for MCA or GST filings?', 'The DGFT-specific encoding is purpose-built for that portal; for MCA, GST and income tax filings, a standard Class 3 DSC is the appropriate certificate — many clients hold both.'],
        ['What happens if my DGFT DSC expires during an active licence application?', 'The application cannot be signed or submitted until renewed — we track expiry proactively for retained clients to avoid disrupting time-sensitive trade filings.'],
        ['Can a company\'s authorised signatory obtain this DSC?', 'Yes — it is issued to the individual authorised to sign on the company\'s behalf on the DGFT portal, backed by the appropriate authorisation letter.'],
    ],
    'cta' => ['heading' => 'Ready to Get DGFT-Compliant?', 'sub' => 'The correctly encoded DSC your import-export filings actually need.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
