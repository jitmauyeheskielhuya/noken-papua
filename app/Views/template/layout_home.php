<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <title>E-Comerce Noken Papua</title>
  <link rel="stylesheet" href="<?= base_url() ?>/css/app.css">
  <link rel="shortcut icon" href="<?= base_url() ?>/template1/assets/img/k2.png">

  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url(); ?>/template1/assets/plugins/bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" href="<?= base_url(); ?>/template1/assets/plugins/feather/feather.css">

  <link rel="stylesheet" href="<?= base_url(); ?>/template1/assets/plugins/icons/flags/flags.css">

  <link rel="stylesheet" href="<?= base_url(); ?>/template1/assets/plugins/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/template1/assets/plugins/fontawesome/css/all.min.css">

  <link rel="stylesheet" href="<?= base_url(); ?>/template1/assets/plugins/datatables/datatables.min.css">

  <link rel="stylesheet" href="<?= base_url(); ?>/template1/assets/css/style.css">
</head>

<body>

  <div class="main-wrapper">

    <div class="header shadow-md">

      <div class="header-left flex">
        <a href="http://localhost:8080/" class="lg:w-20 lg:h-20 lg:pt-2.5 md:w-14 md:h-14 md:mr-3">
          <img src="<?= base_url() ?>/template1/assets/img/k.png" alt="Logo" class="rounded-full logo">
        </a>
        <a href="#" class="logo">
          <h6 class="text-center mr-7 font-bold bg-gradient-to-r from-emerald-400 to-cyan-500 bg-clip-text text-transparent">E-Comerce Noken Papua</h6>
        </a>
        <a href="http://localhost:8080/" class="flex w-12 h-12 ml-10 lg:hidden">
          <img src="<?= base_url() ?>/template1/assets/img/k.png" alt="Logo" class="rounded-full logo logo-small">
        </a>
      </div>
      <div class="menu-toggle">
        <a href="javascript:void(0);" id="toggle_btn" class="bg-slate-400">
          <i class="fas fa-bars "></i>
        </a>
      </div>

      <!-- <div class="top-nav-search">
        <form>
          <input type="text" class="form-control" placeholder="Search here">
          <button class="btn" type="submit"><i class="fas fa-search"></i></button>
        </form>
      </div> -->
      <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
      </a>

      <ul class="nav user-menu">
        <li class="nav-item dropdown has-arrow new-user-menus">
          <a href="#" class=" nav-link" data-bs-toggle="dropdown">
            <img src="<?= base_url() ?>/template1/assets/img/icons/lesson-icon-05.svg" alt="">
            <?= user()->username ?>
          </a>
          <div class="dropdown-menu">
            <div class="user-header">
              <div class="avatar avatar-sm">

              </div>
              <div class="user-text">
                <p class="text-muted mb-0"><?= user()->nama_depan ?></p>
                <p class="text-muted mb-0"><?= user()->nama_belakang ?></p>
              </div>
            </div>
            <a class="dropdown-item" href="<?= base_url('/profil') ?>">My Profile</a>
            <a class="dropdown-item" href="<?= base_url('/password') ?>">Ubah Password</a>
            <a class="dropdown-item" href="<?= base_url('/logout'); ?>">Logout</a>
          </div>
        </li>

      </ul>

    </div>


    <div class="sidebar" id="sidebar">
      <div class="sidebar-inner slimscroll sidebar-menu bg-slate-200">
        <div id="sidebar-menu" class="text-lg">
          <ul class="">

            <!-- admin -->
            <?php if (in_groups("admin")) : ?>
              <li class="">
                <a href="<?= base_url('/admin') ?>" class="text-emerald-400 hover:text-emerald-500 bg-none py-2 hover:bg-gradient-to-r from-emerald-200 to-sky-200 rounded-md shadow-md mb-3 mt-2 bg-emerald-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><i class="fas fa-home"></i> <span class="">Beranda</span></a>
              </li>
              <li class="">
                <a href="<?= base_url('/kriteria') ?>" class="text-emerald-400 hover:text-emerald-500 bg-none py-2 hover:bg-gradient-to-r from-emerald-200 to-sky-200 rounded-md shadow-md mb-3 mt-2 bg-emerald-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><i class="fa fa-clipboard-list"></i> <span class="">D Kriteria</span></a>
              </li>
              <li class="">
                <a href="<?= base_url('/subkriteria') ?>" class="text-emerald-400 hover:text-emerald-500 py-2 hover:bg-gradient-to-r from-emerald-200 to-sky-200 rounded-md shadow-md mb-3 mt-2 bg-emerald-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><i class="fa fa-clipboard-list"></i> <span class="">D Subkriteria</span></a>
              </li>
              <li class="">
                <a href="<?= base_url('/akun') ?>" class="text-emerald-400 hover:text-emerald-500 py-2 hover:bg-gradient-to-r from-emerald-200 to-sky-200 rounded-md shadow-md mb-3 mt-2 bg-emerald-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><i class="fas fa-users"></i> <span class="py-5">L Data Akun Baru</span></a>
              </li>
            <?php endif; ?>

            <!-- Pengrajin -->
            <?php if (in_groups("pengrajin")) : ?>
              <li class="">
                <a href="<?= base_url('/pengrajin') ?>" class="text-emerald-400 hover:text-emerald-500 bg-none py-2 hover:bg-gradient-to-r from-emerald-200 to-sky-200 rounded-md shadow-md mb-3 mt-2 bg-emerald-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><i class="fas fa-holly-berry"></i> <span class="">Beranda</span></a>
              </li>
              <li class="">
                <a href="<?= base_url('/produk') ?>" class="text-emerald-400 hover:text-emerald-500 bg-none py-2 hover:bg-gradient-to-r from-emerald-200 to-sky-200 rounded-md shadow-md mb-3 mt-2 bg-emerald-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><i class="fas fa-holly-berry"></i> <span class="">Data Produk</span></a>
              </li>
              <li class="">
                <a href="<?= base_url('/pemesanan_produk') ?>" class="text-emerald-400 hover:text-emerald-500 py-2 hover:bg-gradient-to-r from-emerald-200 to-sky-200 rounded-md shadow-md mb-3 mt-2 bg-emerald-50 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><i class="fas fa-clipboard-list"></i> <span class="py-5">Pemesanan Produk</span></a>
              </li>
              <li class="">
                <a href="<?= base_url('/perkembangan_ikm') ?>" class="text-emerald-400 hover:text-emerald-500 py-2 hover:bg-gradient-to-r from-emerald-200 to-sky-200 rounded-md shadow-md mb-3 mt-2 bg-emerald-50 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><i class="fas fa-clipboard-list"></i> <span class="py-5">Perkembangan IKM</span></a>
              </li>
            <?php endif; ?>

            <!-- Disperindagkop -->
            <?php if (in_groups("disperindagkop")) : ?>
              <li class="">
                <a href="/disperindagkop" class="text-emerald-400 hover:text-emerald-500 bg-none py-2 hover:bg-gradient-to-r from-emerald-200 to-sky-200 rounded-md shadow-md mb-3 mt-2 bg-emerald-50 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><i class="fas fa-holly-berry"></i> <span class="">Beranda</span></a>
              </li>
              <li class="">
                <a href="<?= base_url('/laporan_produk') ?>" class="text-emerald-400 hover:text-emerald-500 bg-none py-2 hover:bg-gradient-to-r from-emerald-200 to-sky-200 rounded-md shadow-md mb-3 mt-2 bg-emerald-50 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><i class="fas fa-holly-berry"></i> <span class="">L Data Produk</span></a>
              </li>
              <li class="">
                <a href="<?= base_url('/laporan_ikm') ?>" class="text-emerald-400 hover:text-emerald-500 py-2 hover:bg-gradient-to-r from-emerald-200 to-sky-200 rounded-md shadow-md mb-3 mt-2 bg-emerald-50 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><i class="fas fa-comment-dollar"></i> <span class="">L Data IKM</span></a>
              </li>
              <li class="">
                <a href="<?= base_url('/laporan_P_ikm') ?>" class="text-emerald-400 hover:text-emerald-500 py-2 hover:bg-gradient-to-r from-emerald-200 to-sky-200 rounded-md shadow-md mb-3 mt-2 bg-emerald-50 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><i class="fas fa-clipboard-list"></i> <span class="py-5">L Perkrmbangan IKM</span></a>
              </li>
              <li class="">
                <a href="<?= base_url('/laporan_transaksi') ?>" class="text-emerald-400 hover:text-emerald-500 py-2 hover:bg-gradient-to-r from-emerald-200 to-sky-200 rounded-md shadow-md mb-3 mt-2 bg-emerald-50 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><i class="fas fa-clipboard-list"></i> <span class="py-5">L Transaksi</span></a>
              </li>
            <?php endif; ?>

          </ul>
        </div>
      </div>
    </div>

    <?= $this->renderSection('page-content'); ?>

  </div>

  <script src="<?= base_url(); ?>/template1/assets/js/jquery-3.6.0.min.js"></script>

  <script src="<?= base_url(); ?>/template1/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="<?= base_url(); ?>/template1/assets/js/feather.min.js"></script>

  <script src="<?= base_url(); ?>/template1/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

  <script src="<?= base_url(); ?>/template1/assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>/template1/assets/plugins/datatables/datatables.min.js"></script>

  <script src="<?= base_url(); ?>/template1/assets/js/script.js"></script>
</body>

</html>