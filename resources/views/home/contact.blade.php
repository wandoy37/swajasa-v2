@extends('home.layouts.app')

@section('content')
    <!-- Contact Us -->
<section id="banner">
    <div class="container pt-4 mt-4">
        <div class="row align-items-center py-4 mt-4">
            <div class="col-md-6 my-4 text-end">
                <img src="assets/img/customer-service.png" class="img-fluid" width="100%">
            </div>
            <div class="col-md-6 my-4 text-start">
                <h1 class="font-bold text-white text-capitalize mb-4 text-center">Contact Us</h1>
                <form action="{{ route('message.create') }}" method="post">
                @csrf
                    <div class="text-white font-bold">
                        <div class="mb-3">
                            <label class="form-label">Nama anda</label>
                            <input type="text" name="name" class="form-control" placeholder="Your name.." required>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-sm">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Your email.." required>
                                </div>
                                <div class="col-sm">
                                    <label class="form-label">Phone</label>
                                    <input type="number" name="phone_number" class="form-control" placeholder="Your phone.." required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pesan</label>
                            <textarea class="form-control" name="pesan" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            {{-- <a href="/success" class="btn-contact">
                                Kirim Pesan
                            </a> --}}
                            <button type="submit" class="btn-contact">Kirim Pesan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /Contact Us -->
@endsection
