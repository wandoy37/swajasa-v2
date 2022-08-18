@extends('admin.layouts.app')

@section('content')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                Benefit
            </h4>
        </div>

        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Benefit</li>
            </ol>
        </nav>

        @if (session('success'))
            <div class="alert alert-success col-lg-6" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="page-category">
            <div class="my-1">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Benefit</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('benefit.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Benefit</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Benefit.." value="{{ old('title') }}">
                                @error('title')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group float-right">
                                <button type="submit" class="btn btn-primary round">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th scope="col" width="10%">No</th>
                            <th scope="col">Benefit</th>
                            <th scope="col" width="25%">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php $no = 0 ?>
                        @foreach ($benefits as $benefit)
                        <?php $no++ ?>
                        <tr>
                            <td>{{ $no }}</td>
                            <td>
                                {{ $benefit->title }}
                            </td>
                            <td>
                                <form action="/admin/benefit/{{ $benefit->id }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    {{-- <a href="{{ url("admin/service/$benefit->slug/edit") }}" class="btn btn-warning btn-sm">Edit</a> --}}
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editBenefit-{{ $benefit->id }}">
                                        Edit
                                    </button>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus benefit ini?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $benefits->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.benefit.edit')

@endsection
