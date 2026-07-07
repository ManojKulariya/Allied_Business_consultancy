@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'GST Return Filing',
    'crumb' => 'GST Return Filing',
    'category' => ['label' => 'GST Services', 'slug' => 'gst-services'],
    'eyebrow_icon' => 'bi-file-earmark-spreadsheet',
    'seo_title' => 'GST Return Filing Services',
    'seo_description' => 'Monthly and quarterly GST return filing by experts — GSTR-1, GSTR-3B, CMP-08 and more with 2B reconciliation, maximised ITC and zero missed deadlines. Fixed monthly fee.',
    'intro' => 'Never miss a GST deadline again. Our experts prepare, reconcile and file your returns every period — maximising your input credit and keeping your compliance rating spotless.',
    'chips' => [
        ['bi-calendar-check-fill', 'Zero Missed Deadlines'],
        ['bi-arrow-down-left-circle', 'ITC Maximised via 2B'],
        ['bi-tags-fill', 'Fixed Monthly Fee'],
    ],
    'illustration' => [
        ['bi-cloud-arrow-up', 'Sales & Purchase Data Received'],
        ['bi-arrow-left-right', 'Reconciled with GSTR-2B'],
        ['bi-file-earmark-arrow-up', 'GSTR-1 & 3B Filed'],
        ['bi-emoji-smile', 'Another Month, Fully Compliant!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is GST return filing?', 'Periodic statements of your sales, purchases, tax collected and tax paid, filed on the GST portal. Even a month with no transactions needs a nil return.'],
        ['bi-people', 'Who needs this service?', 'Every GST-registered business — traders, manufacturers, service providers, e-commerce sellers and composition dealers — regardless of size or turnover.'],
        ['bi-graph-up-arrow', 'Why professional filing?', 'Returns interlock: errors in GSTR-1 hit your customers\' credit, mismatches with 2B block yours. Professional reconciliation protects cash flow and prevents notices.'],
    ],
    'benefits_title' => 'Why Businesses Outsource GST Returns',
    'benefits' => [
        ['bi-alarm', 'On-Time, Every Time', 'A managed calendar means no late fees of ₹50 per day or 18% interest on unpaid tax.'],
        ['bi-arrow-down-left-circle', 'Maximum Input Credit', 'Line-by-line GSTR-2B matching recovers credits that unreconciled filings routinely miss.'],
        ['bi-shield-check', 'Notice Protection', 'Consistent, reconciled data across GSTR-1, 3B and books keeps you off the department\'s radar.'],
        ['bi-people', 'Customer Relationships', 'Your buyers see their credit on time because your GSTR-1 is accurate and punctual.'],
        ['bi-graph-up', 'Clean Compliance Rating', 'A strong filing track record helps with loans, tenders and vendor onboarding.'],
        ['bi-headset', 'Expert on Call', 'A dedicated GST expert answers day-to-day questions — rates, HSN codes, e-way bills.'],
    ],
    'eligibility_eyebrow' => 'Return Types',
    'eligibility_title' => 'Returns We File for You',
    'eligibility' => [
        ['bi-file-earmark-text', 'GSTR-1 — Outward Supplies', 'Invoice-wise sales details, filed monthly (or quarterly under QRMP) by the 11th/13th.'],
        ['bi-calculator', 'GSTR-3B — Summary & Payment', 'The monthly summary return where tax is actually paid, due by the 20th (staggered for QRMP).'],
        ['bi-percent', 'CMP-08 & GSTR-4', 'Quarterly payment and annual return for composition scheme dealers.'],
        ['bi-journal-check', 'GSTR-9 / 9C & Others', 'Annual returns, ITC-04, and e-commerce TCS returns where applicable.'],
    ],
    'callout' => 'Under QRMP, businesses up to ₹5 crore turnover can file quarterly while paying monthly — we set you up on the optimal scheme.',
    'documents' => [
        ['bi-receipt', 'Sales Invoices', 'B2B, B2C and export invoices for the period'],
        ['bi-cart', 'Purchase Invoices', 'inward supplies and expense bills with GST'],
        ['bi-file-earmark-minus', 'Credit / Debit Notes', 'issued or received during the period'],
        ['bi-truck', 'E-Way Bill Data', 'for reconciliation with reported supplies'],
        ['bi-cart-check', 'E-Commerce Reports', 'marketplace sales and TCS statements'],
        ['bi-bank', 'Bank Statement', 'to cross-verify collections and payments'],
        ['bi-arrow-left-right', 'GSTR-2B Access', 'portal access for auto-drafted ITC data'],
        ['bi-journal', 'Previous Returns', 'for carried-forward figures and corrections'],
    ],
    'process_note' => 'A fixed monthly rhythm — you send data, we handle everything else',
    'process_title' => 'Filing in 5 Simple Steps',
    'process' => [
        ['bi-chat-dots', 'One-Time Onboarding', 'We study your business, past returns and set your filing calendar.'],
        ['bi-cloud-arrow-up', 'Data Collection', 'Send invoices as Excel, Tally backup or scans — whatever suits you.'],
        ['bi-arrow-left-right', 'Reconciliation', 'Purchases are matched with GSTR-2B; gaps are chased before filing.'],
        ['bi-file-earmark-check', 'Preparation & Review', 'Draft returns and tax liability are shared for your quick approval.'],
        ['bi-patch-check', 'Filing & Reporting', 'Returns filed, challan paid, and a summary report lands in your inbox.'],
    ],
    'faqs' => [
        ['What are the main GST return due dates?', 'GSTR-1 by the 11th (monthly) or 13th (quarterly), GSTR-3B by the 20th (staggered 22nd/24th for QRMP states), CMP-08 by the 18th after each quarter. We track every date for you.'],
        ['Do I need to file returns if there were no sales?', 'Yes — nil returns are mandatory for every registered period. Missing them accrues late fees (₹20 per day for nil returns) and can eventually suspend your GSTIN.'],
        ['What are the penalties for late filing?', 'Late fee of ₹50 per day per return (₹20 for nil), plus 18% annual interest on unpaid tax. Persistent default can block e-way bills and lead to cancellation.'],
        ['What is the QRMP scheme?', 'Quarterly Return, Monthly Payment — businesses up to ₹5 crore file GSTR-1 and 3B quarterly while paying tax monthly by challan, cutting filings from 24 to 8 per year.'],
        ['Can a filed GST return be revised?', 'No — GST returns cannot be revised. Errors are corrected through amendments in subsequent periods, which is why our pre-filing review matters.'],
        ['What if my supplier hasn\'t filed their GSTR-1?', 'Their invoice won\'t appear in your GSTR-2B, and that credit becomes ineligible until they file. We flag such suppliers monthly so you can follow up before it costs you.'],
        ['Is there a deadline for claiming input tax credit?', 'Yes — ITC for a financial year must be claimed by 30 November of the following year (or the annual return date, if earlier). Our reconciliations ensure nothing lapses.'],
        ['Do you handle e-invoicing?', 'Yes. Businesses above the e-invoice threshold (currently ₹5 crore) must generate IRNs — we integrate e-invoice data directly into your returns.'],
    ],
    'cta' => ['heading' => 'Ready to Put GST Returns on Autopilot?', 'sub' => 'Fixed monthly fee. Zero missed deadlines. Maximum input credit.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
