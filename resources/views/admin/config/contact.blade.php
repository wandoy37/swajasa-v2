@extends('admin.layouts.app')

@section('content')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                {{-- <i class="fas fa-cogs"></i> --}}
                Contact
            </h4>
        </div>

        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('configs') }}">Configs</a></li>
                <li class="breadcrumb-item active">Contact</li>
            </ol>
        </nav>

        @if (session('success'))
            <div class="alert alert-success col-lg-6" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md">

                <form action="{{ url("/admin/configs/contacts/$contacts->id") }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Telephone</label>
                                        <input type="text" name="telephone" class="form-control @error('telephone') is-invalid @enderror" value="{{ old('telephone', $contacts->telephone) }}" required>
                                        @error('telephone')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Whatsapp</label>
                                        <input type="text" name="whatsapp" class="form-control @error('whatsapp') is-invalid @enderror" value="{{ old('whatsapp', $contacts->whatsapp) }}" required>
                                        @error('whatsapp')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $contacts->email) }}" required>
                                        @error('email')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat', $contacts->alamat) }}" required>
                                        @error('alamat')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text" name="facebook" class="form-control @error('facebook') is-invalid @enderror" value="{{ old('facebook', $contacts->facebook) }}" required>
                                        @error('facebook')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input type="text" name="instagram" class="form-control @error('instagram') is-invalid @enderror" value="{{ old('instagram', $contacts->instagram) }}" required>
                                        @error('instagram')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input type="text" name="twitter" class="form-control @error('twitter') is-invalid @enderror" value="{{ old('twitter', $contacts->twitter) }}" required>
                                        @error('twitter')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Linkedin</label>
                                        <input type="text" name="linkedin" class="form-control @error('linkedin') is-invalid @enderror" value="{{ old('linkedin', $contacts->linkedin) }}" required>
                                        @error('linkedin')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
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

@endsection
