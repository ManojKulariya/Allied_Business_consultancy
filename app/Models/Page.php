<?php

namespace App\Models;

use App\Traits\HasMetaFields;
use App\Traits\HasSlug;

class Page extends BaseModel
{
    use HasMetaFields;
    use HasSlug;

    protected function casts(): array
    {
        return [
            'show_in_footer' => 'boolean',
        ];
    }
}
