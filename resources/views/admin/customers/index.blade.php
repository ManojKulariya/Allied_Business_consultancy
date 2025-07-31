@extends('layouts.master')

@section('content')
<div class="card">
  <h5 class="card-header d-flex justify-content-between">
    Customers List
 <button class="btn btn-primary" onclick="$('#addCustomerModal').modal('show')">+ Add Customer</button>
    @include('admin.customers.form')
  </h5>

  <div class="table-responsive text-nowrap">
    <table class="table table-bordered">
      <thead>
        <tr class="text-nowrap text-center">
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Created At</th>
          <th>Actions</th>
        </tr>
      </thead>

      <tbody>
        @forelse ($customers as $index => $customer)
          <tr class="text-center">
            <th scope="row">{{ $index + 1 }}</th>
            <td>{{ $customer->first_name }}</td>
            <td>{{ $customer->email ?? '-' }}</td>
            <td>{{ $customer->phone ?? '-' }}</td>
            <td>{{ $customer->created_at->format('Y-m-d') }}</td>
            <td>
              <button class="btn btn-sm btn-warning" 
              onclick="editCustomer('{{ $customer->id }}', '{{ $customer->first_name }}', '{{ $customer->email }}', '{{ $customer->phone }}')">
              Edit
            </button>

              <form action="{{ route('admin.customers.destroy', $customer->id) }}" method="POST" style="display:inline-block;" class="delete-form">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-sm btn-danger btn-delete">Delete</button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="6" class="text-center">No customers found.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  {{-- Pagination --}}
  <div class="card-footer">
    {{ $customers->links() }}
  </div>
</div>
@endsection
@push('scripts')
<script>
function editCustomer(id) {
  fetch(`/admin/customers/${id}/edit`)
    .then(response => response.json())
    .then(customer => {
      document.getElementById('customer_id').value = customer.id;
      document.getElementById('first_name').value = customer.first_name;
      document.getElementById('email').value = customer.email ?? '';
      document.getElementById('phone').value = customer.phone ?? '';
      document.getElementById('customerForm').action = `/admin/customers/${customer.id}`;
      document.getElementById('formMethod').value = 'PUT';

      const modal = new bootstrap.Modal(document.getElementById('customerModal'));
      modal.show();
    });
}

function openCustomerModal() {
  document.getElementById('customerForm').reset();
  document.getElementById('customer_id').value = '';
  document.getElementById('customerForm').action = '/admin/customers';
  document.getElementById('formMethod').value = 'POST';

  const modal = new bootstrap.Modal(document.getElementById('customerModal'));
  modal.show();
}


</script>

@endpush
