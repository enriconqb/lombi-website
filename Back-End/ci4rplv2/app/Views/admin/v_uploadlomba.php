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
      <span class="brand-text font-weight-light "><b>Admin Panitia Lomba</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>/template/dist/img/dashboard.jpg" class="img-circle " alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo base_url('admin')?>" class="d-block">Dashboard</a>
        </div>
      </div>

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>/template/dist/img/uploadLomba.jpg" class="" alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo base_url('uploadlomba')?>" class="d-block">Upload Lomba</a>
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
          <a href="<?php echo base_url('peserta')?>" class="d-block">Peserta</a>
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
          <a href="<?php echo base_url('pengumuman')?>" class="d-block">Pengumuman</a>
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
        <?php if (session('msg')) : ?>
            <div class="alert alert-info alert-dismissible">
                <?= session('msg') ?>
                <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
            </div>
        <?php endif ?>
        <section>
          <!-- <div class="card">
            <div class="card-title">
              <h3>Login</h3>
            </div> -->
            <div class="card-body">
              <div class="card-login">
                <form action="uploadlomba/add" method="post">
                    <input type="hidden" name="id_user"  value="<?=$user?>" >
                    <tr>
                      <td><label for="nama_lomba" required>Nama Lomba</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="nama_lomba" placeholder="Masukkan Nama Lomba" required></td>
                    </tr>
                    <tr>
                      <td><label for="kategori_lomba">Kategori Lomba</label></td>
                    </tr>
                    <tr>
                      <td>
                        <select class="form-control" aria-label="Small select" name="kategori_lomba" required>
                          <option selected="">Pilih Kategori</option>
                          <option value="1">Sastra</option>
                          <option value="2">Programming</option>
                          <option value="3">Seni</option>
                          <option value="4">Lain-Lain</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td><label for="deskripsi_lomba">Deskripsi Lomba</label></td>
                    </tr>
                    <tr>
                      <td><textarea type="text" class="form-control" rows="3"  name="deskripsi_lomba" placeholder="Masukkan Deskripsi Lomba" required></textarea></td>
                    </tr>
                    <tr>
                      <td><label for="nama_penyelenggara">Penyelenggara</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="nama_penyelenggara" placeholder="Masukkan Penyelenggara Lomba" required></td>
                    </tr>
                    <tr>
                      <td><label for="persyaratan_lomba">Persyaratan</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="persyaratan_lomba" placeholder="Masukkan Persyaratan Lomba" required></td>
                    </tr>
                    <tr>
                      <td><label for="hadiah">Hadiah</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="hadiah" placeholder="Masukkan Hadiah Lomba" required></td>
                    </tr>
                    <tr>
                      <td><label for="biaya_registrasitim">Biaya Registrasi Tim</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="biaya_registrasitim" placeholder="Masukkan Biaya Registrasi Lomba Tim" ></td>
                    </tr>
                    <tr>
                      <td><label for="biaya_registrasiindividu">Biaya Registrasi Individu</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="biaya_registrasiindividu" placeholder="Masukkan Biaya Registrasi Lomba Individu" ></td>
                    </tr>
                    <tr>
                      <td><label for="link_template_penilaianjuri">Link Template Penilaian Juri</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="link_template_penilaianjuri" placeholder="Masukkan Link Template Penilaian Juri" ></td>
                    </tr>
                    <tr>
                      <td><label for="link_booklet">Link Booklet</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="link_booklet" placeholder="Masukkan Link Booklet" ></td>
                    </tr>

                  <table>
                    <tr>
                      <td><label for="tgl_daftar">Tanggal Pendaftaran</label></td>
                    </tr>
                    <tr>
                      <td><input type="date" name="tgl_daftar" required></td>
                    </tr>
                    <tr>
                      <td><label for="tgl_kumpul">Tanggal Pengumpulan</label></td>
                    </tr>
                    <tr>
                      <td><input type="date"  name="tgl_kumpul" required></td>
                    </tr>
                    <tr>
                      <td><label for="tgl_pengumuman">Tanggal Pengumuman</label></td>
                    </tr>
                    <tr>
                      <td><input type="date" name="tgl_pengumuman" required></td>
                    </tr>
                    <tr>
                      <td><label for="">Upload Poster Lomba</label></td>
                    </tr>
                    <tr>
                      <td><input type="file" name="file_poster"></td>
                    </tr>
                  </table>
                  
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
                              <button class="btn btn-success" type="submit" value="Simpan">Simpan</button>
                            </div>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
  </div>

  
</body>
</html>