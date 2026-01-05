@extends('layouts.app')

@section('title', 'HUF Filing Services - Allied Business Consultancy')

@section('content')
<div class="container">
    <!-- Header Section -->
    <section class="text-center py-5">
        <h1>Understanding HUF Account Registration with Allied Business Consultancy</h1>
        <p>Welcome to Allied Business Consultancy, where we simplify the complexities of taxation, including the unique entity known as the Hindu Undivided Family (HUF).</p>
        <a href="/contact" class="btn btn-primary">Start your HUF Registration Now</a>
    </section>

    <!-- What is a HUF Account -->
    <section class="py-5">
        <h2>What is a HUF Account?</h2>
        <p>An HUF Account is a distinct and recognized form of business entity under Indian tax laws. It is formed through Hindu law, typically upon the marriage of an individual. The HUF consists of members who share a common ancestry, residence, and family property.</p>
        <h3>Karta</h3>
        <p>The Karta, often the patriarch of the family, holds the authority to make decisions on behalf of family members. This pivotal role involves managing family affairs and representing the HUF in various capacities.</p>
        <h3>Co-Parceners</h3>
        <p>Co-parceners possess the right to claim a share of the family property when opting to separate from the HUF account. The hierarchy of co-parceners extends through four degrees within the family structure: 1st Degree: The individual holding ancestral property for the first time. 2nd Degree: Sons and daughters. 3rd Degree: Grandsons. 4th Degree: Great-grandsons.</p>
    </section>

    <!-- Key Advantages -->
    <section class="py-5">
        <h2>Key Advantages Of An HUF Account</h2>
        <p>Common Ancestry, Joint Property, Business Activities.</p>
        <h3>Requirements For HUF Account Registration For Tax Benefits</h3>
        <ol>
            <li>Family Requirement</li>
            <li>Marriage Implication</li>
            <li>Eligible Communities</li>
            <li>Formal Registration</li>
            <li>Common Corpus</li>
            <li>Tax Benefits</li>
        </ol>
    </section>

    <!-- Services -->
    <section class="py-5">
        <h2>HUF Filing & Registration Services By Allied Business Consultancy</h2>
        <p>Applicable for Hindu, Sikh, Jain and Buddhist families</p>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">HUF Registration</h5>
                        <p class="card-text">₹2,999 *Exclusive of Taxes</p>
                        <ul>
                            <li>Expert assistance in HUF creation</li>
                            <li>Comprehensive documentation support</li>
                            <li>Formal registration with legal expertise</li>
                        </ul>
                        <a href="/contact" class="btn btn-primary">I am Interested</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">HUF Filings</h5>
                        <p class="card-text">₹4,199 *Exclusive of Taxes</p>
                        <ul>
                            <li>Annual filing support for your HUF</li>
                            <li>Compliance check and documentation assistance</li>
                            <li>Dedicated expert consultation for tax optimization</li>
                        </ul>
                        <a href="/contact" class="btn btn-primary">I am Interested</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section class="py-5">
        <h2>Unlock Tax Advantages With HUF's Financial Benefits</h2>
        <div class="row">
            <div class="col-md-4">
                <h4>Income Tax Privileges</h4>
                <p>As a separate legal entity with its own PAN, the HUF can generate income, conduct business, and invest in various assets, all while enjoying the basic exemption limit of 2.5 lakhs.</p>
            </div>
            <div class="col-md-4">
                <h4>Residential Property Ownership</h4>
                <p>The Indian Income Tax Act stipulates that if an individual possesses multiple residential properties, only one is considered self-occupied, and taxes are levied on the rest. By establishing a HUF, you can own multiple residential properties without incurring additional taxes.</p>
            </div>
            <div class="col-md-4">
                <h4>Life Insurance Deductions</h4>
                <p>Similar to individual taxpayers benefiting from a deduction of Rs.1,50,000 on specified investments and life insurance premiums under section 80C, HUFs can also claim this benefit, reducing their taxable income.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h4>Investment Opportunities</h4>
                <p>HUFs can explore tax-saving investment avenues such as Equity-Linked Savings Schemes (ELSS) and avail tax benefits of up to Rs.1,50,000 under section 80C.</p>
            </div>
            <div class="col-md-4">
                <h4>Health Insurance Advantage</h4>
                <p>While individuals receive a deduction of Rs.25,000 annually on health insurance premiums for their family under section 80D, this might fall short as premiums rise. A HUF, however, can claim an additional deduction of Rs.25,000, resulting in a total health insurance premium deduction of Rs.50,000.</p>
            </div>
        </div>
    </section>

    <!-- Documentation -->
    <section class="py-5">
        <h2>Essential Documentation for HUF Account Registration in India</h2>
        <ol>
            <li>PAN Card Copy of Karta</li>
            <li>Aadhar Card Copy of Karta</li>
            <li>Passport Size Photograph of Karta</li>
            <li>Specimen Signature of Karta & Family Members</li>
            <li>HUF Deed</li>
        </ol>
    </section>

    <!-- Why Choose -->
    <section class="py-5">
        <h2>Why Choose Allied Business Consultancy for HUF Account Registration Services?</h2>
        <ul>
            <li>Expert Guidance</li>
            <li>Efficiency</li>
            <li>Compliance Assurance</li>
        </ul>
    </section>

    <!-- FAQs -->
    <section class="py-5">
        <h2>Frequently Asked Questions</h2>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        What is an HUF (Hindu Undivided Family) account?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        An HUF account is a financial arrangement that allows Hindu Undivided Families to pool their income and manage it as a single entity. It provides a distinct legal structure for joint family financial activities.
                    </div>
                </div>
            </div>
            <!-- Add more accordion items as needed -->
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