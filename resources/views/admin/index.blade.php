@extends('admin.layouts.app')

@section('content')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Dashboard</h4>
        </div>
        {{-- <div class="page-category">Inner page content goes here</div> --}}
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Welcome to Dashboard</h4>
                        <hr class="my-1">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="avatar-lg">
                                    <img src="{{ asset('assets/img/admin.png') }}" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <span>Name : {{ Auth::user()->name }}</span>
                                <br>
                                <span>Email : {{ Auth::user()->email }}</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>
                            <i class="fa fa-envelope"></i>
                            New Message
                        </h4>
                        <hr class="my-1">
                        <div class="mt-2">
                            <span class="text-warning">
                                <i class="fa fa-bell"></i>
                                Perlu dikonfirmasi
                            </span>
                            <span class="ml-4">{{ $message }}</span>
                            <a href="{{ route('message') }}" class="float-right">Lihat</a>
                            <br>
                            <span class="text-success">
                                <i class="fa fa-bell"></i>
                                Telah di konfirmasi
                            </span>
                            <span class="ml-4">{{ $messageConfirm }}</span>
                            <a href="{{ route('message') }}" class="float-right">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>
                            <i class="far fas fa-clipboard-list"></i>
                            Service
                        </h4>
                        <hr class="my-1">
                        <div class="mt-2">
                            <span class="text-warning">
                                Draft
                            </span>
                            <span class="ml-4">{{ $serviceDraft }}</span>
                            <a href="{{ route('service') }}" class="float-right">Lihat</a>
                        </div>
                        <div class="mt-2">
                            <span class="text-success">
                                Publish
                            </span>
                            <span class="ml-4">{{ $servicePublish }}</span>
                            <a href="{{ route('service') }}" class="float-right">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
