{{-- Latest blog posts --}}
@php
    $blogs = \App\Models\Blog::query()
        ->published()
        ->with('category:id,name,slug')
        ->latest('published_at')
        ->limit((int) $section->dataValue('limit', 3))
        ->get();
@endphp

@if($blogs->isNotEmpty())
    <x-frontend.section-wrapper :section="$section" class="bg-light">
        <div class="row g-4">
            @foreach($blogs as $blog)
                <div class="col-md-6 col-lg-4">
                    <article class="card h-100 shadow-sm">
                        <img src="{{ uploaded_asset($blog->image) }}" alt="{{ $blog->title }}"
                             class="card-img-top" style="aspect-ratio: 16/9; object-fit: cover;" loading="lazy">
                        <div class="card-body">
                            <div class="small text-muted mb-1">
                                <i class="bi bi-folder me-1"></i>{{ $blog->category?->name }}
                                <span class="mx-1">·</span>
                                <i class="bi bi-calendar3 me-1"></i>{{ $blog->published_at?->format('d M Y') }}
                            </div>
                            <h5 class="card-title">
                                <a href="{{ safe_route('frontend.blogs.show', $blog) }}" class="text-decoration-none text-dark stretched-link">
                                    {{ Str::limit($blog->title, 65) }}
                                </a>
                            </h5>
                            <p class="card-text text-muted small">{{ Str::limit($blog->excerpt, 100) }}</p>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </x-frontend.section-wrapper>
@endif
