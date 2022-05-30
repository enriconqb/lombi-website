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
                <form action="<?php echo base_url('peserta/update').'/'.$tim_detail['id_tim']?>" method="POST">
                    <tr>
                      <td><label style="margin-top: 10px;" for="tim">Nama Tim</label></td>
                      <td><input style="margin-left: 10px; width: 500px; margin-top: 10px;"  type="text" class="form-control" name="tim" placeholder="Nama Tim" value="<?php echo $tim_detail['nama_tim']?>"></td>
                    </tr>
                    <tr>
                      <td><label style="margin-top: 10px;" for="ketua">Nama Ketua</label></td>
                      <td><input style="margin-left: 10px; width: 500px; margin-top: 10px;" type="text" class="form-control" name="ketua" placeholder="Nama Ketua Lomba" value="<?php echo $tim_detail['ketua_nama']?>"></textarea></td>
                    </tr>
                    <tr>
                      <td><label for="anggota1">Nama Anggota 1</label></td>
                      <td><input style="margin-left: 10px; width: 500px; margin-top: 10px;" type="text" class="form-control" name="anggota1" placeholder="Nama Anggota 1" value="<?php echo $tim_detail['anggota1_nama']?>"></textarea></td>
                    </tr>
                    <tr>
                      <td><label style="margin-top: 10px;" for="anggota2">Nama Anggota 2</label></td>
                      <td><input style="margin-left: 10px; width: 500px; margin-top: 10px;" type="text" class="form-control" name="anggota2" placeholder="Nama Anggota 2" value="<?php echo $tim_detail['anggota2_nama']?>"></textarea></td>
                    </tr>
                    <tr>
                      <td><label style="margin-top: 10px;" for="anggota3">Nama Anggota 3</label></td>
                      <td><input style="margin-left: 10px; width: 500px; margin-top: 10px;" type="text" class="form-control" name="anggota3" placeholder="Nama Anggota 3" value="<?php echo $tim_detail['anggota3_nama']?>"></textarea></td>
                    </tr>
                    <tr>
                      <td><label style="margin-top: 10px;" for="anggota4">Nama Anggota 4</label></td>
                      <td><input style="margin-left: 10px; width: 500px; margin-top: 10px;" type="text" class="form-control" name="anggota4" placeholder="Nama Anggota 4" value="<?php echo $tim_detail['anggota4_nama']?>"></textarea></td>
                    </tr>
                    <tr>
                      <td><label style="margin-top: 10px;" for="nimketua">NIM/NIS Ketua</label></td>
                      <td><input style="margin-left: 10px; width: 500px; margin-top: 10px;" type="text" class="form-control" name="nimketua" placeholder="NIM/NIS Ketua" ></textarea></td>
                    </tr>
                    <tr>
                      <td><label style="margin-top: 10px;" for="nimanggota1">NIM/NIS Anggota 1</label></td>
                      <td><input style="margin-left: 10px; width: 500px; margin-top: 10px;" type="text" class="form-control" name="nimanggota1" placeholder="NIM/NIS Anggota 1" ></textarea></td>
                    </tr>
                    <tr>
                      <td><label style="margin-top: 10px;" for="nimanggota2">NIM/NIS Anggota 2</label></td>
                      <td><input style="margin-left: 10px; width: 500px; margin-top: 10px;" type="text" class="form-control" name="nimanggota2" placeholder="NIM/NIS Anggota 2" ></textarea></td>
                    </tr>
                    <tr>
                      <td><label style="margin-top: 10px;" for="nimanggota3">NIM/NIS Anggota 3</label></td>
                      <td><input style="margin-left: 10px; width: 500px; margin-top: 10px;" type="text" class="form-control" name="nimanggota3" placeholder="NIM/NIS Anggota 3" ></textarea></td>
                    </tr>
                    <tr>
                      <td><label style="margin-top: 10px;" for="nimanggota4">NIM/NIS Anggota 4</label></td>
                      <td><input style="margin-left: 10px; width: 500px; margin-top: 10px;" type="text" class="form-control" name="nimanggota4" placeholder="NIM/NIS Anggota 4" ></textarea></td>
                    </tr>
                    <tr>
                      <td><label style="margin-top: 10px;" for="bank">Nama Bank</label></td>
                      <td><input style="margin-left: 10px; width: 500px; margin-top: 10px;" type="text" class="form-control" name="bank" placeholder="Nama Bank" ></textarea></td>
                    </tr>
                    <tr>
                      <td><label style="margin-top: 10px;" for="norek">No Rekening Ketua</label></td>
                      <td><input style="margin-left: 10px; width: 500px; margin-top: 10px;" type="text" class="form-control" name="norek" placeholder="No Rekening Ketua" ></textarea></td>
                    </tr>

                  </table>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
  </div>
<?= $this->endSection();?>