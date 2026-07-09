<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasMetaFields
{
    /**
     * Get the effective meta title (falls back to the record title).
     */
    public function getMetaTitleAttribute($value): string
    {
        return $value ?: ($this->title ?? $this->name ?? config('app.name'));
    }

    /**
     * SEO payload consumed by the <x-seo> component.
     */
    public function seoData(): array
    {
        return [
            'title' => $this->meta_title,
            'description' => $this->attributes['meta_description'] ?: $this->fallbackDescription(),
            'keywords' => $this->attributes['meta_keywords'] ?? null,
            'image' => $this->attributes['meta_image'] ?? ($this->attributes['image'] ?? null),
            'canonical' => canonical_url(),
        ];
    }

    /**
     * Per-record description derived from the record's own content when
     * meta_description isn't explicitly set — so an unfilled field falls
     * back to something specific to this record instead of jumping all
     * the way to the sitewide default (which every such record would then
     * share, reading as duplicate content to search engines).
     */
    private function fallbackDescription(): ?string
    {
        if (! empty($this->attributes['excerpt'])) {
            return $this->attributes['excerpt'];
        }

        if (! empty($this->attributes['content'])) {
            return Str::limit(trim(strip_tags($this->attributes['content'])), 160);
        }

        return null;
    }
}
