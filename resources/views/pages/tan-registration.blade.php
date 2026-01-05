@extends('layouts.app')

@section('title', 'TAN Registration Services - Allied Business Consultancy')

@section('content')
<div class="container">
    <!-- Header Section -->
    <section class="text-center py-5">
        <h1>Seamless TDS Return Filing by Allied Business Consultancy</h1>
        <p>Optimized Deductions for Maximum Savings, Effortless TDS Submission, Swift Processing and Confirmation, Expert Support at Your Fingertips.</p>
        <a href="/contact" class="btn btn-primary">File TDS Return Now</a>
    </section>

    <!-- Eligibility -->
    <section class="py-5">
        <h2>WHO IS ELIGIBLE FOR TDS RETURN FILING?</h2>
        <p>Entities with a valid TAN are obligated to file quarterly TDS returns. This includes employers, organizations, individuals, HUFs, companies, etc.</p>
    </section>

    <!-- Understanding TAN -->
    <section class="py-5">
        <h2>Understanding TAN with Allied Business Consultancy</h2>
        <p>TAN stands for Tax Deduction and Collection Number. It is a 10-digit alphanumeric identifier for individuals responsible for deducting or collecting tax at source.</p>
        <p>Entities requiring TAN: Proprietorships and entities making specific payments.</p>
        <p>Quarterly TDS Returns Obligation: Entities with TAN must file quarterly TDS returns.</p>
    </section>

    <!-- TDS Services -->
    <section class="py-5">
        <h2>Tax Deducted at Source (TDS)</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">TDS on Sale / Rent of Property</h5>
                        <p class="card-text">₹1,499 per return</p>
                        <ul>
                            <li>Calculation of TDS liability</li>
                            <li>Support for challan payment</li>
                            <li>Filing of TDS return</li>
                        </ul>
                        <a href="/contact" class="btn btn-primary">Get Help</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">TDS on Salary / Non-Salary</h5>
                        <p class="card-text">₹2,499 per return per quarter</p>
                        <ul>
                            <li>Calculation of taxable salary</li>
                            <li>Monthly challan support</li>
                            <li>Filing of TDS return</li>
                        </ul>
                        <a href="/contact" class="btn btn-primary">Start Filing</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">TDS for NRI</h5>
                        <p class="card-text">₹3,999 per return</p>
                        <ul>
                            <li>TDS computation for payments to NRIs</li>
                            <li>Challan preparation</li>
                            <li>Filing of Form 27Q</li>
                        </ul>
                        <a href="/contact" class="btn btn-primary">File NRI TDS</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">TAN Application</h5>
                        <p class="card-text">₹1,499 per application</p>
                        <ul>
                            <li>Preparation & filing of TAN application</li>
                            <li>Guidance for documents</li>
                            <li>Status tracking</li>
                        </ul>
                        <a href="/contact" class="btn btn-primary">Apply for TAN</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TDS Certificate -->
    <section class="py-5">
        <h2>What is a TDS Certificate?</h2>
        <p>TDS Certificate Importance: Validates tax credits for deductees.</p>
        <p>Features: Unique 7-digit number, TRACES watermark.</p>
        <p>Issuance: Quarterly for non-salary, annually for salary.</p>
    </section>

    <!-- Documents -->
    <section class="py-5">
        <h2>Required Documents For TDS Return Filing</h2>
        <ol>
            <li>TDS Certificates</li>
            <li>Tax Payment Challans</li>
            <li>PAN Card Details</li>
            <li>Response to Notices</li>
            <li>Bank Account Information</li>
        </ol>
    </section>

    <!-- Deadlines -->
    <section class="py-5">
        <h2>TDS Return Filing Deadlines</h2>
        <ul>
            <li>Quarter 1: 31st July</li>
            <li>Quarter 2: 31st October</li>
            <li>Quarter 3: 31st January</li>
            <li>Quarter 4: 31st May</li>
        </ul>
    </section>

    <!-- Penalties -->
    <section class="py-5">
        <h2>Navigating TDS Return Filing Penalties</h2>
        <p>Penalties for late deduction, payment, or filing.</p>
    </section>

    <!-- Solutions -->
    <section class="py-5">
        <h2>Simplify TDS with Allied Business Consultancy</h2>
        <ul>
            <li>TDS Return Filing</li>
            <li>TDS Compliance</li>
            <li>TDS Reconciliation & Reporting</li>
        </ul>
    </section>

    <!-- FAQs -->
    <section class="py-5">
        <h2>Frequently Asked Questions</h2>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        When is the TDS return due date?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Quarterly deadlines as listed above.
                    </div>
                </div>
            </div>
            <!-- Add more -->
        </div>
    </section>

    <!-- Footer -->
    <section class="text-center py-5">
        <a href="/contact" class="btn btn-primary">Talk to Us</a>
        <p>Mobile: [+91 93219 08755]</p>
        <p>Email: support@alliedbusiness.com</p>
    </section>
</div>
@endsection