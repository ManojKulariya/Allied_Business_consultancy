<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MediaFolderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('media.create');
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required', 'string', 'max:100', 'regex:/^[\pL\pN _\-]+$/u',
                Rule::unique('media_folders')
                    ->where('parent_id', $this->input('parent_id'))
                    ->ignore($this->route('folder')),
            ],
            'parent_id' => ['nullable', 'integer', 'exists:media_folders,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.regex' => 'Folder names may only contain letters, numbers, spaces, dashes and underscores.',
            'name.unique' => 'A folder with this name already exists here.',
        ];
    }
}
