<?php

namespace App\Models;

use App\Traits\HasMetaFields;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BlogCategory extends BaseModel
{
    use HasMetaFields;
    use HasSlug;

    public function slugSourceColumn(): string
    {
        return 'name';
    }

    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class);
    }

    public function activeBlogs(): HasMany
    {
        return $this->blogs()->active()->whereNotNull('published_at');
    }
}
