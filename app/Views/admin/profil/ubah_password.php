<?= $this->extend('template/layout_home'); ?>

<?= $this->Section('page-content'); ?>
<div class="page-wrapper">
  <div class="content container-fluid">
    <h4 class="text-emerald-400 pb-3">Halaman Edit Profil</h4>
    <?php
    if (!empty(session()->getFlashdata('success'))) { ?>
      <div class="col-3 alert alert-success">
        <?= session()->getFlashdata('success'); ?>
      </div>
    <?php } ?>
    <div class="row pt-4 pb-4 rounded-md bg-slate-200">
      <p class="text-lg font-bold pt-3">Edit Profil</p>
      <div class="col">



        <form action="password/<?= user_id() ?>" method="post" class="user">
          <?= csrf_field() ?>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label>Password Lama</label>
                <input class="form-control <?php if (session('errors.password_lama')) : ?>is-invalid<?php endif ?>" required type="password" name="password_lama" value="">
              </div>
              <div class="form-group">
                <label>Password Baru</label>
                <input class="form-control <?php if (session('errors.password_baru')) : ?>is-invalid<?php endif ?>" required type="password" name="password_baru" value="">
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                <label>Konfirm Password</label>
                <input class="form-control <?php if (session('errors.konfirm_password')) : ?>is-invalid<?php endif ?>" type="password" required name="konfirm_password" value="">
              </div>
            </div>
          </div>

          <div class="dont-have"><?= lang('Auth.alreadyRegistered') ?> <a href="<?= url_to('login') ?>"><?= lang('Auth.signIn') ?></a></div>
          <div class="form-group mb-0 col-2">
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
          </div>

        </form>

      </div>

    </div>
  </div>

  <footer class="bg-slate-400 mt-96 rounded-t-md">
    <p class="text-emerald-600">Copyright © <?= date('Y'); ?> Yeheskiel Jitmau</p>
  </footer>
</div>
<?= $this->endSection(); ?>