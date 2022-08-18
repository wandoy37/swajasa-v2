@extends('layouts.app')

@section('content')
<!-- Banner-About -->
<section id="banner">
    <div class="container pt-4 mt-4">
        <div class="row align-items-center py-4 mt-4">
            <div class="col-md-6 my-4 text-end">
                <img src="{{ asset('assets/img/about.png') }}" class="img-fluid" width="100%">
            </div>
            <div class="col-md-6 my-4 text-start">
                <h1 class="font-bold text-white text-capitalize">Tentang Kami ?</h1>
                <p class="fs-4 text-white">
                    Kami merupakan badan usaha yang menyediakan layanan Internet Provider dan Jasa Multimedia
                </p>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffffff" fill-opacity="1" d="M0,64L60,58.7C120,53,240,43,360,69.3C480,96,600,160,720,192C840,224,960,224,1080,197.3C1200,171,1320,117,1380,90.7L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
        </path>
    </svg>
</section>
<!-- /Banner-About -->

<!-- About Us -->
<section>
    <div class="container mb-2 pb-2">
        <div class="row">
            <div class="col-sm-6 my-4">
                <h1 class="font-bold fs-1 text-primary">Swajasa Lintas Media</h1>
                <p class="fs-4 my-4">
                    Terima kasih sudah mampir! Jika kamu memiliki pertanyaan, hubungi kami melalui kontak di laman ini.
                </p>
            </div>
            <div class="col-sm-6 my-4">
                <h1 class="font-bold fs-1 text-primary">Kantor Pusat</h1>


                <div class="my-4">
                    <label class="text-muted">
                        <i class="fa-solid fa-location-dot"></i>
                        Alamat
                    </label>
                    <br>
                    <span class="fs-5">
                        Jl. P. Diponegoro No.18 RT.25 Kel. Bukuan Kec. Palaran, Kota Samarinda Kalimantan Timur Indonesia Kp.75241
                    </span>
                </div>
                <div class="my-4">
                    <label class="text-muted">
                        <i class="fa-solid fa-phone"></i>
                        Telephone
                    </label>
                    <br>
                    <span class="fs-5">
                        (+62) 812-5596-8910
                    </span>
                </div>
                <div class="my-4">
                    <label class="text-muted">
                        <i class="fa-solid fa-envelope"></i>
                        Email
                    </label>
                    <br>
                    <span class="fs-5">
                        customercare@swajasa.id
                    </span>
                </div>
                <div class="my-4">
                    <button class="btn-contact">
                        <img src="{{ asset('assets/img/social/phone.png') }}" class="img-fluid me-2" width="32px">
                        Hubungi Kami
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /About Us -->
@endsection