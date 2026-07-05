@extends('admin.layouts.app')

@section('title', $groups[$group]['label'].' Settings')

@section('breadcrumbs')
    <li class="breadcrumb-item active">Settings</li>
@endsection

@section('content')
    <h1 class="h4 mb-4">Website Settings</h1>

    <div class="row g-3">
        {{-- Group tabs --}}
        <div class="col-lg-3 col-xl-2">
            <div class="card">
                <div class="list-group list-group-flush">
                    @foreach($groups as $key => $meta)
                        <a href="{{ route('admin.settings.edit', $key) }}"
                           class="list-group-item list-group-item-action d-flex align-items-center gap-2 {{ $key === $group ? 'active' : '' }}">
                            <i class="bi {{ $meta['icon'] }}"></i> {{ $meta['label'] }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Settings form --}}
        <div class="col-lg-9 col-xl-10">
            <div class="card">
                <div class="card-header">
                    <i class="bi {{ $groups[$group]['icon'] }} me-1"></i> {{ $groups[$group]['label'] }}
                </div>
                <div class="card-body">
                    @if($settings->isEmpty())
                        <p class="text-muted mb-0">No settings in this group yet.</p>
                    @else
                        <form method="POST" action="{{ route('admin.settings.update', $group) }}">
                            @csrf
                            @method('PUT')

                            <div class="row g-3">
                                @foreach($settings as $setting)
                                    <div class="{{ in_array($setting->type, ['textarea', 'editor']) ? 'col-12' : 'col-md-6' }}">
                                        @switch($setting->type)
                                            @case('image')
                                                <x-admin.media-picker
                                                    :name="'settings['.$setting->key.']'"
                                                    :label="$setting->label ?? $setting->key"
                                                    :value="old('settings.'.$setting->key, $setting->value)" />
                                                @break

                                            @case('boolean')
                                                <label class="form-label d-block">{{ $setting->label ?? $setting->key }}</label>
                                                <div class="form-check form-switch">
                                                    <input type="hidden" name="settings[{{ $setting->key }}]" value="0">
                                                    <input type="checkbox" class="form-check-input" role="switch"
                                                           name="settings[{{ $setting->key }}]" value="1"
                                                           @checked(old('settings.'.$setting->key, $setting->value) == '1')>
                                                </div>
                                                @break

                                            @case('color')
                                                <label class="form-label">{{ $setting->label ?? $setting->key }}</label>
                                                <div class="input-group">
                                                    <input type="color" class="form-control form-control-color"
                                                           value="{{ old('settings.'.$setting->key, $setting->value) ?: '#0d6efd' }}"
                                                           oninput="this.nextElementSibling.value = this.value">
                                                    <input type="text" name="settings[{{ $setting->key }}]"
                                                           class="form-control @error('settings.'.$setting->key) is-invalid @enderror"
                                                           value="{{ old('settings.'.$setting->key, $setting->value) }}"
                                                           pattern="#[0-9a-fA-F]{6}" placeholder="#0D6EFD"
                                                           oninput="this.previousElementSibling.value = this.value">
                                                    @error('settings.'.$setting->key)
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                @break

                                            @case('select')
                                                @php $options = json_decode($setting->options ?? '[]', true) ?: []; @endphp
                                                <label class="form-label">{{ $setting->label ?? $setting->key }}</label>
                                                <select name="settings[{{ $setting->key }}]" class="form-select">
                                                    @foreach($options as $optValue => $optLabel)
                                                        <option value="{{ $optValue }}"
                                                            @selected(old('settings.'.$setting->key, $setting->value) == $optValue)>
                                                            {{ $optLabel }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @break

                                            @case('textarea')
                                            @case('editor')
                                                <label class="form-label">{{ $setting->label ?? $setting->key }}</label>
                                                <textarea name="settings[{{ $setting->key }}]" rows="3"
                                                          class="form-control @error('settings.'.$setting->key) is-invalid @enderror">{{ old('settings.'.$setting->key, $setting->value) }}</textarea>
                                                @error('settings.'.$setting->key)
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                @break

                                            @case('password')
                                                <label class="form-label">{{ $setting->label ?? $setting->key }}</label>
                                                <input type="password" name="settings[{{ $setting->key }}]"
                                                       class="form-control" value="{{ old('settings.'.$setting->key, $setting->value) }}"
                                                       autocomplete="new-password">
                                                @break

                                            @default
                                                <label class="form-label">{{ $setting->label ?? $setting->key }}</label>
                                                <input type="text" name="settings[{{ $setting->key }}]"
                                                       class="form-control @error('settings.'.$setting->key) is-invalid @enderror"
                                                       value="{{ old('settings.'.$setting->key, $setting->value) }}">
                                                @error('settings.'.$setting->key)
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                        @endswitch
                                    </div>
                                @endforeach
                            </div>

                            <div class="mt-4 d-flex gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-check-lg me-1"></i> Save {{ $groups[$group]['label'] }}
                                </button>
                                @if($group === 'theme')
                                    <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-secondary">
                                        <i class="bi bi-eye me-1"></i> Preview Website
                                    </a>
                                @endif
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
