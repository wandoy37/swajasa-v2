@extends('admin.layouts.app')

@section('content')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                <i class="fas fa-cogs"></i>
                Configs
            </h4>
        </div>

        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Configs</li>
            </ol>
        </nav>

        @if (session('success'))
            <div class="alert alert-success col-lg-6" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td><a href="{{ route('app') }}">Apps</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('abouts') }}">About</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('contacts') }}">Social Media</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
