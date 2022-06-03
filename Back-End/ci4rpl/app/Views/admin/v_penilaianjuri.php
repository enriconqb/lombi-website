<?= $this->extend('admin/template/base_admin'); ?>

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
                    <th>Status Penilaian</th>
                    <th>Status Final</th>
                    <th>Juara</th>
                    <th>Lihat Berkas</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $i=0; foreach($tbl_juri as $dt){?>
                  <tr>
                    <td><?php echo $dt['nama_tim']?></td>
                    <td>
                      <?php if ($dt['status_penilaian_juri']==='belum')
                      {?>
                         <p class="text-warning"><b>Belum</b></p>
                      <?php 
                      }else{
                        if($dt['status_penilaian_juri']==='sudah'
                        ){?>
                          <p class="text-success"><b>Sudah</b></p>
                        <?php
                        }else{?>
                          <p class="text-danger"><b>Gagal</b></p>
                        <?php
                        }
                      }?>
                    </td>
                    <td><?php echo $dt['status_final']?></td>
                    <td><?php echo $dt['juara']?></td>
                    <td>
                      <a href="<?php echo base_url('juri/linkberkas'); ?><?php echo '/'.$dt['id_tim'].'/'.$dt['id_lomba']; ?>"><button type="button" class="btn btn-info me-3">Cek</button></a>
                    </td>
                    <td>
                      <div class="d-flex flex-column">
                        <form action="juri/final/<?php echo $dt['id_tim']?><?php echo '/'.$dt['id_lomba']?>" class="d-flex flex-colomn">
                          <select class="form-control col-6"  name="status_final">
                            <option selected="" value="">Pilih Status Final</option>
                            <option value="tidak">Tidak</option>
                            <option value="ya">Ya</option>
                          </select>
                          <input class="btn btn-success" type="submit" value="Cek"></input>
                        </form>
                        <form action="juri/juara/<?php echo $dt['id_tim']?><?php echo '/'.$dt['id_lomba']?>" class="d-flex flex-colomn">
                          <select class="form-control col-6"  name="juara">
                            <option selected value="">Pilih Juara</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="">Tidak Juara</option>

                          </select>
                          <input class="btn btn-success" type="submit" value="Cek"></input>
                        </form>
                      </div>
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