@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Financial Modelling & Projections',
    'crumb' => 'Financial Modelling',
    'category' => ['label' => 'Business Consultancy', 'slug' => 'business-consultancy'],
    'eyebrow_icon' => 'bi-bar-chart-line',
    'seo_title' => 'Financial Modelling & Projections Services',
    'seo_description' => 'Investor-grade financial models and projections — 3-statement models, scenario analysis and valuation support for fundraising, bank loans and strategic planning.',
    'intro' => 'Numbers investors and banks actually trust. We build 3-statement financial models with realistic assumptions, scenario analysis and clean formatting — ready for a term sheet, a loan sanction, or your own strategic planning.',
    'chips' => [
        ['bi-patch-check-fill', 'Investor-Grade Models'],
        ['bi-bank', 'Bank & CMA Ready'],
        ['bi-sliders', 'Scenario Analysis Included'],
    ],
    'illustration' => [
        ['bi-clipboard-data', 'Business Drivers Mapped'],
        ['bi-sliders', 'Assumptions Built & Tested'],
        ['bi-bar-chart-line', '3-Statement Model Complete'],
        ['bi-award', 'Investor-Ready Projections!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is financial modelling?', 'Building a structured, formula-driven representation of your business\'s future financial performance — revenue, costs, cash flow and balance sheet — linked together so that changing one assumption flows correctly through the entire model.'],
        ['bi-graph-up-arrow', 'Why does forecasting matter?', 'A model turns "we think we\'ll grow" into a testable, defensible plan. It reveals when you\'ll need cash, what breaks unit economics, and which assumptions actually drive the outcome — before real money is at stake.'],
        ['bi-bank', 'Who reads these models?', 'Investors evaluating a raise, banks assessing a loan, and your own leadership team deciding where to invest next — each reads the model differently, and we build for the audience that matters for your engagement.'],
    ],
    'benefits_title' => 'What a Proper Financial Model Delivers',
    'benefits' => [
        ['bi-bank', 'Faster Fundraising & Lending', 'Clean, credible models speed up investor due diligence and bank loan sanctions.'],
        ['bi-sliders', 'Scenario Clarity', 'Best-case, base-case and downside scenarios show exactly how resilient the plan is.'],
        ['bi-cash-stack', 'Cash Runway Visibility', 'Know precisely when you\'ll need the next round or credit line — months in advance.'],
        ['bi-bullseye', 'Better Pricing & Unit Economics', 'Modelling forces clarity on what each customer or unit actually costs and earns.'],
        ['bi-graph-up', 'Valuation Support', 'A defensible model underpins DCF and comparable-based valuation discussions.'],
        ['bi-shield-check', 'Fewer Planning Surprises', 'Budget-versus-actual tracking becomes possible once a real model exists to compare against.'],
    ],
    'eligibility_title' => 'Who Needs Financial Modelling?',
    'eligibility' => [
        ['bi-rocket-takeoff', 'Startups Raising Capital', 'Seed to Series-stage founders need a model that survives investor scrutiny.'],
        ['bi-bank', 'Businesses Seeking Loans', 'Banks and NBFCs require projected financials and CMA data for credit proposals.'],
        ['bi-diagram-3', 'Companies Planning Expansion', 'New product lines, locations or capacity need a business case before commitment.'],
        ['bi-briefcase', 'Boards & Investors', 'Ongoing forecasting for budgeting, board reporting and performance tracking.'],
    ],
    'callout' => 'Every model is built with transparent, editable assumptions — never a black box you can\'t defend in a room.',
    'documents' => [
        ['bi-file-earmark-bar-graph', 'Historical Financials', 'past 2–3 years of P&L, balance sheet and cash flow'],
        ['bi-graph-up', 'Revenue Drivers', 'pricing, customer counts, sales cycle assumptions'],
        ['bi-cash-stack', 'Cost Structure', 'fixed and variable costs, headcount plans'],
        ['bi-building', 'Capex Plans', 'planned investments in assets or infrastructure'],
        ['bi-bank', 'Existing Debt & Facilities', 'loan terms and repayment schedules'],
        ['bi-bullseye', 'Business Plan / Strategy Notes', 'growth assumptions and target markets'],
        ['bi-people', 'Cap Table', 'for models supporting fundraising or valuation'],
        ['bi-clipboard-data', 'Industry Benchmarks', 'we source these too, where you don\'t have them'],
    ],
    'process_note' => 'Typical turnaround: 2–3 weeks for a full 3-statement model with scenarios',
    'process_title' => 'Our Modelling Process in 5 Steps',
    'process' => [
        ['bi-chat-dots', 'Scope & Purpose', 'Fundraising, lending or planning — the audience shapes the model\'s structure.'],
        ['bi-clipboard-data', 'Driver Mapping', 'Revenue and cost drivers are identified from your business and historicals.'],
        ['bi-sliders', 'Model Build', 'The 3-statement model is built with linked, auditable formulas — not hardcoded numbers.'],
        ['bi-bar-chart-line', 'Scenario Testing', 'Base, upside and downside cases stress-test the plan\'s resilience.'],
        ['bi-patch-check', 'Review & Handover', 'The model and a summary deck are reviewed with you and delivered fully editable.'],
    ],
    'faqs' => [
        ['What exactly is a "3-statement model"?', 'A financial model where the P&L, balance sheet and cash flow statement are formula-linked, so any change in one assumption — say, sales growth — correctly flows through profit, working capital and cash automatically.'],
        ['How far into the future should projections go?', 'Typically 3 to 5 years for fundraising and strategic planning; bank loan proposals often need 3-year CMA-format projections. We tailor the horizon to your specific use case.'],
        ['Will the model hold up under investor scrutiny?', 'That is the design goal — transparent, editable assumptions, defensible growth logic, and no unexplained jumps in the numbers. We also prepare you to explain the key assumptions in investor conversations.'],
        ['What is CMA data and do I need it?', 'Credit Monitoring Arrangement data is the specific projected-financials format Indian banks require for loan proposals — we prepare this directly if your engagement is loan-focused.'],
        ['Can the model help with valuation?', 'Yes — the projected cash flows feed directly into DCF valuation approaches, and we can extend the deliverable to include a valuation summary using DCF and comparable-company methods.'],
        ['What if our historicals are messy or incomplete?', 'We work with what exists and flag assumptions clearly where data is thin — and can coordinate with our bookkeeping team first if historicals need real cleanup before modelling.'],
        ['Do you build the model in Excel or specialised software?', 'Excel — the universal standard investors, banks and your own team can open, audit and adjust without needing proprietary software.'],
        ['Can you update the model as our numbers evolve?', 'Yes — many clients retain us for quarterly updates and reforecasts as actuals come in, keeping the model a living planning tool rather than a one-time document.'],
    ],
    'cta' => ['heading' => 'Ready for Numbers That Stand Up to Scrutiny?', 'sub' => 'Investor-grade, bank-ready financial models — built on defensible logic.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
