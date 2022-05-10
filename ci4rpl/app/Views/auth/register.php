<?= $this->extend('auth/template/index'); ?>

<?= $this->section('title'); ?>
<title>Register</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="login py-5 border-top-1">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-8 align-item-center">
        <div class="border border">
          <h3 class="bg-info text-white p-4">Buat Akun Dulu Yuk!</h3>
          <?= $validate->listErrors(); ?>
          <?= session()->get('pesan'); ?>
          <form action="<?= 'auth/register'; ?>" method="post">
            <fieldset class="p-4">
              <input type="text" class="form-control border p-3 w-100 my-2" name="username" placeholder="Username*" value="<?= old('username') ?>">

              <input type="email" class="form-control border p-3 w-100 my-2"
                                   name="email" placeholder="Email*" value="<?= old('email') ?>">

              <input type="password" name="password" class="border p-3 w-100 my-2 form-control" placeholder="Password*" autocomplete="off">

              <input type="password" name="pass_confirm" class="border p-3 w-100 my-2 form-control" placeholder="Ulangi Password" autocomplete="off">

              <button type="submit" class="d-block py-3 px-4 bg-primary text-white border-0 rounded font-weight-bold">Daftar Akun</button>

              <p class="text-center mt-3">Sudah memiliki akun? <a class="mt-3 d-inline-block text-primary" href="<?= 'auth/login' ?>">Login Disini</a></p>

            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection(); ?>