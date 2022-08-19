@extends('admin.layouts.app')

@section('content')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                {{-- <i class="fas fa-cogs"></i> --}}
                Apps
            </h4>
        </div>

        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('configs') }}">Configs</a></li>
                <li class="breadcrumb-item active">App</li>
            </ol>
        </nav>

        @if (session('success'))
            <div class="alert alert-success col-lg-6" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url("/admin/configs/apps/$configs->id") }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $configs->title) }}">
                                        @error('title')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Brand Name</label>
                                        <input type="text" name="brand_name" class="form-control @error('brand_name') is-invalid @enderror" value="{{ old('brand_name', $configs->brand_name) }}">
                                        @error('brand_name')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" name="description"rows="3">{{ old('description', $configs->description) }}</textarea>
                                        @error('description')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>About</label>
                                        <textarea class="form-control @error('about') is-invalid @enderror" name="about"rows="5">{{ old('about', $configs->about) }}</textarea>
                                        @error('about')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Benefit</label>
                                        <textarea class="form-control @error('benefit') is-invalid @enderror" name="benefit"rows="5">{{ old('benefit', $configs->benefit) }}</textarea>
                                        @error('benefit')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Map</label>
                                        <textarea class="form-control @error('map') is-invalid @enderror" name="map"rows="3">{{ old('map', $configs->map) }}</textarea>
                                        @error('map')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                        <div class="my-2">
                                            <iframe src="{{ $configs->map }}" width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Brand Icon</label>
                                        <div class="input-file input-file-image">
                                            @if ($configs->brand_icon)
                                                <img class="img-upload-preview" width="150" src="{{ asset('uploads/' . $configs->brand_icon) }}" alt="preview">
                                            @else
                                                <img class="img-upload-preview" width="150" src="{{ asset('assets/img/no-image.png') }}" alt="preview">
                                            @endif
                                            <input type="hidden" name="oldBrandIcon" value="{{ $configs->brand_icon }}">
                                            <input type="file" class="form-control form-control-file" id="uploadImg2" name="brand_icon" accept="image/*">
                                            <label for="uploadImg2" class="label-input-file btn btn-primary btn-round">
                                                <span class="btn-label">
                                                    <i class="fa fa-file-image"></i>
                                                </span>
                                                Upload a Brand
                                            </label>
                                        </div>
                                        @error('brandIcon')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group float-right">
                                        <a href="{{ route('configs') }}" class="btn btn-light me-2">Back</a>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-sync"></i>
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
