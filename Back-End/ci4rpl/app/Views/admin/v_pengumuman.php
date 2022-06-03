<?= $this->extend('admin/template/base_admin'); ?>

<?= $this->section('title');?>
<title>Pengumuman Pemenang</title>
<?= $this->endSection();?>


<?= $this->section('content'); ?>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<!-- <div class="row mb-2"> -->
					<div class="col-sm-6">
						<h1 class="m-0"><b>Pengumuman Juara Lomba <?php echo $nama->nama_lomba?></b></h1>
			</div> <!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->
	</div>
 
	<?php if(isset($juara1)){?>
	<div class="content-wrapper">
		<div class="col-lg-10">
			<div class="card">
					<div class="card-header bg-secondary">
						<h5 class="m-0">Juara 1</h5>
					</div>
					<section>
							<div class="card-body">
									<div class="card-login">
											<form action="" method="POST">
													<table cellpadding="5">
															<tr>
																	<td width="200px"><label for="user">Nama Tim        </label></td>
																	<td width="600px"><input type="text" class="form-control" value="<?php echo $juara1->nama_tim?>" readonly></td>
															</tr>
															<tr>
																	<td width="200px"><label for="user">Link Karya        </label></td>
																	<td width="600px"><input type="text" class="form-control" value="<?php echo $juara1->link_karya?>" readonly></td>
															</tr>
													</table> 
											</form>
									</div>
							</div>
					</section>
			</div>
		</div>

		<div class="col-lg-10">
			<div class="card">
					<div class="card-header bg-secondary">
						<h5 class="m-0">Juara 2</h5>
					</div>
					<section>
							<div class="card-body">
									<div class="card-login">
											<form action="" method="POST">
													<table cellpadding="5">
															<tr>
																	<td width="200px"><label for="user">Nama Tim        </label></td>
																	<td width="600px"><input type="text" class="form-control" value="<?php echo $juara2->nama_tim?>" readonly></td>
															</tr>
															<tr>
																	<td width="200px"><label for="user">Link Karya        </label></td>
																	<td width="600px"><input type="text" class="form-control" value="<?php echo $juara2->link_karya?>" readonly></td>
															</tr>
													</table> 
											</form>
									</div>
							</div>
					</section>
			</div>
		</div>

		<div class="col-lg-10">
			<div class="card">
					<div class="card-header bg-secondary">
						<h5 class="m-0">Juara 3</h5>
					</div>
					<section>
							<div class="card-body">
									<div class="card-login">
											<form action="" method="POST">
													<table cellpadding="5">
															<tr>
																	<td width="200px"><label for="user">Nama Tim        </label></td>
																	<td width="600px"><input type="text" class="form-control" value="<?php echo $juara3->nama_tim?>" readonly></td>
															</tr>
															<tr>
																	<td width="200px"><label for="user">Link Karya        </label></td>
																	<td width="600px"><input type="text" class="form-control" value="<?php echo $juara3->link_karya?>" readonly></td>
															</tr>
													</table> 
											</form>
									</div>
							</div>
					</section>
			</div>
		</div>

		<div class="col-lg-10">
			<a type="button" class="btn btn-success" href="<?php echo base_url('pengumumanadmin/umum')?>">Umumkan Juara</a>
			<a type="button" class="btn btn-danger" href="<?php echo base_url('pengumumanadmin/batal')?>">Batal Juara</a>
		</div>


	</div>
	<?php } else {?>
		<div class="col-lg-10">
			<h1>Belum ada Penilaian Final</h1>
		</div>
	<?php }?>

<?= $this->endSection();?>