@extends('layouts.app')

@section('title', 'Home - Allied Business Consultancy')

@section('content')

<!-- Hero Area  -->
<div class="hero-area light-bg-2">
    <div class="container">                
        <div class="hero-area-content wow fadeInUp animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">            
            <h3>Your Trusted Tax Advisor.</h3>
            <h1>Trustworthy Tax <br>Advice</h1>            
            <p>Duis aute irure dolor in reprehenderit in voluptate 
velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint sunt 
in culpa qui officia deserunt <a href="#about">Discover More</a> </p>                    
        </div>
    </div>
</div>

<!-- Feature Section  -->
<div class="feature-section section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center">
                <div class="section-title">
                    <h2>We Have Than More <a href="#about">5 Years of Experience</a> <br>
                        in Tax Advisor & Financial Consulting <br>
                        Services</h2>
                </div>
            </div>
        </div>
        <div class="row mt-60">
            <div class="col-xl-4 col-lg-4 col-md-6 col-12 wow fadeInUp animated" data-wow-delay="100ms" style="visibility: hidden; animation-delay: 100ms; animation-name: none;">
                <div class="feature-item-wrap">
                    <div class="feature-icon">
                        <i class="flaticon-quality"></i>
                    </div>
                    <div class="feature-content">
                        <h4>Quality Services</h4>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit magni</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-12 wow fadeInUp animated" data-wow-delay="200ms" style="visibility: hidden; animation-delay: 200ms; animation-name: none;">
                <div class="feature-item-wrap">
                    <div class="feature-icon">
                        <i class="flaticon-group"></i>
                    </div>
                    <div class="feature-content">
                        <h4>Professional Team</h4>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit magni</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-12 wow fadeInUp animated" data-wow-delay="300ms" style="visibility: hidden; animation-delay: 300ms; animation-name: none;">
                <div class="feature-item-wrap">
                    <div class="feature-icon">
                        <i class="flaticon-customer-service"></i>
                    </div>
                    <div class="feature-content">
                        <h4>24/7 Full Support</h4>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit magni</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Service Section -->
<div class="service-section white-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-12 wow fadeInLeft animated" data-wow-delay="200ms" style="visibility: hidden; animation-delay: 200ms; animation-name: none;">
                <div class="single-service-wrap">
                    <div class="single-service-inner">
                        <h5><a href="#services">Insurance Tax</a></h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
                        <a href="#services" class="details-link"><i class="las la-arrow-right"></i></a>
                    </div>
                    <div class="single-service-inner">
                        <h5><a href="#services">Audit & Assurancy</a></h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
                        <a href="#services" class="details-link"><i class="las la-arrow-right"></i></a>
                    </div>
                    <div class="single-service-inner">
                        <h5><a href="#services">Strategic Planning</a></h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
                        <a href="#services" class="details-link"><i class="las la-arrow-right"></i></a>
                    </div>
                    <div class="single-service-inner">
                        <h5><a href="#services">Financial Planning</a></h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
                        <a href="#services" class="details-link"><i class="las la-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-12 wow fadeInUp animated" data-wow-delay="200ms" style="visibility: hidden; animation-delay: 200ms; animation-name: none;">
                <div class="service-content-wrap">
                    <div class="section-title">
                        <h6>WHAT WE PROVIDE</h6>
                        <h2>Loose And Experienced 
                            Tax Preparation</h2>
                    </div>
                    <p>There are many variations of passages of 
Lorem Ipsum available, but the majority suffered alteration in some 
form, by injected humour, or randomised words which don't look even 
slightly believable. </p>
                    <div class="service-bg">
                        <img src="{{ asset('frontend/img/service-bg.png') }}" alt="">
                        <a href="#services" class="more-service-btn">Explore More Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Counter Section -->
<div class="counter-area bg-cover">
    <div class="overlay-2"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter-box">
                    <p class="counter-number"><span>15</span>k+</p>
                    <h6>Project Completed</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter-box">
                    <p class="counter-number"><span>25</span>+</p>
                    <h6>Years Experience</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter-box">
                    <p class="counter-number"><span>4273</span></p>
                    <h6>Happy Customers</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter-box">
                    <p class="counter-number"><span>406</span></p>
                    <h6>Professional Worker</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonial Section  -->
<div class="testimonial-section section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                <div class="section-title">
                    <h6>Our Testimonials</h6>
                    <h2>A Satisfied Customer Is The Best 
                        Business Strategy Of All</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="testimonial-wrapper-one">
                    <div class="testimonial-slider-wrap">
                        <div class="testimonial-slide-inner">
                            <div class="testimonal-thumb">
                                <img src="{{ asset('frontend/img/1_big.jpg') }}" alt="client-1">
                            </div>
                            <div class="testimonal-slider-content">
                                <h6>Monica Julian</h6>
                                <p class="designation">Designation</p>
                                <p>Nemo enim ipsam voluptatem quia 
voluptas aut odit aut fugit sed quia consequuntur magni eos voluptatem 
sequi nesciunts Neque porro quisquam est, qui dolorem dolor</p>
                                <div class="testimonal-review-wrap">
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <span>3.4</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-slide-inner">
                            <div class="testimonal-thumb">
                                <img src="{{ asset('frontend/img/2_big.jpg') }}" alt="">
                            </div>
                            <div class="testimonal-slider-content">
                                <h6>Shawn Beltran</h6>
                                <p class="designation">Entrepreneur</p>
                                <p>Nemo enim ipsam voluptatem quia 
voluptas aut odit aut fugit sed quia consequuntur magni eos voluptatem 
sequi nesciunts Neque porro quisquam est, qui dolorem dolor</p>
                                <div class="testimonal-review-wrap">
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <span>3.4</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-slide-inner">
                            <div class="testimonal-thumb">
                                <img src="{{ asset('frontend/img/1_big.jpg') }}" alt="">
                            </div>
                            <div class="testimonal-slider-content">
                                <h6>Marko Jhon</h6>
                                <p class="designation">Accountant</p>
                                <p>Nemo enim ipsam voluptatem quia 
voluptas aut odit aut fugit sed quia consequuntur magni eos voluptatem 
sequi nesciunts Neque porro quisquam est, qui dolorem dolor</p>
                                <div class="testimonal-review-wrap">
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <span>3.4</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-slide-inner">
                            <div class="testimonal-thumb">
                                <img src="{{ asset('frontend/img/2_big.jpg') }}" alt="">
                            </div>
                            <div class="testimonal-slider-content">
                                <h6>Nicolas Marko</h6>
                                <p class="designation">Manager</p>
                                <p>Nemo enim ipsam voluptatem quia 
voluptas aut odit aut fugit sed quia consequuntur magni eos voluptatem 
sequi nesciunts Neque porro quisquam est, qui dolorem dolor</p>
                                <div class="testimonal-review-wrap">
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <span>3.4</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-slide-inner">
                            <div class="testimonal-thumb">
                                <img src="{{ asset('frontend/img/1_big.jpg') }}" alt="">
                            </div>
                            <div class="testimonal-slider-content">
                                <h6>Ryan Gigs</h6>
                                <p class="designation">Tax Officer</p>
                                <p>Nemo enim ipsam voluptatem quia 
voluptas aut odit aut fugit sed quia consequuntur magni eos voluptatem 
sequi nesciunts Neque porro quisquam est, qui dolorem dolor</p>
                                <div class="testimonal-review-wrap">
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <i class="las la-star"></i>
                                    <span>3.4</span>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>              
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="faq-section section-padding dark-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-12 wow fadeInUp animated" data-wow-delay="200ms" style="visibility: hidden; animation-delay: 200ms; animation-name: none;">
                <div class="section-title">
                    <h6>Helpful Faq</h6>
                    <h2 class="text-white">We Always Answer Your 
                        Doubts
                    </h2>
                </div>
                <div class="accordion faqs" id="accordionFaq">
                    <div class="card">
                        <div class="card-header" id="heading1">
                            <h5 class="mb-0 subtitle">
                                <button class="btn btn-link collapsed active" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    What Is Tax Advisor Services?
                                </button>
                            </h5>
                        </div>

                        <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordionFaq">
                            <div class="card-body">
                                <div class="content">
                                    <p>Duis aute irure dolor in 
reprehenderit in voluptate velit esse cillum dolore in fugiat nulla 
pariatur. Excepteur sint occaecat cupidatat non proident,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading2">
                            <h5 class="mb-0 subtitle">
                                <button class="btn btn-link collapse" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    How Many Service We Provide ?
                                </button>
                            </h5>
                        </div>

                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionFaq">
                            <div class="card-body">
                                <div class="content">
                                    <p>Duis aute irure dolor in 
reprehenderit in voluptate velit esse cillum dolore in fugiat nulla 
pariatur. Excepteur sint occaecat cupidatat non proident,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading3">
                            <h5 class="mb-0 subtitle">
                                <button class="btn btn-link collapse" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    What Are Your Terms and Conditions?
                                </button>
                            </h5>
                        </div>

                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionFaq">
                            <div class="card-body">
                                <div class="content">
                                    <p>Duis aute irure dolor in 
reprehenderit in voluptate velit esse cillum dolore in fugiat nulla 
pariatur. Excepteur sint occaecat cupidatat non proident,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading4">
                            <h5 class="mb-0 subtitle">
                                <button class="btn btn-link collapse" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse2">
                                    What Kinds of Payment Do You Accept?
                                </button>
                            </h5>
                        </div>

                        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionFaq">
                            <div class="card-body">
                                <div class="content">
                                    <p>Duis aute irure dolor in 
reprehenderit in voluptate velit esse cillum dolore in fugiat nulla 
pariatur. Excepteur sint occaecat cupidatat non proident,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-12">
                <div class="faq-section-gallery">
                    <div class="faq-img-one wow fadeInDown animated" data-wow-delay="200ms" style="visibility: hidden; animation-delay: 200ms; animation-name: none;">
                        <img src="{{ asset('frontend/img/faq_1.jpg') }}" alt="">
                    </div>
                    <div class="faq-img-two wow fadeInRight animated" data-wow-delay="300ms" style="visibility: hidden; animation-delay: 300ms; animation-name: none;">
                        <img src="{{ asset('frontend/img/faq_3.jpg') }}" alt="">
                    </div>
                    <div class="faq-img-three wow fadeInUp animated" data-wow-delay="400ms" style="visibility: hidden; animation-delay: 400ms; animation-name: none;">
                        <img src="{{ asset('frontend/img/faq_2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="faq_shape_top">
        <img src="{{ asset('frontend/img/faq_shape_top.png') }}" alt="">
    </div>
    <div class="faq_shape_bottom">
        <img src="{{ asset('frontend/img/faq_shape_bottom.png') }}" alt="">
    </div>
    </div>

<!-- Blog Section  -->
<div class="blog-section section-padding pb-90 white-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                <div class="section-title">
                    <h6>Blog & Articles</h6>
                    <h2>Articles daily updated latest articles
                        directly from the blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12 text-center wow fadeInLeft animated" data-wow-delay="200ms" style="visibility: hidden; animation-delay: 200ms; animation-name: none;">
                <div class="single-blog-item">
                    <div class="blog-meta">
                        <span>Taxation</span> . <span>25 March 2023</span>
                    </div>
                    <h3><a href="#blog">If The White Whale Be Raised It 
                        Must Be In A Month</a></h3>
                    <p>Duis aute irure dolor in reprehenderit in 
voluptate velit esse dolore eu fugiat nulla pariatur. Excepteur sint 
occaecat cupidatat </p>
                    <div class="blog-thumb">
                        <img src="{{ asset('frontend/img/1_002.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 text-center wow fadeInLeft animated" data-wow-delay="400ms" style="visibility: hidden; animation-delay: 400ms; animation-name: none;">
                <div class="single-blog-item">
                    <div class="blog-meta">
                        <span>Finance</span> . <span>25 March 2023</span>
                    </div>
                    <h3><a href="#blog">Mastercards, just pushes deeper 
                        into crypto</a></h3>
                    <p>Duis aute irure dolor in reprehenderit in 
voluptate velit esse dolore eu fugiat nulla pariatur. Excepteur sint 
occaecat cupidatat </p>
                    <div class="blog-thumb">
                        <img src="{{ asset('frontend/img/2_003.jpg') }}" alt="">
                    </div>
                </div>
                </div>
            </div>
                </div>
            </div>

<!-- Contact Section  -->
<div class="contact-area section-padding pt-0">
    <div class="container">
        <div class="contact-section-inner">
            <div class="contact-section-content">
                <h2 class="text-white">Want to work with us?</h2>
                <h5 class="text-white">Meet our people. See our work. Join our team.</h5>
                <a href="#contact" class="main-btn">Contact With Us</a>
                </div>
            </div>
        </div>
    </div>

@endsection
