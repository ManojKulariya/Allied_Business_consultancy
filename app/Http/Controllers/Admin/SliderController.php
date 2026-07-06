<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\SliderRequest;
use App\Services\Admin\SliderService;

class SliderController extends BaseCrudController
{
    protected string $viewPrefix = 'admin.sliders';

    protected string $routePrefix = 'admin.sliders';

    protected string $title = 'Slider';

    protected string $permission = 'sliders';

    protected string $storeRequest = SliderRequest::class;

    protected string $updateRequest = SliderRequest::class;

    public function __construct(SliderService $service)
    {
        $this->service = $service;
    }

    protected function columns(): array
    {
        return [
            ['key' => 'image', 'label' => 'Image', 'type' => 'image'],
            ['key' => 'title', 'label' => 'Title'],
            ['key' => 'text_position', 'label' => 'Position', 'type' => 'badge'],
            ['key' => 'sort_order', 'label' => 'Order', 'sortable' => true],
        ];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Main Heading'],
            ['name' => 'subtitle', 'label' => 'Small Heading (above title)'],
            ['name' => 'description', 'label' => 'Description', 'type' => 'textarea', 'col' => 'col-12'],
            ['name' => 'image', 'label' => 'Background Image', 'type' => 'media', 'required' => true],
            ['name' => 'text_position', 'label' => 'Text Position', 'type' => 'select', 'required' => true, 'default' => 'left',
                'options' => ['left' => 'Left', 'center' => 'Center', 'right' => 'Right']],
            ['name' => 'button_text', 'label' => 'Primary Button Text'],
            ['name' => 'button_url', 'label' => 'Primary Button URL', 'placeholder' => '/contact-us'],
            ['name' => 'button_text_2', 'label' => 'Secondary Button Text'],
            ['name' => 'button_url_2', 'label' => 'Secondary Button URL'],
            ['name' => 'sort_order', 'label' => 'Sort Order', 'type' => 'number', 'default' => 0],
            ['name' => 'status', 'label' => 'Active', 'type' => 'switch', 'default' => '1'],
        ];
    }
}
