<?php

namespace App\Controllers;

use \CodeIgniter\Controller;
use \App\Models\ProdukModel;
use App\Controllers\BaseController;
use App\Models\KeranjangModel;
use App\Models\PembelianModel;
use App\Models\PemesananModel;
use App\Models\UsersModel;
use \App\Models\KriteriaModel;
use \App\Models\SubkriteriaModel;
use App\Models\ProdukKriteriaModel;


class Pengrajin extends BaseController
{
  protected $ProdukModal;
  protected $pembelianModel;
  protected $pemesananModel;
  protected $userModel;
  protected $KeranjangModel;
  protected $produkKriteriaModel;
  protected $KriteriaModel;
  protected $SubkriteriaModel;

  public function __construct()
  {
    helper('form');
    $this->ProdukModal = new ProdukModel();
    $this->pembelianModel = new PembelianModel();
    $this->pemesananModel = new PemesananModel();
    $this->KeranjangModel = new KeranjangModel();
    $this->userModel = new UsersModel();
    $this->produkKriteriaModel = new ProdukKriteriaModel();
    $this->KriteriaModel = new KriteriaModel();
    $this->SubkriteriaModel = new SubkriteriaModel();
  }


  public function index()
  {
    $data = [
      'data_produk' => $this->ProdukModal->join('users', 'users.id = tbl_produk.id_pengrajin')->where('users.id', user()->id)->countAllResults(),
      'data_pesanan' => $this->pemesananModel->countAllResults(),
    ];

    return view('pengrajin/home_pengrajin', $data);
  }

  public function produk()
  {
    $data = [
      'produk' => $this->ProdukModal->get_produk(),
    ];
    return view('pengrajin/produk/index', $data);
  }

  public function tambah_produk()
  {
    return view('pengrajin/produk/tambah');
  }

  public function save()
  {
    $validation = \Config\Services::validation();
    // mengambil file upload
    $image = $this->request->getFile('gambar_noken');
    // rendom file
    $name = $image->getRandomName();

    $data = [
      'harga_noken' => $this->request->getPost('harga_noken'),
      'ukuran_noken' => $this->request->getPost('ukuran_noken'),
      'motif_noken' => $this->request->getPost('motif_noken'),
      'jenis_noken' => $this->request->getPost('jenis_noken'),
      'berat_noken' => $this->request->getPost('berat_noken'),
      'id_pengrajin' => user()->id,
      'lokasi_penjualan' => $this->request->getPost('lokasi_penjualan'),
      'gambar_noken' => $name,
      'tgl_daftar' => $this->request->getPost('tgl_daftar'),
    ];

    if ($validation->run($data, 'produk') == false) {
      session()->setFlashdata('inputs', $this->request->getPost());
      session()->setFlashdata('errors', $validation->getErrors());
      return redirect()->to(base_url('produk/tambah'));
    } else {
      $image->move(FCPATH . '/gambar_noken', $name);
      $this->ProdukModal->tambah_produk($data);
      session()->setFlashdata('success', 'Data Berhasil Ditambahkan');
      return redirect()->to(base_url('produk'));
    }
  }

  public function edit_produk($id_produk)
  {
    $data = [
      'produk' => $this->ProdukModal->edit_produk($id_produk),
    ];
    return view('pengrajin/produk/edit', $data);
  }

  public function update_produk($id_produk)
  {
    $validation = \Config\Services::validation();


    $data = [
      'harga_noken' => $this->request->getPost('harga_noken'),
      'ukuran_noken' => $this->request->getPost('ukuran_noken'),
      'motif_noken' => $this->request->getPost('motif_noken'),
      'jenis_noken' => $this->request->getPost('jenis_noken'),
      // 'nama_pengrajin' => $this->request->getPost('nama_pengrajin'),
      'lokasi_penjualan' => $this->request->getPost('lokasi_penjualan'),
      // 'gambar_noken' => $this->request->getPost('gambar_noken'),
      'tgl_daftar' => $this->request->getPost('tgl_daftar'),
    ];

    // mengambil file upload
    $image = $this->request->getFile('gambar_noken');
    // rendom file
    if ($image->getName() != '') {
      $name = $image->getRandomName();
      $image->move(FCPATH . '/gambar_noken', $name);
      $data['gambar_noken'] = $name;
    }

    $this->ProdukModal->update_produk($data, $id_produk);
    session()->setFlashdata('success', 'Data Berhasil Diupdate !!!');
    return redirect()->to(base_url('produk'));
  }



  public function detail_produk()
  {
    return view('pengrajin/detail_produk/index');
  }


  public function pemesanan_produk()
  {
    $pembelian = $this->pembelianModel
      ->join('users', 'tbl_pembelian.id_user = users.id')
      ->join('tbl_keranjang', 'id_pembelian')
      ->join('tbl_produk', 'id_produk')
      ->where('id_pengrajin', user_id())
      ->groupBy('id_pembelian')
      ->get()->getResultArray();
    foreach ($pembelian as &$Pembelian) {
      $keranjang = $this->KeranjangModel
        ->join('tbl_produk', 'tbl_produk.id_produk = tbl_keranjang.id_produk')
        ->where('id_pembelian', $Pembelian['id_pembelian'])
        ->where('id_pengrajin', user_id())
        ->get()->getResultArray();

      $Pembelian['keranjang'] = $keranjang;

      $total = 0;
      foreach ($keranjang as $Keranjang) {
        $total += $Keranjang['subtotal'];
      }

      $Pembelian['total_harga_produk'] = $total;
    }

    return view('pengrajin/pemesanan_produk/index', ['pemesanan' => $pembelian]);
  }

  public function perkembangan_ikm()
  {
    return view('pengrajin/perkembangan_ikm/index');
  }

  public function delete_produk($id_produk)
  {
    $this->ProdukModal->delete_produk($id_produk);
    session()->setFlashdata('success', 'Data Berhasil Dihapus !!!');
    return redirect()->to(base_url('produk'));
  }





  // Kriteria
  public function kriteria_produk($id_produk)
  {
    $data = [
      'kriteria_produk' => $this->produkKriteriaModel
        ->join('tbl_subkriteria', 'tbl_subkriteria.id_subkriteria = tbl_kriteria_produk.id_subkriteria')
        ->join('tbl_kriteria', 'tbl_kriteria.id_kriteria = tbl_subkriteria.id_kriteria')
        ->where('tbl_kriteria_produk.id_produk', $id_produk)
        ->find(),
      'produk' => $this->ProdukModal->edit_produk($id_produk),
    ];

    return view('pengrajin/kriteria_produk/index', $data);
  }

  public function tambah_kriteria_produk($id_produk)
  {
    $data = [
      'kriteria' => $this->KriteriaModel->get_kriteria(),
      'subkriteria' => $this->SubkriteriaModel->findAll(),
      'id_produk' => $id_produk
    ];
    return view('pengrajin/kriteria_produk/tambah', $data);
  }

  public function subkriteria_produk()
  {
    $data = [
      'subkriteria' => $this->SubkriteriaModel->where('id_kriteria', $this->request->getPost('id_kriteria'))->find(),
      'id_produk' => $this->request->getPost('id_produk')
    ];

    return view('pengrajin/kriteria_produk/subkriteria', $data);
  }

  public function save_kriteria_produk()
  {
    $id = $this->request->getPost('id_produk');
    $data = [
      'id_subkriteria' => $this->request->getPost('id_subkriteria'),
      'id_produk' => $this->request->getPost('id_produk'),
    ];
    $this->produkKriteriaModel->tambah_kriteria_produk($data);
    session()->setFlashdata('success', 'Data Berhasil Ditambahkan');
    return redirect()->to(base_url('/produk/tambah_kriteria_produk/' . $id));
  }


  public function edit_kriteria_produk($id_kriteria_produk)
  {
    $kriteria = $this->produkKriteriaModel
      ->join('tbl_subkriteria', 'id_subkriteria')
      ->find($id_kriteria_produk);

    $data = [
      'id_kriteria_produk' => $id_kriteria_produk,
      'id_produk' => $kriteria['id_produk'],
      'id_subkriteria' => $kriteria['id_subkriteria'],
      'subkriteria' => $this->SubkriteriaModel->where('id_kriteria', $kriteria['id_kriteria'])->find(),
    ];

    return view('pengrajin/kriteria_produk/edit_subkriteria', $data);
  }

  public function update_kriteria_produk()
  {

    $data = $this->request->getPost();

    if ($this->produkKriteriaModel->save($data))
    session()->setFlashdata('success', 'Data Berhasil Disimpan');

    return redirect()->to(base_url('produk/kriteria_produk/' . $data['id_produk']));
  }

  public function delete_kriteria_produk($id_kriteria_produk)
  {
    $data = $this->produkKriteriaModel->edit_kriteria_produk($id_kriteria_produk);
    $id_produk = $data['id_produk'];
    $this->produkKriteriaModel->delete_kriteria_produk($id_kriteria_produk);
    session()->setFlashdata('success', 'Data Berhasil Dihapus !!!');
    return redirect()->to(base_url('produk/kriteria_produk/' . $id_produk));
  }
}
