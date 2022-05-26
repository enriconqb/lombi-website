<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun Admin</title>

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
        <a href="<?php echo base_url('home')?>" class="nav-link text-light ">Home</a>
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
      <span class="brand-text font-weight-light "><b>Super Admin</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>/template/dist/img/dashboard.jpg" class="img-circle " alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo base_url('superadmin')?>" class="d-block">Dashboard</a>
        </div>
      </div>

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>/template/dist/img/uploadLomba.jpg" class="" alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo base_url('dataakun')?>" class="d-block">Data Akun</a>
        </div>
      </div>

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>/template/dist/img/pembayaran.jpg" class="" alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo base_url('buatakun')?>" class="d-block">Buat Akun Admin</a>
        </div>
      </div>

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>/template/dist/img/peserta.jpg" class="" alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo base_url('hakakses')?>" class="d-block">Hak Akses</a>
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
            <h1>Buat Akun Admin</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <div class="content-wrapper">
    <!-- <div class="row justify-content-center"> -->
      <div class="col-lg-10">
        <div class="card">
     
        <section>
          <!-- <div class="card">
            <div class="card-title">
              <h3>Login</h3>
            </div> -->
            <div class="card-body">
              <div class="card-login">
                <form action="" method="POST">
                 
                    <tr>
                      <td><label for="user">Username</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="user" placeholder="Masukkan Username Anda " required></td>
                    </tr>
                    <tr>
                      <td><label for="email">Email</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="email" placeholder="Masukkan Email Anda" required></td>
                    </tr>
                    <tr>
                      <td><label for="password">Password</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="password" placeholder="Masukkan Password Anda" required></td>
                    </tr>
                    
                    <div class="form-group">
                      <label for="sel1">Select</label>
                      <select class="form-control" id="pilihJurusan">
                        <option>Super Admin</option>
                        <option>Admin Content</option>
                        <option>Admin Peserta</option>
                        <option>Admin Berkas</option>
                        <option>Admin Keuangan</option>
                      </select>
                    </div>

                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                  </div>
                  <!-- /.card-body -->
  
                  <table>
                    <tr>
                      <td>
                        <div>
                          <button class="btn btn-info" type="submit" value="submit">Submit</button>
                        </div>
                      </td>
                    </tr>
                  </table>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
  </div>

</body>
</html>