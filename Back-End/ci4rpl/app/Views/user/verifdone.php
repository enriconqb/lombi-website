<?= $this->extend('user/template/index'); ?>

<?= $this->section('title'); ?>
<title>Payment</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="py-5 border-top-1 pb-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-md-11 align-item-center">
                <div class="text-center">
                    <img src="<?= base_url();  ?>/images/daftardanpayment/progress_bar_4.png" class="w-75">
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
                    <p class="px-4 pt-4 text-center font-weight-bold">Pembayaran Berhasil!</p>
                    <p class="px-4 text-center">Pembayaran kamu sudah kami konfirmasi, silakan kumpulkan karya terbaik kamu ya! Mohon ingat kembali bahwa jika pengumpulan melewati batas waktu yang telah ditentukan, uang pendaftaran kamu tidak dapat dikembalikan. Jika ada yang ingin ditanyakan lebih lanjut, silakan hubungi kontak berikut:</p>
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
                        <a href="<?='kumpulberkas'; ?>"><button type="submit" class="py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3">Kumbulkan Berkas Lomba</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    

<?= $this->endSection(); ?>