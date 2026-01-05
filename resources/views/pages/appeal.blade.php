@extends('layouts.app')

@section('title', 'Appeal Services - Allied Business Consultancy')

@section('content')
<div class="container">
    <!-- Header Section -->
    <section class="text-center py-5">
        <h1>File your Appeal with Qualified Tax Expert</h1>
        <p>Don't let income tax notices cause you stress. Schedule a call with our qualified tax consultants today.</p>
        <a href="/contact" class="btn btn-primary">I am Interested</a>
    </section>

    <!-- Consultation -->
    <section class="py-5">
        <h2>Tailored Discussion For Appeal Cases</h2>
        <p>Experience our exclusive, personalized one-on-one consultation for specialized tailored advice within a private setting for a full 30 minutes via Google Meet/Call</p>
        <ul>
            <li>Personalized Consultation</li>
            <li>Expert Review</li>
            <li>Consistent Expert Guidance</li>
        </ul>
        <a href="/contact" class="btn btn-primary">Schedule a Consultation</a>
    </section>

    <!-- Roadmap -->
    <section class="py-5">
        <h2>Step-By-Step Roadmap for Appeal Cases</h2>
        <ol>
            <li>Receive the Income Tax Assessment Order</li>
            <li>Review the Assessment Order to identify discrepancies or disagreements</li>
            <li>Decide whether to file an appeal if there are valid reasons</li>
            <li>Determine the appropriate Appellate Authority</li>
            <li>Prepare the appeal documents</li>
            <li>Calculate and pay the required appeal fees</li>
            <li>File the appeal with the relevant Appellate Authority</li>
            <li>Attend hearings, if scheduled</li>
            <li>Consider Negotiation & settlement options</li>
            <li>If unsatisfied, explore further legal options</li>
            <li>Comply with the order</li>
            <li>Receive the appellate order</li>
        </ol>
    </section>

    <!-- Pricing -->
    <section class="py-5">
        <h2>Appeal Cases</h2>
        <p>Starting from ₹25,399 *Exclusive of Taxes</p>
        <p>SUITED FOR: 1st & 2nd Appeal against CIT(A), Appeals that can be conducted through online tax portals, Taxpayers with disagreement with assessment, etc.</p>
        <a href="/contact" class="btn btn-primary">I am Interested</a>
    </section>

    <!-- How We Help -->
    <section class="py-5">
        <h2>How Will We Help You?</h2>
        <ul>
            <li>Expertise in Tax Laws</li>
            <li>Assessment and Evaluation</li>
            <li>Document Preparation</li>
        </ul>
    </section>

    <!-- Testimonials -->
    <section class="py-5">
        <h2>Hear from our clients</h2>
        <p>Testimonials from satisfied clients.</p>
    </section>

    <!-- FAQs -->
    <section class="py-5">
        <h2>Frequently Asked Questions</h2>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        What is Form 35?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        If you are aggrieved by an order of an Assessing Officer (AO), you can file an appeal against the same before the Joint Commissioner (Appeals) or Commissioner of Income Tax (Appeals) by submitting duly filled Form 35 online on the e-Filing portal.
                    </div>
                </div>
            </div>
            <!-- Add more as needed -->
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