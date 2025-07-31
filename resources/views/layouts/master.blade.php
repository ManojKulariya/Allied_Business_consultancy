<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('admin') }}/"
  data-template="vertical-menu-template-free"
>
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Dashboard | Admin')</title>
  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('admin_backup/img/favicon/favicon.ico') }}" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('admin_backup/vendor/fonts/boxicons.css') }}" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{ asset('admin_backup/vendor/css/core.css') }}" class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{ asset('admin_backup/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{ asset('admin_backup/css/demo.css') }}" />

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="{{ asset('admin_backup/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
  <link rel="stylesheet" href="{{ asset('admin_backup/vendor/libs/apex-charts/apex-charts.css') }}" />

  <!-- Helpers -->
  <script src="{{ asset('admin_backup/vendor/js/helpers.js') }}"></script>
  <script src="{{ asset('admin_backup/js/config.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  @stack('styles')
</head>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

      {{-- Sidebar --}}
      @include('includes.sidebar')

      <!-- Layout container -->
      <div class="layout-page">

        {{-- Navbar / Header --}}
        @include('includes.header')

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Main content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            @yield('content')
          </div>
          <!-- /Main content -->

          {{-- Footer --}}
          @include('includes.footer')

          <div class="content-backdrop fade"></div>
        </div>
        <!-- /Content wrapper -->

      </div>
      <!-- /Layout page -->

    </div>

  </div>
  <!-- /Layout wrapper -->

  <!-- Core JS -->
  <script src="{{ asset('admin_backup/vendor/libs/jquery/jquery.js') }}"></script>
  <script src="{{ asset('admin_backup/vendor/libs/popper/popper.js') }}"></script>
  <script src="{{ asset('admin_backup/vendor/js/bootstrap.js') }}"></script>
  <script src="{{ asset('admin_backup/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('admin_backup/vendor/js/menu.js') }}"></script>
  <script src="{{ asset('admin_backup/vendor/libs/apex-charts/apexcharts.js') }}"></script>

  <!-- Main JS -->
  <script src="{{ asset('admin_backup/js/main.js') }}"></script>
  <script src="{{ asset('admin_backup/js/dashboards-analytics.js') }}"></script>

  <!-- External JS -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
<script>
  function openCategoryModal() {
    const modal = new bootstrap.Modal(document.getElementById('addCategoryModal'));

    const form = document.querySelector('#addCategoryModal form');
    form.reset();
    form.action = "{{ route('admin.categories.store') }}";

    // Remove method override for PUT
    const methodInput = form.querySelector('input[name="_method"]');
    if (methodInput) methodInput.remove();

    // Reset modal title & button text
    document.getElementById('addCategoryModalLabel').innerText = 'Add New Category';
    form.querySelector('button[type="submit"]').innerText = 'Create Category';

    modal.show();
  }
</script>

<script>
  document.querySelectorAll('.btn-delete').forEach(button => {
  button.addEventListener('click', function() {
    Swal.fire({
      title: 'Are you sure?',
      text: "This action cannot be undone.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        this.closest('form').submit();
      }
    });
  });
});

</script>
<script>
  function editCategory(id, name, slug, description) {
    const modal = new bootstrap.Modal(document.getElementById('addCategoryModal'));

    // Set form action and method
    const form = document.querySelector('#addCategoryModal form');
    form.action = `/admin/categories/${id}`;
    
    // Add _method input for PUT
    let methodInput = form.querySelector('input[name="_method"]');
    if (!methodInput) {
      methodInput = document.createElement('input');
      methodInput.type = 'hidden';
      methodInput.name = '_method';
      form.appendChild(methodInput);
    }
    methodInput.value = 'PUT';

    // Populate form fields
    document.getElementById('category-name').value = name;
    document.getElementById('category-slug').value = slug;
    document.getElementById('category-description').value = description;

    // Change modal title & button text
    document.getElementById('addCategoryModalLabel').innerText = 'Edit Category';
    form.querySelector('button[type="submit"]').innerText = 'Update Category';

    modal.show();
  }
</script>
<!-- <script type="module" src="{{ asset('main.js') }}"></script> -->
  @stack('scripts')
</body>
</html>
