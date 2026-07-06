@extends('admin.layouts.app')

@section('title', 'Edit Section — '.$section->name)

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.home-sections.index') }}">Homepage Builder</a></li>
    <li class="breadcrumb-item active">{{ $section->name }}</li>
@endsection

@section('content')
    <h1 class="h4 mb-4">Edit Section: {{ $section->name }}</h1>

    <form method="POST" action="{{ route('admin.home-sections.update', $section) }}">
        @csrf
        @method('PUT')

        <div class="row g-3">
            <div class="col-lg-8">
                {{-- Content --}}
                <div class="card mb-3">
                    <div class="card-header">Content</div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                       value="{{ old('title', $section->title) }}">
                                @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Subtitle</label>
                                <input type="text" name="subtitle" class="form-control"
                                       value="{{ old('subtitle', $section->subtitle) }}">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Content</label>
                                <textarea name="content" class="form-control rich-editor" rows="5">{{ old('content', $section->content) }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- CTA buttons --}}
                <div class="card mb-3">
                    <div class="card-header">Call-To-Action Buttons</div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Button 1 — Text</label>
                                <input type="text" name="cta_text" class="form-control"
                                       value="{{ old('cta_text', $section->cta_text) }}" maxlength="100">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Button 1 — URL</label>
                                <input type="text" name="cta_url" class="form-control"
                                       value="{{ old('cta_url', $section->cta_url) }}" placeholder="/contact-us">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Button 2 — Text</label>
                                <input type="text" name="cta_text_2" class="form-control"
                                       value="{{ old('cta_text_2', $section->cta_text_2) }}" maxlength="100">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Button 2 — URL</label>
                                <input type="text" name="cta_url_2" class="form-control"
                                       value="{{ old('cta_url_2', $section->cta_url_2) }}">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Flexible per-section fields (typed by key naming convention) --}}
                @if($section->data)
                    <div class="card mb-3">
                        <div class="card-header">Section Options</div>
                        <div class="card-body">
                            <div class="row g-3">
                                @foreach($section->data as $key => $value)
                                    @php
                                        $label = Str::headline($key);
                                        $isImage = Str::endsWith($key, '_image') || Str::startsWith($key, 'bg_image');
                                        $isLong = Str::contains($key, ['description', 'mission', 'vision', 'features', '_text']) && ! Str::contains($key, ['button', 'card_']);
                                    @endphp
                                    @if($isImage)
                                        <div class="col-md-6">
                                            <x-admin.media-picker :name="'data['.$key.']'" :label="$label"
                                                                  :value="old('data.'.$key, $value) ?? ''" />
                                        </div>
                                    @elseif($isLong)
                                        <div class="col-12">
                                            <label class="form-label">{{ $label }}</label>
                                            <textarea name="data[{{ $key }}]" rows="2" class="form-control">{{ old('data.'.$key, $value) }}</textarea>
                                            @if($key === 'features')
                                                <div class="form-text">Comma-separated list — each item becomes a checkmark bullet</div>
                                            @endif
                                        </div>
                                    @else
                                        <div class="col-md-6">
                                            <label class="form-label">{{ $label }}</label>
                                            <input type="text" name="data[{{ $key }}]" class="form-control"
                                                   value="{{ old('data.'.$key, $value) }}">
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class="col-lg-4">
                {{-- Appearance --}}
                <div class="card mb-3">
                    <div class="card-header">Appearance</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <x-admin.media-picker name="background_image" label="Background Image"
                                                  :value="old('background_image', $section->background_image)" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Background Color</label>
                            <div class="input-group">
                                <input type="color" class="form-control form-control-color"
                                       value="{{ old('background_color', $section->background_color) ?: '#ffffff' }}"
                                       oninput="this.nextElementSibling.value = this.value">
                                <input type="text" name="background_color"
                                       class="form-control @error('background_color') is-invalid @enderror"
                                       value="{{ old('background_color', $section->background_color) }}"
                                       placeholder="#FFFFFF" pattern="#[0-9a-fA-F]{6}"
                                       oninput="this.previousElementSibling.value = this.value">
                                @error('background_color')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div>
                            <label class="form-label d-block">Visibility</label>
                            <div class="form-check form-switch">
                                <input type="hidden" name="status" value="0">
                                <input type="checkbox" class="form-check-input" role="switch" name="status" value="1"
                                       @checked(old('status', $section->status->value) == 1)>
                                <label class="form-check-label small">Show on homepage</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-lg me-1"></i> Save Section
                    </button>
                    <a href="{{ route('admin.home-sections.index') }}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </div>
        </div>
    </form>
@endsection
