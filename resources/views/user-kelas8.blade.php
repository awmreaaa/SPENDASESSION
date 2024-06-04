@extends('layout.user')
@section('content')
 <!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <main>
        <div class="container-fluid px-4">
          <h4 class="mt-5 mb-5">
            <a href="" class="btn-link text-black">
              Data Siswa Kelas 8
            </a></h4>
            <div class="row">
                @foreach($kelas as $index => $class_id)
                <div class="col-md-3 mb-4">
                    <div class="card text-black" style="background-color:#90B4EC;">
                        <div class="card-body">Kelas {{ strtoupper($class_id) }}</div>
                        <div class="card align-items-center justify-content-center mb-2 mt-4 ms-3 me-3" style="background-color:#D9D9D9;">
                            <a class="btn text-black" href="{{ route('user-data-siswa', ['class_id' => $index + 9]) }}">Lihat Data</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
  </div>
</section>
@endsection