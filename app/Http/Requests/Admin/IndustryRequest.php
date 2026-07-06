<?php

namespace App\Http\Requests\Admin;

class IndustryRequest extends BaseModuleRequest
{
    protected string $permission = 'industries';

    public function rules(): array
    {
        return $this->commonRules() + [
            'name' => ['required', 'string', 'max:255'],
            'icon' => ['nullable', 'string', 'max:100'],
            'image' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:1000'],
        ];
    }
}
