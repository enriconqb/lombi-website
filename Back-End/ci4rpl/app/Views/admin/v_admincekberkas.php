<?= $this->extend('admin/template/base_admin'); ?>

<?= $this->section('title');?>
<title>Upload Lomba</title>
<?= $this->endSection();?>


<?= $this->section('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <!-- <div class="row mb-2"> -->
          <div class="col-sm-6">
            <h1 class="m-0"><b>Data Kelengkapan Berkas</b></h1>
      </div> <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  </div>
 
  <div class="content-wrapper">
    <!-- <div class="row justify-content-center"> -->
      <div class="col-lg-10">
        <div class="card">
        <section>
            <div class="card-body">
              <div class="card-login">
                <form action="<?php echo base_url('cekberkas/update').'/'.$tim_detail['id_tim']?>" method="POST">
                    <table cellpadding="5">
                        <tr>
                            <td width="200px"><label for="user">Nama Tim        </label></td>
                            <td style="margin-left: 10px; width: 500px; margin-top: 10px;" class="form-control" placeholder="Tim Hore"><?php echo $tim_detail['nama_tim']?></td>
                        </tr>
                        <tr>
                            <td width="200px"><label for="user">Surat Keterangan Finalis        </label></td>
                            <td style="margin-left: 10px; width: 500px; margin-top: 10px;" class="form-control" placeholder="Surat Keterangan Finalis"><?php echo $tim_detail['link_suratfinalis']?></td>
                        </tr>
                        <tr>
                            <td width="200px"><label for="user">Karya Peserta        </label></td>
                            <td style="margin-left: 10px; width: 500px; margin-top: 10px;" class="form-control" placeholder="Karya Peserta"><?php echo $tim_detail['link_karya']?></td>
                        </tr>
                        <tr>
                            <td width="200px"><label for="user">Surat Keterangan Orisinalitas Karya        </label></td>
                            <td style="margin-left: 10px; width: 500px; margin-top: 10px;" class="form-control" placeholder="Surat Keterangan Orisinalitas Karya"><?php echo $tim_detail['link_orisinalitas']?></td>
                        </tr>
                        <tr>
                            <td width="200px"><label for="user">Kartu Pelajar/KTM Ketua        </label></td>
                            <td style="margin-left: 10px; width: 500px; margin-top: 10px;" class="form-control" placeholder="Kartu Pelajar/KTM Ketua"><?php echo $tim_detail['link_ktm_ketua']?></td>
                        </tr>
                        <tr>
                            <td width="200px"><label for="user">Kartu Pelajar/KTM Anggota 1        </label></td>
                            <td style="margin-left: 10px; width: 500px; margin-top: 10px;" class="form-control" placeholder="Kartu Pelajar/KTM Anggota 1"><?php echo $tim_detail['link_ktm_anggota1']?></td>
                        </tr>
                        <tr>
                            <td width="200px"><label for="user">Kartu Pelajar/KTM Anggota 2        </label></td>
                            <td style="margin-left: 10px; width: 500px; margin-top: 10px;" class="form-control" placeholder="Kartu Pelajar/KTM Anggota 2"><?php echo $tim_detail['link_ktm_anggota2']?></td>
                        </tr>
                        <tr>
                            <td width="200px"><label for="user">Kartu Pelajar/KTM Anggota 3        </label></td>
                            <td style="margin-left: 10px; width: 500px; margin-top: 10px;" class="form-control" placeholder="Kartu Pelajar/KTM Anggota 3"><?php echo $tim_detail['link_ktm_anggota3']?></td>
                        </tr>
                        <tr>
                            <td width="200px"><label for="user">Kartu Pelajar/KTM Anggota 4        </label></td>
                            <td style="margin-left: 10px; width: 500px; margin-top: 10px;" class="form-control" placeholder="Kartu Pelajar/KTM Anggota 4"><?php echo $tim_detail['link_ktm_anggota4']?></td>
                        </tr>
                    </table>      
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
  </div>
  <?= $this->endSection();?>