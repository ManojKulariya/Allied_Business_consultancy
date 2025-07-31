@extends('layouts.master')

@section('content')
<div class="card-body">
  <form method="POST" action="{{ route('admin.bills.store') }}">
    @csrf

    <div class="mb-3">
      <label for="customer_name" class="form-label">Customer Name</label>
      <input type="text" name="customer_name" id="customer_name" class="form-control" placeholder="Enter customer name" required />
    </div>

    <div class="mb-3">
      <label for="customer_email" class="form-label">Customer Email</label>
      <input type="email" name="customer_email" id="customer_email" class="form-control" placeholder="Enter customer email" />
    </div>

    <div class="mb-3">
      <label for="customer_phone" class="form-label">Customer Phone</label>
      <input type="text" name="customer_phone" id="customer_phone" class="form-control" placeholder="Enter customer phone" />
    </div>

    <div class="card">
      <h5 class="card-header d-flex justify-content-between align-items-center">
        Add Products
        <button type="button" class="btn btn-sm btn-primary" id="addRow">+ Add Row</button>
      </h5>
      <div class="table-responsive text-nowrap">
        <table class="table" id="productsTable">
          <thead>
            <tr>
              <th>Product</th>
              <th>Qty</th>
              <th>Rate</th>
              <th>Total</th>
              <th>Remove</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <select name="products[0][product_id]" class="form-select product-select" required>
                  <option value="">-- Select --</option>
                  @foreach($products as $product)
                    <option value="{{ $product->id }}" data-price="{{ $product->price }}">
                      {{ $product->name }}
                    </option>
                  @endforeach
                </select>
              </td>
              <td><input type="number" name="products[0][quantity]" class="form-control qty" value="1" min="1" required /></td>
              <td><input type="text" name="products[0][price]" class="form-control price" readonly /></td>
              <td><input type="text" name="products[0][total]" class="form-control total" readonly /></td>
              <td><button type="button" class="btn btn-sm btn-danger removeRow">×</button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="mt-3 text-end">
      <button type="submit" class="btn btn-success">Create Bill</button>
    </div>
  </form>
</div>
@endsection

@push('scripts')
<script>
let rowIdx = 1;

$('#addRow').click(function () {
  let newRow = $('#productsTable tbody tr:first').clone();

  newRow.find('select, input').each(function () {
    const name = $(this).attr('name');
    if (name) {
      const newName = name.replace(/\[\d+\]/, '[' + rowIdx + ']');
      $(this).attr('name', newName);
    }
    $(this).val('');
  });

  $('#productsTable tbody').append(newRow);
  rowIdx++;
});

// Remove row
$(document).on('click', '.removeRow', function () {
  if ($('#productsTable tbody tr').length > 1) {
    $(this).closest('tr').remove();
  }
});

// Update price & total on product change
$(document).on('change', '.product-select', function () {
  const price = $(this).find('option:selected').data('price') || 0;
  const row = $(this).closest('tr');
  row.find('.price').val(price);
  const qty = row.find('.qty').val() || 1;
  row.find('.total').val((price * qty).toFixed(2));
});

// Update total on qty change
$(document).on('input', '.qty', function () {
  const row = $(this).closest('tr');
  const price = parseFloat(row.find('.price').val()) || 0;
  const qty = parseInt($(this).val()) || 1;
  row.find('.total').val((price * qty).toFixed(2));
});
</script>
@endpush
