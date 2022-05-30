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
						<h1 class="m-0"><b>Pengumuman</b></h1>
			</div> <!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->
	</div>
 

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
																	<td width="600px"><input type="text" class="form-control" name="user" placeholder="Tim Hore"></td>
															</tr>
															<tr>
																	<td width="200px"><label for="user">Karya Peserta        </label></td>
																	<td><div style="border: 1px solid black; padding: 3px; border-radius: 1px; width: 250px; height: 30px; text-align: center;">Karya Peserta</div></td>
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
																	<td width="600px"><input type="text" class="form-control" name="user" placeholder="Tim Hore"></td>
															</tr>
															<tr>
																	<td width="200px"><label for="user">Karya Peserta        </label></td>
																	<td><div style="border: 1px solid black; padding: 3px; border-radius: 1px; width: 250px; height: 30px; text-align: center;">Karya Peserta</div></td>
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
																	<td width="600px"><input type="text" class="form-control" name="user" placeholder="Tim Hore"></td>
															</tr>
															<tr>
																	<td width="200px"><label for="user">Karya Peserta        </label></td>
																	<td><div style="border: 1px solid black; padding: 3px; border-radius: 1px; width: 250px; height: 30px; text-align: center;">Karya Peserta</div></td>
															</tr>
													</table> 
											</form>
									</div>
							</div>
					</section>
			</div>
		</div>


	</div>

<?= $this->endSection();?>