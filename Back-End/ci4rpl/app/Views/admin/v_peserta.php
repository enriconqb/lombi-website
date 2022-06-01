<?= $this->extend('admin/template/base_admin'); ?>

<?= $this->section('title');?>
<title>Data Peserta</title>
<?= $this->endSection();?>


<?= $this->section('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <!-- <div class="row mb-2"> -->
          <div class="col-sm-6">
            <h1 class="m-0"><b>Data Peserta</b></h1>
      </div> <!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->
    <div class="mt-3">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header bg-secondary">
              <h3 class="card-title">Data Peserta <?php echo $nama_lomba?></h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>Nama Tim</th>
                    <th>Instansi</th>
                    <th>Nama Ketua</th>
                    <th>Cek Peserta</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $i=0; foreach($tbl_tim as $dt){?>
                  <tr>
                    <td><?php echo $dt['nama_tim']?></td>
                    <td><?php echo $dt['nama_instansi']?></td>
                    <td><?php echo $dt['ketua_nama']?></td>
                    <td>
                      <a href="<?php echo base_url('peserta/data'); ?><?php echo '/'.$dt['id_tim']; ?>"><button type="button" class="btn btn-warning me-3">Cek</button></a>
                    </td>
                    </tr>
                  <?php
                  }?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>   
  </div>

<?= $this->endSection();?>
