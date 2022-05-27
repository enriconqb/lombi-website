<?= $this->extend('admin/template/base_admin'); ?>

<?= $this->section('title');?>
<title>Edit Lomba</title>
<?= $this->endSection();?>


<?= $this->section('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <!-- <div class="row mb-2"> -->
          <div class="col-sm-6">
            <h1 class="m-0"><b>Edit Lomba</b></h1>
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
                <form action="<?php echo base_url('admin/update').'/'.$lomba_detail['id_lomba']?>" method="post">
                    <input type="hidden" name="id_lomba" value="<?php echo $id_lomba?>">
                    <tr>
                      <td><label for="nama_lomba" required>Nama Lomba</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="nama_lomba" placeholder="Masukkan Nama Lomba" value="<?php echo $lomba_detail['nama_lomba']?>" required></td>
                    </tr>
                    <tr>
                      <td><label for="kategori_lomba">Kategori Lomba</label></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                            <select class="form-control" id="pilih" name="kategori_lomba">
                                <option <?php if($lomba_detail['kategori_lomba'] === '1'){echo 'selected';} ?>>Sastra</option>
                                <option <?php if($lomba_detail['kategori_lomba'] === '2'){echo 'selected';} ?>>Programming</option>
                                <option <?php if($lomba_detail['kategori_lomba'] === '3'){echo 'selected';} ?>>Seni</option>
                                <option <?php if($lomba_detail['kategori_lomba'] === '4'){echo 'selected';} ?>>Lain-Lain</option>
                            </select>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><label for="deskripsi_lomba">Deskripsi Lomba</label></td>
                    </tr>
                    <tr>
                      <td><textarea type="text" class="form-control" rows="3"  name="deskripsi_lomba" placeholder="Masukkan Deskripsi Lomba" value="<?php echo $lomba_detail['deskripsi_lomba']?>" required></textarea></td>
                    </tr>
                    <tr>
                      <td><label for="nama_penyelenggara">Penyelenggara</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="nama_penyelenggara" placeholder="Masukkan Penyelenggara Lomba" value="<?php echo $lomba_detail['nama_penyelenggara']?>" required></td>
                    </tr>
                    <tr>
                      <td><label for="persyaratan_lomba">Persyaratan</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="persyaratan_lomba" placeholder="Masukkan Persyaratan Lomba" value="<?php echo $lomba_detail['persyaratan_lomba']?>" required></td>
                    </tr>
                    <tr>
                      <td><label for="hadiah">Hadiah</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="hadiah" placeholder="Masukkan Hadiah Lomba" value="<?php echo $lomba_detail['hadiah']?>" required></td>
                    </tr>
                    <tr>
                      <td><label for="biaya_registrasitim">Biaya Registrasi Tim</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="biaya_registrasitim" placeholder="Masukkan Biaya Registrasi Lomba Tim" value="<?php echo $lomba_detail['biaya_registrasitim']?>"></td>
                    </tr>
                    <tr>
                      <td><label for="biaya_registrasiindividu">Biaya Registrasi Individu</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="biaya_registrasiindividu" placeholder="Masukkan Biaya Registrasi Lomba Individu" value="<?php echo $lomba_detail['biaya_registrasiindividu']?>"></td>
                    </tr>
                    <tr>
                      <td><label for="link_template_penilaianjuri">Link Template Penilaian Juri</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="link_template_penilaianjuri" placeholder="Masukkan Link Template Penilaian Juri" value="<?php echo $lomba_detail['link_template_penilaianjuri']?>"></td>
                    </tr>
                    <tr>
                      <td><label for="link_booklet">Link Booklet</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="link_booklet" placeholder="Masukkan Link Booklet" value="<?php echo $lomba_detail['link_booklet']?>" ></td>
                    </tr>

                  <table>
                    <tr>
                      <td><label for="tgl_daftar">Tanggal Pendaftaran</label></td>
                    </tr>
                    <tr>
                      <td><input type="date" name="tgl_daftar" value="<?php echo $lomba_detail['tgl_daftar']?>" required></td>
                    </tr>
                    <tr>
                      <td><label for="tgl_kumpul">Tanggal Pengumpulan</label></td>
                    </tr>
                    <tr>
                      <td><input type="date"  name="tgl_kumpul" value="<?php echo $lomba_detail['tgl_kumpul']?>" required></td>
                    </tr>
                    <tr>
                      <td><label for="tgl_pengumuman">Tanggal Pengumuman</label></td>
                    </tr>
                    <tr>
                      <td><input type="date" name="tgl_pengumuman" value="<?php echo $lomba_detail['tgl_pengumuman']?>" required></td>
                    </tr>
                    <tr>
                      <td><label for="">Upload Poster Lomba</label></td>
                    </tr>
                    <tr>
                      <td><input type="file" name="file_poster" value="<?php echo $lomba_detail['file_poster']?>"></td>
                    </tr>
                  </table>
                  
                  <div class="row justify-content-center">
                    <div class="btn">
                      <div class="col-sm-6">
                      <table>
                        <tr>
                            <td>
                                <div class="d-flex flex-colomn">
                                <button class="btn btn-info" type="submit" value="submit">Submit</button>
                                <a class="btn btn-danger ml-4" type="cancel"  href="<?php echo base_url('akunstaff')?>">Cancel</a>
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