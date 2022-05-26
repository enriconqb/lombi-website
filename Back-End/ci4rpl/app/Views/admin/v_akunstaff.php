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
            <h1 class="m-0"><b>Data Akun Staff Lomba</b></h1>
      </div> <!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->
    <div class="mt-3">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header bg-secondary">
              <div class="d-flex align-items-center">
                <h3 class="card-title">Data Akun Staff Lomba <b><?php echo $nama_lomba?></b></h3>
                <a href="<?php echo base_url('akunstaff/create'); ?>"><button type="button" class="btn btn-success ml-3">Add Akun Staff</button></a>
              </div>
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
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Hak Akses</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $i=0; foreach($tbl_user as $dt){?>
                  <tr>
                    <th scope=row><?php echo$i+=1;?></th>
                    <td><?php echo $dt['username']?></td>
                    <td><?php echo $dt['email']?></td>
                    <td><?php echo $dt['hak_akses']?></td>
                    <td>
                      <a href="<?php echo base_url('akunstaff/edit'); ?><?php echo '/'.$dt['id_user']; ?>"><button type="button" class="btn btn-warning me-3">Edit</button></a>
                      <a href="<?php echo base_url('akunstaff/delete'); ?><?php echo '/'.$dt['id_user']; ?>"><button type="button" class="btn btn-danger me-3">Delete</button></a>
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