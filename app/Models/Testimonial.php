<?php

namespace App\Models;

class Testimonial extends BaseModel
{
    protected function casts(): array
    {
        return [
            'rating' => 'integer',
        ];
    }
}
