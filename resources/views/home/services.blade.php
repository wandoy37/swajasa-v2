@extends('layouts.app')

@section('content')
    <!-- Layanan -->
<section id="layanan">
    <div class="container">
        <div class="row row-cols-1 g-4 justify-content-around">
            <span class="fs-3 font-bold text-capitalize text-center text-primary">
                Layanan
            </span>
            <span class="text-muted text-center mb-4">Kami menyediakan berbagai layanan</span>
            <div class="col-sm-5">
                <div class="card">
                    <img src="{{ asset('assets/img/layanan/overlay-internet.png') }}" class="card-img border border-1" alt="...">
                    <div class="card-img-overlay text-center align-center text-white">
                        <a href="services1.php">
                            <span class="card-title title-layanan overlay-css font-bold">
                                Installasi LAN & Wi-Fi
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="card">
                    <img src="{{ asset('assets/img/layanan/overlay-computing.png') }}" class="card-img border border-1" alt="...">
                    <div class="card-img-overlay text-center align-center text-white">
                        <a href="services1.php">
                            <span class="card-title title-layanan overlay-css">
                                Internet Desa Mandiri
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="card">
                    <img src="{{ asset('assets/img/layanan/overlay-digital.png') }}" class="card-img border border-1" alt="...">
                    <div class="card-img-overlay text-center align-center text-white">
                        <a href="services1.php">
                            <span class="card-title title-layanan overlay-css font-bold">
                                Production House Multimedia Creator
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="card">
                    <img src="{{ asset('assets/img/layanan/overlay-cctv.png') }}" class="card-img border border-1" alt="...">
                    <div class="card-img-overlay text-center align-center text-white">
                        <a href="services1.php">
                            <span class="card-title title-layanan overlay-css font-bold">
                                Pemasangan CCTV
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4 py-4 mt-4">
            <div class="col-sm-12 text-center">
                <p class="fs-4 text-muted">Nikmati layanan kami, segera hubungi kami, dan ikuti media sosial kami untuk mendapatkan informasi seputar layanan dan harga spesial</p>
                <button class="btn-contact">
                    <img src="{{ asset('assets/img/social/phone.png') }}" class="img-fluid me-2" width="32px">
                    Hubungi Kami
                </button>
            </div>
        </div>
    </div>
</section>
<!-- /Layanan -->
@endsection