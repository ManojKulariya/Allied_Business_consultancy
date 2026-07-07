<?php

namespace App\Http\Requests\Admin;

class BlogRequest extends BaseModuleRequest
{
    protected string $permission = 'blogs';

    /**
     * Split the plain-text 'tags_input' field (as typed in the admin form)
     * into the array actually persisted to the 'tags' JSON column.
     */
    protected function prepareForValidation(): void
    {
        $tags = array_values(array_filter(array_map(
            'trim',
            explode(',', (string) $this->input('tags_input'))
        )));

        $this->merge(['tags' => $tags]);
    }

    public function rules(): array
    {
        return $this->commonRules() + [
            'blog_category_id' => ['required', 'integer', 'exists:blog_categories,id'],
            'title' => ['required', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string', 'max:500'],
            'content' => ['nullable', 'string'],
            'image' => ['nullable', 'string', 'max:255'],
            'banner_image' => ['nullable', 'string', 'max:255'],
            'tags' => ['nullable', 'array'],
            'tags.*' => ['string', 'max:50'],
            'is_featured' => ['required', 'in:0,1'],
            'published_at' => ['nullable', 'date'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:500'],
            'meta_keywords' => ['nullable', 'string', 'max:500'],
            'meta_image' => ['nullable', 'string', 'max:255'],
        ];
    }
}
