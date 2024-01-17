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

            <li class="active-menu">
              <a href="<?= base_url('/pelanggan/pembelian') ?>" class="text-orange-text"><i class="fa fa-comment mr-1"></i>Pesanan</a>
            </li>

            <li>
              <a href="<?= base_url() ?>" class="text-orange-text"><i class="fa fa-user mr-1 py-1 text-2xl"></i>
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
        <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="">
          <a href="<?= base_url('/pelanggan/cart'); ?>"><i class="zmdi zmdi-shopping-cart text-orange-text hover:text-blue-600"></i></a>
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
        <a href="#" class="text-orange-text hover:text-slate-900"><i class="fa fa-home mr-1"></i>Beranda</a>
      </li>

      <li>
        <a href="<?= base_url() ?>/" class="text-orange-text"><i class="fa fa-search mr-1"></i>Info SMART</a>
      </li>

      <li>
        <a href="<?= base_url('/pelanggan/pembelian') ?>" class="text-orange-text"><i class="fa fa-comment mr-1"></i>Pesanan</a>
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
                Men Collection 2018
              </span>
            </div>

            <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
              <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
                New arrivals
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
                Men New-Season
              </span>
            </div>

            <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
              <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
                Jackets & Coats
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
                Women Collection 2018
              </span>
            </div>

            <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
              <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
                NEW SEASON
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



<!-- produk section start -->
<?= $this->Section('produk'); ?>
<section id="home" class="pt-20 pb-16 bg-slate-100 dark:bg-slate-800">
  <div class="container pb-96 flex justify-center">
    <div class="row">
      <div class="col bg-slate-200 py-3 px-3 rounded-md shadow-md">
        <h3 class="text-xl font-semibold text-emerald-400 mb-3">Tagihan Pesanan Anda</h3>
        <table class="w-full bg-white shadow-md rounded-md mb-4 mt-5">
          <thead>
            <tr class="bg-slate-300 text-emerald-600">
              <th class="py-2 px-4 border-b border-gray-300 h-10">No.</th>
              <th class="py-2 px-4 border-b border-gray-300 h-10">Nama Depan</th>
              <th class="py-2 px-4 border-b border-gray-300">Nama Belakang</th>
              <th class="py-2 px-4 border-b border-gray-300">Email</th>
              <th class="py-2 px-4 border-b border-gray-300">Ponsel</th>
              <th class="py-2 px-4 border-b border-gray-300">Alamat</th>
              <th class="py-2 px-4 border-b border-gray-300">produk</th>
              <th class="py-2 px-4 border-b border-gray-300">Nominal</th>
              <th class="py-2 px-4 border-b border-gray-300">Bayar</th>
              <th class="py-2 px-4 border-b border-gray-300">Status</th>
            </tr>
          </thead>
          <tbody class="text-center bg-emerald-50">
            <?php
            $no = 1;

            foreach ($tagihan as $t => $value) :
              $id = $value['id_pembelian'];
              $token = base64_encode("SB-Mid-server-yzB1hCmarPWIlsMcXVV3gMjv:");
              $url = "https://api.sandbox.midtrans.com/v2/" . $id . "/status";
              $header = array(
                'Accept: application/json',
                'Authorization: Basic ' . $token,
                'Content-Type: application/json'
              );
              $method = 'GET';
              $ch = curl_init();
              curl_setopt($ch, CURLOPT_URL, $url);
              curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
              curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
              curl_setopt($ch, CURLOPT_POSTFIELDS, false);
              curl_setopt($ch, CURLINFO_HEADER_OUT, true);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              $result = curl_exec($ch);
              $hasil = json_decode($result, true);
              // $hapus = trim($result);
              // $hasil = substr($result, 408, 3);
              // echo $hasil;
            ?>
              <tr class="">
                <td class="py-4 px-4 border-b border-slate-400"><?= $no++; ?></td>
                <td class="py-4 px-4 border-b border-slate-400"><?= $value['nama_depan']; ?></td>
                <td class="py-4 px-4 border-b border-slate-400"><?= $value['nama_belakang']; ?></td>
                <td class="py-4 px-4 border-b border-slate-400"><?= $value['email']; ?></td>
                <td class="py-4 px-4 border-b border-slate-400"><?= $value['no_hp']; ?></td>
                <td class="py-4 px-4 border-b border-slate-400"><?= $value['alamat']; ?></td>
                <td class="py-4 px-4 border-b border-slate-400">
                  <?php foreach ($value['keranjang'] as $keranjang) : ?>
                    <table>
                      <tr>
                        <td><?= $keranjang['qty'] ?>x</td>
                        <td><img src="/gambar_noken/<?= $keranjang['gambar_noken'] ?>" alt="gambar noken"></td>
                      </tr>
                    </table>
                  <?php endforeach; ?>
                </td>
                <td class="py-4 px-4 border-b border-slate-400"><?= $value['total_harga']; ?></td>
                <td class="py-4 px-4 border-b border-slate-400">
                  <a href="https://app.sandbox.midtrans.com/snap/v2/vtweb/<?= $value['token']; ?>" class="bg-emerald-500 hover:bg-emerald-400 rounded-md shadow-sm py-1 px-1">Bayar</a>
                  <!-- <button type="button" title="payment midtrans" class="bg-emerald-500 hover:bg-emerald-400 px-2 rounded-md shadow-md" id="tombolPay">Bayar</button> -->
                </td>
                <?php
                if (substr($hasil['status_code'], 0, 1) == "4") {
                  $status = "transaksi batal";
                } else {
                  if ($hasil['transaction_status'] == "settlement") {
                    $status = "transaksi berhasil";
                  } elseif ($hasil['transaction_status'] == "pending") {
                    $status = "menunggu transaksi";
                  }
                  // $status = $hasil['transaction_status'];
                }
                ?>
                <td class="py-4 px-4 border-b border-slate-400"><?= $status; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection(); ?>