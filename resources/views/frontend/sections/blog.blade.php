{{-- Latest blog posts — automatic from published Blogs --}}
@php
    $blogs = \App\Models\Blog::query()
        ->published()
        ->with('category:id,name,slug')
        ->latest('published_at')
        ->limit((int) $section->dataValue('limit', 3))
        ->get();
@endphp

@if($blogs->isNotEmpty())
    <section class="section-pad" id="section-blog">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-5" data-aos="fade-up">
                <div>
                    @if($section->subtitle)<span class="section-eyebrow mb-2">{{ $section->subtitle }}</span>@endif
                    <h2 class="section-title mb-0">{{ $section->title }}</h2>
                </div>
                <a href="{{ safe_route('frontend.blogs.index') }}" class="btn btn-outline-primary">
                    View All Posts <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>

            <div class="row g-4">
                @foreach($blogs as $blog)
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <article class="premium-card blog-card overflow-hidden">
                            <div class="img-wrap">
                                <img src="{{ uploaded_asset($blog->image) }}" alt="{{ $blog->title }}" class="w-100" loading="lazy">
                            </div>
                            <div class="p-4">
                                <div class="blog-meta mb-2">
                                    <i class="bi bi-folder me-1"></i>{{ $blog->category?->name }}
                                    <span class="mx-2">·</span>
                                    <i class="bi bi-calendar3 me-1"></i>{{ $blog->published_at?->format('d M Y') }}
                                </div>
                                <h5 class="mb-2">
                                    <a href="{{ safe_route('frontend.blogs.show', $blog) }}"
                                       class="text-decoration-none" style="color: var(--theme-heading);">
                                        {{ Str::limit($blog->title, 62) }}
                                    </a>
                                </h5>
                                <p class="small mb-3">{{ Str::limit($blog->excerpt, 100) }}</p>
                                <a href="{{ safe_route('frontend.blogs.show', $blog) }}" class="card-link">
                                    Read More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
