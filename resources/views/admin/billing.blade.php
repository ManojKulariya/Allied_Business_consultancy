@extends('layouts.master') {{-- or your main layout --}}

@section('content')
<div class="card mt-4">
  <div class="card-header">
    <h5>Create Bill</h5>
  </div>
  <div class="card-body">
    <form id="billing-form" onsubmit="return false;">
      <table class="table" id="billing-table">
        <thead>
          <tr>
            <th>Product</th>
            <th>Price (per unit)</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th><button type="button" class="btn btn-sm btn-success" onclick="addBillingRow()">+</button></th>
          </tr>
        </thead>
        <tbody>
          <!-- Rows added here -->
        </tbody>
        <tfoot>
          <tr>
            <th colspan="3" class="text-end">Total:</th>
            <th id="total-price">0.00</th>
            <th></th>
          </tr>
        </tfoot>
      </table>
      <button class="btn btn-primary" onclick="printBill()">Print Bill</button>
    </form>
  </div>
</div>

<script>
  // We'll add JS here next
</script>
@endsection
