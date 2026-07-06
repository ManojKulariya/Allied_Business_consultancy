<?php

namespace App\Http\Requests\Admin;

class ClientRequest extends BaseModuleRequest
{
    protected string $permission = 'clients';

    public function rules(): array
    {
        return $this->commonRules() + [
            'name' => ['required', 'string', 'max:255'],
            'logo' => ['nullable', 'string', 'max:255'],
            'website' => ['nullable', 'url', 'max:255'],
        ];
    }
}
