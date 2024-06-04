@extends('layout.main')
@section('content')
<div class="container" style="margin-top: 50px;">
    <div class="card-body">
        <div class="container-fluid">
          <h5 class="mt-5 btn-link text-black font">
            <a href="{{ route('kelas') }}" class="mt-5 btn-link text-black fw-bold">
              <i class="fa-solid fa-arrow-left"></i>
              Data Siswa 
            </a>
          </h5>
        </div>
    <div class="table-responsive">
        <table class="table table-sm table-hover table-bordered border-dark">
            <thead>
                <tr class="border-dark">
                    <th class="border-dark text-center align-middle" rowspan="2">#</th>
                    <th class="border-dark text-center align-middle" rowspan="2" style="min-width: 200px">Nama Siswa</th>
                    <th class="border-dark text-center align-middle" rowspan="2">NIS</th>
                    <th class="border-dark text-center align-middle" rowspan="2">Laki-laki /<br>Perempuan</th>
                    <th class="border-dark text-center align-middle" colspan="31">Tanggal</th>
                    <th class="border-dark text-center align-middle" colspan="4">Jumlah</th>
                    <!-- tanggal -->
                    <tr class="bg-secondary">
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Senin 1 April 2024">
                        <a href="" class="text-white">1</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Rabu 2 April 2024">
                        <a href="" class="text-white">2</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Rabu 3 April 2024">
                        <a href="" class="text-white">3</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Kamis 4 April 2024">
                        <a href="" class="text-white">4</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Jum'at 5 April 2024">
                        <a href="" class="text-white">5</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Sabtu 6 April 2024">
                        <a href="" class="text-white">6</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Minggu 7 April 2024">
                        <a href="" class="text-white">7</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Senin 8 April 2024">
                        <a href="" class="text-white">8</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Selasa 9 April 2024">
                        <a href="" class="text-white">9</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Rabu 10 April 2024">
                        <a href="" class="text-white">10</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Kamis 11 April 2024">
                        <a href="" class="text-white">11</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Jum'at 12 April 2024">
                        <a href="" class="text-white">12</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Sabtu 13 April 2024">
                        <a href="" class="text-white">13</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Minggu 14 April 2024">
                        <a href="" class="text-white">14</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Senin 15 April 2024">
                        <a href="" class="text-white">15</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Selasa 16 April 2024">
                        <a href="" class="text-white">16</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Rabu 17  April 2024">
                        <a href="" class="text-white">17</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Kamis 18 April 2024">
                        <a href="" class="text-white">18</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Jum'at 19 April 2024">
                        <a href="" class="text-white">19</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Sabtu 20 April 2024">
                        <a href="" class="text-white">20</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Minggu 21 April 2024">
                        <a href="" class="text-white">21</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Senin 22 April 2024">
                        <a href="" class="text-white">22</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Selasa 23 April 2024">
                        <a href="" class="text-white">23</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Rabu 24 April 2024">
                        <a href="" class="text-white">24</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Kamis 25 April 2024">
                        <a href="" class="text-white">25</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Jum'at 26 April 2024">
                        <a href="" class="text-white">26</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Sabtu 27 April 2024">
                        <a href="" class="text-white">27</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Minggu 28 April 2024">
                        <a href="" class="text-white">28</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Senin 29 April 2024">
                        <a href="" class="text-white">29</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Selasa 30 April 2024">
                        <a href="" class="text-white">30</a>
                        <th class="border-dark text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Rabu 31 April 2024">
                        <a href="" class="text-white">31</a>

                        <th class="bg-success border-dark align-middle text-center" style="min-width: 30px">H</th>
                        <th class="bg-primary border-dark align-middle text-center" style="min-width: 30px">S</th>
                        <th class="bg-warning border-dark align-middle text-center" style="min-width: 30px">I</th>
                        <th class="bg-danger border-dark align-middle text-center" style="min-width: 30px">A</th>
                    </tr>
                </tr>
            </thead>
            <tbody>
                <tr class="border-dark">
                    <td class="border-dark">1</td>
                    <td class="border-dark">Maulida Rahma</td>
                    <td class="border-dark">12345</td>
                    <td class="border-dark">Perempuan</td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-warning">
                            I
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-primary">
                            S
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-primary">
                            S
                        </span>
                    </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Sabtu" data-bs-original-title="Libur Hari Sabtu"> </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Minggu" data-bs-original-title="Libur Hari Minggu"> </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-danger">
                            A
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-warning">
                            S
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-warning">
                            I
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Sabtu" data-bs-original-title="Libur Hari Sabtu"> </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Minggu" data-bs-original-title="Libur Hari Minggu"> </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-primary">
                            S
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-warning">
                            I
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-primary">
                            S
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Sabtu" data-bs-original-title="Libur Hari Sabtu"> </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Minggu" data-bs-original-title="Libur Hari Minggu"> </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-primary">
                            S
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-danger">
                            A
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-primary">
                            S
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Sabtu" data-bs-original-title="Libur Hari Sabtu"> </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Minggu" data-bs-original-title="Libur Hari Minggu"> </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-primary">
                            S
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-danger">
                            A
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-primary">
                            
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-warning">
                            
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-danger">
                            
                        </span>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr class="border-dark">
                    <td class="border-dark">2</td>
                    <td class="border-dark">Nazwa Karima</td>
                    <td class="border-dark">09876</td>
                    <td class="border-dark">Perempuan</td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-primary">
                            S
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-danger">
                            A
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-warning">
                            I
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-danger">
                            A
                        </span>
                    </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Sabtu" data-bs-original-title="Libur Hari Sabtu"> </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Minggu" data-bs-original-title="Libur Hari Minggu"> </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-warning">
                            I
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Sabtu" data-bs-original-title="Libur Hari Sabtu"> </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Minggu" data-bs-original-title="Libur Hari Minggu"> </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-primary">
                            S
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-primary">
                            S
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Sabtu" data-bs-original-title="Libur Hari Sabtu"> </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Minggu" data-bs-original-title="Libur Hari Minggu"> </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-primary">
                            S
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-danger">
                            A
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Sabtu" data-bs-original-title="Libur Hari Sabtu"> </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Minggu" data-bs-original-title="Libur Hari Minggu"> </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-warning">
                            I
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-warning">
                            I
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-primary">
                            
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-warning">
                            
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-danger">
                            
                        </span>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr class="border-dark">
                    <td class="border-dark">3</td>
                    <td class="border-dark">Noor Amalia</td>
                    <td class="border-dark">22222</td>
                    <td class="border-dark">Perempuan</td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-warning">
                            I
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-warning">
                            I
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-warning">
                            I
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-primary">
                            S
                        </span>
                    </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Sabtu" data-bs-original-title="Libur Hari Sabtu"> </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Minggu" data-bs-original-title="Libur Hari Minggu"> </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-warning">
                            I
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-primary">
                            S
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Sabtu" data-bs-original-title="Libur Hari Sabtu"> </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Minggu" data-bs-original-title="Libur Hari Minggu"> </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-danger">
                            A
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-warning">
                            I
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-primary">
                            S
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-danger">
                            A
                        </span>
                    </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Sabtu" data-bs-original-title="Libur Hari Sabtu"> </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Minggu" data-bs-original-title="Libur Hari Minggu"> </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-primary">
                            S
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-danger">
                            A
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-primary">
                            S
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Sabtu" data-bs-original-title="Libur Hari Sabtu"> </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Minggu" data-bs-original-title="Libur Hari Minggu"> </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-primary">
                            S
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-warning">
                            I
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-primary">
                            
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-warning">
                            
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-danger">
                            
                        </span>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr class="border-dark">
                    <td class="border-dark">4</td>
                    <td class="border-dark">Fitra Rizka Andila</td>
                    <td class="border-dark">44444</td>
                    <td class="border-dark">Perempuan</td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-danger">
                            A
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-danger">
                            A
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-warning">
                            I
                        </span>
                    </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Sabtu" data-bs-original-title="Libur Hari Sabtu"> </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Minggu" data-bs-original-title="Libur Hari Minggu"> </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-warning">
                            I
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-primary">
                            S
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Sabtu" data-bs-original-title="Libur Hari Sabtu"> </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Minggu" data-bs-original-title="Libur Hari Minggu"> </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-warning">
                            I
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-warning">
                            I
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-danger">
                            A
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Sabtu" data-bs-original-title="Libur Hari Sabtu"> </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Minggu" data-bs-original-title="Libur Hari Minggu"> </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-primary">
                            S
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-warning">
                            I
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-primary">
                            S
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            H
                        </span>
                    </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Sabtu" data-bs-original-title="Libur Hari Sabtu"> </td>
                    <td class="border-dark bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Libur Hari Minggu" data-bs-original-title="Libur Hari Minggu"> </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-danger">
                            A
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-danger">
                            A
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-warning">
                            I
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-success">
                            
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-primary">
                            
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-warning">
                            
                        </span>
                    </td>
                    <td class="border-dark text-center align-middle">
                        <span class="badge bg-danger">
                            
                        </span>
                    </td>
                </tr>
            </tbody>
            
        </table>
    </div>
</div>
</div>
@endsection