<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class HomeSectionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('home-sections.edit');
    }

    public function rules(): array
    {
        return [
            'title' => ['nullable', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'content' => ['nullable', 'string'],
            'background_image' => ['nullable', 'string', 'max:255'],
            'background_color' => ['nullable', 'regex:/^#[0-9a-fA-F]{6}$/'],
            'cta_text' => ['nullable', 'string', 'max:100'],
            'cta_url' => ['nullable', 'string', 'max:255'],
            'cta_text_2' => ['nullable', 'string', 'max:100'],
            'cta_url_2' => ['nullable', 'string', 'max:255'],
            'status' => ['required', 'in:0,1'],
            'data' => ['nullable', 'array'],
            'data.*' => ['nullable', 'string', 'max:65000'],
        ];
    }

    public function messages(): array
    {
        return [
            'background_color.regex' => 'Background color must be a valid hex value, e.g. #F8F9FA.',
        ];
    }
}
