@extends('layouts.master')

@section('content')
<div class="card">
  <h5 class="card-header">Bill Details - #{{ $bill->id }}</h5>
  <div class="card-body">
    <h5>Customer Details</h5>
    <p><strong>Name:</strong> {{ $bill->customer->first_name ?? 'N/A' }}</p>
    <p><strong>Email:</strong> {{ $bill->customer->email ?? 'N/A' }}</p>
    <p><strong>Phone:</strong> {{ $bill->customer->phone ?? 'N/A' }}</p>

    <p><strong>Date:</strong> {{ $bill->created_at->format('d M Y, h:i A') }}</p>
    <p><strong>Status:</strong> {{ $bill->status ?? 'Pending' }}</p>

    <table class="table table-bordered mt-3">
      <thead>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Price Per Unit</th>
          <th>Subtotal</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($bill->billItems as $item)
        <tr>
          <td>{{ $item->product->name }}</td>
          <td>{{ $item->quantity }}</td>
          <td>₹{{ number_format($item->price_per_unit, 2) }}</td>
          <td>₹{{ number_format($item->subtotal, 2) }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <h4 class="text-end mt-3">Total: ₹{{ number_format($bill->total_price, 2) }}</h4>

    <a href="{{ route('admin.bills.print', $bill->id) }}" target="_blank" class="btn btn-primary mt-3">
      <i class="bx bx-printer"></i> Print Bill
    </a>
  </div>
</div>
@endsection
