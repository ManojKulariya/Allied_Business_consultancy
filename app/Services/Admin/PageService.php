<?php

namespace App\Services\Admin;

use App\Models\Page;

class PageService extends BaseCrudService
{
    protected string $model = Page::class;

    protected array $searchable = ['title', 'content'];

    protected array $sortable = ['id', 'title', 'sort_order', 'created_at'];

    protected string $defaultDirection = 'asc';

    protected array $fileFields = [
        'banner_image' => 'pages',
        'meta_image' => 'pages',
    ];
}
