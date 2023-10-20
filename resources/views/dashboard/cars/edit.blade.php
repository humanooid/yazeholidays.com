@extends('layouts.dashboard')

@section('title')
Ubah Mobil
@endsection

@section('content')

<body>
    <div class="app-content">
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col">
                        <div class="page-description">
                            <h1>Ubah Data Mobil</h1>
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

                <form action="{{ route('cars.update', $car->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Perlu menambahkan method spoofing untuk metode PUT -->
                    <div class="row">
                        <div class="col-8">
                            <div class="card">
                                <div class="card-body">
                                    <label for="car_name" class="form-label">Nama Mobil</label>
                                    <div class="input-group mb-3">
                                        <input type="text" id="car_name" class="form-control" name="car_name" value="{{ $car->car_name }}" aria-label="Nama Mobil" placeholder="Masukkan nama Mobil Anda di sini !" required>
                                    </div>

                                    <label for="specification" class="form-label">Spesifikasi/Deskripsi Mobil</label>
                                    <div class="input-group">
                                        <textarea id="summernote" name="specification" required>{{ $car->specification }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <label for="country" class="form-label">Pilih Negara</label>
                                    <div class="input-group mb-3">
                                        <select id="country" class="form-select" name="country">
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Indonesia">Indonesia</option>
                                        </select>
                                    </div>

                                    <label for="basic-url" class="form-label">Harga</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rp.</span>
                                        <input type="number" step="0.01" id="price" class="form-control" name="price" value="{{ $car->price }}" aria-label="Harga" placeholder="Masukkan nominal di sini !">
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <label for="image" class="form-label">Unggah Gambar Mobil</label>
                                        <input class="form-control p-2" type="file" id="image" name="image">
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <label for="passenger" class="form-label">Jumlah Penumpang</label>
                                    <div class="input-group mb-3">
                                        <input type="number" id="passenger" class="form-control" name="passenger" value="{{ $car->passenger}}" aria-label="Kapasitas Penumpang" placeholder="Masukan kapasitas penumpang disini !" required>
                                    </div>

                                    <label for="baggage" class="form-label">Jumlah Bagasi</label>
                                    <div class="input-group mb-3">
                                        <input type="number" step="0.01" id="baggage" class="form-control" name="baggage" value="{{ $car->baggage }}" aria-label="Jumlah Bagasi" placeholder="Masukkan jumlah bagasi disini !">
                                    </div>

                                    <label for="door" class="form-label">Jumlah Pintu</label>
                                    <div class="input-group mb-3">
                                        <input type="number" step="0.01" id="door" class="form-control" name="door" value="{{ $car->door }}" aria-label="Jumlah Pintu" placeholder="Masukkan jumlah pintu disini !">
                                    </div>

                                    <label for="type" class="form-label">Type Mobil</label>
                                    <div class="input-group mb-3">
                                        <input type="text" id="type" class="form-control" name="type" value="{{ $car->type }}" aria-label="Type Mobil" placeholder="Masukan type mobil disini !">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button class="btn btn-success submit my-3" type="submit">Simpan</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</body>
@endsection

@section('js')
<!-- Tambahan script untuk Summernote -->
<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            placeholder: 'Deskripsikan Mobil Anda di sini !',
            tabsize: 1,
            height: 150
        });
    });
</script>
@endsection