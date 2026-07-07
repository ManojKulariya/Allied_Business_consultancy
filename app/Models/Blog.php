<?php

namespace App\Models;

use App\Traits\HasMetaFields;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends BaseModel
{
    use HasMetaFields;
    use HasSlug;

    /** Average adult reading speed, used for the reading-time estimate. */
    private const WORDS_PER_MINUTE = 200;

    protected function casts(): array
    {
        return [
            'tags' => 'array',
            'is_featured' => 'boolean',
            'published_at' => 'datetime',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }

    /**
     * Scope: publicly visible posts (active + published).
     */
    public function scopePublished(Builder $query): Builder
    {
        return $query->active()
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }

    /**
     * Scope: featured posts.
     */
    public function scopeFeatured(Builder $query): Builder
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope: keyword search across title, excerpt, content, slug, tags
     * and the parent category name — powers the frontend blog search.
     */
    public function scopeSearch(Builder $query, string $term): Builder
    {
        return $query->where(function (Builder $q) use ($term) {
            $q->where('title', 'like', "%{$term}%")
                ->orWhere('excerpt', 'like', "%{$term}%")
                ->orWhere('content', 'like', "%{$term}%")
                ->orWhere('slug', 'like', "%{$term}%")
                ->orWhereJsonContains('tags', $term)
                ->orWhereHas('category', fn (Builder $c) => $c->where('name', 'like', "%{$term}%"));
        });
    }

    /**
     * Increment view counter without touching updated_at.
     */
    public function recordView(): void
    {
        $this->timestamps = false;
        $this->increment('views');
        $this->timestamps = true;
    }

    /**
     * Estimated reading time in whole minutes (minimum 1), computed from
     * the plain-text word count of the content — no stored column needed.
     */
    public function getReadingTimeAttribute(): int
    {
        $words = str_word_count(strip_tags((string) $this->content));

        return max(1, (int) ceil($words / self::WORDS_PER_MINUTE));
    }

    /**
     * Comma-separated view of the tags array, for the admin form's plain
     * text input (submitted back as 'tags_input' and re-split in
     * BlogRequest — keeps the generic form free of a bespoke "tags" type).
     */
    public function getTagsInputAttribute(): string
    {
        return implode(', ', $this->tags ?? []);
    }
}
