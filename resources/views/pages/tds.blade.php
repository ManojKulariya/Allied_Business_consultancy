@extends('layouts.app')

@section('title', 'TDS Return Filing')

@section('content')
<div class="container">
    <header class="text-center my-5">
        <h1>Seamless TDS Return Filing by TaxBuddy</h1>
        <div class="row">
            <div class="col-md-3">
                <h3>Optimized Deductions for Maximum Savings</h3>
            </div>
            <div class="col-md-3">
                <h3>Effortless TDS Submission</h3>
            </div>
            <div class="col-md-3">
                <h3>Swift Processing and Confirmation</h3>
            </div>
            <div class="col-md-3">
                <h3>Expert Support at Your Fingertips</h3>
            </div>
        </div>
        <a href="#" class="btn btn-primary">File TDS Return Now</a>
    </header>

    <section id="introduction" class="my-5">
        <h2>Introduction</h2>
        <p>TaxBuddy offers seamless TDS return filing services to help individuals and businesses comply with tax regulations efficiently.</p>
    </section>

    <section id="eligibility" class="my-5">
        <h2>Who is Eligible for TDS Return Filing?</h2>
        <p>TaxBuddy extends its TDS return filing online services to a diverse range of entities. Eligible entities include employers and organizations holding a valid TAN. Individuals subject to audit under Section 44AB and holding positions in government offices or companies are mandated to file online TDS returns on a quarterly basis.</p>
        <p>TaxBuddy accommodates various deductors, ranging from individuals and groups of individuals to HUFs, limited companies, local authorities, associations of individuals, partnership firms, and more.</p>
        <p>According to the Income Tax Act (ITA), TDS is applicable to various payouts, including:</p>
        <ul>
            <li>Salary income</li>
            <li>Income on securities</li>
            <li>Insurance commissions</li>
            <li>Payouts towards NSC</li>
            <li>Earnings from winning horse races, lotteries, puzzles, and similar sources.</li>
        </ul>
        <a href="#" class="btn btn-secondary">Submit TDS Return</a>
    </section>

    <section id="tan-explanation" class="my-5">
        <h2>Understanding TAN with TaxBuddy</h2>
        <p>TAN stands for Tax Deduction and Collection Number. It is a 10-digit alphanumeric identifier mandated for individuals responsible for deducting or collecting tax at the source.</p>
        <h3>Salaried Individuals Exemption</h3>
        <p>Salaried individuals are exempt from obtaining TAN or participating in tax deduction at the source.</p>
        <h3>Entities Requiring TAN</h3>
        <p>TAN is imperative for proprietorships and various entities making specific payments such as salaries, contractor payments, or rent exceeding Rs. 2,40,000 per year.</p>
        <h3>TaxBuddy's TAN Registration Support</h3>
        <p>TaxBuddy, through its professionals at IndiaFilings, provides support in acquiring TAN registrations. Expertise is offered to ensure a smooth and accurate TAN registration process.</p>
        <h3>Quarterly TDS Returns Obligation</h3>
        <p>Entities with a valid TAN registration are obligated to file quarterly TDS (Tax Deducted at Source) returns.</p>
        <a href="#" class="btn btn-primary">Get Started with TDS</a>
    </section>

    <section id="tds-certificate" class="my-5">
        <h2>What is a TDS Certificate?</h2>
        <h3>TDS Certificate Importance</h3>
        <p>After deducting TDS, it is essential for the deductor to furnish a TDS Certificate. Validating tax credits becomes easy for the deductee with a legitimate TDS Certificate from TRACES.</p>
        <h3>TDS Certificate Features</h3>
        <p>TDS Certificates from TRACES feature a unique 7-digit certificate number. They also include a TRACES watermark for authenticity.</p>
        <h3>TaxBuddy's Emphasis on Preservation</h3>
        <p>TaxBuddy emphasizes the importance of preserving TDS certificates diligently. Proper documentation is crucial for deductees for a smooth tax journey.</p>
        <h3>Issuance Frequency for TDS Certificates</h3>
        <p>TDS certificates for non-salary payments are issued quarterly. Those related to salary payments are provided annually.</p>
        <h3>Expert Support for a Hassle-Free Tax Journey</h3>
        <p>TaxBuddy provides expert support to ensure deductees have the necessary documentation for a hassle-free tax journey.</p>
        <a href="#" class="btn btn-success">Secure TDS Filing</a>
    </section>

    <section id="pricing-plans" class="my-5">
        <h2>Tax Deducted at Source (TDS) Pricing Plans</h2>
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">TDS on Sale / Rent of Property (Form 26QB / 26QC)</h5>
                        <p class="card-text">₹1,499<br><small>*Exclusive of Taxes<br>Per Return</small></p>
                        <ul>
                            <li>Calculation of TDS liability</li>
                            <li>Support for challan payment and filing</li>
                            <li>Filing of TDS return</li>
                            <li>Download Form 16B / Form 16C</li>
                            <li>Post-filing issue resolution</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Get Help with Property TDS</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">TDS on Salary / Non-Salary Payments to Residents (Form 24Q / 26Q)</h5>
                        <p class="card-text">₹2,499<br><small>*Exclusive of Taxes<br>per return per quarter (up to 30 entries)</small></p>
                        <ul>
                            <li>Calculation of taxable salary and TDS per employee</li>
                            <li>Monthly challan and payment support</li>
                            <li>Filing of TDS return</li>
                            <li>Download Form 16 / Form 16A</li>
                            <li>After-filing support</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Start Your Quarterly Filing</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">TDS Filing for NRI (Non-Salary Payments – Form 27Q)</h5>
                        <p class="card-text">₹3,999<br><small>*Exclusive of Taxes<br>Per Return</small></p>
                        <ul>
                            <li>TDS computation for payments to NRIs</li>
                            <li>Challan preparation and payment assistance</li>
                            <li>Filing of Form 27Q</li>
                            <li>Download Form 16A</li>
                            <li>Query resolution after processing</li>
                        </ul>
                        <a href="#" class="btn btn-primary">File NRI TDS Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">TDS Correction / Rectification</h5>
                        <p class="card-text">₹3,999<br><small>*Exclusive of Taxes<br>Per Return</small></p>
                        <ul>
                            <li>PAN / challan / amount mismatch correction</li>
                            <li>Re-submission of revised return</li>
                            <li>Validation with TRACES</li>
                            <li>End-to-end rectification support</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Fix My TDS Errors</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">TAN Application</h5>
                        <p class="card-text">₹1,499<br><small>*Exclusive of Taxes<br>Per Application</small></p>
                        <ul>
                            <li>Preparation & filing of TAN application</li>
                            <li>Guidance for required documents</li>
                            <li>Status tracking & email support till approval</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Apply for TAN Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="documents" class="my-5">
        <h2>Required Documents For TDS Return Filing With Taxbuddy</h2>
        <p>Navigating the intricacies of TDS return filing is simpler when armed with the right documents. At TaxBuddy, we prioritize your ease of compliance. Here are the essential documents you need:</p>
        <h3>General Documents for TDS Return Filing:</h3>
        <ol>
            <li><strong>TDS Certificates:</strong> Gather all TDS certificates, providing a detailed record of tax deducted at source.</li>
            <li><strong>Tax Payment Challans (Self-assessment, Advance Tax):</strong> Keep records of tax payment challans for self-assessment and advance tax payments made.</li>
            <li><strong>PAN Card Details:</strong> Ensure you have accurate PAN card details for both deductors and deductees.</li>
            <li><strong>Response to Income Tax Department Notices:</strong> If you've received a notice from the Income Tax department, have details of the original return or the notice response.</li>
            <li><strong>Bank Account Information:</strong> Maintain comprehensive details of all bank accounts involved in the TDS transactions.</li>
        </ol>
        <a href="#" class="btn btn-secondary">Complete TDS Submission</a>
    </section>

    <section id="due-dates" class="my-5">
        <h2>TDS Return Filing Deadlines: Stay Informed with TaxBuddy</h2>
        <div class="row text-center">
            <div class="col-6 col-md-3">
                <h4>QUARTER 1</h4>
                <p>31st July</p>
            </div>
            <div class="col-6 col-md-3">
                <h4>QUARTER 2</h4>
                <p>31st October</p>
            </div>
            <div class="col-6 col-md-3">
                <h4>QUARTER 3</h4>
                <p>31st Jan</p>
            </div>
            <div class="col-6 col-md-3">
                <h4>QUARTER 4</h4>
                <p>31st May</p>
            </div>
        </div>
        <h3>TDS Certificates and Due Dates</h3>
        <p>Uncover details about TDS certificates issued against different TDS forms, along with due dates for filing forms related to specific quarters.</p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Form</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>24Q</td>
                    <td>Statement of tax deducted at source on salaries.</td>
                </tr>
                <tr>
                    <td>26Q</td>
                    <td>TDS statement for payments other than salary (like interest, rent, or commission) made to residents.</td>
                </tr>
                <tr>
                    <td>26QB</td>
                    <td>TDS statement for tax deducted on the purchase of immovable property.</td>
                </tr>
                <tr>
                    <td>27Q</td>
                    <td>Certificate of tax deducted at source on interest and dividend payable to NRIs and foreign companies.</td>
                </tr>
                <tr>
                    <td>27EQ</td>
                    <td>Statement of TCS.</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="penalties" class="my-5">
        <h2>Navigating TDS Return Filing Penalties with TaxBuddy</h2>
        <p>Ensuring compliance with TDS rules is paramount, and non-compliance may lead to penalties, manifesting as fees and interest on the taxable amount.</p>
        <p>Penalty Types: TaxBuddy understands the diverse penalties involved, such as:</p>
        <h3>Regulation Regarding Tax Deduction</h3>
        <ul>
            <li>Tax deduction delays invite a 1% monthly interest penalty until the deduction occurs.</li>
            <li>Failure to deduct may restrict the person responsible from determining taxable profit from total expenditure.</li>
        </ul>
        <h3>Regulations Regarding TDS Payment</h3>
        <ul>
            <li>Taxpayers must remit the taxable sum to the Government of India by the 7th day of the month succeeding tax filing.</li>
            <li>Non or late TDS payment attracts a 1.5% monthly penalty on the total payable sum until deposited.</li>
        </ul>
        <h3>Regulations Regarding TDS Return Filing</h3>
        <ul>
            <li>TDS returns should be diligently filed on the 31st day of January, May, July, and October each financial year.</li>
            <li>Non-filing or late filing accrues a Rs.200 daily penalty (Section 234E of the Income Tax Act) until the return is submitted, capped at the total tax levied.</li>
        </ul>
    </section>

    <section id="benefits" class="my-5">
        <h2>Simplify TDS with TaxBuddy: Comprehensive Solutions for Easy Filing</h2>
        <h3>1. TDS Return Filing</h3>
        <p>We facilitate seamless TDS return filing for businesses and individuals and support the filing of various TDS returns such as Form 24Q, 26Q, and 27Q. Users can easily upload the necessary details, reconcile TDS data, and generate the required TDS return files for submission to the income tax department.</p>
        <h3>2. TDS Compliance</h3>
        <p>We ensure TDS compliance by keeping users updated on the latest TDS rules and regulations. The platform provides comprehensive guidance on deducting the correct TDS amounts, adhering to TDS rates, and complying with filing timelines. Through regular updates and alerts, TaxBuddy.com assists businesses in staying compliant with TDS regulations, minimizing the risk of penalties and ensuring smooth interactions with tax authorities.</p>
        <h3>3. TDS Reconciliation & Reporting</h3>
        <p>We offer robust TDS reconciliation and reporting features. The platform enables users to reconcile TDS deducted with TDS deposited, helping to identify and rectify any discrepancies. Detailed reports provide insights into TDS deductions across different heads, making it easier for businesses to ensure accuracy in their financial records.</p>
    </section>

    <section id="faqs" class="my-5">
        <h2>Frequently Asked Questions</h2>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        When is the TDS return due date for FY 2025-26?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        TDS return due dates are: Q1 (Apr–Jun): 31 July 2025, Q2 (Jul–Sep): 31 October 2025, Q3 (Oct–Dec): 31 January 2026, Q4 (Jan–Mar): 31 May 2026.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        Which TDS return form should I use?
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Form 24Q: Salary payments, Form 26Q: Non-salary payments to residents, Form 27Q: Payments to NRIs/foreign companies, Form 26QB / 26QC: Sale or rent of immovable property, Form 27EQ: TCS details.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        How can I file my TDS return online for FY 2025-26?
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        You can file through the Income Tax Department’s TRACES/e-filing portal or directly via TaxBuddy, where experts calculate liability, prepare challans, and file returns error-free across all forms.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        What are the documents required for TDS filing?
                    </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        TAN & PAN of deductor and deductees, Challan details (CIN), Salary or payment sheets, Property sale/rent details (for 26QB/26QC), Bank and NRI transaction details (for 27Q).
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                        What is the penalty for late TDS filing?
                    </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        A penalty of ₹200 per day applies under Section 234E (capped at the total TDS amount). If delayed beyond one year, ₹10,000 – ₹1,00,000 under Section 271H may apply.
                    </div>
                </div>
            </div>
            <!-- Add more FAQs similarly -->
        </div>
    </section>

    <footer class="my-5 text-center">
        <h2>Contact Us</h2>
        <p>Mobile: <a href="tel:9321908755">+91 93219 08755</a></p>
        <p>Email: <a href="/contact">support@taxbuddy.com</a></p>
        <p>TaxBuddy's intuitive e-filing application ensures filing Accurate tax returns. TaxBuddy leverages technology to bring expert advice to taxpayers at reasonable cost.</p>
        <div class="social-links">
            <a href="https://twitter.com/TaxBuddy1">Twitter</a> |
            <a href="https://www.facebook.com/TaxBuddyOfficial/">Facebook</a> |
            <a href="https://www.linkedin.com/company/tax-buddy-india/">LinkedIn</a> |
            <a href="https://www.instagram.com/taxbuddy_official">Instagram</a> |
            <a href="https://www.youtube.com/@TaxBuddy">Youtube</a>
        </div>
        <p>&copy; 2025 SSBA Innovations Ltd. All Rights Reserved.</p>
    </footer>
</div>
@endsection