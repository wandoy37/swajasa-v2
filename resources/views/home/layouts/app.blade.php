<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet">
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/5983388006.js" crossorigin="anonymous"></script>

    <!-- Icon Head -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/brand-swajasa.png') }}">
    <title>{{ $configs->title }}</title>
</head>

<body>

    @include('home.layouts.components.navbar')

    @yield('content')

<!-- Footer -->
<section id="footer">
    <footer>
        <div class="container text-white pb-4">
            <div class="row pt-4">
                <div class="col-sm-4 pt-2 mt-2 text-center">
                    <iframe src="{{ $configs->map }}" width="200" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-sm-4 pt-2 mt-2">
                    <ul>
                        <li class="fs-5 list-inline title-footer mb-4">Contact Us</li>

                        <span class="text-decoration-none">
                            <li class="list-inline fs-6">
                                <i class="text-white me-2 fa-solid fa-phone"></i>
                                {{ $contacts->telephone }}
                            </li>
                        </span>
                        <span class="text-decoration-none">
                            <li class="list-inline fs-6">
                                <i class="text-white me-2 fa-solid fa-envelope"></i>
                                {{ $contacts->email }}
                            </li>
                        </span>
                        <span class="text-decoration-none">
                            <li class="list-inline fs-6">
                                <i class="text-white me-2 fa-solid fa-location-dot"></i>
                                {{ $contacts->alamat }}
                            </li>
                        </span>
                    </ul>
                </div>
                <div class="col-sm-4 pt-2 mt-2">
                    <ul>
                        <li class="fs-5 list-inline title-footer mb-4">Social Media</li>

                        <a href="{{ $contacts->facebook }}" class="text-decoration-none text-white">
                            <img src="{{ asset('assets/img/social/facebook-white.png') }}" class="img-fluid me-1" width="32px">
                        </a>
                        <a href="{{ $contacts->instagram }}" class="text-decoration-none text-white">
                            <img src="{{ asset('assets/img/social/instagram-white.png') }}" class="img-fluid me-1" width="32px">
                        </a>
                        <a href="{{ $contacts->twitter }}" class="text-decoration-none text-white">
                            <img src="{{ asset('assets/img/social/twitter-white.png') }}" class="img-fluid me-1" width="32px">
                        </a>
                        <a href="{{ $contacts->linkedin }}" class="text-decoration-none text-white">
                            <img src="{{ asset('assets/img/social/linkedin-white.png') }}" class="img-fluid me-1" width="32px">
                        </a>
                    </ul>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm pt-4 mt-4">
                    <span class="text-white fst-italic">Copyright &copy; WanSite 2022</span>
                    <div class="my-1">
                        <a href="{{ route('dashboard') }}" class="text-white text-decoration-none">Operator</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
<!-- /Footer -->

</body>

<script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.js') }}"></script>

</html>
