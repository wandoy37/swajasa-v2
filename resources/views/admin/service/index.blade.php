@extends('admin.layouts.app')

@section('content')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                Service <span class="badge badge-info">{{ $count }}</span>
            </h4>
        </div>

        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Service</li>
            </ol>
        </nav>

        @if (session('success'))
            <div class="alert alert-success col-lg-6" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="page-category">
            <div class="my-1">
                <a href="{{ route('service.create') }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-plus"></i>
                    Create new service
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 my-2">
                <div class="input-icon">
                    <form action="/admin/service">
                        <div class="input-icon">
                            <input type="text" name="search" class="form-control" placeholder="Search for..." value="{{ $search }}">
                            <span class="input-icon-addon">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th scope="col" width="10%">No</th>
                            <th scope="col">Layanan</th>
                            <th scope="col">Status</th>
                            <th scope="col" width="25%">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php $no = 0 ?>
                        @foreach ($service as $s)
                        <?php $no++ ?>
                        <tr>
                            <td>{{ $no }}</td>
                            <td>
                                {{ $s->title }}
                                <div class="my-0">
                                    <a href="">Show</a>
                                </div>
                            </td>
                            <td class="text-capitalize">
                                @if ($s->status == 'publish')
                                    <span class="badge badge-success">{{ $s->status }}</span>
                                @else
                                    <span class="badge badge-danger">{{ $s->status }}</span>
                                @endif
                            </td>
                            <td>
                                <form action="/admin/service/{{ $s->slug }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <a href="{{ url("admin/service/$s->slug/edit") }}" class="btn btn-warning btn-sm">Edit</a>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus layanan ini?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $service->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
