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
                <form action="" method="POST">
                 
                    <tr>
                      <td><label for="user">Nama Tim</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="user" placeholder="Nama Tim" required></td>
                    </tr>
                    <tr>
                      <td><label for="berkas">Berkas Tim</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="berkas" placeholder="Berkas Tim" required></td>
                    </tr>
                    <tr>
                      <td><label for="tamplate">Tamplate Penilaian Juri</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="tamplate" placeholder="Tamplate Penilaian Juri" required></td>
                    </tr>
                    
                    <div class="form-group">
                      <label for="exampleInputFile">Tamplate Penilaian Juri</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
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