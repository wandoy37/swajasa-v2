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
    <title>Swajasa Lintas - Official</title>
</head>

<body>

    @include('layouts.components.navbar')

    @yield('content')

<!-- Footer -->
<section id="footer">
    <footer>
        <div class="container text-white pb-4">
            <div class="row pt-4">
                <div class="col-sm-2 pt-2 mt-2">
                    <ul>
                        <li class="fs-5 list-inline title-footer mb-4">Services</li>

                        <a href="http://" class="text-decoration-none text-white">
                            <li class="list-inline fs-6">Technology</li>
                        </a>
                        <a href="http://" class="text-decoration-none text-white">
                            <li class="list-inline fs-6">Multimedia</li>
                        </a>
                        <a href="http://" class="text-decoration-none text-white">
                            <li class="list-inline fs-6">Internet</li>
                        </a>
                        <a href="http://" class="text-decoration-none text-white">
                            <li class="list-inline fs-6">Security</li>
                        </a>
                    </ul>
                </div>
                <div class="col-sm-6 pt-2 mt-2">
                    <ul>
                        <li class="fs-5 list-inline title-footer mb-4">Contact Us</li>

                        <span class="text-decoration-none">
                            <li class="list-inline fs-6">
                                <i class="text-white me-2 fa-solid fa-phone"></i>
                                (+62) 812-5596-8910
                            </li>
                        </span>
                        <span class="text-decoration-none">
                            <li class="list-inline fs-6">
                                <i class="text-white me-2 fa-solid fa-envelope"></i>
                                customercare@swajasa.id
                            </li>
                        </span>
                        <span class="text-decoration-none">
                            <li class="list-inline fs-6">
                                <i class="text-white me-2 fa-solid fa-location-dot"></i>
                                Jl. P. Diponegoro No.18 RT.25 Kel. Bukuan Kec. Palaran, Kota Samarinda Kalimantan Timur Indonesia Kp.75241
                            </li>
                        </span>
                    </ul>
                </div>
                <div class="col-sm-4 pt-2 mt-2">
                    <ul>
                        <li class="fs-5 list-inline title-footer mb-4">Social Media</li>

                        <a href="http://" class="text-decoration-none text-white">
                            <img src="{{ asset('assets/img/social/facebook-white.png') }}" class="img-fluid me-1" width="32px">
                        </a>
                        <a href="http://" class="text-decoration-none text-white">
                            <img src="{{ asset('assets/img/social/instagram-white.png') }}" class="img-fluid me-1" width="32px">
                        </a>
                        <a href="http://" class="text-decoration-none text-white">
                            <img src="{{ asset('assets/img/social/twitter-white.png') }}" class="img-fluid me-1" width="32px">
                        </a>
                        <a href="http://" class="text-decoration-none text-white">
                            <img src="{{ asset('assets/img/social/linkedin-white.png') }}" class="img-fluid me-1" width="32px">
                        </a>
                    </ul>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm pt-4 mt-4">
                    <span class="text-white fst-italic">Copyright &copy; WanSite 2022</span>
                </div>
            </div>
        </div>
    </footer>
</section>
<!-- /Footer -->

</body>

<script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.js') }}"></script>

</html>