<?= $this->extend('navbar/index'); ?>

<?= $this->section('title'); ?>
<title>Daftar Lomba Final</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="py-5 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-md-11 align-item-center">
                <div class="text-center">
                    <h2>BABAK FINAL</h2>
                    <img src="<?= base_url();  ?>/images/daftarulangfinal/progressbar_final_2.png" class="w-50">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-1 border-top-1 pb-5">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-md-11 align-item-center">
                <div class="border">
                    <form action="<?='kumpulberkasdonefinal'; ?>" method="post">
                        <fieldset class="p-4">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="col-md-2">
                                            <h4><b>Berkas Lomba</b></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td  class="col-md-2 pb-3">
                                            <label for="formControlInput" class="form-label"><b>Upload Surat Keterangan Finalis</b></label>
                                            <input type="text" class="form-control" id="formControlInput" name="link-suratketeranganfinalis" placeholder="Link berkas">                                            
                                            <label for="formControlInput" class="form-label">Upload File Berupa PDF<br>dengan ukuran maksimum 2MB</label>
                                        </td>
                                        <td  class="col-md-2 pb-3">
                                            <label for="formControlInput" class="form-label"><b>Upload Karya</b></label>
                                            <input type="text" class="form-control" id="formControlInput" name="link-karya" placeholder="Link berkas">                                            
                                            <label for="formControlInput" class="form-label">Upload File Berupa PDF atau ZIP (jika file > 1)<br>dengan ukuran maksimum 2MB</label>
                                        </td>
                                        <td  class="col-md-2 pb-3">
                                            <label for="formControlInput" class="form-label"><b>Upload Surat Keterangan Orisinalitas Karya</b></label>
                                            <input type="text" class="form-control" id="formControlInput" name="link-suratketeranganfinalis" placeholder="Link berkas">                                            
                                            <label for="formControlInput" class="form-label">Upload File Berupa PDF<br>dengan ukuran maksimum 2MB</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-2">
                                            <h4><b>Berkas Tim</b></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td  class="col-md-2 pb-3">
                                            <label for="formControlInput" class="form-label"><b>Upload Surat Kartu Pelajar / KTM Ketua</b></label>
                                            <input type="text" class="form-control" id="formControlInput" name="link-ktmketua" placeholder="Link berkas">                                            
                                            <label for="formControlInput" class="form-label">Upload File Berupa PDF<br>dengan ukuran maksimum 2MB</label>
                                        </td>
                                        <td  class="col-md-2 pb-3">
                                            <label for="formControlInput" class="form-label"><b>Upload Surat Kartu Pelajar / KTM Anggota 1</b></label>
                                            <input type="text" class="form-control" id="formControlInput" name="link-ktmanggota1" placeholder="Link berkas">                                            
                                            <label for="formControlInput" class="form-label">Upload File Berupa PDF<br>dengan ukuran maksimum 2MB</label>
                                        </td>
                                        <td  class="col-md-2 pb-3">
                                            <label for="formControlInput" class="form-label"><b>Upload Surat Kartu Pelajar / KTM Anggota 2</b></label>
                                            <input type="text" class="form-control" id="formControlInput" name="link-ktmanggota2" placeholder="Link berkas">                                            
                                            <label for="formControlInput" class="form-label">Upload File Berupa PDF<br>dengan ukuran maksimum 2MB</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td  class="col-md-2 pb-3">
                                            
                                        </td>
                                        <td  class="col-md-2 pb-3">
                                            <label for="formControlInput" class="form-label"><b>Upload Surat Kartu Pelajar / KTM Anggota 3</b></label>
                                            <input type="text" class="form-control" id="formControlInput" name="link-ktmanggota3" placeholder="Link berkas">                                            
                                            <label for="formControlInput" class="form-label">Upload File Berupa PDF<br>dengan ukuran maksimum 2MB</label>
                                        </td>
                                        <td  class="col-md-2 pb-3">
                                            <label for="formControlInput" class="form-label"><b>Upload Surat Kartu Pelajar / KTM Anggota 4</b></label>
                                            <input type="text" class="form-control" id="formControlInput" name="link-ktmanggota4" placeholder="Link berkas">                                            
                                            <label for="formControlInput" class="form-label">Upload File Berupa PDF<br>dengan ukuran maksimum 2MB</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-2 ">
                                            <button type="submit" class="d-block py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3 rounded rounded-5">Simpan</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
    

<?= $this->endSection(); ?>