@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Director KYC (DIR-3 KYC)',
    'crumb' => 'Director KYC',
    'category' => ['label' => 'ROC & MCA Compliance', 'slug' => 'roc-mca-compliance'],
    'eyebrow_icon' => 'bi-person-vcard',
    'seo_title' => 'DIR-3 KYC Filing for Directors',
    'seo_description' => 'File your annual DIR-3 KYC before 30 September and keep your DIN active. Aadhaar-OTP verified filing by professionals — avoid the ₹5,000 penalty and DIN deactivation.',
    'intro' => 'Every director\'s annual identity check-in with the MCA. We complete your DIR-3 KYC before the deadline every year — keeping your DIN active and your directorships in good standing.',
    'chips' => [
        ['bi-calendar-check-fill', 'Due 30 September Yearly'],
        ['bi-patch-check-fill', 'Aadhaar-OTP Verified'],
        ['bi-shield-fill-check', 'DIN Deactivation Avoided'],
    ],
    'illustration' => [
        ['bi-person-vcard', 'Director Details Verified'],
        ['bi-fingerprint', 'Aadhaar & PAN Matched'],
        ['bi-file-earmark-arrow-up', 'DIR-3 KYC Filed'],
        ['bi-award', 'DIN Active for the Year!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is DIR-3 KYC?', 'A mandatory annual filing that confirms every DIN holder\'s identity and contact details are current with the MCA — mobile and email verified by one-time passwords each time.'],
        ['bi-people', 'Who must file it?', 'Every individual who holds a Director Identification Number (DIN) allotted on or before the end of the financial year — active director or not, and regardless of how many companies they serve.'],
        ['bi-graph-up-arrow', 'Why does it matter?', 'An unfiled DIR-3 KYC gets your DIN marked "Deactivated due to non-filing" — you cannot sign board resolutions, file ROC forms, or be appointed to a new company until it is reactivated.'],
    ],
    'benefits_title' => 'Why Timely DIR-3 KYC Filing Matters',
    'benefits' => [
        ['bi-shield-check', 'DIN Stays Active', 'Uninterrupted ability to act as a director and sign statutory filings.'],
        ['bi-cash-coin', 'Avoid the ₹5,000 Fee', 'Filing after the deadline attracts a flat penalty per DIN, regardless of the delay length.'],
        ['bi-building-check', 'Company Compliance Protected', 'Your company\'s own ROC filings don\'t stall waiting on a deactivated director\'s DIN.'],
        ['bi-clock-history', 'Quick, Once-a-Year Task', 'A short annual filing — far cheaper in time and money than reactivation later.'],
        ['bi-person-check', 'Clean Director Record', 'An active, verified DIN reflects well in due diligence and KYC checks by banks.'],
        ['bi-arrow-repeat', 'Simple Web Renewal', 'Once details are unchanged, subsequent years often qualify for the simpler web-based DIR-3 KYC.'],
    ],
    'eligibility_title' => 'Who Must File DIR-3 KYC?',
    'eligibility' => [
        ['bi-person-badge', 'Every DIN Holder', 'Allotted a DIN on or before 31 March of the relevant financial year.'],
        ['bi-people', 'Active & Inactive Directors', 'Applies even if you have resigned from all directorships — the DIN itself needs the filing.'],
        ['bi-calendar-range', 'First-Time & Repeat Filers', 'The full e-form applies on first filing or after any detail change; the simpler DIR-3 KYC-WEB applies when nothing has changed.'],
        ['bi-globe', 'NRI & Foreign Directors', 'Foreign nationals holding a DIN must also file, using their passport and overseas address proof.'],
    ],
    'callout' => 'Due every year by 30 September — miss it, and the DIN status flips to "Deactivated" the very next day.',
    'documents' => [
        ['bi-credit-card-2-front', 'PAN Card', 'mandatory for Indian nationals'],
        ['bi-person-vcard', 'Aadhaar Card', 'linked to an active mobile number for OTP'],
        ['bi-passport', 'Passport', 'mandatory for foreign nationals/NRIs'],
        ['bi-file-earmark-text', 'Current Address Proof', 'utility bill or bank statement (≤ 2 months old)'],
        ['bi-envelope', 'Personal Email ID', 'unique to the director, OTP-verified'],
        ['bi-phone', 'Personal Mobile Number', 'unique to the director, OTP-verified'],
        ['bi-image', 'Passport-Size Photograph', 'recent, for the e-form'],
        ['bi-vector-pen', 'Digital Signature Certificate', 'of the director, for filing authentication'],
    ],
    'process_note' => 'Typical turnaround: same day, once OTP verification is complete',
    'process_title' => 'DIR-3 KYC in 4 Simple Steps',
    'process' => [
        ['bi-chat-dots', 'Detail Check', 'We confirm whether the full e-form or the simpler web-KYC applies to you.'],
        ['bi-folder-check', 'Document Collection', 'PAN, Aadhaar, address proof and contact details are gathered.'],
        ['bi-fingerprint', 'OTP Verification', 'Mobile and email are verified live during the filing session.'],
        ['bi-patch-check', 'Filing & Confirmation', 'DIR-3 KYC is filed and the acknowledgement shared with you.'],
    ],
    'faqs' => [
        ['What happens if I don\'t file DIR-3 KYC on time?', 'Your DIN is marked "Deactivated due to non-filing" the day after the deadline. You cannot use it for any MCA filing until you file DIR-3 KYC again with a ₹5,000 penalty.'],
        ['Do I need to file if I resigned as a director this year?', 'Yes — the obligation attaches to the DIN itself, not to an active directorship. Even resigned or non-practising directors must file every year.'],
        ['What is the difference between DIR-3 KYC and DIR-3 KYC-WEB?', 'The full e-form (with document upload) is needed for first-time filing or whenever any detail changes; the simpler web-based version — just an OTP confirmation — applies when your previously filed details remain unchanged.'],
        ['Can I file DIR-3 KYC myself?', 'Technically yes, but errors in the e-form or OTP mismatches are common and cause rejections that cost you time near the deadline. We handle the process end-to-end to avoid exactly that.'],
        ['I have DINs for multiple directorships. Do I file separately for each?', 'No — DIR-3 KYC is filed once per DIN, not per company. One filing covers all your directorships linked to that DIN.'],
        ['How do I reactivate a deactivated DIN?', 'File the pending DIR-3 KYC along with the ₹5,000 penalty fee — the DIN reactivates on successful filing, usually within a day.'],
        ['Can foreign directors file DIR-3 KYC?', 'Yes — using their passport and a notarised/apostilled overseas address proof in place of an Aadhaar card, with the same annual deadline applying.'],
        ['Does DIR-3 KYC filing affect my company\'s compliance status?', 'Indirectly, yes — a deactivated director\'s DIN can block signing of company forms until reactivated, so keeping every director current protects the company\'s own filing timeline.'],
    ],
    'cta' => ['heading' => 'Keep Your DIN Active — File DIR-3 KYC Today', 'sub' => 'A quick annual filing that avoids a ₹5,000 penalty and directorship disruption.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
