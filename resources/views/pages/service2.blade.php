@extends('layouts.app')

@section('title', 'Service 2 - Allied Business Consultancy')

@section('content')
    <!-- Breadcrumb Area  -->

    <div class="breadcrumb-area services section-padding light-bg-1 pb-0">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 offset-md-1 col-md-10 col-12 text-center">
                    <div class="section-title">
                        <p>Our Services</p>
                        <h2>Audit & Assurancy Services</h2>
                    </div>
                </div>
            </div>
            
            <div class="row mt-90">
                <div class="col-12">
                    <div class="bread-bg">
                        <img src="{{ asset('frontend/servise_files/service_banner.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Section  -->

    <div class="service-section service-two section-padding">
        <div class="container">            
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-service-item mt-30">
                        <div class="single-service-inner">
                            <h5><a href="#">01/   Insurance Tax</a></h5>
                            <p>There are many variations of passages of Lorem Ipsum <br> available, but the majority </p>
                            <a href="#" class="details-link"><i class="las la-arrow-right"></i></a>
                        </div>  
                        <div class="service-img">
                            <img src="{{ asset('frontend/servise_files/service-1.jpg') }}" alt="">
                        </div>                      
                    </div>
                    <div class="single-service-item">
                        <div class="single-service-inner">
                            <h5><a href="#">02/   Audit &amp; Assurancy</a></h5>
                            <p>There are many variations of passages of Lorem Ipsum <br> available, but the majority </p>
                            <a href="#" class="details-link"><i class="las la-arrow-right"></i></a>
                        </div>    
                        <div class="service-img">
                            <img src="{{ asset('frontend/servise_files/service-2.jpg') }}" alt="">
                        </div>                                          
                    </div>
                    <div class="single-service-item">
                        <div class="single-service-inner">
                            <h5><a href="#">03/   Strategic Planning</a></h5>
                            <p>There are many variations of passages of Lorem Ipsum <br> available, but the majority </p>
                            <a href="#" class="details-link"><i class="las la-arrow-right"></i></a>
                        </div> 
                        <div class="service-img">
                            <img src="{{ asset('frontend/servise_files/service-3.jpg') }}" alt="">
                        </div>                                             
                    </div>
                    <div class="single-service-item">
                        <div class="single-service-inner">
                            <h5><a href="#">04/   Financial Planning</a></h5>
                            <p>There are many variations of passages of Lorem Ipsum <br> available, but the majority </p>
                            <a href="#" class="details-link"><i class="las la-arrow-right"></i></a>
                        </div>  
                        <div class="service-img">
                            <img src="{{ asset('frontend/servise_files/service-4.jpg') }}" alt="">
                        </div>                                            
                    </div>
                    <div class="single-service-item">
                        <div class="single-service-inner">
                            <h5><a href="#">05/   Project Management</a></h5>
                            <p>There are many variations of passages of Lorem Ipsum <br> available, but the majority </p>
                            <a href="#" class="details-link"><i class="las la-arrow-right"></i></a>
                        </div>  
                        <div class="service-img">
                            <img src="{{ asset('frontend/servise_files/service-5.jpg') }}" alt="">
                        </div>                                            
                    </div>                     
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 text-center mt-60">
                    <a class="main-btn" href="#">View All Services</a>                   
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us  -->
    <div class="choose-us-section section-padding light-bg-1">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 text-center">
                    <div class="section-title">
                        <p>WHY CHOOSE US</p>
                        <h2>We Provide High-Quality Accounting 
                            &amp; Tax Service</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="single-feature-item mt-60">                        
                            <div class="feature-icon">
                                <i class="flaticon-goal"></i>
                            </div>
                            <div class="feature-title">
                                <h4>Years Experience</h4>
                            </div>                        
                        <p class="text-black">Many desktop packages and web page editors now use Lorem</p>                                                    
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="single-feature-item">                        
                            <div class="feature-icon">
                                <i class="flaticon-group"></i>
                            </div>
                            <div class="feature-title">
                                <h4>Expert Team</h4>
                            </div>                        
                        <p class="text-black">Many desktop packages and web page editors now use Lorem</p>                                                    
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="single-feature-item mt-60">                        
                            <div class="feature-icon">
                                <i class="flaticon-innovation"></i>
                            </div>
                            <div class="feature-title">
                                <h4>Worldwide Client</h4>
                            </div>                        
                        <p class="text-black">Many desktop packages and web page editors now use Lorem</p>                                                    
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="single-feature-item">                        
                            <div class="feature-icon">
                                <i class="flaticon-customer-service"></i>
                            </div>
                            <div class="feature-title">
                                <h4>24/7 Full Support</h4>
                            </div>                        
                        <p class="text-black">Many desktop packages and web page editors now use Lorem</p>                                                    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section  -->

    <div class="cta-area cta-two" data-background="assets/img/cta_bg_2.jpg" style="background-image: url('assets/img/cta_bg_2.jpg');">        
        <div class="cta-inner-text">
            <div class="text-left">
                <h2 class="text-white">1K+ Satisfied Clients</h2>
            </div>
            <div class="text-right">
                <h2 class="text-white">120+EXPERT TEAM</h2>
            </div>           
        </div>
    </div>

    <!-- Process Section  -->
    <div class="process-section process-two section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="process-bg">
                        <img src="{{ asset('frontend/servise_files/process_bg-2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="process-content-wrap">
                        <div class="section-title">
                            <p>Our Process</p>
                            <h2>Our Working Process</h2>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority suffered alteration in some form, by injected humour, or randomised which don't look even slightly believable. </p>
                        <div class="single-process-item">
                            <div class="process-icon">
                                <i class="flaticon-research"></i>
                            </div>
                            <div class="process-content">
                                <h4>Research</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                        </div>
                        <div class="single-process-item">
                            <div class="process-icon">
                                <i class="flaticon-idea"></i>
                            </div>
                            <div class="process-content">
                                <h4>Idea Generate</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                        </div>
                        <div class="single-process-item">
                            <div class="process-icon">
                                <i class="flaticon-rocket"></i>
                            </div>
                            <div class="process-content">
                                <h4>Launch</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Section  -->
    <div class="pricing-section section-padding pb-90 light-bg-1">
        <div class="container">
            <div class="row">
                <div class="offset-xl-3 col-xl-6 text-center">
                    <div class="section-title">
                        <p>Our Pricing PLANS</p>
                        <h2>Simple, Transparent And 
                            Affordable Pricing</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="single-pricing-item mt-30">
                        <div class="pricing-header">
                            <h4>Basic Plan</h4>
                            <h2>$29<span>/month</span></h2>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <li><i class="las la-check-circle"></i> 5 Projects</li>
                                <li><i class="las la-check-circle"></i> 100GB Storage</li>
                                <li><i class="las la-check-circle"></i> Unlimited Users</li>
                                <li><i class="las la-check-circle"></i> 24/7 Support</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="main-btn">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="single-pricing-item pricing-active">
                        <div class="pricing-header">
                            <h4>Standard Plan</h4>
                            <h2>$49<span>/month</span></h2>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <li><i class="las la-check-circle"></i> 10 Projects</li>
                                <li><i class="las la-check-circle"></i> 500GB Storage</li>
                                <li><i class="las la-check-circle"></i> Unlimited Users</li>
                                <li><i class="las la-check-circle"></i> 24/7 Support</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="main-btn">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="single-pricing-item mt-30">
                        <div class="pricing-header">
                            <h4>Premium Plan</h4>
                            <h2>$99<span>/month</span></h2>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <li><i class="las la-check-circle"></i> Unlimited Projects</li>
                                <li><i class="las la-check-circle"></i> Unlimited Storage</li>
                                <li><i class="las la-check-circle"></i> Unlimited Users</li>
                                <li><i class="las la-check-circle"></i> 24/7 Support</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="main-btn">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section  -->

    <div class="cta-area cta-three bg-cover" data-background="assets/img/cta_bg.png" style="background-image: url('assets/img/cta_bg.png');">
        <div class="overlay"></div>
        <div class="cta-area-inner pt-100">
            <div class="container">
                <div class="offset-xl-2 col-xl-6 offset-lg-1 col-lg-6 col-md-8">
                    <div class="section-title">
                        <p>GET STARTED</p>
                        <h2 class="text-white">Changing Your Lives, 
                            Changing Your Future</h2>
                    </div>
                    <a href="/about" class="main-btn mt-20">Discover More</a>                    
                </div>

                <div class="offset-xl-4 col-xl-7 offset-lg-4 col-lg-7 offset-md-4 col-md-7">
                    <p class="text-white">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words look even slightly believable. If you are going to use a passage </p>
                </div>
                            
                
                <div class="pop-up-video">
                    <a href="https://www.youtube.com/watch?v=yFwGpiCs3ss" class="video-play-btn mfp-iframe">
                        <i class="las la-play"></i> <span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Collaboration Section  -->
    <div class="collaboration-section section-padding">
    <div class="container">
        <div class="row">
            <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 text-center">
                <div class="section-title">
                    <p>Let's Collaboration</p>
                    <h2>This Could Be The Start Of Something 
                        Special Let's Work Together!</h2>
                </div>
                <a href="/contact" class="main-btn">Get In Touch</a>
            </div>
        </div>
        <div class="row mt-60">
            <div class="col-12">
                <div class="instagram-wrap">
                    <a href="#" class="single-instagram-item">
                        <img src="{{ asset('frontend/servise_files/1.jpg') }}" alt="">
                        <div class="insta-overlay">
                            <i class="lab la-instagram"></i>
                        </div>
                    </a>
                    <a href="#" class="single-instagram-item">
                        <img src="{{ asset('frontend/servise_files/2.jpg') }}" alt="">
                        <div class="insta-overlay">
                            <i class="lab la-instagram"></i>
                        </div>
                    </a>
                    <a href="#" class="single-instagram-item">
                        <img src="{{ asset('frontend/servise_files/3.jpg') }}" alt="">
                        <div class="insta-overlay">
                            <i class="lab la-instagram"></i>
                        </div>
                    </a>
                    <a href="#" class="single-instagram-item">
                        <img src="{{ asset('frontend/servise_files/4.jpg') }}" alt="">
                        <div class="insta-overlay">
                            <i class="lab la-instagram"></i>
                        </div>
                    </a>
                    <a href="#" class="single-instagram-item">
                        <img src="{{ asset('frontend/servise_files/5.jpg') }}" alt="">
                        <div class="insta-overlay">
                            <i class="lab la-instagram"></i>
                        </div>
                    </a>
                    <a href="#" class="single-instagram-item">
                        <img src="{{ asset('frontend/servise_files/6.jpg') }}" alt="">
                        <div class="insta-overlay">
                            <i class="lab la-instagram"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="instagram-shape">
        <img src="{{ asset('frontend/servise_files/instagram_shape.png') }}" alt="">
    </div>
    </div>

    <!-- Client Area  -->
    <div class="clients-area section-padding">
        <div class="client-logo-wrap">
            <img src="{{ asset('frontend/servise_files/themeforest.png') }}" alt="themeforest-logo">
            <img src="{{ asset('frontend/servise_files/codecanyon.png') }}" alt="codecanyon-logo">
            <img src="{{ asset('frontend/servise_files/videohive.png') }}" alt="videohibe-logo">
            <img src="{{ asset('frontend/servise_files/graphicriver.png') }}" alt="graphicriver-logo">
        </div>
    </div>

    <!-- Contact Section  -->
    <div class="contact-area section-padding pt-0">
        <div class="container">
            <div class="contact-section-inner dark-bg">
                <div class="contact-section-content">
                    <h2 class="text-white">Want to work with us?</h2>
                    <h5 class="text-white">Meet our people. See our work. Join our team.</h5>
                    <a href="/contact" class="main-btn">Contact With Us</a>
                </div>                
            </div>
        </div>
        
    </div>

@endsection
