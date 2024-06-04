<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed" style="font-family: 'Outfit', sans-serif;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary pt-3" style="background-color: #90B4EC; height: auto; ">
        <div class="container-fluid pb-3">
            <div class="navbar-nav ms-auto">
                <a href="{{route('login')}}" class="btn btn-primary ml-3">LOGIN</a>
            </div>
        </div>
    </nav>
    <div class="home d-flex align-items-center justify-content-center ms-5 mt-5">
        <div class="image d-flex justify-content-center me-5 mt-3"> <!-- Menggunakan flexbox untuk menengahkan gambar -->
            <img src="admin/assets/img/logo-smp2.png" style="width: 45%;" class="navbar-logo ps-2 mt-5">
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="d-flex align-items-center justify-content-center">
                    <h3 class="text-center" style="font-weight:bold;">Absensi SMPN 2 BANJARMASIN</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <div class="d-flex align-items-center justify-content-center">
                    <p class="text-center" style="font-size: 20px;">Selamat Datang di Website Absensi SMPN 2 BANJARMASIN<br>Silahkan untuk masuk menggunakan akun terdaftar</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('admin/js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('admin/assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('admin/assets/demo/chart-bar-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('admin/js/datatables-simple-demo.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>
</body>
</html>
