<?= $this->extend('navbar/index'); ?>

<?= $this->section('title'); ?>
<title>Payment</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="py-5 border-top-1 pb-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-md-11 align-item-center">
                <div class="text-center">
                    <img src="<?= base_url();  ?>/images/daftardanpayment/progress_bar_2.png" class="w-75">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-1 border-top-1 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border">
                    <p class="pl-4 pt-4">Jumlah yang harus di bayar:</p>
                    <h2 class="pl-4 py-1">Rp. 50,000</h2>
                    <p class="pl-4">Pembayaran dapat dilakukan melalui salah satu rekening berikut:</p>
                    <table>
                        <tr>
                            <td class="pl-4 py-1">
                                <img src="<?= base_url();  ?>/images/daftardanpayment/logo_dana.png" class="w-75">
                            </td>
                            <td> 081234567890 a.n Pacar Raiya</td>
                        </tr>
                        <tr>
                            <td class="pl-4 py-2">
                                <img src="<?= base_url();  ?>/images/daftardanpayment/logo_ovo.png" class="w-75">
                            </td>
                            <td> 081234567890 a.n Pacar Raiya</td>
                        </tr>
                        <tr>
                            <td class="pl-4 py-1">
                                <img src="<?= base_url();  ?>/images/daftardanpayment/logo_gopay.png" class="w-75">
                            </td>
                            <td> 081234567890 a.n Pacar Raiya</td>
                        </tr>
                    </table>
                    
                    <form action="<?='verifpayment'; ?>" method="post">
                        <fieldset class="p-4">
                            <input type="text" class="border p-3 w-100 my-2" name="buktibayar" placeholder="Link Bukti Pembayaran">
                            <button type="submit" class="d-block py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3">Simpan</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
    

<?= $this->endSection(); ?>