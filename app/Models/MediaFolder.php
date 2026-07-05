<?php

namespace App\Models;

use App\Traits\Blameable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MediaFolder extends Model
{
    use Blameable;
    use HasFactory;

    protected $guarded = ['id'];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id')->orderBy('name');
    }

    public function media(): HasMany
    {
        return $this->hasMany(Media::class, 'folder_id');
    }

    /**
     * Ancestor chain (root → this) for breadcrumbs.
     *
     * @return array<int, self>
     */
    public function breadcrumbs(): array
    {
        $crumbs = [$this];
        $current = $this;

        while ($current->parent) {
            $current = $current->parent;
            array_unshift($crumbs, $current);
        }

        return $crumbs;
    }
}
