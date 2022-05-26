<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Keuangan</title>

     <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-danger navbar-light" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link text-light ">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search text-light"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search "></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
          
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell text-light"></i>
          <span class="badge badge-warning navbar-badge"></span>
        </a>
      </li>    
    </ul>
  </nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link bg-danger text-center">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light "><b>Admin Panitia Lomba</b></span>
    </a>

    <!-- Sidebar -->
    <!-- <div class="sidebar"> -->
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-0 pb-5 mb-3 d-flex bg-warning ">
        <div class="image">
          <img src="<?= base_url() ?>/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block text-light"><b> Alexander Pierce </b></a>
        </div>
      </div>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>/template/dist/img/dashboard.jpg" class="img-circle " alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Dashboard</a>
        </div>
      </div>

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>/template/dist/img/uploadLomba.jpg" class="" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Upload Lomba</a>
        </div>
      </div>

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>/template/dist/img/pembayaran.jpg" class="" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Pembayaran</a>
        </div>
      </div>

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>/template/dist/img/peserta.jpg" class="" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Peserta</a>
        </div> 
      </div>
      
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>/template/dist/img/verifBerkas.jpg" class="" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Verifikasi Berkas</a>
        </div> 
      </div>

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>/template/dist/img/pengumuman.jpg" class="" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Pengumuman</a>
        </div>
      </div>
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Penilaian Juri</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Tim</th>
                    <th>Berkas Tim</th>
                    <th>Berkas Penilaian Tim</th>
                    <th>Status Penilaian</th>
                    <th>Edit Penilaian</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Tim Ganjil</td>
                    <td>Ulalala.pdf</td>
                    <td>Nilainya.pdf</td>
                    <td align="center"><button class="btn btn-outline-success">Sudah</button></td>
                    <td>
                      <a href="#" class="btn btn-warning">Cek</a> 
                      <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Tim Genap</td>
                    <td>Ulalala.pdf</td>
                    <td>Nilainya.pdf</td>
                    <td align="center"><button class="btn btn-outline-danger">Belum</button></td>
                    <td>
                      <a href="#" class="btn btn-success">Tambah</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Tim Ganjil</td>
                    <td>Ulalala.pdf</td>
                    <td>Nilainya.pdf</td>
                    <td align="center"><button class="btn btn-outline-success">Sudah</button></td>
                    <td>
                      <a href="#" class="btn btn-warning">Cek</a> 
                      <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Tim Genap</td>
                    <td>Ulalala.pdf</td>
                    <td>Nilainya.pdf</td>
                    <td align="center"><button class="btn btn-outline-danger">Belum</button></td>
                    <td>
                      <a href="#" class="btn btn-success">Tambah</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Tim Ganjil</td>
                    <td>Ulalala.pdf</td>
                    <td>Nilainya.pdf</td>
                    <td align="center"><button class="btn btn-outline-success">Sudah</button></td>
                    <td>
                      <a href="#" class="btn btn-warning">Cek</a> 
                      <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Tim Genap</td>
                    <td>Ulalala.pdf</td>
                    <td>Nilainya.pdf</td>
                    <td align="center"><button class="btn btn-outline-danger">Belum</button></td>
                    <td>
                      <a href="#" class="btn btn-success">Tambah</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Tim Ganjil</td>
                    <td>Ulalala.pdf</td>
                    <td>Nilainya.pdf</td>
                    <td align="center"><button class="btn btn-outline-success">Sudah</button></td>
                    <td>
                      <a href="#" class="btn btn-warning">Cek</a> 
                      <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Tim Genap</td>
                    <td>Ulalala.pdf</td>
                    <td>Nilainya.pdf</td>
                    <td align="center"><button class="btn btn-outline-danger">Belum</button></td>
                    <td>
                      <a href="#" class="btn btn-success">Tambah</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Tim Ganjil</td>
                    <td>Ulalala.pdf</td>
                    <td>Nilainya.pdf</td>
                    <td align="center"><button class="btn btn-outline-success">Sudah</button></td>
                    <td>
                      <a href="#" class="btn btn-warning">Cek</a> 
                      <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Tim Genap</td>
                    <td>Ulalala.pdf</td>
                    <td>Nilainya.pdf</td>
                    <td align="center"><button class="btn btn-outline-danger">Belum</button></td>
                    <td>
                      <a href="#" class="btn btn-success">Tambah</a>
                    </td>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
</body>
</html>