<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\TestimonialRequest;
use App\Services\Admin\TestimonialService;

class TestimonialController extends BaseCrudController
{
    protected string $viewPrefix = 'admin.testimonials';

    protected string $routePrefix = 'admin.testimonials';

    protected string $title = 'Testimonial';

    protected string $permission = 'testimonials';

    protected string $storeRequest = TestimonialRequest::class;

    protected string $updateRequest = TestimonialRequest::class;

    public function __construct(TestimonialService $service)
    {
        $this->service = $service;
    }

    protected function columns(): array
    {
        return [
            ['key' => 'image', 'label' => 'Photo', 'type' => 'image'],
            ['key' => 'name', 'label' => 'Name', 'sortable' => true],
            ['key' => 'company', 'label' => 'Company'],
            ['key' => 'rating', 'label' => 'Rating', 'type' => 'badge', 'sortable' => true],
            ['key' => 'sort_order', 'label' => 'Order', 'sortable' => true],
        ];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'name', 'label' => 'Client Name', 'required' => true],
            ['name' => 'designation', 'label' => 'Designation'],
            ['name' => 'company', 'label' => 'Company'],
            ['name' => 'rating', 'label' => 'Rating', 'type' => 'select', 'required' => true, 'default' => 5,
                'options' => [5 => '★★★★★ (5)', 4 => '★★★★ (4)', 3 => '★★★ (3)', 2 => '★★ (2)', 1 => '★ (1)']],
            ['name' => 'content', 'label' => 'Review', 'type' => 'textarea', 'required' => true, 'col' => 'col-12', 'rows' => 4],
            ['name' => 'image', 'label' => 'Client Photo', 'type' => 'media'],
            ['name' => 'video_url', 'label' => 'Video Link (optional)', 'type' => 'url', 'placeholder' => 'https://youtube.com/…'],
            ['name' => 'sort_order', 'label' => 'Sort Order', 'type' => 'number', 'default' => 0],
            ['name' => 'status', 'label' => 'Active', 'type' => 'switch', 'default' => '1'],
        ];
    }
}
