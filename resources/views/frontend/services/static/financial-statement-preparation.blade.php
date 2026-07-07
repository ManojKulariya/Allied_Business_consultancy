@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'Financial Statement Preparation',
    'crumb' => 'Financial Statements',
    'category' => ['label' => 'Accounting & Bookkeeping', 'slug' => 'accounting-bookkeeping'],
    'eyebrow_icon' => 'bi-file-earmark-bar-graph',
    'seo_title' => 'Financial Statement Preparation',
    'seo_description' => 'CA-prepared financial statements — P&L, balance sheet, cash flow and notes in Schedule III formats — for audits, bank loans, investors and tax filings.',
    'intro' => 'Financial statements that banks, auditors and investors take seriously. We turn your books into properly classified, Schedule III-compliant statements — P&L, balance sheet, cash flow and notes — ready for whatever comes next.',
    'chips' => [
        ['bi-patch-check-fill', 'Schedule III Compliant'],
        ['bi-bank', 'Bank & Investor Ready'],
        ['bi-mortarboard', 'CA-Reviewed'],
    ],
    'illustration' => [
        ['bi-journal-check', 'Trial Balance Finalised'],
        ['bi-sliders', 'Adjustments & Provisions Made'],
        ['bi-file-earmark-bar-graph', 'Statements Drafted'],
        ['bi-award', 'Financials Signed Off!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What are financial statements?', 'The formal summary of your business\'s performance and position — profit & loss, balance sheet, cash flow and explanatory notes — prepared from your books under recognised accounting standards.'],
        ['bi-people', 'Who needs them prepared?', 'Companies and LLPs for statutory filings and audits, businesses seeking loans or investment, firms filing tax returns with books of account, and owners who want a true year-end picture.'],
        ['bi-graph-up-arrow', 'Why professional preparation?', 'Raw ledgers aren\'t statements. Classification, provisions, depreciation, Schedule III formats and note disclosures decide whether your financials pass an audit or a lender\'s scrutiny in one round.'],
    ],
    'benefits_title' => 'Why Well-Prepared Financials Matter',
    'benefits' => [
        ['bi-bank', 'Faster Credit Decisions', 'Lenders read clean Schedule III financials quickly — sloppy ones invite questions and delays.'],
        ['bi-search-heart', 'Smooth Audits', 'Auditor-ready statements with schedules and reconciliations cut audit time and fees.'],
        ['bi-cash-coin', 'Accurate Tax Positions', 'Correct provisions, depreciation and disclosures mean returns that match the books.'],
        ['bi-graph-up', 'Investor Confidence', 'Due diligence starts with your financials — professional presentation sets the tone.'],
        ['bi-clipboard-data', 'True Business Picture', 'Owners finally see real margins, asset positions and cash generation, not just bank balance.'],
        ['bi-shield-check', 'Statutory Compliance', 'Companies Act formats and AS/Ind AS requirements handled correctly, every year.'],
    ],
    'eligibility_eyebrow' => 'What We Prepare',
    'eligibility_title' => 'Types of Financial Statements',
    'eligibility' => [
        ['bi-graph-up', 'Profit & Loss Statement', 'Revenue, costs and margins for the period — classified per Schedule III.'],
        ['bi-columns-gap', 'Balance Sheet', 'Assets, liabilities and equity — grouped, aged and properly disclosed.'],
        ['bi-arrow-left-right', 'Cash Flow Statement', 'Operating, investing and financing flows — mandatory beyond thresholds, invaluable always.'],
        ['bi-journal-text', 'Notes & Schedules', 'Accounting policies, fixed asset registers, loan schedules and every supporting disclosure.'],
    ],
    'callout' => 'Provisional and projected financials for bank proposals and investor decks are part of the same service.',
    'documents' => [
        ['bi-journal', 'Books of Account', 'Tally/software backup or trial balance'],
        ['bi-bank', 'Bank Statements', 'year-end statements for all accounts'],
        ['bi-box-seam', 'Inventory Details', 'closing stock with valuation basis'],
        ['bi-building', 'Fixed Asset Register', 'additions, disposals and existing schedule'],
        ['bi-cash-stack', 'Loan Statements', 'sanction letters and repayment schedules'],
        ['bi-people', 'Receivable / Payable Lists', 'party-wise balances with ageing'],
        ['bi-receipt', 'Tax Payment Proofs', 'GST, TDS and advance tax challans'],
        ['bi-file-earmark-text', 'Prior-Year Financials', 'last audited/filed statements'],
    ],
    'process_note' => 'Typical turnaround: 5–10 working days from complete books',
    'process_title' => 'Preparation in 5 Simple Steps',
    'process' => [
        ['bi-chat-dots', 'Scope Call', 'Purpose (audit, bank, investor, tax) decides format and depth.'],
        ['bi-journal-check', 'Books Review', 'Trial balance is scrutinised; gaps and misclassifications are listed.'],
        ['bi-sliders', 'Adjustments', 'Depreciation, provisions, accruals and reconciliations are finalised.'],
        ['bi-file-earmark-bar-graph', 'Draft Statements', 'Schedule III statements with notes are drafted and reviewed with you.'],
        ['bi-patch-check', 'Finalisation', 'Statements signed off and handed over — audit-linked support included.'],
    ],
    'faqs' => [
        ['My books are messy. Can you still prepare statements?', 'Yes — a clean-up pass is built into our review step. For heavier backlogs we combine this with catch-up bookkeeping so the statements stand on solid entries.'],
        ['What is Schedule III and does it apply to me?', 'It is the Companies Act format for corporate financial statements. Companies must follow it; for LLPs, firms and proprietorships we use equivalent professional formats banks and tax officers expect.'],
        ['Is a cash flow statement mandatory?', 'For most companies, yes (small-company exemptions exist). Even where optional, lenders and investors read it first — we include it in every full set.'],
        ['Can you prepare projected or provisional financials?', 'Yes — provisional statements for the current period and 3–5 year projections/CMA data for loan proposals and investor decks are a routine part of this service.'],
        ['Do you also handle the audit?', 'We prepare statements and manage the audit process alongside your statutory auditor, answering queries and providing schedules. Where an independent auditor is needed, we coordinate the engagement.'],
        ['Which accounting standards do you apply?', 'Accounting Standards (AS) for most SMEs and Ind AS where applicable by size/listing. Policies are documented in the notes so positions are defensible.'],
        ['How long does preparation take?', 'With complete books, 5–10 working days for a full set including notes. Add time for clean-up if the ledgers need work — we quote both upfront.'],
        ['What formats do I receive?', 'Signed PDFs plus editable Excel/Word working files, the fixed asset register, and every supporting schedule — yours to keep and reuse.'],
    ],
    'cta' => ['heading' => 'Need Financials That Open Doors?', 'sub' => 'Audit-ready, bank-ready, investor-ready — prepared by professionals.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
