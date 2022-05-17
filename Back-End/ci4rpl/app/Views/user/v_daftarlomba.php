<?= $this->extend('navbar/index'); ?>

<?= $this->section('title'); ?>
<title>Daftar Lomba</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="py-5 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-md-11 align-item-center">
                <div class="text-center">
                    <img src="<?= base_url();  ?>/images/daftardanpayment/progress_bar_1.png" class="w-75">
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
                    <form action="<?='daftarlomba/payment'; ?>" method="post">
                        <fieldset class="p-4">
                            <table>
                                <tbody>
                                    <tr>
                                        <td colspan="3" class="col-md-2">
                                            <input type="text" class="border p-3 w-100 my-2" name="namatim" placeholder="Nama Tim">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="col-md-2">
                                            <input type="text" class="border p-3 w-100 my-2" name="jenislomba" placeholder="Jenis Lomba">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-2">
                                            <input type="text" class="border p-3 w-100 my-2" name="namaketua" placeholder="Nama Ketua">
                                        </td>
                                        <td class="col-md-2">
                                            <input type="text" class="border p-3 w-100 my-2" name="nimketua" placeholder="NIM/NIS Ketua">
                                        </td>
                                        <td class="col-md-2">
                                            <input type="text" class="border p-3 w-100 my-2" name="ktmketua" placeholder="Kartu Pelajar/KTM Ketua">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-2">
                                            <input type="text" class="border p-3 w-100 my-2" name="norek" placeholder="Nomor Rekening Ketua">
                                        </td>
                                        <td class="col-md-2">
                                            <input type="text" class="border p-3 w-100 my-2" name="bank" placeholder="Bank">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-2">
                                            <input type="text" class="border p-3 w-100 my-2" name="anggota1" placeholder="Nama Anggota 1">
                                        </td>
                                        <td class="col-md-2">
                                            <input type="text" class="border p-3 w-100 my-2" name="nimanggota1" placeholder="NIM/NIS Anggota1">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-2">
                                            <input type="text" class="border p-3 w-100 my-2" name="anggota2" placeholder="Nama Anggota 2">
                                        </td>
                                        <td class="col-md-2">
                                            <input type="text" class="border p-3 w-100 my-2" name="nimanggota2" placeholder="NIM/NIS Anggota 2">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-2">
                                            <input type="text" class="border p-3 w-100 my-2" name="anggota3" placeholder="Nama Anggota 3">
                                        </td>
                                        <td class="col-md-2">
                                            <input type="text" class="border p-3 w-100 my-2" name="nimanggota3" placeholder="NIM/NIS Anggota 3">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-2">
                                            <input type="text" class="border p-3 w-100 my-2" name="anggota4" placeholder="Nama Anggota 4">
                                        </td>
                                        <td class="col-md-2">
                                            <input type="text" class="border p-3 w-100 my-2" name="nimanggota4" placeholder="NIM/NIS Anggota 4">
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