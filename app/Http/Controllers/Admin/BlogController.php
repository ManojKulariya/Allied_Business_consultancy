<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\BlogRequest;
use App\Models\BlogCategory;
use App\Services\Admin\BlogService;

class BlogController extends BaseCrudController
{
    protected string $viewPrefix = 'admin.blogs';

    protected string $routePrefix = 'admin.blogs';

    protected string $title = 'Blog Post';

    protected string $permission = 'blogs';

    protected string $storeRequest = BlogRequest::class;

    protected string $updateRequest = BlogRequest::class;

    public function __construct(BlogService $service)
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
            ['key' => 'published_at', 'label' => 'Published', 'type' => 'date', 'sortable' => true],
            ['key' => 'views', 'label' => 'Views', 'sortable' => true],
        ];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Post Title', 'required' => true, 'col' => 'col-md-8'],
            ['name' => 'blog_category_id', 'label' => 'Category', 'type' => 'select', 'required' => true, 'col' => 'col-md-4',
                'options' => BlogCategory::query()->orderBy('name')->pluck('name', 'id')->all()],
            ['name' => 'excerpt', 'label' => 'Short Description', 'type' => 'textarea', 'col' => 'col-12',
                'help' => 'Shown on blog cards and search results — keep under 160 characters'],
            ['name' => 'content', 'label' => 'Full Content', 'type' => 'editor', 'col' => 'col-12'],
            ['name' => 'image', 'label' => 'Featured Image', 'type' => 'media'],
            ['name' => 'banner_image', 'label' => 'Detail Page Banner', 'type' => 'media'],
            ['name' => 'tags_input', 'label' => 'Tags', 'placeholder' => 'tax, gst, compliance', 'col' => 'col-12',
                'help' => 'Comma-separated — used for search and the tag list on the post'],
            ['name' => 'published_at', 'label' => 'Publish Date & Time', 'type' => 'datetime-local', 'col' => 'col-md-6',
                'help' => 'Leave empty to save as a draft. Set a future date/time to schedule.'],
            ['name' => 'is_featured', 'label' => 'Featured Post', 'type' => 'switch', 'default' => '0', 'col' => 'col-md-6',
                'help' => 'Featured posts appear in the highlighted spot on the blog listing page'],
            ['name' => 'meta_title', 'label' => 'Meta Title (SEO)'],
            ['name' => 'meta_keywords', 'label' => 'Meta Keywords (SEO)'],
            ['name' => 'meta_description', 'label' => 'Meta Description (SEO)', 'type' => 'textarea', 'col' => 'col-12'],
            ['name' => 'meta_image', 'label' => 'Open Graph / Share Image', 'type' => 'media'],
            ['name' => 'status', 'label' => 'Active', 'type' => 'switch', 'default' => '1'],
        ];
    }
}
