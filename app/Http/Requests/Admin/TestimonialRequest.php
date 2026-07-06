<?php

namespace App\Http\Requests\Admin;

class TestimonialRequest extends BaseModuleRequest
{
    protected string $permission = 'testimonials';

    public function rules(): array
    {
        return $this->commonRules() + [
            'name' => ['required', 'string', 'max:255'],
            'designation' => ['nullable', 'string', 'max:255'],
            'company' => ['nullable', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:2000'],
            'image' => ['nullable', 'string', 'max:255'],
            'rating' => ['required', 'integer', 'between:1,5'],
            'video_url' => ['nullable', 'url', 'max:255'],
        ];
    }
}
