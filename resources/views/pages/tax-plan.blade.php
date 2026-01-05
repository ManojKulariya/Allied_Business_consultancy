@extends('layouts.app')

@section('title', 'Tax Planner Services - Allied Business Consultancy')

@section('content')
<div class="container">
    <!-- Header Section -->
    <section class="text-center py-5">
        <h1>Tax Planning Made Easy with Allied Business Consultancy’s Tax Planner</h1>
        <p>Are you struggling with questions about minimizing tax liability? You definitely need Tax Planning!</p>
        <a href="/contact" class="btn btn-primary">Start Planning</a>
    </section>

    <!-- Importance -->
    <section class="py-5">
        <h2>Importance of Tax Planning - Why Should You Seek Advice from a Tax Planner</h2>
        <p>Tax planning enables you to eliminate guesswork and complete the process confidently. Here are good reasons to have an expert on board:</p>
        <ul>
            <li>Minimise tax liability by making the most of tax-saving opportunities</li>
            <li>Maximise tax efficiency with tax-advantaged investment vehicles</li>
            <li>Manage your risks and avoid penalties</li>
            <li>Achieve your financial goals by saving taxes year after year</li>
        </ul>
    </section>

    <!-- Why Choose -->
    <section class="py-5">
        <h2>Why Choose Allied Business Consultancy as Your Guide</h2>
        <p>We are India’s Highest Rated Platform for Tax Compliance.</p>
        <p>Testimonials from clients.</p>
        <p>How it works: Solution for all income types, Basic plan starts from INR 299, Explore TaxSaver Pro and Advance plans.</p>
    </section>

    <!-- Plans -->
    <section class="py-5">
        <h2>Basic Tax Planner</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">₹299 / Year</h5>
                <p class="card-text">Tax planning (DIY) - Maximize your financial potential.</p>
                <a href="/contact" class="btn btn-primary">Start Tax Planning</a>
            </div>
        </div>

        <h2>Advance Tax Planner Plans</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">TaxSaver Pro - ₹1,699</h5>
                        <ul>
                            <li>For salaried taxpayers</li>
                            <li>Old v New tax regime</li>
                            <li>Increase saving by salary restructuring</li>
                        </ul>
                        <a href="/contact" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">TaxSaver Advance - ₹2,599</h5>
                        <ul>
                            <li>For taxpayers with income other than salary</li>
                            <li>Solutions against capital gains</li>
                            <li>Tax loss harvesting</li>
                        </ul>
                        <a href="/contact" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">TaxSaver NRI - ₹4,199</h5>
                        <ul>
                            <li>Guidance for taxation on foreign investments</li>
                            <li>Applicability of DTAA provisions</li>
                        </ul>
                        <a href="/contact" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tax Saving Instruments -->
    <section class="py-5">
        <h2>How Can You Save Taxes with Savvy Tax Planning</h2>
        <p>Best Tax Saving Instruments</p>
        <table class="table">
            <thead>
                <tr>
                    <th>Section</th>
                    <th>Description</th>
                    <th>Deduction Limit</th>
                    <th>Assessee</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>80C</td>
                    <td>Popular investment options</td>
                    <td>Upto Rs 1,50,000</td>
                    <td>Individual Or HUF</td>
                </tr>
                <tr>
                    <td>80D</td>
                    <td>Medical Insurance Premiums</td>
                    <td>Upto Rs 1,00,000</td>
                    <td>Individual Or HUF</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </section>

    <!-- FAQs -->
    <section class="py-5">
        <h2>Frequently Asked Questions</h2>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        Who needs tax planning?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Tax planning benefits everyone, from salaried professionals to business owners.
                    </div>
                </div>
            </div>
            <!-- Add more accordion items -->
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