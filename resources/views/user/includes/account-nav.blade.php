<div class="wrap-sidebar-account">
    <ul class="my-account-nav">
        <li>
            <a href="{{ route('users.my-profile') }}" class="my-account-nav-item {{ Request::routeIs('users.my-profile') ? 'active' : '' }}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="https://themesflat.co/html/ecomus/my-account-orders.html" class="my-account-nav-item">
                Orders
            </a>
        </li>
        <li>
            <a href="{{ route('users.addresses') }}" class="my-account-nav-item {{ Request::routeIs('users.addresses') ? 'active' : '' }}">
                Address
            </a>
        </li>
        <li>
            <a href="{{ route('users.account-details') }}" class="my-account-nav-item {{ Request::routeIs('users.account-details') ? 'active' : '' }}">
                Account Details
            </a>
        </li>
        <li>
            <a href="#" class="my-account-nav-item"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
               Logout
            </a>
            <form id="logout-form" action="{{ route('users.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</div>
