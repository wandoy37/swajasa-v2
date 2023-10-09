@extends('home.layouts.app')

@section('content')
    <!-- Layanan -->
<section id="layanan">
    <div class="container">
        <div class="row row-cols-1 g-4 justify-content-around">
            <span class="fs-3 font-bold text-capitalize text-center text-blue-custome">
                Layanan
            </span>
            <span class="text-muted text-center mb-4">Kami menyediakan berbagai layanan</span>
            @foreach ($services as $service)
                <div class="col-sm-5">
                    <div class="card">
                        <img src="{{ asset('uploads/' . $service->sampul) }}" class="card-img border border-1" alt="...">
                        <div class="card-img-overlay text-center align-center text-white">
                            <a href="{{ url("/service/$service->slug/show") }}">
                                <span class="card-title title-layanan overlay-css font-bold">
                                    {{ $service->title }}
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mb-4 py-4 mt-4">
            <div class="col-sm-12 text-center">
                <p class="fs-4 text-muted">{{ $configs->benefit }}</p>
                <a href="https://api.whatsapp.com/send/?phone={{ $contacts->whatsapp }}&text=Halo+Swajasa+saya+ingin+melakukan+pemasangan+WiFi+di+rumah" class="btn-contact">
                    <img src="{{ asset('assets/img/social/phone.png') }}" class="img-fluid me-2" width="32px">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /Layanan -->
@endsection
