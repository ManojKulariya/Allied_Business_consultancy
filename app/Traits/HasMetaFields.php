<?php

namespace App\Traits;

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
            'description' => $this->attributes['meta_description'] ?? null,
            'keywords' => $this->attributes['meta_keywords'] ?? null,
            'image' => $this->attributes['meta_image'] ?? ($this->attributes['image'] ?? null),
            'canonical' => url()->current(),
        ];
    }
}
