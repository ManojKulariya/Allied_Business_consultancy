<!-- Customer Modal (Create/Edit) -->
<div class="modal fade" id="customerModal" tabindex="-1" aria-labelledby="customerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="customerForm" method="POST">
      @csrf
      <input type="hidden" name="_method" id="formMethod" value="POST">
      <input type="hidden" name="customer_id" id="customer_id">

      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="customerModalLabel">Customer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label for="first_name">Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control">
          </div>

          <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">
          </div>

          <div class="mb-3">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control">
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>
