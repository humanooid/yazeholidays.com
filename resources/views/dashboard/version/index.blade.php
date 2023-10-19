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
                        <h1>Web and Dashboard Versions</h1>
                        <span>Halaman ini merupakan halaman yang menampilkan mengenai versi dari website dan dashboard Anda, Anda juga dapat melihat perubahan fitur, update sistem, perbaikan bug/error melalui bagian Change Log</span>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h6>Web version : 0.0.1.p</h6>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h6>Dashboard version : 0.0.1.p</h6>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <p>Sebagai bentuk pelayanan maksimal terhadap client kami, maka versi Website dan Dashboard akan terus kami perbaharui agar sistem terupdate dan tampilan lebih menarik</p>
                        <p>Jika ada kritik dan saran silahkan menghubungi kami di : <br> <a href="https://wa.me/+62895406548484">0895-4065-48484</a> atau melalui email <a href="mailto:humanooid.indonesia@gmail.com">humanooid.indonesia@gmail.com</a></p>
                        <p>Hormat kami,<br><strong>Pengelola<a href="https://humanoo.id"> Humanoo.id</a></p></strong>
                    </div>
                </div>
            </div>

            <div class="section-description section-description-inline">
                <h1>Change Logs</h1>
                <span>Tabel dibawah menampilkan pembaharuan sistem, tampilan, fitur, maupun perbaikan dari error/bug</span>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <label for="change_log" class="form-label">Change Log</label>
                            <p>19/OCT/2023 | [v.0.0.92.p] Dashboard - [NEW FEATURED] Tambahan menu booking order</p>
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