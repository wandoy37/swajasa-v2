<!-- Navbar Header -->
<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
    <div class="container-fluid">
        <div class="collapse" id="search-nav">
            <form class="navbar-left navbar-form nav-search mr-md-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="submit" class="btn btn-search pr-1">
                            <i class="fa fa-search search-icon"></i>
                        </button>
                    </div>
                    <input type="text" placeholder="Search ..." class="form-control">
                </div>
            </form>
        </div>
        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <li class="nav-item toggle-nav-search hidden-caret">
                <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                    <i class="fa fa-search"></i>
                </a>
            <li class="nav-item dropdown hidden-caret">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                    <div class="avatar-sm">
                        <img src="{{ asset('atlantis/img/profile.jpg') }}" alt="..." class="avatar-img rounded-circle">
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                        <li>
                            <div class="user-box">
                                <div class="avatar-lg"><img src="{{ asset('atlantis/img/profile.jpg') }}" alt="image profile" class="avatar-img rounded"></div>
                                <div class="u-text">
                                    <h4>Hizrian</h4>
                                    <p class="text-muted">hello@example.com</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">My Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form action="{{ route('logout') }}" id="logout-form" method="POST">
                                @csrf
                            </form>
                        </li>
                    </div>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<!-- End Navbar -->