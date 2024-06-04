@extends('layout.user')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">             
      <div class="row">
        <div class="col-12">
        <div class="container-fluid px-2">
          <h5 class="mt-5 btn-link text-black font">
            <a href="{{ route('user-kelas') }}" class="mt-5 btn-link text-black fw-bold">
              <i clad ss="fa-solid fa-arrow-left"></i>
              Edit Data Siswa 
            </a></h5>
            <form action="{{ route('user-update-absensi', ['class_id' => $students->first()->class_id]) }}" method="POST">
            @csrf
            @method('PUT')
              <div class="card-header">
                <div class="card-tools">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0 card rounded-lg">
                <table class="table table-hover text-nowrap mb-3">
                  <thead style="background-color: #90B4EC;">
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Tanggal/Jam</th>
                      <th>Keterangan</th>
                      <th>Alasan</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                  @foreach ($students as $student)
                    <tr class="border-dark">
                        <td class="border-dark">{{ $loop->iteration }}</td>
                        <td class="border-dark">{{ $student->nama }}</td>
                        <td class="border-dark">
                            <td class="border-dark">
                            <div class="col-sm-7">
                                <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" style="border-width: 1px; border-style: solid; border-color: black;">
                                    <option value="">-- Pilih Keterangan --</option>
                                    <option value="Laki-laki" >Hadir</option>
                                    <option value="Perempuan">Izin</option>
                                    <option value="Perempuan" >Sakit</option>
                                    <option value="Perempuan">Alfa</option>
                                </select>
                            </div>
                            
                        </td>
                        <td class="border-dark"></td>
                    </tr>
                @endforeach
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
