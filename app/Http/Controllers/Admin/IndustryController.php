<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\IndustryRequest;
use App\Services\Admin\IndustryService;

class IndustryController extends BaseCrudController
{
    protected string $viewPrefix = 'admin.industries';

    protected string $routePrefix = 'admin.industries';

    protected string $title = 'Industry';

    protected string $permission = 'industries';

    protected string $storeRequest = IndustryRequest::class;

    protected string $updateRequest = IndustryRequest::class;

    public function __construct(IndustryService $service)
    {
        $this->service = $service;
    }

    protected function columns(): array
    {
        return [
            ['key' => 'icon', 'label' => 'Icon', 'type' => 'icon'],
            ['key' => 'name', 'label' => 'Industry', 'sortable' => true],
            ['key' => 'description', 'label' => 'Description'],
            ['key' => 'sort_order', 'label' => 'Order', 'sortable' => true],
        ];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'name', 'label' => 'Industry Name', 'required' => true],
            ['name' => 'icon', 'label' => 'Icon', 'type' => 'icon'],
            ['name' => 'image', 'label' => 'Image', 'type' => 'media'],
            ['name' => 'description', 'label' => 'Short Description', 'type' => 'textarea', 'col' => 'col-12'],
            ['name' => 'sort_order', 'label' => 'Sort Order', 'type' => 'number', 'default' => 0],
            ['name' => 'status', 'label' => 'Active', 'type' => 'switch', 'default' => '1'],
        ];
    }
}
