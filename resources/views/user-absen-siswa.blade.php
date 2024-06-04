@extends('layout.user')
@section('content')
<div class="container" style="margin-top:50px;">
<!-- left column -->
<div class="col-mb-6 form-responsive">
    <!-- general form elements -->
<div class="card mt-5" style="border-width: 1px; border-style: solid; border-color: black;">
    <div class="card card-header" style="background-color:#90B4EC">
        <h5 class="mt-2 btn-link text-black font">
            <a href="{{ route('user-absensi') }}" class="mt-5 btn-link text-black fw-bold">
                <i class="fa-solid fa-arrow-left"></i>
                 Kembali 
            </a>
        </h5>
    </div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-sm table-hover table-bordered border-dark">
            <thead>
                <tr class="border-dark">
                    <th class="border-dark text-center align-middle" rowspan="2">No</th>
                    <th class="border-dark text-center align-middle" rowspan="2" style="min-width: 100px">Nama Siswa</th>
                    <th class="border-dark text-center align-middle" rowspan="2">NIS</th>
                    <th class="border-dark text-center align-middle" rowspan="1" >Keterangan</th>
                   
                    <!-- tanggal -->
                </tr>
                
            </thead>
            <tbody>
            <tr class="border-dark">
                    <td class="border-dark">1</td>
                    <td class="border-dark">Nazwa</td>
                    <td class="border-dark">024342121</td>
                    <td class="border-dark" style="min-width: 50px">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="inlineRadio1">Hadir</label>
                </tr>
                </tr>
                <tr class="border-dark">
                    <td class="border-dark">2</td>
                    <td class="border-dark">Maulida</td>
                    <td class="border-dark">024342121</td>
                    <td class="border-dark" style="min-width: 50px">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="inlineRadio1">Sakit</label>
                </tr>
                <tr class="border-dark">
                    <td class="border-dark">3</td>
                    <td class="border-dark">Amalia</td>
                    <td class="border-dark">024342121</td>
                    <td class="border-dark" style="min-width: 50px">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="inlineRadio1">Hadir</label>
                </tr>
                <tr class="border-dark">
                    <td class="border-dark">4</td>
                    <td class="border-dark">Rizka</td>
                    <td class="border-dark">024342121</td>
                    <td class="border-dark" style="min-width: 50px">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="inlineRadio1">Izin</label>
                </tr>
            </tbody>
        </table> 
    </div>
</div>
</div>
@endsection