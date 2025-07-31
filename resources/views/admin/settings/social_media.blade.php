@extends('layouts.master')
@section('content')
<div class="container mt-4">
  <div class="card">
    <div class="card-header">
      <h5>Social Media Links</h5>
    </div>
    <div class="card-body">
            @if(session('success'))
        <div class="alert alert-primary">{{ session('success') }}</div>
        @endif

      <form action="{{ route('admin.settings.social-store') }}" method="POST">
        @csrf
      <div class="row mb-3">
        <div class="mb-3 col-md-4">
          <label class="form-label">Facebook</label>
          <input type="url" name="facebook" class="form-control" value="{{ old('facebook', $link->facebook ?? '') }}">
        </div>

        <div class="mb-3 col-md-4">
          <label class="form-label">Instagram</label>
          <input type="url" name="instagram" class="form-control" value="{{ old('instagram', $link->instagram ?? '') }}">
        </div>

        <div class="mb-3 col-md-4">
          <label class="form-label">Twitter</label>
          <input type="url" name="twitter" class="form-control" value="{{ old('twitter', $link->twitter ?? '') }}">
        </div>
        </div>
        <div class="row mb-3">
        <div class="mb-3 col-md-4">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control" value="{{ old('email', $link->email ?? '') }}">
        </div>

        <div class="mb-3 col-md-4">
          <label class="form-label">Contact No</label>
          <input type="text" name="contact_no" class="form-control" value="{{ old('contact_no', $link->contact_no ?? '') }}">
        </div>
    </div>
        <div class="text-end">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
