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
                <div class="card-header">
                    <h5 class="mt-5 btn-link text-black font">
                        <a href="{{ route('all-studentdata') }}" class="mt-5 btn-link text-black fw-bold">
                            <i class="fa-solid fa-arrow-left"></i>
                            Kembali ke halaman data siswa
                        </a>
                    </h5>
                </div>
                <!-- /.card-header -->
                <!-- Form impor data siswa -->
                <form action="{{ route('import-proses') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card p-5" style="background-color:#9ABCEE">
                    <div class="form-group">
                        <label for="file">Pilih file untuk diimpor:</label>
                        <select name="file_type" class="form-select form-select-lg mb-1" aria-label="Large select example">
                            <option value="excel">Excel</option>
                            <option value="pdf">PDF</option>
                            <option value="document">Dokumen (Word/Text)</option>
                        </select>
                        <input type="file" class="form-control-file mt-2" id="file" name="file">
                    </div><br>
                    <button type="submit" class="btn btn-primary mt-3">Impor Data</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        <!--/.col (left) -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection