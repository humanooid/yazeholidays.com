@extends('layouts.dashboard')

@section('meta')

@endsection

@section('content')
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Car View</h1>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-horizontal d-flex">
                    <div class="image">
                        <img class="card-img-top" src="{{ asset('storage/images/' . $car->image) }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->car_name }}</h5>
                        <p class="card-text">{{ strip_tags($car->specification) }}</p>
                        <p class="card-text">Price: {{ $formattedPrice }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('js')
@endsection