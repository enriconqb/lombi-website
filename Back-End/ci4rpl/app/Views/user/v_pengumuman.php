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
					<h1>PEMENANG </h1>
					<h1 class="text-uppercase">LOMBA <?= $nama->nama_lomba; ?> </h1>					
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<section class="section pt-5">
	<div class="container">
		<div class="text-center">
			<img src="<?= base_url();  ?>/images/pengumumandandetail/gold.png" alt="" style="width:9%;">
			<div class="winner-row">
				<div class="winner-item-wrapper">
					<div class="name-section-wrapper" style="margin-top: 39px; background-color: rgb(248, 184, 5);">
						<div class="chips-wrapper" style="background-color: rgb(30, 49, 116);">
							<h3 class="font-quicksand font-weight-600 font-size-20 text-white">✨ Juara 1 ✨</h3>
						</div>
						<h2 class="font-quicksand font-weight-600mt-4 text-uppercase" style="color: rgb(30, 49, 116);"><?= $juara1->nama_tim; ?></h2>
					</div>
				</div>
			</div>
			<div class="winner-row">
				<div class="row justify-content-center">
					<div class="col-sm-5">
						<img src="<?= base_url();  ?>/images/pengumumandandetail/silver.png" alt="" style="width:20%;">
						<div class="winner-item-wrapper">
							<div class="name-section-wrapper" style="margin-top: 39px; background-color: rgb(248, 184, 5);">
								<div class="chips-wrapper" style="background-color: rgb(30, 49, 116);">
									<h3 class="font-quicksand font-weight-600 font-size-20 text-white">✨ Juara 2 ✨</h3>
								</div>
								<h2 class="font-quicksand font-weight-600 mt-4 text-uppercase" style="color: rgb(30, 49, 116);"><?= $juara2->nama_tim; ?></h2>
							</div>
						</div>
					</div>
					<div class="col-md-5 justify-content-end">
						<img src="<?= base_url();  ?>/images/pengumumandandetail/bronze.png" alt="" style="width:20%;">
						<div class="winner-item-wrapper">
							<div class="name-section-wrapper" style="margin-top: 39px; background-color: rgb(248, 184, 5);">
								<div class="chips-wrapper" style="background-color: rgb(30, 49, 116);">
									<h3 class="font-quicksand font-weight-600 font-size-20 text-white">✨ Juara 3 ✨</h3>
								</div>
								<h2 class="font-quicksand font-weight-600 mt-4 text-uppercase" style="color: rgb(30, 49, 116);"><?= $juara3->nama_tim; ?></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?= $this->endSection(); ?>