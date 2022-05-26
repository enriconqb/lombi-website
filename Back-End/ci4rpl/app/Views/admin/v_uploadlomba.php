<?= $this->extend('admin/template/base_admin'); ?>

<?= $this->section('title');?>
<title>Upload Lomba</title>
<?= $this->endSection();?>


<?= $this->section('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <!-- <div class="row mb-2"> -->
          <div class="col-sm-6">
            <h1 class="m-0"><b>Upload Lomba</b></h1>
      </div> <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  </div>
 

  <div class="content-wrapper">
    <!-- <div class="row justify-content-center"> -->
      <div class="col-lg-10">
        <div class="card">
          <div class="card-header bg-secondary">
            <h5 class="m-0">Informasi Lomba</h5>
        </div>
        <?php if (session('msg')) : ?>
            <div class="alert alert-info alert-dismissible">
                <?= session('msg') ?>
                <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
            </div>
        <?php endif ?>
        <section>
          <!-- <div class="card">
            <div class="card-title">
              <h3>Login</h3>
            </div> -->
            <div class="card-body">
              <div class="card-login">
                <form action="uploadlomba/add" method="post">
                    <input type="hidden" name="id_user"  value="<?=$user?>" >
                    <tr>
                      <td><label for="nama_lomba" required>Nama Lomba</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="nama_lomba" placeholder="Masukkan Nama Lomba" required></td>
                    </tr>
                    <tr>
                      <td><label for="kategori_lomba">Kategori Lomba</label></td>
                    </tr>
                    <tr>
                      <td>
                        <select class="form-control" aria-label="Small select" name="kategori_lomba" required>
                          <option selected="">Pilih Kategori</option>
                          <option value="1">Sastra</option>
                          <option value="2">Programming</option>
                          <option value="3">Seni</option>
                          <option value="4">Lain-Lain</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td><label for="deskripsi_lomba">Deskripsi Lomba</label></td>
                    </tr>
                    <tr>
                      <td><textarea type="text" class="form-control" rows="3"  name="deskripsi_lomba" placeholder="Masukkan Deskripsi Lomba" required></textarea></td>
                    </tr>
                    <tr>
                      <td><label for="nama_penyelenggara">Penyelenggara</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="nama_penyelenggara" placeholder="Masukkan Penyelenggara Lomba" required></td>
                    </tr>
                    <tr>
                      <td><label for="persyaratan_lomba">Persyaratan</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="persyaratan_lomba" placeholder="Masukkan Persyaratan Lomba" required></td>
                    </tr>
                    <tr>
                      <td><label for="hadiah">Hadiah</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="hadiah" placeholder="Masukkan Hadiah Lomba" required></td>
                    </tr>
                    <tr>
                      <td><label for="biaya_registrasitim">Biaya Registrasi Tim</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="biaya_registrasitim" placeholder="Masukkan Biaya Registrasi Lomba Tim" ></td>
                    </tr>
                    <tr>
                      <td><label for="biaya_registrasiindividu">Biaya Registrasi Individu</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="biaya_registrasiindividu" placeholder="Masukkan Biaya Registrasi Lomba Individu" ></td>
                    </tr>
                    <tr>
                      <td><label for="link_template_penilaianjuri">Link Template Penilaian Juri</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="link_template_penilaianjuri" placeholder="Masukkan Link Template Penilaian Juri" ></td>
                    </tr>
                    <tr>
                      <td><label for="link_booklet">Link Booklet</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="link_booklet" placeholder="Masukkan Link Booklet" ></td>
                    </tr>

                  <table>
                    <tr>
                      <td><label for="tgl_daftar">Tanggal Pendaftaran</label></td>
                    </tr>
                    <tr>
                      <td><input type="date" name="tgl_daftar" required></td>
                    </tr>
                    <tr>
                      <td><label for="tgl_kumpul">Tanggal Pengumpulan</label></td>
                    </tr>
                    <tr>
                      <td><input type="date"  name="tgl_kumpul" required></td>
                    </tr>
                    <tr>
                      <td><label for="tgl_pengumuman">Tanggal Pengumuman</label></td>
                    </tr>
                    <tr>
                      <td><input type="date" name="tgl_pengumuman" required></td>
                    </tr>
                    <tr>
                      <td><label for="">Upload Poster Lomba</label></td>
                    </tr>
                    <tr>
                      <td><input type="file" name="file_poster"></td>
                    </tr>
                  </table>
                  
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
                              <button class="btn btn-success" type="submit" value="Simpan">Simpan</button>
                            </div>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
  </div>

<?= $this->endSection();?>