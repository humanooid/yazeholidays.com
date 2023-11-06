@extends('layouts.dashboard')

@section('title')
Ubah Informasi
@endsection

@section('content')
<div class="app-content">
    <div class="content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Ubah Informasi</h1>
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

            <form action="{{ route('info.update', ['information' => $information]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Perlu menambahkan method spoofing untuk metode PUT -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <label for="address" class="form-label">Alamat</label>
                                <div class="input-group mb-3">
                                    <input type="text" id="address" class="form-control" name="address" value="{{ $information->address }}" aria-label="Nama Produk" placeholder="Masukkan alamat Anda disini !" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <label for="product_name" class="form-label">Contact Person</label>
                                <div class="input-group mb-3">
                                    <input type="number" id="contact_person" class="form-control" name="contact_person" value="{{ $information->contact_person }}" aria-label="Nama Produk" placeholder="+628123456789" required>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <label for="description" class="form-label">Deskripsi Perusahaan</label>
                                <textarea id="summernote" name="description" required>{{ $information->description }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <label for="basic-url" class="form-label">Instagram</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">IG</span>
                                    <input type="url" step="0.01" id="instagram" class="form-control" name="instagram" value="{{ $information->instagram }}" aria-label="Social Media" placeholder="https://www.instagram.com/">
                                </div>
                            </div>

                            <div class="col-4">
                                <label for="basic-url" class="form-label">Facebook</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">FB</span>
                                    <input type="url" step="0.01" id="facebook" class="form-control" name="facebook" value="{{ $information->facebook }}" aria-label="Social Media" placeholder="https://www.facebook.com/">
                                </div>
                            </div>

                            <div class="col-4">
                                <label for="basic-url" class="form-label">Whatsapp</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">WA</span>
                                    <input type="url" step="0.01" id="whatsapp" class="form-control" name="whatsapp" value="{{ $information->whatsapp }}" aria-label="Social Media" placeholder="https://www.whatsapp.com/">
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
@endsection

@section('js')
@endsection