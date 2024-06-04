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
        <style>
        body,
        .navbar,
        .sb-sidenav,
        .sb-sidenav-footer,
        .nav-link,
        .nav-item,
        .dropdown-item,
        .dropdown-menu,
        .dropdown-divider,
        .nav-footer,
        .container-fluid,
        .text-muted,
        .small,
        .navbar-dark .navbar-nav .nav-link,
        .navbar-dark .navbar-brand {
            color: #000000; 
        }
        /* CSS untuk membuat ikon berwarna hitam */
        .fas {
            color: #000000 !important;
        }
  </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color:#90B4EC; height:auto; ">
            <!-- Logo -->
            <img src="admin/assets/img/logo-smp2.png" alt="" class="navbar-logo ps-2" style="width:60px; margin-right:10px;">
            <!-- Navbar Brand-->
            <a class="navbar-brand" style="display:flex; align-items:center; font-family:'Outfit', sans-serif; font-size: 16px;" href="index.html">SPENDASESSION/<br>admin</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <!-- Navbar-->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Right navbar links -->
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: #f0f0f0" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw" style="color: #f0f0f0;"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">Settings</a></li>
                            <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="{{ route('logout')}}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </form>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion" id="sidenavAccordion" style="background-color: #90B4EC; ">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href="{{ route('kelas') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-landmark"></i></div>
                                Kelas
                            </a>
                            <a class="nav-link collapsed" href="{{ route('all-studentdata')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data Siswa
                            </a>
                            <a class="nav-link collapsed" href="{{ route('absensi') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Absensi Siswa
                            </a>
                            <a class="nav-link collapsed" href="{{ route('setting') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-gear"></i></div>
                                Pengaturan
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer" style="background-color: #90A4EC;">
                        <div class="small">Logged in as:</div>
                        nama pengguna
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
            <main>
                @yield('content')
            </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
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
