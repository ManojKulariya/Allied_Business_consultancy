@extends('frontend.layouts.app')

@section('content')

    {{-- ============ Hero ============ --}}
    <section class="service-hero py-5">
        <div class="container py-4">
            <x-breadcrumb :items="['Blog' => route('frontend.blogs.index'), ($blog->category?->name ?? 'Article') => safe_route('frontend.blogs.category', $blog->category), $blog->title => null]" />

            <div class="row justify-content-center text-center mt-3">
                <div class="col-lg-9">
                    <span class="hero-eyebrow mb-3">
                        <i class="bi bi-folder me-1 text-accent"></i> {{ $blog->category?->name }}
                    </span>
                    <h1 class="mt-3 mb-3">{{ $blog->title }}</h1>

                    <div class="d-flex flex-wrap justify-content-center gap-3 small" style="color: rgba(255,255,255,.75);">
                        <span><i class="bi bi-person-circle me-1"></i>{{ $blog->creator?->name ?? setting('site_name') }}</span>
                        <span><i class="bi bi-calendar3 me-1"></i>{{ $blog->published_at?->format('d M Y') }}</span>
                        <span><i class="bi bi-clock me-1"></i>{{ $blog->reading_time }} min read</span>
                        <span><i class="bi bi-eye me-1"></i>{{ number_format($blog->views) }} views</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============ Featured image ============ --}}
    @if($blog->image)
        <div class="container" style="margin-top: -3rem;">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <img src="{{ uploaded_asset($blog->banner_image ?: $blog->image) }}" alt="{{ $blog->title }}"
                         class="w-100 rounded-16 shadow" style="max-height: 480px; object-fit: cover;" loading="lazy">
                </div>
            </div>
        </div>
    @endif

    <div class="container section-pad">
        <div class="row g-5">
            <div class="col-lg-8">
                {{-- ============ Social share ============ --}}
                <div class="social-share d-flex flex-wrap align-items-center gap-2 mb-4" data-aos="fade-up">
                    <span class="small fw-semibold me-1" style="color: var(--theme-heading);">Share:</span>
                    <a class="share-btn share-facebook" target="_blank" rel="noopener"
                       href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" aria-label="Share on Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a class="share-btn share-twitter" target="_blank" rel="noopener"
                       href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($blog->title) }}" aria-label="Share on X">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                    <a class="share-btn share-linkedin" target="_blank" rel="noopener"
                       href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" aria-label="Share on LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a class="share-btn share-whatsapp" target="_blank" rel="noopener"
                       href="https://wa.me/?text={{ urlencode($blog->title.' — '.url()->current()) }}" aria-label="Share on WhatsApp">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                    <button type="button" class="share-btn share-copy" id="copyLinkBtn" data-url="{{ url()->current() }}" aria-label="Copy link">
                        <i class="bi bi-link-45deg"></i>
                    </button>
                </div>

                {{-- ============ Table of contents (auto-built from H2/H3 by JS) ============ --}}
                <div class="toc-card mb-4 d-none" id="tocCard" data-aos="fade-up">
                    <h6 class="widget-title"><i class="bi bi-list-ul me-1"></i> On This Page</h6>
                    <ul class="list-unstyled mb-0" id="tocList"></ul>
                </div>

                {{-- ============ Content ============ --}}
                <div class="post-content" id="postContent" data-aos="fade-up">
                    {!! $blog->content !!}
                </div>

                {{-- ============ Tags ============ --}}
                @if(!empty($blog->tags))
                    <div class="d-flex flex-wrap align-items-center gap-2 mt-4 pt-4 border-top">
                        <span class="small fw-semibold me-1" style="color: var(--theme-heading);">
                            <i class="bi bi-tags me-1"></i>Tags:
                        </span>
                        @foreach($blog->tags as $tag)
                            <a href="{{ route('frontend.blogs.index', ['search' => $tag]) }}" class="tag-chip">{{ $tag }}</a>
                        @endforeach
                    </div>
                @endif

                {{-- ============ Comment placeholder ============ --}}
                <div class="mt-5 pt-4 border-top" data-aos="fade-up">
                    <h5 class="mb-3"><i class="bi bi-chat-square-text me-2"></i>Comments</h5>
                    <div class="premium-card p-4 text-center text-muted">
                        <i class="bi bi-chat-dots display-6 d-block mb-2 opacity-50"></i>
                        Comments are coming soon. In the meantime, reach out via our
                        <a href="{{ url('/contact-us') }}">contact page</a> with any questions.
                    </div>
                </div>

                {{-- ============ Previous / Next ============ --}}
                @if($previous || $next)
                    <div class="row g-3 mt-4" data-aos="fade-up">
                        <div class="col-md-6">
                            @if($previous)
                                <a href="{{ safe_route('frontend.blogs.show', $previous) }}" class="post-nav-card d-block">
                                    <span class="small text-muted"><i class="bi bi-arrow-left me-1"></i>Previous Article</span>
                                    <strong class="d-block">{{ Str::limit($previous->title, 55) }}</strong>
                                </a>
                            @endif
                        </div>
                        <div class="col-md-6 text-md-end">
                            @if($next)
                                <a href="{{ safe_route('frontend.blogs.show', $next) }}" class="post-nav-card d-block">
                                    <span class="small text-muted">Next Article<i class="bi bi-arrow-right ms-1"></i></span>
                                    <strong class="d-block">{{ Str::limit($next->title, 55) }}</strong>
                                </a>
                            @endif
                        </div>
                    </div>
                @endif

                {{-- ============ Related posts ============ --}}
                @if($related->isNotEmpty())
                    <div class="mt-5 pt-4 border-top">
                        <h4 class="mb-4" data-aos="fade-up"><i class="bi bi-collection me-2"></i>Related Articles</h4>
                        <div class="row g-4">
                            @foreach($related as $relatedPost)
                                <div class="col-md-6 col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                                    <x-frontend.blog-card :blog="$relatedPost" class="h-100 w-100" />
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- ============ Newsletter CTA ============ --}}
                <div class="newsletter-panel p-4 p-md-5 mt-5" data-aos="fade-up">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-6">
                            <span class="icon-badge mb-3"><i class="bi bi-envelope-heart"></i></span>
                            <h4 class="mb-2">{{ setting('footer_newsletter_title', 'Stay Ahead With Expert Insights') }}</h4>
                            <p class="mb-0">{{ setting('footer_newsletter_text', 'Monthly tax tips and compliance updates — straight to your inbox.') }}</p>
                        </div>
                        <div class="col-lg-6">
                            <form method="POST" action="{{ safe_route('frontend.newsletter.subscribe') }}">
                                @csrf
                                <div class="input-group input-group-lg">
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email address" required>
                                    <button class="btn btn-primary px-4" type="submit">Subscribe <i class="bi bi-send ms-1"></i></button>
                                </div>
                                @error('email')<div class="text-danger small mt-2">{{ $message }}</div>@enderror
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ============ Sidebar ============ --}}
            <div class="col-lg-4">
                @include('frontend.blog.partials.sidebar')
            </div>
        </div>
    </div>

    {{-- ============ Final CTA ============ --}}
    <section class="pb-5">
        <div class="container">
            <div class="cta-section p-5 text-center" data-aos="zoom-in">
                <div class="position-relative">
                    <h2 class="text-white mb-2">Have Questions About This Topic?</h2>
                    <p class="text-white-50 fs-5 mb-4">Our advisory team is one call away — free initial consultation.</p>
                    <div class="d-flex flex-wrap gap-3 justify-content-center">
                        <a href="{{ url('/contact-us') }}" class="btn btn-accent btn-lg px-4">
                            Get Free Consultation <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                        <a href="{{ safe_route('frontend.blogs.index') }}" class="btn btn-outline-light btn-lg px-4">
                            More Articles
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Article + Breadcrumb schema for search engines --}}
    @php
        $articleSchemaJson = json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'BlogPosting',
            'headline' => $blog->title,
            'description' => $blog->excerpt,
            'image' => $blog->image ? uploaded_asset($blog->image) : null,
            'datePublished' => $blog->published_at?->toIso8601String(),
            'dateModified' => $blog->updated_at?->toIso8601String(),
            'author' => ['@type' => 'Organization', 'name' => $blog->creator?->name ?? setting('site_name')],
            'publisher' => ['@type' => 'Organization', 'name' => setting('site_name')],
            'mainEntityOfPage' => url()->current(),
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    @endphp
    <script type="application/ld+json">{!! $articleSchemaJson !!}</script>
@endsection

@push('scripts')
    <script>
        window.blogPostConfig = { readingContentSelector: '#postContent', tocCardSelector: '#tocCard', tocListSelector: '#tocList' };
    </script>
@endpush
