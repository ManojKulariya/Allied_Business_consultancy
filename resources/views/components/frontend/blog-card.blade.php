{{--
    Shared blog card — used by the homepage "Latest Blog" section, the
    blog listing grid and category pages. Keeping one component means the
    card design can never drift between pages.

    Usage:
      <x-frontend.blog-card :blog="$blog" />                    homepage default (unchanged look)
      <x-frontend.blog-card :blog="$blog" :detailed="true" />   blog listing: adds reading time + author row
      <x-frontend.blog-card :blog="$blog" :compact="true" />    sidebar/related-post mini variant
--}}
@props(['blog', 'compact' => false, 'detailed' => false])

<article {{ $attributes->merge(['class' => 'premium-card blog-card overflow-hidden']) }}>
    <div class="img-wrap">
        <a href="{{ safe_route('frontend.blogs.show', $blog) }}">
            <img src="{{ uploaded_asset($blog->image) }}" alt="{{ $blog->title }}" class="w-100" loading="lazy" width="640" height="360">
        </a>
    </div>
    <div class="{{ $compact ? 'p-3' : 'p-4' }}">
        <div class="blog-meta mb-2">
            <i class="bi bi-folder me-1"></i>{{ $blog->category?->name }}
            <span class="mx-2">·</span>
            <i class="bi bi-calendar3 me-1"></i>{{ $blog->published_at?->format('d M Y') }}
            @if($detailed && ! $compact)
                <span class="mx-2">·</span>
                <i class="bi bi-clock me-1"></i>{{ $blog->reading_time }} min read
            @endif
        </div>
        <h3 class="{{ $compact ? 'h6' : 'h5' }} mb-2">
            <a href="{{ safe_route('frontend.blogs.show', $blog) }}" class="text-decoration-none" style="color: var(--theme-heading);">
                {{ Str::limit($blog->title, $compact ? 50 : 62) }}
            </a>
        </h3>
        @unless($compact)
            <p class="small mb-3">{{ Str::limit($blog->excerpt, 100) }}</p>
            @if($detailed)
                <div class="d-flex justify-content-between align-items-center">
                    <span class="small text-muted">
                        <i class="bi bi-person-circle me-1"></i>{{ $blog->creator?->name ?? setting('site_name') }}
                    </span>
                    <a href="{{ safe_route('frontend.blogs.show', $blog) }}" class="card-link" aria-label="Read more: {{ $blog->title }}">
                        Read More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            @else
                <a href="{{ safe_route('frontend.blogs.show', $blog) }}" class="card-link" aria-label="Read more: {{ $blog->title }}">
                    Read More <i class="bi bi-arrow-right"></i>
                </a>
            @endif
        @endunless
    </div>
</article>
