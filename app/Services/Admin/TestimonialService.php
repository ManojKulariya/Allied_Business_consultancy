<?php

namespace App\Services\Admin;

use App\Models\Testimonial;

class TestimonialService extends BaseCrudService
{
    protected string $model = Testimonial::class;

    protected array $searchable = ['name', 'company', 'designation', 'content'];

    protected array $sortable = ['sort_order', 'name', 'rating', 'created_at'];

    protected string $defaultDirection = 'asc';

    protected array $fileFields = ['image' => 'testimonials'];
}
