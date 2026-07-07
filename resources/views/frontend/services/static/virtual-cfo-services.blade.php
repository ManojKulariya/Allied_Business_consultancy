@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Virtual CFO Services',
    'crumb' => 'Virtual CFO',
    'category' => ['label' => 'Accounting & Bookkeeping', 'slug' => 'accounting-bookkeeping'],
    'eyebrow_icon' => 'bi-person-workspace',
    'seo_title' => 'Virtual CFO Services',
    'seo_description' => 'CFO-level financial leadership without the CFO salary — budgeting, cash-flow management, MIS dashboards, fundraising support and board reporting on a flexible monthly engagement.',
    'intro' => 'CFO-grade financial leadership, without the ₹50-lakh salary. Your Virtual CFO owns budgeting, cash flow, MIS and investor conversations — turning your finance function from record-keeping into a growth engine.',
    'chips' => [
        ['bi-mortarboard', 'Senior CA-Led'],
        ['bi-graph-up-arrow', 'Growth-Focused'],
        ['bi-tags-fill', 'Fraction of a CFO\'s Cost'],
    ],
    'illustration' => [
        ['bi-clipboard-data', 'Finance Health Check Done'],
        ['bi-bullseye', 'Budgets & KPIs Set'],
        ['bi-file-earmark-bar-graph', 'Monthly Dashboard Live'],
        ['bi-graph-up-arrow', 'Decisions Backed by Numbers!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is a Virtual CFO?', 'A senior finance professional who runs your company\'s finance strategy part-time — planning, analysis, controls and stakeholder management — with the depth of a CFO but engaged only for the hours you actually need.'],
        ['bi-people', 'Who should hire one?', 'Startups preparing to raise, SMEs between ₹1–100 crore that have accountants but no financial leadership, and founders who make big decisions on gut feel because the numbers arrive too late.'],
        ['bi-graph-up-arrow', 'Why does it work?', 'Most growing businesses need 20–40 hours of CFO thinking a month, not a full-time hire. A Virtual CFO delivers exactly that slice — strategy, discipline and investor credibility at a fraction of the cost.'],
    ],
    'benefits_eyebrow' => 'Key Responsibilities',
    'benefits_title' => 'What Your Virtual CFO Takes Charge Of',
    'benefits' => [
        ['bi-bullseye', 'Budgeting & Forecasting', 'Annual budgets, rolling forecasts and variance reviews that keep plans honest.'],
        ['bi-cash-stack', 'Cash-Flow Management', 'Working-capital discipline, collection rhythm and a 13-week cash runway view.'],
        ['bi-file-earmark-bar-graph', 'MIS & KPI Dashboards', 'A monthly dashboard of margins, unit economics and the metrics that drive your model.'],
        ['bi-cash-coin', 'Fundraising Support', 'Financial models, data rooms and investor Q&A for equity or debt raises.'],
        ['bi-shield-check', 'Controls & Compliance', 'Approval matrices, process controls and oversight of tax and statutory calendars.'],
        ['bi-people', 'Board & Investor Reporting', 'Professional reporting packs and presence in board or investor meetings.'],
    ],
    'eligibility_title' => 'Who Should Hire a Virtual CFO?',
    'eligibility' => [
        ['bi-rocket-takeoff', 'Funded & Fundraising Startups', 'Investors expect CFO-grade numbers from the first term sheet onwards.'],
        ['bi-graph-up', 'Scaling SMEs', 'Revenue is growing but margins, pricing and cash cycles are getting harder to read.'],
        ['bi-diagram-3', 'Multi-Entity Businesses', 'Group structures, branches or subsidiaries needing consolidated visibility.'],
        ['bi-arrow-repeat', 'Turnaround Situations', 'Cash stress or stalled profitability that needs structured financial intervention.'],
    ],
    'callout' => 'Engagements flex from a few review hours a month to several days a week — and scale as you grow.',
    'documents' => [
        ['bi-journal', 'Current Books & MIS', 'whatever exists today — we start from reality'],
        ['bi-file-earmark-bar-graph', 'Last Financial Statements', 'audited or provisional'],
        ['bi-bank', 'Banking & Loan Position', 'facilities, limits and repayment schedules'],
        ['bi-bullseye', 'Business Plan / Targets', 'goals for the next 12–36 months'],
        ['bi-people', 'Team Structure', 'who handles finance, billing and collections today'],
        ['bi-cart-check', 'Revenue Model Details', 'pricing, channels and top customers'],
        ['bi-cash-stack', 'Cost Structure', 'major heads, contracts and commitments'],
        ['bi-clipboard-data', 'Cap Table / Investors', 'for fundraising-focused engagements'],
    ],
    'process_note' => 'Structured onboarding, then a steady monthly leadership rhythm',
    'process_title' => 'Engagement in 5 Simple Steps',
    'process' => [
        ['bi-chat-dots', 'Discovery Call', 'Your goals, pain points and current finance maturity are mapped.'],
        ['bi-clipboard-data', 'Finance Health Check', 'A diagnostic of books, cash, controls and reporting — with findings.'],
        ['bi-bullseye', 'Roadmap & KPIs', 'A 90-day plan, budget framework and dashboard metrics are agreed.'],
        ['bi-file-earmark-bar-graph', 'Monthly Rhythm', 'Dashboards, review meetings and decision support — every month.'],
        ['bi-graph-up-arrow', 'Scale & Strategy', 'Fundraising, expansion and pricing decisions get CFO-level treatment.'],
    ],
    'faqs' => [
        ['How is a Virtual CFO different from my accountant?', 'Your accountant records the past; a CFO shapes the future. Bookkeeping, compliance and returns stay important — the Virtual CFO sits above them, using those numbers for planning, pricing, cash and capital decisions.'],
        ['How much time will the Virtual CFO spend on my business?', 'Typical engagements run 2–8 days a month depending on scope — a fixed monthly cadence of dashboards and reviews, plus on-call support for decisions and negotiations.'],
        ['Can the Virtual CFO help us raise funds?', 'Yes — financial models, valuation workings, data-room preparation, investor Q&A and term-sheet support are among the most common reasons clients engage us.'],
        ['Do you replace our existing finance team?', 'No — we lead it. Your accountants keep executing while the Virtual CFO sets direction, reviews output and raises the bar. Where gaps exist, we help hire or plug them with our team.'],
        ['Is a Virtual CFO engagement confidential?', 'Fully. NDAs are standard, and sensitive matters (payroll, cap tables, margins) are handled only with named senior personnel.'],
        ['What size of business is this suitable for?', 'Most value lands between ₹1 crore and ₹100 crore revenue — enough complexity to need leadership, not enough to justify a ₹40–80 lakh full-time CFO.'],
        ['How soon do we see results?', 'The health check lands within the first month; cash-flow visibility and a working dashboard typically by month two. Strategic wins — pricing, cost, funding — build over the first two quarters.'],
        ['Can we start small and expand later?', 'Absolutely — many clients begin with a monthly review retainer and scale to multi-day engagements as fundraising or expansion kicks in. Exit anytime with 30 days\' notice.'],
    ],
    'cta' => ['heading' => 'Ready for CFO-Level Financial Leadership?', 'sub' => 'Strategy, discipline and investor credibility — on a flexible monthly plan.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
