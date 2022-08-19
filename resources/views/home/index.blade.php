@extends('home.layouts.app')

@section('content')
    <!-- Banner -->
<section id="banner">
    <div class="container pt-4 mt-4">
        <div class="row align-items-center py-4 mt-4">
            <div class="col-md-6 my-4 text-end">
                <img src="{{ asset('assets/img/Header-2-1.png') }}" class="img-fluid" width="90%">
            </div>
            <div class="col-md-6 my-4 text-start">
                <h1 class="font-bold text-white text-capitalize">{{ $configs->title }}</h1>
                <p class="fs-4 text-white">{{ $configs->description }}</p>
                <a href="https://api.whatsapp.com/send/?phone={{ $contacts->whatsapp }}&text=Haii+kami+dari+swajasa" class="btn-contact">
                    <img src="{{ asset('assets/img/social/phone.png') }}" class="img-fluid me-2" width="32px">
                    Hubungi Kami
                </a>
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
                <p class="fs-4">{{ $configs->about }}</p>
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
            @foreach ($services as $service)
            <div class="col-sm-5 text-center mt-4">
                <div class="border-layanan">
                    <a href="{{ url("/service/$service->slug/show") }}" class="text-decoration-none text-dark">
                        <img src="{{ asset('uploads/' . $service->icon) }}" class="img-fluid rounded-circle" width="100px">
                        <div class="my-2">
                            <span class="fs-4 title-layanan">{{ $service->title }}</span>
                            <p class="description my-2">
                                {{ $service->description }}
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- /Layanan Kami -->

<!-- Call Us -->
<section id="section-call">
    <div class="container">
        <div class="row mb-4 pb-4">
            <div class="col-sm-12 text-center">
                <p class="fs-4 text-muted">{{ $configs->benefit }}</p>
                <a href="https://api.whatsapp.com/send/?phone={{ $contacts->whatsapp }}&text=Haii+kami+dari+swajasa" class="btn-contact">
                    <img src="{{ asset('assets/img/social/phone.png') }}" class="img-fluid me-2" width="32px">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /Call Us -->
@endsection
