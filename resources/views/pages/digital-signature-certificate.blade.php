@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Digital Signature Certificate</h1>

    <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-body">
                    <h2>What is Digital Signature Certificate (DSC)?</h2>
                    <p>A Digital Signature Certificate (DSC) is a secure digital key that certifies the identity of the holder, issued by a Certifying Authority (CA). It is used to sign documents electronically, ensuring authenticity and integrity.</p>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h2>Why is DSC Needed?</h2>
                    <p>Because business registration is done online, all parties involved in the company must have digital signatures. They can put on the various papers that need to be submitted via the MCA portal during the registration process.</p>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h2>Types of DSC</h2>
                    <ul>
                        <li>Class 2: For e-filing and e-tendering</li>
                        <li>Class 3: For high-security applications</li>
                    </ul>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h2>Process to Obtain DSC</h2>
                    <ol>
                        <li>Apply online with required documents</li>
                        <li>Verification by CA</li>
                        <li>Issuance of DSC</li>
                    </ol>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h2>Pricing</h2>
                    <p>Digital Signature Certificate (DSC): ₹2,500 per person (if required)</p>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h2>Documents Required</h2>
                    <ul>
                        <li>PAN Card (mandatory)</li>
                        <li>Address Proof – Bank/Utility Bill, Aadhar, Passport, or DL (≤2 months old)</li>
                        <li>Passport-size Photo</li>
                        <li>Identity Proof – Aadhar / Voter ID / Passport / DL</li>
                        <li>Email, Mobile, Qualification, Occupation, Place of Birth</li>
                    </ul>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h2>Why Choose Allied Business Consultancy?</h2>
                    <p>At Allied Business Consultancy, we handle and adhere to all legal requirements as listed by the Ministry of Corporate Affairs. It only takes a few simple steps to register your company: submitting the required paperwork. Our team of knowledgeable CAs, CSs, and accountants will actively work with you to answer any questions you may have.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h2>Testimonials</h2>
                    <p>"Allied Business Consultancy made obtaining my DSC hassle-free. Highly recommended!" - Client</p>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h2>Contact Us</h2>
                    <a href="/contact" class="btn btn-primary">Get Started</a>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion" id="faqAccordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What is the validity of DSC?
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                <div class="card-body">
                    DSC is valid for 1-3 years depending on the type.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How long does it take to get DSC?
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                <div class="card-body">
                    It usually takes 1-2 days after verification.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection