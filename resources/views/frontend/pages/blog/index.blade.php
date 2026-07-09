@extends('frontend.layouts.app')

@php
    $pageTitle = $activeCategory?->name ?? ($search ? 'Search: '.$search : 'Blog & Insights');
    View::share('seoTitle', ($activeCategory?->meta_title ?: $pageTitle).' — '.setting('site_name', 'Allied Business Consultancy'));
    View::share('seoDescription', $activeCategory?->meta_description ?: 'Expert insights on GST, income tax, company registration and business compliance from Allied Business Consultancy.');
    // Internal search-result pages are duplicate/thin content — keep them out of the index.
    View::share('seoNoIndex', (bool) $search);
@endphp

@section('content')

    {{-- ============ Hero ============ --}}
    <section class="service-hero py-5">
        <div class="container py-4">
            <x-breadcrumb :items="$activeCategory ? ['Blog' => route('frontend.blogs.index'), $activeCategory->name => null] : ['Blog' => null]" />
            <h1 class="mt-3 mb-2">{{ $pageTitle }}</h1>
            <p class="lead mb-0">
                @if($search)
                    {{ $blogs->total() }} result(s) for "{{ $search }}"
                @elseif($activeCategory)
                    {{ $activeCategory->description ?: 'Articles filed under '.$activeCategory->name }}
                @else
                    Practical insights on tax, compliance and business growth — written by our advisory team.
                @endif
            </p>
        </div>
    </section>

    <div class="container section-pad">
        <div class="row g-5">
            <div class="col-lg-8">
                <h2 class="visually-hidden">{{ $activeCategory ? $activeCategory->name.' Articles' : 'Articles' }}</h2>
                {{-- ============ Featured post ============ --}}
                @if($featured)
                    <div class="featured-post-card mb-5" data-aos="fade-up">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <a href="{{ safe_route('frontend.blogs.show', $featured) }}" class="d-block h-100">
                                    <img src="{{ uploaded_asset($featured->image) }}" alt="{{ $featured->title }}"
                                         class="w-100 h-100" style="object-fit: cover;" loading="lazy">
                                </a>
                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                <div class="p-4 p-lg-5">
                                    <span class="badge bg-accent text-dark mb-2">
                                        <i class="bi bi-star-fill me-1"></i> Featured
                                    </span>
                                    <div class="blog-meta mb-2">
                                        <i class="bi bi-folder me-1"></i>{{ $featured->category?->name }}
                                        <span class="mx-2">·</span>
                                        <i class="bi bi-calendar3 me-1"></i>{{ $featured->published_at?->format('d M Y') }}
                                        <span class="mx-2">·</span>
                                        <i class="bi bi-clock me-1"></i>{{ $featured->reading_time }} min read
                                    </div>
                                    <h3 class="mb-2">
                                        <a href="{{ safe_route('frontend.blogs.show', $featured) }}" class="text-decoration-none" style="color: var(--theme-heading);">
                                            {{ $featured->title }}
                                        </a>
                                    </h3>
                                    <p class="mb-3">{{ Str::limit($featured->excerpt, 140) }}</p>
                                    <a href="{{ safe_route('frontend.blogs.show', $featured) }}" class="btn btn-primary">
                                        Read Full Article <i class="bi bi-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                {{-- ============ Blog grid ============ --}}
                <div class="row g-4">
                    @forelse($blogs as $blog)
                        <div class="col-md-6 col-xl-4 d-flex" data-aos="fade-up" data-aos-delay="{{ ($loop->index % 3) * 100 }}">
                            <x-frontend.blog-card :blog="$blog" :detailed="true" class="h-100 w-100" />
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="text-center text-muted py-5">
                                <i class="bi bi-inbox display-4 d-block mb-2"></i>
                                @if($search)
                                    No articles matched "{{ $search }}". Try a different keyword.
                                @else
                                    No articles published in this category yet.
                                @endif
                            </div>
                        </div>
                    @endforelse
                </div>

                {{-- ============ Pagination ============ --}}
                @if($blogs->hasPages())
                    <div class="mt-5">
                        {{ $blogs->onEachSide(1)->links() }}
                    </div>
                @endif
            </div>

            {{-- ============ Sidebar ============ --}}
            <div class="col-lg-4">
                @include('frontend.blog.partials.sidebar')
            </div>
        </div>
    </div>
@endsection
