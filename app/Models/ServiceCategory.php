<?php

namespace App\Models;

use App\Traits\HasMetaFields;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ServiceCategory extends BaseModel
{
    use HasMetaFields;
    use HasSlug;

    public function slugSourceColumn(): string
    {
        return 'name';
    }

    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }

    public function activeServices(): HasMany
    {
        return $this->services()->active()->orderBy('sort_order');
    }
}
