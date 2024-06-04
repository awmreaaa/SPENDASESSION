@extends('layout.main')
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
                        <a href="{{ route('all-studentdata') }}" class="mt-5 btn-link text-black fw-bold">
                            <i class="fa-solid fa-arrow-left"></i>
                            Tambah Data Siswa
                        </a>
                    </h5>
                </div>
                <!-- /.card-header -->
                <!-- Display Error and Success Messages -->
                @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                <!-- form start -->
                <form action="{{ route('store-data-siswa') }}" method="POST" enctype="multipart/form-data" class="mt-3 mx-3">
                    @csrf
                    <div class="p-5 mb-3">
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-7">
                                <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}" style="border-width: 1px; border-style: solid; border-color: black;">
                            </div>
                        </div>
                        <div class="row mb-3">      
                            <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                            <div class="col-sm-7">
                                <input type="text" id="nis" name="nis" class="form-control" value="{{ old('nis') }}" style="border-width: 1px; border-style: solid; border-color: black;">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                            <div class="col-sm-7">
                                <input type="text" id="nisn" name="nisn" class="form-control" value="{{ old('nisn') }}" style="border-width: 1px; border-style: solid; border-color: black;">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-7">
                                <select id="kelas" name="class_id" class="form-select" style="border-width: 1px; border-style: solid; border-color: black;">
                                <option value="">-- Pilih Kelas --</option>
                                    @foreach($class as $kelas)
                                        <option value="{{ $kelas->id }}" {{ old('class_id') == $kelas->id ? 'selected' : '' }}>{{ $kelas->class_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-7">
                                <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" style="border-width: 1px; border-style: solid; border-color: black;">
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="status" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-7">
                                <select id="status" name="status" class="form-select" style="border-width: 1px; border-style: solid; border-color: black;">
                                <option value="">-- Pilih Status --</option>
                                    <option value="Aktif" {{ old('status') == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                    <option value="Non-Aktif" {{ old('status') == 'Non-Aktif' ? 'selected' : '' }}>Non-Aktif</option>
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