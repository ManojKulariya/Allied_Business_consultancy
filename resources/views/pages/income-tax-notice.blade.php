@extends('layouts.app')

@section('content')
<div class="container">
    <section class="header-section text-center py-5">
        <h1>Income Tax Notice: How to Check, Authenticate, & Respond to ITR Notices?</h1>
        <p>Got an income tax notice? Don’t stress—Allied Business Consultancy is here to help.</p>
        <p>We simplify the process of handling income tax notices so you can stay worry-free.</p>
        <a href="/contact" class="btn btn-primary">Submit</a>
    </section>

    <section class="itr-reasons py-5">
        <h2>Income Tax Notice: Are you filing an IT return for these reasons? If not, you could get notice soon</h2>
        <p>Before worrying about a notice, check if filing is mandatory for you. File an ITR if:</p>
        <ul class="list-unstyled">
            <li>Your income exceeds the basic exemption limit.</li>
            <li>You deposited over Rs. 1 crore in a current account.</li>
            <li>You deposited over Rs. 50 lakh in a savings account.</li>
            <li>TDS/TCS exceeds Rs. 25,000.</li>
            <li>Business turnover is above Rs. 60 lakh.</li>
            <li>Professional income is over Rs. 10 lakh.</li>
            <li>You spent over Rs. 1 lakh on electricity.</li>
            <li>You spent more than Rs. 2 lakh on foreign travel.</li>
        </ul>
        <p>Stay compliant and avoid penalties by filing your Income Tax Return (ITR) on time.</p>
    </section>

    <section class="common-reasons py-5">
        <h2>Common Reasons for Receiving an Income Tax Notice</h2>
        <p>The Income Tax Department may issue a notice for several reasons. Understanding these can help you stay proactive:</p>
        <div class="row">
            <div class="col-md-4">
                <h4>Filing-Related Issues</h4>
                <ul>
                    <li>Non-filing of ITR</li>
                    <li>Use of incorrect ITR form</li>
                    <li>Non-payment of self-assessment tax</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>Mismatches & Errors</h4>
                <ul>
                    <li>Errors in ITR</li>
                    <li>TDS/TCS mismatch</li>
                    <li>Mismatch with AIS/TIS/26AS</li>
                    <li>Discrepancies from previous years</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>Income & Investment Reporting Issues</h4>
                <ul>
                    <li>Undisclosed salary, rent, business or freelance income</li>
                    <li>Unreported capital gains/losses</li>
                    <li>Investments made in spouse/family name not disclosed</li>
                    <li>Foreign income or foreign assets not reported</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h4>Transaction-Based Red Flags</h4>
                <ul>
                    <li>High-value transactions</li>
                    <li>Large refund claims</li>
                    <li>Property sale/purchase not reported</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h4>Scrutiny & Reassessment</h4>
                <ul>
                    <li>Potential audit under Section 143(1)</li>
                    <li>Reassessment due to underreporting</li>
                    <li>AI-based risk profiling or officer observations</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="notice-types py-5">
        <h2>Income Tax Notices and Their Types</h2>
        <p>Getting a notice from the Income Tax Department can be stressful—but it's more common than you think. Whether you're salaried, self-employed, or a business owner, understanding the ITR Notices types can help you respond confidently and avoid panic.</p>
        <p>Here’s a breakdown of various notices you may receive:</p>

        <h3>Basic Notices</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Notice under Section 131 – For Inquiry or Investigation</h5>
                        <p class="card-text">Issued when the Assessing Officer believes a taxpayer may be concealing income. You may be summoned to appear in person or submit records to support your declared income.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Notice under Section 139(9) – Defective Return</h5>
                        <p class="card-text">If your filed ITR is incomplete or contains errors (like missing details or incorrect form selection), this notice gives you a chance to correct and resubmit it.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Notice under Section 142(1) – Preliminary Information Request</h5>
                        <p class="card-text">Sent when the tax department needs further documents or clarifications before initiating a full assessment. Usually follows inconsistencies found in your ITR or AIS/TIS.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Intimation under Section 143(1)</h5>
                        <p class="card-text">Auto-generated intimation after return processing. It reflects minor mismatches (like tax computation or TDS variance) and may result in refund, additional tax payable, or no change.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Notice under Section 143(2) – Scrutiny Assessment under Section 143(3)</h5>
                        <p class="card-text">If your return is picked for detailed examination, this notice mandates you to provide explanations and documents. Issued within six months from the end of the relevant assessment year.</p>
                    </div>
                </div>
            </div>
        </div>

        <h3>Get Expert Guidance</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Notice under Section 148 – Income Escaped Assessment</h5>
                        <p class="card-text">This notice is issued when the tax department believes certain income was not reported. It allows reopening past assessments to re-calculate tax liability.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Notice under Section 156 – Demand Notice</h5>
                        <p class="card-text">A formal demand for additional tax, interest, or penalties identified after assessment. It mentions the exact amount and due date for payment.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Notice under Section 245 – Adjustment of Refunds</h5>
                        <p class="card-text">Sent when your refund is being adjusted against previous years’ outstanding tax demands. Responding quickly can help avoid automatic adjustment.</p>
                    </div>
                </div>
            </div>
        </div>

        <h3>Transaction & Compliance-Based Notices</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">High Value Transaction (HVT) Notice</h5>
                        <p class="card-text">Triggered when you conduct large transactions like heavy cash deposits, purchase/sale of property, or high-value mutual fund investments that don’t match your declared income.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Risk Management Notice</h5>
                        <p class="card-text">Issued under the Income Tax Department’s risk management system to verify inconsistencies in deductions, refund claims, or omissions in the return.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form 67 Defect Notice</h5>
                        <p class="card-text">If you have claimed foreign tax credit but submitted Form 67 with errors or incomplete information, you may get this notice to rectify and refile.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">26AS-AIS/TIS Mismatch Notice</h5>
                        <p class="card-text">This notice flags discrepancies between your return and the Annual Information Statement (AIS), Taxpayer Information Summary (TIS), or Form 26AS, usually concerning income, TDS, or investments.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Relief under Sections 90/90A/91</h5>
                        <p class="card-text">If you claim relief from double taxation under any of these provisions and the details appear incomplete or incorrect, the department may issue a clarification notice.</p>
                    </div>
                </div>
            </div>
        </div>

        <h3>Information & Scrutiny Notices</h3>
        <p>Information and scrutiny notices arise from previous filings and require verification of such claims in tax returns. These include:</p>
        <ul>
            <li><strong>Information Requests:</strong> Sent when the department needs clarification on certain disclosures or transactions reported in earlier returns. You will be asked to submit additional details or documents.</li>
            <li><strong>Limited Scrutiny:</strong> Applies when specific aspects of your return (like capital gains, rental income, or deductions) are flagged for verification. Only the highlighted items need supporting evidence.</li>
            <li><strong>Full Scrutiny:</strong> A comprehensive review of your return. All sources of income, deductions, and financial transactions are examined. Complete documentation is usually required.</li>
        </ul>

        <h3>Appeal & Ex-Parte Order Notices</h3>
        <p>If you disagree with a tax order or demand raised by the Income Tax Department, you have the right to file an appeal under the Income Tax Act. Understanding the income tax appeal process and notice types helps you act quickly and protect your rights.</p>
        <p>Common Reasons to File an Income Tax Appeal:</p>
        <ul>
            <li>Ex-parte assessment orders passed without giving you a chance to respond</li>
            <li>Incorrect tax demand or penalty imposed by the assessing officer</li>
            <li>Errors in assessment not corrected through rectification under Section 154</li>
            <li>Legitimate deductions, exemptions, or claims disallowed by the assessing officer</li>
        </ul>
        <p>Where to File Your Appeal:</p>
        <p>The first level of appeal begins with the Commissioner of Income Tax (Appeals) [CIT(A)]. If the decision remains unfavorable, you can escalate the matter to:</p>
        <ul>
            <li>Income Tax Appellate Tribunal (ITAT)</li>
            <li>High Court</li>
            <li>Supreme Court (for rare or precedent-setting cases)</li>
        </ul>
        <p>Notices include:</p>
        <ul>
            <li><strong>Appellate Notices:</strong> Issued when an appeal has been filed. It contains hearing dates or additional document requirements.</li>
            <li><strong>Ex-Parte Orders:</strong> If you fail to respond to a notice or attend proceedings, an order may be passed without your input.</li>
            <li><strong>Seeking Rectification:</strong> If a decision contains an apparent mistake, you may receive or initiate a rectification request to correct it under Section 154.</li>
        </ul>
        <p>Tip: Always check the “e-Proceedings” tab on your income tax portal for updates. Ignoring notices can lead to unfavorable orders.</p>
    </section>

    <section class="pricing py-5">
        <h2>Pricing</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Appeal Cases</h5>
                        <p class="card-text">Starting From ₹25,399 (Exclusive of Taxes)</p>
                        <p>Suited for 1st & 2nd Appeal, Appeals that can be conducted through online tax portals, without requiring a physical visit, ITAT Appeals will be charged separately.</p>
                        <a href="/contact" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Rectification / Revised / Defective</h5>
                        <p class="card-text">₹2,499 (Exclusive of Taxes)</p>
                        <p>Suited for rectifying defects, revisions, adjustments, HVT Notice, adjustments, Form 67 defects, 26AS-AIS/TIS Mismatch etc.</p>
                        <a href="/contact" class="btn btn-primary">Get Started Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Routine Notice</h5>
                        <p class="card-text">₹899 (Exclusive of Taxes)</p>
                        <p>Suited for providing a simple response and cross checking your filed ITR, Risk Management Notices, Refund Re-issue, Simple Response to outstanding demands, E-Campaign Response etc.</p>
                        <a href="/contact" class="btn btn-primary">Get Started Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Scrutiny Cases</h5>
                        <p class="card-text">Starting From ₹21,199 (Exclusive of Taxes)</p>
                        <p>Suited for comprehensive services for scrutiny cases, including document review, preparation of responses.</p>
                        <a href="/contact" class="btn btn-primary">Get Started Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Calling For Information/Seeking Clarification</h5>
                        <p class="card-text">₹6,399 (Exclusive of Taxes)</p>
                        <p>Suited for assistance in seeking clarification or providing additional details in response to Financial Transactions, Deductions, F&O Trades, Unreported Income, Misreported/Underreported Income.</p>
                        <a href="/contact" class="btn btn-primary">Get Started Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Scrutiny Cases (ITR Filed By Allied Business Consultancy)</h5>
                        <p class="card-text">Starting From ₹12,699 (Exclusive of Taxes)</p>
                        <p>Suited for special rate for scrutiny cases where Allied Business Consultancy has already filed the Income Tax Return (ITR) on behalf of the client for that particular A.Y. only.</p>
                        <a href="/contact" class="btn btn-primary">Get Started Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials py-5">
        <h2>Hear from our clients</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">"I am happy when I share this because when I downloaded the app I did not think that it would be so fast and transparent. I contacted them in the afternoon and in the evening the process was complete. Share everything in detail and clarify doubt especially thank you to udit jain who was the tax expert to guide me. fully satisfied THANK YOU"</p>
                        <p class="card-text"><small class="text-muted">Silpa Aswin, Local Guide</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">"Tax buddy is one of the best and most affordable options to file returns. The staff is highly professional and ensures a hassle-free experience. I highly recommend their service. Great job, guys! A special thanks to Mansi Badrike for his awesome assistance today. Keep up the excellent work!"</p>
                        <p class="card-text"><small class="text-muted">Abhishek Khullodkar, Local Guide</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">"Siddharth is very professional and diligent while understanding the information and concerns as well as possess knowledge to guide. My experience 1st time with Taxbuddy is so great because of professional like Siddharth. Happy to refer and continue the service in future as well."</p>
                        <p class="card-text"><small class="text-muted">Pushpalata Sahoo</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">"Great experience. Swift response from the auditors even when having complex taxation issues like foreign tax credit. Special thanks to Suraj, Dipali and Bhavika."</p>
                        <p class="card-text"><small class="text-muted">Balaaji Dhananjaya</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">"Very nice and excellent service by taxbuddy experts. They are having very good knowledge to resolve the issues related to incometax.i recommended many of my coleague s of our Dept. Hats off to taxbuddy. In my notice case for filing rectification for the assesment year 2020-2021 Dipali waghmode madam responded excellently to my phone call as and when got message from ITR CPC section till today responding excellently. I am greatful to her. The fees offered by taxbuddy is also meger. Pl keep it up."</p>
                        <p class="card-text"><small class="text-muted">Kolumagatte pallagatte</small></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="authenticate py-5">
        <h2>How to Authenticate Income Tax Notice or Orders Issued by ITD?</h2>
        <p>Before responding to a tax notice, it is essential to verify its authenticity. Follow these steps to authenticate an income tax notice online:</p>
        <h3>Step 1: Access the IT Portal</h3>
        <p>• Visit the Income Tax e-Filing Portal</p>
        <p>• Click on “Authenticate Notice/Order Issued by ITD” under the “Quick Links” section.</p>
        <h3>Step 2: Choose an Authentication Method</h3>
        <p>You can authenticate your income tax notice using either of these methods:</p>
        <p>A. PAN, Assessment Year, Document Type, Issue Date, and Mobile Number</p>
        <p>• Enter the required details, including your PAN and assessment year.</p>
        <p>• Enter the OTP received on your registered mobile number.</p>
        <p>• If the notice is valid, the DIN (Document Identification Number) and issue date will be displayed.</p>
        <p>• If no notice is found, a message stating “No record found for the given criteria” will appear.</p>
        <p>B. Authenticate Using DIN and Mobile Number</p>
        <p>• Enter the DIN (Document Identification Number) and registered mobile number.</p>
        <p>• Receive and enter the OTP for verification.</p>
        <p>• If the notice is valid, a confirmation message will appear.</p>
        <h3>Step 3: Validate and Respond</h3>
        <p>• If the notice is genuine, download and review it carefully.</p>
        <p>• If it seems fraudulent, do not respond and report it immediately.</p>
        <p>Need help interpreting or replying to your notice? Let Allied Business Consultancy's experts handle it with ease!</p>
    </section>

    <section class="handle py-5">
        <h2>How to Handle an Income Tax Notice: Steps to Take After Receiving an Income Tax Department Notice</h2>
        <p>Received an Income Tax Notice from the IT Department? Don’t panic — most notices are for verification or clarification, not penalties. Follow these smart steps to handle it efficiently:</p>
        <ul>
            <li>Read the Notice Carefully – Understand the section mentioned (like 143(1), 139(9), or 148A), the reason for the notice, and the specific action required.</li>
            <li>Verify Your Details – Ensure your PAN, name, assessment year, and address are correct to avoid filing a wrong response.</li>
            <li>Identify the Discrepancy – Cross-check your ITR, AIS, Form 26AS, and Form 16 to find any mismatch in income, TDS, or deductions.</li>
            <li>Respond Within the Deadline – Every income tax notice has a due date for reply. File your response on time to avoid penalties, interest, or further action.</li>
            <li>Get Expert Assistance – If the notice involves complex issues, seek help from tax professionals for accurate drafting and submission.</li>
        </ul>
        <p>💡 Tip: Simplify your response with Allied Business Consultancy’s Notice Management Service — experts review your notice, verify your data, and help you respond accurately to avoid penalties.</p>
    </section>

    <section class="documents py-5">
        <h2>Documents Required to Reply to an Income Tax Notice</h2>
        <p>The documents required to respond to an income tax notice depend on the type of notice. Generally, you will need the following documents:</p>
        <ol>
            <li>Copy of the Income Tax Notice</li>
            <li>TDS Certificates (Form 16 - Part A)</li>
            <li>Income Proof (Salary Slips, Form 16 - Part B, etc.)</li>
            <li>Investment Proof (Insurance, ELSS, PPF, etc.)</li>
        </ol>
    </section>

    <section class="time-limits py-5">
        <h2>Time Limit for Issuing Income Tax Notices</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Time Limit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>143(1)</td>
                        <td>Summary Assessment – auto-processing of returns</td>
                        <td>Within 9 months from the end of the financial year in which the return was filed</td>
                    </tr>
                    <tr>
                        <td>143(3)</td>
                        <td>Detailed Scrutiny Assessment – in-depth verification of income and claims</td>
                        <td>Notice must be issued within 3 months from the end of the financial year in which the return was furnished. Must be completed within 12 months from the end of the relevant assessment year</td>
                    </tr>
                    <tr>
                        <td>144</td>
                        <td>Best Judgment Assessment – done when no return or incomplete return is filed</td>
                        <td>To be completed within 12 months from the end of the assessment year</td>
                    </tr>
                    <tr>
                        <td>147 / 148 / 148A</td>
                        <td>Re-assessment or Income Escaping Assessment</td>
                        <td>Till 31 August 2024: Notice may be issued within 3 or 10 years from the end of the relevant AY. From 1 September 2024: • Section 148 notice – within 3 years & 3 months or 5 years & 3 months • Section 148A notice – within 3 years or 5 years from the end of the relevant AY. Must be completed within 12 months from the end of the financial year in which the notice for re-assessment was served</td>
                    </tr>
                    <tr>
                        <td>Fresh Assessment</td>
                        <td>Assessment arising out of a finding or direction from higher authority</td>
                        <td>Must be completed within 12 months from the end of the month in which the order is received or passed</td>
                    </tr>
                    <tr>
                        <td>Appeal Order Implementation</td>
                        <td>When giving effect to an appellate or revision order</td>
                        <td>Must be completed within 3 months from the end of the month in which the order is received or passed</td>
                    </tr>
                    <tr>
                        <td>Assessment of Partners (on firm’s completion)</td>
                        <td>When the firm’s assessment affects the partners</td>
                        <td>To be completed within 12 months from the end of the month in which the firm’s assessment order is passed</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="common-mistakes py-5">
        <h2>Common Mistakes Leading to Income Tax Notices</h2>
        <ul>
            <li>Incorrect Personal Information: Errors in PAN, name, or address can lead to discrepancies.</li>
            <li>Mismatched Income Reporting: Differences between reported income and Form 26AS can trigger notices.</li>
            <li>Improper Claim of Deductions: Claiming ineligible deductions or not providing proper documentation.</li>
            <li>Delayed Tax Payments: Late payment of advance tax or self-assessment tax can attract penalties.</li>
            <li>Non-Reporting of Exempt Income: Even if income is exempt, non-reporting can raise red flags.</li>
        </ul>
    </section>

    <section class="prevent py-5">
        <h2>Steps to Prevent Receiving Income Tax Notices</h2>
        <ul>
            <li>Timely and Accurate Filing – Always file your ITR before the due date with correct figures.</li>
            <li>Match with Form 26AS/AIS – Ensure consistency with tax statements available on the portal.</li>
            <li>Organize Financial Documents – Maintain all proof of investments, income, and deductions.</li>
            <li>Respond Promptly to Department Notices – Address preliminary notices or alerts immediately.</li>
            <li>Consult Experts When Needed – Complex matters require professional insight for effective handling.</li>
        </ul>
        <p>Read TaxBuddy vs ClearTax to discover how Allied Business Consultancy provides expert-driven, personalized support for handling Income Tax Notices efficiently and accurately.</p>
    </section>

    <section class="faqs py-5">
        <h2>Frequently Asked Questions</h2>
        <div class="accordion" id="faqsAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        What is an Income Tax Notice?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#faqsAccordion">
                    <div class="accordion-body">
                        An Income Tax Notice is an official communication from the Income Tax Department of India sent to a taxpayer for reasons such as discrepancies in the filed ITR, mismatched information in Form 26AS, AIS, or TIS, or requests for supporting documents. Each notice is issued under a specific section (for example 143(1), 139(9), 148A) that defines the reason and the taxpayer’s required action. Receiving one doesn’t always mean penalty—it often just needs a prompt, correct reply.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        How do I check my tax notice?
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#faqsAccordion">
                    <div class="accordion-body">
                        Notices are delivered to your registered email ID and appear in your e-filing portal inbox. You can verify authenticity using the “Authenticate Notice / Order Issued by ITD” tool on www.incometax.gov.in. Always confirm the DIN (Document Identification Number)—it ensures the notice is genuine.
                    </div>
                </div>
            </div>
            <!-- Add more FAQ items as needed -->
        </div>
    </section>
</div>
@endsection</content>
<parameter name="filePath">d:\xampp\htdocs\Allied_Business_consultancy\resources\views\pages\income-tax-notice.blade.php