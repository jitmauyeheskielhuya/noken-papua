<!DOCTYPE html>
<html lang="en">

<head>
  <title>E-Comerce Noken Papua</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url() ?>/css/app.css">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="<?= base_url() ?>/template3/images/icons/favicon.png" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template3/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template3/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template3/fonts/iconic/css/material-design-iconic-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template3/fonts/linearicons-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template3/vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template3/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template3/vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template3/vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template3/vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template3/vendor/slick/slick.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template3/vendor/MagnificPopup/magnific-popup.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template3/vendor/perfect-scrollbar/perfect-scrollbar.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template3/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template3/css/main.css">
  <!--===============================================================================================-->
</head>

<body class="animsition">

  <!-- Header -->
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
              <li class="active-menu">
                <a href="#" class="text-orange-text"><i class="fa fa-home mr-1"></i>Beranda</a>
              </li>

              <li>
                <a href="<?= base_url() ?>" class="text-orange-text"><i class="fa fa-search mr-1"></i>Info SMART</a>
              </li>

              <li>
                <a href="<?= base_url() ?>" class="text-orange-text"><i class="fa fa-comment mr-1"></i>Pesanan</a>
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



          <!-- Icon header -->
          <div class="wrap-icon-header flex-w flex-r-m h-full">
            <div class="flex-c-m h-full p-r-25 bor6">
              <div class="">
                <a href="template3/shoping-cart.html">cart</a>
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
          <a href="<?= base_url() ?>" class="text-orange-text"><i class="fa fa-comment mr-1"></i>Pesanan</a>
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




  <!-- Slider -->
  <section class="section-slide">
    <div class="wrap-slick1 rs2-slick1">
      <div class="slick1">
        <div class="item-slick1 bg-overlay1" style="background-image: url(template3/images/slide-05.png);" data-thumb="template3/images/thumb-01.png" data-caption="Benang Kulit Kayu">
          <div class="container h-full">
            <div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
              <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                <span class="ltext-202 txt-center cl0 respon2">
                  noken asli papua
                </span>
              </div>
              <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                <span class="ltext-202 txt-center cl0 respon2">
                  dijahit olah tangan mama-mama papua
                </span>
              </div>

              <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                <h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
                  Koleksi 2023
                </h2>
              </div>

              <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                <a href="<?= base_url() ?>/template3/product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                  Shop Now
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="item-slick1 bg-overlay1" style="background-image: url(template3/images/slide-06.png);" data-thumb="template3/images/thumb-02.png" data-caption="Benang Wol">
          <div class="container h-full">
            <div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
              <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                <span class="ltext-202 txt-center cl0 respon2 mb-2">
                  <h4>Jangan Lupa Datang Di Ifen mama-mama</h4>
                </span>
                <span class="ltext-202 txt-center cl0 respon2">
                  <h4>Datang dan Dukung UMKM Kota Jayapura jayapura</h4>
                </span>
              </div>

              <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                <h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
                  23 November 2023
                </h2>
              </div>

              <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                  Shop Now
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="item-slick1 bg-overlay1" style="background-image: url(template3/images/slide-07.png);" data-thumb="template3/images/thumb-03.png" data-caption="Kulit Kayu">
          <div class="container h-full">
            <div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
              <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
                <span class="ltext-202 txt-center cl0 respon2">
                  Pace, Mace Kam Gaya Pake noken apa? 🤔
                </span>
              </div>

              <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                <h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
                  Noken Papua Boleh 👍🤝🫡
                </h2>
              </div>

              <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                  Shop Now
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="wrap-slick1-dots p-lr-10"></div>
    </div>
  </section>


  <!-- Banner -->



  <!-- Product -->
  <section class="bg0 p-t-23 p-b-130">
    <div class="container">
      <div class="p-b-10">
        <h3 class="ltext-103 cl5">
          Halaman Produk Noken
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
            <div class="block2 bg-slate-200 rounded-md shadow-md justify-center items-center">
              <div class="block2-pic hov-img0 justify-items-center flex">
                <span class="flex justify-center items-center">
                  <img src="<?= base_url('gambar_noken/' . $value['gambar_noken']); ?>" class="w-80" alt="IMG-PRODUCT">
                </span>
                <button type="submit" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                  <i class="fa fa-plus mr-1"></i> Ke <i class="fa fa-cart-plus ml-1"></i>
                </button>
              </div>

              <div class="block2-txt flex-w flex-t p-t-14">
                <div class="block2-txt-child1 flex-col-l ">
                  <p class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                    Motif <?= $value['motif_noken']; ?>, Jenis <?= $value['jenis_noken']; ?>, Ukuran <?= $value['ukuran_noken']; ?>
                  </p>
                  <p class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                    lokasi <?= $value['lokasi_penjualan']; ?>
                  </p>

                  <span class="stext-105 cl3">
                    <?= number_to_currency($value['harga_noken'], 'IDR'); ?>
                  </span>
                </div>

              </div>
            </div>

            <?= form_close(); ?>

          </div>
        <?php } ?>

      </div>

      <!-- Pagination -->
      <div class="flex-c-m flex-w w-full p-t-38">
        <a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7 active-pagination1">
          1
        </a>

        <a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7">
          2
        </a>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer class="bg3 p-t-75 p-b-32">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-3 p-b-50">
          <h4 class="stext-301 cl0 p-b-30">
            Categories
          </h4>

          <ul>
            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                Women
              </a>
            </li>

            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                Men
              </a>
            </li>

            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                Shoes
              </a>
            </li>

            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                Watches
              </a>
            </li>
          </ul>
        </div>

        <div class="col-sm-6 col-lg-3 p-b-50">
          <h4 class="stext-301 cl0 p-b-30">
            Help
          </h4>

          <ul>
            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                Track Order
              </a>
            </li>

            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                Returns
              </a>
            </li>

            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                Shipping
              </a>
            </li>

            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                FAQs
              </a>
            </li>
          </ul>
        </div>

        <div class="col-sm-6 col-lg-3 p-b-50">
          <h4 class="stext-301 cl0 p-b-30">
            GET IN TOUCH
          </h4>

          <p class="stext-107 cl7 size-201">
            Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
          </p>

          <div class="p-t-27">
            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
              <i class="fa fa-facebook"></i>
            </a>

            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
              <i class="fa fa-instagram"></i>
            </a>

            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
              <i class="fa fa-pinterest-p"></i>
            </a>
          </div>
        </div>

        <div class="col-sm-6 col-lg-3 p-b-50">
          <h4 class="stext-301 cl0 p-b-30">
            Newsletter
          </h4>

          <form>
            <div class="wrap-input1 w-full p-b-4">
              <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
              <div class="focus-input1 trans-04"></div>
            </div>

            <div class="p-t-18">
              <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                Subscribe
              </button>
            </div>
          </form>
        </div>
      </div>

      <div class="p-t-40">
        <div class="flex-c-m flex-w p-b-18">
          <a href="#" class="m-all-1">
            <img src="<?= base_url() ?>/template3/images/icons/icon-pay-01.png" alt="ICON-PAY">
          </a>

          <a href="#" class="m-all-1">
            <img src="<?= base_url() ?>/template3/images/icons/icon-pay-02.png" alt="ICON-PAY">
          </a>

          <a href="#" class="m-all-1">
            <img src="<?= base_url() ?>/template3/images/icons/icon-pay-03.png" alt="ICON-PAY">
          </a>

          <a href="#" class="m-all-1">
            <img src="<?= base_url() ?>/template3/images/icons/icon-pay-04.png" alt="ICON-PAY">
          </a>

          <a href="#" class="m-all-1">
            <img src="<?= base_url() ?>/template3/images/icons/icon-pay-05.png" alt="ICON-PAY">
          </a>
        </div>

        <p class="stext-107 cl6 txt-center">
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>
            document.write(new Date().getFullYear());
          </script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="<?= base_url() ?>/template3/https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="<?= base_url() ?>/template3/https://themewagon.com" target="_blank">ThemeWagon</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

        </p>
      </div>
    </div>
  </footer>


  <!-- Back to top -->
  <div class="btn-back-to-top" id="myBtn">
    <span class="symbol-btn-back-to-top">
      <i class="zmdi zmdi-chevron-up"></i>
    </span>
  </div>



  <!--===============================================================================================-->
  <script src="<?= base_url() ?>/template3/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="<?= base_url() ?>/template3/vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script src="<?= base_url() ?>/template3/vendor/bootstrap/js/popper.js"></script>
  <script src="<?= base_url() ?>/template3/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="<?= base_url() ?>/template3/vendor/select2/select2.min.js"></script>
  <script>
    $(".js-select2").each(function() {
      $(this).select2({
        minimumResultsForSearch: 20,
        dropdownParent: $(this).next('.dropDownSelect2')
      });
    })
  </script>
  <!--===============================================================================================-->
  <script src="<?= base_url() ?>/template3/vendor/daterangepicker/moment.min.js"></script>
  <script src="<?= base_url() ?>/template3/vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
  <script src="<?= base_url() ?>/template3/vendor/slick/slick.min.js"></script>
  <script src="<?= base_url() ?>/template3/js/slick-custom.js"></script>
  <!--===============================================================================================-->
  <script src="<?= base_url() ?>/template3/vendor/parallax100/parallax100.js"></script>
  <script>
    $('.parallax100').parallax100();
  </script>
  <!--===============================================================================================-->
  <script src="<?= base_url() ?>/template3/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
  <script>
    $('.gallery-lb').each(function() { // the containers for all your galleries
      $(this).magnificPopup({
        delegate: 'a', // the selector for gallery item
        type: 'image',
        gallery: {
          enabled: true
        },
        mainClass: 'mfp-fade'
      });
    });
  </script>
  <!--===============================================================================================-->
  <script src="<?= base_url() ?>/template3/vendor/isotope/isotope.pkgd.min.js"></script>
  <!--===============================================================================================-->
  <script src="<?= base_url() ?>/template3/vendor/sweetalert/sweetalert.min.js"></script>
  <script>
    $('.js-addwish-b2').on('click', function(e) {
      e.preventDefault();
    });

    $('.js-addwish-b2').each(function() {
      var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
      $(this).on('click', function() {
        swal(nameProduct, "is added to wishlist !", "success");

        $(this).addClass('js-addedwish-b2');
        $(this).off('click');
      });
    });

    $('.js-addwish-detail').each(function() {
      var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

      $(this).on('click', function() {
        swal(nameProduct, "is added to wishlist !", "success");

        $(this).addClass('js-addedwish-detail');
        $(this).off('click');
      });
    });

    /*---------------------------------------------*/

    $('.js-addcart-detail').each(function() {
      var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
      $(this).on('click', function() {
        swal(nameProduct, "is added to cart !", "success");
      });
    });
  </script>
  <!--===============================================================================================-->
  <script src="<?= base_url() ?>/template3/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script>
    $('.js-pscroll').each(function() {
      $(this).css('position', 'relative');
      $(this).css('overflow', 'hidden');
      var ps = new PerfectScrollbar(this, {
        wheelSpeed: 1,
        scrollingThreshold: 1000,
        wheelPropagation: false,
      });

      $(window).on('resize', function() {
        ps.update();
      })
    });
  </script>
  <!--===============================================================================================-->
  <script src="<?= base_url() ?>/template3/js/main.js"></script>

</body>

</html>