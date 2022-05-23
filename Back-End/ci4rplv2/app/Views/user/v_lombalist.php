<?= $this->extend('navbar/index'); ?>

<?= $this->section('title'); ?>
<title>Lombi</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container">
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
					if($dt['status_verif_bayar'] === 'Sudah Verifikasi'){?>
					<a href="<?php echo base_url(); ?>/Clistlomba/verifdone/<?php echo $dt['id_tim'].'/'.$dt['id_lomba']; ?>"><button type="button" class="btn btn-warning me-3">Berkas</button></a>
					<?php
					}else{?>
					<a href="<?php echo base_url(); ?>/Clomba/vpayment/<?php echo $dt['id_tim'].'/'.$dt['id_lomba']; ?>"><button type="button" class="btn btn-danger">Bayar</button></a>
					<?php
					}?>
				</td>
			</tr>
		<?php
		}?>
	  </tbody>
	</table>
</div>

<?= $this->endSection(); ?>