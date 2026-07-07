@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Payroll Processing Services',
    'crumb' => 'Payroll Processing',
    'category' => ['label' => 'Payroll & HR Services', 'slug' => 'payroll-hr-services'],
    'eyebrow_icon' => 'bi-people',
    'seo_title' => 'Payroll Processing Services',
    'seo_description' => 'End-to-end payroll processing — salary computation, statutory deductions, payslips and compliance filings managed monthly by experts. Accurate, confidential and always on time.',
    'intro' => 'Payroll that runs like clockwork, every month. We compute salaries, apply every statutory deduction correctly, generate payslips and keep PF, ESI and TDS compliance in step — so payday is never a scramble.',
    'chips' => [
        ['bi-calendar-check-fill', 'On-Time, Every Month'],
        ['bi-shield-fill-check', '100% Statutory Accuracy'],
        ['bi-lock-fill', 'Confidential Handling'],
    ],
    'illustration' => [
        ['bi-clock-history', 'Attendance & Inputs Received'],
        ['bi-calculator', 'Salary & Deductions Computed'],
        ['bi-receipt', 'Payslips Generated'],
        ['bi-award', 'Salaries Disbursed On Time!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is payroll processing?', 'The monthly cycle of computing employee salaries — basic pay, allowances, overtime and bonuses — then correctly deducting PF, ESI, professional tax and TDS before generating payslips and the bank disbursement file.'],
        ['bi-exclamation-circle', 'Why does it need careful management?', 'Payroll sits at the intersection of labour law, tax law and employee trust. A single wrong deduction or missed statutory filing creates compliance exposure and, worse, an unhappy team.'],
        ['bi-graph-up-arrow', 'Why outsource it?', 'A dedicated payroll team stays current on PF/ESI rate changes, TDS slabs and state-specific professional tax — so your HR function focuses on people, not spreadsheet formulas.'],
    ],
    'benefits_title' => 'Why Businesses Outsource Payroll',
    'benefits' => [
        ['bi-shield-check', 'Statutory Accuracy', 'PF, ESI, professional tax and TDS calculated correctly against current rates every month.'],
        ['bi-clock-history', 'Never Late', 'Salaries, payslips and filings land on schedule — no month-end fire drills.'],
        ['bi-lock-fill', 'Confidentiality Protected', 'Salary data handled by a dedicated external team, away from internal office gossip.'],
        ['bi-cash-coin', 'Lower Overheads', 'A professional payroll function without the cost of an in-house payroll hire.'],
        ['bi-file-earmark-check', 'Audit-Ready Records', 'Payslips, registers and statutory reports organised the way inspectors expect.'],
        ['bi-people', 'Happier Employees', 'Accurate, on-time salaries and clear payslips build trust in the organisation.'],
    ],
    'eligibility_title' => 'Businesses That Need Payroll Services',
    'eligibility' => [
        ['bi-rocket-takeoff', 'Startups Hiring Their First Team', 'Get statutory payroll right from employee number one, without an HR department.'],
        ['bi-shop', 'Growing SMEs', 'Headcount has outgrown spreadsheets and manual salary calculations.'],
        ['bi-diagram-3', 'Multi-State Employers', 'Professional tax and labour welfare rules differ by state — we track them all.'],
        ['bi-briefcase', 'Agencies & Professional Firms', 'Variable pay, reimbursements and contractor-vs-employee classification handled correctly.'],
    ],
    'callout' => 'Payroll data stays strictly confidential — access-controlled systems and NDA-bound teams, always.',
    'documents' => [
        ['bi-people', 'Employee Master Data', 'names, PAN, bank details and joining dates'],
        ['bi-clock-history', 'Attendance & Leave Records', 'for the payroll month'],
        ['bi-cash-stack', 'Salary Structure / CTC', 'basic, allowances and deduction components'],
        ['bi-file-earmark-plus', 'New Joiners / Exits', 'onboarding and full-and-final details'],
        ['bi-graph-up', 'Variable Pay Inputs', 'incentives, bonuses and overtime, if any'],
        ['bi-receipt', 'Reimbursement Claims', 'travel, medical and other approved expenses'],
        ['bi-percent', 'Tax Declarations', 'employee investment declarations for TDS'],
        ['bi-bank', 'Bank Details', 'for the salary disbursement file'],
    ],
    'process_note' => 'A fixed monthly cycle — inputs by a set date, salaries out on schedule',
    'process_title' => 'Payroll Cycle in 5 Simple Steps',
    'process' => [
        ['bi-chat-dots', 'One-Time Setup', 'Salary structures, statutory registrations and pay policies are configured.'],
        ['bi-cloud-arrow-up', 'Monthly Inputs', 'Attendance, leaves and variable pay data shared each cycle.'],
        ['bi-calculator', 'Computation', 'Gross pay, statutory deductions and net pay are calculated for every employee.'],
        ['bi-file-earmark-check', 'Review & Approval', 'A payroll summary is shared for your sign-off before disbursement.'],
        ['bi-patch-check', 'Disbursement & Payslips', 'Salaries transferred, payslips issued, and compliance filings completed.'],
    ],
    'faqs' => [
        ['What is included in your payroll processing service?', 'Salary computation, statutory deductions (PF, ESI, professional tax, TDS), payslip generation, the bank disbursement file, and the underlying PF/ESI/TDS compliance filings — a complete monthly cycle.'],
        ['Can you handle payroll for employees across multiple states?', 'Yes — professional tax slabs and labour welfare fund rules vary by state, and we apply the correct treatment for every employee regardless of location.'],
        ['How do you ensure salary data stays confidential?', 'Access-controlled systems, a dedicated processing team, and non-disclosure agreements as standard — payroll data is never shared beyond what your organisation authorises.'],
        ['Do you also handle full-and-final settlements?', 'Yes — leave encashment, gratuity computation, notice-period adjustments and final statutory dues are processed as part of exit management.'],
        ['What if an employee\'s salary structure changes mid-year?', 'Increments, promotions and structure revisions are updated in the same cycle they take effect, with retroactive corrections handled cleanly where needed.'],
        ['Do you provide payslips employees can access themselves?', 'Yes — payslips are issued in a format employees can retain, and where you use an HR portal we can integrate payroll outputs into it.'],
        ['Is payroll processing different from PF/ESI return filing?', 'Payroll processing calculates and pays salaries each month; PF/ESI/TDS return filing is the statutory reporting that follows from it. Most clients bundle both so the numbers never fall out of sync — see our dedicated return-filing service.'],
        ['How is pricing determined?', 'By employee headcount and payroll complexity (multi-state, variable pay, contractors) — you get a fixed monthly quote after a short review of your current process.'],
    ],
    'cta' => ['heading' => 'Ready for Payroll That Just Works?', 'sub' => 'Accurate, on-time and confidential — every single month.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
