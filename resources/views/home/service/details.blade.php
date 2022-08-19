@extends('home.layouts.app')

@section('content')

<section id="service">
    <div class="container">

        <div class="row my-4 py-4">
            <div class="col-sm-12 text-center">
                <span class="fs-4 title-layanan">{{ $service->title }}</span>
                <p class="description my-2 mb-4">
                    {{ $service->description }}
                </p>
                <img src="{{ asset('uploads/' . $service->sampul) }}" class="img-fluid rounded mx-auto d-block border border-1" width="900px" height="350px" alt="">
            </div>
        </div>


        <div class="row my-4 py-4">
            <div class="col-sm">
                <div class="text-center">
                    <span class="font-bold fs-4 text-primary">Pricing</span>
                </div>
                <p class="description my-2 text-center">
                    {!! $service->content !!}
                </p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
            @foreach ($service->packages as $item)
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <h5 class="card-title font-bold text-primary">{{ $item->title }}</h5>
                                @if ($item->discount == null)
                                    <p class="card-text font-bold">@currency($item->price) <small class="text-muted">/Bulan</small></p>
                                @else
                                    <p class="card-text text-decoration-line-through fst-italic">@currency($item->price) <small class="text-muted">/Bulan</small></p>
                                    <p class="card-text font-bold">@currency($item->discount) <small class="text-muted">/Bulan</small></p>
                                @endif
                            </div>
                            <div>
                                <ul>
                                    @foreach ($item->benefits as $benefit)
                                        <li class="list-inline">
                                            <i class="fa-solid fa-circle-check text-primary"></i>
                                            {{ $benefit->title }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="mb-4 footer text-center mt-4">
                            <small class="text-muted">
                                <a href="#" class="btn-paket">
                                    Pilih Paket
                                </a>
                            </small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call Us -->
<section id="section-call">
    <div class="container">
        <div class="row mb-4 pb-4">
            <div class="col-sm-12 text-center">
                <p class="fs-4 text-muted">{{ $configs->benefit }}</p>
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