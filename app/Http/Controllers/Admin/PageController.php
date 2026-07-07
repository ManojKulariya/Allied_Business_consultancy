<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\PageRequest;
use App\Services\Admin\PageService;

class PageController extends BaseCrudController
{
    protected string $viewPrefix = 'admin.pages';

    protected string $routePrefix = 'admin.pages';

    protected string $title = 'Page';

    protected string $permission = 'pages';

    protected string $storeRequest = PageRequest::class;

    protected string $updateRequest = PageRequest::class;

    public function __construct(PageService $service)
    {
        $this->service = $service;
    }

    protected function columns(): array
    {
        return [
            ['key' => 'title', 'label' => 'Title', 'sortable' => true],
            ['key' => 'slug', 'label' => 'Slug'],
            ['key' => 'show_in_footer', 'label' => 'In Footer', 'type' => 'boolean'],
            ['key' => 'sort_order', 'label' => 'Order', 'sortable' => true],
        ];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Page Title', 'required' => true, 'col' => 'col-md-8'],
            ['name' => 'sort_order', 'label' => 'Sort Order', 'type' => 'number', 'default' => 0, 'col' => 'col-md-4'],
            ['name' => 'subtitle', 'label' => 'Subtitle'],
            ['name' => 'content', 'label' => 'Content', 'type' => 'editor', 'col' => 'col-12'],
            ['name' => 'banner_image', 'label' => 'Banner Image', 'type' => 'media'],
            ['name' => 'show_in_footer', 'label' => 'Show in Footer (Legal Links)', 'type' => 'switch', 'default' => '0'],
            ['name' => 'meta_title', 'label' => 'Meta Title (SEO)'],
            ['name' => 'meta_keywords', 'label' => 'Meta Keywords (SEO)'],
            ['name' => 'meta_description', 'label' => 'Meta Description (SEO)', 'type' => 'textarea', 'col' => 'col-12'],
            ['name' => 'meta_image', 'label' => 'Open Graph / Share Image', 'type' => 'media'],
            ['name' => 'status', 'label' => 'Active', 'type' => 'switch', 'default' => '1'],
        ];
    }
}
