<?= $this->extend('template/layout_pelanggan/default'); ?>

<?= $this->Section('header'); ?>
<header class="header-v3">
  <!-- Header desktop -->
  <div class="container-menu-desktop trans-03">
    <div class="wrap-menu-desktop">
      <nav class="limiter-menu-desktop p-l-45">

        <!-- Logo desktop -->
        <a href="#" class="logo">
          <img src="<?= base_url() ?>/template3/images/icons/logo-02.png" alt="IMG-LOGO">
        </a>

        <!-- Menu desktop -->
        <div class="menu-desktop">
          <ul class="main-menu">
            <li class="">
              <a href="<?= base_url('http://localhost:8080/pelanggan') ?>" class="text-orange-text"><i class="fa fa-home mr-1"></i>Beranda</a>
            </li>

            <li class="active-menu">
              <a href="<?= base_url('/pelanggan/smart') ?>" class="text-orange-text"><i class="fa fa-search mr-1"></i>Info SMART</a>
            </li>

            <li>
              <a href="<?= base_url('/pelanggan/pembelian') ?>" class="text-orange-text"><i class="fa fa-comment mr-1"></i>Pesanan</a>
            </li>

            <li>
              <a href="<?= base_url() ?>/template3/index.html" class="text-orange-text"><i class="fa fa-user mr-1 py-1 text-2xl"></i>
                <?= user()->username ?></a>
              <ul class="sub-menu rounded-md">
                <li>
                  <p href="" class="text-orange-text font-semibold ml-4"><?= user()->username ?></p>
                </li>
                <li>
                  <a href="<?= base_url('/logout'); ?>" class="text-orange-text"><i class="fa fa-arrow-circle-right mr-1 font-semibold"></i>Logout</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>


        <?php
        $keranjang = $cart->contents();
        $jml_item = 0;
        foreach ($keranjang as $key => $value) {
          $jml_item = $jml_item + $value['qty'];
        }

        ?>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m h-full">
          <div class="flex-c-m h-full p-r-25 bor6">
            <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="<?= $jml_item ?>">
              <li class="">
                <a href="<?= base_url('pelanggan/cart') ?>" class="text-orange-text text-4xl"><i class="fa fa-cart-plus"></i></a>
              </li>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>

  <!-- Header Mobile -->
  <div class="wrap-header-mobile">
    <!-- Logo moblie -->
    <div class="logo-mobile">
      <a href="index.html"><img src="<?= base_url() ?>/template3/images/icons/logo-02.png" alt="IMG-LOGO"></a>
    </div>

    <!-- Icon header -->
    <div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
      <div class="flex-c-m h-full p-r-5">
        <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart cart-aktif" data-notify="<?= $jml_item ?>">
          <li class="active-menu">
            <a href="<?= base_url('pelanggan/cart') ?>" class="text-orange-text text-2xl"><i class="fa fa-cart-plus"></i></a>
          </li>
        </div>
      </div>
    </div>

    <!-- Button show menu -->
    <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </div>
  </div>


  <!-- Menu Mobile -->
  <div class="menu-mobile">
    <ul class="main-menu-m">
      <li>
        <a href="<?= base_url('/pelanggan') ?>" class="text-orange-text hover:text-slate-900"><i class="fa fa-home mr-1"></i>Beranda</a>
      </li>

      <li>
        <a href="<?= base_url() ?>" class="text-orange-text"><i class="fa fa-search mr-1"></i>Info SMART</a>
      </li>

      <li>
        <a href="<?= base_url() ?>/template3/shoping-cart.html" class="text-orange-text"><i class="fa fa-comment mr-1"></i>Pesanan</a>
      </li>

      <li>
        <a href="#" class="text-orange-text"><i class="fa fa-user mr-1 py-1 text-2xl"></i><?= user()->username ?></a>
        <ul class="sub-menu-m">
          <p href="" class="text-orange-text font-semibold"><?= user()->username ?></p>
          <li><a href="<?= base_url('/logout'); ?>" class="text-orange-text font-semibold"><i class="fa fa-arrow-circle-right mr-1 font-semibold"></i>Logout</a></li>
        </ul>
        <span class="arrow-main-menu-m">
          <i class="fa fa-angle-right text-orange-text font-semibold" aria-hidden="true"></i>
        </span>
      </li>
    </ul>
  </div>

  <!-- Modal Search -->
  <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
    <button class="flex-c-m btn-hide-modal-search trans-04">
      <i class="zmdi zmdi-close"></i>
    </button>

    <form class="container-search-header">
      <div class="wrap-search-header">
        <input class="plh0" type="text" name="search" placeholder="Search...">

        <button class="flex-c-m trans-04">
          <i class="zmdi zmdi-search"></i>
        </button>
      </div>
    </form>
  </div>
</header>
<?= $this->endSection(); ?>

<?= $this->Section('slider'); ?>
<section class="section-slide">
  <div class="wrap-slick1 rs1-slick1">
    <div class="slick1">
      <div class="item-slick1 bg-overlay1" style="background-image: url(/template3/images/slide-05.png);">
        <div class="container h-full">
          <div class="flex-col-l-m h-full p-t-100 p-b-30">
            <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
              <span class="ltext-202 cl2 respon2">
                noken asli papua
              </span>
            </div>

            <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
              <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
                Koleksi 2023
              </h2>
            </div>

            <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
              <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                Shop Now
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="item-slick1" style="background-image: url(/template3/images/slide-06.png);">
        <div class="container h-full">
          <div class="flex-col-l-m h-full p-t-100 p-b-30">
            <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
              <span class="ltext-202 cl2 respon2">
                Jangan Lupa Datang Di Ifen mama-mama
              </span>
            </div>

            <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
              <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
                23 November 2023
              </h2>
            </div>

            <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
              <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                Shop Now
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="item-slick1" style="background-image: url(/template3/images/slide-07.png);">
        <div class="container h-full">
          <div class="flex-col-l-m h-full p-t-100 p-b-30">
            <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
              <span class="ltext-202 cl2 respon2">
                Pace, Mace Kam Gaya Pake noken apa? 🤔
              </span>
            </div>

            <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
              <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
                Noken Papua Boleh 👍🤝🫡
              </h2>
            </div>

            <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
              <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                Shop Now
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection(); ?>

<?= $this->Section('produk'); ?>
<?php if (isset($pesan)) : ?>
  <section id=" home" class="pt-20 pb-16 bg-slate-100 dark:bg-slate-800">
    <div class="container">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
          <h2 class="font-bold text-emerald-400 text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-emerald-400"><?= $pesan ?></h2>
        </div>
      </div>
    </div>
  </section>
<?php endif ?>

<?php if (isset($perhitungan)) : ?>
  <section id=" home" class="pt-20 pb-16 bg-slate-100 dark:bg-slate-800">
    <div class="container">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
          <h2 class="font-bold text-emerald-400 text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-emerald-400">Hasil Perhitungan</h2>
        </div>
      </div>


      <div class="w-full px-1 flex flex-wrap justify-center xl:w-8/12 xl:mx-auto">

        <table class="rounded-none border-2 border-black border-solid">
          <tr class="rounded-none border-2 border-black border-solid">
            <th class="rounded-none border-2 border-black border-solid">Harga</th>
            <th class="rounded-none border-2 border-black border-solid">Ukuran </th>
            <th class="rounded-none border-2 border-black border-solid">Motif</th>
            <th class="rounded-none border-2 border-black border-solid">Jenis</th>
          </tr>
          <?php foreach ($perhitungan['dataset'] as $p) : ?>
            <?php $i = 0 ?>
            <tr>
              <td><?= $p[0] ?></td>
              <td><?= $p[1] ?></td>
              <td><?= $p[2] ?></td>
              <td><?= $p[3] ?? '' ?></td>
            </tr>
          <?php endforeach ?>
        </table>
      </div>

      <div class="w-full px-1 flex flex-wrap justify-center xl:w-8/12 xl:mx-auto">

        <table class="rounded-none border-2 border-black border-solid">
          <tr class="rounded-none border-2 border-black border-solid">
            <th class="rounded-none border-2 border-black border-solid">Hasil Harga</th>
            <th class="rounded-none border-2 border-black border-solid">Hasil Ukuran </th>
            <th class="rounded-none border-2 border-black border-solid">Hasil Motif</th>
            <th class="rounded-none border-2 border-black border-solid">Hasil Jenis</th>
          </tr>
          <?php foreach ($perhitungan['utility'] as $p) : ?>
            <tr>
              <td><?= $p[0] ?></td>
              <td><?= $p[1] ?></td>
              <td><?= $p[2] ?></td>
              <td><?= $p[3] ?? '' ?></td>
            </tr>
          <?php endforeach ?>
        </table>
      </div>

      <div class="w-full px-1 flex flex-wrap justify-center xl:w-8/12 xl:mx-auto">

        <table class="rounded-none border-2 border-black border-solid">
          <tr class="rounded-none border-2 border-black border-solid">
            <th class="rounded-none border-2 border-black border-solid" colspan="4">Hasil Utility X Normalisasi</th>

          </tr>
          <?php foreach ($perhitungan['result'] as $p) : ?>
            <tr>
              <td><?= $p[0] ?></td>
              <td><?= $p[1] ?></td>
              <td><?= $p[2] ?></td>
              <td><?= $p[3] ?? '' ?></td>
            </tr>
          <?php endforeach ?>
        </table>
      </div>
      <div class="w-full px-1 flex flex-wrap justify-center xl:w-8/12 xl:mx-auto">

        <table class="rounded-none border-2 border-black border-solid">
          <tr class="rounded-none border-2 border-black border-solid">
            <th class="rounded-none border-2 border-black border-solid">Alternatif</th>
            <th class="rounded-none border-2 border-black border-solid">Hasil Akhir</th>

          </tr>
          <?php foreach ($perhitungan['result_sort'] as $p) : ?>
            <tr>
              <td><img src="<?= base_url('gambar_noken/' . $p['alternatif']) ?>" class="p-3 rounded-t-lg w-30 h-40" alt=""></td>
              <td><?= $p['value'] ?></td>
            </tr>
          <?php endforeach ?>
        </table>
      </div>

    </div>
  </section>
<?php endif ?>

<?= form_open_multipart('pelanggan/hitung_smart'); ?>
<section id=" home" class="pt-20 bg-zinc-300">
  <div class="container">
    <div class="w-full pt-4">
      <div class="container mx-auto py-8 bg-slate-200 rounded-md shadow-md mb-16">
        <?php foreach ($kriteria as $k) : ?>
          <div class="w-64 mx-auto mt-8">
            <label class="block mb-2 font-bold text-orange-text" for="kriterian"> <?= $k['nama_kriteria'] ?></label>
            <select id="kriterian" name="<?= $k['id_kriteria'] ?>" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
              <option value="">Belum Memilih</option>
              <?php foreach ($subkriteria as $sk) : ?>
                <?php if ($sk['id_kriteria'] == $k['id_kriteria']) : ?>
                  <option value="<?= $sk['id_subkriteria'] ?>">
                    <?= $sk['nama_subkriteria'] ?>
                  </option>
                <?php endif ?>
              <?php endforeach ?>
            </select>
          </div>
        <?php endforeach ?>


        <div class="w-64 mx-auto mt-4 gap-4">
          <div class="bg-emerald-300 flex justify-center w-32 hover:bg-emerald-400 rounded-md mt-4">
            <button type="submit" value="cari" name="type" class="px-5 py-2 font-bold">Cari</button>
          </div>
          <div class="bg-emerald-300 flex justify-center w-32 hover:bg-emerald-400 rounded-md mt-2">
            <button type="submit" value="rekomendasi" name="type" class="px-5 py-2 font-bold">Rekomendasi</button>
          </div>
        </div>

        </form>

      </div>
    </div>
  </div>
</section>
<section class="bg0 p-b-130">
  <div class="container">
    <div class="p-b-10 text-center">
      <h3 class="ltext-103 bg-gradient-to-tr from-orange-text from-30% to-emerald-400 to-80% bg-clip-text text-transparent">
        Rekomendasi Produk E-Comerce Noken Papua
      </h3>
    </div>


    <!-- halaman produk -->
    <?php if (!empty(session()->getFlashdata('pesan'))) { ?>
      <div class=" alert alert-success bg-emerald-200 mx-auto w-80 rounded-md justify-center text-center">
        <?= session()->getFlashdata('pesan'); ?>
      </div>
    <?php } ?>


    <div class="row isotope-grid">

      <?php foreach ($barang as $b => $value) { ?>
        <div class=" col-lg-3 p-b-35 isotope-item women ">

          <?=
          form_open_multipart('pelanggan/add');
          echo form_hidden('id', $value['id_produk']);
          echo form_hidden('price', $value['harga_noken']);
          echo form_hidden('name', $value['jenis_noken']);
          // option
          echo form_hidden('gambar', $value['gambar_noken']);
          echo form_hidden('ukuran', $value['ukuran_noken']);
          echo form_hidden('motif', $value['motif_noken']);
          ?>

          <!-- Block2 -->
          <div class="container">
            <div class="block2 bg-slate-200 rounded-md shadow-md justify-center items-center">
              <div class="block2-pic hov-img0 justify-items-center flex">
                <span class="flex justify-center items-center">
                  <img src="<?= base_url('gambar_noken/' . $value['gambar_noken']); ?>" class="w-80" alt="IMG-PRODUCT">
                </span>
                <!-- <button type="submit" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                  <i class="fa fa-plus mr-1"></i> Ke <i class="fa fa-cart-plus ml-1"></i>
                </button> -->
                <button type="submit" class="font-semibold hover:text-white block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 "><i class="fa fa-plus mr-1"></i> Ke <i class="fa fa-cart-plus ml-1"></i></button>
              </div>

              <div class="block2-txt flex-w flex-t p-t-14 text-center justify-center items-center">
                <div class="block2-txt-child1 flex-col-l flex ">
                  <p class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                    Motif <?= $value['motif_noken']; ?>, Jenis <?= $value['jenis_noken']; ?>, Ukuran <?= $value['ukuran_noken']; ?>
                  </p>
                  <p class="stext-104 cl4 hov-cl1 flex trans-04 js-name-b2 p-b-6">
                    lokasi <?= $value['lokasi_penjualan']; ?>
                  </p>
                  <span class="stext-105 cl3">
                    <?= number_to_currency($value['harga_noken'], 'IDR'); ?>
                  </span>
                </div>

              </div>
            </div>
          </div>

          <?= form_close(); ?>

        </div>
      <?php } ?>

    </div>

    <!-- Pagination -->
    <!-- <div class="flex-c-m flex-w w-full p-t-38">
      <a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7 active-pagination1">
        1
      </a>

      <a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7">
        2
      </a>
    </div> -->
  </div>
</section>
<?= $this->endSection(); ?>