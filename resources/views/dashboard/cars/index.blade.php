@extends('layouts.dashboard')

@section('title')
Cars
@endsection

@section('content')
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Cars List</h1>
                        <span>Halaman ini merupakan halaman untuk mengelola list mobil rental Anda, Anda dapat menambahkan, mengubah, bahkan menghapus list mobil sesuai keinginan Anda</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title float-start">
                                Cars List
                            </h5>
                            <a href="{{ route('cars.create') }}">
                                <button class="btn btn-success float-end">+ Car</button>
                            </a>
                        </div>

                        @if(session('success'))
                        <div class="alert alert-success mx-4 mt-2" role="alert">
                            <b>[YOSHA !]</b> {{ session('success') }}
                        </div>
                        @endif

                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama Mobil</th>
                                        <th>Spesiikasi</th>
                                        <th>Harga</th>
                                        <th>Gambar</th>
                                        <th>Jumlah Penumpang</th>
                                        <th>Jumlah Bagasi</th>
                                        <th>Jumlah Pintu</th>
                                        <th>Type</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cars as $car)
                                    <tr>
                                        <td>{{ $car->car_name }}</td>
                                        <td>{{ strip_tags($car->specification) }}</td>
                                        <td>{{ $car->formattedPrice }}</td>
                                        <td>
                                            @if ($car->image)
                                            <img src="{{ asset('storage/images/' . $car->image) }}" alt="car Image" style="width: 70px; height: 110px; object-fit:cover">
                                            @else
                                            No image available.
                                            @endif
                                        </td>
                                        <td>{{ $car->passenger }}</td>
                                        <td>{{ $car->baggage }}</td>
                                        <td>{{ $car->door }}</td>
                                        <td>{{ $car->type }}</td>
                                        <td>
                                            <a href="{{ route('cars.show', $car) }}">
                                                <button class="btn btn-primary btn-sm mb-2">View</button>
                                            </a>
                                            <a href="{{ route('cars.edit', $car) }}">
                                                <button class="btn btn-warning btn-sm mb-2">Edit</button>
                                            </a>
                                            <form action="{{ route('cars.destroy', $car) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm mb-2" type="submit">Delete</button>
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

        </div>
    </div>
</div>
@endsection