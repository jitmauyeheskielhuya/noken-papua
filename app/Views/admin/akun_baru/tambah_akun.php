<?= $this->extend('auth/template'); ?>

<?= $this->section('content'); ?>
<div class="main-wrapper login-body">
  <div class="login-wrapper">
    <div class="container">
      <div class="loginbox">
        <div class="login-left">
          <img class="img-fluid pb-14" src="<?= base_url(); ?>/template1/assets/img/k2.png" alt="Logo">
        </div>
        <div class="login-right">
          <div class="login-right-wrap">
            <h1><?= lang('Auth.register') ?></h1>
            <p class="account-subtitle">Enter details to create your account</p>

            <?= view('Myth\Auth\Views\_message_block') ?>

            <form action="/tambah_akun" method="post" class="user">
              <?= csrf_field() ?>

              <div class="form-group">
                <label>Nama Depan</label>
                <input class="form-control <?php if (session('errors.nama_depan')) : ?>is-invalid<?php endif ?>" required type="text" name="nama_depan" value="<?= old('nama_depan') ?>">
              </div>
              <div class="form-group">
                <label>Nama Belakang</label>
                <input class="form-control <?php if (session('errors.nama_belakang')) : ?>is-invalid<?php endif ?>" required type="text" name="nama_belakang" value="<?= old('nama_belakang') ?>">
              </div>
              <div class="form-group">
                <label>No Hp</label>
                <input class="form-control <?php if (session('errors.no_hp')) : ?>is-invalid<?php endif ?>" type="text" required name="no_hp" value="<?= old('no_hp') ?>">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input class="form-control <?php if (session('errors.alamat')) : ?>is-invalid<?php endif ?>" type="text" required name="alamat" value="<?= old('alamat') ?>">
              </div>
              <div class="form-group">
                <label for="role">Hak Akses/Role</label>
                <select id="role" name="role" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                  <option value="disperindagkop">disperindagkop</option>
                </select>
              </div>
              <div class="form-group">
                <label><?= lang('Auth.email') ?> </label>
                <input class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" type="email" name="email" value="<?= old('email') ?>">
                <!-- <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small> -->
              </div>
              <div class="form-group">
                <label><?= lang('Auth.username') ?> </label>
                <input class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" type="text" name="username" value="<?= old('username') ?>">
              </div>
              <div class=" dont-have"><?= lang('Auth.alreadyRegistered') ?> <a href="<?= url_to('login') ?>"><?= lang('Auth.signIn') ?></a></div>
              <div class="form-group mb-0">
                <button class="btn btn-primary btn-block" type="submit"><?= lang('Auth.register') ?></button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>