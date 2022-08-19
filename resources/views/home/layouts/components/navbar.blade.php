<!-- Navbar -->
<nav class="navbar navbar-expand-sm navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand fs-3" href="/">
            <img src="{{ asset('uploads/' . $configs->brand_icon) }}" width="50px" class="d-inline-block align-text-top">
            @if ($configs->brand_name == null)
                Brand Name
            @else
                {{ $configs->brand_name }}
            @endif
            </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-lg-0 align-items-center">
                <li class="nav-item mx-4">
                    <a class="nav-link {{ (request()->segment(1) == '') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link {{ (request()->segment(1) == 'service') ? 'active' : '' }}" href="/service">Services</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link {{ (request()->segment(1) == 'about') ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link {{ (request()->segment(1) == 'contact') ? 'active' : '' }}" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- /Navbar -->
