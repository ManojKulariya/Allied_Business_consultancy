<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\WhyChooseItemRequest;
use App\Services\Admin\WhyChooseItemService;

class WhyChooseItemController extends BaseCrudController
{
    protected string $viewPrefix = 'admin.why-choose-items';

    protected string $routePrefix = 'admin.why-choose-items';

    protected string $title = 'Why Choose Us Card';

    protected string $permission = 'why-choose-items';

    protected string $storeRequest = WhyChooseItemRequest::class;

    protected string $updateRequest = WhyChooseItemRequest::class;

    public function __construct(WhyChooseItemService $service)
    {
        $this->service = $service;
    }

    protected function columns(): array
    {
        return [
            ['key' => 'icon', 'label' => 'Icon', 'type' => 'icon'],
            ['key' => 'title', 'label' => 'Title', 'sortable' => true],
            ['key' => 'background_color', 'label' => 'Background', 'type' => 'color'],
            ['key' => 'sort_order', 'label' => 'Order', 'sortable' => true],
        ];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Card Title', 'required' => true],
            ['name' => 'icon', 'label' => 'Icon', 'type' => 'icon'],
            ['name' => 'description', 'label' => 'Description', 'type' => 'textarea', 'col' => 'col-12'],
            ['name' => 'image', 'label' => 'Image (optional)', 'type' => 'media'],
            ['name' => 'background_color', 'label' => 'Card Background Color', 'type' => 'color'],
            ['name' => 'sort_order', 'label' => 'Sort Order', 'type' => 'number', 'default' => 0],
            ['name' => 'status', 'label' => 'Active', 'type' => 'switch', 'default' => '1'],
        ];
    }
}
