<?php

namespace App\Services\Admin;

use App\Models\Slider;

class SliderService extends BaseCrudService
{
    protected string $model = Slider::class;

    protected array $searchable = ['title', 'subtitle'];

    protected array $sortable = ['sort_order', 'created_at'];

    protected string $defaultDirection = 'asc';

    protected array $fileFields = ['image' => 'sliders'];
}
