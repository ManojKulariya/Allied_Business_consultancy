<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasSlug
{
    /**
     * Boot the trait — auto-generate slug on creating/updating.
     */
    protected static function bootHasSlug(): void
    {
        static::creating(function (Model $model) {
            if (empty($model->{$model->slugColumn()})) {
                $model->{$model->slugColumn()} = $model->generateUniqueSlug(
                    $model->{$model->slugSourceColumn()}
                );
            }
        });

        static::updating(function (Model $model) {
            if ($model->isDirty($model->slugSourceColumn()) && ! $model->isDirty($model->slugColumn())) {
                $model->{$model->slugColumn()} = $model->generateUniqueSlug(
                    $model->{$model->slugSourceColumn()}
                );
            }
        });
    }

    /**
     * The column that stores the slug.
     */
    public function slugColumn(): string
    {
        return 'slug';
    }

    /**
     * The column the slug is generated from.
     */
    public function slugSourceColumn(): string
    {
        return 'title';
    }

    /**
     * Generate a unique slug, appending -2, -3… when a collision exists.
     */
    public function generateUniqueSlug(string $source): string
    {
        $base = Str::slug($source) ?: Str::random(8);
        $slug = $base;
        $counter = 2;

        $query = fn (string $candidate) => static::withoutGlobalScopes()
            ->where($this->slugColumn(), $candidate)
            ->when($this->exists, fn ($q) => $q->whereKeyNot($this->getKey()))
            ->when(
                in_array(\Illuminate\Database\Eloquent\SoftDeletes::class, class_uses_recursive(static::class)),
                fn ($q) => $q->withTrashed()
            )
            ->exists();

        while ($query($slug)) {
            $slug = "{$base}-{$counter}";
            $counter++;
        }

        return $slug;
    }

    /**
     * Use slug for implicit route model binding.
     */
    public function getRouteKeyName(): string
    {
        return $this->slugColumn();
    }
}
