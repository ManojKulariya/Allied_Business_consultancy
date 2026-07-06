@extends('admin.layouts.app')

@section('title', 'SEO Settings')

@section('breadcrumbs')
    <li class="breadcrumb-item active">SEO Settings</li>
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 mb-0">SEO Settings — Static Pages</h1>
        <span class="text-muted small">Dynamic records (blogs, services…) carry their own SEO fields</span>
    </div>

    <div class="accordion" id="seoAccordion">
        @foreach($seoSettings as $seo)
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#seo-{{ $seo->id }}">
                        <span class="fw-semibold me-2">{{ $seo->page_label }}</span>
                        <code class="small text-muted">{{ $seo->route_name }}</code>
                        @if($seo->no_index)
                            <span class="badge bg-warning text-dark ms-2">noindex</span>
                        @endif
                    </button>
                </h2>
                <div id="seo-{{ $seo->id }}" class="accordion-collapse collapse" data-bs-parent="#seoAccordion">
                    <div class="accordion-body">
                        <form method="POST" action="{{ route('admin.seo-settings.update', $seo->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Meta Title</label>
                                    <input type="text" name="meta_title" class="form-control"
                                           value="{{ old('meta_title', $seo->meta_title) }}" maxlength="255">
                                    <div class="form-text">Recommended: 50–60 characters</div>
                                </div>
                                <div class="col-md-6">
                                    <x-admin.media-picker name="meta_image" label="Share Image (OG)"
                                                          :value="old('meta_image', $seo->meta_image)" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Meta Description</label>
                                    <textarea name="meta_description" rows="3" class="form-control"
                                              maxlength="500">{{ old('meta_description', $seo->meta_description) }}</textarea>
                                    <div class="form-text">Recommended: 150–160 characters</div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Meta Keywords</label>
                                    <textarea name="meta_keywords" rows="3" class="form-control"
                                              maxlength="500">{{ old('meta_keywords', $seo->meta_keywords) }}</textarea>
                                </div>
                                <div class="col-md-9">
                                    <label class="form-label">Schema Markup (JSON-LD)</label>
                                    <textarea name="schema_markup" rows="4" class="form-control font-monospace small @error('schema_markup') is-invalid @enderror"
                                              placeholder='{"@@context": "https://schema.org", ...}'>{{ old('schema_markup', $seo->schema_markup) }}</textarea>
                                    @error('schema_markup')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label d-block">Search Engine Visibility</label>
                                    <div class="form-check form-switch">
                                        <input type="hidden" name="no_index" value="0">
                                        <input type="checkbox" class="form-check-input" role="switch"
                                               name="no_index" value="1" @checked(old('no_index', $seo->no_index))>
                                        <label class="form-check-label small">Hide from search engines</label>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm mt-3">
                                <i class="bi bi-check-lg me-1"></i> Save
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
