@extends('layouts.dashboard')

@section('content')
<div class="app-content">
    <div class="content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Tambah Artikel</h1>
                        <span>Isi formulir dibawah ini, untuk menambahkan artikel Anda, agar dapat ditampilkan di halaman depan !</span>
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

            <form action="{{ route('article.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Perlu menambahkan method spoofing untuk metode PUT -->
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="title" class="form-label">Judul Artikel</label>
                        <div class="input-group mb-3">
                            <input type="text" id="title" class="form-control" name="title" value="{{ old('title', $article->title) }}" aria-label="Judul Artikel" placeholder="Masukkan judul Artikel Anda disini !" required>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <label for="title" class="form-label">Penulis</label>
                        <div class="input-group mb-3">
                            <input type="text" id="writer" class="form-control" name="writer" value="{{ old('writer', $article->writer) }}" aria-label="Penulis" placeholder="Masukkan nama Penulis disini !" required>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="content" class="form-label">Isi Artikel</label>
                        <div class="card">
                            <div class="card-body">
                                <textarea id="summernote" name="content" value="{{ old('content', $article->content) }}" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="file" class="form-label">Unggah Gambar</label>
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <label for="image">Gambar:</label>
                                    <input type="file" id="image" name="image">
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
@endsection