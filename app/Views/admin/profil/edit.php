<?= $this->extend('template/layout_home'); ?>

<?= $this->Section('page-content'); ?>
<div class="page-wrapper">
  <div class="content container-fluid">
    <h4 class="text-emerald-400 pb-3">Halaman Data Kriteria</h4>
    <?php
    if (!empty(session()->getFlashdata('success'))) { ?>
      <div class="col-3 alert alert-success">
        <?= session()->getFlashdata('success'); ?>
      </div>
    <?php } ?>
    <div class="row pt-4 pb-4 rounded-md bg-slate-200">
      <p class="text-lg font-bold pt-3">Edit Profil</p>
      <div class="col">



        <form action="/profil/<?= user_id() ?>" method="post" class="user">
          <?= csrf_field() ?>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label>Nama Depan</label>
                <input class="form-control <?php if (session('errors.nama_depan')) : ?>is-invalid<?php endif ?>" required type="text" name="nama_depan" value="<?= $result['nama_depan'] ?>">
              </div>
              <div class="form-group">
                <label>Nama Belakang</label>
                <input class="form-control <?php if (session('errors.nama_belakang')) : ?>is-invalid<?php endif ?>" required type="text" name="nama_belakang" value="<?= $result['nama_belakang'] ?>">
              </div>
              <div class="form-group">
                <label>No Hp</label>
                <input class="form-control <?php if (session('errors.no_hp')) : ?>is-invalid<?php endif ?>" type="text" required name="no_hp" value="<?= $result['no_hp'] ?>">
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                <label>Alamat</label>
                <input class="form-control <?php if (session('errors.alamat')) : ?>is-invalid<?php endif ?>" type="text" required name="alamat" value="<?= $result['alamat'] ?>">
              </div>
              <div class="form-group">
                <label><?= lang('Auth.email') ?> </label>
                <input class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" type="email" name="email" value="<?= $result['email'] ?>">
                <!-- <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small> -->
              </div>
              <div class="form-group">
                <label><?= lang('Auth.username') ?> </label>
                <input class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" type="text" name="username" value="<?= $result['username'] ?>">
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