<?php

namespace App\View\Components;

use App\Models\SeoSetting;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

/**
 * Renders all SEO meta tags for a page.
 *
 * Priority: explicit props > model seoData() > SeoSetting for route > site defaults.
 * Usage: <x-seo :model="$blog" />  or  <x-seo title="Contact Us" />
 */
class Seo extends Component
{
    public array $seo;

    public function __construct(
        mixed $model = null,
        ?string $title = null,
        ?string $description = null,
        ?string $keywords = null,
        ?string $image = null,
        ?bool $noIndex = null,
    ) {
        $routeSeo = SeoSetting::forRoute(Route::currentRouteName());

        $modelSeo = ($model && method_exists($model, 'seoData')) ? $model->seoData() : [];

        $siteName = setting('site_name', config('app.name'));

        $resolvedTitle = $title
            ?? ($modelSeo['title'] ?? null)
            ?? $routeSeo?->meta_title
            ?? setting('meta_title', $siteName);

        $locale = app()->getLocale();

        $this->seo = [
            'title' => $this->withSiteNameSuffix($resolvedTitle, $siteName),
            'description' => $description
                ?? ($modelSeo['description'] ?? null)
                ?? $routeSeo?->meta_description
                ?? setting('meta_description'),
            'keywords' => $keywords
                ?? ($modelSeo['keywords'] ?? null)
                ?? $routeSeo?->meta_keywords
                ?? setting('meta_keywords'),
            'image' => $image
                ?? ($modelSeo['image'] ?? null)
                ?? $routeSeo?->meta_image
                ?? setting('og_image'),
            'canonical' => $modelSeo['canonical'] ?? canonical_url(),
            'og_type' => $routeSeo?->og_type ?? 'website',
            'og_locale' => str_contains($locale, '_') ? $locale : "{$locale}_IN",
            'twitter_card' => $routeSeo?->twitter_card ?? 'summary_large_image',
            'twitter_site' => setting('twitter_handle'),
            'no_index' => $noIndex ?? (bool) ($routeSeo?->no_index ?? false),
            'schema' => $routeSeo?->schema_markup,
            'author' => $siteName,
            'theme_color' => setting('theme_primary_color', '#0B3C5D'),
            'google_site_verification' => setting('google_site_verification'),
        ];
    }

    /**
     * Append " | {site name}" unless the title already mentions it, so every
     * title source (model, route default, site default) gets the convention
     * for free without hand-editing each seeded/model record.
     */
    private function withSiteNameSuffix(string $title, string $siteName): string
    {
        return str_contains($title, $siteName) ? $title : "{$title} | {$siteName}";
    }

    public function render(): View
    {
        return view('components.seo');
    }
}
