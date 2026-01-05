@extends('layouts.app')

@section('title', 'TAN Registration Services - Allied Business Consultancy')

@section('content')
<div class="container">
    <!-- Header Section -->
    <header class="text-center my-5">
        <h1>TAN Registration Services</h1>
        <p class="lead">Simplify your tax compliance with our expert TAN registration assistance.</p>
        <div class="row mt-4">
            <div class="col-md-3">
                <h3>Expert Guidance</h3>
                <p>Professional support for smooth TAN application.</p>
            </div>
            <div class="col-md-3">
                <h3>Quick Processing</h3>
                <p>Fast and efficient registration process.</p>
            </div>
            <div class="col-md-3">
                <h3>Compliance Assurance</h3>
                <p>Ensure all requirements are met accurately.</p>
            </div>
            <div class="col-md-3">
                <h3>Ongoing Support</h3>
                <p>Help with TDS filings and related services.</p>
            </div>
        </div>
        <a href="/contact" class="btn btn-primary btn-lg mt-3">Get Started with TAN Registration</a>
    </header>

    <!-- Understanding TAN Section -->
    <section id="understanding-tan" class="my-5">
        <h2>Understanding TAN</h2>
        <p>TAN stands for Tax Deduction and Collection Account Number. It is a 10-digit alphanumeric identifier mandated for individuals responsible for deducting or collecting tax at the source.</p>
        <h3>Who Needs TAN?</h3>
        <p>TAN is imperative for proprietorships and various entities making specific payments such as salaries, contractor payments, or rent exceeding Rs. 2,40,000 per year. Salaried individuals are exempt from obtaining TAN.</p>
        <h3>Our TAN Registration Support</h3>
        <p>At Allied Business Consultancy, we provide expert support in acquiring TAN registrations. Our professionals ensure a smooth and accurate TAN registration process.</p>
        <h3>Obligations After TAN</h3>
        <p>Entities with a valid TAN registration are obligated to file quarterly TDS (Tax Deducted at Source) returns.</p>
        <a href="/contact" class="btn btn-primary">Apply for TAN Now</a>
    </section>

    <!-- TDS Services Section -->
    <section id="tds-services" class="my-5">
        <h2>TDS Services</h2>
        <p>We offer comprehensive TDS return filing services to help you comply with tax regulations efficiently.</p>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">TAN Application</h5>
                        <p class="card-text">₹1,499<br><small>*Exclusive of Taxes<br>Per Application</small></p>
                        <ul class="list-unstyled">
                            <li>Preparation & filing of TAN application</li>
                            <li>Guidance for required documents</li>
                            <li>Status tracking & support till approval</li>
                        </ul>
                        <a href="/contact" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">TDS on Salary (Form 24Q)</h5>
                        <p class="card-text">₹2,499<br><small>*Exclusive of Taxes<br>Per Quarter</small></p>
                        <ul class="list-unstyled">
                            <li>Calculation of taxable salary and TDS</li>
                            <li>Challan preparation and filing</li>
                            <li>Form 16 generation</li>
                        </ul>
                        <a href="/contact" class="btn btn-primary">File Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">TDS on Property (Form 26QB/26QC)</h5>
                        <p class="card-text">₹1,499<br><small>*Exclusive of Taxes<br>Per Transaction</small></p>
                        <ul class="list-unstyled">
                            <li>TDS calculation for property transactions</li>
                            <li>Challan payment support</li>
                            <li>Form 16B/16C issuance</li>
                        </ul>
                        <a href="/contact" class="btn btn-primary">Get Help</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certificates Section -->
    <section id="certificates" class="my-5">
        <h2>TDS Certificates</h2>
        <p>After deducting TDS, it is essential to furnish a TDS Certificate. This validates tax credits for the deductee.</p>
        <h3>Certificate Features</h3>
        <p>TDS Certificates from TRACES feature a unique 7-digit certificate number and include a TRACES watermark for authenticity.</p>
        <h3>Issuance Frequency</h3>
        <p>TDS certificates for non-salary payments are issued quarterly. Those related to salary payments are provided annually.</p>
        <h3>Importance of Preservation</h3>
        <p>Proper documentation is crucial for deductees for a smooth tax journey. We emphasize diligent preservation of TDS certificates.</p>
        <a href="/contact" class="btn btn-success">Learn More About Certificates</a>
    </section>

    <!-- Documents Section -->
    <section id="documents" class="my-5">
        <h2>Required Documents</h2>
        <p>Ensure you have the following documents for TAN registration and TDS filing:</p>
        <ol>
            <li><strong>PAN Card:</strong> Of the applicant or deductor.</li>
            <li><strong>Identity Proof:</strong> Aadhaar card, passport, or driving license.</li>
            <li><strong>Address Proof:</strong> Utility bill, bank statement, or rental agreement.</li>
            <li><strong>Business Proof:</strong> For entities, registration certificate or partnership deed.</li>
            <li><strong>Bank Details:</strong> For challan payments.</li>
        </ol>
        <a href="/contact" class="btn btn-secondary">Get Document Checklist</a>
    </section>

    <!-- Deadlines Section -->
    <section id="deadlines" class="my-5">
        <h2>Filing Deadlines</h2>
        <p>Stay compliant by meeting these important deadlines:</p>
        <div class="row text-center">
            <div class="col-6 col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Quarter 1</h5>
                        <p>(Apr-Jun)</p>
                        <p class="text-primary">31st July</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Quarter 2</h5>
                        <p>(Jul-Sep)</p>
                        <p class="text-primary">31st October</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Quarter 3</h5>
                        <p>(Oct-Dec)</p>
                        <p class="text-primary">31st January</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Quarter 4</h5>
                        <p>(Jan-Mar)</p>
                        <p class="text-primary">31st May</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="mt-3">TAN applications can be submitted anytime, but TDS returns must be filed quarterly as per these dates.</p>
    </section>

    <!-- Penalties Section -->
    <section id="penalties" class="my-5">
        <h2>Penalties for Non-Compliance</h2>
        <p>Non-compliance with TAN and TDS regulations may lead to penalties. Here's what you need to know:</p>
        <h3>Late Deduction</h3>
        <ul>
            <li>1% monthly interest penalty until deduction occurs.</li>
            <li>May restrict claiming expenditure as deductible.</li>
        </ul>
        <h3>Late Payment</h3>
        <ul>
            <li>1.5% monthly penalty on unpaid TDS amount.</li>
            <li>Payment must be made by 7th of the following month.</li>
        </ul>
        <h3>Late Filing</h3>
        <ul>
            <li>₹200 per day penalty under Section 234E.</li>
            <li>Capped at the total TDS amount.</li>
            <li>Additional penalties up to ₹1,00,000 under Section 271H if delayed beyond a year.</li>
        </ul>
        <a href="/contact" class="btn btn-warning">Avoid Penalties - Contact Us</a>
    </section>

    <!-- Solutions Section -->
    <section id="solutions" class="my-5">
        <h2>Our Solutions</h2>
        <p>We provide end-to-end solutions for TAN registration and TDS compliance:</p>
        <div class="row">
            <div class="col-md-4">
                <h4>TAN Registration</h4>
                <p>Complete assistance from application to approval.</p>
            </div>
            <div class="col-md-4">
                <h4>TDS Filing</h4>
                <p>Accurate calculation, filing, and certificate generation.</p>
            </div>
            <div class="col-md-4">
                <h4>Compliance Support</h4>
                <p>Ongoing guidance to stay compliant and avoid penalties.</p>
            </div>
        </div>
        <p>Our expert team ensures your tax obligations are met efficiently and accurately.</p>
        <a href="/contact" class="btn btn-primary">Explore Our Solutions</a>
    </section>

    <!-- FAQs Section -->
    <section id="faqs" class="my-5">
        <h2>Frequently Asked Questions</h2>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        What is TAN and who needs it?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        TAN (Tax Deduction and Collection Account Number) is a 10-digit alphanumeric identifier required for entities deducting or collecting tax at source, such as employers, businesses making payments above certain thresholds, etc. Salaried individuals typically don't need it.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        How long does TAN registration take?
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        TAN registration typically takes 5-10 working days from the date of application submission, provided all documents are correct and complete.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        What are the TDS filing deadlines?
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        TDS returns must be filed quarterly: Q1 (Apr-Jun) by 31st July, Q2 (Jul-Sep) by 31st October, Q3 (Oct-Dec) by 31st January, Q4 (Jan-Mar) by 31st May.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        What documents are needed for TAN application?
                    </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Required documents include PAN card, identity proof (Aadhaar/Passport), address proof, business registration documents (if applicable), and bank details.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                        What happens if I miss TDS filing deadlines?
                    </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Late filing attracts a penalty of ₹200 per day under Section 234E, capped at the total TDS amount. Additional penalties may apply for delays beyond a year.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="my-5 text-center">
        <h2>Need Help with TAN Registration?</h2>
        <p>Contact our experts for personalized assistance.</p>
        <a href="/contact" class="btn btn-primary btn-lg">Contact Us Today</a>
    </section>
</div>
@endsection</content>
<parameter name="filePath">d:\xampp\htdocs\Allied_Business_consultancy\resources\views\pages\tan.blade.php