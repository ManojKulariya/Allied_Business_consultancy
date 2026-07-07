@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Trademark Registration',
    'crumb' => 'Trademark Registration',
    'category' => ['label' => 'Trademark & Legal Services', 'slug' => 'trademark-legal-services'],
    'eyebrow_icon' => 'bi-award',
    'seo_title' => 'Trademark Registration Online',
    'seo_description' => 'Register your brand name, logo or slogan as a trademark — thorough search, correct class filing and objection support. Protect your brand identity nationally.',
    'intro' => 'Your brand name is an asset — protect it like one. We run a thorough trademark search, file in the right class, and track your application through to registration, so your brand identity is legally yours alone.',
    'chips' => [
        ['bi-patch-check-fill', 'Thorough Prior-Art Search'],
        ['bi-shield-check', 'Nationwide Protection'],
        ['bi-clock-history', '12–18 Months to Registration'],
    ],
    'illustration' => [
        ['bi-search', 'Trademark Search Cleared'],
        ['bi-file-earmark-arrow-up', 'Application Filed (TM-A)'],
        ['bi-megaphone', 'Journal Publication Passed'],
        ['bi-award', 'Registration Certificate Issued!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is a trademark?', 'A distinctive sign — name, logo, slogan, or a combination — that identifies your goods or services and legally distinguishes them from competitors, registrable under the Trade Marks Act, 1999.'],
        ['bi-people', 'Who should register?', 'Any business with a brand worth protecting — a name customers recognise, a logo you\'ve invested in, or a product line you plan to scale nationally or franchise.'],
        ['bi-graph-up-arrow', 'Why register early?', 'Trademark rights in India favour whoever registers first, not just whoever used the mark first. Waiting risks someone else registering a similar mark and blocking your own use of your own brand.'],
    ],
    'benefits_title' => 'What Trademark Registration Protects',
    'benefits' => [
        ['bi-shield-check', 'Exclusive Legal Rights', 'The sole right to use the mark nationwide for your registered goods or services.'],
        ['bi-award', 'Brand Value & Credibility', 'A registered ® mark signals a serious, established business to customers and partners.'],
        ['bi-cash-coin', 'A Licensable, Sellable Asset', 'Trademarks can be licensed, franchised or sold — value you can monetise.'],
        ['bi-gavel', 'Legal Recourse Against Copycats', 'Registration gives you standing to sue for infringement and claim damages.'],
        ['bi-globe', 'Foundation for Expansion', 'A registered Indian mark supports international filing under the Madrid Protocol.'],
        ['bi-cart-check', 'Marketplace Protection', 'Registered marks can be enforced against counterfeit listings on e-commerce platforms.'],
    ],
    'eligibility_title' => 'Eligibility to Register',
    'eligibility' => [
        ['bi-person-badge', 'Any Legal Entity', 'Individuals, proprietorships, partnerships, LLPs and companies can all apply.'],
        ['bi-fonts', 'A Distinctive Mark', 'Names, logos, slogans, sounds or a combination — as long as it distinguishes your goods/services.'],
        ['bi-search', 'Not Identical or Deceptively Similar', 'The mark must clear existing registrations and pending applications in the same class.'],
        ['bi-tag', 'Correct Class Selection', 'Filed under the right one (or more) of the 45 NICE classification classes for your goods/services.'],
    ],
    'callout' => 'File early: India follows a first-to-file principle for most disputes — registering before a competitor does is the strongest protection.',
    'documents' => [
        ['bi-image', 'Logo / Wordmark', 'clear image of the mark to be registered'],
        ['bi-credit-card-2-front', 'PAN Card', 'of the applicant entity or individual'],
        ['bi-file-earmark-text', 'Business Proof', 'incorporation certificate or udyam registration'],
        ['bi-person-vcard', 'Identity Proof', 'of the individual or authorised signatory'],
        ['bi-house-door', 'Address Proof', 'of the applicant'],
        ['bi-file-earmark-check', 'Proof of Use', 'invoices or usage evidence, if claiming prior use'],
        ['bi-vector-pen', 'Power of Attorney', 'Form TM-48, authorising us to file on your behalf'],
        ['bi-tag', 'Goods / Services List', 'a description of what the mark will cover'],
    ],
    'process_note' => 'Filing: 2–3 days · Full registration: 12–18 months, subject to objections',
    'process_title' => 'Registration in 5 Simple Steps',
    'process' => [
        ['bi-search', 'Trademark Search', 'A thorough check for identical or similar existing marks in your class.'],
        ['bi-file-earmark-arrow-up', 'Application Filing', 'Form TM-A filed with the Trade Marks Registry in the correct class.'],
        ['bi-search-heart', 'Examination', 'The Registrar reviews the application; we respond to any objection raised.'],
        ['bi-megaphone', 'Journal Publication', 'The accepted mark is published for a 4-month opposition window.'],
        ['bi-patch-check', 'Registration Certificate', 'If unopposed, the ® certificate is issued — protection confirmed.'],
    ],
    'faqs' => [
        ['How long does trademark registration take?', 'Filing itself takes 2–3 days; full registration typically takes 12–18 months, accounting for examination, the 4-month publication window and any objections raised.'],
        ['Can I start using the ™ symbol immediately?', 'Yes — ™ can be used as soon as you file the application, signalling a claimed mark. The ® symbol is reserved for marks that have completed registration.'],
        ['What if my application receives an objection?', 'A response addressing the examiner\'s specific grounds must be filed within the given timeline — our Trademark Objection Reply service handles exactly this situation.'],
        ['How many classes should I register under?', 'One class covers a specific category of goods/services; businesses spanning multiple categories (e.g., products and related services) often need multiple class filings for full protection.'],
        ['Does trademark registration protect me internationally?', 'A domestic registration protects only within India; international protection requires separate filing under the Madrid Protocol or in each target country, which we can also assist with.'],
        ['What is the validity period of a trademark?', '10 years from the filing date, renewable indefinitely for further 10-year terms — as long as timely renewal applications are filed.'],
        ['Can someone oppose my trademark even after it\'s registered?', 'A rectification or cancellation petition can be filed against a registered mark on specific grounds, though this is less common than opposition during the publication stage.'],
        ['What happens if I don\'t use my registered trademark?', 'A mark unused for a continuous period of five years and three months can become vulnerable to a non-use cancellation petition filed by a third party.'],
    ],
    'cta' => ['heading' => 'Ready to Protect Your Brand?', 'sub' => 'Thorough search, correct filing, and support through to registration.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
