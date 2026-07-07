@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Legal Drafting & Agreements',
    'crumb' => 'Legal Drafting',
    'category' => ['label' => 'Trademark & Legal Services', 'slug' => 'trademark-legal-services'],
    'eyebrow_icon' => 'bi-file-earmark-ruled',
    'seo_title' => 'Legal Drafting & Agreement Services',
    'seo_description' => 'Professionally drafted business agreements — founder agreements, vendor contracts, NDAs, employment contracts and more. Clear terms that protect your business.',
    'intro' => 'A verbal understanding isn\'t a contract. We draft the agreements that protect your business — founder terms, vendor contracts, NDAs, employment agreements — in clear language that holds up when it matters.',
    'chips' => [
        ['bi-file-earmark-ruled', 'Business-Specific Drafting'],
        ['bi-mortarboard', 'CA & Legal Reviewed'],
        ['bi-clock-history', '2–5 Working Days'],
    ],
    'illustration' => [
        ['bi-chat-dots', 'Requirements Understood'],
        ['bi-file-earmark-ruled', 'Terms Drafted'],
        ['bi-search', 'Reviewed for Risk & Clarity'],
        ['bi-award', 'Agreement Ready to Sign!'],
    ],
    'overview' => [
        ['bi-question-circle', 'Why does agreement drafting matter?', 'A contract is the record of what was actually agreed — and the document that protects you if things go wrong. Generic templates miss the specific risks and terms your situation actually needs.'],
        ['bi-people', 'Who needs professionally drafted agreements?', 'Any business entering a relationship with real stakes — co-founders sharing equity, vendors handling your supply chain, employees accessing confidential information, or clients receiving your services.'],
        ['bi-graph-up-arrow', 'Why not just use a template?', 'Templates miss what\'s specific to your deal — payment triggers, exit terms, liability caps, jurisdiction. A properly drafted agreement anticipates disputes before they happen, not after.'],
    ],
    'benefits_title' => 'Why Professionally Drafted Agreements Matter',
    'benefits' => [
        ['bi-shield-check', 'Clear, Enforceable Terms', 'Obligations, timelines and remedies stated precisely — no room for "I thought it meant…".'],
        ['bi-gavel', 'Dispute Prevention', 'Well-defined terms resolve disagreements before they escalate to legal action.'],
        ['bi-cash-coin', 'Financial Protection', 'Payment terms, penalties and liability caps that protect your bottom line.'],
        ['bi-lock-fill', 'Confidentiality Secured', 'NDAs and IP clauses that actually protect your business information and ideas.'],
        ['bi-people', 'Relationship Clarity', 'Founders, employees and vendors all know exactly where they stand from day one.'],
        ['bi-file-earmark-check', 'Compliance Alignment', 'Agreements drafted consistent with applicable law — labour, contract and company law.'],
    ],
    'eligibility_eyebrow' => 'Agreements We Draft',
    'eligibility_title' => 'Common Agreements We Prepare',
    'eligibility' => [
        ['bi-people', 'Founders\' Agreement', 'Equity split, roles, vesting and exit terms among co-founders.'],
        ['bi-cart', 'Vendor & Service Agreements', 'Terms of supply, SLAs, payment and termination conditions.'],
        ['bi-lock-fill', 'NDAs & Confidentiality', 'Protecting sensitive information shared with partners or employees.'],
        ['bi-briefcase', 'Employment Agreements', 'Offer letters, appointment terms and non-compete/non-solicit clauses.'],
    ],
    'callout' => 'Every agreement is drafted for your specific deal — not adapted from a generic downloaded template.',
    'documents' => [
        ['bi-chat-dots', 'Deal Terms Summary', 'the commercial understanding already reached'],
        ['bi-people', 'Party Details', 'names, entities and roles of everyone involved'],
        ['bi-cash-stack', 'Payment / Consideration Terms', 'amounts, schedules and triggers'],
        ['bi-calendar-range', 'Timeline & Milestones', 'key dates, deliverables or vesting schedules'],
        ['bi-file-earmark-text', 'Existing Agreements', 'any prior contracts this one relates to or replaces'],
        ['bi-shield-exclamation', 'Specific Concerns', 'risks or scenarios you want the agreement to address'],
        ['bi-geo-alt', 'Governing Law Preference', 'jurisdiction for dispute resolution, if you have one'],
        ['bi-building', 'Entity Documents', 'incorporation details of the contracting parties'],
    ],
    'process_note' => 'Typical timeline: 2–5 working days depending on agreement complexity',
    'process_title' => 'Drafting in 5 Simple Steps',
    'process' => [
        ['bi-chat-dots', 'Requirement Discussion', 'We understand the deal, the parties and what needs protecting.'],
        ['bi-clipboard-data', 'Risk Identification', 'Potential disputes and gaps in the informal understanding are flagged.'],
        ['bi-file-earmark-ruled', 'Drafting', 'Clear, specific terms drafted covering obligations, payment and remedies.'],
        ['bi-search', 'Review & Refinement', 'The draft is reviewed with you and refined until every term is right.'],
        ['bi-patch-check', 'Finalisation', 'The agreement is finalised, ready for signature by all parties.'],
    ],
    'faqs' => [
        ['What types of agreements do you draft?', 'Founders\' and shareholders\' agreements, vendor and service contracts, NDAs, employment agreements, lease and licence agreements, MOUs, and other business contracts tailored to your specific need.'],
        ['How long does drafting take?', 'Straightforward agreements (NDAs, simple vendor terms) in 2–3 working days; more complex ones (founders\' agreements, multi-party contracts) may take up to a week for proper review and refinement.'],
        ['Can you review an agreement someone else has sent us?', 'Yes — contract review is a core part of this service: we identify unfavourable terms, missing protections and risks before you sign anything drafted by the other party.'],
        ['Do your agreements hold up in court?', 'They are drafted to be legally sound and enforceable under Indian contract law, with clear terms and proper structure — though enforceability in any specific dispute also depends on the facts at the time.'],
        ['What is a founders\' agreement and do we really need one?', 'It documents equity split, roles, vesting, decision-making and exit terms among co-founders — informal understandings here are the single most common source of costly startup disputes, making this one of the highest-value drafting engagements.'],
        ['Can you draft agreements for one-time transactions?', 'Yes — from a single vendor contract to an NDA for one meeting, agreements are drafted per your actual need, not bundled into unnecessary packages.'],
        ['Do you also help with agreement negotiation?', 'We can prepare talking points and alternative clause language to support your negotiation, and are available to advise during the back-and-forth with the other party.'],
        ['What if we need the agreement in a regional language too?', 'We can coordinate a translated version alongside the English draft where local enforceability or party comprehension makes that useful.'],
    ],
    'cta' => ['heading' => 'Ready for Agreements That Actually Protect You?', 'sub' => 'Clear terms, drafted for your specific deal — not a downloaded template.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
