@extends('frontend.layouts.app')

@php
$page = [
    'title' => 'CMA Data Preparation',
    'crumb' => 'CMA Data Preparation',
    'category' => ['label' => 'Loan & Finance Assistance', 'slug' => 'loan-finance-assistance'],
    'eyebrow_icon' => 'bi-clipboard-data',
    'seo_title' => 'CMA Data Preparation for Bank Loans',
    'seo_description' => 'Accurate CMA data preparation for term loans and working capital limits — ratio analysis, fund flow and projections in bank-standard format for faster sanction.',
    'intro' => 'The exact numbers your bank\'s credit team is trained to read. We prepare CMA data — past performance, current estimates and future projections — in the precise bank-standard format, with every ratio correctly computed.',
    'chips' => [
        ['bi-bank', 'Bank-Standard Format'],
        ['bi-calculator', 'Ratio Analysis Included'],
        ['bi-clock-history', '3–5 Working Days'],
    ],
    'illustration' => [
        ['bi-journal-check', 'Financial Data Collected'],
        ['bi-calculator', 'Ratios & Fund Flow Computed'],
        ['bi-clipboard-data', 'CMA Format Prepared'],
        ['bi-award', 'Bank-Ready Data Delivered!'],
    ],
    'overview' => [
        ['bi-question-circle', 'What is CMA data?', 'Credit Monitoring Arrangement data — a standardised eight-format financial statement (operating statement, balance sheet, fund flow, ratios) that Indian banks use uniformly to assess loan proposals, whatever the borrower\'s industry.'],
        ['bi-clipboard-data', 'Why a fixed format?', 'Standardisation lets credit officers compare any borrower against the same benchmarks — current ratio, DSCR, TOL/TNW — quickly and consistently, which is exactly why banks insist on it rather than accepting free-form financials.'],
        ['bi-graph-up-arrow', 'Why professional preparation?', 'Every figure must tie back to your actual books and reconcile across formats. A single inconsistency between the balance sheet and fund flow statement is enough to trigger a query that delays sanction by weeks.'],
    ],
    'benefits_title' => 'What Accurate CMA Data Delivers',
    'benefits' => [
        ['bi-bank', 'Faster Bank Processing', 'Correctly formatted, internally consistent data moves through credit assessment without delay.'],
        ['bi-calculator', 'Ratios That Hold Up', 'Current ratio, DSCR and TOL/TNW computed precisely as the bank\'s format expects.'],
        ['bi-arrow-left-right', 'Working Capital Justified', 'Fund flow and MPBF calculations support the exact limit you\'re requesting.'],
        ['bi-graph-up', 'Realistic Projections', 'Forward estimates grounded in your actual trends, not inflated wish-lists.'],
        ['bi-file-earmark-check', 'Reusable Across Lenders', 'One accurate CMA data set supports applications to multiple banks or a consortium.'],
        ['bi-shield-check', 'Fewer Post-Sanction Queries', 'Clean, reconciled data reduces follow-up questions during annual review.'],
    ],
    'eligibility_title' => 'Who Needs CMA Data?',
    'eligibility' => [
        ['bi-bank', 'Working Capital Applicants', 'Cash credit and overdraft proposals virtually always require CMA data.'],
        ['bi-building', 'Term Loan Borrowers', 'Machinery and project loans are assessed alongside a project report.'],
        ['bi-arrow-repeat', 'Limit Renewal / Enhancement', 'Annual review and enhancement requests need updated CMA data.'],
        ['bi-people', 'Consortium & Multi-Bank Finance', 'Each participating bank requires the same standardised format.'],
    ],
    'callout' => 'CMA data typically covers two years of actuals plus projections for the loan tenure — consistency across every year is what banks scrutinise most.',
    'documents' => [
        ['bi-journal', 'Audited / Provisional Financials', 'last 2 years of P&L and balance sheet'],
        ['bi-bank', 'Bank Statements', 'operating account statements for the review period'],
        ['bi-receipt', 'GST Returns', 'to substantiate reported turnover'],
        ['bi-box-seam', 'Stock & Debtor Statements', 'current inventory and receivables position'],
        ['bi-cash-stack', 'Existing Loan Details', 'sanctioned limits and repayment schedules'],
        ['bi-graph-up', 'Sales & Production Data', 'installed capacity and utilisation, if manufacturing'],
        ['bi-bullseye', 'Growth Assumptions', 'basis for the projected years\' figures'],
        ['bi-file-earmark-text', 'Existing Project Report', 'if prepared alongside a term loan application'],
    ],
    'process_note' => 'Typical timeline: 3–5 working days from complete financial data',
    'process_title' => 'CMA Preparation in 5 Simple Steps',
    'process' => [
        ['bi-chat-dots', 'Requirement Check', 'We confirm the loan type and the specific bank\'s CMA format needs.'],
        ['bi-folder-check', 'Data Collection', 'Historical financials, bank statements and operational data gathered.'],
        ['bi-calculator', 'Ratio & Fund Flow Analysis', 'All eight CMA formats computed with cross-checked consistency.'],
        ['bi-clipboard-data', 'Projections', 'Future years estimated on realistic, defensible growth assumptions.'],
        ['bi-patch-check', 'Finalisation', 'Complete CMA data delivered in submission-ready format.'],
    ],
    'faqs' => [
        ['What does CMA data actually contain?', 'Eight standard formats: particulars of existing/proposed limits, operating statement, analysis of balance sheet, comparative statement of current assets/liabilities, calculation of MPBF, fund flow statement, and ratio analysis.'],
        ['How many years does CMA data cover?', 'Typically two years of actuals, the current year\'s estimate, and two to three years of projections — spanning the tenure of the loan being assessed.'],
        ['What is MPBF?', 'Maximum Permissible Bank Finance — the formula-based ceiling on working capital finance a bank will extend, calculated from your current assets and current liabilities within the CMA format.'],
        ['Is CMA data the same as a project report?', 'No — CMA data is the standardised financial format; the project report is the narrative business case. Term loan applications typically need both, prepared consistently together — see our Project Report service.'],
        ['Can CMA data be prepared without audited financials?', 'Yes — provisional financials and management accounts can form the basis, clearly marked as such, though audited figures strengthen the credibility of the historical years.'],
        ['What happens if the numbers don\'t reconcile across formats?', 'The bank will query it and sanction stalls until resolved — which is exactly why careful cross-checking during preparation, not after submission, is the core of what we do.'],
        ['Do all banks use the same CMA format?', 'Most Indian banks follow the same standard eight-format structure, though minor variations exist — we adapt formatting to your specific lender\'s requirements.'],
        ['How often does CMA data need to be updated?', 'Typically annually for working capital limit renewals, and whenever you request an enhancement or apply for additional credit facilities.'],
    ],
    'cta' => ['heading' => 'Ready for Bank-Ready CMA Data?', 'sub' => 'Accurate, reconciled and formatted exactly as your lender expects.'],
];
@endphp

@section('content')
    @include('frontend.services.static._template')
@endsection
