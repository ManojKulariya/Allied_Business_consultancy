<?php

namespace App\Services\Admin;

use App\Models\BlogCategory;

class BlogCategoryService extends BaseCrudService
{
    protected string $model = BlogCategory::class;

    protected array $searchable = ['name', 'description'];

    protected array $sortable = ['sort_order', 'name', 'created_at'];

    protected string $defaultDirection = 'asc';

    protected array $fileFields = ['image' => 'blog-categories'];
}
