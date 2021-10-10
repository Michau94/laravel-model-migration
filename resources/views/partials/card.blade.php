<div class="card">
    <div class="card-header">
        {{ $trip->region, $trip->nation }}
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $trip->name }}</h5>
        <p class="card-text">{{ $trip->description }}</p>
        <a href="" class="btn btn-primary">Find Out More</a>
    </div>
</div>
