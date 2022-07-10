@extends('admin.layouts.app')

@section('content')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Service</h4>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url("admin/service/$service->id") }}" method="POST" enctype="multipart/form-data">
                            @csrf @method('PATCH')
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title.." value="{{ old('title', $service->title) }}">
                                @error('title')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Description.." value="{{ old('description', $service->description) }}">
                                @error('description')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <input type="text" name="content" class="form-control @error('content') is-invalid @enderror" placeholder="Content.." value="{{ old('content', $service->content) }}">
                                @error('content')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            {{-- Icon --}}
                            <div class="form-group">
                                <label>Icon</label>
                                <div class="input-file input-file-image">
                                    @if ($service->icon)
                                        <img class="img-upload-preview" width="150" src="{{ asset('storage/' . $service->icon) }}" alt="preview">
                                    @else
                                        <img class="img-upload-preview" width="150" src="{{ asset('assets/img/no-image.png') }}" alt="preview">
                                    @endif
                                    <input type="hidden" name="oldIcon" value="{{ $service->icon }}">
                                    <input type="file" class="form-control form-control-file" id="uploadImg1" name="icon" accept="image/*">
                                    <label for="uploadImg1" class="  label-input-file btn btn-primary btn-round">
                                        <span class="btn-label">
                                            <i class="fa fa-file-image"></i>
                                        </span>
                                        Upload a Icon
                                    </label>
                                </div>
                                @error('icon')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            {{-- Sampul --}}
                            <div class="form-group">
                                <label>Sampul</label>
                                <div class="input-file input-file-image">
                                    @if ($service->sampul)
                                        <img class="img-upload-preview" width="150" src="{{ asset('storage/' . $service->sampul) }}" alt="preview">
                                    @else
                                        <img class="img-upload-preview" width="150" src="{{ asset('assets/img/no-image.png') }}" alt="preview">
                                    @endif
                                    <input type="hidden" name="oldSampul" value="{{ $service->sampul }}">
                                    <input type="file" class="form-control form-control-file" id="uploadImg2" name="sampul" accept="image/*">
                                    <label for="uploadImg2" class="  label-input-file btn btn-primary btn-round">
                                        <span class="btn-label">
                                            <i class="fa fa-file-image"></i>
                                        </span>
                                        Upload a Sampul
                                    </label>
                                </div>
                                @error('sampul')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" name="status" value="publish" class="btn btn-success">
                                <input type="submit" name="status" value="draft" class="btn btn-warning">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
