<?php

namespace App\Http\Requests\Admin;

class FaqRequest extends BaseModuleRequest
{
    protected string $permission = 'faqs';

    public function rules(): array
    {
        return $this->commonRules() + [
            'question' => ['required', 'string', 'max:500'],
            'answer' => ['required', 'string'],
            'category' => ['nullable', 'string', 'max:100'],
        ];
    }
}
