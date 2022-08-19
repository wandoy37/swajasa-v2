<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">MENU NAVIGATION</h4>
                </li>
                <li class="nav-item {{ (request()->segment(2) == 'dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="far fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item {{ (request()->segment(2) == 'message') ? 'active' : '' }}">
                    <a href="{{ route('message') }}">
                        <i class="fa fa-envelope"></i>
                        <p>Message</p>
                    </a>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Service Control</h4>
                </li>
                <li class="nav-item {{ (request()->segment(2) == 'service') ? 'active' : '' }}">
                    <a href="{{ route('service') }}">
                        <i class="far fas fa-clipboard-list"></i>
                        <p>Service</p>
                    </a>
                </li>
                <li class="nav-item {{ (request()->segment(2) == 'benefit') ? 'active' : '' }}">
                    <a href="{{ route('benefit') }}">
                        <i class="far fas fa-clipboard-list"></i>
                        <p>Benefit</p>
                    </a>
                </li>
                <li class="nav-item {{ (request()->segment(2) == 'package') ? 'active' : '' }}">
                    <a href="{{ route('package') }}">
                        <i class="far fas fa-clipboard-list"></i>
                        <p>Package</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Settings</h4>
                </li>
                <li class="nav-item">
                    <a href="{{ route('configs') }}">
                        <i class="fas fa-cogs"></i>
                        <p>Configs</p>
                    </a>
                    {{-- <a href="{{ route('pages') }}">
                        <i class="fas fa-layer-group"></i>
                        <p>Pages</p>
                    </a> --}}
                    <form action="{{ route('logout') }}" id="logout-form" method="POST">
                        @csrf
                    </form>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="far fas fa-power-off"></i>
                        <p>Logout</p>
                    </a>
                    <form action="{{ route('logout') }}" id="logout-form" method="POST">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
