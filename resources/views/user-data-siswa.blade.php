@extends('layout.user')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">             
      <div class="row">
        <div class="col-12">
        <div class="container-fluid px-4">
          <h5 class="mt-5 btn-link text-black font">
            <a href="{{ route('user-kelas') }}" class="mt-5 btn-link text-black fw-bold">
              <i class="fa-solid fa-arrow-left"></i>
              Data Siswa 
            </a></h5>
            <div class="ms-2 mb-8">
              <a href="{{ route('user-import-data-siswa') }}" class="btn mt-3 mb-3" style="background-color: #31D041;">Impor Data</a>
              <!-- Tombol edit untuk mengarahkan ke halaman edit -->
              <a href="{{ route('user-edit-absensi', ['class_id' => $class->id]) }}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i>Lakukan Absensi</a>
          </div>
            </div>
              <div class="card-header px-4">
                <div class="card-tools">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0 card rounded-lg">
                <table class="table table-hover text-nowrap mb-3">
                  <thead style="background-color: #90B4EC;">
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Kelas</th>
                      <th>Tanggal dan Jam</th>
                      <th>Keterangan</th>
                      <th>Alasan</th>
                    </tr>
                  </thead>
                  <tbody>
                  @if ($data->isEmpty())
                    <tr>
                      <td colspan="8" class="text-center" style="background-color: #33FFCE;">Tidak ada data siswa untuk kelas ini.</td>
                    </tr>
                  @else
                  @foreach ( $data as $d)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $d->nama }}</td>
                      <td>{{ $d->class->class_name }}</td> <!-- Menampilkan nama kelas menggunakan relasi --> 
                      <th></th>
                      <td class="align-middle">
                        <span>
                        @if ($d->keterangan)
                            <p>{{ $d->keterangan }}</p> <!-- Menampilkan keterangan tambahan jika ada -->
                        @else
                             -
                        @endif
                        </span>
                      </td>
                      <th></th>
                    </tr>

                        <!--/.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
@endsection
