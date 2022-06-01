<?= $this->extend('navbar/index'); ?>

<?= $this->section('title'); ?>
<title>Daftar Ulang</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="py-5 border-top-1">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-11 col-md-11 align-item-center">
				<div class="text-center">
					<img src="<?= base_url();  ?>/images/daftardanpayment/tl_final.png" class="w-50">
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
					<form action="<?='/finalis/daftar_ulang/'.$data->id_tim; ?>" method="post">
						<fieldset class="p-4">
							<input type="hidden" name="id_tim" value="<?= $data->id_tim; ?>">
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
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="ketua_nama" placeholder="Nama Ketua" value="<?=$data->ketua_nama?>" readonly>
										</td>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="ketua_nim" placeholder="NIM/NIS Ketua" value="<?=$data->ketua_nim?>" readonly>
										</td>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="link_ktm_ketua" placeholder="Kartu Pelajar/KTM Ketua" value="<?=$data->link_ktm_ketua?>" readonly>
										</td>
									</tr>
									<tr>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="norek" placeholder="Nomor Rekening Ketua" value="<?=$data->norek?>" readonly>
										</td>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="jenisbank" placeholder="Bank" value="<?=$data->jenisbank?>"readonly>
										</td>
									</tr>
									<tr>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="anggota1_nama" placeholder="Nama Anggota 1" value="<?=$data->anggota1_nama?>"readonly>
										</td>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="anggota1_nim" placeholder="NIM/NIS Anggota1" value="<?=$data->anggota1_nim?>"readonly>
										</td>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="link_ktm_anggota1" placeholder="Link KTM / Kartu Pelajar Anggota 1" value="<?=$data->link_ktm_anggota1?>">
										</td>
									</tr>
									<tr>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="anggota2_nama" placeholder="Nama Anggota 2" value="<?=$data->anggota2_nama?>"readonly>
										</td>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="anggota2_nim" placeholder="NIM/NIS Anggota 2" value="<?=$data->anggota2_nim?>"readonly>
										</td>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="link_ktm_anggota2" placeholder="Link KTM / Kartu Pelajar Anggota 2" value="<?=$data->link_ktm_anggota2?>">
										</td>
									</tr>
									<tr>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="anggota3_nama" placeholder="Nama Anggota 3" value="<?=$data->anggota3_nama?>"readonly>
										</td>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="anggota3_nim" placeholder="NIM/NIS Anggota 3" value="<?=$data->anggota3_nim?>"readonly>
										</td>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="link_ktm_anggota3" placeholder="Link KTM / Kartu Pelajar Anggota 3" value="<?=$data->link_ktm_anggota3?>">
										</td>
									</tr>
									<tr>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="anggota4_nama" placeholder="Nama Anggota 4" value="<?=$data->anggota4_nama?>"readonly>
										</td>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="anggota4_nim" placeholder="NIM/NIS Anggota 4" value="<?=$data->anggota4_nim?>">
										</td>
										<td class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="link_ktm_anggota4" placeholder="Link KTM / Kartu Pelajar Anggota 4" value="<?=$data->link_ktm_anggota4?>">
										</td>
									</tr>
									<tr>
										<td colspan="3" class="col-md-2">
											<input type="text" class="border p-3 w-100 my-2" name="link_suratfinalis" placeholder="Link Capture Bukti Finalis" value="<?=$data->link_suratfinalis?>">
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