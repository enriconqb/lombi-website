<?= $this->extend('admin/template/base_admin'); ?>

<?= $this->section('title');?>
<title>Dashboard Admin</title>
<?= $this->endSection();?>


<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
        <div class="col-sm-6">
          <h1 class="m-0"><b>Dashboard</b></h1>
        </div> <!-- /.container-fluid -->
    </div>
  </div>

    <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h2>Upload Lomba</h2>

              <p>Admin Panitia Lomba</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h2>Pembayaran</h2>

              <p>Admin Keuangan</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h2>Peserta</h2>

              <p>Admin Peserta</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h2>Verifikasi Berkas</h2>

              <p>Admin Verifikasi Berkas</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h2>Pengumuman</h2>

                <p>Admin Panitia Lomba</p>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <h1>Tabel Lomba</h1>
        </div>
        <div class="col-lg-3">
          <h1><?php echo $nama_lomba?></h1>
        </div>
      </div>
      <div class="row">
        <table class="table table-hover border border-5 col-lg-6">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Lomba</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
          if ($lomba !== NULL){ 
          $i=0; foreach($lomba as $dt){?>
            <tr>
              <th scope=row><?php echo$i+=1;?></th>
              <td><?php echo $dt['nama_lomba']?></td>
              <td>
                <a href="<?php echo base_url('admin/select'); ?><?php echo '/'.$dt['id_lomba']; ?>"><button type="button" class="btn btn-success me-3">Select</button></a>
                <a href="#"><button type="button" class="btn btn-warning me-3">Edit</button></a>
                <a href="<?php echo base_url('admin/delete'); ?><?php echo '/'.$dt['id_lomba']; ?>"><button type="button" class="btn btn-danger me-3">Delete</button></a>
              </td>
            </tr>
          <?php
          }} else { ?>
          <tr>
            <td colspan=3>
              <h2>Kamu tidak memiliki lomba apapun</h2>
            </td>
          </tr>
          <?php  
          }?>
          </tbody>
        </table>
      </div>
      <!-- /.row -->
    </div>
  </section>
    <!-- /.content -->
</div>
<?= $this->endSection();?>