@extends('layout.user')
@section('content')
<div class="sb-nav-fixed" style="font-family: 'Outfit', sans-serif;">
    <div class="home d-flex align-items-center justify-content-center ms-5 mt-5">
        <div class="image d-flex justify-content-center me-5 mt-3"> <!-- Menggunakan flexbox untuk menengahkan gambar -->
            <img src="admin/assets/img/logo-smp2.png" style="width: 45%;" class="navbar-logo ps-2 mt-5">
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="d-flex align-items-center justify-content-center">
                    <h3 class="text-center" style="font-weight:bold;">SPENDA ABSENSI</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <div class="d-flex align-items-center justify-content-center">
                    <p class="text-center" style="font-size: 20px;">Selamat Datang di SPENDASESSION</p>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <p class="text-center" style="font-size: 20px;">SPENDASESSION merupakan aplikasi absensi berbasis<br>website untuk SMPN 2 BANJARMASIN</p>
                </div>
            </div>
        </div>
    </div>
    
@endsection