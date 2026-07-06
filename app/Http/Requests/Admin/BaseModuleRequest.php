<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Shared authorization for module CRUD requests:
 * POST = module.create, PUT/PATCH = module.edit.
 */
abstract class BaseModuleRequest extends FormRequest
{
    /** Module permission prefix, e.g. 'testimonials'. */
    protected string $permission = '';

    public function authorize(): bool
    {
        $action = $this->isMethod('POST') ? 'create' : 'edit';

        return $this->user()->can("{$this->permission}.{$action}");
    }

    /** Shared rules present on every module. */
    protected function commonRules(): array
    {
        return [
            'status' => ['required', 'in:0,1'],
            'sort_order' => ['nullable', 'integer', 'min:0', 'max:9999'],
        ];
    }
}
