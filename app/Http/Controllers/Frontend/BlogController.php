<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private const PER_PAGE = 9;

    /**
     * Blog listing: hero + featured post + paginated grid + sidebar.
     * The featured highlight is hidden while searching, so results stay
     * the sole focus.
     */
    public function index(Request $request): View
    {
        $search = trim((string) $request->query('search'));

        return view('frontend.pages.blog.index', [
            'featured' => $search ? null : $this->featuredPost(),
            'blogs' => $this->baseQuery($search)->paginate(self::PER_PAGE)->withQueryString(),
            'search' => $search,
            'activeCategory' => null,
        ] + $this->sidebarData());
    }

    /**
     * Blog listing filtered to a single category.
     */
    public function category(Request $request, BlogCategory $blogCategory): View
    {
        abort_unless($blogCategory->isActive(), 404);

        $search = trim((string) $request->query('search'));

        return view('frontend.pages.blog.index', [
            'featured' => null,
            'blogs' => $this->baseQuery($search)
                ->where('blog_category_id', $blogCategory->id)
                ->paginate(self::PER_PAGE)->withQueryString(),
            'search' => $search,
            'activeCategory' => $blogCategory,
        ] + $this->sidebarData());
    }

    /**
     * Single post: content, related posts, prev/next navigation, sidebar.
     */
    public function show(Blog $blog): View
    {
        abort_unless(
            $blog->isActive() && $blog->published_at && $blog->published_at->lte(now()),
            404
        );

        $blog->loadMissing('category:id,name,slug');
        $blog->recordView();

        $related = Blog::query()
            ->published()
            ->where('blog_category_id', $blog->blog_category_id)
            ->whereKeyNot($blog->id)
            ->latest('published_at')
            ->limit(3)
            ->get();

        $previous = Blog::query()->published()
            ->where('published_at', '<', $blog->published_at)
            ->orderByDesc('published_at')->first(['id', 'title', 'slug']);

        $next = Blog::query()->published()
            ->where('published_at', '>', $blog->published_at)
            ->orderBy('published_at')->first(['id', 'title', 'slug']);

        return view('frontend.pages.blog.show', [
            'blog' => $blog,
            'seoModel' => $blog,
            'related' => $related,
            'previous' => $previous,
            'next' => $next,
        ] + $this->sidebarData());
    }

    /**
     * Shared query for the listing grid: published posts, optionally
     * keyword-filtered, newest first.
     */
    private function baseQuery(string $search)
    {
        return Blog::query()
            ->published()
            ->with('category:id,name,slug')
            ->when($search, fn ($q) => $q->search($search))
            ->latest('published_at');
    }

    /**
     * The post shown in the "Featured" hero block: the latest post
     * explicitly marked featured, falling back to the latest post overall
     * so the section never sits empty.
     */
    private function featuredPost(): ?Blog
    {
        return Blog::query()->published()->featured()->with('category:id,name,slug')
            ->latest('published_at')->first()
            ?? Blog::query()->published()->with('category:id,name,slug')->latest('published_at')->first();
    }

    /**
     * Data shared by every blog page's sidebar (search, recent posts,
     * categories with post counts, and popular posts by views).
     */
    private function sidebarData(): array
    {
        return [
            'sidebarRecent' => Blog::query()->published()->latest('published_at')->limit(5)->get(),
            'sidebarPopular' => Blog::query()->published()->orderByDesc('views')->limit(5)->get(),
            'sidebarCategories' => BlogCategory::query()->active()
                ->withCount(['blogs as blogs_count' => fn ($q) => $q->published()])
                ->having('blogs_count', '>', 0)
                ->orderBy('name')->get(),
        ];
    }
}
