@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Partnership Firm Registration',
    'crumb' => 'Partnership Firm',
    'category' => ['label' => 'Business Registration', 'slug' => 'business-registration'],
    'eyebrow_icon' => 'bi-people-fill',
    'seo_title' => 'Partnership Firm Registration',
    'seo_description' => 'Register a Partnership Firm with a professionally drafted deed, Registrar of Firms filing, firm PAN and bank account support — quick, affordable and fully guided.',
    'intro' => 'The classic way for two or more people to do business together. We draft a watertight partnership deed, register your firm with the Registrar of Firms and get your PAN — quickly and affordably.',
    'chips' => [
        ['bi-file-earmark-ruled', 'Professionally Drafted Deed'],
        ['bi-clock-history', '7–10 Working Days'],
        ['bi-tags-fill', 'Most Affordable Structure'],
    ],
    'illustration' => [
        ['bi-file-earmark-ruled', 'Partnership Deed Drafted'],
        ['bi-vector-pen', 'Deed Stamped & Signed'],
        ['bi-bank', 'Registrar of Firms Filing'],
        ['bi-award', 'Firm Ready for Business!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is a partnership firm?', 'A business owned by two or more partners under the Indian Partnership Act, 1932, governed by a partnership deed that records capital, profit-sharing and each partner\'s role.'],
        ['bi-people', 'Who should register one?', 'Small and family businesses, traders and local service providers who want a simple, low-cost structure with minimal ongoing compliance.'],
        ['bi-graph-up-arrow', 'Why register the firm?', 'A registered firm can sue in its own name, enforce the deed against partners and third parties, and is far easier to bank and contract with — registration is optional in law but strongly recommended.'],
    ],
    'benefits_title' => 'Why Businesses Choose a Partnership Firm',
    'benefits' => [
        ['bi-rocket-takeoff', 'Quick & Inexpensive', 'The fastest multi-owner structure to set up, with the lowest professional and government costs.'],
        ['bi-sliders', 'Full Flexibility', 'Profit-sharing, roles and decision rules are exactly what the deed says — easy to amend later.'],
        ['bi-file-earmark-minus', 'Minimal Compliance', 'No annual ROC filings, board meetings or statutory registers — just accounts and tax returns.'],
        ['bi-people', 'Shared Skills & Capital', 'Partners pool money, expertise and networks, sharing both workload and risk.'],
        ['bi-shield-check', 'Legal Standing (Registered)', 'A registered firm can enforce its rights in court — unregistered firms face serious restrictions.'],
        ['bi-arrow-up-right-circle', 'Easy Upgrade Path', 'A registered firm can later convert into an LLP or private limited company as it grows.'],
    ],
    'eligibility' => [
        ['bi-people', '2 to 50 Partners', 'Any individuals competent to contract can form a firm; the practical ceiling is 50 partners.'],
        ['bi-file-earmark-ruled', 'A Partnership Deed', 'A written deed on stamp paper — we draft it to cover capital, profits, duties and exits.'],
        ['bi-geo-alt', 'A Place of Business', 'Any address in India with valid proof serves as the firm\'s principal place of business.'],
        ['bi-globe-americas', 'Resident Partners', 'Indian residents can be partners freely; NRI participation involves additional RBI conditions.'],
    ],
    'callout' => 'Registration with the Registrar of Firms is optional — but unregistered firms cannot sue to enforce their contracts.',
    'documents' => [
        ['bi-credit-card-2-front', 'PAN Card', 'of all partners'],
        ['bi-person-vcard', 'Aadhaar Card', 'of all partners'],
        ['bi-file-earmark-person', 'Identity Proof', 'passport, voter ID or driving licence'],
        ['bi-file-earmark-text', 'Address Proof', 'recent bank statement or utility bill'],
        ['bi-image', 'Passport-Size Photos', 'of all partners'],
        ['bi-house-door', 'Business Address Proof', 'rent agreement or ownership document'],
        ['bi-lightning-charge', 'Premises Utility Bill', 'electricity / water bill (≤ 2 months old)'],
        ['bi-file-earmark-check', 'Owner NOC', 'if the premises are rented'],
    ],
    'process_note' => 'Typical timeline: 7–10 working days (Registrar timelines vary by state)',
    'process' => [
        ['bi-chat-dots', 'Free Consultation', 'We understand the partners\' arrangement and advise on deed terms.'],
        ['bi-file-earmark-ruled', 'Deed Drafting', 'We draft your partnership deed covering capital, profits, duties and disputes.'],
        ['bi-vector-pen', 'Stamping & Signing', 'The deed is executed on stamp paper of the correct value and notarised.'],
        ['bi-bank', 'Registrar Filing', 'We file Form 1 with the state Registrar of Firms for registration.'],
        ['bi-patch-check', 'PAN & Bank Account', 'Firm PAN and TAN are obtained and we assist with the current account.'],
    ],
    'faqs' => [
        ['Is registering a partnership firm mandatory?', 'No — a firm exists once the deed is signed. But an unregistered firm cannot sue third parties or enforce the deed in court, so registration is strongly recommended.'],
        ['How many partners can a firm have?', 'A minimum of two and a maximum of fifty partners.'],
        ['What should the partnership deed contain?', 'Firm name, business nature, capital contributions, profit-sharing ratio, partner duties, admission/retirement rules, and dispute resolution. We draft all of this professionally.'],
        ['How is a partnership firm taxed?', 'The firm pays tax at a flat 30% (plus surcharge and cess). Interest and remuneration to working partners are deductible within Section 40(b) limits.'],
        ['Do partners have limited liability?', 'No — partners are jointly and personally liable for the firm\'s obligations. If liability protection matters, consider an LLP; we can advise in your consultation.'],
        ['Can a partnership firm be converted to an LLP or company?', 'Yes. Registered firms commonly convert to LLPs or private limited companies as they scale — we handle these conversions too.'],
        ['Can a minor be a partner?', 'A minor cannot be a full partner but may be admitted to the benefits of the partnership with the consent of all partners.'],
        ['Does the firm need GST registration?', 'Only if turnover crosses the GST threshold or you sell inter-state / online. We assess this during onboarding and can register you alongside.'],
    ],
    'cta' => ['heading' => 'Ready to Register Your Partnership Firm?'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
