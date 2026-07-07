@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Monthly Bookkeeping Services',
    'crumb' => 'Monthly Bookkeeping',
    'category' => ['label' => 'Accounting & Bookkeeping', 'slug' => 'accounting-bookkeeping'],
    'eyebrow_icon' => 'bi-journal-check',
    'seo_title' => 'Monthly Bookkeeping Services',
    'seo_description' => 'Outsourced monthly bookkeeping by accounting professionals — clean books in Tally/Zoho, bank reconciliations, GST-ready ledgers and monthly MIS reports at a fixed fee.',
    'intro' => 'Books that are always current, reconciled and GST-ready. Our accountants record, classify and reconcile every transaction each month — and hand you an MIS report that actually tells you how the business is doing.',
    'chips' => [
        ['bi-calendar-check-fill', 'Closed Every Month'],
        ['bi-file-earmark-bar-graph', 'MIS Report Included'],
        ['bi-tags-fill', 'Fixed Monthly Fee'],
    ],
    'illustration' => [
        ['bi-cloud-arrow-up', 'Invoices & Statements Received'],
        ['bi-journal-text', 'Transactions Recorded & Classified'],
        ['bi-arrow-left-right', 'Bank & Ledgers Reconciled'],
        ['bi-file-earmark-bar-graph', 'Monthly MIS Delivered!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is monthly bookkeeping?', 'The disciplined recording of every sale, purchase, expense and payment into proper books of account — closed, reconciled and reviewed every single month rather than rescued once a year.'],
        ['bi-people', 'Who needs it?', 'Every business that files GST or income tax, wants credit from banks, or simply wants to know its real profit — from solo founders and startups to established SMEs without a full-time accountant.'],
        ['bi-graph-up-arrow', 'Why monthly, not yearly?', 'Year-end bookkeeping is archaeology: missing bills, unmatched payments and lost input credit. Monthly books catch errors while they\'re fixable, keep returns accurate and give you numbers you can act on.'],
    ],
    'benefits_title' => 'What Disciplined Books Do for Your Business',
    'benefits' => [
        ['bi-graph-up', 'Know Your Real Numbers', 'Profitability, receivables and cash position visible every month — not discovered in April.'],
        ['bi-receipt', 'GST & TDS Ready', 'Returns flow straight from reconciled ledgers — no scramble, no mismatch notices.'],
        ['bi-arrow-down-left-circle', 'No Lost Input Credit', 'Purchase entries matched to GSTR-2B monthly, so eligible ITC never lapses.'],
        ['bi-bank', 'Bank-Ready Financials', 'Clean books mean faster loan processing, better limits and smoother due diligence.'],
        ['bi-cash-coin', 'Cheaper Than Hiring', 'A professional team at a fraction of a full-time accountant\'s cost — with no attrition risk.'],
        ['bi-shield-check', 'Audit-Proof Records', 'Vouchers, ledgers and reconciliations organised the way auditors and officers expect.'],
    ],
    'eligibility_title' => 'Who Needs Monthly Bookkeeping?',
    'eligibility' => [
        ['bi-rocket-takeoff', 'Startups & New Businesses', 'Build investor-grade financial hygiene from day one, without hiring finance staff.'],
        ['bi-shop', 'Growing SMEs', 'Transaction volumes have outgrown spreadsheets and part-time munim-style accounting.'],
        ['bi-cart-check', 'E-Commerce Sellers', 'Marketplace settlements, commissions, returns and TCS need specialised reconciliation.'],
        ['bi-people', 'Professionals & Agencies', 'Doctors, consultants and firms that bill well but never see where the money goes.'],
    ],
    'callout' => 'Behind on your books? We also do catch-up bookkeeping — months or years — before the monthly rhythm starts.',
    'documents' => [
        ['bi-receipt', 'Sales Invoices', 'or access to your billing software'],
        ['bi-cart', 'Purchase & Expense Bills', 'photos, PDFs or courier — any format'],
        ['bi-bank', 'Bank Statements', 'all business accounts, monthly'],
        ['bi-credit-card', 'Card & Wallet Statements', 'business credit cards and payment gateways'],
        ['bi-cash-stack', 'Cash Expense Register', 'petty cash and reimbursements'],
        ['bi-people', 'Payroll Data', 'salaries, advances and statutory deductions'],
        ['bi-cart-check', 'Marketplace Reports', 'settlement statements, if you sell online'],
        ['bi-journal', 'Opening Balances', 'last year\'s books or trial balance'],
    ],
    'process_note' => 'A fixed monthly rhythm — your job is sending documents; everything else is ours',
    'process_title' => 'Your Monthly Cycle in 5 Steps',
    'process' => [
        ['bi-chat-dots', 'One-Time Setup', 'Chart of accounts, software (Tally/Zoho/QuickBooks) and opening balances configured.'],
        ['bi-cloud-arrow-up', 'Document Handover', 'Share invoices and statements by WhatsApp, email or drive — your choice.'],
        ['bi-journal-text', 'Recording & Classification', 'Every transaction entered with correct heads, GST tags and cost centres.'],
        ['bi-arrow-left-right', 'Reconciliation', 'Bank, cash, vendor and GSTR-2B reconciliations close the month tight.'],
        ['bi-file-earmark-bar-graph', 'MIS & Review Call', 'P&L, receivables and cash summary delivered — with a short review call.'],
    ],
    'faqs' => [
        ['Which accounting software do you work on?', 'Tally Prime, Zoho Books, QuickBooks and Busy are our daily drivers; we adapt to most cloud platforms. If you have no software yet, we recommend and set up the best fit for your business.'],
        ['How do I send you my documents?', 'However suits you — a shared drive, email, WhatsApp scans, or direct access to your billing portal and bank statements. We build the routine around your workflow.'],
        ['Do the books stay my property?', 'Completely. The data lives in your software licence or is handed over in full at any time. You are never locked in.'],
        ['My books are 8 months behind. Can you fix that?', 'Yes — catch-up bookkeeping is a standard first project. We reconstruct the backlog, reconcile it, then move you onto the monthly cycle.'],
        ['What is in the monthly MIS report?', 'Profit & loss for the month and year-to-date, receivables and payables ageing, cash and bank position, GST summary, and any red flags we spotted — in plain language.'],
        ['Will this cover my GST and TDS filings too?', 'Bookkeeping produces filing-ready data; the returns themselves are a small add-on most clients bundle. One team, one handover, no gaps.'],
        ['How is pricing decided?', 'By monthly transaction volume and complexity (multi-branch, inventory, marketplaces), not turnover. You get a fixed quote after a free review of a sample month.'],
        ['Is my financial data safe with you?', 'Yes — NDAs by default, access-controlled systems, and your data is never shared. We are happy to sign your own confidentiality format.'],
    ],
    'cta' => ['heading' => 'Ready for Books That Run Themselves?', 'sub' => 'Fixed fee, monthly close, and numbers you can actually use.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
