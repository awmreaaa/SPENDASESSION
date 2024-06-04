@extends('layout.user')
@section('content')
 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
    <main>
        <div class="container-fluid px-4">
          <h4 class="mt-5 mb-5">
            <a href="" class="btn-link text-black">
              Kelas
            </a></h4>
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="card text-black mb-4" style="background-color:#90B4EC;">
                            <div class="card-body">Kelas 7</div>
                                <div class="card align-items-center justify-content-center mb-2 mt-4 ms-3 me-3" style="background-color:#D9D9D9;">
                                    <a class="btn text-black" href="{{ route('user-kelas7') }}">Lihat Data</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card text-black mb-3" style="background-color:#90B4EC;">
                                <div class="card-body">Kelas 8</div>
                                    <div class="card d-flex align-items-center justify-content-center mb-2 mt-4 ms-3 me-3" style="background-color:#D9D9D9;">
                                        <a class="btn text-black" href="{{ route('user-kelas8') }}">Lihat Data</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="card text-black mb-4" style="background-color:#90B4EC;">
                                    <div class="card-body">Kelas 9</div>
                                    <div class="card d-flex align-items-center justify-content-center mb-2 mt-4 ms-3 me-3" style="background-color:#D9D9D9;">
                                        <a class="btn text-black" href="{{ route('user-kelas9') }}">Lihat Data</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
@endsection