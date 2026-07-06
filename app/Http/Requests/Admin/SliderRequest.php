<?php

namespace App\Http\Requests\Admin;

class SliderRequest extends BaseModuleRequest
{
    protected string $permission = 'sliders';

    public function rules(): array
    {
        return $this->commonRules() + [
            'title' => ['nullable', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:1000'],
            'image' => ['required', 'string', 'max:255'],
            'button_text' => ['nullable', 'string', 'max:100'],
            'button_url' => ['nullable', 'string', 'max:255'],
            'button_text_2' => ['nullable', 'string', 'max:100'],
            'button_url_2' => ['nullable', 'string', 'max:255'],
            'text_position' => ['required', 'in:left,center,right'],
        ];
    }

    public function messages(): array
    {
        return [
            'image.required' => 'Please choose a slider image from the media library.',
        ];
    }
}
