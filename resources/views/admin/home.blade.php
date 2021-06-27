
<!-- @extends('layouts.user')

@section('content') -->
 <!-- Masthead-->
    <!-- <header class="masthead">
        <div class="container h-100">
           <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">Konveksi, Sablon, dan Printing</h1>
                    <hr class="divider my-4" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5">Sejak 2019</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ route('admin.create') }}">Masukkan Pesanan</a>
                </div>
            </div>
        </div>
    </header>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-right my-2">
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Jenis</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>No_Handphone</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($admins as $admin)
        <tr>
            <th>{{ $admin->id}}</th>
            <th>{{ $admin->jenis}}</th>
            <th>{{ $admin->jumlah}}</th>
            <th>{{ $admin->harga}}</th>
            <th>{{ $admin->no_handphone}}</th>
            <th>
            <form action="{{route('admin.destroy', $admin->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('admin.show', $admin->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('admin.edit', $admin->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </th>
        </tr>
        @endforeach
    </table>
    <div class="d-flex">
        {{ $admins->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img src="https://images.vexels.com/media/users/3/142650/isolated/preview/b5ed9ea56bb89c914775592b2818e517-bars-d-letters-logo-by-vexels.png" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
        <a href="{{ url('/') }}" class="nav-link">Home</a>
        <a class="nav-link align='right'" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
    </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Designer Clothes</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="input-group" data-widget="sidebar-search">
      
      <span class="brand-text font-weight-light brand-link">DASHBOARD ADMIN</span>
   
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <a href="{{ route('admin.create') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Input Pesanan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <a href="{{ route('admin.index') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
</ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    </header>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-right my-2">
            </div>
        </div>
    </div>

    
    <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2" >
                <h2 align='center'>DATA TRANSAKSI</h2>
            </div>
                <form class="float-right form-inline" method="get" action="{{ route('search1') }}">
                    <div class="form-group">
                        <input type="text" name="search1" class="form-control" id="search1" aria-describedby="search1" placeholder="Masukkan ID">
                    </div>
                    <button type="submit" class="btn btn-primary mx-2">Cari</button>
                    <a href="{{ route('admin.index') }}">
                        <button type="button" class="btn btn-danger">Reset</button>
                     </a>
                </form>
        </div><br><br>


       @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Jenis</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>No_Handphone</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($admins as $admin)
        <tr>
            <th>{{ $admin->id}}</th>
            <th>{{ $admin->jenis}}</th>
            <th>{{ $admin->jumlah}}</th>
            <th>{{ $admin->harga}}</th>
            <th>{{ $admin->no_handphone}}</th>
            <th>
            <form action="{{route('admin.destroy', $admin->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('admin.show', $admin->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('admin.edit', $admin->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </th>
        </tr>
        @endforeach
    </table>
    <div class="d-flex">
        {{ $admins->links('pagination::bootstrap-4') }}
    </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>

