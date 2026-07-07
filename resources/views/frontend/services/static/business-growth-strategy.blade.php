@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Business Growth Strategy Consulting',
    'crumb' => 'Growth Strategy',
    'category' => ['label' => 'Business Consultancy', 'slug' => 'business-consultancy'],
    'eyebrow_icon' => 'bi-graph-up-arrow',
    'seo_title' => 'Business Growth Strategy Consulting',
    'seo_description' => 'Data-driven business growth strategy consulting — market positioning, revenue diversification, operational scaling and a prioritised execution roadmap from experienced advisors.',
    'intro' => 'Growth by design, not by accident. Our advisors diagnose what\'s actually limiting your business, then build a prioritised strategy — market positioning, revenue levers, operating model — with a roadmap your team can execute.',
    'chips' => [
        ['bi-graph-up-arrow', 'Data-Driven Diagnosis'],
        ['bi-bullseye', 'Prioritised Roadmap'],
        ['bi-people', 'Senior Advisor-Led'],
    ],
    'illustration' => [
        ['bi-clipboard-data', 'Business Diagnostic Complete'],
        ['bi-bullseye', 'Growth Levers Identified'],
        ['bi-map', 'Strategic Roadmap Built'],
        ['bi-graph-up-arrow', 'Growth Execution Underway!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is a business growth strategy?', 'A structured plan that identifies where your next stage of growth will come from — new markets, products, pricing, channels or operations — and sequences the actions to get there with the resources you actually have.'],
        ['bi-exclamation-circle', 'Why does every business need one?', 'Without a strategy, growth happens by improvisation: whichever opportunity is loudest that quarter. A deliberate strategy concentrates effort on the highest-return levers instead of spreading thin across everything at once.'],
        ['bi-graph-up-arrow', 'Why bring in outside advisors?', 'Founders are close to the day-to-day and often too close to see structural blind spots. An external, data-led view — backed by benchmarking and rigorous prioritisation — surfaces opportunities and risks internal teams miss.'],
    ],
    'benefits_title' => 'What a Clear Growth Strategy Delivers',
    'benefits' => [
        ['bi-bullseye', 'Focused Resource Allocation', 'Time, capital and team effort directed at the highest-impact opportunities first.'],
        ['bi-graph-up', 'Predictable Revenue Growth', 'A tested plan replaces guesswork with a repeatable path to the next revenue milestone.'],
        ['bi-diagram-3', 'Sharper Market Positioning', 'A clear, differentiated position that customers and channels immediately understand.'],
        ['bi-shield-check', 'Reduced Strategic Risk', 'Options are stress-tested before capital is committed, not after.'],
        ['bi-people', 'Aligned Leadership Team', 'A shared roadmap keeps founders, managers and investors pulling in the same direction.'],
        ['bi-cash-coin', 'Investor & Lender Confidence', 'A credible growth plan strengthens every fundraising and credit conversation.'],
    ],
    'eligibility_eyebrow' => 'Who Should Opt for This',
    'eligibility_title' => 'Is This Right for Your Business?',
    'eligibility' => [
        ['bi-graph-up', 'Growth Has Plateaued', 'Revenue has flattened and the obvious next move isn\'t obvious anymore.'],
        ['bi-signpost-split', 'Facing a Strategic Fork', 'New market entry, product launch or expansion decision with real stakes.'],
        ['bi-rocket-takeoff', 'Post-Funding Businesses', 'Capital raised and a credible plan is needed to deploy it effectively.'],
        ['bi-people', 'Leadership Misalignment', 'Founders and leadership see the next three years differently — a facilitated strategy process resolves this.'],
    ],
    'benefits_eyebrow' => 'Key Benefits',
    'callout' => 'Every recommendation is prioritised by expected impact versus effort — so you know exactly what to do first.',
    'documents' => [
        ['bi-file-earmark-bar-graph', 'Financial Statements', 'last 2–3 years of P&L and balance sheet'],
        ['bi-graph-up', 'Sales & Customer Data', 'revenue by product, channel and segment'],
        ['bi-people', 'Organisation Chart', 'current team structure and capacity'],
        ['bi-bullseye', 'Existing Business Plan', 'or strategic notes, if any exist'],
        ['bi-bar-chart', 'Competitor Landscape', 'known competitors and market positioning'],
        ['bi-cash-stack', 'Cost Structure', 'major cost heads and unit economics'],
        ['bi-diagram-3', 'Operating Model Details', 'how the business currently delivers value'],
        ['bi-chat-square-text', 'Leadership Priorities', 'goals and constraints from key stakeholders'],
    ],
    'process_note' => 'A structured engagement — typically 3–6 weeks from diagnostic to roadmap',
    'process_title' => 'Our Consulting Process in 5 Steps',
    'process' => [
        ['bi-chat-dots', 'Discovery & Diagnostic', 'Deep-dive into your business, market and numbers to find the real constraints.'],
        ['bi-bar-chart', 'Market & Competitive Analysis', 'Benchmarking against peers and identifying open opportunities.'],
        ['bi-bullseye', 'Strategy Formulation', 'Growth levers identified, evaluated and prioritised by impact and feasibility.'],
        ['bi-map', 'Roadmap & Business Case', 'A sequenced action plan with resource needs and expected outcomes.'],
        ['bi-graph-up-arrow', 'Execution Support', 'Quarterly check-ins to track progress and adjust the plan as the business moves.'],
    ],
    'faqs' => [
        ['What does "growth strategy consulting" actually involve?', 'A structured process: understanding your business and market, identifying where growth is realistically available, prioritising the options, and building an execution roadmap your team can act on — not a generic playbook.'],
        ['How long does a growth strategy engagement take?', 'A typical engagement runs 3–6 weeks from initial diagnostic to a finalised roadmap, followed by optional quarterly reviews to track execution.'],
        ['Is this only for large companies?', 'No — the process scales to your business. SMEs and growth-stage companies benefit as much as larger organisations, often more, since resources are tighter and prioritisation matters most.'],
        ['What growth areas do you typically focus on?', 'Market expansion, product and pricing strategy, new channels, operational scaling and organisational readiness — the specific mix depends entirely on what your diagnostic reveals.'],
        ['Will you just hand us a report, or help us execute?', 'Both are available — a strategy document with a clear roadmap is the core deliverable, and many clients continue with quarterly advisory support to keep execution on track.'],
        ['Do you work with our existing leadership team, or replace their thinking?', 'We work with your team, not around it — the goal is alignment and clarity, drawing on the ground knowledge only your leadership has, combined with an external, data-led perspective.'],
        ['How is this different from hiring a full-time strategy head?', 'You get senior consulting expertise on a project basis, at a fraction of the cost of a full-time hire — ideal for periodic strategic resets rather than day-to-day strategy execution.'],
        ['What if our growth constraint turns out to be financial, not strategic?', 'That\'s common — and we address it directly, often alongside our Financial Modelling & Projections and Virtual CFO services, so the strategy and the numbers move together.'],
    ],
    'cta' => ['heading' => 'Ready to Build Your Next Growth Chapter?', 'sub' => 'A clear, prioritised roadmap — built around your business, not a template.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
