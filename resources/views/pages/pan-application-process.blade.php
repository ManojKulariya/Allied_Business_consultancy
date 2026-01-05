@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">PAN Application Process Simplified</h1>
    <p class="text-center">Are you worried about applying your PAN online? Do the steps seem too overwhelming to handle alone? At Allied Business Consultancy, we simplify the process for you with our expert guidance!</p>

    <div class="card mb-4">
        <div class="card-body">
            <h2>How to Apply for a PAN Card Online</h2>
            <h3>Steps for Application via the NSDL Website</h3>
            <ol>
                <li>Go to the NSDL website and choose the "New PAN Indian Citizen (Form 49A)" PAN card application.</li>
                <li>Complete the form with all of the information. Before entering your information on the PAN card application form, carefully read the instructions.</li>
                <li>Make the necessary payment. The choice you select for the PAN card's dispatch will determine the PAN card application fees. Demand drafts, credit/debit cards, and online banking are the available payment methods.</li>
                <li>Mail or courier the necessary paperwork to the NSDL office in Pune.</li>
            </ol>
            <h3>Steps for Application via UTIITSL Website</h3>
            <ol>
                <li>Complete the online PAN card application at UTIITSL.</li>
                <li>Proceed to pay the application fee.</li>
                <li>Within 15 days of Form 49A's online submission, send the supporting documentation by courier to the UTIITSL office.</li>
            </ol>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h2>How to Apply for a PAN Card Offline</h2>
            <ol>
                <li>Get the "Form 49A" file from the NSDL e-Gov portal.</li>
                <li>Complete the application's details.</li>
                <li>Enclose your photo and signature with the application.</li>
                <li>Send the completed form to the closest PAN center along with the necessary paperwork.</li>
                <li>Complete the PAN card application fees.</li>
                <li>You will receive an acknowledgement number that you can use to check on the progress of your PAN card application.</li>
            </ol>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h2>Pricing</h2>
            <p>PAN Application Pricing: ₹499/- (Including Courier)</p>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h2>Documents Required for PAN Card Application</h2>
            <ul>
                <li>Identity proof: Aadhaar card, voter ID card, passport, driver's license, or any other photo ID issued by the government.</li>
                <li>Proof of address: Utility bill, bank account statement, voter ID card, passport, or Aadhaar card.</li>
                <li>Proof of birth: Passport, birth certificate, Aadhaar card, or any other official government document.</li>
                <li>Registration certificate (for businesses, associations, HUFs, and persons).</li>
            </ul>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h2>PAN Card Forms</h2>
            <ul>
                <li>Form 49A: Indian individuals/entities/minors and students</li>
                <li>Form 49AA: Foreigners</li>
            </ul>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h2>Steps to Update or Correct a PAN Card</h2>
            <ol>
                <li>Go to the NSDL website and use the online application form to modify or update your PAN information.</li>
                <li>Cover the relevant application costs. Credit/debit cards, demand drafts, and net banking are the available payment methods.</li>
                <li>Following acceptance of your application and payment, you must mail or courier supporting documents to NSDL.</li>
            </ol>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h2>Why Choose Allied Business Consultancy for Online PAN Application</h2>
            <p>PAN Card is a necessity for all individuals and business organizations liable for paying taxes. At Allied Business Consultancy, we help you with the PAN application process, whether you want to apply online or offline. Our team of knowledgeable experts will actively work with you to guide you and answer any queries you may have along the way.</p>
        </div>
    </div>

    <div class="accordion" id="faqAccordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        How can I submit an application for a PAN card?
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                <div class="card-body">
                    A PAN card application is available online and offline. Applying for a PAN online is possible via the UTIITSL website or the TIN NSDL website. By going to a PAN center, you can submit an offline PAN application.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What is having a PAN essential?
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                <div class="card-body">
                    If you fail to provide your PAN, you will be unable to file your ITR. The deactivation of all bank accounts unconnected to PAN is imminent. Additionally, if you want to make cash transactions over Rs 50,000, you must provide your PAN.
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="/contact" class="btn btn-primary">Contact Us</a>
    </div>
</div>
@endsection