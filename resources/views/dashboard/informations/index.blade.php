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
                        <h1>Information Center</h1>
                        <span>Halaman ini merupakan halaman untuk mengelola Informasi perusahaan Anda termasuk deskripsi, no. kontak, alamat, dan sosial media. Anda dapat menambahkan, mengubah, bahkan menghapus slider sesuai keinginan Anda</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title float-start">
                                Information
                            </h5>
                            <a href="{{ route('info.create') }}">
                                <button class="btn btn-success float-end">+ Info</button>
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
                                        <th>Contact Person</th>
                                        <th>Description</th>
                                        <th>Address</th>
                                        <th>Social Media</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($informations as $information)
                                    <tr>
                                        <td>{{ $information->contact_person }}</td>
                                        <td>{{ strip_tags($information->description) }}</td>
                                        <td>{{ $information->address }}</td>
                                        <td>{{ $information->facebook }}<br>{{ $information->instagram }}<br>{{ $information->whatsapp }}</td>

                                        <td>
                                            <a href="{{ route('info.edit', $information) }}">
                                                <button class="btn btn-warning btn-sm mb-2">Edit</button>
                                            </a>
                                            <form action="{{ route('info.destroy', $information) }}" method="POST">
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

@section('js')
@endsection