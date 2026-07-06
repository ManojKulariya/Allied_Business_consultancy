<?php

namespace App\Models;

class Counter extends BaseModel
{
    protected function casts(): array
    {
        return [
            'value' => 'integer',
            'duration' => 'integer',
        ];
    }
}
