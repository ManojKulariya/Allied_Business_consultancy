@extends('frontend.layouts.app')

@section('content')

    {{-- ============ Hero ============ --}}
    <section class="service-hero py-5">
        <div class="container py-4">
            <x-breadcrumb :items="[$page->title => null]" />

            <div class="row justify-content-center text-center mt-3">
                <div class="col-lg-9">
                    <h1 class="mt-3 mb-2">{{ $page->title }}</h1>
                    @if($page->subtitle)
                        <p class="lead mb-0">{{ $page->subtitle }}</p>
                    @endif
                </div>
            </div>
        </div>
    </section>

    {{-- ============ Featured image ============ --}}
    @if($page->banner_image)
        <div class="container" style="margin-top: -3rem;">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <img src="{{ uploaded_asset($page->banner_image) }}" alt="{{ $page->title }}"
                         class="w-100 rounded-16 shadow" style="max-height: 420px; object-fit: cover;" loading="lazy">
                </div>
            </div>
        </div>
    @endif

    {{-- ============ Content ============ --}}
    <div class="container section-pad">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="post-content" data-aos="fade-up">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </div>
@endsection
