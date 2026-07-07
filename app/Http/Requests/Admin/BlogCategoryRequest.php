<?php

namespace App\Http\Requests\Admin;

class BlogCategoryRequest extends BaseModuleRequest
{
    protected string $permission = 'blogs';

    public function rules(): array
    {
        return $this->commonRules() + [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:1000'],
            'image' => ['nullable', 'string', 'max:255'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:500'],
            'meta_keywords' => ['nullable', 'string', 'max:500'],
        ];
    }
}
