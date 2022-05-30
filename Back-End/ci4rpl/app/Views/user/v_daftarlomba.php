<?= $this->extend('navbar/index'); ?>

<?= $this->section('title'); ?>
<title>Daftar Lomba</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="py-5 border-top-1">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-11 col-md-11 align-item-center">
				<div class="text-center">
					<img src="<?= base_url();  ?>/images/daftardanpayment/progress_bar_1.png" class="w-75">
				</div>
			</div>
		</div>
	</div>
</section>
<section class="py-1 border-top-1 pb-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-11 col-md-11 align-item-center">
				<div class="border">
					<form action="<?='/clomba/payment/'.$detail->id_lomba?>" method="post">
						<fieldset class="p-4">
							<table>
								<tbody>
									<tr>
										<td colspan="3" class="col-md-2">
											<select class="border w-100 my-2" name="id_lomba">
												<option value="<?=$detail->id_lomba?>"><?= $detail->nama_lomba; ?> - Tim: Rp. <?= $detail->biaya_registrasitim; ?> - Individu: Rp. <?= $detail->biaya_registrasiindividu; ?></option>
											</select>
										</td>
									</tr>
									<tr>
										<input type="hidden" name="id_user" placeholder="Nama Tim" value="<?= $user?>">
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="nama_tim" placeholder="Nama Tim" required>
										</td>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="nama_instansi" placeholder="Nama Instansi" required>
										</td>
										<td class="col-md-2">
											<input type="email" class="border p-3 w-100 my-2" name="emailketua" placeholder="Email Ketua" required>
										</td>
									</tr>
									<tr>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="ketua_nama" placeholder="Nama Ketua" required>
										</td>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="ketua_nim" placeholder="NIM/NIS Ketua" required>
										</td>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="link_ktm_ketua" placeholder="Kartu Pelajar/KTM Ketua" required>
										</td>
									</tr>
									<tr>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="norek" placeholder="Nomor Rekening Ketua" required>
										</td>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="jenisbank" placeholder="Bank" required>
										</td>
									</tr>
									<tr>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="anggota1_nama" placeholder="Nama Anggota 1">
										</td>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="anggota1_nim" placeholder="NIM/NIS Anggota1">
										</td>
									</tr>
									<tr>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="anggota2_nama" placeholder="Nama Anggota 2">
										</td>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="anggota2_nim" placeholder="NIM/NIS Anggota 2">
										</td>
									</tr>
									<tr>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="anggota3_nama" placeholder="Nama Anggota 3">
										</td>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="anggota3_nim" placeholder="NIM/NIS Anggota 3">
										</td>
									</tr>
									<tr>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="anggota4_nama" placeholder="Nama Anggota 4">
										</td>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="anggota4_nim" placeholder="NIM/NIS Anggota 4">
										</td>
									</tr>
									<tr>
										<td class="col-md-2">
											<button type="submit" class="d-block py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3">Simpan</button>
										</td>
									</tr>
								</tbody>
							</table>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
	

<?= $this->endSection(); ?>