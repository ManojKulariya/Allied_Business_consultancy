@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Startup Advisory Services',
    'crumb' => 'Startup Advisory',
    'category' => ['label' => 'Business Consultancy', 'slug' => 'business-consultancy'],
    'eyebrow_icon' => 'bi-rocket-takeoff',
    'seo_title' => 'Startup Advisory Services',
    'seo_description' => 'End-to-end startup advisory — entity structuring, fundraising readiness, compliance and growth strategy from a team that has guided startups from idea to scale.',
    'intro' => 'From idea to scale, without the guesswork. Our startup advisory covers structuring, compliance, fundraising readiness and growth strategy — a single team that grows with you instead of handing you off at every stage.',
    'chips' => [
        ['bi-rocket-takeoff-fill', 'Idea-to-Scale Support'],
        ['bi-cash-coin', 'Fundraising-Ready'],
        ['bi-people', 'One Team, Every Stage'],
    ],
    'illustration' => [
        ['bi-lightbulb', 'Business Model Validated'],
        ['bi-building-check', 'Right Structure Chosen'],
        ['bi-cash-coin', 'Investor-Ready Documents Built'],
        ['bi-graph-up-arrow', 'Scaling With Confidence!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is startup advisory?', 'Practical, hands-on guidance across the decisions that make or break early-stage companies — entity structure, compliance, financial planning, fundraising and growth strategy — delivered by advisors who have actually done this before.'],
        ['bi-diagram-3', 'How do we help startups grow?', 'By handling the structural and financial groundwork properly the first time — so founders spend their energy on product and customers instead of untangling avoidable compliance and cap-table mistakes later.'],
        ['bi-graph-up-arrow', 'Why does the right advisor matter early?', 'Decisions made in the first year — entity type, founder agreements, early compliance — are expensive and slow to unwind later. Getting them right from day one compounds in your favour for years.'],
    ],
    'benefits_title' => 'How Startup Advisory Helps You Grow',
    'benefits' => [
        ['bi-building-check', 'Right Structure From Day One', 'Entity type, founder agreements and cap table set up to support future fundraising.'],
        ['bi-shield-check', 'Compliance Without Distraction', 'ROC, tax and DPIIT compliance handled so founders stay focused on the business.'],
        ['bi-cash-coin', 'Fundraising Readiness', 'Financial models, data rooms and investor materials prepared before you need them.'],
        ['bi-graph-up', 'Faster, Smarter Decisions', 'An experienced sounding board for pricing, hiring and expansion calls.'],
        ['bi-people', 'Access to Networks', 'Connections to investors, mentors and service providers built over years of practice.'],
        ['bi-cash-stack', 'Runway Discipline', 'Burn-rate visibility and cash planning that extends your window to the next milestone.'],
    ],
    'eligibility_title' => 'Who Should Use Startup Advisory?',
    'eligibility' => [
        ['bi-lightbulb', 'Idea-Stage Founders', 'Validating the business model and choosing the right entity structure to begin with.'],
        ['bi-rocket-takeoff', 'Early-Stage Startups', 'Post-incorporation, building the financial and compliance foundation for growth.'],
        ['bi-cash-coin', 'Startups Preparing to Raise', 'Getting fundraising-ready — models, data room and DPIIT recognition in place.'],
        ['bi-graph-up', 'Scaling Startups', 'Post-funding, needing structured financial discipline and strategic guidance to deploy capital well.'],
    ],
    'benefits_eyebrow' => 'What Startups Gain',
    'callout' => 'One team across structuring, compliance, finance and strategy means no handoffs, no repeated context — advice that compounds as you grow.',
    'documents' => [
        ['bi-lightbulb', 'Business Idea / Pitch', 'a brief on what you\'re building and for whom'],
        ['bi-people', 'Founder Details', 'roles, equity intentions and prior experience'],
        ['bi-diagram-3', 'Current Structure', 'entity type and cap table, if already incorporated'],
        ['bi-cash-stack', 'Funding Status', 'bootstrapped, raised, or actively raising'],
        ['bi-bullseye', 'Growth Plan', 'target market, milestones and timeline'],
        ['bi-file-earmark-bar-graph', 'Financials to Date', 'if any revenue or spend history exists'],
        ['bi-graph-up', 'Product / Traction Data', 'users, revenue or pilot results, where available'],
        ['bi-question-circle', 'Immediate Priorities', 'the specific decisions you need help with right now'],
    ],
    'process_note' => 'Engagements scale from a single advisory session to ongoing retainer support',
    'process_title' => 'Our Startup Consulting Process in 5 Steps',
    'process' => [
        ['bi-chat-dots', 'Founder Discovery Call', 'Understanding your business, stage and immediate priorities.'],
        ['bi-clipboard-data', 'Structural Assessment', 'Entity, compliance and financial foundation reviewed for gaps.'],
        ['bi-bullseye', 'Advisory Roadmap', 'A prioritised plan covering structuring, compliance and growth needs.'],
        ['bi-cash-coin', 'Execution Support', 'Structuring, DPIIT recognition, models and fundraising materials delivered.'],
        ['bi-graph-up-arrow', 'Ongoing Partnership', 'Continued advisory as you hit new milestones and new decisions arise.'],
    ],
    'faqs' => [
        ['What stage does startup advisory apply to?', 'Every stage — from validating your idea and choosing an entity structure, through fundraising preparation, to post-funding scaling. Engagements typically start at whichever stage you\'re at.'],
        ['What services are included?', 'Entity structuring and registration, compliance management, bookkeeping and financial statements, financial modelling, DPIIT recognition, and fundraising support — delivered as one coordinated engagement or individually as needed.'],
        ['Should we incorporate before or after getting advisory support?', 'Ideally before — the entity choice itself (private limited vs LLP vs OPC) has fundraising and tax implications advisory helps you get right from the start, avoiding a costly restructuring later.'],
        ['Can you help us get DPIIT Startup India recognition?', 'Yes — DPIIT recognition and the tax benefits it unlocks are part of our dedicated Startup India Registration service, which we coordinate alongside broader advisory.'],
        ['How is this different from hiring a full CFO or COO?', 'You get senior-level guidance across structuring, finance and strategy at a fraction of a full-time executive\'s cost — ideal until the startup reaches the scale that justifies a dedicated hire.'],
        ['Do you help with pitch decks and investor conversations?', 'Yes — alongside our Financial Modelling & Projections service, we help refine the narrative, numbers and materials founders present to investors.'],
        ['Is this a one-time engagement or ongoing support?', 'Both models are available — a focused project (like fundraising readiness) or an ongoing advisory retainer that grows with the startup through multiple milestones.'],
        ['What makes your advisory different from generic startup consultants?', 'We combine hands-on compliance and financial execution (not just advice) with strategic guidance — so recommendations get implemented, not just discussed.'],
    ],
    'cta' => ['heading' => 'Ready to Build Your Startup on Solid Ground?', 'sub' => 'One team, every stage — from first structure to first funding round and beyond.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
