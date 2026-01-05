@extends('layouts.app')

@section('title', 'Tax Planner Services - Allied Business Consultancy')

@section('content')
<div class="container">
    <!-- Header Section -->
    <section class="header-section py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Tax Planner Services</h1>
                <p class="lead">Expert tax planning to optimize your financial future and minimize liabilities.</p>
            </div>
        </div>
    </section>

    <!-- Importance Section -->
    <section class="importance-section py-5">
        <div class="row">
            <div class="col-lg-6">
                <h2>Why Tax Planning is Important</h2>
                <p>Effective tax planning is crucial for individuals and businesses to reduce tax liabilities, ensure compliance, and achieve financial goals. Our experts help you navigate complex tax laws to maximize savings.</p>
                <ul class="list-unstyled">
                    <li><i class="fas fa-check-circle text-success"></i> Minimize tax burdens</li>
                    <li><i class="fas fa-check-circle text-success"></i> Ensure legal compliance</li>
                    <li><i class="fas fa-check-circle text-success"></i> Optimize financial strategies</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('frontend/img/tax-planning.jpg') }}" alt="Tax Planning Importance" class="img-fluid rounded">
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-section py-5 bg-light">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2>Why Choose Our Tax Planning Services?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fas fa-user-tie fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Expert Advisors</h5>
                        <p class="card-text">Our certified tax professionals have years of experience in tax planning and compliance.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fas fa-shield-alt fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Secure & Confidential</h5>
                        <p class="card-text">We prioritize your privacy and ensure all information is handled securely.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fas fa-clock fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Timely Services</h5>
                        <p class="card-text">Get prompt assistance and stay ahead of tax deadlines with our efficient services.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Plans Section -->
    <section class="plans-section py-5">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2>Our Tax Planning Plans</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h4>Basic Plan</h4>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">$99/month</h5>
                        <ul class="list-unstyled">
                            <li>Tax consultation</li>
                            <li>Basic planning advice</li>
                            <li>Email support</li>
                        </ul>
                        <a href="/contact" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-primary">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Standard Plan</h4>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">$199/month</h5>
                        <ul class="list-unstyled">
                            <li>All Basic features</li>
                            <li>Advanced tax strategies</li>
                            <li>Phone support</li>
                            <li>Quarterly reviews</li>
                        </ul>
                        <a href="/contact" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-header text-center">
                        <h4>Premium Plan</h4>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">$299/month</h5>
                        <ul class="list-unstyled">
                            <li>All Standard features</li>
                            <li>Comprehensive planning</li>
                            <li>Dedicated advisor</li>
                            <li>Year-round support</li>
                        </ul>
                        <a href="/contact" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tax Saving Instruments Section -->
    <section class="tax-saving-section py-5 bg-light">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2>Tax Saving Instruments</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>Popular Tax Saving Options</h3>
                <ul>
                    <li>Provident Fund (PPF)</li>
                    <li>National Savings Certificate (NSC)</li>
                    <li>Life Insurance Premiums</li>
                    <li>ELSS Mutual Funds</li>
                    <li>Home Loan Interest</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Business Tax Savings</h3>
                <ul>
                    <li>Section 80C Deductions</li>
                    <li>Section 80D Health Insurance</li>
                    <li>Section 24 Home Loan Interest</li>
                    <li>Section 80G Charitable Donations</li>
                    <li>Section 80E Education Loan Interest</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section class="faqs-section py-5">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2>Frequently Asked Questions</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="accordion" id="taxFaqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                What is tax planning?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#taxFaqAccordion">
                            <div class="accordion-body">
                                Tax planning involves analyzing your financial situation to minimize tax liabilities legally. It includes strategies like deductions, credits, and investments.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                When should I start tax planning?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#taxFaqAccordion">
                            <div class="accordion-body">
                                It's best to start tax planning at the beginning of the financial year. However, you can plan throughout the year to optimize your taxes.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Are there risks in tax planning?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#taxFaqAccordion">
                            <div class="accordion-body">
                                When done by professionals, tax planning is safe and legal. Avoid aggressive strategies that could lead to audits or penalties.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                How much can I save with tax planning?
                            </button>
                        </h2>
                        <div id="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#taxFaqAccordion">
                            <div class="accordion-body">
                                Savings vary based on your income, deductions, and investments. Our experts can help estimate potential savings for your situation.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section py-5 bg-primary text-white text-center">
        <div class="row">
            <div class="col-12">
                <h2>Ready to Optimize Your Taxes?</h2>
                <p>Contact us today for personalized tax planning services.</p>
                <a href="/contact" class="btn btn-light btn-lg">Contact Us</a>
            </div>
        </div>
    </section>
</div>
@endsection