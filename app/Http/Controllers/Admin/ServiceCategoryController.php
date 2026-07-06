<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\ServiceCategoryRequest;
use App\Services\Admin\ServiceCategoryService;

class ServiceCategoryController extends BaseCrudController
{
    protected string $viewPrefix = 'admin.service-categories';

    protected string $routePrefix = 'admin.service-categories';

    protected string $title = 'Service Category';

    protected string $permission = 'services';

    protected string $storeRequest = ServiceCategoryRequest::class;

    protected string $updateRequest = ServiceCategoryRequest::class;

    public function __construct(ServiceCategoryService $service)
    {
        $this->service = $service;
    }

    protected function columns(): array
    {
        return [
            ['key' => 'icon', 'label' => 'Icon', 'type' => 'icon'],
            ['key' => 'name', 'label' => 'Name', 'sortable' => true],
            ['key' => 'slug', 'label' => 'Slug', 'type' => 'badge'],
            ['key' => 'sort_order', 'label' => 'Order', 'sortable' => true],
        ];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'name', 'label' => 'Category Name', 'required' => true],
            ['name' => 'icon', 'label' => 'Icon', 'type' => 'icon'],
            ['name' => 'description', 'label' => 'Description', 'type' => 'textarea', 'col' => 'col-12'],
            ['name' => 'image', 'label' => 'Image', 'type' => 'media'],
            ['name' => 'meta_title', 'label' => 'Meta Title (SEO)'],
            ['name' => 'meta_description', 'label' => 'Meta Description (SEO)', 'type' => 'textarea'],
            ['name' => 'sort_order', 'label' => 'Sort Order', 'type' => 'number', 'default' => 0],
            ['name' => 'status', 'label' => 'Active', 'type' => 'switch', 'default' => '1'],
        ];
    }
}
