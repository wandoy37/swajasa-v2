@extends('layouts.app')

@section('content')
    <!-- Banner -->
<section id="banner">
    <div class="container pt-4 mt-4">
        <div class="row align-items-center py-4 mt-4">
            <div class="col-md-6 my-4 text-end">
                <img src="{{ asset('assets/img/Header-2-1.png') }}" class="img-fluid" width="90%">
            </div>
            <div class="col-md-6 my-4 text-start">
                <h1 class="font-bold text-white text-capitalize">Swajasa Lintas Media</h1>
                <p class="fs-4 text-white">Penyedia layanan internet provider dan Multimedia sebagai solusi maupun penunjang bisnis anda</p>
                <button class="btn-contact">
                    <img src="{{ asset('assets/img/social/phone.png') }}" class="img-fluid me-2" width="32px">
                    Hubungi Kami
                </button>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffffff" fill-opacity="1" d="M0,64L60,58.7C120,53,240,43,360,69.3C480,96,600,160,720,192C840,224,960,224,1080,197.3C1200,171,1320,117,1380,90.7L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
        </path>
    </svg>
</section>
<!-- /Banner -->

<!-- Tentang Kami -->
<section>
    <div class="container py-4">
        <div class="row align-items-center justify-content-center my-4">
            <h1 class="font-bold text-capitalize text-center mb-4 text-primary">Tentang Kami</h1>
            <div class="col-sm-12 text-center text-muted">
                <p class="fs-4">Kami merupakan badan usaha yang menyediakan jasa Internet, Multimedia dan jasa lainnya yang berhubungan dengan teknologi. Kami memberikan solusi bisnis untuk kecepatan, kehandalan, dan kemampuan untuk memindahkan sejumlah besar data dengan menggunakan media koneksi Fiber Optic yang memberikan ketersediaan tinggi, stabilitas dan kecepatan internet untuk kebutuhan anda.</p>
            </div>
        </div>
    </div>
</section>
<!-- /Tentang Kami -->

<!-- Sponsor -->
<section id="sponsor">
    <div class="container py-4">
        <div class="row row-cols-3 row-cols-sm-2 row-cols-md-6 justify-content-evenly text-center align-items-center">
            <div class="col">
                <img src="{{ asset('assets/img/sponsor/1.png') }}" class="img-fluid white" width="100px">
            </div>
            <div class="col">
                <img src="{{ asset('assets/img/sponsor/2.png') }}" class="img-fluid white" width="100px">
            </div>
            <div class="col">
                <img src="{{ asset('assets/img/sponsor/3.png') }}" class="img-fluid white" width="100px">
            </div>
            <div class="col">
                <img src="{{ asset('assets/img/sponsor/4.png') }}" class="img-fluid white" width="100px">
            </div>
            <div class="col">
                <img src="{{ asset('assets/img/sponsor/5.png') }}" class="img-fluid white" width="100px">
            </div>
            <div class="col">
                <img src="{{ asset('assets/img/sponsor/6.png') }}" class="img-fluid white" width="60px">
            </div>
        </div>
        <hr class="my-4">
    </div>
</section>
<!-- /Sponsor -->

<!-- Layanan Kami -->
<section id="layanan">
    <div class="container">
        <div class="row align-items-center justify-content-evenly my-4 row-cols-sm-1">
            <h1 class="font-bold text-capitalize text-center mb-4 text-primary">
                Layanan Kami
            </h1>
            <div class="col-sm-5 text-center mt-4">
                <div class="border-layanan">
                    <a href="http://" class="text-decoration-none text-dark">
                        <img src="{{ asset('assets/img/layanan/internet.png') }}" class="img-fluid rounded-circle" width="100px">
                        <div class="my-2">
                            <span class="fs-4 title-layanan">Installasi LAN & Wi-Fi</span>
                            <p class="description my-2">
                                Jasa Installasi LAN dan Wireless dilakukan oleh team kami yang berpengalaman dalam bidangnya
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-5 text-center mt-4">
                <div class="border-layanan">
                    <a href="http://" class="text-decoration-none text-dark">
                        <img src="{{ asset('assets/img/layanan/computer.png') }}" class="img-fluid rounded-circle" width="100px">
                        <div class="my-2">
                            <span class="fs-4 title-layanan">Internet Desa Mandiri</span>
                            <p class="description my-2">
                                Teknologi yang mampu menjangkau seluruh pelosok Indonesia.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-5 text-center mt-4">
                <div class="border-layanan">
                    <a href="http://" class="text-decoration-none text-dark">
                        <img src="{{ asset('assets/img/layanan/digital-marketing.png') }}" class="img-fluid rounded-circle" width="100px">
                        <div class="my-2">
                            <span class="fs-4 title-layanan">Production House Multimedia Creator</span>
                            <p class="description my-2">
                                Untuk para pembuat konten youtuber, Kami melayani pembuatan video commercial untuk iklan, company profile.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-5 text-center mt-4">
                <div class="border-layanan">
                    <a href="http://" class="text-decoration-none text-dark">
                        <img src="{{ asset('assets/img/layanan/cctv-camera.png') }}" class="img-fluid rounded-circle" width="100px">
                        <div class="my-2">
                            <span class="fs-4 title-layanan">Pemasangan CCTV</span>
                            <p class="description my-2">
                                Kami juga menyediakan jasa Pemasangan CCTV beserta Installasi CCTV.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- /Layanan Kami -->

<!-- Call Us -->
<section id="section-call">
    <div class="container">
        <div class="row mb-4 pb-4">
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
<!-- /Call Us -->
@endsection
