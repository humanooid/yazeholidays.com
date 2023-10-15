@extends('layouts.dashboard')

@section('meta')
@endsection

@section('content')
<div class="app-content">
    <div class="content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Tambah Mobil</h1>
                        <span>Isi formulir dibawah ini, untuk menambahkan list mobil rental Anda, agar dapat ditampilkan di halaman depan !</span>
                    </div>
                </div>
            </div>

            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                <b>[ALERT !]</b> {{ $error }}
                @endforeach
            </div>
            @endif

            <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-8">
                        <label for="car_name" class="form-label">Nama Mobil</label>
                        <div class="input-group mb-3">
                            <input type="text" id="car_name" class="form-control" name="car_name" value="{{ old('car_name') }}" aria-label="Nama Mobil" placeholder="Masukkan nama Mobil Anda disini !" required>
                        </div>
                    </div>

                    <div class="col-4">
                        <label for="basic-url" class="form-label">Harga</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp.</span>
                            <input type="number" step="0.01" id="price" class="form-control" name="price" value="{{ old('price') }}" aria-label="Harga" placeholder="Masukkan nominal disini !">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="specification" class="form-label">Spesifikasi/Deskripsi Mobil</label>
                        <div class="card">
                            <div class="card-body">
                                <textarea id="summernote" name="specification" value="{{old('specification') }}" required></textarea>                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-4">
                        <label for="passenger" class="form-label">Jumlah Penumpang</label>
                        <div class="input-group mb-3">
                            <input type="number" id="passenger" class="form-control" name="passenger" value="{{ old('passenger') }}" aria-label="Kapasitas Penumpang" placeholder="Masukan kapasitas penumpang disini !" required>
                        </div>
                    </div>

                    <div class="col-4">
                        <label for="baggage" class="form-label">Jumlah Bagasi</label>
                        <div class="input-group mb-3">
                            <input type="number" step="0.01" id="baggage" class="form-control" name="baggage" value="{{ old('baggage') }}" aria-label="Jumlah Bagasi" placeholder="Masukkan jumlah bagasi disini !">
                        </div>
                    </div>

                    <div class="col-4">
                        <label for="door" class="form-label">Jumlah Pintu</label>
                        <div class="input-group mb-3">
                            <input type="number" step="0.01" id="door" class="form-control" name="door" value="{{ old('door') }}" aria-label="Jumlah Pintu" placeholder="Masukkan jumlah pintu disini !">
                        </div>
                    </div>

                    <div class="col-4">
                        <label for="type" class="form-label">Type Mobil</label>
                        <div class="input-group mb-3">
                            <input type="text" id="type" class="form-control" name="type" value="{{ old('type') }}" aria-label="Type Mobil" placeholder="Masukan type mobil disini !">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <label for="image" class="form-label">Unggah Gambar Mobil</label>
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <label for="image">Image:</label>
                                    <input type="file" id="image" name="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button class="btn btn-success submit my-3">Tambah</button>
                </div>

            </form>

        </div>
    </div>
</div>

<!-- <div class="row justify-content-center align-items-center">
    <div class="card" style="width: 68rem; margin: 20px 20px">
        <div class="card-header">
            Create car !
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="car_name">car Name:</label>
                    <input type="text" id="car_name" name="car_name" value="{{ old('car_name') }}" required>
                </div>
                <div>
                    <label for="specification">Specification:</label>
                    <textarea id="specification" name="specification" value="{{old('specification') }}" required></textarea>
                </div>
                <div>
                    <label for="price">Price:</label>
                    <input type="number" step="0.01" id="price" name="price" value="{{ old('price') }}" required>
                </div>
                <div>
                    <label for="image">Image:</label>
                    <input type="file" id="image" name="image">
                </div>
                <div>
                    <button type="submit">Create</button>
                </div>
            </form>
        </div>
    </div>
</div> -->
@endsection

@section('js')
@endsection