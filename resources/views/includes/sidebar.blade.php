<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="{{ route('admin.dashboard') }}" class="app-brand-link">
      <span class="app-brand-logo demo">
        <!-- (Optional: replace with your own logo SVG or image) -->
    <img src="{{ asset('admin_backup/img/logo.png') }}" alt="Logo" width="140" />
      </span>
      <span class="app-brand-text demo menu-text fw-bolder ms-2"></span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item {{ request()->is('admin') ? 'active' : '' }}">
      <a href="{{ route('admin.dashboard') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div>Dashboard</div>
      </a>
    </li>
 
    <li class="menu-item {{ request()->is('admin/categories*') ? 'active' : '' }}">
      <a href="{{ route('admin.categories.index') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-category"></i>
        <div>Categories</div>
      </a>
    </li>
<!--
    <li class="menu-item {{ request()->is('admin/products*') ? 'active' : '' }}">
      <a href="{{ route('admin.products.index') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-t-shirt"></i>
        <div>Products</div>
      </a>
    </li>
        <li class="menu-item {{ request()->is('admin/bills*') ? 'active' : '' }}">
      <a href="{{ route('admin.bills.create') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-t-shirt"></i>
        <div>Bills</div>
      </a>
    </li>

<li class="menu-item {{ request()->routeIs('admin.bills.*') ? 'active' : '' }}">
  <a href="{{ route('admin.bills.index') }}" class="menu-link">
    <i class="menu-icon tf-icons bx bx-cart"></i>
    <div>Bills / Orders</div>
  </a>
</li>



    <li class="menu-item {{ request()->is('admin/customers*') ? 'active' : '' }}">
      <a href="{{ route('admin.customers.index') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div>Customers</div>
      </a>
    </li>

    <li class="menu-item {{ request()->is('admin/coupons*') ? 'active' : '' }}">
      <a href="{{ route('admin.coupons.index') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-purchase-tag"></i>
        <div>Coupons</div>
      </a>
    </li>

    <li class="menu-item {{ request()->is('admin/reports*') ? 'active' : '' }}">
      <a href="{{ route('admin.reports.index') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-bar-chart-alt-2"></i>
        <div>Reports</div>
      </a>
    </li> -->

    <!-- Settings -->
    <li class="menu-item {{ request()->is('admin/settings*') ? 'active open' : '' }}">
  <a href="javascript:void(0);" class="menu-link menu-toggle">
    <i class="menu-icon tf-icons bx bx-cog"></i>
    <div>Settings</div>
  </a>

  <ul class="menu-sub">
    <li class="menu-item {{ request()->is('admin/settings/sliders*') ? 'active' : '' }}">
      <a href="{{ route('admin.settings.sliders') }}" class="menu-link">
        <div>Slider</div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/settings/blog*') ? 'active' : '' }}">
      <a href="{{ route('admin.settings.blog-index') }}" class="menu-link">
        <div>Blog</div>
      </a>
    </li>
      <li class="menu-item {{ request()->is('admin/settings/social-create*') ? 'active' : '' }}">
    <a href="{{ route('admin.settings.social-create') }}" class="menu-link">
      <div>Social Media</div>
    </a>
    </li>
     <li class="menu-item {{ request()->is('admin/settings/address-index*') ? 'active' : '' }}">
    <a href="{{ route('admin.settings.address-index') }}" class="menu-link">
      <div>Address</div>
    </a>
    </li>
  </ul>
</li>

  </ul>
</aside>
