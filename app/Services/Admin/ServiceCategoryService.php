<?php

namespace App\Services\Admin;

use App\Models\ServiceCategory;

class ServiceCategoryService extends BaseCrudService
{
    protected string $model = ServiceCategory::class;

    protected array $searchable = ['name', 'description'];

    protected array $sortable = ['sort_order', 'name', 'created_at'];

    protected string $defaultDirection = 'asc';

    protected array $fileFields = ['image' => 'services'];
}
