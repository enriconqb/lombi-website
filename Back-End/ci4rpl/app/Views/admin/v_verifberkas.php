<?= $this->extend('admin/template/base_admin'); ?>

<?= $this->section('title');?>
<title>Verifikasi Berkas</title>
<?= $this->endSection();?>


<?= $this->section('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <!-- <div class="row mb-2"> -->
          <div class="col-sm-6">
            <h1 class="m-0"><b>Data Kelengkapan Berkas</b></h1>
      </div> <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="mt-3">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header bg-secondary">
              <h3 class="card-title">Data Kelengkapan Berkas</h3>

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
                    <th>Status Kelengkapan </th>
                    <th>Status Berkas</th>
                    <th>Status Final</th>
                    <th>Lihat Berkas</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  $i=0; foreach($tbl_berkas as $dt){?>
                  <tr>
                    <td><?php echo $dt['nama_tim']?></td>
                    <td><?php echo $dt['status_kelengkapanberkas']?></td>
                    <td>
                      <?php if ($dt['status_kelengkapanberkas']==='Belum Diperiksa')
                      {?>
                        <button class="btn btn-danger">Belum</button>
                      <?php 
                      }else{
                        if($dt['status_kelengkapanberkas']==='Sudah Diperiksa')
                        {?>
                          <button class="btn btn-success">Sudah</button>
                        <?php
                        }else{?>
                          <button class="btn btn-warning">Kurang</button>
                        <?php
                        }
                      }?>
                    </td>
                    <td>
                      <?php if ($dt['status_final']==='ya')
                      {?>
                        <button class="btn btn-success">Final</button>
                      <?php 
                      }else{?>
                        <button class="btn btn-outline-danger">Tidak</button>
                      <?php
                      }?>
                    </td>
                    <td>
                      <a href="<?php echo base_url('cekberkas/linkberkas'); ?><?php echo '/'.$dt['id_tim']; ?>"><button type="button" class="btn btn-info me-3">Cek</button></a>
                    </td>
                    <td>
                      <form action="verifberkas/cek/<?php echo $dt['id_tim']?><?php echo '/'.$dt['id_lomba']?>" class="d-flex flex-colomn">
                        <select class="form-control col-6"  name="status_kelengkapanberkas">
                          <option selected="Belum Diperiksa">Pilih Status Berkas</option>
                          <option value="Belum Diperiksa">Belum</option>
                          <option value="Sudah Diperiksa">Sudah</option>
                          <option value="Berkas Kurang">Kurang</option>
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