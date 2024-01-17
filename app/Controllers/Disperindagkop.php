<?php

namespace App\Controllers;

use \App\Models\ProdukModel;
use App\Controllers\BaseController;
use App\Models\KeranjangModel;
use App\Models\PembelianModel;
use App\Models\PemesananModel;
use App\Models\UsersModel;
use \App\Models\KriteriaModel;
use App\Models\ProdukKriteriaModel;
use Myth\Auth\Models\UserModel;

class Disperindagkop extends BaseController
{
  protected $helpers = ['custom'];
  protected $produk;
  protected $pembelianModel;
  protected $pemesananModel;
  protected $keranjangModel;
  protected $userModel;
  protected $produkKriteriaModel;
  protected $KriteriaModel;
  private $_user_model;

  public function __construct()
  {
    helper('form');
    $this->produk = new ProdukModel();
    $this->pembelianModel = new PembelianModel();
    $this->pemesananModel = new PemesananModel();
    $this->keranjangModel = new KeranjangModel();
    $this->userModel = new UserModel();
    $this->produkKriteriaModel = new ProdukKriteriaModel();
    $this->KriteriaModel = new KriteriaModel();
    $this->_user_model = new UsersModel();
  }

  public function index()
  {
    $data = [
      'data_produk' => $this->produk->countAllResults(),
      'data_pesanan' => $this->pemesananModel->countAllResults(),
    ];

    return view('disperindagkop/home_disperidagkop', $data);
  }

  public function laporan_produk()
  {
    $data['produks'] = $this->produk->getAll();

    return view('disperindagkop/laporan_d_produk/index', $data);
  }

  public function laporan_ikm()
  {
    $data_user = $this->_user_model->select('email,username, gs.group_id, g.name group_name')
    ->join('auth_groups_users gs', 'users.id=gs.user_id')
    ->join('auth_groups g', 'g.id = gs.group_id')
    ->where('group_id', 2) //hanya tampilkan pengrajin;
      // ->orWhere('group_id', 3) //untuk menampilkan disperindagkop
      ->findAll();

    $data = [
      "result" => $data_user
    ];

    return view('disperindagkop/laporan_d_ikm/index', $data);
  }

  public function laporan_P_ikm()
  {
    return view('disperindagkop/laporan_p_ikm/index');
  }

  public function laporan_transaksi()
  {
    $pembelian = $this->pembelianModel
      ->join('users', 'tbl_pembelian.id_user = users.id')
      ->get()->getResultArray();
    foreach ($pembelian as &$Pembelian) {
      $Pembelian['keranjang'] = $this->keranjangModel
        ->join('tbl_produk', 'tbl_produk.id_produk = tbl_keranjang.id_produk')
        ->where('id_pembelian', $Pembelian['id_pembelian'])
        ->get()->getResultArray();
    }

    return view('disperindagkop/laporan_transaksi/index', [
      'pemesanan' => $pembelian,
    ]);
  }
}
