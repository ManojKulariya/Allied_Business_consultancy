<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Page;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

class SitemapController extends Controller
{
    /**
     * XML sitemap covering every publicly indexable URL. Built by hand
     * (no external package) — Career/Team/Gallery/Testimonial/FAQ index
     * URLs are included only via Route::has() so they start appearing
     * automatically once those modules go live, with no further edits here.
     */
    public function index(): Response
    {
        $urls = collect();

        $urls->push($this->url(route('frontend.home'), '1.0', 'daily'));
        $urls->push($this->url(route('frontend.about'), '0.8', 'monthly'));

        if (Route::has('frontend.contact')) {
            $urls->push($this->url(route('frontend.contact'), '0.8', 'monthly'));
        }

        if (Route::has('frontend.blogs.index')) {
            $urls->push($this->url(route('frontend.blogs.index'), '0.7', 'daily'));
        }

        foreach (['teams.index', 'galleries.index', 'testimonials.index', 'faqs.index', 'careers.index', 'services.index'] as $name) {
            if (Route::has("frontend.{$name}")) {
                $urls->push($this->url(route("frontend.{$name}"), '0.6', 'weekly'));
            }
        }

        if (Route::has('frontend.blogs.category')) {
            BlogCategory::query()->active()->each(
                fn (BlogCategory $category) => $urls->push($this->url(route('frontend.blogs.category', $category), '0.6', 'weekly'))
            );
        }

        if (Route::has('frontend.blogs.show')) {
            Blog::query()->published()->each(
                fn (Blog $blog) => $urls->push($this->url(route('frontend.blogs.show', $blog), '0.6', 'monthly', $blog->updated_at))
            );
        }

        Page::query()->active()->get()->each(function (Page $page) use ($urls) {
            if ($page->slug === 'about-us') {
                return;
            }

            $urls->push($this->url(route('frontend.page', $page), '0.5', 'monthly', $page->updated_at));
        });

        if (! Route::has('frontend.services.show')) {
            foreach ($this->staticServiceSlugs() as $slug) {
                $urls->push($this->url(route('frontend.services.static', $slug), '0.7', 'monthly'));
            }
        }

        return response()
            ->view('sitemap', ['urls' => $urls])
            ->header('Content-Type', 'application/xml');
    }

    private function url(string $loc, string $priority, string $changefreq, ?\DateTimeInterface $lastmod = null): array
    {
        return [
            'loc' => $loc,
            'lastmod' => ($lastmod ?? now())->format('Y-m-d'),
            'changefreq' => $changefreq,
            'priority' => $priority,
        ];
    }

    /**
     * Slugs of the hand-built static service pages (pre-CMS), scanned from
     * disk so newly added pages appear in the sitemap with zero extra edits.
     */
    private function staticServiceSlugs(): array
    {
        $directory = resource_path('views/frontend/services/static');

        if (! File::isDirectory($directory)) {
            return [];
        }

        return collect(File::files($directory))
            ->map(fn ($file) => $file->getBasename('.blade.php'))
            ->reject(fn (string $slug) => str_starts_with($slug, '_'))
            ->values()
            ->all();
    }
}
