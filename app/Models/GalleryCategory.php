<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GalleryCategory extends BaseModel
{
    use HasSlug;

    public function slugSourceColumn(): string
    {
        return 'name';
    }

    public function galleries(): HasMany
    {
        return $this->hasMany(Gallery::class);
    }

    public function activeGalleries(): HasMany
    {
        return $this->galleries()->active()->orderBy('sort_order');
    }
}
