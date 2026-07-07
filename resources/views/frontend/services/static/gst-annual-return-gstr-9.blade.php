@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'GST Annual Return (GSTR-9)',
    'crumb' => 'GSTR-9 Annual Return',
    'category' => ['label' => 'GST Services', 'slug' => 'gst-services'],
    'eyebrow_icon' => 'bi-journal-check',
    'seo_title' => 'GSTR-9 Annual Return Filing',
    'seo_description' => 'Expert GSTR-9 annual return filing with full books-vs-returns reconciliation, discrepancy resolution and GSTR-9C certification support. File before 31 December, penalty-free.',
    'intro' => 'Close your GST year with confidence. We reconcile your books against every monthly return, resolve mismatches the right way, and file an accurate GSTR-9 — with 9C certification support where required.',
    'chips' => [
        ['bi-calendar-check-fill', 'Due 31 December'],
        ['bi-arrow-left-right', 'Full-Year Reconciliation'],
        ['bi-shield-fill-check', 'Notice-Proof Filing'],
    ],
    'illustration' => [
        ['bi-cloud-arrow-down', 'Year\'s Returns Extracted'],
        ['bi-arrow-left-right', 'Books vs Portal Reconciled'],
        ['bi-file-earmark-check', 'Discrepancies Resolved'],
        ['bi-award', 'GSTR-9 Filed Accurately!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is GSTR-9?', 'The annual GST return — a consolidated statement of the whole year\'s outward supplies, inward supplies, input credit and taxes paid, matched against everything you filed month by month.'],
        ['bi-people', 'Who must file it?', 'Regular GST taxpayers with annual turnover above ₹2 crore (optional below that). Businesses above ₹5 crore also need GSTR-9C, a self-certified reconciliation with audited financials.'],
        ['bi-graph-up-arrow', 'Why does accuracy matter?', 'GSTR-9 is your last chance to true-up the year — and the first place the department looks. Differences between books, GSTR-1, 3B and 2B invite notices; a reconciled filing prevents them.'],
    ],
    'benefits_title' => 'Why File GSTR-9 with Experts',
    'benefits' => [
        ['bi-shield-check', 'Avoid Notices', 'Clean reconciliation across books, GSTR-1, 3B and 2B is your best defence against scrutiny.'],
        ['bi-arrow-down-left-circle', 'ITC True-Up', 'We surface credit mismatches and excess claims before the department does.'],
        ['bi-file-earmark-check', 'Errors Fixed Properly', 'Reporting gaps are disclosed correctly and shortfalls paid via DRC-03, cutting future exposure.'],
        ['bi-alarm', 'No Late Fees', 'Filed before 31 December — late fees scale with turnover and add up quickly.'],
        ['bi-journal-check', 'Audit-Ready Trail', 'A documented year-end reconciliation your auditors and lenders can rely on.'],
        ['bi-patch-check', '9C Handled Too', 'Turnover above ₹5 crore? The reconciliation statement is prepared and certified alongside.'],
    ],
    'eligibility_title' => 'Who Must File?',
    'eligibility' => [
        ['bi-graph-up', 'Above ₹2 Crore — Mandatory', 'Regular taxpayers over ₹2 crore aggregate turnover must file GSTR-9.'],
        ['bi-hand-thumbs-up', 'Up to ₹2 Crore — Optional', 'Exempted by notification, but voluntary filing creates a clean year-end record.'],
        ['bi-file-earmark-ruled', 'Above ₹5 Crore — Add GSTR-9C', 'A self-certified reconciliation statement against audited financials is also required.'],
        ['bi-slash-circle', 'Not Required For', 'Composition dealers (GSTR-9A regime), ISDs, TDS/TCS deductors, casual and non-resident taxpayers.'],
    ],
    'callout' => 'GSTR-9 cannot be revised once filed — reconciliation before filing is everything.',
    'documents' => [
        ['bi-journal', 'Filed GSTR-1 & 3B', 'all periods of the financial year'],
        ['bi-book', 'Sales & Purchase Registers', 'complete books for the year'],
        ['bi-arrow-left-right', 'GSTR-2A / 2B Data', 'auto-drafted ITC statements'],
        ['bi-file-earmark-bar-graph', 'Financial Statements', 'P&L and balance sheet (for 9C)'],
        ['bi-arrow-down-left-circle', 'ITC Register', 'claimed, reversed and ineligible credit details'],
        ['bi-upc-scan', 'HSN Summary', 'HSN-wise outward (and inward) supplies'],
        ['bi-receipt', 'RCM Workings', 'reverse-charge payments and self-invoices'],
        ['bi-cash-coin', 'Challans & DRC-03', 'tax payments made outside returns, if any'],
    ],
    'process_note' => 'Start early — quality reconciliation takes time before the 31 December deadline',
    'process_title' => 'Annual Filing in 5 Simple Steps',
    'process' => [
        ['bi-cloud-arrow-down', 'Data Extraction', 'We pull the full year\'s returns, 2A/2B and ledgers from the portal and your books.'],
        ['bi-arrow-left-right', 'Reconciliation', 'Turnover, tax and ITC are matched line-by-line: books vs GSTR-1 vs 3B vs 2B.'],
        ['bi-search-heart', 'Discrepancy Resolution', 'Differences are explained, adjusted or paid via DRC-03 — documented properly.'],
        ['bi-file-earmark-check', 'Draft & Review', 'The table-wise GSTR-9 (and 9C where applicable) is shared for your approval.'],
        ['bi-patch-check', 'Filing & Report', 'Returns are filed and you receive a year-end reconciliation report for your records.'],
    ],
    'faqs' => [
        ['What is the due date for GSTR-9?', '31 December following the end of the financial year (e.g., FY 2024-25 is due by 31 December 2025), unless extended by notification.'],
        ['What is the late fee for GSTR-9?', 'Slab-based by turnover — from ₹50 per day (up to ₹5 crore) rising to ₹200 per day, each capped as a percentage of turnover. Timely filing avoids it entirely.'],
        ['What is the difference between GSTR-9 and GSTR-9C?', 'GSTR-9 is the annual return every eligible taxpayer files; GSTR-9C is an additional self-certified reconciliation between the annual return and audited financial statements, mandatory above ₹5 crore turnover.'],
        ['Can GSTR-9 be revised after filing?', 'No — there is no revision facility. That is why our process reconciles and resolves every difference before submission.'],
        ['Can I claim missed input tax credit in GSTR-9?', 'No. GSTR-9 only reports the year; missed ITC had to be claimed in GSTR-3B by the 30 November cut-off. We identify such items early in the year through our return-filing service.'],
        ['What if reconciliation reveals unpaid tax?', 'The shortfall is paid voluntarily through Form DRC-03 along with interest, and disclosed in the annual return — far cheaper than waiting for a demand notice.'],
        ['Is GSTR-9 required if my turnover is under ₹2 crore?', 'It is optional. Many businesses still file voluntarily for a clean compliance record, especially before funding or tenders.'],
        ['Do composition dealers file GSTR-9?', 'No — composition taxpayers have their own annual return (GSTR-4 regime). If you switched schemes mid-year, both may apply proportionately; we handle that split correctly.'],
    ],
    'cta' => ['heading' => 'Ready to Close Your GST Year Cleanly?', 'sub' => 'Reconciled, resolved and filed before the deadline — by specialists.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
