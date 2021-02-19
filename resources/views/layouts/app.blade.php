<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('assets/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <!-- <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form> -->

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <div class="info">
                    <a href="#" class="d-block text-success">{{ Auth::user()->name }}</a>
                </div>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ url('/') }}" class="brand-link">
                <img src="{{ url('/assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><b>PPOB</b></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-header">MENU</li>
                        @hasrole('admin')
                        <li class="nav-item">
                            <a href="{{ route('admin.auth.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-user-check"></i>
                                <p>Data User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../calendar.html" class="nav-link">
                                <i class="nav-icon fas fa-database"></i>
                                <p>Data Penggunaan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../calendar.html" class="nav-link">
                                <i class="nav-icon fas fa-tag"></i>
                                <p>Tarif</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>
                                    Laporan
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="assets/index.html" class="nav-link">
                                        <i class="far fa-file-alt nav-icon"></i>
                                        <p>laporan pengguna</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="assets/index.html" class="nav-link">
                                        <i class="far fa-file-alt nav-icon"></i>
                                        <p>laporan transaksi</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="assets/index.html" class="nav-link">
                                        <i class="far fa-file-alt nav-icon"></i>
                                        <p>laporan tarif</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endhasrole()
                        @hasrole('pelanggan')
                        <li class="nav-item">
                            <a href="../calendar.html" class="nav-link">
                                <i class="nav-icon fas fa-dollar-sign"></i>
                                <p>Tagihan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../calendar.html" class="nav-link">
                                <i class="nav-icon fas fa-sync"></i>
                                <p>Riwayat Transaksi</p>
                            </a>
                        </li>
                        @endhasrole()
                        @hasrole('bank')
                        <li class="nav-item">
                            <a href="../calendar.html" class="nav-link">
                                <i class="nav-icon fas fa-user-check"></i>
                                <p>Validasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../calendar.html" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>Laporan</p>
                            </a>
                        </li>
                        @endhasrole()
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>logout</p>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; <?= date('Y') ?> <a
                    href="https://github.com/kelompok4-ujikom/pembayran-pln">Project-Pembayaran-PLN</a>.</strong> All
            rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ url('/assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- bs-custom-file-input -->
    <script src="{{ url('/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('/assets/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ url('/assets/dist/js/demo.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>