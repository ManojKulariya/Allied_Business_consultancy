@extends('layouts.app')

@section('content')
<div class="container">
    <section class="header-section text-center py-5">
        <h1>MyBizCFO – Your Partner in Business Setup and Compliance</h1>
        <p>Starting Your Business Journey Couldn’t Get Easier. Allied Business Consultancy is Here to Help!!</p>
        <ul class="list-unstyled">
            <li>Sound financial strategies for small businesses, partnerships, or companies</li>
            <li>Reliable expertise to help you streamline your financial operations</li>
            <li>Simplify your financial decisions, guiding you from registration to tax filings</li>
        </ul>
        <p>With our experts showing you the way, you can focus on growing your business.</p>
        <a href="/contact" class="btn btn-primary">Register Now</a>
    </section>

    <section class="why-choose py-5">
        <h2>Why Choose Allied Business Consultancy?</h2>
        <p>Want to hire a dedicated CFO or choose Allied Business Consultancy to make informed financial decisions? Here are some good reasons to opt for the latter!</p>
        <div class="row">
            <div class="col-md-4 text-center">
                <h4>Expert Guidance</h4>
                <p>We offer end-to-end support for both small businesses and big companies. We have seasoned finance experts on board with experience working with diverse organisations.</p>
            </div>
            <div class="col-md-4 text-center">
                <h4>Hassle-Free Process</h4>
                <p>Our experienced team ensures everything is handled seamlessly. From valuable guidance and advice on setup to taxes and regulatory compliance, we have it all in one place.</p>
            </div>
            <div class="col-md-4 text-center">
                <h4>Tailored Solutions</h4>
                <p>Whether you're a freelancer, partnership, or a corporation, we have solutions suited to your needs. You can trust us to offer assistance just like a dedicated CFO does.</p>
            </div>
        </div>
    </section>

    <section class="services py-5">
        <h2>Business Setup & Compliance Services</h2>

        <h3>For Small Businesses</h3>
        <p>We assist in setting up your small business with essential registrations and licenses. Whether you want to start as a freelancer or a sole proprietor, we ensure that you meet every regulatory requirement. Our services include:</p>
        <ul>
            <li>Obtaining FSSAI/ MSME/ Udyam Registration, Trade Licenses, Import Export Code, ISO Certification and more</li>
            <li>Applying for GST Registration and PAN Application</li>
            <li>Accounting, GST filing, income tax filing, and financial reporting</li>
            <li>Customised solutions for specific needs like project reports or turnover certificates</li>
        </ul>
        <a href="/small-business-registration" class="btn btn-secondary">Explore Our Services for Small Businesses</a>

        <h3>For One Person Company</h3>
        <p>We specialize in the OPC registration process, helping entrepreneurs navigate the complexities of legal formalities at an optimal cost. Our experienced team offers guidance at every step, from document preparation to filing and compliance. Our services include:</p>
        <ul>
            <li>Company Registration (MCA, CIN, PAN, TAN)</li>
            <li>DIN & DSC for Directors</li>
            <li>Tax Registration (GST, Professional Tax) and audits</li>
            <li>Industry-Specific Certifications (FSSAI, MSME, etc.)</li>
        </ul>
        <a href="/one-person-company-registration" class="btn btn-secondary">Explore Our Services for One Person Company</a>

        <h3>For Limited Liability Partnership</h3>
        <p>Are you planning to register a limited liability partnership in India? With our expertise and experience in LLP registration and compliance landscape, we can offer extensive guidance to LLP entrepreneurs. Our services include:</p>
        <ul>
            <li>LLP Incorporation and Registration</li>
            <li>Procurement of Digital Signatures (DSC)</li>
            <li>Tax Registration (GST, Professional Tax) and audits</li>
            <li>Industry-Specific Certifications (FSSAI, MSME, etc.)</li>
        </ul>
        <a href="/partnership-firm-and-llp-registration" class="btn btn-secondary">Explore Our Services for Limited Liability Partnership</a>

        <h3>For Private & Public Companies</h3>
        <p>We can help simplify Private Limited Company and Public Company registration processes for aspiring entrepreneurs in both sectors. Our experts also offer guidance to stay ahead of the procedural and industry-specific compliance requirements. Our services include:</p>
        <ul>
            <li>LLP Incorporation and Registration</li>
            <li>Procurement of Digital Signatures (DSC)</li>
            <li>Tax Registration (GST, Professional Tax) and audits</li>
            <li>ROC filings, Industry-Specific Certifications (FSSAI, MSME, etc.) and more</li>
        </ul>
        <a href="/private-and-public-limited-company" class="btn btn-secondary">Explore Our Services for Private/Public Company</a>
    </section>

    <section class="testimonials py-5">
        <h2>Hear from our clients</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">"With Allied Business Consultancy, I was able to close the registration process of my small business effortlessly. As a freelancer, I always struggled with the compliance part of my business. Also, hiring a CFO was not feasible for a small entrepreneur like me. The experts at Allied Business Consultancy made my journey a breeze!"</p>
                        <p class="card-text"><small class="text-muted">Niranjana Sharma, Local Guide</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">"Setting up our LLP sounded like a long road to us as all the partners in our firm did not have a finance background. Thankfully, someone recommended Allied Business Consultancy. We had a very smooth registration experience under their guidance and continue to rely on their expertise to keep our business compliant."</p>
                        <p class="card-text"><small class="text-muted">Rohan Baruah</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">"Thanks, Allied Business Consultancy, for being a partner we can depend on! As we started our private company, we had no idea about the registration process. Operating in the F&B sector made compliance confusing for us. However, the experts at Allied Business Consultancy had all the answers and solutions."</p>
                        <p class="card-text"><small class="text-muted">Rahul Patil, Local Guide</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">"Tax Buddy was a breeze to work with. It's a straightforward procedure that's easy to follow. All you have to do is fill out the form with the relevant information and submit necessary documents as requested by them."</p>
                        <p class="card-text"><small class="text-muted">Subham Saurabh</small></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faqs py-5">
        <h2>Frequently Asked Questions</h2>
        <div class="accordion" id="faqsAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        What are outsourced CFO services?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#faqsAccordion">
                    <div class="accordion-body">
                        CFO services are typically performed by a full-time CFO. However, businesses can get the same services in the form of outsourced CFO services. The model offers a lot of benefits over the traditional CFO. One advantage is that you may use their expertise and experience in various business contexts to help your company thrive.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        Why should you outsource CFO services?
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#faqsAccordion">
                    <div class="accordion-body">
                        One excellent method to obtain professional help without having to pay the hefty price tag associated with it is to outsource CFO services. Even though hiring a virtual CFO is not required, they will be crucial to helping your company reach its full potential.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        What does an outsourced CFO do in a small business?
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#faqsAccordion">
                    <div class="accordion-body">
                        An outsourced CFO is an ideal solution for small organisations, which may lack the resources or expertise to effectively utilise a full-time CFO. In addition to offering access to much-needed financial guidance without the headache, engaging a virtual CFO is far less expensive than hiring an in-house CFO.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        What services does Allied Business Consultancy provide?
                    </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#faqsAccordion">
                    <div class="accordion-body">
                        Allied Business Consultancy offers a broad range of services related to company registration and compliance requirements. It serves businesses of all kinds, from small businesses to Limited Liability Partnerships, one-person companies, and private limited companies.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                        What is the coordination process we follow?
                    </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#faqsAccordion">
                    <div class="accordion-body">
                        One of our specialists, like a CS or CA, will be assigned to your request and set up a routine appointment with you. All you need to do is give us up-to-date information so we can function effectively. A special request number will be assigned to you so you can monitor your project. To accomplish this, you need to respond to our questions frequently.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading6">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                        How long will be the process?
                    </button>
                </h2>
                <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#faqsAccordion">
                    <div class="accordion-body">
                        The timeline we work for our client entirely depends on their needs. We may help you with the registration and compliance guidance during the initial stage of your business. Alternatively, we offer assistance as long as you require it.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading7">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                        Can startups afford outsourced CFO services?
                    </button>
                </h2>
                <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#faqsAccordion">
                    <div class="accordion-body">
                        For startups, outsourced CFOs offer the best guidance on registration and compliance processes. Any startup can afford them because they are affordable. They help your company grow and outperform the competition in the market.
                    </div>
                </div>
            </div>
        </div>
        <p>Do you have more questions? <a href="/contact">Get in Touch</a></p>
    </section>
</div>
@endsection</content>
<parameter name="filePath">d:\xampp\htdocs\Allied_Business_consultancy\resources\views\pages\mybizcfo.blade.php