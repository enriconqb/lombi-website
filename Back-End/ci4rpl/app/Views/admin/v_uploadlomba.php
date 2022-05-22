<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Upload Lomba</title>

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
    <a class="brand-link bg-danger text-center">
      <span class="brand-text font-weight-light "><b>Admin Panitia Lomba</b></span>
    </a>

    <!-- Sidebar -->
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
          <a href="<?php echo base_url('pembayaran')?>" class="d-block">Pembayaran</a>
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
          <a href="<?php echo base_url('verifberkas')?>" class="d-block">Verifikasi Berkas</a>
        </div> 
      </div>

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>/template/dist/img/pengumuman.jpg" class="" alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo base_url('pengumumanadmin')?>" class="d-block">Pengumuman</a>
        </div>
      </div>
    </div>
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <!-- <div class="row mb-2"> -->
          <div class="col-sm-6">
            <h1 class="m-0"><b>Upload Lomba</b></h1>
      </div> <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  </div>
 

  <div class="content-wrapper">
    <!-- <div class="row justify-content-center"> -->
      <div class="col-lg-10">
        <div class="card">
          <div class="card-header bg-secondary">
            <h5 class="m-0">Informasi Lomba</h5>
        </div>
        <section>
          <!-- <div class="card">
            <div class="card-title">
              <h3>Login</h3>
            </div> -->
            <div class="card-body">
              <div class="card-login">
                <form action="" method="POST">
                 
                    <tr>
                      <td><label for="user">Nama Lomba</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="user" placeholder="Masukkan Nama Lomba" required></td>
                    </tr>
                    <tr>
                      <td><label for="kategiri">Kategori Lomba</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="kategori" placeholder="Masukkan Kategori Lomba" required></td>
                    </tr>
                    <tr>
                      <td><label for="deskripsi">Deskripsi Lomba</label></td>
                    </tr>
                    <tr>
                      <td><textarea type="text" class="form-control" rows="3"  name="deskripsi" placeholder="Masukkan Deskripsi Lomba" required></textarea></td>
                    </tr>
                    <tr>
                      <td><label for="penyelenggara">Penyelenggara</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="penyelenggara" placeholder="Masukkan Penyelenggara Lomba" required></td>
                    </tr>
                    <tr>
                      <td><label for="persyaratan">Persyaratan</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="persyaratan" placeholder="Masukkan Persyaratan Lomba" required></td>
                    </tr>
                    <tr>
                      <td><label for="hadiah">Hadiah</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="hadiah" placeholder="Masukkan Hadiah Lomba" required></td>
                    </tr>
                    <tr>
                      <td><label for="biaya regist tim">Biaya Registrasi Tim</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="biaya regist tim" placeholder="Masukkan Biaya Registrasi Lomba Tim" required></td>
                    </tr>
                    <tr>
                      <td><label for="biaya regist individu">Biaya Registrasi Individu</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="biaya regist individu" placeholder="Masukkan Biaya Registrasi Lomba Individu" required></td>
                    </tr>

                  <table>
                    <tr>
                      <td><label for="tgl pendaftaran">Tanggal Pendaftaran</label></td>
                    </tr>
                    <tr>
                      <td><input type="date" name="tgl daftar awal"></td>
                      <td><td></td></td>
                      <td><input type="date" name="tgl daftar akhir"></td>
                    </tr>
                    <tr>
                      <td><label for="tgl pengumpulan">Tanggal Pengumpulan</label></td>
                    </tr>
                    <tr>
                      <td><input type="date"  name="tgl pengumpulan awal"></td>
                      <td><td></td></td>
                      <td><input type="date"  name="tgl pengumpulan akhir"></td>
                    </tr>
                    <tr>
                      <td><label for="tgl pengumuman">Tanggal Pengumuman</label></td>
                    </tr>
                    <tr>
                      <td><input type="date" name="tanggal"></td>
                    </tr>
                    <tr>
                      <td><label for="upload">Upload Poster Lomba</label></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><input type="file" value="upload gambar"/></td>
                    </tr>
                    <tr>
                      <td><label for="upload">Upload Booklet Lomba</label></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><input type="file" value="upload gambar"/></td>
                    </tr>
                  </table>
                  
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
  </div>

  
  <div class="row justify-content-center">
    <div class="btn">
      <div class="col-sm-6">
      <table>
        <tr>
          <td>
            <div >
              <button class="btn btn-danger" type="batal" value="Batalt">Batal</button>
            </div>
          </td>

          <td>
            <div>
              <button class="btn btn-info" type="edit" value="Edit">Edit</button>
            </div>
          </td>
    
          <td>
            <div>
              <button class="btn btn-success" type="simpan" value="Simpan">Simpan</button>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </div>
</body>
</html>