<?= $this->extend('navbar/index'); ?>

<?= $this->section('title'); ?>
<title>Detail Lomba</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="about-img">
                    <img src="<?='/images/poster_lomba/'.$detail->file_poster;?>" class="img-fluid w-100 rounded" alt="">
                </div>
            </div>
            <div class="col-md-7 pt-5 pt-lg-0">
                <div class="about-content">
                    <h1 class="font-weight-bold"><?= $detail->nama_lomba; ?></h1>
                    <p class="text-justify"><?= $detail->deskripsi_lomba; ?></p>
                    <div class="row text-center pb-1">
                        <div class="col-sm-6">
                            <a href="<?php echo base_url('clomba/daftar/'.$detail->id_lomba)?>" class="btn btn-primary font-weight-bold">Daftarkan dirimu sekarang</a>
                        </div>
                        <div class="col-sm-6">
                            <a href="<?php echo base_url('pengumuman/juara/'.$detail->id_lomba)?>" class="btn btn-warning font-weight-bold text-white">Pengumuman Pemenang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container py-3">
        <div>
            <div class="about-content">
                <h1 class="font-weight-bold">Persyaratan</h1>
                <p class="text-justify"><?= $detail->persyaratan_lomba; ?></p>
                <h1 class="font-weight-bold">Timeline</h1>
                <p class="text-justify">Timeline dari lomba ini adalah sebagai berikut.</p>
                <div class="text-center py-4">
                    <img src="<?= base_url();  ?>/images/pengumumandandetail/timeline.png" style="width:85%;">
                </div>
                <div class="row pb-3">
                    <div class="col-sm-4">
                        <div class="card" style="background-color:#D5E8F4; border-radius:20px;">
                            <div class="card-body text-center">
                                <img src="<?= base_url();  ?>/images/pengumumandandetail/comp.png" style="width:25%;">
                                <h5 class="card-title pt-3">Registrasi</h5>
                                <h5 class="card-title"><?= $detail->tgl_daftar; ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card" style="background-color:#D5E8F4; border-radius:20px;">
                            <div class="card-body text-center">
                                <img src="<?= base_url();  ?>/images/pengumumandandetail/pencil.png" style="width:25%;">
                                <h5 class="card-title pt-3">Pengumpulan Karya</h5>
                                <h5 class="card-title"><?= $detail->tgl_kumpul; ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card" style="background-color:#D5E8F4; border-radius:20px;">
                            <div class="card-body text-center">
                                <img src="<?= base_url();  ?>/images/pengumumandandetail/bintang.png" style="width:25%;">
                                <h5 class="card-title pt-3">Pengumuman Pemenang</h5>
                                <h5 class="card-title"><?= $detail->tgl_pengumuman; ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <h1 class="font-weight-bold">Registrasi</h1>
                <div class="row pb-3 justify-content-center">
                    <div class="col-sm-2">
                        <div class="card" style="background-color:#D5E8F4; border-radius:20px;">
                            <div class="card-body text-center">
                                <h5 class="card-title pt-3">Tim</h5>
                                <h5 class="card-title"><?= $detail->biaya_registrasitim; ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card" style="background-color:#D5E8F4; border-radius:20px;">
                            <div class="card-body text-center">
                                <h5 class="card-title pt-3">Individu</h5>
                                <h5 class="card-title"><?= $detail->biaya_registrasiindividu; ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>