<?= $this->extend('navbar/index'); ?>

<?= $this->section('title'); ?>
<title>Lombi</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container">
	<?php if (count($list_lomba)>0){ ?>
	<table class="table table-hover">
	  <thead>
		<tr>
		  <th scope="col">No</th>
		  <th scope="col">Nama Lomba</th>
		  <th scope="col">Nama Tim</th>
		  <th scope="col">Status Bayar</th>
		  <th scope="col">Status Berkas</th>
		  <th scope="col">Progress</th>
		</tr>
	  </thead>
	  <tbody>
	  <?php 
		$i=0; foreach($list_lomba as $dt){?>
			<tr>
				<th scope=row><?php echo$i+=1;?></th>
				<td><?php echo $dt['nama_lomba']?></td>
				<td><?php echo $dt['nama_tim']?></td>
				<td><?php echo $dt['status_verif_bayar']?></td>
				<td><?php echo $dt['status_kelengkapanberkas']?></td>
				<td>
					<?php
					if( $dt['status_verif_bayar'] === 'Belum Verifikasi' || $dt['status_verif_bayar'] === 'Gagal Verifikasi'){?>
						<a href="<?php echo base_url(); ?>/Clomba/vpayment/<?php echo $dt['id_tim'].'/'.$dt['id_lomba']; ?>"><button type="button" class="btn btn-danger">Bayar</button></a>
					<?php
					}
					else if($dt['status_verif_bayar'] === 'Sudah Verifikasi' && $dt['status_kelengkapanberkas'] === 'Sudah Diperiksa' && $dt['skor'] !== NULL && $dt['status_final'] === 'ya' && $dt['status_juara']==='sudah'){?>
						<a href="<?php echo base_url(); ?>/pengumuman/juara/<?php echo $dt['id_lomba']; ?>"><button type="button" class="btn btn-success">Pengumuman Juara</button></a>
					<?php
					}
					else if($dt['status_verif_bayar'] === 'Sudah Verifikasi' && $dt['status_kelengkapanberkas'] === 'Belum Diperiksa' && $dt['skor'] !== NULL && $dt['status_final'] === 'ya'){?>
						<a href="<?php echo base_url(); ?>/pengumuman/final/<?php echo $dt['id_tim'].'/'.$dt['id_lomba']; ?>"><button type="button" class="btn btn-warning">Berkas Finalis</button></a>
					<?php
					}
					else if($dt['status_verif_bayar'] === 'Sudah Verifikasi' && $dt['status_kelengkapanberkas'] === 'Sudah Diperiksa' && $dt['skor'] !== NULL && $dt['status_final'] === 'ya'){?>
						<a href="<?php echo base_url(); ?>/pengumuman/final/<?php echo $dt['id_tim'].'/'.$dt['id_lomba']; ?>"><button type="button" class="btn btn-success">Pengumuman Finalis</button></a>
					<?php
					}
					else if($dt['status_verif_bayar'] === 'Sudah Verifikasi' && $dt['status_kelengkapanberkas'] === 'Sudah Diperiksa' && $dt['skor'] !== NULL){?>
						<a href="<?php echo base_url(); ?>/pengumuman/notfinal/<?php echo $dt['id_tim'].'/'.$dt['id_lomba']; ?>"><button type="button" class="btn btn-success">Pengumuman Finalis</button></a>
					<?php
					}
					else if($dt['status_verif_bayar'] === 'Sudah Verifikasi' && $dt['status_kelengkapanberkas'] === 'Sudah Diperiksa' && $dt['skor'] === NULL){?>
						<a href="<?php echo base_url(); ?>/pengumuman/kosong/<?php echo $dt['id_tim'].'/'.$dt['id_lomba']; ?>"><button type="button" class="btn btn-success">Pengumuman Finalis</button></a>
					<?php
					}
					else if($dt['status_verif_bayar'] === 'Sudah Verifikasi'){?>
						<a href="<?php echo base_url(); ?>/kumpulberkas/pengisihan/<?php echo $dt['id_tim'].'/'.$dt['id_lomba']; ?>"><button type="button" class="btn btn-warning">Berkas</button></a>
					<?php
					}
					else if($dt['status_final'] === 'tidak' ){?>
					Tidak masuk final
					<?php } ?>
				</td>
			</tr>
		<?php
		}?>
	  </tbody>
	</table>
	<?php }else{ ?>
		<h3 class = "text-center my-5">Kamu Belum Mendaftar Lomba Apapun</h3>
	<?php } ?>
</div>

<?= $this->endSection(); ?>