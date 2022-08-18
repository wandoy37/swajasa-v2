@extends('layouts.app')

@section('content')
<!-- Banner -->
<section>
    <div class="container pt-4 mt-4">
        <div class="row align-items-center py-4 mt-4">
            <span class="my-2 font-bold text-center fs-4 text-success">Message has been sent !!!</span>
            <div class="col-md-12 my-2 text-center">
                <img src="assets/img/success.png" class="img-fluid" width="400px">
            </div>

            @if (session('success'))
                <span class="my-2 text-center fs-4">
                    {{ session('success') }}
                </span>
            @endif


            <span class="my-2 text-center fs-4">
                Kami akan segera menghubungi anda
            </span>
        </div>
    </div>
</section>
<!-- /Banner -->
@endsection
