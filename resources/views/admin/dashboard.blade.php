@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')


  <div class="col-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div>
            <h3 class="mt-2">Wellcome Admin</h3>
          </div>
          <div><i class="bx bx-user text-primary fs-1"></i></div>
        </div>
      </div>
    </div>
  </div>

  <div class="row g-4">
  <!-- Total Sliders Card -->
  <div class="col-12 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div>
            <h5>Total Sliders</h5>
            <span class="badge bg-label-primary">Homepage</span>
            <h3 class="mt-2">{{ $totalSliders ?? 0 }}</h3>
          </div>
          <div><i class="bx bx-images text-primary fs-1"></i></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Total Blogs Card -->
  <div class="col-12 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div>
            <h5>Total Blogs</h5>
            <span class="badge bg-label-info">Published</span>
            <h3 class="mt-2">{{ $totalBlogs ?? 0 }}</h3>
          </div>
          <div><i class="bx bx-news text-info fs-1"></i></div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
