<?php

namespace App\Http\Requests\Admin;

class CounterRequest extends BaseModuleRequest
{
    protected string $permission = 'counters';

    public function rules(): array
    {
        return $this->commonRules() + [
            'title' => ['required', 'string', 'max:255'],
            'value' => ['required', 'integer', 'min:0', 'max:1000000000'],
            'prefix' => ['nullable', 'string', 'max:10'],
            'suffix' => ['nullable', 'string', 'max:10'],
            'icon' => ['nullable', 'string', 'max:100'],
            'duration' => ['required', 'integer', 'between:200,10000'],
        ];
    }
}
