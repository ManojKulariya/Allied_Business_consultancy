<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends BaseModel
{
    public function category(): BelongsTo
    {
        return $this->belongsTo(GalleryCategory::class, 'gallery_category_id');
    }
}
