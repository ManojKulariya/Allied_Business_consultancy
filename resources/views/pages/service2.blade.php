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
                        <h2>Service Two Details</h2>
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

    <div class="service-details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3>Service 2 — Audit &amp; Assurancy</h3>
                    <p class="mt-20">Detailed information about Service 2. You can replace this content with your actual service description.</p>
                    <a href="{{ route('income-tax-efiling') }}" class="main-btn mt-30">Back to Services</a>
                </div>
            </div>
        </div>
    </div>

@endsection
