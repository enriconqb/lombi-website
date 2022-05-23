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
                    <img src="<?= base_url();  ?>/images/daftarulangfinal/progressbar_final_1.png" class="w-50">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-1 border-top-1 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-md-11 align-item-center">
                <div class="border">
                    <form action="<?='daftarlombafinal/kumpulberkasfinal'; ?>" method="post">
                        <fieldset class="p-4">
                            <table>
                                <tbody>
                                    <tr>
                                        <td  class="col-md-2 pb-3">
                                            <label for="formControlInput" class="form-label">Nama Tim</label>
                                            <input type="text" class="form-control" id="formControlInput" name="namatim" placeholder="Nama tim">                                            
                                        </td>
                                        <td  colspan="2" class="col-md-2 mb-2 pb-3">
                                            <label for="formControlInput" class="form-label">Nama Instansi</label>
                                            <input type="text" class="form-control" id="formControlInput" name="namainstansi" placeholder="Nama instansi">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="col-md-2 mb-2 pb-3">
                                            <label for="formControlInput" class="form-label">Jenis Lomba</label>
                                            <input type="text" class="form-control" name="jenislomba" placeholder="Jenis lomba">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-2 pb-3">
                                            <label for="formControlInput" class="form-label">Nama Ketua</label>
                                            <input type="text" class="form-control" name="namaketua" placeholder="Nama Ketua">
                                        </td>
                                        <td class="col-md-2 pb-3">
                                            <label for="formControlInput" class="form-label">NIM Ketua</label>
                                            <input type="text" class="form-control" name="nimketua" placeholder="NIM/NIS Ketua">
                                        </td>
                                        <td class="col-md-2 pb-3">
                                            <label for="formControlInput" class="form-label">Link KTM Ketua</label>
                                            <input type="text" class="form-control" name="ktmketua" placeholder="Kartu Pelajar/KTM Ketua">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-2 pb-3">
                                            <label for="formControlInput" class="form-label">No. Rekening Ketua</label>
                                            <input type="text" class="form-control" name="norek" placeholder="Nomor Rekening Ketua">
                                        </td>
                                        <td class="col-md-2 pb-3">
                                            <label for="formControlInput" class="form-label">Bank</label>
                                            <input type="text" class="form-control" name="bank" placeholder="Bank">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-2 pb-3">
                                            <label for="formControlInput" class="form-label">Nama Anggota 1</label>
                                            <input type="text" class="form-control" name="anggota1" placeholder="Nama Anggota 1">
                                        </td>
                                        <td class="col-md-2 pb-3">
                                            <label for="formControlInput" class="form-label">NIM/NIS Anggota 1</label>
                                            <input type="text" class="form-control" name="nimanggota1" placeholder="NIM/NIS Anggota1">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-2 pb-3">
                                            <label for="formControlInput" class="form-label">Nama Anggota 2</label>
                                            <input type="text" class="form-control" name="anggota2" placeholder="Nama Anggota 2">
                                        </td>
                                        <td class="col-md-2 pb-3">
                                            <label for="formControlInput" class="form-label">NIM/NIS Anggota 2</label>
                                            <input type="text" class="form-control" name="nimanggota2" placeholder="NIM/NIS Anggota 2">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-2 pb-3">
                                            <label for="formControlInput" class="form-label">Nama Anggota 3</label>
                                            <input type="text" class="form-control" name="anggota3" placeholder="Nama Anggota 3">
                                        </td>
                                        <td class="col-md-2 pb-3">
                                            <label for="formControlInput" class="form-label">NIM/NIS Anggota 3</label>
                                            <input type="text" class="form-control" name="nimanggota3" placeholder="NIM/NIS Anggota 3">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-2 pb-3">
                                            <label for="formControlInput" class="form-label">Nama Anggota 4</label>
                                            <input type="text" class="form-control" name="anggota4" placeholder="Nama Anggota 4">
                                        </td>
                                        <td class="col-md-2 pb-3">
                                            <label for="formControlInput" class="form-label">NIM/NIS Anggota 4</label>
                                            <input type="text" class="form-control" name="nimanggota4" placeholder="NIM/NIS Anggota 4">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-2">
                                            <button type="submit" class="d-block py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3">Simpan</button>
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