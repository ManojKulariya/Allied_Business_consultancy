<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\BlogCategoryRequest;
use App\Services\Admin\BlogCategoryService;

class BlogCategoryController extends BaseCrudController
{
    protected string $viewPrefix = 'admin.blog-categories';

    protected string $routePrefix = 'admin.blog-categories';

    protected string $title = 'Blog Category';

    protected string $permission = 'blogs';

    protected string $storeRequest = BlogCategoryRequest::class;

    protected string $updateRequest = BlogCategoryRequest::class;

    public function __construct(BlogCategoryService $service)
    {
        $this->service = $service;
    }

    protected function columns(): array
    {
        return [
            ['key' => 'image', 'label' => 'Image', 'type' => 'image'],
            ['key' => 'name', 'label' => 'Name', 'sortable' => true],
            ['key' => 'slug', 'label' => 'Slug', 'type' => 'badge'],
            ['key' => 'sort_order', 'label' => 'Order', 'sortable' => true],
        ];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'name', 'label' => 'Category Name', 'required' => true],
            ['name' => 'image', 'label' => 'Image', 'type' => 'media'],
            ['name' => 'description', 'label' => 'Description', 'type' => 'textarea', 'col' => 'col-12'],
            ['name' => 'meta_title', 'label' => 'Meta Title (SEO)'],
            ['name' => 'meta_description', 'label' => 'Meta Description (SEO)', 'type' => 'textarea'],
            ['name' => 'meta_keywords', 'label' => 'Meta Keywords (SEO)'],
            ['name' => 'sort_order', 'label' => 'Sort Order', 'type' => 'number', 'default' => 0],
            ['name' => 'status', 'label' => 'Active', 'type' => 'switch', 'default' => '1'],
        ];
    }
}
