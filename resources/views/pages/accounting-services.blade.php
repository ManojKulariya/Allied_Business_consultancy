@extends('layouts.app')

@section('title', 'Accounting Services - Allied Business Consultancy')

@section('content')
<div class="container">
    <!-- Header Section -->
    <section id="header" class="text-center py-5">
        <h1>Accounting Services</h1>
        <p class="lead">Professional accounting solutions tailored to your business needs.</p>
    </section>

    <!-- Comprehensive Services Section -->
    <section id="comprehensive-services" class="py-5">
        <h2>Comprehensive Accounting Services</h2>
        <p>We offer a wide range of accounting services to help your business thrive.</p>
        <ul class="list-group">
            <li class="list-group-item">Financial statement preparation</li>
            <li class="list-group-item">Tax planning and compliance</li>
            <li class="list-group-item">Audit and assurance</li>
            <li class="list-group-item">Payroll management</li>
            <li class="list-group-item">Bookkeeping</li>
        </ul>
    </section>

    <!-- Packages Section -->
    <section id="packages" class="py-5">
        <h2>Our Packages</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Basic Package</h5>
                        <p class="card-text">$99/month</p>
                        <ul>
                            <li>Basic bookkeeping</li>
                            <li>Monthly reports</li>
                        </ul>
                        <a href="/contact" class="btn btn-primary">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Standard Package</h5>
                        <p class="card-text">$199/month</p>
                        <ul>
                            <li>Advanced bookkeeping</li>
                            <li>Tax preparation</li>
                            <li>Quarterly reports</li>
                        </ul>
                        <a href="/contact" class="btn btn-primary">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Premium Package</h5>
                        <p class="card-text">$299/month</p>
                        <ul>
                            <li>Full accounting services</li>
                            <li>Tax planning</li>
                            <li>Yearly audit</li>
                            <li>Dedicated advisor</li>
                        </ul>
                        <a href="/contact" class="btn btn-primary">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bookkeeping Section -->
    <section id="bookkeeping" class="py-5">
        <h2>Bookkeeping Services</h2>
        <p>Accurate and timely bookkeeping to keep your finances in order.</p>
        <p>Our bookkeeping services include:</p>
        <ul>
            <li>Transaction recording</li>
            <li>Reconciliation</li>
            <li>Financial reporting</li>
        </ul>
    </section>

    <!-- Advantages Section -->
    <section id="advantages" class="py-5">
        <h2>Advantages of Our Services</h2>
        <div class="row">
            <div class="col-md-6">
                <h4>Expertise</h4>
                <p>Years of experience in accounting and finance.</p>
            </div>
            <div class="col-md-6">
                <h4>Reliability</h4>
                <p>Dependable service with attention to detail.</p>
            </div>
        </div>
    </section>

    <!-- Why Partner Section -->
    <section id="why-partner" class="py-5">
        <div class="collaboration-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 text-center">
                        <div class="section-title">
                            <p>Let's Collaboration</p>
                            <h2>This Could Be The Start Of Something Special Let's Work Together!</h2>
                        </div>
                        <div class="mt-4">
                            <a href="/contact" class="btn btn-primary">Get In Touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section id="faqs" class="py-5">
        <h2>Frequently Asked Questions</h2>
        <div class="accordion" id="faqAccordion">
            <div class="card">
                <div class="card-header" id="heading1">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            What is included in your accounting services?
                        </button>
                    </h5>
                </div>
                <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#faqAccordion">
                    <div class="card-body">
                        Our accounting services include bookkeeping, tax preparation, financial reporting, and more.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="heading2">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            How much do your services cost?
                        </button>
                    </h5>
                </div>
                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#faqAccordion">
                    <div class="card-body">
                        Pricing depends on the package and specific needs. Contact us for a quote.
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection</content>
<parameter name="filePath">d:\xampp\htdocs\Allied_Business_consultancy\resources\views\pages\accounting-services.blade.php