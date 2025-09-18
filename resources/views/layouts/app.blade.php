<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">    
    
    <title>@yield('title', 'Allied Business Consultancy')</title>

    <!--Favicon-->
    <link rel="icon" href="{{ asset('frontend/img/favicon.png') }}" type="image/jpg">
    
    <!-- Bootstrap CSS -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Line Awesome CSS -->
    <link href="{{ asset('frontend/css/line-awesome.min.css') }}" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="{{ asset('frontend/css/fontAwesomePro.css') }}" rel="stylesheet">
    <!-- Animate CSS-->
    <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet">
    <!-- Bar Filler CSS -->
    <link href="{{ asset('frontend/css/barfiller.css') }}" rel="stylesheet">
    <!-- Magnific Popup Video -->
    <link href="{{ asset('frontend/css/magnific-popup.css') }}" rel="stylesheet">
    <!-- Flaticon CSS -->
    <link href="{{ asset('frontend/css/flaticon.css') }}" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="{{ asset('frontend/css/owl.carousel.css') }}" rel="stylesheet">
    <!-- Slick Slider CSS -->
    <link href="{{ asset('frontend/css/slick.css') }}" rel="stylesheet">
    <!-- Nice Select  -->
    <link href="{{ asset('frontend/css/nice-select.css') }}" rel="stylesheet">
    <!-- Back to Top -->
    <link href="{{ asset('frontend/css/backToTop.css') }}" rel="stylesheet">
    <!-- Style CSS -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" integrity="sha512-mpG5WlG+1rYF0mU+mZ+BTSsLZME0GDWjWEq8sRMFXD34pO2qZhKMZnm9Q+3gOkGvY+2i9UQdAxrGj7klQ0x0jQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- jquery -->
    <script src="{{ asset('frontend/js/jquery-1.12.4.min.js') }}"></script>
</head>

<body>

    {{-- HEADER --}}
    @include('layouts.header')

    {{-- MAIN CONTENT --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('layouts.footer')

    <!-- Popper JS -->
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- Wow JS -->
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <!-- Way Points JS -->
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <!-- Counter Up JS -->
    <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <!-- Slick Slider JS -->
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('frontend/js/magnific-popup.min.js') }}"></script>
    <!-- Isotope JS -->
    <script src="{{ asset('frontend/js/isotope-3.0.6-min.js') }}"></script>
    <!-- Sticky JS -->
    <script src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
    <!-- Back To Top JS -->
    <script src="{{ asset('frontend/js/backToTop.js') }}"></script>
    <!-- Progress Bar JS -->
    <script src="{{ asset('frontend/js/jquery.barfiller.js') }}"></script>    
    <!-- Circle Progress Bar JS -->
    <script src="{{ asset('frontend/js/circle-progress.min.js') }}"></script>    
    <!-- Main JS -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>

    <!-- Testimonial Slider Script -->
    <script>
        $(document).ready(function() {
            $('.testimonial-slider-wrap').slick({
                slidesToShow: 1,        // show only 1 item at a time
                slidesToScroll: 1,
                arrows: false,           // show prev/next arrows
                dots: true,             // show dots navigation
                autoplay: true,         // auto-slide
                autoplaySpeed: 3000,    // 3 sec
                infinite: true,         // loop
                adaptiveHeight: true    // adjusts height per testimonial
            });
        });
    </script>

    @yield('scripts')
</body>
</html>
