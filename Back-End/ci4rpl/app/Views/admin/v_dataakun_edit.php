<?= $this->extend('admin/template/base_superadmin'); ?>

<?= $this->section('title');?>
<title>Dashboard Edit Akun</title>
<?= $this->endSection();?>


<?= $this->section('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Akun</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <div class="content-wrapper">
    <!-- <div class="row justify-content-center"> -->
      <div class="col-lg-10">
        <?php if(isset($validation)):?>
				<div class="alert alert-danger"><?= $validation->listErrors() ?></div>
				<?php endif;?>
        <div class="card">
        <section>
          <!-- <div class="card">
            <div class="card-title">
              <h3>Login</h3>
            </div> -->
            <div class="card-body">
              <div class="card-login">
                <form action="<?php echo base_url('dataakun/update').'/'.$user_detail['id_user']?>" method="POST">
                    <tr>
                      <td><label for="username">Username</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="username" placeholder="Masukkan Username" value="<?php echo $user_detail['username']?>" readonly ></td>
                    </tr>
                    <tr>
                      <td><label for="email">Email</label></td>
                    </tr>
                    <tr>
                      <td><input type="email" class="form-control" name="email" placeholder="Masukkan Email" value="<?php echo $user_detail['email']?>"  readonly></td>
                    </tr>
                    <tr>
                      <td><label for="password">Password</label></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="password" placeholder="Masukkan Password" value="<?php echo $user_detail['password']?>" required></td>
                    </tr>
                    
                    <div class="form-group">
                      <label for="sel1">Hak Akses</label>
                      <select class="form-control" id="pilih" name="hak_akses">
                        <option <?php if($user_detail['hak_akses'] === 'super_admin'){echo 'selected';} ?>>super_admin</option>
                        <option <?php if($user_detail['hak_akses'] === 'admin-lomba'){echo 'selected';} ?>>admin-lomba</option>
                      </select>
                    </div>
                  </div>
                  <!-- /.card-body -->
  
                  <table>
                    <tr>
                      <td>
                        <div class="d-flex flex-colomn">
                          <button class="btn btn-info" type="submit" value="submit">Submit</button>
                          <a class="btn btn-danger ml-4" type="cancel"  href="<?php echo base_url('dataakun')?>">Cancel</a>
                        </div>
                      </td>
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