@extends('layouts.app')

@section('title', 'Contact Us - Allied Business Consultancy')

@section('content')
<style>
    .contact-info-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 80px 0;
    }
    .contact-info-item {
        padding: 40px 30px;
        background: white;
        border-radius: 15px;
        margin-bottom: 30px;
        transition: all 0.3s ease;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        border: 1px solid #e9ecef;
        height: 100%;
        position: relative;
        overflow: hidden;
    }
    .contact-info-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #28a745, #20c997);
    }
    .contact-info-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    }
    .contact-icon {
        width: 90px;
        height: 90px;
        background: linear-gradient(135deg, #28a745, #20c997);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
        position: relative;
        box-shadow: 0 8px 25px rgba(40, 167, 69, 0.3);
    }
    .contact-icon::before {
        content: '';
        position: absolute;
        top: -5px;
        left: -5px;
        right: -5px;
        bottom: -5px;
        border-radius: 50%;
        background: linear-gradient(135deg, #28a745, #20c997);
        opacity: 0.2;
        z-index: -1;
    }
    .contact-icon i {
        font-size: 35px;
        color: white;
        z-index: 1;
    }
    .contact-info-item h5 {
        color: #2c3e50;
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 15px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .contact-info-item p {
        color: #6c757d;
        font-size: 16px;
        line-height: 1.6;
        margin: 0;
    }
    .contact-info-item p a {
        color: #28a745;
        text-decoration: none;
        font-weight: 600;
        transition: color 0.3s ease;
    }
    .contact-info-item p a:hover {
        color: #20c997;
        text-decoration: underline;
    }
    .contact-form-wrap {
        background: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        max-width: 600px;
        margin: 0 auto;
    }
    .form-row {
        margin-bottom: 15px;
    }
    .form-group {
        width: 100%;
        margin-bottom: 0;
    }
    .form-control {
        width: 100%;
        border: 2px solid #e9ecef;
        border-radius: 8px;
        padding: 12px 20px;
        font-size: 16px;
        transition: all 0.3s ease;
        background: white;
        color: #495057;
        font-weight: 500;
        margin: 0;
    }
    .form-control:focus {
        border-color: #28a745;
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
        outline: none;
        background: #f8f9fa;
    }
    .form-control.is-invalid {
        border-color: #dc3545;
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }
    .form-control::placeholder {
        color: #6c757d;
        font-weight: 400;
    }
    
    /* Select dropdown specific styling */
    select.form-control {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
        background-position: right 12px center;
        background-repeat: no-repeat;
        background-size: 16px 12px;
        padding-right: 40px;
        padding-top: 12px;
        padding-bottom: 12px;
        height: auto;
        appearance: none;
        cursor: pointer;
        text-align: left;
        text-indent: 0;
    }
    select.form-control:focus {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%2328a745' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
    }
    
    select.form-control option {
        padding: 10px;
        color: #495057;
    }
    
    /* Textarea specific styling */
    textarea.form-control {
        resize: vertical;
        min-height: 120px;
        font-family: inherit;
        line-height: 1.5;
        margin-top: 0;
    }
    textarea.form-control:focus {
        min-height: 140px;
    }
    .main-btn {
        background: #ff6b35;
        color: white;
        padding: 15px 40px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        font-weight: 600;
        transition: all 0.3s ease;
        cursor: pointer;
        width: 100%;
    }
    .main-btn:hover {
        background: #e55a2b;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    .main-btn:disabled {
        background: #6c757d;
        cursor: not-allowed;
        transform: none;
    }
    .map-wrapper {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }
    .working-hours-content {
        background: #f8f9fa;
        padding: 40px;
        border-radius: 10px;
    }
    .hours-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 0;
        border-bottom: 1px solid #dee2e6;
    }
    .hours-item:last-child {
        border-bottom: none;
    }
    .day {
        font-weight: 600;
        color: #2c3e50;
    }
    .time {
        color: #6c757d;
    }
    .alert {
        border-radius: 8px;
        margin-bottom: 20px;
    }
</style>

<!-- Page Title Section -->
<div class="page-title-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center">
                <div class="page-title-content">
                    <h1>Contact Us</h1>
                    <p>Get in touch with our expert team for all your business consultancy needs</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Info Section -->
<div class="contact-info-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <div class="section-title">
                    <h6 style="color: #28a745; font-size: 14px; font-weight: 600; letter-spacing: 2px; margin-bottom: 10px;">CONTACT INFORMATION</h6>
                    <h2 style="color: #2c3e50; font-size: 36px; font-weight: 700; margin-bottom: 15px;">Get In Touch</h2>
                    <p style="color: #6c757d; font-size: 16px; max-width: 600px; margin: 0 auto;">We're here to help you with all your business consultancy needs. Reach out to us through any of the following ways.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-4">
                <div class="contact-info-item text-center">
                    <div class="contact-icon">
                        <i class="las la-map-marker-alt"></i>
                    </div>
                    <h5>Our Address</h5>
                    <p>M-02, Meznine Floor, Shree Amar Heights, DCM, Ajmer Road, Nirman Nagar, Jaipur 302019</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-4">
                <div class="contact-info-item text-center">
                    <div class="contact-icon">
                        <i class="las la-phone"></i>
                    </div>
                    <h5>Phone Number</h5>
                    <p><a href="tel:+917300070618">+91 7300070618</a></p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-4">
                <div class="contact-info-item text-center">
                    <div class="contact-icon">
                        <i class="las la-envelope"></i>
                    </div>
                    <h5>Email Address</h5>
                    <p><a href="mailto:Alliedbusinessconsultancy@gmail.com">Alliedbusinessconsultancy@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Form Section -->
<div class="contact-form-section section-padding white-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-12 mx-auto">
                <div class="section-title text-center mb-5">
                    <h6 style="color: #28a745; font-size: 14px; font-weight: 600; letter-spacing: 2px; margin-bottom: 10px;">GET IN TOUCH</h6>
                    <h2 style="color: #2c3e50; font-size: 36px; font-weight: 700; margin-bottom: 15px;">Send Us a Message</h2>
                    <p style="color: #28a745; font-size: 16px; margin-bottom: 0;">We're here to help and answer any question you might have. We look forward to hearing from you.</p>
                </div>
                
                <div class="contact-form-wrap">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    <!-- Session messages are displayed above -->

                    <form class="contact-form" action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name *" required value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Your Email *" required value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <input type="tel" name="phone" class="form-control" placeholder="Your Phone" require value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <select name="subject" class="form-control" required value="{{ old('subject') }}">
                                    <option value="" disabled selected style="color: #6c757d;">Select Subject *</option>
                                    <option value="Tax Consultancy">Tax Consultancy</option>
                                    <option value="Business Setup">Business Setup</option>
                                    <option value="Audit Services">Audit Services</option>
                                    <option value="Financial Planning">Financial Planning</option>
                                    <option value="General Inquiry">General Inquiry</option>
                                </select>
                                @error('subject')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-row" style="margin-top: 20px;">
                            <div class="form-group">
                                <textarea name="user_message" class="form-control" rows="6" placeholder="Your Message *" required value="{{ old('user_message') }}" style="margin-top: 0;"></textarea>
                                @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <button type="submit" class="main-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Map Section -->
<div class="map-section">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="map-wrapper">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.123456789!2d75.8123456789!3d26.9123456789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db5a8c2b8c123%3A0x1234567890abcdef!2sNirman%20Nagar%2C%20Jaipur%2C%20Rajasthan%20302019!5e0!3m2!1sen!2sin!4v1234567890123!5m2!1sen!2sin"
                        width="100%" 
                        height="400" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Working Hours Section -->
<div class="working-hours-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-12 mx-auto">
                <div class="working-hours-content text-center">
                    <h3>Working Hours</h3>
                    <div class="hours-list">
                        <div class="hours-item">
                            <span class="day">Monday - Saturday</span>
                            <span class="time">09:00 AM - 05:00 PM</span>
                        </div>
                        <div class="hours-item">
                            <span class="day">Sunday</span>
                            <span class="time">Closed</span>
                        </div>
                    </div>
                    <p class="mt-3">We're available during business hours to assist you with all your consultancy needs.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="faq-section section-padding dark-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-12 mx-auto">
                <div class="section-title text-center">
                    <h6>FREQUENTLY ASKED QUESTIONS</h6>
                    <h2 class="text-white">Quick Answers</h2>
                    <p class="text-white">Find answers to common questions about our services</p>
                </div>
                
                <div class="accordion faqs" id="contactFaq">
                    <div class="card">
                        <div class="card-header" id="faq1">
                            <h5 class="mb-0 subtitle">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq1" aria-expanded="false" aria-controls="collapseFaq1">
                                    How quickly can you respond to my inquiry?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFaq1" class="collapse" aria-labelledby="faq1" data-parent="#contactFaq">
                            <div class="card-body">
                                <p>We typically respond to all inquiries within 24 hours during business days. For urgent matters, please call us directly.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header" id="faq2">
                            <h5 class="mb-0 subtitle">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq2" aria-expanded="false" aria-controls="collapseFaq2">
                                    What services do you offer?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFaq2" class="collapse" aria-labelledby="faq2" data-parent="#contactFaq">
                            <div class="card-body">
                                <p>We offer comprehensive business consultancy services including tax consultancy, business setup, audit services, financial planning, and strategic consulting.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header" id="faq3">
                            <h5 class="mb-0 subtitle">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq3" aria-expanded="false" aria-controls="collapseFaq3">
                                    Do you offer free consultations?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFaq3" class="collapse" aria-labelledby="faq3" data-parent="#contactFaq">
                            <div class="card-body">
                                <p>Yes, we offer free initial consultations to understand your needs and provide preliminary guidance on your business requirements.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    // Form validation and submission
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('.contact-form');
        
        form.addEventListener('submit', function(e) {
            // Basic form validation
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('is-invalid');
                } else {
                    field.classList.remove('is-invalid');
                }
            });
            
            if (isValid) {
                // Show loading state
                const submitBtn = form.querySelector('button[type="submit"]');
                const originalText = submitBtn.textContent;
                submitBtn.textContent = 'Sending...';
                submitBtn.disabled = true;
                
                // Allow form to submit normally
                // The form will be submitted to the server
            } else {
                e.preventDefault();
            }
        });
    });
</script>
@endsection
