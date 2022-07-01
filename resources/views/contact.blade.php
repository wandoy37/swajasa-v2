@extends('layouts.app')

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
                <div class="text-white font-bold">
                    <div class="mb-3">
                        <label class="form-label">Nama anda</label>
                        <input type="text" class="form-control" placeholder="Your name..">
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-sm">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" placeholder="Your email..">
                            </div>
                            <div class="col-sm">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control" placeholder="Your phone..">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pesan</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <a href="success.php" class="btn-contact">
                            Kirim Pesan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Contact Us -->
@endsection