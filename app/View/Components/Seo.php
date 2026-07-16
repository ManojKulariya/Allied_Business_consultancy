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
     * Google truncates search-result titles at roughly this length; beyond
     * it the page-specific portion starts getting cut off mid-word.
     */
    private const MAX_TITLE_LENGTH = 60;

    /**
     * Append " | {site name}" unless the title already mentions it — the
     * original, minimal behavior — UNLESS that would exceed
     * MAX_TITLE_LENGTH, in which case fall through to the length-safe
     * rebuild below. Titles that are already within budget are returned
     * completely untouched, formatting and all: this only intervenes on
     * titles that actually have a length problem, never re-normalizes a
     * title that wasn't flagged as an issue in the first place.
     */
    private function withSiteNameSuffix(string $title, string $siteName): string
    {
        $simple = str_contains($title, $siteName) ? $title : "{$title} | {$siteName}";

        if (mb_strlen($simple) <= self::MAX_TITLE_LENGTH) {
            return $simple;
        }

        return $this->truncatedWithSiteNameSuffix($title, $siteName);
    }

    /**
     * Rebuild "{page part} | {site name}", capped at MAX_TITLE_LENGTH, for
     * titles the simple append pushed over budget. The site name is
     * stripped out wherever it already appears (front, back, any
     * separator), the remaining page-specific text is shortened word-safe
     * if still needed, then the suffix is re-appended once, consistently.
     * Stored data (admin fields, seeded titles) is never modified — only
     * what's rendered into the <title>/og:title tags.
     */
    private function truncatedWithSiteNameSuffix(string $title, string $siteName): string
    {
        $pagePart = trim(str_ireplace($siteName, '', $title));
        $pagePart = trim($pagePart, " \t\n\r\0\x0B-–—|");

        if ($pagePart === '') {
            return $siteName;
        }

        $suffix = " | {$siteName}";
        $maxPageLength = self::MAX_TITLE_LENGTH - mb_strlen($suffix);

        $pagePart = $this->shortenToFit($pagePart, $maxPageLength);

        return "{$pagePart}{$suffix}";
    }

    /**
     * Shorten $text to fit $budget characters without ever cutting a word
     * in half and without an ellipsis — three passes, each tried only if
     * the previous one wasn't enough:
     *
     *  1. Drop a colon-introduced subtitle. A colon almost always
     *     separates the main topic from an elaborating clause, and the
     *     lead phrase is the page's primary keyword
     *     ("TDS Return Filing: A Practical Guide for Employers" → "TDS Return Filing").
     *  2. Drop standalone articles (a/an/the) — they carry no keyword
     *     value, so removing them is free length with no meaning lost.
     *  3. Keep as many complete leading words as fit, then trim any
     *     trailing low-value connector word (and/or/for/of/to/&/...) so
     *     the result never ends mid-phrase on a dangling preposition.
     */
    private function shortenToFit(string $text, int $budget): string
    {
        if (mb_strlen($text) <= $budget) {
            return $text;
        }

        if (str_contains($text, ':')) {
            $lead = trim(mb_substr($text, 0, mb_strpos($text, ':')));
            if ($lead !== '') {
                $text = $lead;
            }
        }

        if (mb_strlen($text) <= $budget) {
            return $this->trimTrailingFiller($text);
        }

        $withoutArticles = trim(preg_replace('/\s+/', ' ', preg_replace('/\b(a|an|the)\b/i', '', $text)));
        if ($withoutArticles !== '') {
            $text = $withoutArticles;
        }

        if (mb_strlen($text) <= $budget) {
            return $this->trimTrailingFiller($text);
        }

        $words = preg_split('/\s+/', trim($text));
        $kept = '';

        foreach ($words as $word) {
            $candidate = $kept === '' ? $word : "{$kept} {$word}";

            if (mb_strlen($candidate) > $budget) {
                // Never cut a word in half — if not even the first word
                // fits, keep it whole anyway rather than mangle it.
                $kept = $kept === '' ? $word : $kept;
                break;
            }

            $kept = $candidate;
        }

        return $this->trimTrailingFiller($kept);
    }

    /**
     * Drop a trailing low-value connector word (and/or/for/&/...) so a
     * word-boundary cut never leaves the title dangling on a preposition
     * or conjunction — e.g. "Company Name Change and" → "Company Name Change".
     */
    private function trimTrailingFiller(string $text): string
    {
        $filler = ['and', 'or', 'for', 'of', 'to', 'in', 'on', 'at', 'with', 'a', 'an', 'the', '&'];

        while (true) {
            $text = rtrim($text, " ,:;&–—-");
            $words = preg_split('/\s+/', trim($text));

            if (count($words) <= 1) {
                return $text;
            }

            if (! in_array(mb_strtolower(end($words)), $filler, true)) {
                return $text;
            }

            array_pop($words);
            $text = implode(' ', $words);
        }
    }

    public function render(): View
    {
        return view('components.seo');
    }
}
