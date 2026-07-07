@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Tax Planning & Advisory',
    'crumb' => 'Tax Planning',
    'category' => ['label' => 'Income Tax Services', 'slug' => 'income-tax-services'],
    'eyebrow_icon' => 'bi-graph-up-arrow',
    'seo_title' => 'Tax Planning & Advisory Services',
    'seo_description' => 'Personal and business tax planning by CAs — regime selection, salary structuring, capital gains planning, advance tax and year-round advisory that legally minimises your tax.',
    'intro' => 'Stop discovering your tax bill in July. Our advisors plan it in April — structuring salary, investments, capital gains and business income so you legally pay the minimum, with zero year-end surprises.',
    'chips' => [
        ['bi-mortarboard', 'CA-Led Advisory'],
        ['bi-calendar-range', 'Year-Round Support'],
        ['bi-shield-fill-check', '100% Legal Optimisation'],
    ],
    'illustration' => [
        ['bi-clipboard-data', 'Income & Investments Mapped'],
        ['bi-calculator', 'Regimes & Scenarios Compared'],
        ['bi-file-earmark-ruled', 'Personal Tax Plan Delivered'],
        ['bi-piggy-bank', 'Savings Realised All Year!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is tax planning?', 'Arranging your income, investments and expenses within the law so less of your money goes to tax — using regimes, deductions, exemptions, timing and structure deliberately instead of by accident.'],
        ['bi-people', 'Who needs it?', 'Salaried professionals crossing ₹10 lakh, business owners deciding how to pay themselves, investors sitting on gains, NRIs, and anyone whose tax bill felt "too big" last year.'],
        ['bi-graph-up-arrow', 'Why does it matter?', 'Most taxpayers overpay simply through poor timing and default choices. Planned early, the same income routinely bears 10–30% less tax — compounding into serious wealth over the years.'],
    ],
    'benefits_title' => 'What Professional Tax Planning Delivers',
    'benefits' => [
        ['bi-piggy-bank', 'Lower Tax, Legally', 'Every deduction, exemption and rebate you actually qualify for — claimed by design.'],
        ['bi-calculator', 'Right Regime, Every Year', 'Old vs new regime re-evaluated annually as your income and investments change.'],
        ['bi-briefcase', 'Smart Salary Structuring', 'HRA, NPS, LTA, reimbursements and employer contributions arranged tax-efficiently.'],
        ['bi-graph-up', 'Capital Gains Timing', 'Harvesting, holding periods, and Sections 54/54F/54EC exemptions planned before you sell.'],
        ['bi-cash-stack', 'No Advance-Tax Shocks', 'Quarterly instalments computed on time — no 234B/234C interest eating your returns.'],
        ['bi-shield-check', 'Defensible Positions', 'Every strategy is documented and law-backed — aggressive schemes are not our business.'],
    ],
    'eligibility_title' => 'Who Needs Tax Planning?',
    'eligibility' => [
        ['bi-person-badge', 'Salaried Professionals', 'Especially above ₹10 lakh — CTC structuring and regime choice make a visible difference.'],
        ['bi-shop', 'Business Owners & Founders', 'Remuneration vs dividend mix, family salaries, depreciation and entity structure planning.'],
        ['bi-graph-up', 'Investors & Property Sellers', 'Equity, mutual fund, crypto and real-estate gains need planning before the sale, not after.'],
        ['bi-globe', 'NRIs & Cross-Border Earners', 'Residency status, DTAA relief and repatriation planned to avoid double taxation.'],
    ],
    'callout' => 'The best month for tax planning is April — the worst is March. Start early, save more.',
    'documents' => [
        ['bi-file-earmark-text', 'Income Details', 'salary slips / CTC structure, business P&L'],
        ['bi-journal', 'Last Filed ITR', 'and the latest Form 26AS / AIS'],
        ['bi-piggy-bank', 'Current Investments', '80C, NPS, insurance and ELSS holdings'],
        ['bi-graph-up', 'Portfolio Statements', 'broker, mutual fund and property holdings'],
        ['bi-house-door', 'Loan Details', 'home, education or business loan schedules'],
        ['bi-people', 'Family Structure', 'earning members, dependants, HUF if any'],
        ['bi-cash-coin', 'Planned Transactions', 'property sales, ESOP exercises, big expenses'],
        ['bi-bank', 'Bank Summaries', 'major inflows and recurring commitments'],
    ],
    'process_note' => 'One-time plans or year-round retainers — both start the same way',
    'process_title' => 'Advisory in 5 Simple Steps',
    'process' => [
        ['bi-chat-dots', 'Discovery Call', 'We map your income sources, goals and last year\'s tax pain points.'],
        ['bi-clipboard-data', 'Data Review', 'Your returns, AIS, investments and loans are analysed in detail.'],
        ['bi-calculator', 'Scenario Modelling', 'Regimes, structures and investment options are computed side by side.'],
        ['bi-file-earmark-ruled', 'Your Tax Plan', 'A written, prioritised action plan with projected savings per step.'],
        ['bi-arrow-repeat', 'Ongoing Support', 'Quarterly reviews, advance-tax alerts and on-call advice all year.'],
    ],
    'faqs' => [
        ['Is tax planning legal?', 'Completely — planning uses deductions, exemptions and choices the law itself provides. What we never touch is evasion (hiding income) or sham transactions; every recommendation is defensible in an assessment.'],
        ['How much can I realistically save?', 'Salaried clients typically save ₹30,000–₹2 lakh a year through regime choice, CTC restructuring and investment alignment; business owners often save more through remuneration and entity planning. We quantify your number in the first review.'],
        ['When should tax planning start?', 'At the start of the financial year. Salary structures, regime elections and investment timing work best with 12 months of runway — March-end "planning" is mostly damage control.'],
        ['Old regime or new regime — which is better?', 'There is no universal answer: the new regime\'s lower rates compete with the old regime\'s deductions. The break-even depends on your HRA, 80C, 80D, NPS and home-loan interest — we compute both every year.'],
        ['Can you help with capital gains on property?', 'Yes — timing the sale, choosing between Sections 54, 54F and 54EC bonds, and planning reinvestment windows are core advisory work. Talk to us before you sign the deal.'],
        ['Do you advise business owners on how to pay themselves?', 'Yes — the salary vs profit vs dividend mix, family member remuneration, and entity choice (proprietorship vs LLP vs company) can change your effective tax rate dramatically.'],
        ['What is advance tax and does it affect me?', 'If your tax liability beyond TDS exceeds ₹10,000, you must pay in quarterly instalments (June, September, December, March). Missing them costs 1% monthly interest — our calendar keeps you ahead.'],
        ['Is this a one-time service or ongoing?', 'Both available: a one-time plan with a written roadmap, or an annual retainer with quarterly reviews, advance-tax computations and unlimited advisory calls. Most clients start one-time and upgrade.'],
    ],
    'cta' => ['heading' => 'Ready to Pay Less Tax — Legally?', 'sub' => 'Get a written plan with your projected savings, from CAs who do this daily.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
