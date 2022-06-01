<?= $this->extend('admin/template/base_juri'); ?>

<?= $this->section('title');?>
<title>Juri</title>
<?= $this->endSection();?>


<?= $this->section('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="col-sm-6">
          <h1 class="m-0"><b>Data Penilaian Juri</b></h1>
        </div> <!-- /.container-fluid -->
      </div>
    <!-- /.content-header -->

    <div class="mt-3">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header bg-secondary">
              <h3 class="card-title">Data Penilaian</h3>

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
                    <th>Berkas Tim</th>
                    <th>Berkas Penilaian Tim</th>
                    <th>Status Penilaian</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $i=0; foreach($tbl_juri as $dt){?>
                  <tr>
                    <td><?php echo $dt['nama_tim']?></td>
                    <td><?php echo $dt['tgl_dibayar']?></td>
                    <td><?php echo $dt['link_penilaian juri']?></td>
                    <td>
                      <?php if ($dt['status_penilaian_juri']==='belum')
                      {?>
                         <p class="text-warning"><b>Belum</b></p>
                      <?php 
                      }else{
                        if($dt['status_verif_bayar']==='sudah'
                        ){?>
                          <p class="text-success"><b>Sudah</b></p>
                        <?php
                        }else{?>
                          <p class="text-danger"><b>Gagal</b></p>
                        <?php
                        }
                      }?>
                    </td>
                    <td>
                      <form action="pembayaran/cek/<?php echo $dt['id_tim']?>" class="d-flex flex-colomn">
                        <select class="form-control col-6"  name="status_verif_bayar">
                          <option selected="Belum Verifikasi">Pilih Status Pembayaran</option>
                          <option value="Belum">Belum</option>
                          <option value="Sudah">Sudah</option>
                        </select>
                        <input class="btn btn-success" type="submit" value="Cek"></input>
                      </form>
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