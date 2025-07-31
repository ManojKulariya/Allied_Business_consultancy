@extends('layouts.master') {{-- Or your layout --}}

@section('content')
<div class="container mt-4">
  <div class="card">
    <div class="card-header">
      <h5>Business Address</h5>
    </div>
    <div class="card-body">

    @if(session('success'))
      <div class="alert alert-primary">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.settings.address-store') }}" method="POST">
      @csrf

      <div class="row mb-3">
        <div class="col-md-6">
            <label>Address Line 1</label>
            <input type="text" name="address_line1" class="form-control" value="{{ old('address_line1', $address->address_line1 ?? '') }}">
        </div>

        <div class="col-md-6">
            <label>Address Line 2</label>
            <input type="text" name="address_line2" class="form-control" value="{{ old('address_line2', $address->address_line2 ?? '') }}">
        </div>
        </div>
      <div class="row mb-3">
      <div class="mb-2 col-md-6">
        <label>Area</label>
        <input type="text" name="area" class="form-control" value="{{ old('area', $address->area ?? '') }}">
      </div>

      <div class="mb-2 col-md-6">
        <label>City</label>
        <input type="text" name="city" class="form-control" value="{{ old('city', $address->city ?? '') }}">
      </div>
    </div>
    <div class="row mb-3">
      <div class="mb-2 col-md-4">
        <label>Postal Code</label>
        <input type="text" name="postal_code" class="form-control" value="{{ old('postal_code', $address->postal_code ?? '') }}">
      </div>

      <div class="mb-2 col-md-4">
        <label>State</label>
        <input type="text" name="state" class="form-control" value="{{ old('state', $address->state ?? '') }}">
      </div>
      
      <div class="mb-3 col-md-4">
        <label>Country</label>
        <input type="text" name="country" class="form-control" value="{{ old('country', $address->country ?? '') }}">
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
