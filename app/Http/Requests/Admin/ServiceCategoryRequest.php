<?php

namespace App\Http\Requests\Admin;

class ServiceCategoryRequest extends BaseModuleRequest
{
    protected string $permission = 'services';

    public function rules(): array
    {
        return $this->commonRules() + [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:1000'],
            'icon' => ['nullable', 'string', 'max:100'],
            'image' => ['nullable', 'string', 'max:255'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:500'],
        ];
    }
}
