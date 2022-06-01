<?= $this->extend('admin/template/base_admin'); ?>

<?= $this->section('title');?>
<title>Detail Data Peserta</title>
<?= $this->endSection();?>


<?= $this->section('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <!-- <div class="row mb-2"> -->
          <div class="col-sm-6">
            <h1 class="m-0"><b>Detail Data Peserta Lomba</b></h1>
      </div> <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  </div>
 

  <div class="content-wrapper">
    <!-- <div class="row justify-content-center"> -->
      <div class="col-lg-10">
        <div class="card">
        <section>
            <div class="card-body">
              <div class="card-login">
                <table action="<?php echo base_url('peserta/update').'/'.$tim_detail['id_tim']?>" method="POST">
                  <tr>
                    <td><label style="margin-top: 10px;" for="tim">Nama Tim</label></td>
                    <td style="margin-left: 10px; width: 500px; margin-top: 10px;" class="form-control"><?php echo $tim_detail['nama_tim']?></td>
                  </tr>
                  <tr>
                    <td><label style="margin-top: 10px;" for="ketua">Nama Ketua</label></td>
                    <td style="margin-left: 10px; width: 500px; margin-top: 10px;" class="form-control"><?php echo $tim_detail['ketua_nama']?></td>
                  </tr>
                  <tr>
                    <td><label style="margin-top: 10px;" for="nimketua">NIM/NIS Ketua</label></td>
                    <td style="margin-left: 10px; width: 500px; margin-top: 10px;" class="form-control" ><?php echo $tim_detail['ketua_nim']?></td>
                  </tr>
                  <tr>
                    <td><label style="margin-top: 10px;" for="anggota1">Nama Anggota 1</label></td>
                    <td style="margin-left: 10px; width: 500px; margin-top: 10px;" class="form-control" ><?php echo $tim_detail['anggota1_nama']?></td>
                  </tr>
                  <tr>
                    <td><label style="margin-top: 10px;" for="nimanggota1">NIM/NIS Anggota 1</label></td>
                    <td style="margin-left: 10px; width: 500px; margin-top: 10px;" class="form-control" ><?php echo $tim_detail['anggota1_nim']?></td>
                  </tr>
                  <tr>
                    <td><label style="margin-top: 10px;" for="anggota2">Nama Anggota 2</label></td>
                    <td style="margin-left: 10px; width: 500px; margin-top: 10px;" class="form-control" ><?php echo $tim_detail['anggota2_nama']?></td>
                  </tr>
                  <tr>
                    <td><label style="margin-top: 10px;" for="nimanggota2">NIM/NIS Anggota 2</label></td>
                    <td style="margin-left: 10px; width: 500px; margin-top: 10px;" class="form-control" ><?php echo $tim_detail['anggota2_nim']?></td>
                  </tr>
                  <tr>
                    <td><label style="margin-top: 10px;" for="anggota3">Nama Anggota 3</label></td>
                    <td style="margin-left: 10px; width: 500px; margin-top: 10px;" class="form-control" ><?php echo $tim_detail['anggota3_nama']?></td>
                  </tr>
                  <tr>
                    <td><label style="margin-top: 10px;" for="nimanggota3">NIM/NIS Anggota 3</label></td>
                    <td style="margin-left: 10px; width: 500px; margin-top: 10px;" class="form-control" ><?php echo $tim_detail['anggota3_nim']?></td>
                  </tr>
                  <tr>
                    <td><label style="margin-top: 10px;" for="anggota4">Nama Anggota 4</label></td>
                    <td style="margin-left: 10px; width: 500px; margin-top: 10px;" class="form-control" ><?php echo $tim_detail['anggota4_nama']?></td>
                  </tr>
                  <tr>
                    <td><label style="margin-top: 10px;" for="nimanggota4">NIM/NIS Anggota 4</label></td>
                    <td style="margin-left: 10px; width: 500px; margin-top: 10px;" class="form-control" ><?php echo $tim_detail['anggota4_nim']?></td>
                  </tr>
                  <tr>
                    <td><label style="margin-top: 10px;" for="bank">Nama Bank</label></td>
                    <td style="margin-left: 10px; width: 500px; margin-top: 10px;" class="form-control" ><?php echo $tim_detail['jenisbank']?></td>
                  </tr>
                  <tr>
                    <td><label style="margin-top: 10px;" for="norek">No Rekening Ketua</label></td>
                    <td style="margin-left: 10px; width: 500px; margin-top: 10px;" class="form-control" ><?php echo $tim_detail['norek']?></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </section>
      </div>
  </div>
<?= $this->endSection();?>