<?= $this->extend('admin/template/base_juri'); ?>

<?= $this->section('title');?>
<title>Juri</title>
<?= $this->endSection();?>


<?= $this->section('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Penilaian Juri</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Tim</th>
                    <th>Berkas Tim</th>
                    <th>Berkas Penilaian Tim</th>
                    <th>Status Penilaian</th>
                    <th>Edit Penilaian</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Tim Ganjil</td>
                    <td>Ulalala.pdf</td>
                    <td>Nilainya.pdf</td>
                    <td align="center"><button class="btn btn-outline-success">Sudah</button></td>
                    <td>
                      <a href="#" class="btn btn-warning">Cek</a> 
                      <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Tim Genap</td>
                    <td>Ulalala.pdf</td>
                    <td>Nilainya.pdf</td>
                    <td align="center"><button class="btn btn-outline-danger">Belum</button></td>
                    <td>
                      <a href="#" class="btn btn-success">Tambah</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Tim Ganjil</td>
                    <td>Ulalala.pdf</td>
                    <td>Nilainya.pdf</td>
                    <td align="center"><button class="btn btn-outline-success">Sudah</button></td>
                    <td>
                      <a href="#" class="btn btn-warning">Cek</a> 
                      <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Tim Genap</td>
                    <td>Ulalala.pdf</td>
                    <td>Nilainya.pdf</td>
                    <td align="center"><button class="btn btn-outline-danger">Belum</button></td>
                    <td>
                      <a href="#" class="btn btn-success">Tambah</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Tim Ganjil</td>
                    <td>Ulalala.pdf</td>
                    <td>Nilainya.pdf</td>
                    <td align="center"><button class="btn btn-outline-success">Sudah</button></td>
                    <td>
                      <a href="#" class="btn btn-warning">Cek</a> 
                      <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Tim Genap</td>
                    <td>Ulalala.pdf</td>
                    <td>Nilainya.pdf</td>
                    <td align="center"><button class="btn btn-outline-danger">Belum</button></td>
                    <td>
                      <a href="#" class="btn btn-success">Tambah</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Tim Ganjil</td>
                    <td>Ulalala.pdf</td>
                    <td>Nilainya.pdf</td>
                    <td align="center"><button class="btn btn-outline-success">Sudah</button></td>
                    <td>
                      <a href="#" class="btn btn-warning">Cek</a> 
                      <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Tim Genap</td>
                    <td>Ulalala.pdf</td>
                    <td>Nilainya.pdf</td>
                    <td align="center"><button class="btn btn-outline-danger">Belum</button></td>
                    <td>
                      <a href="#" class="btn btn-success">Tambah</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Tim Ganjil</td>
                    <td>Ulalala.pdf</td>
                    <td>Nilainya.pdf</td>
                    <td align="center"><button class="btn btn-outline-success">Sudah</button></td>
                    <td>
                      <a href="#" class="btn btn-warning">Cek</a> 
                      <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Tim Genap</td>
                    <td>Ulalala.pdf</td>
                    <td>Nilainya.pdf</td>
                    <td align="center"><button class="btn btn-outline-danger">Belum</button></td>
                    <td>
                      <a href="#" class="btn btn-success">Tambah</a>
                    </td>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?= $this->endSection();?>