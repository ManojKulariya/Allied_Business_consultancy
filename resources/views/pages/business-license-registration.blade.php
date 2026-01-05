@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Business License Registration</h1>
    <p class="text-center">Are you ready to start a business in India? Getting a license is the first thing you need to do.</p>

    <div class="card mb-4">
        <div class="card-body">
            <h2>Why Should You Obtain a Business License?</h2>
            <p>A business license is a type of permission a firm requires from state or other government body mandates to conduct business. The kind of business licenses and permits you need depend on your location and commercial operations. Here are a few reasons to obtain it:</p>
            <ul>
                <li>Stay on the right side of regulatory compliance</li>
                <li>Avoid fines, penalties, or the risk of closure</li>
                <li>Ensure a structured and monitored business environment</li>
                <li>Foster trust, transparency, and accountability</li>
                <li>Minimise stress and long-term financial implications</li>
            </ul>
        </div>
    </div>

    <h2>Types of Business Licenses in India</h2>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5>FSSAI Registration</h5>
                    <p>Food businesses need to obtain an FSSAI license to ensure compliance with the prescribed food safety standards. Beyond compliance, this license shows your firm's commitment to maintaining public health and minimising the risk of foodborne illnesses.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5>Shop and Establishment Act</h5>
                    <p>Are you planning to start a commercial establishment like a shop, restaurant, or theater? You need more than a location and setup to get your business off the mark. You must register with the State Labour Department to ensure legal compliance under the Shop and Establishment Act.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5>Import Export Code</h5>
                    <p>If you have global expansion in mind, you must obtain the 10-digit Import Export Code (IEC) to import or export goods and services. IEC registration enables you to participate in global trade for a lifetime as it does not require renewal.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5>Udyog Aadhaar Online</h5>
                    <p>Small and medium businesses need to register themselves with the Udyog Aadhaar number issued by the Ministry of Micro, Small, and Medium Enterprises (MSME). This 12-digit unique identification number is a part of the government initiative to support MSMEs with various benefits.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5>Trade License</h5>
                    <p>A trade license enables individuals or companies to engage in commercial activities within a specific jurisdiction. It is a seal of trust validating the organisation's adherence to the safety standards issued by the State Municipal Corporation.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion" id="faqAccordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What is a business license?
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                <div class="card-body">
                    A business license is an official document issued by the government that enables your company to conduct lawful business in a specific area.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What is the cost of a business license in India?
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                <div class="card-body">
                    Depending on the kind of business, the location, and other factors, a business license in India might cost different amounts.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Is a business license the same as a permit?
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                <div class="card-body">
                    A business license is not the same as a permit. While permits ensure that your business adheres to safety and preventative measures, business licenses attest to your company's compliance with state legislation.
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="/contact" class="btn btn-primary">Contact Us for Assistance</a>
    </div>
</div>
@endsection