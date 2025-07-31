@extends('layouts.master')

@section('content')
<div class="card">
  <h5 class="card-header">All Bills</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Bill ID</th>
          <th>Customer</th>
          <th>Date</th>
          <th>Total</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($bills as $bill)
        <tr>
          <td><strong>#{{ $bill->id }}</strong></td>
          <td>{{ $bill->customer?->first_name ?? 'Walk-in' }}</td>
          <td>{{ $bill->created_at->format('d M Y') }}</td>
          <td>₹{{ number_format($bill->total_price, 2) }}</td>
          <td>
            <span class="badge bg-label-{{ $bill->status == 'Paid' ? 'success' : 'warning' }}">
              {{ $bill->status ?? 'Pending' }}
            </span>
          </td>
          <td>
            <a href="{{ route('admin.bills.show', $bill->id) }}" class="btn btn-sm btn-info">View</a>
            <form action="{{ route('admin.bills.destroy', $bill->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Are you sure?');">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="mt-3">
      {{ $bills->links() }}
    </div>
  </div>
</div>
@endsection
