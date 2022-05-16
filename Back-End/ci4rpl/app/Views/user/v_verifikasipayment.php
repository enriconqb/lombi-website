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
                    <img src="<?= base_url();  ?>/images/daftardanpayment/progress_bar_3.png" class="w-75">
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
                    <p class="px-4 pt-4 text-center">Terima kasih telah melakukan pendaftaran lomba pada aplikasi kami. Konfirmasi pembayaran anda akan kami proses paling lama 2x24 jam kerja. Jika dalam jangka waktu tersebut belum ada perbaruan informasi, silakan hubungi kami melalui:</p>
                    <table>
                        <tr>
                            <td class="pl-4 py-1">
                                <img src="<?= base_url();  ?>/images/daftardanpayment/logo_telpon.png" class="w-75">
                            </td>
                            <td> 021-123123123</td>
                        </tr>
                        <tr>
                            <td class="pl-4 py-2">
                                <img src="<?= base_url();  ?>/images/daftardanpayment/logo_wa.png" class="w-75">
                            </td>
                            <td> 081234567890</td>
                        </tr>
                        <tr>
                            <td class="pl-4 py-1">
                                <img src="<?= base_url();  ?>/images/daftardanpayment/logo_mail.png" class="w-75">
                            </td>
                            <td> lombahehe@example.com</td>
                        </tr>
                    </table>
                    <div class="text-center py-3">
                        <a href="<?='/home'; ?>"><button type="submit" class="py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3">Kembali ke Beranda</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    

<?= $this->endSection(); ?>