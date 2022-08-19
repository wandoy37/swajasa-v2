@extends('admin.layouts.app')

@section('content')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                {{-- <i class="fas fa-cogs"></i> --}}
                About
            </h4>
        </div>

        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('configs') }}">Configs</a></li>
                <li class="breadcrumb-item active">About</li>
            </ol>
        </nav>

        @if (session('success'))
            <div class="alert alert-success col-lg-6" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url("/admin/configs/abouts/$abouts->id") }}" method="post">
                        @csrf
                        @method('PATCH')
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $abouts->title) }}" required>
                                @error('title')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description"rows="3" required>{{ old('description', $abouts->description) }}</textarea>
                                @error('description')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>content</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="3" required>{{ old('content', $abouts->content) }}</textarea>
                                @error('content')
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
