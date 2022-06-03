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
        <!-- <div class="row mb-2"> -->
          <div class="col-sm-6">
            <h1 class="m-0"><b>Data Penilaian Juri</b></h1>
      </div> <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  </div>
 

  <div class="content-wrapper">
    <!-- <div class="row justify-content-center"> -->
      <div class="col-lg-10">
        <div class="card">
     
        <section>
          <!-- <div class="card">
            <div class="card-title">
              <h3>Login</h3>
            </div> -->
            <div class="card-body">
              <div class="card-login">
                <form action="<?php echo base_url('juri/nilai')?>" method="POST">
                    <input type="hidden" name="id_tim" value="<?php echo $tim_detail['id_tim']?>">
                    <tr>
                      <td><label for="user">Nama Tim</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="nama_tim" placeholder="Nama Tim" value="<?php echo $tim_detail['nama_tim']?>" readonly></td>
                    </tr>
                    <tr>
                      <td><label for="link_karya">Karya</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="link_karya" placeholder="Link Karya" value="<?php echo $tim_detail['link_karya']?>" readonly></td>
                    </tr>
                    <tr>
                      <td><label for="tamplate">Template Penilaian Juri</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="link_template_penilaianjuri" placeholder="Tamplate Penilaian Juri" value="<?php echo $juri_detail['link_template_penilaianjuri']?>" readonly></td>
                    </tr>
                    <tr>
                      <td><label for="tamplate">Penilaian Juri</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="link_penilaianjuri" placeholder="Link Penilaian Juri" required></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="skor" placeholder="Skor (1-1000)" required></td>
                    </tr>
                    
                    
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>

                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
  </div>

  
  <div class="row justify-content-center">
    <div class="btn">
      <div class="col-sm-6">
      <table>
        <tr>
          <td>
            <div >
              <button class="btn btn-danger" type="batal" value="Batalt">Batal</button>
            </div>
          </td>

          <td>
            <div>
              <button class="btn btn-info" type="edit" value="Edit">Edit</button>
            </div>
          </td>
    
          <td>
            <div>
              <button class="btn btn-success" type="simpan" value="Simpan">Simpan</button>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </div>
<?= $this->endSection();?>