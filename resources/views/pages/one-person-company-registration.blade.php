@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">One-Person Company Registration</h1>

    <div class="card mb-4">
        <div class="card-body">
            <h2>What is a One-Person Company (OPC)?</h2>
            <p>A One-Person Company (OPC) is a type of private limited company that has only one director and one shareholder. It combines the benefits of a sole proprietorship with the legal structure of a company.</p>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h2>Benefits of OPC</h2>
            <ul>
                <li>Limited liability protection</li>
                <li>Separate legal entity</li>
                <li>Easier to raise funds</li>
                <li>Perpetual succession</li>
            </ul>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h2>Process to Register OPC</h2>
            <ol>
                <li>Obtain DIN (Director Identification Number)</li>
                <li>Obtain DSC (Digital Signature Certificate)</li>
                <li>Apply for name approval</li>
                <li>File incorporation documents with MCA</li>
                <li>Obtain Certificate of Incorporation</li>
            </ol>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h2>Documents Required</h2>
            <ul>
                <li>PAN Card of the director</li>
                <li>Aadhaar Card</li>
                <li>Address proof</li>
                <li>Passport-size photo</li>
                <li>Registered office address proof</li>
            </ul>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h2>Pricing</h2>
            <p>OPC Registration: ₹9,999 (Exclusive of statutory and stamp duty fees)</p>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h2>Why Choose Allied Business Consultancy?</h2>
            <p>At Allied Business Consultancy, we simplify the OPC registration process. Our experts handle all the paperwork and ensure compliance with MCA regulations.</p>
        </div>
    </div>

    <div class="accordion" id="faqAccordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Can an OPC have more than one director?
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                <div class="card-body">
                    No, an OPC can have only one director, but it must appoint a nominee director.
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="/contact" class="btn btn-primary">Contact Us</a>
    </div>
</div>
@endsection