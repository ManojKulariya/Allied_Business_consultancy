@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Company Registration Online</h1>

    <div class="card mb-4">
        <div class="card-body">
            <h2>Simplifying the Online Company Registration Process</h2>
            <p>Are you confused about picking the right structure for your business? We are here to guide you, from choosing the business structure to completing the registration process in a few clicks.</p>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h2>Steps of Registration and Incorporation</h2>
            <ol>
                <li>Select an Appropriate Business Structure</li>
                <li>Select Business Name</li>
                <li>Get Director Identification Number (DIN)</li>
                <li>Obtain Digital Signature Certificate (DSC)</li>
                <li>Register on the MCA (Ministry of Corporate Affairs) Portal</li>
                <li>Get a Certificate of Incorporation</li>
            </ol>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h2>Why Should You Consider Company Registration</h2>
            <ul>
                <li>Offers you a certain amount of legal protection and boosts your reputation in the community.</li>
                <li>Members of the company have limited accountability in relation to the debts of the firm.</li>
                <li>Can borrow more money once your business is legally incorporated.</li>
                <li>Promoters seeking to raise equity capital have no other option than to work with the firm.</li>
            </ul>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h2>Taxbuddy Pricing</h2>
            <h3>Private / LLP / OPC Company Registration</h3>
            <p>₹9,999 (Exclusive of statutory and stamp duty fees)</p>
            <h3>Public Limited Company Registration</h3>
            <p>₹14,999 (Exclusive of statutory and stamp duty fees)</p>
            <h3>Additional Fees</h3>
            <ul>
                <li>Name Reservation: ₹1,000</li>
                <li>Incorporation Fees: ₹1,000 onwards</li>
                <li>Digital Signature Certificate (DSC): ₹2,500 per person (if required)</li>
            </ul>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h2>Documents Required for Company Registration</h2>
            <p>You need to submit a few general documents for registration of LLP, One Person Company, Private Limited, and Public Limited Company.</p>
            <h4>For Directors & Shareholders</h4>
            <ul>
                <li>Private Ltd: 2 Directors & 2 Shareholders</li>
                <li>OPC: 1 Director + 1 Nominee</li>
                <li>PAN Card (mandatory)</li>
                <li>Address Proof – Bank/Utility Bill, Aadhar, Passport, or DL (≤2 months old)</li>
                <li>Passport-size Photo</li>
                <li>Identity Proof – Aadhar / Voter ID / Passport / DL</li>
            </ul>
            <h4>For the Company / Registered Office</h4>
            <ul>
                <li>Latest Electricity or Utility Bill</li>
                <li>Rent Agreement + NOC (if rented) / Ownership Proof (if owned)</li>
            </ul>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h2>Why Choose Allied Business Consultancy for Company Registration?</h2>
            <p>Companies operating in India are subject to a number of rules and regulations set forth by the Ministry of Corporate Affairs. At Allied Business Consultancy, we handle and adhere to all legal requirements. It only takes a few simple steps to register your company: submitting the required paperwork. Our team of knowledgeable CAs, CSs, and accountants will actively work with you to answer any questions you may have.</p>
        </div>
    </div>

    <div class="accordion" id="faqAccordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Where can I register my company?
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                <div class="card-body">
                    You can register your company online through the MCA portal.
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="/contact" class="btn btn-primary">Contact Us</a>
    </div>
</div>
@endsection