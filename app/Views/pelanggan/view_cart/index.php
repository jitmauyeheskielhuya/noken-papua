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

            <li>
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
            <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart cart-aktif" data-notify="<?= $jml_item ?>">
              <li class="active-menu">
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
      <div class="item-slick1" style="background-image: url(/template3/images/slide-05.png);">
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
<form method="post" action="<?= site_url('pelanggan/cart'); ?>" target="_blank">
  <section class="bg0 pt-4 p-b-116">
    <div class="container flex justify-center">
      <?php if (!empty(session()->getFlashdata('pesan'))) { ?>
        <div class=" alert alert-success bg-emerald-200 w-90">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
      <?php } ?>
    </div>


    <div class="container mx-sm-auto bg-emerald-100 pb-3 mb-2 rounded-lg shadow-md">
      <h2 class="mb-2 text-2xl font-bold text-emerald-400"><i class="fa fa-cart-plus text-slate-700 mr-2"></i>Keranjang Belanja</h2>
      <table class="w-full bg-white shadow-md rounded-md mb-4 text-sm lg:text-base">
        <thead class="">
          <tr class="bg-slate-300 text-emerald-600 columns-6 ">
            <th class="text-center border-b border-gray-300">Jumlah Barang</th>
            <th class="text-center border-b border-gray-300">Gambar Barang</th>
            <th class="text-center border-b border-gray-300">Nama Barang</th>
            <th class="text-center border-b border-gray-300">Harga</th>
            <th class="text-center border-b border-gray-300">Total</th>
            <th class="text-center border-b border-gray-300">Aksi</th>
          </tr>
        </thead>
        <tbody class="text-center bg-emerald-50 text-sm">
          <?php
          $i = 1;
          foreach ($cart->contents() as $key => $value) { ?>
            <tr class="columns-6">
              <td class="py-1 px-1 border-b border-slate-400"><input type="number" min="1" name="qty<?= $i++; ?>" class="form-control shadow-md rounded-md border border-slate-400 py-2 px-2 w-20 text-center" value="<?= $value['qty']; ?>"></td>
              <td class="py-1 px-1 border-b border-slate-400">
                <img class="w-10 h-10 rounded-full lg:ml-20 lg:w-20 lg:h-20" src="<?= base_url('gambar_noken/' . $value['options']['gambar']) ?>" alt="Gambar Produk">
              </td>
              <td class="border-b border-slate-400">
                Bahan <?= $value['name']; ?>
                <br>
                Motif <?= $value['options']['motif']; ?>
                <br>
                Ukuran <?= $value['options']['ukuran']; ?>
              </td>
              <td class="px-1 border-b border-slate-400"><?= number_to_currency($value['price'], 'IDR') ?></td>
              <td class="px-1 border-b border-slate-400"><?php $hasil = (int) $value['price'] * (int) $value['qty'];
                                                          echo  number_to_currency($hasil, 'IDR') ?></td>
              <td class=" border-b border-slate-400">
                <a href="<?= base_url('pelanggan/delete/' . $value['rowid']); ?>" class="bg-red-600 hover:bg-red-500 rounded p-2 text-white" onclick="return confirm('Apakah Ingin Hapus Data..?')"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
          <?php }
          // var_dump($kota->rajaongkir->results[157]->city_name);
          ?>
        </tbody>
      </table>
    </div>

    <div class="container">
      <div class="flex-w justify-center">
        <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
          <h4 class="mtext-105 cl2 txt-center p-b-30">
            Form Pengiriman Paket
          </h4>
          <div class="mb-4 form-group">
            <label for="provinsi" class="block font-medium mb-2">Provinsi</label>
            <select id="provinsi" name="nama_provinsi" class="w-full px-4 py-2 rounded-md border-gray-300 focus:outline-none focus:border-blue-500 form-control autosearch">
            </select>
          </div>
          <div class="mb-4 form-group">
            <label for="distrik" class="block font-medium mb-2">Kota/Kab</label>
            <select id="distrik" name="nama_distrik" class="w-full px-4 py-2 rounded-md border-gray-300 focus:outline-none focus:border-blue-500 form-control autosearch">
            </select>
          </div>
          <div class="mb-4 form-group">
            <label for="ekspedisi" class="block font-medium mb-2">Ekspedisi</label>
            <select id="ekspedisi" name="nama_ekspedisi" class="w-full px-4 py-2 rounded-md border-gray-300 focus:outline-none focus:border-blue-500 form-control autosearch">
            </select>
          </div>
          <div class="mb-4 form-group">
            <label for="paket" class="block font-medium mb-2">Paket</label>
            <select id="paket" name="nama_paket" class="w-full px-4 py-2 rounded-md border-gray-300 focus:outline-none focus:border-blue-500 form-control autosearch">
            </select>
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="form-group pb-3">
                <label for="">Berat</label>
                <input type="text" class="p-3" name="total_berat" value="1000">
              </div>
              <div class="">
                <input class="mb-3 p-3 " type="text" readonly name="provinsi">
                <input class="mb-3 p-3 " type="text" readonly name="distrik">
                <input class="mb-3 p-3 " type="text" readonly name="tipe">
                <input class="mb-3 p-3 " type="text" readonly name="kodepos">
                <input class="mb-3 p-3 " type="text" readonly name="ekspedisi">
                <input class="mb-3 p-3 " type="text" readonly name="paket">
                <input class="mb-3 p-3  number" readonly type="text" name="ongkir">
                <input class="mb-3 p-3 " type="text" readonly name="estimasi">

              </div>
            </div>
            <div class="">
              <button type="submit"></button>
            </div>


            <!-- </form> -->
          </div>

          <?php if (isset($_POST['submit'])) : ?>
            <div class="container">
              <div class="row">
                <div class="col">
                  <h3>hasil</h3>
                  <strong>pengiriman dari: </strong>
                  <?= $hasil->rajaongkir->origin_details->city_name ?>
                  <?= $hasil->rajaongkir->origin_details->province ?>
                  <br>

                  <strong>Tujuan Ke: </strong>
                  <?= $hasil->rajaongkir->destination_details->city_name ?>
                  <?= $hasil->rajaongkir->destination_details->province ?>
                  <br>

                  <strong>Menggunakan Jasa Kurir: </strong>
                  <?= $hasil->rajaongkir->results[0]->name ?>
                  <br>

                  <strong>Berat Paket: </strong>
                  <?= ($hasil->rajaongkir->query->weight / 100) ?>Kg
                  <br>

                  <strong>Biaya Pengiriman: </strong><br>
                  <?php foreach ($hasil->rajaongkir->results[0]->costs as $biaya) : ?>
                    <?= $biaya->service ?>: Rp. <?= number_format($biaya->cost[0]->value) ?> (<?= $biaya->cost[0]->etd ?> hari) <br>
                  <?php endforeach; ?>
                  <br>
                </div>
              </div>
            </div>
          <?php endif; ?>

          <div class="flex flex-col items-start">

            <div id="total"></div>

            <input class="mb-3 p-3 " type="hidden" value="<?= $cart->total()  ?>" readonly id="harga" name="harga">
            <input class="mb-3 p-3 " type="hidden" readonly id="Totalharga" name="Totalharga">



          </div>
        </div>
      </div>
    </div>
  </section>
</form>
<?= form_close(); ?>

<?= $this->endSection(); ?>