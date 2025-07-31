@include('user.includes.header')
        <!-- page-title -->
        <div class="tf-page-title">
            <div class="container-full">
                <div class="row">
                    <div class="col-12">
                        <div class="heading text-center">Blog</div>
                        <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                            <li>
                                <a href="https://themesflat.co/html/ecomus/index.html">Home</a>
                            </li>
                            <li>
                                <i class="icon-arrow-right"></i>
                            </li>
                            <li>
                                Blogs
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page-title -->

        <!-- blog-grid-main -->
<div class="blog-grid-main">
    <div class="container">
        <div class="row">
            @forelse($blogs as $blog)
            <div class="col-xl-4 col-md-6 col-12">
                <div class="blog-article-item">
                    <div class="article-thumb">
                        <a href="#">
                            <img src="{{ asset('Storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                        </a>
                        <div class="article-label">
                            <a href="#" class="tf-btn btn-sm radius-3 btn-fill animate-hover-btn">{{ $blog->category ?? 'Blog' }}</a>
                        </div>
                    </div>
                    <div class="article-content">
                        <div class="article-title">
                            <a href="#">{{ $blog->content }}</a>
                        </div>
                        <div class="article-btn">
                            <a href="#" class="tf-btn btn-line fw-6">
                                Read more<i class="icon icon-arrow1-top-left"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p>No blogs found.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
        <!-- /blog-grid-main -->

 @include('user.includes.footer')