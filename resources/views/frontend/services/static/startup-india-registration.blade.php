@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Startup India Registration (DPIIT Recognition)',
    'crumb' => 'Startup India',
    'category' => ['label' => 'Business Registration', 'slug' => 'business-registration'],
    'eyebrow_icon' => 'bi-rocket-takeoff',
    'seo_title' => 'DPIIT Startup Registration',
    'seo_description' => 'Get DPIIT Startup India recognition in 1–2 weeks — tax exemption eligibility, self-certification, IPR fast-tracking and government tender access. Expert-prepared application.',
    'intro' => 'Unlock government benefits built for startups. We prepare and file your DPIIT recognition application — the gateway to tax exemptions, easier compliance, IPR fast-tracking and startup funding schemes.',
    'chips' => [
        ['bi-patch-check-fill', 'Official DPIIT Recognition'],
        ['bi-clock-history', '1–2 Weeks'],
        ['bi-gift-fill', 'Govt. Fees: Zero'],
    ],
    'illustration' => [
        ['bi-building-check', 'Eligible Entity Verified'],
        ['bi-lightbulb', 'Innovation Brief Prepared'],
        ['bi-file-earmark-arrow-up', 'DPIIT Application Filed'],
        ['bi-award', 'Startup Recognised!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is Startup India recognition?', 'An official certificate from DPIIT (Department for Promotion of Industry and Internal Trade) identifying your entity as a startup, which unlocks the incentives of the Startup India programme.'],
        ['bi-people', 'Who should apply?', 'Private limited companies, LLPs and registered partnership firms up to 10 years old with turnover under ₹100 crore, working on an innovative or scalable product, service or process.'],
        ['bi-graph-up-arrow', 'Why get recognised?', 'It is the doorway to income-tax exemption eligibility, self-certified compliance, cheaper and faster IP protection, government tenders and startup-focused funding schemes.'],
    ],
    'benefits_title' => 'What DPIIT Recognition Unlocks',
    'benefits' => [
        ['bi-percent', 'Tax Holiday Eligibility', 'Recognised startups can apply for 100% income-tax exemption for 3 consecutive years under Section 80-IAC.'],
        ['bi-file-earmark-check', 'Self-Certification', 'Self-certify under key labour and environment laws with reduced inspections for the early years.'],
        ['bi-lightbulb', 'IPR Fast-Track', 'Expedited patent examination with an 80% rebate on patent fees and 50% on trademark fees.'],
        ['bi-cart-check', 'Government Tenders', 'Exemption from prior-experience and EMD requirements in many public procurements, plus GeM access.'],
        ['bi-cash-stack', 'Funding Access', 'Eligibility for the Fund of Funds, Startup India Seed Fund and credit guarantee schemes.'],
        ['bi-arrow-repeat', 'Easier Exit', 'Fast-track voluntary closure under insolvency rules if the venture does not work out.'],
    ],
    'eligibility_title' => 'Who Qualifies?',
    'eligibility' => [
        ['bi-building-check', 'Eligible Entity Type', 'A private limited company, LLP or registered partnership firm incorporated in India.'],
        ['bi-calendar-range', 'Up to 10 Years Old', 'Counted from the date of incorporation.'],
        ['bi-graph-up', 'Turnover Under ₹100 Crore', 'In every financial year since incorporation.'],
        ['bi-lightbulb', 'Innovative & Scalable', 'Working towards innovation or improvement of products, services or processes — and not formed by splitting up an existing business.'],
    ],
    'callout' => 'Government charges no fee for DPIIT recognition — sole proprietorships are not eligible.',
    'documents' => [
        ['bi-award', 'Certificate of Incorporation', 'company / LLP / firm registration proof'],
        ['bi-credit-card-2-front', 'Entity PAN', 'of the company, LLP or firm'],
        ['bi-people', 'Founder Details', 'names, roles and contact information'],
        ['bi-file-earmark-slides', 'Business Brief / Pitch Deck', 'what you do and what is innovative about it'],
        ['bi-globe', 'Website or App Link', 'or product demo, if available'],
        ['bi-cash-coin', 'Funding Details', 'investor and DIPP-related declarations, if funded'],
        ['bi-lightbulb', 'IP Details', 'patents or trademarks filed, if any'],
        ['bi-file-earmark-text', 'Authorisation Letter', 'for filing on the entity\'s behalf'],
    ],
    'process_note' => 'Typical timeline: 1–2 weeks including DPIIT processing',
    'process' => [
        ['bi-chat-dots', 'Free Consultation', 'We verify eligibility and identify the benefits that apply to you.'],
        ['bi-lightbulb', 'Innovation Brief', 'We help articulate your innovation story the way DPIIT expects.'],
        ['bi-person-plus', 'Portal Profile', 'Your startup profile is created on the Startup India portal.'],
        ['bi-file-earmark-arrow-up', 'DPIIT Application', 'The recognition application is filed with supporting documents.'],
        ['bi-patch-check', 'Certificate Issued', 'You receive your DPIIT recognition number and certificate.'],
    ],
    'faqs' => [
        ['Is there any government fee for Startup India registration?', 'No — DPIIT recognition is completely free. You only pay our professional fee for preparing a strong application.'],
        ['Is the 3-year tax holiday automatic after recognition?', 'No. Recognition makes you eligible; the Section 80-IAC exemption needs a separate application that is evaluated on merit. We prepare and file it for you.'],
        ['Can a sole proprietorship get DPIIT recognition?', 'No. Only private limited companies, LLPs and registered partnership firms qualify. We can first convert your proprietorship if needed.'],
        ['How long does recognition remain valid?', 'Until the entity completes 10 years from incorporation or crosses ₹100 crore turnover in any year, whichever comes first.'],
        ['What counts as "innovative" for eligibility?', 'A new or significantly improved product, service or process with potential for employment or wealth creation — not merely a traditional business model. Our team frames your application accordingly.'],
        ['Does recognition help with hiring or ESOPs?', 'Yes — eligible recognised startups enjoy deferred tax on ESOPs for employees, making stock-based compensation more practical.'],
        ['Will I get funding automatically?', 'No, but recognition opens access to schemes such as the Seed Fund and Fund of Funds, and adds credibility with investors.'],
        ['What if my application is rejected?', 'Applications can be revised and refiled with a stronger innovation narrative — included in our service at no extra charge.'],
    ],
    'cta' => ['heading' => 'Ready to Get DPIIT Recognised?', 'sub' => 'Join thousands of recognised startups accessing tax and funding benefits.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
