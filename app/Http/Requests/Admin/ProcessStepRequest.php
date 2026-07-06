<?php

namespace App\Http\Requests\Admin;

class ProcessStepRequest extends BaseModuleRequest
{
    protected string $permission = 'process-steps';

    public function rules(): array
    {
        return $this->commonRules() + [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:1000'],
            'icon' => ['nullable', 'string', 'max:100'],
        ];
    }
}
