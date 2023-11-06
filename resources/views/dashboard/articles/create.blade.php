@extends('layouts.dashboard')

@section('title')
Tambah Artikel
@endsection

@section('content')
<div class="app-content">
    <div class="content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Tambah Artikel</h1>
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

            <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <label for="title" class="form-label">Judul Artikel</label>
                                <div class="input-group mb-3">
                                    <input type="text" id="title" class="form-control" name="title" value="{{ old('title') }}" aria-label="Judul Artikel" placeholder="Masukkan judul Artikel Anda disini !" required>
                                </div>

                                <label for="content" class="form-label">Isi Artikel</label>
                                <textarea id="summernote" name="content" value="{{ old('content') }}" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <label for="title" class="form-label">Penulis</label>
                                <div class="input-group">
                                    <input type="text" id="writer" class="form-control" name="writer" value="{{ old('writer') }}" aria-label="Penulis" placeholder="Masukkan nama Penulis disini !" required>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <label for="image" class="form-label">Gambar Slider :</label>
                                    <input class="form-control p-2" type="file" id="image" name="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button class="btn btn-success submit">Tambah</button>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection