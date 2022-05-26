<?= $this->extend('admin/template/base_admin'); ?>

<?= $this->section('title');?>
<title>Pembayaran Admin</title>
<?= $this->endSection();?>


<?= $this->section('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <!-- <div class="row mb-2"> -->
          <div class="col-sm-6">
            <h1 class="m-0"><b>Data Pembayaran</b><br><?php echo $nama_lomba?></h1>
      </div> <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="mt-3">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header bg-secondary">
              <h3 class="card-title">Data Peserta Website </h3>

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
                    <th>Nama Tim/Sekolah</th>
                    <th>Tanggal Pembayaran</th>
                    <th>Bukti Pembayaran</th>
                    <th>Status Pembayaran</th>
                    <th>Cek Pembayaran</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $i=0; foreach($tbl_bayar as $dt){?>
                  <tr>
                    <td><?php echo $dt['nama_tim']?></td>
                    <td><?php echo $dt['tgl_dibayar']?></td>
                    <td><?php echo $dt['link_buktibayar']?></td>
                    <td>
                      <?php if ($dt['status_verif_bayar']==='Belum Verifikasi')
                      {?>
                         <p class="text-warning"><b>Belum</b></p>
                      <?php 
                      }else{
                        if($dt['status_verif_bayar']==='Sudah Verifikasi'
                        ){?>
                          <p class="text-success"><b>Valid</b></p>
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
                          <option value="Belum Verifikasi">Belum</option>
                          <option value="Sudah Verifikasi">Sudah</option>
                          <option value="Gagal Verifikasi">Gagal</option>
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