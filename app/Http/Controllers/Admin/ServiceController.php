<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\ServiceRequest;
use App\Models\ServiceCategory;
use App\Services\Admin\ServiceService;

class ServiceController extends BaseCrudController
{
    protected string $viewPrefix = 'admin.services';

    protected string $routePrefix = 'admin.services';

    protected string $title = 'Service';

    protected string $permission = 'services';

    protected string $storeRequest = ServiceRequest::class;

    protected string $updateRequest = ServiceRequest::class;

    public function __construct(ServiceService $service)
    {
        $this->service = $service;
    }

    protected function columns(): array
    {
        return [
            ['key' => 'image', 'label' => 'Image', 'type' => 'image'],
            ['key' => 'title', 'label' => 'Title', 'sortable' => true],
            ['key' => 'category.name', 'label' => 'Category', 'type' => 'badge'],
            ['key' => 'is_featured', 'label' => 'Featured', 'type' => 'boolean'],
            ['key' => 'sort_order', 'label' => 'Order', 'sortable' => true],
        ];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Service Title', 'required' => true, 'col' => 'col-md-8'],
            ['name' => 'service_category_id', 'label' => 'Category', 'type' => 'select', 'required' => true, 'col' => 'col-md-4',
                'options' => ServiceCategory::query()->orderBy('name')->pluck('name', 'id')->all()],
            ['name' => 'excerpt', 'label' => 'Short Description', 'type' => 'textarea', 'col' => 'col-12',
                'help' => 'Shown on service cards — keep under 160 characters'],
            ['name' => 'content', 'label' => 'Full Content', 'type' => 'editor', 'col' => 'col-12'],
            ['name' => 'icon', 'label' => 'Icon', 'type' => 'icon'],
            ['name' => 'image', 'label' => 'Card Image', 'type' => 'media'],
            ['name' => 'banner_image', 'label' => 'Detail Page Banner', 'type' => 'media'],
            ['name' => 'is_featured', 'label' => 'Featured Service', 'type' => 'switch', 'default' => '0',
                'help' => 'Featured services appear in the homepage Featured strip'],
            ['name' => 'meta_title', 'label' => 'Meta Title (SEO)'],
            ['name' => 'meta_description', 'label' => 'Meta Description (SEO)', 'type' => 'textarea'],
            ['name' => 'sort_order', 'label' => 'Sort Order', 'type' => 'number', 'default' => 0],
            ['name' => 'status', 'label' => 'Active', 'type' => 'switch', 'default' => '1'],
        ];
    }
}
