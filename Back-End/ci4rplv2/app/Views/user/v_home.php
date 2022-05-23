<?= $this->extend('navbar/index'); ?>

<?= $this->section('title'); ?>
<title>Lombi</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>Lomba-Lomba Festival Mahasiswa & Pelajar Indonesia </h1>
					<h2>Terbuka untuk Seluruh Anak Muda Indonesia</h2>
					<div class="d-flex justify-content-center align-items-center">
						<button type="button" class="btn btn-primary mx-3">Cari lomba</button>
						<p class="align-self-center my-3">atau</p>
						<button type="button" class="btn btn-primary mx-3">Daftarkan lomba kamu</button>
					</div>					
				</div>
				<!-- Advance Search -->
				<div class="advance-search">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-12 col-md-12 align-content-center">
									<form action="home/cari" method="GET">
										<div class="form-row">
											<div class="form-group col-md-7">
												<input type="text" class="form-control my-2 my-lg-1" id="keyword" placeholder="Apa yang kamu cari" name="keyword">
											</div>
											<div class="form-group col-md-3">
												<select class="w-100 form-control mt-lg-1 mt-md-2" name = "kategori">
													<option>Kategori</option>
													<option value="1">Sastra</option>
													<option value="2">Programming</option>
													<option value="3">Seni</option>
												</select>
											</div>
											
											<div class="form-group col-md-2 align-self-center">
												<button type="submit" class="btn btn-primary" value="keyword">Cari</button>
											</div>
										</div>
									</form>
								</div>
							</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<!--===========================================
=            Kategori Slider            =
============================================-->

<section class="popular-deals section bg-white">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Kategori Lomba</h2>
				</div>
			</div>
		</div>
		<!-- Kastegori 1 -->
		<div class="row">
			<div class="d-flex col-sm-12 justify-content-start">
				<div class="category col-sm-12 col-lg-2 d-flex align-items-center justify-content-center">
					<div class="product-item">
						<a href="">
							<img src="images/logo/logo_sastra.png" alt="Card image cap">
						</a>
						<h4 class="text-center"><a href="">Sastra</a></h4>
					</div>
				</div>
				<div class="trending-ads-slide col-sm-12 col-lg-10 align-items-center align-self-center justify-content-start">
					<?php foreach($datasastra as $row): ?>
					<div class="col-sm-12 col-lg-4">
						<div class="product-item bg-light">
							<div class="card">
								<div class="thumb-content">
									<a href="<?php echo base_url('home/detail/'.$row->id_lomba);?>">
										<img class="card-img-top img-fluid" src="<?php echo 'images/poster_lomba/'.$row->file_poster?>" alt="Card image cap">
									</a>
								</div>
								<div class="card-body">
									<h4 class="card-title"><a href="<?php echo base_url('home/detail/'.$row->id_lomba);?>"><?= $row->nama_lomba;?></a></h4>
									<ul class="list-inline product-meta">
										<li class="list-inline-item">
											<a href="#"><i class="fa fa-calendar"></i><?= $row->tgl_daftar.'...';?></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<!-- Kastegori 2 -->
		<div class="row">
			<div class="d-flex col-sm-12 justify-content-start">
				<div class="category col-sm-12 col-lg-2 d-flex align-items-center justify-content-center">
					<div class="product-item">
						<a href="">
							<img src="images/logo/logo_programming.png" alt="Card image cap">
						</a>
						<h4 class="text-center"><a href="">Programming</a></h4>
					</div>
				</div>
				<div class="trending-ads-slide col-sm-12 col-lg-10 align-items-center align-self-center justify-content-start">
				<?php foreach($dataprogramming as $row): ?>
					<div class="col-sm-12 col-lg-4">
						<div class="product-item bg-light">
							<div class="card">
								<div class="thumb-content">
									<a href="<?php echo base_url('home/detail/'.$row->id_lomba);?>">
										<img class="card-img-top img-fluid" src="<?php echo 'images/poster_lomba/'.$row->file_poster?>" alt="Card image cap">
									</a>
								</div>
								<div class="card-body">
									<h4 class="card-title"><a href="<?php echo base_url('home/detail/'.$row->id_lomba);?>"><?= $row->nama_lomba;?></a></h4>
									<ul class="list-inline product-meta">
										<li class="list-inline-item">
											<a href="#"><i class="fa fa-calendar"></i><?= $row->tgl_daftar.'...';?></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<!-- Kastegori 3 -->
		<div class="row">
			<div class="d-flex col-sm-12 justify-content-start">
				<div class="category col-sm-12 col-lg-2 d-flex align-items-center justify-content-center">
					<div class="product-item">
						<a href="<?php base_url('detailLomba')?>">
							<img src="images/logo/logo_seni.png" alt="Card image cap">
						</a>
						<h4 class="text-center"><a href="">Seni</a></h4>
					</div>
				</div>
				<div class="trending-ads-slide col-sm-12 col-lg-10 align-items-center align-self-center justify-content-start">
				<?php foreach($dataseni as $row): ?>
					<div class="col-sm-12 col-lg-4">
						<div class="product-item bg-light">
							<div class="card">
								<div class="thumb-content">
									<a href="<?php echo base_url('home/detail/'.$row->id_lomba);?>">
										<img class="card-img-top img-fluid" src="<?php echo 'images/poster_lomba/'.$row->file_poster?>" alt="Card image cap">
									</a>
								</div>
								<div class="card-body">
									<h4 class="card-title"><a href="<?php echo base_url('home/detail/'.$row->id_lomba);?>"><?= $row->nama_lomba;?></a></h4>
									<ul class="list-inline product-meta">
										<li class="list-inline-item">
											<a href="#"><i class="fa fa-calendar"></i><?= $row->tgl_daftar.'...';?></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection(); ?>