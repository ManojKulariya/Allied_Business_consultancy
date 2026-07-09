{{-- Generic module form (create + edit) driven by the controller's fields() config.
     Field types: text, textarea, editor, media, select, number, color,
     icon, switch, url, email, date, datetime-local, time --}}
@extends('admin.layouts.app')

@php $editing = $item !== null; @endphp

@section('title', ($editing ? 'Edit ' : 'Add ').$title)

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route("{$routePrefix}.index") }}">{{ Str::plural($title) }}</a></li>
    <li class="breadcrumb-item active">{{ $editing ? 'Edit' : 'Add' }}</li>
@endsection

@section('content')
    <h1 class="h4 mb-4">{{ $editing ? 'Edit' : 'Add' }} {{ $title }}</h1>

    <form method="POST"
          action="{{ $editing ? route("{$routePrefix}.update", $item->id) : route("{$routePrefix}.store") }}">
        @csrf
        @if($editing) @method('PUT') @endif

        <div class="card">
            <div class="card-body">
                <div class="row g-3">
                    @foreach($fields as $field)
                        @php
                            $name = $field['name'];
                            // Bracket names (social_links[linkedin]) → dot keys for old()/data_get()/errors
                            $dotName = str_replace(['[', ']'], ['.', ''], $name);
                            $label = $field['label'] ?? Str::headline($dotName);
                            $value = old($dotName, $editing ? data_get($item, $dotName) : ($field['default'] ?? ''));
                            // Cast-backed enums (e.g. the 'status' column via HasStatus)
                            // aren't Stringable — unwrap to the raw scalar so every field
                            // type below can safely compare/echo the value.
                            if ($value instanceof \BackedEnum) {
                                $value = $value->value;
                            }
                            $required = $field['required'] ?? false;
                            $col = $field['col'] ?? 'col-md-6';
                        @endphp

                        <div class="{{ $col }}">
                            @switch($field['type'] ?? 'text')
                                @case('media')
                                    <x-admin.media-picker :name="$name" :label="$label" :value="$value ?? ''"
                                                          :type="$field['media_type'] ?? 'image'" :required="$required" />
                                    @break

                                @case('textarea')
                                    <label class="form-label">{{ $label }} @if($required)<span class="text-danger">*</span>@endif</label>
                                    <textarea name="{{ $name }}" rows="{{ $field['rows'] ?? 3 }}"
                                              class="form-control @error($dotName) is-invalid @enderror"
                                              @required($required)>{{ $value }}</textarea>
                                    @error($dotName)<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    @break

                                @case('editor')
                                    <label class="form-label">{{ $label }} @if($required)<span class="text-danger">*</span>@endif</label>
                                    <textarea name="{{ $name }}" rows="6"
                                              class="form-control rich-editor @error($dotName) is-invalid @enderror">{{ $value }}</textarea>
                                    @error($dotName)<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    @break

                                @case('select')
                                    <label class="form-label">{{ $label }} @if($required)<span class="text-danger">*</span>@endif</label>
                                    <select name="{{ $name }}" class="form-select @error($dotName) is-invalid @enderror" @required($required)>
                                        @unless($required)<option value="">— None —</option>@endunless
                                        @foreach($field['options'] ?? [] as $optValue => $optLabel)
                                            <option value="{{ $optValue }}" @selected((string) $value === (string) $optValue)>{{ $optLabel }}</option>
                                        @endforeach
                                    </select>
                                    @error($dotName)<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    @break

                                @case('color')
                                    <label class="form-label">{{ $label }}</label>
                                    <div class="input-group">
                                        <input type="color" class="form-control form-control-color"
                                               value="{{ $value ?: '#ffffff' }}"
                                               oninput="this.nextElementSibling.value = this.value">
                                        <input type="text" name="{{ $name }}"
                                               class="form-control @error($dotName) is-invalid @enderror"
                                               value="{{ $value }}" placeholder="#FFFFFF" pattern="#[0-9a-fA-F]{6}"
                                               oninput="this.previousElementSibling.value = this.value">
                                        @error($dotName)<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                    @break

                                @case('icon')
                                    <label class="form-label">{{ $label }} @if($required)<span class="text-danger">*</span>@endif</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi {{ $value ?: 'bi-question-circle' }} icon-preview"></i></span>
                                        <input type="text" name="{{ $name }}"
                                               class="form-control icon-input @error($dotName) is-invalid @enderror"
                                               value="{{ $value }}" placeholder="bi-briefcase" @required($required)>
                                        @error($dotName)<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="form-text">
                                        Bootstrap Icons class — <a href="https://icons.getbootstrap.com/" target="_blank" rel="noopener">browse icons</a>
                                    </div>
                                    @break

                                @case('switch')
                                    <label class="form-label d-block">{{ $label }}</label>
                                    <div class="form-check form-switch mt-2">
                                        <input type="hidden" name="{{ $name }}" value="0">
                                        <input type="checkbox" class="form-check-input" role="switch"
                                               name="{{ $name }}" value="1" @checked((string) $value === '1' || $value === 1 || $value === true)>
                                    </div>
                                    @break

                                @case('number')
                                    <label class="form-label">{{ $label }} @if($required)<span class="text-danger">*</span>@endif</label>
                                    <input type="number" name="{{ $name }}" step="{{ $field['step'] ?? 1 }}"
                                           min="{{ $field['min'] ?? 0 }}" @isset($field['max']) max="{{ $field['max'] }}" @endisset
                                           class="form-control @error($dotName) is-invalid @enderror"
                                           value="{{ $value }}" @required($required)>
                                    @error($dotName)<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    @break

                                @default
                                    @php
                                        // Native input types that need no special handling beyond
                                        // passing the type through and formatting Carbon values.
                                        $nativeTypes = ['url', 'email', 'date', 'datetime-local', 'time', 'tel'];
                                        $inputType = in_array($field['type'] ?? 'text', $nativeTypes) ? $field['type'] : 'text';

                                        if ($value instanceof \Illuminate\Support\Carbon) {
                                            $value = match ($inputType) {
                                                'date' => $value->format('Y-m-d'),
                                                'datetime-local' => $value->format('Y-m-d\TH:i'),
                                                'time' => $value->format('H:i'),
                                                default => (string) $value,
                                            };
                                        }
                                    @endphp
                                    <label class="form-label">{{ $label }} @if($required)<span class="text-danger">*</span>@endif</label>
                                    <input type="{{ $inputType }}"
                                           name="{{ $name }}"
                                           class="form-control @error($dotName) is-invalid @enderror"
                                           value="{{ $value }}" @required($required)
                                           @isset($field['placeholder']) placeholder="{{ $field['placeholder'] }}" @endisset>
                                    @error($dotName)<div class="invalid-feedback">{{ $message }}</div>@enderror
                            @endswitch

                            @if(!empty($field['help']) && ($field['type'] ?? '') !== 'icon')
                                <div class="form-text">{{ $field['help'] }}</div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="card-footer bg-white d-flex gap-2">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-check-lg me-1"></i> {{ $editing ? 'Save Changes' : 'Create '.$title }}
                </button>
                <a href="{{ route("{$routePrefix}.index") }}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        // Live icon preview
        $(document).on('input', '.icon-input', function () {
            $(this).closest('.input-group').find('.icon-preview')
                .attr('class', 'bi icon-preview ' + this.value.trim());
        });
    </script>
    @if(collect($fields)->contains('name', 'meta_title'))
        @include('admin.settings.partials.seo-preview')
    @endif
@endpush
