<?php

namespace App\Services\Admin;

use App\Models\Industry;

class IndustryService extends BaseCrudService
{
    protected string $model = Industry::class;

    protected array $searchable = ['name', 'description'];

    protected array $sortable = ['sort_order', 'name', 'created_at'];

    protected string $defaultDirection = 'asc';

    protected array $fileFields = ['image' => 'industries'];
}
