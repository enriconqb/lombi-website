<?= $this->extend('navbar/index'); ?>

<?= $this->section('title'); ?>
<title>Login</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="login py-5 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border">
                    <h3 class="bg-info text-white p-4">Login dulu ya!</h3>
                    <?php 
                        $errors = session()->getFlashdata('errors');
                        if (!empty($errors)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    <?php foreach ($errors as $key => $value) { ?>
                                        <li><?= esc($value) ?></li>
                                    <?php }?>
                                </ul>
                            </div>
                        <?php } ?>
                        <?php
                        if(session()->getFlashdata('pesan')){
                            echo '<div class="alert alert-warning" role="alert">';
                            echo session()->getFlashdata('pesan');
                            echo '</div>';
                        }
                        if(session()->getFlashdata('success')){
                            echo '<div class="alert alert-success" role="alert">';
                            echo session()->getFlashdata('success');
                            echo '</div>';
                        }
                    ?>
                    <form action="<?='auth/login'; ?>" method="post">
                        <fieldset class="p-4">
                            <input type="text" class="border p-3 w-100 my-2" name="username" placeholder="Username" required>
                            <input type="password" class="border p-3 w-100 my-2" placeholder="Password" name="password" required>
                            <button type="submit" class="d-block py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3">Log in</button>
                            <p class="text-center mt-3">Belum memiliki akun? <a class="mt-3 d-inline-block text-primary" href="<?= '/daftar'; ?>">Daftar Disini</a></p>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>