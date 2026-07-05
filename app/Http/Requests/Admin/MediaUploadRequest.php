<?php

namespace App\Http\Requests\Admin;

use App\Services\Admin\MediaService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class MediaUploadRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('media.create');
    }

    public function rules(): array
    {
        $mimes = implode(',', Arr::flatten(MediaService::ALLOWED_MIMES));

        return [
            'files' => ['required', 'array', 'max:20'],
            'files.*' => ['required', 'file', "mimetypes:{$mimes}", 'max:10240'], // 10 MB each
            'folder_id' => ['nullable', 'integer', 'exists:media_folders,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'files.*.mimetypes' => 'Only images, PDF, Word and Excel files are allowed.',
            'files.*.max' => 'Each file may not be larger than 10 MB.',
        ];
    }
}
