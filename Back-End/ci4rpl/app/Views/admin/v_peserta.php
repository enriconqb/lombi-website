<?= $this->extend('admin/template/base_admin'); ?>

<?= $this->section('title');?>
<title>Data Peserta</title>
<?= $this->endSection();?>


<?= $this->section('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <!-- <div class="row mb-2"> -->
          <div class="col-sm-6">
            <h1 class="m-0"><b>Data Peserta Lomba</b></h1>
      </div> <!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->
    <div class="mt-3">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header bg-secondary">
              <h3 class="card-title">Data Peserta Website </h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>Nama Tim/Sekolah</th>
                    <th>Nama Anggota</th>
                    <th>NIS/NIM</th>
                    <th>Alamat</th>
                    <th>Cek Peserta</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tim Ganjil/Sekolah1</td>
                    <td>Nama Anggota</td>
                    <td>1234567</td>
                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    <td>
                      <a href="#" class="btn btn-success">
                        <span class="far fa-envelope"></span> Cek 
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>Tim Genap/Sekolah1</td>
                    <td>Nama Anggota</td>
                    <td>1234567</td>
                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    <td>
                      <a href="#" class="btn btn-success">
                        <span class="far fa-envelope"></span> Cek 
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>Tim Ganjil/Sekolah2</td>
                    <td>Nama Anggota</td>
                    <td>1234567</td>
                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    <td>
                      <a href="#" class="btn btn-success">
                        <span class="far fa-envelope"></span> Cek 
                      </a>
                    </td>                  
                  </tr>
                  <tr>
                    <td>Tim Ganjil/Sekolah1</td>
                    <td>Nama Anggota</td>
                    <td>1234567</td>
                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    <td>
                      <a href="#" class="btn btn-success">
                        <span class="far fa-envelope"></span> Cek 
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>   
  </div>

<?= $this->endSection();?>