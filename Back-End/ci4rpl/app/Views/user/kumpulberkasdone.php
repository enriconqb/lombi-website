<?= $this->extend('user/template/index'); ?>

<?= $this->section('title'); ?>
<title>Upload Berkas</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="py-1 border-top-1 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border">
                    <p class="px-4 pt-4 text-center font-weight-bold">Selesai!</p>
                    <p class="px-4 text-center">Karya kamu berhasil dikumpulkan! Karya kamu akan melalui proses penilaian oleh juri yang berkompeten, tunggu kabar berikutnya ya! Jika ada yang ingin ditanyakan lebih lanjur, silakan hubungi kontak berikut:</p>
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
                        <a href="<?='/tentang'; ?>"><button type="submit" class="py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3">Kembali ke beranda</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    

<?= $this->endSection(); ?>