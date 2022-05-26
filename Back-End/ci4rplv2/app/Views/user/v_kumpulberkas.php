<?= $this->extend('navbar/index'); ?>

<?= $this->section('title'); ?>
<title>Upload Berkas</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="login py-5 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border">
                    <h3 class="bg-info text-white p-4">Upload Berkas Persyaratan dan Karya</h3>
                    <form action="<?=base_url('kumpulberkas/save/'.$list_lomba['id_tim'].'/'.$list_lomba['id_lomba']) ?>" method="post">
                        <fieldset class="p-4">
                            <input type="text" class="border p-3 w-100 my-2" name="karya" placeholder="Link Karya" required>
                            <input type="text" class="border p-3 w-100 my-2" name="syarat" placeholder="Link Surat Orisinalitas Karya" required>
                            <button type="submit" class="d-block py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3">Simpan</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>