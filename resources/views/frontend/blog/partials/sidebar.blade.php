{{--
    Shared blog sidebar — search, recent posts, categories (with live post
    counts), popular posts (by views), newsletter signup and a consultation
    CTA. Included by both the listing page and the single-post page so the
    two never drift apart.
    Expects: $sidebarRecent, $sidebarPopular, $sidebarCategories, and
    optionally $activeCategory (for the highlighted state) / $search.
--}}
<aside class="blog-sidebar">
    {{-- Search --}}
    <div class="widget-card mb-4">
        <form method="GET" action="{{ safe_route('frontend.blogs.index') }}">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search articles…"
                       value="{{ $search ?? request('search') }}">
                <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
            </div>
        </form>
    </div>

    {{-- Recent posts --}}
    @if(($sidebarRecent ?? collect())->isNotEmpty())
        <div class="widget-card mb-4">
            <h6 class="widget-title">Recent Posts</h6>
            <ul class="list-unstyled widget-post-list mb-0">
                @foreach($sidebarRecent as $post)
                    <li>
                        <a href="{{ safe_route('frontend.blogs.show', $post) }}" class="widget-post">
                            <img src="{{ uploaded_asset($post->image) }}" alt="{{ $post->title }}" loading="lazy">
                            <span>
                                <span class="widget-post-title">{{ Str::limit($post->title, 48) }}</span>
                                <span class="widget-post-date"><i class="bi bi-calendar3 me-1"></i>{{ $post->published_at?->format('d M Y') }}</span>
                            </span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Categories --}}
    @if(($sidebarCategories ?? collect())->isNotEmpty())
        <div class="widget-card mb-4">
            <h6 class="widget-title">Categories</h6>
            <ul class="list-unstyled widget-category-list mb-0">
                @foreach($sidebarCategories as $cat)
                    <li>
                        <a href="{{ safe_route('frontend.blogs.category', $cat) }}"
                           class="{{ isset($activeCategory) && $activeCategory?->id === $cat->id ? 'active' : '' }}">
                            <span><i class="bi bi-folder2 me-2"></i>{{ $cat->name }}</span>
                            <span class="badge">{{ $cat->blogs_count }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Popular posts --}}
    @if(($sidebarPopular ?? collect())->isNotEmpty())
        <div class="widget-card mb-4">
            <h6 class="widget-title">Popular Posts</h6>
            <ul class="list-unstyled widget-post-list mb-0">
                @foreach($sidebarPopular as $post)
                    <li>
                        <a href="{{ safe_route('frontend.blogs.show', $post) }}" class="widget-post">
                            <img src="{{ uploaded_asset($post->image) }}" alt="{{ $post->title }}" loading="lazy">
                            <span>
                                <span class="widget-post-title">{{ Str::limit($post->title, 48) }}</span>
                                <span class="widget-post-date"><i class="bi bi-eye me-1"></i>{{ number_format($post->views) }} views</span>
                            </span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Newsletter --}}
    <div class="widget-card mb-4 widget-newsletter">
        <h6 class="widget-title text-white">
            <i class="bi bi-envelope-heart me-1"></i> {{ setting('footer_newsletter_title', 'Subscribe to Our Newsletter') }}
        </h6>
        <p class="small mb-3" style="color: rgba(255,255,255,.75);">
            {{ setting('footer_newsletter_text', 'Get the latest insights delivered to your inbox.') }}
        </p>
        <form method="POST" action="{{ safe_route('frontend.newsletter.subscribe') }}">
            @csrf
            <input type="email" name="email" class="form-control mb-2" placeholder="Your email address" required>
            <button class="btn btn-accent w-100" type="submit">Subscribe</button>
            @error('email')
                <div class="text-warning small mt-2">{{ $message }}</div>
            @enderror
        </form>
    </div>

    {{-- Consultation CTA --}}
    <div class="service-cta-card p-4">
        <div class="accent-line mb-3"></div>
        <h6 class="text-white mb-2">Need Expert Advice?</h6>
        <p class="small mb-3" style="color: rgba(255,255,255,.72);">
            Talk to a business consultant — free, no obligations.
        </p>
        <a href="{{ url('/contact-us') }}" class="btn btn-accent w-100">Contact Us</a>
    </div>
</aside>
