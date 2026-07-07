@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'PF & ESI Return Filing',
    'crumb' => 'PF & ESI Return Filing',
    'category' => ['label' => 'Payroll & HR Services', 'slug' => 'payroll-hr-services'],
    'eyebrow_icon' => 'bi-file-earmark-check',
    'seo_title' => 'PF & ESI Return Filing Services',
    'seo_description' => 'Monthly PF and ESI return filing — ECR generation, challan payment and half-yearly ESI returns handled by experts. Avoid 12% p.a. PF interest and ESI penal damages with on-time filing.',
    'intro' => 'Registration is only step one — monthly filing is where compliance actually happens. We generate your ECR, deposit contributions on time, and file every PF and ESI return so your establishment stays in good standing.',
    'chips' => [
        ['bi-calendar-check-fill', 'Filed Before the 15th'],
        ['bi-shield-fill-check', 'Zero Missed Deposits'],
        ['bi-tags-fill', 'Fixed Monthly Fee'],
    ],
    'illustration' => [
        ['bi-people', 'Monthly Wage Data Received'],
        ['bi-calculator', 'Contributions Computed'],
        ['bi-file-earmark-arrow-up', 'ECR & ESI Return Filed'],
        ['bi-award', 'Challans Paid, Fully Compliant!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is PF & ESI return filing?', 'The monthly reporting of employee-wise wages and contributions to EPFO (via the Electronic Challan-cum-Return, or ECR) and to ESIC — followed by depositing the employer and employee shares within the due date.'],
        ['bi-alarm', 'Why does timing matter so much?', 'Both schemes run on strict monthly cycles. A late PF deposit accrues interest and damages from day one; ESI non-filing similarly triggers interest and can jeopardise employee benefit claims.'],
        ['bi-graph-up-arrow', 'Why professional filing?', 'Every new joiner, exit, salary revision and LOP day changes the numbers. Getting wage data, UANs and ESI IPs correctly reflected each month is what keeps filings — and employee benefits — accurate.'],
    ],
    'benefits_title' => 'Why Timely PF & ESI Filing Matters',
    'benefits' => [
        ['bi-alarm', 'No Interest or Damages', 'On-time deposits avoid the 12% annual interest and damages levied on delayed PF contributions.'],
        ['bi-shield-check', 'Uninterrupted Employee Benefits', 'Consistent filing keeps employees\' PF and ESI eligibility active without gaps.'],
        ['bi-file-earmark-check', 'Inspection-Ready Records', 'Clean ECR and ESI filing history is exactly what EPFO/ESIC inspectors expect to see.'],
        ['bi-people', 'Employee Trust', 'Visible, correctly credited contributions build confidence in the organisation.'],
        ['bi-cash-coin', 'Avoid Prosecution Risk', 'Persistent default can escalate to prosecution under both Acts — timely filing removes that exposure.'],
        ['bi-graph-up', 'Smooth Employee Exits', 'Accurate contribution history means faster PF withdrawal and transfer processing for leaving employees.'],
    ],
    'eligibility_title' => 'Who Must File These Returns?',
    'eligibility' => [
        ['bi-building-check', 'Every PF-Registered Establishment', 'Monthly ECR filing is mandatory regardless of whether contributions changed that month.'],
        ['bi-shield-plus', 'Every ESI-Registered Establishment', 'Monthly contribution filing, with a half-yearly return summarising the period.'],
        ['bi-people', 'Even With Nil Contributions', 'A nil ECR or nil return is still required — silence is not accepted as compliance.'],
        ['bi-calendar-range', 'New Registrants From Month One', 'Filing obligations begin the very first month after the employer code is allotted.'],
    ],
    'callout' => 'PF contributions are due by the 15th of the following month; ESI contributions by the 15th as well — both need equal attention every cycle.',
    'documents' => [
        ['bi-people', 'Employee Wage Register', 'monthly gross wages for all employees'],
        ['bi-person-plus', 'New Joiners & Exits', 'UAN/ESI IP allotment and exit details'],
        ['bi-calendar-x', 'Attendance / LOP Data', 'loss-of-pay days affecting contributions'],
        ['bi-cash-stack', 'Salary Revisions', 'increments or structure changes during the month'],
        ['bi-bank', 'Bank Confirmation', 'for challan payment processing'],
        ['bi-file-earmark-text', 'Previous Month ECR', 'for continuity and reconciliation'],
        ['bi-person-vcard', 'UAN / ESI Numbers', 'for all covered employees'],
        ['bi-journal', 'Contribution History', 'for half-yearly ESI return preparation'],
    ],
    'process_note' => 'A fixed monthly rhythm, tracked against strict statutory due dates',
    'process_title' => 'Filing in 5 Simple Steps',
    'process' => [
        ['bi-chat-dots', 'One-Time Setup', 'Employer codes, employee UANs and ESI numbers are mapped into our system.'],
        ['bi-cloud-arrow-up', 'Monthly Wage Data', 'Payroll or attendance-linked wage data shared each cycle.'],
        ['bi-calculator', 'Contribution Computation', 'Employer and employee shares calculated per current statutory rates.'],
        ['bi-file-earmark-arrow-up', 'ECR / Return Filing', 'PF ECR and ESI monthly filing submitted on the respective portals.'],
        ['bi-patch-check', 'Challan Payment & Confirmation', 'Contributions deposited before the due date, receipts shared with you.'],
    ],
    'faqs' => [
        ['What is an ECR and how often is it filed?', 'The Electronic Challan-cum-Return is EPFO\'s monthly filing that reports wages and contributions employee-wise, due by the 15th of the following month along with the contribution deposit.'],
        ['What is the penalty for late PF deposit?', 'Interest at 12% per annum for the delay period, plus damages ranging from 5% to 25% per annum depending on the length of default — both calculated on the overdue amount.'],
        ['What is the penalty for late ESI filing?', 'Interest at 12% per annum on delayed contributions, plus damages that can range up to 25% per annum depending on the delay, along with possible prosecution for repeated default.'],
        ['Do we need to file if there were no new contributions that month?', 'Yes — a nil ECR or nil ESI return must still be filed. Non-filing, even with no activity, is treated as a compliance default.'],
        ['What is the ESI half-yearly return?', 'A consolidated return summarising contributions for April–September and October–March, filed in addition to the monthly contribution payments — we track and file both cycles.'],
        ['Can errors in a filed ECR be corrected?', 'Yes — supplementary ECRs can be filed for corrections such as missed employees or wage errors, though this should be minimised through careful monthly data checks, which is where our review step helps.'],
        ['What happens to an employee\'s benefits if filing is delayed?', 'Delayed contributions can affect the timing of PF interest credit and may complicate ESI benefit claims during the gap — timely filing keeps employee entitlements uninterrupted.'],
        ['Do you also handle the underlying PF/ESI registration?', 'Yes — if your establishment isn\'t yet registered, our PF & ESI Registration service sets up the employer codes that this filing service then maintains monthly.'],
    ],
    'cta' => ['heading' => 'Ready for Worry-Free PF & ESI Filing?', 'sub' => 'On-time deposits, accurate returns, zero penalty exposure.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
