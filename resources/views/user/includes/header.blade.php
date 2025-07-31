<!DOCTYPE html>
<!-- saved from url=(0044)https://themesflat.co/html/ecomus/index.html -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US" dir="ltr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Ecomus - Ultimate HTML</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- font -->
    <link rel="stylesheet" href="{{ asset('frontend/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="https://themesflat.co/html/ecomus/images/logo/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="https://themesflat.co/html/ecomus/images/logo/favicon.png')}}">

</head>

<body class="preload-wrapper popup-loader">

    <!-- RTL -->
    <!-- <a href="javascript:void(0);" id="toggle-rtl" class="tf-btn animate-hover-btn btn-fill">RTL</a> -->
    <!-- /RTL  -->

    <!-- preload -->
    
    <!-- /preload -->
    <div id="wrapper">
        <!-- Top Bar -->
        <div class="@if(Route::currentRouteName() != 'users.index') d-none @endif tf-top-bar bg_white line">
            <div class="px_15 lg-px_40">
                <div class="tf-top-bar_wrap grid-3 gap-30 align-items-center">
                    <ul class="tf-top-bar_item tf-social-icon d-flex gap-10">
                        <li><a href="https://themesflat.co/html/ecomus/index.html#" class="box-icon w_28 round social-facebook bg_line"><i class="icon fs-12 icon-fb"></i></a></li>
                        <li><a href="https://themesflat.co/html/ecomus/index.html#" class="box-icon w_28 round social-twiter bg_line"><i class="icon fs-10 icon-Icon-x"></i></a></li>
                        <li><a href="https://themesflat.co/html/ecomus/index.html#" class="box-icon w_28 round social-instagram bg_line"><i class="icon fs-12 icon-instagram"></i></a></li>
                        <li><a href="https://themesflat.co/html/ecomus/index.html#" class="box-icon w_28 round social-tiktok bg_line"><i class="icon fs-12 icon-tiktok"></i></a></li>
                        <li><a href="https://themesflat.co/html/ecomus/index.html#" class="box-icon w_28 round social-pinterest bg_line"><i class="icon fs-12 icon-pinterest-1"></i></a></li>
                    </ul>
                    <div class="text-center overflow-hidden">
                        <div dir="ltr" class="swiper tf-sw-top_bar swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden" data-preview="1" data-space="0" data-loop="true" data-speed="1000" data-delay="2000">
                            <div class="swiper-wrapper" id="swiper-wrapper-d6ffeb8ceda4d8dd" aria-live="off" style="transition-duration: 1000ms; transform: translate3d(-750px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 375px;">
                                    <p class="top-bar-text fw-5">Time to refresh your wardrobe.</p>
                                </div>
                                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 375px;">
                                    <p class="top-bar-text fw-5">Spring Fashion Sale <a href="https://themesflat.co/html/ecomus/shop-default.html" title="all collection" class="tf-btn btn-line">Shop now<i class="icon icon-arrow1-top-left"></i></a></p>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" role="group" aria-label="2 / 3" style="width: 375px;">
                                    <p class="top-bar-text fw-5">Summer sale discount off 70%</p>
                                </div>
                                <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 375px;">
                                    <p class="top-bar-text fw-5">Time to refresh your wardrobe.</p>
                                </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 375px;">
                                    <p class="top-bar-text fw-5">Spring Fashion Sale <a href="https://themesflat.co/html/ecomus/shop-default.html" title="all collection" class="tf-btn btn-line">Shop now<i class="icon icon-arrow1-top-left"></i></a></p>
                                </div></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>

                    <div class="top-bar-language tf-cur justify-content-end">


                        <div class="tf-currencies">
                           
                                <select class="image-select center style-default type-currencies">
                                <option data-thumbnail="{{ asset('frontend/img/fr.svg')}}" data-content="&lt;img src=ecomus/fr.svg&#39;/&gt; EUR € | France">EUR € | France</option>
                                <option data-thumbnail="{{ asset('frontend/img/de.svg')}}" data-content="&lt;img src=ecomus/de.svg&#39;/&gt; EUR € | Germany">EUR € | Germany</option>
                                <option selected="" data-thumbnail="{{ asset('frontend/img/us.svg')}}" data-content="img src=ecomus/us.svg&#39;/&gt; USD $ | United States">USD $ | United States</option>
                                <option data-thumbnail="{{ asset('frontend/img/vn.svg')}}" data-content="img src=ecomus/vn.svg; VND ₫ | Vietnam">VND ₫ | Vietnam</option>
                            </select>
                            
                        </div>
                        <div class="tf-languages">
                            <select class="image-select center style-default type-languages">
                                <option>English</option>
                                <option>العربية</option>
                                <option>简体中文</option>
                                <option>اردو</option>
                            </select>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /Top Bar -->
        <!-- Header -->
        <header id="header" class="header-default {{ Route::currentRouteName() == 'users.index' ? 'header-absolute' : '' }}" style="top: -94px;">
            <div class="px_15 lg-px_40">
                <div class="row wrapper-header align-items-center">
                    <div class="col-md-4 col-3 tf-lg-hidden">
                        <a href="https://themesflat.co/html/ecomus/index.html#mobileMenu" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft">
                            <svg xmlns="http://www.w3.org/2000/svg')}}" width="24" height="16" viewBox="0 0 24 16" fill="none">
                                <path d="M2.00056 2.28571H16.8577C17.1608 2.28571 17.4515 2.16531 17.6658 1.95098C17.8802 1.73665 18.0006 1.44596 18.0006 1.14286C18.0006 0.839753 17.8802 0.549063 17.6658 0.334735C17.4515 0.120408 17.1608 0 16.8577 0H2.00056C1.69745 0 1.40676 0.120408 1.19244 0.334735C0.978109 0.549063 0.857702 0.839753 0.857702 1.14286C0.857702 1.44596 0.978109 1.73665 1.19244 1.95098C1.40676 2.16531 1.69745 2.28571 2.00056 2.28571ZM0.857702 8C0.857702 7.6969 0.978109 7.40621 1.19244 7.19188C1.40676 6.97755 1.69745 6.85714 2.00056 6.85714H22.572C22.8751 6.85714 23.1658 6.97755 23.3801 7.19188C23.5944 7.40621 23.7148 7.6969 23.7148 8C23.7148 8.30311 23.5944 8.59379 23.3801 8.80812C23.1658 9.02245 22.8751 9.14286 22.572 9.14286H2.00056C1.69745 9.14286 1.40676 9.02245 1.19244 8.80812C0.978109 8.59379 0.857702 8.30311 0.857702 8ZM0.857702 14.8571C0.857702 14.554 0.978109 14.2633 1.19244 14.049C1.40676 13.8347 1.69745 13.7143 2.00056 13.7143H12.2863C12.5894 13.7143 12.8801 13.8347 13.0944 14.049C13.3087 14.2633 13.4291 14.554 13.4291 14.8571C13.4291 15.1602 13.3087 15.4509 13.0944 15.6653C12.8801 15.8796 12.5894 16 12.2863 16H2.00056C1.69745 16 1.40676 15.8796 1.19244 15.6653C0.978109 15.4509 0.857702 15.1602 0.857702 14.8571Z" fill="currentColor"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6">
                        <a href="https://themesflat.co/html/ecomus/index.html" class="logo-header">
                            <img src="{{ asset('frontend/img/logo.svg')}}" alt="logo" class="logo">
                        </a>
                    </div>
                    <div class="col-xl-6 tf-md-hidden">
                        <nav class="box-navigation text-center">
                            <ul class="box-nav-ul d-flex align-items-center justify-content-center gap-30">

                            <a href="{{ route('users.index') }}" class="item-link">Home</a>
                                   
                                <li class="menu-item">
                                    <a href="https://themesflat.co/html/ecomus/index.html#" class="item-link">Shop<i class="icon icon-arrow-down"></i></a>
                                    <div class="sub-menu mega-menu">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <div class="mega-menu-item">
                                                        <div class="menu-heading">Shop layouts</div>
                                                        <ul class="menu-list">
                                                            <li><a href="{{ route('users.shop') }}" class="menu-link-text link">Default</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/shop-left-sidebar.html" class="menu-link-text link">Left sidebar</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/shop-right-sidebar.html" class="menu-link-text link">Right sidebar</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/shop-fullwidth.html" class="menu-link-text link">Fullwidth</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/shop-collection-sub.html" class="menu-link-text link">Sub collection</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/shop-collection-list.html" class="menu-link-text link">Collections list</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="mega-menu-item">
                                                        <div class="menu-heading">Features</div>
                                                        <ul class="menu-list">
                                                            <li><a href="https://themesflat.co/html/ecomus/shop-link.html" class="menu-link-text link">Pagination links</a>
                                                            </li>
                                                            <li><a href="https://themesflat.co/html/ecomus/shop-loadmore.html" class="menu-link-text link">Pagination loadmore</a>
                                                            </li>
                                                            <li><a href="https://themesflat.co/html/ecomus/shop-infinite-scrolling.html" class="menu-link-text link">Pagination infinite
                                                                    scrolling</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/shop-filter-sidebar.html" class="menu-link-text link">Filter sidebar</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/shop-filter-hidden.html" class="menu-link-text link">Filter hidden</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="mega-menu-item">
                                                        <div class="menu-heading">Product styles</div>
                                                        <ul class="menu-list">

                                                            <li><a href="https://themesflat.co/html/ecomus/product-style-01.html" class="menu-link-text link">Product style 01</a>
                                                            </li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-style-02.html" class="menu-link-text link">Product style 02</a>
                                                            </li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-style-03.html" class="menu-link-text link">Product style 03</a>
                                                            </li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-style-04.html" class="menu-link-text link">Product style 04</a>
                                                            </li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-style-05.html" class="menu-link-text link">Product style 05</a>
                                                            </li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-style-06.html" class="menu-link-text link">Product style 06</a>
                                                            </li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-style-07.html" class="menu-link-text link">Product style 07</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="collection-item hover-img">
                                                        <div class="collection-inner">
                                                            <a href="https://themesflat.co/html/ecomus/shop-men.html" class="collection-image img-style">
                                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('frontend/img/collections/collection-1.jpg')}}" src="{{ asset('frontend/img/collections/collection-1.jpg')}}" alt="collection-demo-1">
                                                            </a>
                                                            <div class="collection-content">
                                                                <a href="https://themesflat.co/html/ecomus/shop-men.html" class="tf-btn hover-icon btn-xl collection-title fs-16"><span>Men</span><i class="icon icon-arrow1-top-left"></i></a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="collection-item hover-img">
                                                        <div class="collection-inner">
                                                            <a href="https://themesflat.co/html/ecomus/shop-women.html" class="collection-image img-style">
                                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('frontend/img/collections/collection-2.jpg')}}" src="{{ asset('frontend/img/collections/collection-2.jpg')}}" alt="collection-demo-1">
                                                            </a>
                                                            <div class="collection-content">
                                                                <a href="https://themesflat.co/html/ecomus/shop-women.html" class="tf-btn btn-xl collection-title fs-16 hover-icon"><span>Women</span><i class="icon icon-arrow1-top-left"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item">
                                    <a href="https://themesflat.co/html/ecomus/index.html#" class="item-link">Products<i class="icon icon-arrow-down"></i></a>
                                    <div class="sub-menu mega-menu">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <div class="mega-menu-item">
                                                        <div class="menu-heading">Product layouts</div>
                                                        <ul class="menu-list">
                                                            <li><a href="https://themesflat.co/html/ecomus/product-detail.html" class="menu-link-text link">Product default</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-grid-1.html" class="menu-link-text link">Product grid 1</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-grid-2.html" class="menu-link-text link">Product grid 2</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-stacked.html" class="menu-link-text link">Product stacked</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-right-thumbnails.html" class="menu-link-text link">Product right
                                                                    thumbnails</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-bottom-thumbnails.html" class="menu-link-text link">Product bottom
                                                                    thumbnails</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-drawer-sidebar.html" class="menu-link-text link">Product drawer
                                                                    sidebar</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-description-accordion.html" class="menu-link-text link">Product description
                                                                    accordion</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-description-list.html" class="menu-link-text link">Product description
                                                                    list</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-description-vertical.html" class="menu-link-text link">Product description
                                                                    vertical</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="mega-menu-item">
                                                        <div class="menu-heading">Product details</div>
                                                        <ul class="menu-list">
                                                            <li><a href="https://themesflat.co/html/ecomus/product-inner-zoom.html" class="menu-link-text link">Product inner zoom</a>
                                                            </li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-zoom-magnifier.html" class="menu-link-text link">Product zoom
                                                                    magnifier</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-no-zoom.html" class="menu-link-text link">Product no zoom</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-photoswipe-popup.html" class="menu-link-text link">Product photoswipe
                                                                    popup</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-zoom-popup.html" class="menu-link-text link">Product external zoom
                                                                    and photoswipe popup</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-video.html" class="menu-link-text link">Product video</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-3d.html" class="menu-link-text link">Product 3D, AR
                                                                    models</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-options-customizer.html" class="menu-link-text link">Product options &amp;
                                                                    customizer</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-advanced-types.html" class="menu-link-text link">Advanced product
                                                                    types</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-giftcard.html" class="menu-link-text link">Recipient information
                                                                    form for gift card products</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="mega-menu-item">
                                                        <div class="menu-heading">Product swatchs</div>
                                                        <ul class="menu-list">
                                                            <li><a href="https://themesflat.co/html/ecomus/product-color-swatch.html" class="menu-link-text link">Product color swatch</a>
                                                            </li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-rectangle.html" class="menu-link-text link">Product rectangle</a>
                                                            </li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-rectangle-color.html" class="menu-link-text link">Product rectangle
                                                                    color</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-swatch-image.html" class="menu-link-text link">Product swatch image</a>
                                                            </li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-swatch-image-rounded.html" class="menu-link-text link">Product swatch image
                                                                    rounded</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-swatch-dropdown.html" class="menu-link-text link">Product swatch
                                                                    dropdown</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-swatch-dropdown-color.html" class="menu-link-text link">Product swatch dropdown
                                                                    color</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="mega-menu-item">
                                                        <div class="menu-heading">Product features</div>
                                                        <ul class="menu-list">
                                                            <li><a href="https://themesflat.co/html/ecomus/product-frequently-bought-together.html" class="menu-link-text link">Frequently bought
                                                                    together</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-frequently-bought-together-2.html" class="menu-link-text link">Frequently bought
                                                                    together 2</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-upsell-features.html" class="menu-link-text link">Product upsell
                                                                    features</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-pre-orders.html" class="menu-link-text link">Product pre-orders</a>
                                                            </li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-notification.html" class="menu-link-text link">Back in stock
                                                                    notification</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-pickup.html" class="menu-link-text link">Product pickup</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-images-grouped.html" class="menu-link-text link">Variant images
                                                                    grouped</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-complimentary.html" class="menu-link-text link">Complimentary
                                                                    products</a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-quick-order-list.html" class="menu-link-text link position-relative">Quick
                                                                    order list<div class="demo-label"><span class="demo-new">New</span></div></a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-detail-volume-discount.html" class="menu-link-text link position-relative">Volume
                                                                    Discount<div class="demo-label"><span class="demo-new">New</span></div></a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-detail-volume-discount-grid.html" class="menu-link-text link position-relative">Volume
                                                                    Discount Grid<div class="demo-label"><span class="demo-new">New</span></div></a></li>
                                                            <li><a href="https://themesflat.co/html/ecomus/product-detail-buyx-gety.html" class="menu-link-text link position-relative">Buy X
                                                                    Get Y<div class="demo-label"><span class="demo-new">New</span></div></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="menu-heading">Best seller</div>
                                                    <div class="hover-sw-nav hover-sw-2">
                                                        <div dir="ltr" class="swiper tf-product-header swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                                                            <div class="swiper-wrapper" id="swiper-wrapper-72b8d5171243e02e" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                                                <div class="swiper-slide swiper-slide-active" lazy="true" role="group" aria-label="1 / 4" style="width: 165px; margin-right: 20px;">
                                                                    <div class="card-product">
                                                                        <div class="card-product-wrapper">
                                                                            <a href="https://themesflat.co/html/ecomus/index.html#" class="product-img">
                                                                                <img class="img-product ls-is-cached lazyloaded" data-src="images/products/orange-1.jpg')}}" src="{{ asset('frontend/img/orange-1.jpg')}}" alt="image-product">
                                                                                <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/white-1.jpg')}}" src="{{ asset('frontend/img/white-1.jpg')}}" alt="image-product">
                                                                            </a>
                                                                            <div class="list-product-btn absolute-2">
                                                                                <a href="https://themesflat.co/html/ecomus/index.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                                                    <span class="icon icon-bag"></span>
                                                                                    <span class="tooltip">Quick
                                                                                        Add</span>
                                                                                </a>
                                                                                <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                                                    <span class="icon icon-heart"></span>
                                                                                    <span class="tooltip">Add to
                                                                                        Wishlist</span>
                                                                                    <span class="icon icon-delete"></span>
                                                                                </a>
                                                                                <a href="https://themesflat.co/html/ecomus/index.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                                                    <span class="icon icon-compare"></span>
                                                                                    <span class="tooltip">Add to
                                                                                        Compare</span>
                                                                                    <span class="icon icon-check"></span>
                                                                                </a>
                                                                                <a href="https://themesflat.co/html/ecomus/index.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                                                    <span class="icon icon-view"></span>
                                                                                    <span class="tooltip">Quick
                                                                                        View</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-product-info">
                                                                            <a href="https://themesflat.co/html/ecomus/index.html#" class="title link">Ribbed Tank
                                                                                Top</a>
                                                                            <span class="price">$16.95</span>
                                                                            <ul class="list-color-product">
                                                                                <li class="list-color-item color-swatch active">
                                                                                    <span class="tooltip">Orange</span>
                                                                                    <span class="swatch-value bg_orange-3"></span>
                                                                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/orange-1.jpg')}}" src="{{ asset('frontend/img/orange-1.jpg')}}" alt="image-product">
                                                                                </li>
                                                                                <li class="list-color-item color-swatch">
                                                                                    <span class="tooltip">Black</span>
                                                                                    <span class="swatch-value bg_dark"></span>
                                                                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/black-1.jpg')}}" src="{{ asset('frontend/img/black-1.jpg')}}" alt="image-product">
                                                                                </li>
                                                                                <li class="list-color-item color-swatch">
                                                                                    <span class="tooltip">White</span>
                                                                                    <span class="swatch-value bg_white"></span>
                                                                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/white-1.jpg')}}" src="{{ asset('frontend/img/white-1.jpg')}}" alt="image-product">
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide swiper-slide-next" lazy="true" role="group" aria-label="2 / 4" style="width: 165px; margin-right: 20px;">
                                                                    <div class="card-product">
                                                                        <div class="card-product-wrapper">
                                                                            <div class="product-img">
                                                                                <img class="img-product ls-is-cached lazyloaded" data-src="images/products/white-3.jpg')}}" src="{{ asset('frontend/img/white-3.jpg')}}" alt="image-product">
                                                                                <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/white-4.jpg')}}" src="{{ asset('frontend/img/white-4.jpg')}}" alt="image-product">
                                                                            </div>
                                                                            <div class="list-product-btn absolute-2">
                                                                                <a href="https://themesflat.co/html/ecomus/index.html#shoppingCart" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                                                    <span class="icon icon-bag"></span>
                                                                                    <span class="tooltip">Add to
                                                                                        cart</span>
                                                                                </a>
                                                                                <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                                                    <span class="icon icon-heart"></span>
                                                                                    <span class="tooltip">Add to
                                                                                        Wishlist</span>
                                                                                    <span class="icon icon-delete"></span>
                                                                                </a>
                                                                                <a href="https://themesflat.co/html/ecomus/index.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                                                    <span class="icon icon-compare"></span>
                                                                                    <span class="tooltip">Add to
                                                                                        Compare</span>
                                                                                    <span class="icon icon-check"></span>
                                                                                </a>
                                                                                <a href="https://themesflat.co/html/ecomus/index.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                                                    <span class="icon icon-view"></span>
                                                                                    <span class="tooltip">Quick
                                                                                        View</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-product-info">
                                                                            <a href="https://themesflat.co/html/ecomus/index.html#" class="title link">Oversized
                                                                                Printed T-shirt</a>
                                                                            <span class="price">$10.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" lazy="true" role="group" aria-label="3 / 4" style="width: 165px; margin-right: 20px;">
                                                                    <div class="card-product">
                                                                        <div class="card-product-wrapper">
                                                                            <div class="product-img">
                                                                                <img class="img-product ls-is-cached lazyloaded" data-src="images/products/white-2.jpg')}}" src="{{ asset('frontend/img/white-2.jpg')}}" alt="image-product">
                                                                                <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/pink-1.jpg')}}" src="{{ asset('frontend/img/pink-1.jpg')}}" alt="image-product">
                                                                            </div>
                                                                            <div class="list-product-btn">
                                                                                <a href="https://themesflat.co/html/ecomus/index.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                                                    <span class="icon icon-bag"></span>
                                                                                    <span class="tooltip">Quick
                                                                                        Add</span>
                                                                                </a>
                                                                                <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                                                    <span class="icon icon-heart"></span>
                                                                                    <span class="tooltip">Add to
                                                                                        Wishlist</span>
                                                                                    <span class="icon icon-delete"></span>
                                                                                </a>
                                                                                <a href="https://themesflat.co/html/ecomus/index.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                                                    <span class="icon icon-compare"></span>
                                                                                    <span class="tooltip">Add to
                                                                                        Compare</span>
                                                                                    <span class="icon icon-check"></span>
                                                                                </a>
                                                                                <a href="https://themesflat.co/html/ecomus/index.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                                                    <span class="icon icon-view"></span>
                                                                                    <span class="tooltip">Quick
                                                                                        View</span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="size-list">
                                                                                <span>S</span>
                                                                                <span>M</span>
                                                                                <span>L</span>
                                                                                <span>XL</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-product-info">
                                                                            <a href="https://themesflat.co/html/ecomus/index.html#" class="title">Oversized Printed
                                                                                T-shirt</a>
                                                                            <span class="price">$16.95</span>
                                                                            <ul class="list-color-product">
                                                                                <li class="list-color-item color-swatch active">
                                                                                    <span class="tooltip">White</span>
                                                                                    <span class="swatch-value bg_white"></span>
                                                                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/white-2.jpg')}}" src="{{ asset('frontend/img/white-2.jpg')}}" alt="image-product">
                                                                                </li>
                                                                                <li class="list-color-item color-swatch">
                                                                                    <span class="tooltip">Pink</span>
                                                                                    <span class="swatch-value bg_purple"></span>
                                                                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/pink-1.jpg')}}" src="{{ asset('frontend/img/pink-1.jpg')}}" alt="image-product">
                                                                                </li>
                                                                                <li class="list-color-item color-swatch">
                                                                                    <span class="tooltip">Black</span>
                                                                                    <span class="swatch-value bg_dark"></span>
                                                                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/black-2.jpg')}}" src="{{ asset('frontend/img/black-2.jpg')}}" alt="image-product">
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" lazy="true" role="group" aria-label="4 / 4" style="width: 165px; margin-right: 20px;">
                                                                    <div class="card-product">
                                                                        <div class="card-product-wrapper">
                                                                            <div class="product-img">
                                                                                <img class="img-product ls-is-cached lazyloaded" data-src="images/products/brown-2.jpg')}}" src="{{ asset('frontend/img/brown-2.jpg')}}" alt="image-product">
                                                                                <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/brown-3.jpg')}}" src="{{ asset('frontend/img/brown-3.jpg')}}" alt="image-product">
                                                                            </div>
                                                                            <div class="size-list">
                                                                                <span>S</span>
                                                                                <span>M</span>
                                                                                <span>L</span>
                                                                                <span>XL</span>
                                                                            </div>
                                                                            <div class="list-product-btn">
                                                                                <a href="https://themesflat.co/html/ecomus/index.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                                                    <span class="icon icon-bag"></span>
                                                                                    <span class="tooltip">Quick
                                                                                        Add</span>
                                                                                </a>
                                                                                <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                                                    <span class="icon icon-heart"></span>
                                                                                    <span class="tooltip">Add to
                                                                                        Wishlist</span>
                                                                                    <span class="icon icon-delete"></span>
                                                                                </a>
                                                                                <a href="https://themesflat.co/html/ecomus/index.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                                                    <span class="icon icon-compare"></span>
                                                                                    <span class="tooltip">Add to
                                                                                        Compare</span>
                                                                                    <span class="icon icon-check"></span>
                                                                                </a>
                                                                                <a href="https://themesflat.co/html/ecomus/index.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                                                    <span class="icon icon-view"></span>
                                                                                    <span class="tooltip">Quick
                                                                                        View</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-product-info">
                                                                            <a href="https://themesflat.co/html/ecomus/index.html#" class="title link">V-neck linen
                                                                                T-shirt</a>
                                                                            <span class="price">$114.95</span>
                                                                            <ul class="list-color-product">
                                                                                <li class="list-color-item color-swatch active">
                                                                                    <span class="tooltip">Brown</span>
                                                                                    <span class="swatch-value bg_brown"></span>
                                                                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/brown-2.jpg')}}" src="{{ asset('frontend/img/brown-2.jpg')}}" alt="image-product">
                                                                                </li>
                                                                                <li class="list-color-item color-swatch">
                                                                                    <span class="tooltip">White</span>
                                                                                    <span class="swatch-value bg_white"></span>
                                                                                    <img class=" ls-is-cached lazyloaded" data-src="images/products/white-5.jpg')}}" src="{{ asset('frontend/img/white-5.jpg')}}" alt="image-product">
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                                        <div class="nav-sw nav-next-slider nav-next-product-header box-icon w_46 round swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-72b8d5171243e02e" aria-disabled="true">
                                                            <span class="icon icon-arrow-left"></span>
                                                        </div>
                                                        <div class="nav-sw nav-prev-slider nav-prev-product-header box-icon w_46 round" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-72b8d5171243e02e" aria-disabled="false">
                                                            <span class="icon icon-arrow-right"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item position-relative">
                                    <a href="https://themesflat.co/html/ecomus/index.html#" class="item-link">Pages<i class="icon icon-arrow-down"></i></a>
                                    <div class="sub-menu submenu-default">
                                        <ul class="menu-list">
                                            <li>
                                                <a href="{{ route('users.about-us') }}" class="menu-link-text link text_black-2">About
                                                    us</a>
                                            </li>
                                            <li class="menu-item-2">
                                                <a href="https://themesflat.co/html/ecomus/index.html#" class="menu-link-text link text_black-2">Brands</a>
                                                <div class="sub-menu submenu-default">
                                                    <ul class="menu-list">
                                                        <li>
                                                            <a href="https://themesflat.co/html/ecomus/brands.html" class="menu-link-text link text_black-2 position-relative">Brands
                                                                <div class="demo-label"><span class="demo-new">New</span></div>
                                                            </a>
                                                        </li>
                                                        <li><a href="https://themesflat.co/html/ecomus/brands-v2.html" class="menu-link-text link text_black-2">Brand V2</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item-2">
                                                <a href="{{ route('users.contact-us') }}" class="menu-link-text link text_black-2">Contact</a>
                                        
                                            </li>
                                            <li class="menu-item-2">
                                                <a href="https://themesflat.co/html/ecomus/index.html#" class="menu-link-text link text_black-2">FAQ</a>
                                                <div class="sub-menu submenu-default">
                                                    <ul class="menu-list">
                                                        <li><a href="https://themesflat.co/html/ecomus/faq-1.html" class="menu-link-text link text_black-2">FAQ 01</a></li>
                                                        <li><a href="https://themesflat.co/html/ecomus/faq-2.html" class="menu-link-text link text_black-2">FAQ 02</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item-2">
                                                <a href="https://themesflat.co/html/ecomus/index.html#" class="menu-link-text link text_black-2">Store</a>
                                                <div class="sub-menu submenu-default">
                                                    <ul class="menu-list">
                                                        <li><a href="https://themesflat.co/html/ecomus/our-store.html" class="menu-link-text link text_black-2">Our store</a>
                                                        </li>
                                                        <li><a href="https://themesflat.co/html/ecomus/store-locations.html" class="menu-link-text link text_black-2">Store
                                                                locator</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="https://themesflat.co/html/ecomus/timeline.html" class="menu-link-text link text_black-2 position-relative">Timeline
                                                    <div class="demo-label"><span class="demo-new">New</span></div>
                                                </a>
                                            </li>
                                            <li><a href="https://themesflat.co/html/ecomus/view-cart.html" class="menu-link-text link text_black-2 position-relative">View
                                                    cart</a></li>
                                            <li><a href="https://themesflat.co/html/ecomus/checkout.html" class="menu-link-text link text_black-2 position-relative">Check
                                                    out</a></li>
                                            <li class="menu-item-2">
                                                <a href="https://themesflat.co/html/ecomus/index.html#" class="menu-link-text link text_black-2">Payment</a>
                                                <div class="sub-menu submenu-default">
                                                    <ul class="menu-list">
                                                        <li><a href="https://themesflat.co/html/ecomus/payment-confirmation.html" class="menu-link-text link text_black-2">Payment
                                                                Confirmation</a></li>
                                                        <li><a href="https://themesflat.co/html/ecomus/payment-failure.html" class="menu-link-text link text_black-2">Payment
                                                                Failure</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item-2">
                                                <a href="https://themesflat.co/html/ecomus/index.html#" class="menu-link-text link text_black-2">My account</a>
                                                <div class="sub-menu submenu-default">
                                                    <ul class="menu-list">
                                                        <li><a href="https://themesflat.co/html/ecomus/my-account.html" class="menu-link-text link text_black-2">My account</a>
                                                        </li>
                                                        <li><a href="https://themesflat.co/html/ecomus/my-account-orders.html" class="menu-link-text link text_black-2">My order</a>
                                                        </li>
                                                        <li><a href="https://themesflat.co/html/ecomus/my-account-orders-details.html" class="menu-link-text link text_black-2">My order
                                                                details</a></li>
                                                        <li><a href="https://themesflat.co/html/ecomus/my-account-address.html" class="menu-link-text link text_black-2">My address</a>
                                                        </li>
                                                        <li><a href="https://themesflat.co/html/ecomus/my-account-edit.html" class="menu-link-text link text_black-2">My account
                                                                details</a></li>
                                                        <li><a href="https://themesflat.co/html/ecomus/my-account-wishlist.html" class="menu-link-text link text_black-2">My wishlist</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="https://themesflat.co/html/ecomus/invoice.html" class="menu-link-text link text_black-2 position-relative">Invoice</a>
                                            </li>
                                            <li><a href="https://themesflat.co/html/ecomus/404.html" class="menu-link-text link text_black-2 position-relative">404</a>
                                            </li>
                                            <li><a href="https://themesflat.co/html/ecomus/icons.html" class="menu-link-text link text_black-2 position-relative">Icons</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item position-relative">
                                        <a href="{{ route('users.blogs') }}" class="item-link">Blog</a>
                                </li>
                                <li class="menu-item"><a href="https://themeforest.net/item/ecomus-ultimate-html5-template/53417990?s_rank=3" class="item-link">Buy now</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xl-3 col-md-4 col-3">
                        <ul class="nav-icon d-flex justify-content-end align-items-center gap-20">
                            <li class="nav-search"><a href="https://themesflat.co/html/ecomus/index.html#canvasSearch" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="nav-icon-item"><i class="icon icon-search"></i></a></li>
                            @auth
                                <li class="nav-account">
                                    <a href="{{ route('users.my-profile') }}" class="nav-icon-item">
                                        <i class="icon icon-account"></i>
                                    </a>
                                </li>
                            @else
                                <li class="nav-account">
                                    <a href="#login" data-bs-toggle="modal" class="nav-icon-item">
                                        <i class="icon icon-account"></i>
                                    </a>
                                </li>
                            @endauth
                            <li class="nav-wishlist"><a href="https://themesflat.co/html/ecomus/wishlist.html" class="nav-icon-item"><i class="icon icon-heart"></i><span class="count-box">0</span></a></li>
                            <li class="nav-cart"><a href="https://themesflat.co/html/ecomus/index.html#shoppingCart" data-bs-toggle="modal" class="nav-icon-item"><i class="icon icon-bag"></i><span class="count-box">0</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>