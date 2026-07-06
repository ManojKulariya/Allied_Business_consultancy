<?php

namespace App\Http\Requests\Admin;

class WhyChooseItemRequest extends BaseModuleRequest
{
    protected string $permission = 'why-choose-items';

    public function rules(): array
    {
        return $this->commonRules() + [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:1000'],
            'icon' => ['nullable', 'string', 'max:100'],
            'image' => ['nullable', 'string', 'max:255'],
            'background_color' => ['nullable', 'regex:/^#[0-9a-fA-F]{6}$/'],
        ];
    }
}
