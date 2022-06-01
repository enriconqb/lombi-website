<?= $this->extend('navbar/index'); ?>

<?= $this->section('title'); ?>
<title>Pengumuman</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>FINALIS </h1>
					<h1 class = "text-uppercase"><?= $nama->nama_lomba; ?></h1>					
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<section class="section pt-5">
	<div class="container">
		<div class="text-center">
			<h2 class="text-uppercase">
              ✨ selamat <?= $list_lomba->nama_tim; ?>!! ✨
            </h2>
            <h3 class="text-uppercase">kamu merupakan finalis dari lomba <?= $nama->nama_lomba; ?></h3>
            <h3 class="text-uppercase">dengan perolehan skor sebesar:</h3>
            <h2 class="text-uppercase">
                <?= $list_lomba->skor; ?>
            </h2>
            <br>
            <h3 class="text-uppercase">Jangan lupa untuk melakukan pendaftaran ulang pada link berikut ya!!</h3>
            <a href="<?php echo base_url(); ?>/Finalis/daftar/<?= $list_lomba->id_tim; ?>/<?= $list_lomba->id_lomba; ?>"><button type="button" class="btn btn-success">DAFTAR ULANG</button></a>
		</div>
	</div>
</section>
<?= $this->endSection(); ?>