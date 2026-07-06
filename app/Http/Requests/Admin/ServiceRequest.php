<?php

namespace App\Http\Requests\Admin;

class ServiceRequest extends BaseModuleRequest
{
    protected string $permission = 'services';

    public function rules(): array
    {
        return $this->commonRules() + [
            'service_category_id' => ['required', 'integer', 'exists:service_categories,id'],
            'title' => ['required', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string', 'max:500'],
            'content' => ['nullable', 'string'],
            'icon' => ['nullable', 'string', 'max:100'],
            'image' => ['nullable', 'string', 'max:255'],
            'banner_image' => ['nullable', 'string', 'max:255'],
            'is_featured' => ['required', 'in:0,1'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:500'],
            'meta_keywords' => ['nullable', 'string', 'max:500'],
        ];
    }
}
