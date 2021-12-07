<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                {{-- <img src="assets/img/brand/blue.png" class="navbar-brand-img" alt="..."> --}}
                <h1>LOGO</h1>
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link "
                            href="{{ url('/admin') }}">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link"
                            href="{{ url('/admin/banners') }}">
                            <i class="ni ni-books text-primary"></i>
                            <span class="nav-link-text">Banners</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ url()->current() == route('products') ? 'active' : '' }}"
                            href="{{ url('/admin/products') }}">
                            <i class="ni ni-planet text-orange"></i>
                            <span class="nav-link-text">Products</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ url()->current() == route('orders') ? 'active' : '' }}"
                            href="{{ url('/admin/orders') }}">
                            <i class="ni ni-pin-3 text-primary"></i>
                            <span class="nav-link-text">Orders</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ url()->current() == route('testimonials') ? 'active' : '' }}"
                            href="{{ url('/admin/testimonials') }}">
                            <i class="ni ni-satisfied text-success"></i>
                            <span class="nav-link-text">Testimonials</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ url()->current() == route('categories') ? 'active' : '' }}"
                            href="{{ url('/admin/categories') }}">
                            <i class="ni ni-bullet-list-67  text-default"></i>
                            <span class="nav-link-text">Categories</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ url()->current() == route('sub-categories') ? 'active' : '' }}"
                            href="{{ url('/admin/sub-categories') }}">
                            <i class="ni ni-tag  text-default"></i>
                            <span class="nav-link-text">Sub Categories</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ url()->current() == route('colors') ? 'active' : '' }}"
                            href="{{ url('/admin/colors') }}">
                            <i class="ni ni-chart-pie-35  text-info"></i>
                            <span class="nav-link-text">Colors</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ url()->current() == route('users') ? 'active' : '' }}"
                            href="{{ url('admin/users') }}">
                            <i class="ni ni-single-02 text-yellow"></i>
                            <span class="nav-link-text">Users</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ url()->current() == route('coupons') ? 'active' : '' }}"
                            href="{{ url('admin/coupons') }}">
                            <i class="ni ni-bulb-61 text-danger"></i>
                            <span class="nav-link-text">Coupons</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('admin-logout-form').submit();">
                            <i class="ni ni-key-25 text-pink"></i>
                            <span class="nav-link-text">Logout</span>
                        </a>
                    </li>
                    <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">More</span>
                </h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank">
                            <i class="ni ni-spaceship"></i>
                            <span class="nav-link-text">Visit website</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
