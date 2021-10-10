@extends('layouts.main')

@section('title', 'Our Trips')


@section('content')
    <section class="container ">

        <div class="row py-2">
            @forelse ($trips as $trip)
                <div class="col-3">
                    @include('partials.card', ['trip' => $trip])
                </div>

            @empty

                <h1>No trips available!</h1>

            @endforelse
        </div>
    </section>


@endsection
