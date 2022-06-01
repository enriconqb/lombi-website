<?= $this->extend('admin/template/base_admin'); ?>

<?= $this->section('title');?>
<title>Dashboard Admin</title>
<?= $this->endSection();?>


<?= $this->section('content'); ?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="col-sm-6">
        <h1 class="m-0"><b>Dashboard</b></h1>
      </div> <!-- /.container-fluid -->
    </div>
  <!-- /.content-header -->

  <div class="mt-3">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header bg-secondary">
            <h3 class="card-title">Tabel Lomba <?php echo $nama_lomba?></h3>

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
                  <th scope="col">No</th>
                  <th scope="col">Nama Lomba</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
              <?php 
              $i=0; foreach($lomba as $dt){?>
                <tr>
                  <th scope=row><?php echo$i+=1;?></th>
                  <td><?php echo $dt['nama_lomba']?></td>
                  <td>
                    <a href="<?php echo base_url('admin/select'); ?><?php echo '/'.$dt['id_lomba']; ?>"><button type="button" class="btn btn-success me-3">Select</button></a>
                    <a href="<?php echo base_url('admin/edit'); ?><?php echo '/'.$dt['id_lomba']; ?>"><button type="button" class="btn btn-warning me-3">Edit</button></a>
                  </td>
                </tr>
              <?php
              }?>
              </tbody>
            </table>
          </div>
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
  </div>   
</div>
<?= $this->endSection();?>