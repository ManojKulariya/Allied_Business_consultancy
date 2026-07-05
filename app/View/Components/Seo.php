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
    ) {
        $routeSeo = SeoSetting::forRoute(Route::currentRouteName());

        $modelSeo = ($model && method_exists($model, 'seoData')) ? $model->seoData() : [];

        $this->seo = [
            'title' => $title
                ?? ($modelSeo['title'] ?? null)
                ?? $routeSeo?->meta_title
                ?? setting('meta_title', setting('site_name', config('app.name'))),
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
            'canonical' => $modelSeo['canonical'] ?? url()->current(),
            'og_type' => $routeSeo?->og_type ?? 'website',
            'twitter_card' => $routeSeo?->twitter_card ?? 'summary_large_image',
            'no_index' => (bool) ($routeSeo?->no_index ?? false),
            'schema' => $routeSeo?->schema_markup,
        ];
    }

    public function render(): View
    {
        return view('components.seo');
    }
}
