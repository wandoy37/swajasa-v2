@extends('admin.layouts.app')

@section('content')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                Package
            </h4>
        </div>

        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Package</li>
            </ol>
        </nav>

        @if (session('success'))
            <div class="alert alert-success col-lg-6" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger col-lg-6" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <div class="page-category">
            <div class="my-1">
                <a href="{{ route('package.create') }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-plus"></i>
                    Create new package
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Package</th>
                            <th scope="col">Layanan</th>
                            <th scope="col">Harga</th>
                            <th scope="col" width="25%">Action</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <?php $no = 0 ?>
                        @foreach ($packages as $package)
                        <?php $no++ ?>
                        <tr>
                            <td>
                                {{ $package->title }}
                            </td>
                            <td class="text-center">
                                {{ $package->service->title }}
                            </td>
                            <td class="text-center">
                                @if ($package->discount == null)
                                    <span>@currency($package->price)</span>
                                @else
                                    <del>@currency($package->price)</del>
                                    <br>
                                    <span>@currency($package->discount)</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <form action="{{ url("/admin/package/$package->id") }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <a href="{{ url("/admin/package/$package->slug/edit") }}" class="btn btn-warning btn-sm">Edit</a>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus package layanan ini?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
