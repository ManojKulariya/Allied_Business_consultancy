<?php

namespace App\Http\Requests\Admin;

class PageRequest extends BaseModuleRequest
{
    protected string $permission = 'pages';

    public function rules(): array
    {
        return $this->commonRules() + [
            'title' => ['required', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'content' => ['nullable', 'string'],
            'banner_image' => ['nullable', 'string', 'max:255'],
            'show_in_footer' => ['nullable', 'in:0,1'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_keywords' => ['nullable', 'string', 'max:500'],
            'meta_description' => ['nullable', 'string', 'max:1000'],
            'meta_image' => ['nullable', 'string', 'max:255'],
        ];
    }
}
