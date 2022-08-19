@extends('admin.layouts.app')

@section('content')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                Message
            </h4>
        </div>

        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Message</li>
            </ol>
        </nav>

        @if (session('success'))
            <div class="alert alert-success col-lg-6" role="alert">
                {{ session('success') }}
            </div>
        @endif
        {{-- <div class="page-category">
            <div class="my-1">
                <a href="{{ route('service.create') }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-plus"></i>
                    Create new service
                </a>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Pesan</th>
                            <th scope="col">Status</th>
                            <th scope="col" width="25%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($message as $item)
                        <tr>
                            <td>
                                <a href="/" data-toggle="modal" data-target="#showMessage-{{ $item->id }}">
                                    {{ $item->email }} <span class="ml-4 text-dark"><i>{{ $item->updated_at->format('d, M Y') }}</i></span>
                                    <div class="my-0">
                                        <p class="text-muted">{{ Str::limit($item->pesan, 82, '...') }}</p>
                                    </div>
                                </a>
                            </td>
                            <td class="text-capitalize text-center">
                                @if ($item->status == 'confirm')
                                    <span class="badge badge-success">{{ $item->status }}</span>
                                @else
                                    <span class="badge badge-warning">{{ $item->status }}</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <form action="/admin/message/{{ $item->id }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#showMessage-{{ $item->id }}">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus pesan ini?')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
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

@include('admin.message.show')

@endsection
