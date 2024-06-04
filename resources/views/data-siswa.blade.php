@extends('layout.main')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">             
      <div class="row">
        <div class="col-12">
        <div class="container-fluid px-4">
          <h5 class="mt-5 btn-link text-black font">
            <a href="{{ route('kelas') }}" class="mt-5 btn-link text-black fw-bold">
              <i class="fa-solid fa-arrow-left"></i>
              Data Siswa 
            </a></h5>
            <div class="ms-2 mb-8">
              <a href="{{ route('import-data-siswa') }}" class="btn mt-3 mb-3" style="background-color: #31D041;">Impor Data</a>
              <a href="{{ route('create-data-siswa') }}" class="btn mt-3 mb-3" style="background-color: #4D7FFF;">Tambah Data</a>
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
                      <th>NIS</th>
                      <th>NISN</th>
                      <th>Kelas</th>
                      <th>Jenis Kelamin</th>
                      <th>Status</th>
                      <th>Aksi</th>
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
                      <td>{{ $d->nis }}</td>
                      <td>{{ $d->nisn }}</td>
                      <td>{{ $d->class->class_name }}</td> <!-- Menampilkan nama kelas menggunakan relasi -->
                      <td>{{ $d->jenis_kelamin }}</td>   
                      <td class="align-middle">
                        <span>
                          @if ($d->status == 'Aktif')
                            <p class="badge" style="background-color: #31D041;">Aktif</p>
                          @else
                            <p class="badge bg-danger">Non-Aktif</p>
                          @endif
                        </span>
                      <td>
                        <a href="{{ route('edit-data-siswa',['id' => $d->id]) }}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
                        <a data-toggle="modal" data-target="#modal-hapus{{ $d->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</a>
                      </td>
                    </tr>
                    <div class="modal fade" id="modal-hapus{{ $d->id }}">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>Apakah kamu yakin ingin menghapus data siswa atas nama<b> {{ $d->nama }}</b></p>
                          </div>
                          <div class="modal-footer justify-content-between">
                            <form action="{{ route('delete-data-siswa',['id' => $d->id]) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
                              <button type="submit" class="btn btn-primary">YA, HAPUS DATA</button>
                            </form> 
                          </div>
                        </div>
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
