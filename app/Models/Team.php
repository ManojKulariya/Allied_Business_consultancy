<?php

namespace App\Models;

use App\Traits\HasSlug;

class Team extends BaseModel
{
    use HasSlug;

    public function slugSourceColumn(): string
    {
        return 'name';
    }

    protected function casts(): array
    {
        return [
            'social_links' => 'array',
        ];
    }
}
