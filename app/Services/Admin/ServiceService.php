<?php

namespace App\Services\Admin;

use App\Models\Service;

class ServiceService extends BaseCrudService
{
    protected string $model = Service::class;

    protected array $searchable = ['title', 'excerpt', 'content'];

    protected array $sortable = ['sort_order', 'title', 'created_at'];

    protected string $defaultDirection = 'asc';

    protected array $fileFields = ['image' => 'services', 'banner_image' => 'services'];

    protected array $with = ['category:id,name'];
}
