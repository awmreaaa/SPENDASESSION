@extends('layout.user')
@section('content')
<!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        @csrf
        <div class="row mb-6">
            <!-- left column -->
            <div class="col-mb-6 form-responsive">
                <!-- general form elements -->
                <div class="card mt-5" style="border-width: 1px; border-style: solid; border-color: black;">
                <div class="card card-header" style="background-color:#90B4EC">
                    <h5 class="mt-2 btn-link text-black font">
                        <a href="{{ route('data') }}" class="mt-5 btn-link text-black fw-bold">
                            <i class="fa-solid fa-arrow-left"></i>
                            Pengaturan
                        </a>
                    </h5>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('store-data-siswa') }}" method="POST" enctype="multipart/form-data" class="mt-3 mx-3">
                    @csrf
                    <div class="p-5 mb-3">
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-7">
                                <input type="text" name="nama" id="nama" class="form-control" style="border-width: 1px; border-style: solid; border-color: black;">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                            <div class="col-sm-7">
                                <input type="text" id="nis" name="nis" class="form-control" style="border-width: 1px; border-style: solid; border-color: black;">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                            <div class="col-sm-7">
                                <input type="text" id="nisn" name="nisn" class="form-control" style="border-width: 1px; border-style: solid; border-color: black;">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-7">
                                <select id="kelas" name="kelas" class="form-select" style="border-width: 1px; border-style: solid; border-color: black;">
                                    <option value="pilih kelas">-- Pilih Kelas --</option>
                                    <option value="7">VII</option>
                                    <option value="8">VIII</option>
                                    <option value="9">IX</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-7">
                                <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" style="border-width: 1px; border-style: solid; border-color: black;">
                                    <option value=""></option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="status" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-7">
                                <select id="status" name="status" class="form-select" style="border-width: 1px; border-style: solid; border-color: black;">
                                    <option value=""></option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7 offset-sm-2">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            </div>
            <!-- /.card -->
        </div>
        <!--/.col (left) -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection