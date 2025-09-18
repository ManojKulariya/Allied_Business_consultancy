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
                                        <li class="nav-item">
                                            <a class="nav-link" href="#services">
                                                Services
                                                <span class="sub-nav-toggler"> </span>
                                                <button class="sub-nav-toggler"> <i class="las la-angle-down"></i> </button>
                                            </a>
                                            <ul class="sub-menu">
                                                <li><a href="#services">Service 1</a></li>
                                                <li><a href="#services">Service 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#dubai-setup">Dubai Setup</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#blog">Blog</a>
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
