<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="admin/plugins/daterangepicker/daterangepicker.css">
    <!-- Date picker -->
    <link rel="stylesheet" href="datepicker/css/datepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="admin/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Datepicker -->
    <link rel="stylesheet" href="datepicker/css/datepicker.min.css"> 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <!--<li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>-->
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="signout.php" class="nav-link">
            Sign Out&nbsp; 
            <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="admin/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="profil.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile Admin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/profildesa" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Profile Desa
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Warga Desa
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="kategoribuku.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tag.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Warga</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="buku.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pengelolaan Surat
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="kategoribuku.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Surat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tag.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengajuan Surat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tag.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Arsip Surat</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="blog.php" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Berita Desa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="user.php" class="nav-link">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
                Agenda Desa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="user.php" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Laporan Desa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="ubahpassword.php" class="nav-link">
              <i class="nav-icon fas fa-user-lock"></i>
              <p>
                Ubah Password
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="signout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Sign Out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
 </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> @yield('title')</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">@yield('title')</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> @yield('title')</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @yield('content')
            <!-- /.card-body -->
            <div class="card-footer clearfix">&nbsp;</div>
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; {{ date ('Y') }} <a href="http://vokasi.ub.ac.id">Desa Junrejo</a>.</strong>
    All rights reserved.
  </footer>

</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.js"></script>

<script src="admin/dist/js/global.js"></script>
<!-- CKEditor -->
<script src="ckeditor/ckeditor.js"></script>
<script>
  // Replace the <textarea id="editor1"> with a CKEditor
  // instance, using default configuration.
  CKEDITOR.replace( 'editor1',{filebrowserImageBrowseUrl : 'kcfinder'} );
  CKEDITOR.replace( 'editor2',{filebrowserImageBrowseUrl : 'kcfinder'} );

</script>
<!-- bootstrap datepicker -->
<script src="datepicker/js/bootstrap-datepicker.js"></script>
<script>
  //Date picker
  $('#datepicker-year').datepicker({
		format: "yyyy",
		orientation: "top auto",
    viewMode: "years", 
    minViewMode: "years",
    autoclose: true
  });
</script>
</body>
</html>
