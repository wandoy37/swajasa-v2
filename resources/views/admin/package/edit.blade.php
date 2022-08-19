@extends('admin.layouts.app')

@section('content')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">
                <a href="{{ route('package') }}" class="text-decoration-none">
                    <i class="fas fa-arrow-left"></i>
                </a>
                Package
            </h4>
        </div>

        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('package') }}">Package</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12">

                <h4>Edit Package</h4>

                <form action="{{ url("/admin/package/$package->id") }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card">

                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Package Name</label>
                                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Package Name.." value="{{ old('title', $package->title) }}">
                                        @error('title')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="Price.." value="{{ old('price', $package->price) }}">
                                        @error('price')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Discout</label>
                                        <input type="number" name="discount" class="form-control @error('discount') is-invalid @enderror" placeholder="Discount.." value="{{ old('discount', $package->discount) }}">
                                        @error('discount')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Service</label>
                                        <select class="form-control @error('service') is-invalid @enderror" name="service">
                                            <option value="">- Select Service -</option>
                                            @foreach ($services as $service)
                                                @if (old($service->id, $package->service_id) == $service->id)
                                                    <option value="{{ $service->id }}" selected>{{ $service->title }}</option>
                                                @else
                                                    <option value="{{ $service->id }}">{{ $service->title }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('service')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label><span class="text-danger"></span>Benefits</label>
                                        <div class="select2-input select2-primary">
                                            <select id="multiple" name="benefit[]" class="form-control" multiple="multiple">
                                                @if (old('benefit', $package->benefits))
                                                    @foreach (old('benefit', $package->benefits) as $benefit)
                                                        <option value="{{ $benefit->id }}" selected>{{ $benefit->title }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <br>
                                        @error('benefit')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group float-right">
                                <a href="{{ route('package') }}" class="btn btn-round btn-light">Back</a>
                                <button type="submit" class="btn btn-primary btn-round">Save</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
    <script>
        $('#multiple').select2({
        theme: 'bootstrap',
        language: "",
        allowClear: true,
        ajax: {
            url: "{{ route('benefits.select') }}",
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                    return {
                        text: item.title,
                        id: item.id
                    }
                    })
                };
            }
        }
        });
    </script>
@endpush
