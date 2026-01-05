<!-- Header Top Area -->
<div class="header-top-area green-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-5 col-12">
                <div class="header-info">
                    <i class="las la-clock"></i>
                    <p><span>Working Hours</span>: Monday-Saturday, 09 a.m.- 5 p.m.</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-3 col-12 text-center">
                <div class="contact-info">                        
                    <a href="tel:+917300070618"><span>Call</span>: +91 7300070618</a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-12 text-end">
                <div class="social-icon">                        
                    <a href="#"><i class="lab la-facebook-f"></i></a>
                    <a href="#"><i class="lab la-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Header Area -->
<div class="header-area">
    <div id="sticky-wrapper" class="sticky-wrapper" style="height: 90px;">
        <div class="sticky-area" style="width: 1349px;">
            <div class="navigation">
                <div class="container">
                    <div class="header-inner-box">     
                        <div class="logo">
                            <a class="navbar-brand" href="{{ url('/') }}">Allied Business Consultancy</a>                            
                        </div>

                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                    <span class="navbar-toggler-icon"></span>
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                                    <ul class="navbar-nav m-auto">
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Services
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="servicesDropdown" style="min-width: 600px;">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h6 class="dropdown-header">Tax & Compliance Services</h6>
                                                            <a class="dropdown-item" href="{{ route('income-tax-efiling') }}">Income Tax E-filing</a>
                                                            <a class="dropdown-item" href="{{ route('gst') }}">GST Filing</a>
                                                            <a class="dropdown-item" href="{{ route('tds-return-filing') }}">TDS Return Filing</a>
                                                            <a class="dropdown-item" href="{{ route('huf-filing') }}">HUF Filing</a>
                                                            <a class="dropdown-item" href="{{ route('appeal') }}">Appeal</a>
                                                            <a class="dropdown-item" href="{{ route('tax-plan') }}">Tax Planner</a>
                                                            <a class="dropdown-item" href="{{ route('tan-registration') }}">TAN Registration</a>
                                                            <a class="dropdown-item" href="{{ route('income-tax-notice') }}">Income Tax Notice</a>
                                                        </div>
                                                        <div class="col-6">
                                                            <h6 class="dropdown-header">Business Registration & Other Services</h6>
                                                            <a class="dropdown-item" href="{{ route('private-and-public-limited-company') }}">Private & Public Limited Company</a>
                                                            <a class="dropdown-item" href="{{ route('partnership-firm-and-llp-registration') }}">Partnership Firm & LLP Registration</a>
                                                            <a class="dropdown-item" href="{{ route('company-registration-online') }}">Company Registration Online</a>
                                                            <a class="dropdown-item" href="{{ route('one-person-company-registration') }}">One-Person Company Registration</a>
                                                            <a class="dropdown-item" href="{{ route('mybizcfo') }}">MyBizCFO</a>
                                                            <a class="dropdown-item" href="{{ route('pf-withdrawal') }}">PF Withdrawal</a>
                                                            <a class="dropdown-item" href="{{ route('professional-tax-filing') }}">Professional Tax Filing</a>
                                                            <a class="dropdown-item" href="{{ route('small-business-registration') }}">Small Business Registration</a>
                                                            <a class="dropdown-item" href="{{ route('lower-deduction-certificate') }}">Lower Deduction Certificate</a>
                                                            <a class="dropdown-item" href="{{ route('digital-signature-certificate') }}">Digital Signature Certificate</a>
                                                            <a class="dropdown-item" href="{{ route('business-license-registration') }}">Business License Registration</a>
                                                            <a class="dropdown-item" href="{{ route('pan-application-process') }}">PAN Application Process</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#dubai-setup">Dubai Setup</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->is('blog') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_right_bg">
        <img src="{{ asset('frontend/img/top_right_bg.png') }}" alt="">
    </div>
</div>
