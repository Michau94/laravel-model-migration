@extends('layouts.main')

@section('title', 'About Us')
@section('cdns')

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css'
        integrity='sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=='
        crossorigin='anonymous' />
@endsection

@section('content')

    <section class="container">
        <div class="d-flex flex-column p-3 justify-content-center">
            <ul class="list-group list-group-flush text-center">
                <li class="list-group-item"><i class="fas fa-home"></i> ul,Zawadzka 7, Krakow 32-300</li>
                <li class="list-group-item"><i class="fas fa-envelope"></i> michau@miao.pl</li>
                <li class="list-group-item"><i class="fas fa-phone"></i> +48123456789</li>
                <li class="list-group-item"><i class="fab fa-whatsapp"></i> +489877654321</li>
            </ul>

            <div class="slogan text-center">
                <h2>The World is waiting for you! <i class="fas fa-sun"></i></h2>
            </div>
        </div>
    </section>





@endsection
