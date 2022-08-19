@extends('admin.layouts.app')

@section('content')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                <i class="fas fa-layer-group"></i>
                Pages
            </h4>
        </div>

        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Pages</li>
            </ol>
        </nav>

        @if (session('success'))
            <div class="alert alert-success col-lg-6" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</div>

@endsection
