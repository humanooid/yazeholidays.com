@extends('layouts.dashboard')

@section('title')
Articles
@endsection

@section('content')
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Articles</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title float-start">
                                Article List
                            </h5>
                            <a href="{{ route('article.create') }}">
                                <button class="btn btn-success float-end">+ Article</button>
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
                                        <th>Judul Artikel</th>
                                        <th>Tanggal</th>
                                        <th>Penulis</th>
                                        <th>Isi Artikel</th>
                                        <th>Gambar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($articles as $article)
                                    <tr>
                                        <td>{{ $article->title }}</td>
                                        <td>
                                            @if ($article->created_at)
                                            {{ $article->created_at->format('d/m/Y H:i:s') }}
                                            @endif
                                        </td>
                                        <td>{{ $article->writer }}</td>
                                        <td>
                                            <div class="container-article">
                                                <div class="one-line">
                                                    {{ strip_tags($article->content) }}
                                                </div>
                                            </div>
                                        </td>
                                        <td>@if ($article->image)
                                            <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" width="200">
                                            @else
                                            No image available.
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('article.edit', $article) }}">
                                                <button class="btn btn-warning btn-sm mb-2">Edit</button>
                                            </a>
                                            <form action="{{ route('article.destroy', $article) }}" method="POST">
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