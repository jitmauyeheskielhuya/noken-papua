<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;
use Myth\Auth\Config\Auth as AuthConfig;


// Create a new instance of our RouteCollection class.
$routes = Services::routes();
$routes->get('/cekmidtrans', 'Midtrans::cekmidtrans');

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('User');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


// ADMIN/Dashboard
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);

// admin/laporan akun baru
$routes->get('/akun', 'Akun::akun_baru', ['filter' => 'role:admin']);
$routes->get('/tambah_akun', 'Akun::tambah_akun', ['filter' => 'role:admin']);
$routes->post('/tambah_akun', 'Akun::save', ['filter' => 'role:admin']);
$routes->delete('delete_akun/(:any)', 'Akun::delete/$1', ['filter' => 'role:admin']);
$routes->get('delete_akun/(:any)', 'Akun::delete/$1', ['filter' => 'role:admin']);
$routes->post('/reset_password/(:num)', 'Akun::reset_password/$1', ['filter' => 'role:admin']);

$routes->get('/profil', 'Profil::index',);
$routes->post('/profil/(:num)', 'Profil::update_profil/$1');
$routes->get('/password', 'Profil::ubahPassword',);
$routes->post('password/(:num)', 'Profil::update_password/$1');

// Admin/Data Kriteria
$routes->get('/kriteria', 'Admin::kriteria', ['filter' => 'role:admin']);
$routes->get('/kriteria/index', 'Admin::kriteria', ['filter' => 'role:admin']);

$routes->get('/kriteria/tambah', 'Admin::tambah_kriteria', ['filter' => 'role:admin']);
$routes->get('/kriteria/tambah/tambah', 'Admin::tambah_kriteria', ['filter' => 'role:admin']);

$routes->post('admin/save', 'Admin::save', ['filter' => 'role:admin']);

$routes->get('/kriteria/edit/(:any)', 'Admin::edit/$1', ['filter' => 'role:admin']);

$routes->post('admin/update/(:any)', 'Admin::update/$1', ['filter' => 'role:admin']);

$routes->get('kriteria/delete/(:any)', 'Admin::delete/$1', ['filter' => 'role:admin']);




// Admin/Data Subkriteria
$routes->get('/subkriteria', 'Admin::subkriteria', ['filter' => 'role:admin']);
$routes->get('/subkriteria/subkriteria', 'Admin::subkriteria', ['filter' => 'role:admin']);

$routes->get('/subkriteria/tambah', 'Admin::tambah_subkriteria', ['filter' => 'role:admin']);
$routes->get('/subkriteria/tambah/tambah', 'Admin::tambah_subkriteria', ['filter' => 'role:admin']);

$routes->post('admin/save_subkriteria', 'Admin::save_subkriteria', ['filter' => 'role:admin']);

$routes->get('/subkriteria/edit/(:any)', 'Admin::edit_subkriteria/$1', ['filter' => 'role:admin']);

$routes->post('admin/update_subkriteria/(:any)', 'Admin::update_subkriteria/$1', ['filter' => 'role:admin']);

$routes->get('subkriteria/delete_subkriteria/(:any)', 'Admin::delete_subkriteria/$1', ['filter' => 'role:admin']);


// Pengrajin/Dashboard
$routes->get('/pengrajin', 'Pengrajin::index', ['filter' => 'role:pengrajin']);
$routes->get('/pengrajin/index', 'Pengrajin::index', ['filter' => 'role:pengrajin']);

// Pengrajin/Data Produk
$routes->get('/produk', 'Pengrajin::produk', ['filter' => 'role:pengrajin']);
$routes->get('/produk/produk', 'Pengrajin::produk', ['filter' => 'role:pengrajin']);
$routes->get('/produk/tambah', 'Pengrajin::tambah_produk', ['filter' => 'role:pengrajin']);
$routes->get('/produk/tambah/tambah', 'Pengrajin::tambah_produk', ['filter' => 'role:pengrajin']);
$routes->post('pengrajin/save', 'Pengrajin::save', ['filter' => 'role:pengrajin']);
$routes->get('/produk/edit_produk/(:any)', 'Pengrajin::edit_produk/$1', ['filter' => 'role:pengrajin']);
$routes->post('pengrajin/update_produk/(:any)', 'Pengrajin::update_produk/$1', ['filter' => 'role:pengrajin']);
$routes->get('produk/delete_produk/(:any)', 'Pengrajin::delete_produk/$1', ['filter' => 'role:pengrajin']);


// Pengrajin/Data Produk/Kriteria
$routes->get('produk/kriteria_produk/(:any)', 'Pengrajin::kriteria_produk/$1', ['filter' => 'role:pengrajin']);
$routes->post('produk/kriteria_produk/(:any)', 'Pengrajin::kriteria_produk/$1', ['filter' => 'role:pengrajin']);
$routes->get('produk/tambah_kriteria_produk/(:any)', 'Pengrajin::tambah_kriteria_produk/$1', ['filter' => 'role:pengrajin']);
$routes->post('produk/save_kriteria_produk', 'Pengrajin::save_kriteria_produk', ['filter' => 'role:pengrajin']);
$routes->get('produk/edit_kriteria_produk/(:any)', 'Pengrajin::edit_kriteria_produk/$1', ['filter' => 'role:pengrajin']);
$routes->post('produk/edit_subkriteria_produk', 'Pengrajin::edit_subkriteria_produk', ['filter' => 'role:pengrajin']);
$routes->post('produk/update_kriteria_produk', 'Pengrajin::update_kriteria_produk', ['filter' => 'role:pengrajin']);
$routes->get('produk/update_kriteria_produk', 'Pengrajin::update_kriteria_produk', ['filter' => 'role:pengrajin']);
$routes->get('produk/delete_kriteria_produk/(:any)', 'Pengrajin::delete_kriteria_produk/$1', ['filter' => 'role:pengrajin']);
$routes->post('produk/subkriteria_produk', 'Pengrajin::subkriteria_produk', ['filter' => 'role:pengrajin']);





// Pengrajin/Data Detail Produk
$routes->get('/detail_produk', 'Pengrajin::detail_produk', ['filter' => 'role:pengrajin']);
$routes->get('/detail_produk/detail_produk', 'Pengrajin::detail_produk', ['filter' => 'role:pengrajin']);

// Pengrajin/Data Pemesanan Produk
$routes->get('/pemesanan_produk', 'Pengrajin::pemesanan_produk', ['filter' => 'role:pengrajin']);
$routes->get('/pemesanan_produk/pemesanan_produk', 'Pengrajin::pemesanan_produk', ['filter' => 'role:pengrajin']);

// Pengrajin/Data Perkembangan IKM
$routes->get('/perkembangan_ikm', 'Pengrajin::perkembangan_ikm', ['filter' => 'role:pengrajin']);
$routes->get('/perkembangan_ikm/perkembangan_ikm', 'Pengrajin::perkembangan_ikm', ['filter' => 'role:pengrajin']);


// Disperindagop/Dashboard
$routes->get('/disperindagkop', 'Disperindagkop::index', ['filter' => 'role:disperindagkop']);
$routes->get('/disperindagkop/index', 'Disperindagkop::index', ['filter' => 'role:disperindagkop']);

// Disperindagop/Laporan Data Produk
$routes->get('/laporan_produk', 'Disperindagkop::laporan_produk', ['filter' => 'role:disperindagkop']);
$routes->get('/laporan_produk/laporan_produk', 'Disperindagkop::laporan_produk', ['filter' => 'role:disperindagkop']);

// Disperindagop/Laporan Data IKM
$routes->get('/laporan_ikm', 'Disperindagkop::laporan_ikm', ['filter' => 'role:disperindagkop']);
$routes->get('/laporan_ikm/laporan_ikm', 'Disperindagkop::laporan_ikm', ['filter' => 'role:disperindagkop']);

// Disperindagop/Laporan Perkembangan IKM
$routes->get('/laporan_P_ikm', 'Disperindagkop::laporan_P_ikm', ['filter' => 'role:disperindagkop']);
$routes->get('/laporan_P_ikm/laporan_P_ikm', 'Disperindagkop::laporan_P_ikm', ['filter' => 'role:disperindagkop']);

// Disperindagop/Laporan Perkembangan IKM
$routes->get('/laporan_transaksi', 'Disperindagkop::laporan_transaksi', ['filter' => 'role:disperindagkop']);
$routes->get('/laporan_transaksi/laporan_transaksi', 'Disperindagkop::laporan_transaksi', ['filter' => 'role:disperindagkop']);

// Pelanggan/Dasboard Pelanggan
$routes->get('/pelanggan', 'Pelanggan::layout_pelanggan', ['filter' => 'role:pelanggan']);
$routes->get('/pelanggan/layout_pelanggan', 'Pelanggan::layout_pelanggan', ['filter' => 'role:pelanggan']);

$routes->get('pelanggan/cek', 'Pelanggan::cek', ['filter' => 'role:pelanggan']);

$routes->post('/pelanggan/add', 'Pelanggan::add', ['filter' => 'role:pelanggan']);

$routes->get('/pelanggan/clear', 'Pelanggan::clear', ['filter' => 'role:pelanggan']);

$routes->get('/pelanggan/cart', 'Pelanggan::cart', ['filter' => 'role:pelanggan']);

$routes->post('/pelanggan/cart', 'Pelanggan::cart', ['filter' => 'role:pelanggan']);

$routes->get('/pelanggan/delete/(:any)', 'Pelanggan::delete/$1', ['filter' => 'role:pelanggan']);

// $routes->get('/pelanggan/cart', 'Pelanggan::transaksi', ['filter' => 'role:pelanggan']);

$routes->get('/pelanggan/pembelian', 'Pelanggan::pembelian', ['filter' => 'role:pelanggan']);

$routes->post('/pelanggan/proses', 'Pelanggan::proses', ['filter' => 'role:pelanggan']);

$routes->get('/pelanggan/transaksi', 'Pelanggan::transaksi', ['filter' => 'role:pelanggan']);

$routes->get('/pelanggan/ongkir', 'Ongkir::index', ['filter' => 'role:pelanggan']);

$routes->post('/pelanggan/ongkir', 'Pelanggan::ongkir', ['filter' => 'role:pelanggan']);

$routes->post('ongkir/cekongkir', 'Ongkir::cekongkir', ['filter' => 'role:pelanggan']);

$routes->get('/pelanggan/paket', 'Paket::index', ['filter' => 'role:pelanggan']);

$routes->get('/pelanggan/dataprov', 'Paket::dataprov', ['filter' => 'role:pelanggan']);
$routes->post('/pelanggan/dataprov', 'Paket::dataprov', ['filter' => 'role:pelanggan']);

$routes->get('/pelanggan/datadistrik', 'Paket::distrik', ['filter' => 'role:pelanggan']);
$routes->post('/pelanggan/datadistrik', 'Paket::distrik', ['filter' => 'role:pelanggan']);

$routes->post('/pelanggan/dataekspedisi', 'Paket::ekspedisi', ['filter' => 'role:pelanggan']);

$routes->get('/pelanggan/datapaket', 'Paket::datapaket', ['filter' => 'role:pelanggan']);
$routes->post('/pelanggan/datapaket', 'Paket::datapaket', ['filter' => 'role:pelanggan']);

$routes->post('pelanggan/save1/(:any)', 'Pelanggan::save1/$1', ['filter' => 'role:pelanggan']);
$routes->post('pelanggan/save1', 'Pelanggan::save1', ['filter' => 'role:pelanggan']);
$routes->post('pelanggan/savetotal', 'Pelanggan::savetotal', ['filter' => 'role:pelanggan']);

$routes->get('/pelanggan/smart', 'Pelanggan::smart', ['filter' => 'role:pelanggan']);
$routes->post('/pelanggan/smart', 'Pelanggan::smart', ['filter' => 'role:pelanggan']);

$routes->post('/pelanggan/hitung_smart', 'Pelanggan::hitung_smart', ['filter' => 'role:pelanggan']);


$routes->get('/', 'user::index');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

// Myth:Auth routes file.
$routes->group('', ['namespace' => 'App\Controllers'], static function ($routes) {
    // Load the reserved routes from Auth.php
    $config         = config(AuthConfig::class);
    $reservedRoutes = $config->reservedRoutes;

    // Login/out
    $routes->get($reservedRoutes['login'], 'AuthController::login', ['as' => $reservedRoutes['login']]);
    $routes->post($reservedRoutes['login'], 'AuthController::attemptLogin');
    $routes->get($reservedRoutes['logout'], 'AuthController::logout');

    // Registration
    $routes->get($reservedRoutes['register'], 'AuthController::register', ['as' => $reservedRoutes['register']]);
    $routes->post($reservedRoutes['register'], 'AuthController::attemptRegister');

    // Activation
    $routes->get($reservedRoutes['activate-account'], 'AuthController::activateAccount', ['as' => $reservedRoutes['activate-account']]);
    $routes->get($reservedRoutes['resend-activate-account'], 'AuthController::resendActivateAccount', ['as' => $reservedRoutes['resend-activate-account']]);

    // Forgot/Resets
    $routes->get($reservedRoutes['forgot'], 'AuthController::forgotPassword', ['as' => $reservedRoutes['forgot']]);
    $routes->post($reservedRoutes['forgot'], 'AuthController::attemptForgot');
    $routes->get($reservedRoutes['reset-password'], 'AuthController::resetPassword', ['as' => $reservedRoutes['reset-password']]);
    $routes->post($reservedRoutes['reset-password'], 'AuthController::attemptReset');
});
