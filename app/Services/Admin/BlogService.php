<?php

namespace App\Services\Admin;

use App\Models\Blog;

class BlogService extends BaseCrudService
{
    protected string $model = Blog::class;

    protected array $searchable = ['title', 'excerpt', 'content'];

    protected array $sortable = ['id', 'title', 'views', 'published_at', 'created_at'];

    protected string $defaultDirection = 'desc';

    protected array $fileFields = [
        'image' => 'blogs',
        'banner_image' => 'blogs',
        'meta_image' => 'blogs',
    ];

    protected array $with = ['category:id,name'];
}
