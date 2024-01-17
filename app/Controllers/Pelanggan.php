<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\KeranjangModel;
use App\Models\ProdukModel;
use App\Models\PembelianModel;
// use CodeIgniter\I18n\Time;
use CodeIgniter\HTTP\IncomingRequest;
use \App\Models\KriteriaModel;
use \App\Models\SubkriteriaModel;

class Pelanggan extends BaseController
{
  protected $BarangModel;
  protected $produkModel;
  protected $pembelianModel;
  protected $KriteriaModel;
  protected $SubkriteriaModel;
  protected $KeranjangModel;

  public $api_key = "bfe7d1ce6c12d2dde8e8a2df42dbcb2f";

  public function __construct()
  {
    $this->BarangModel = new BarangModel();
    $this->produkModel = new ProdukModel();
    $this->pembelianModel = new PembelianModel();
    $this->KriteriaModel = new KriteriaModel();
    $this->SubkriteriaModel = new SubkriteriaModel();
    $this->KeranjangModel = new KeranjangModel();
    helper('number');
    helper('form');
    // Set your Merchant Server Key
    \Midtrans\Config::$serverKey = 'SB-Mid-server-yzB1hCmarPWIlsMcXVV3gMjv';
    // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    \Midtrans\Config::$isProduction = false;
    // Set sanitization on (default)
    \Midtrans\Config::$isSanitized = true;
    // Set 3DS transaction for credit card to true
    \Midtrans\Config::$is3ds = true;


    // Add new notification url(s) alongside the settings on Midtrans Dashboard Portal (MAP)
    \Midtrans\Config::$appendNotifUrl = "http://localhost:8080/pelanggan/cekmidtrans";
    // Use new notification url(s) disregarding the settings on Midtrans Dashboard Portal (MAP)
    \Midtrans\Config::$overrideNotifUrl = "http://localhost:8080/pelanggan/cekmidtrans";
  }

  public function layout_pelanggan()
  {
    $data = [
      'barang' => $this->BarangModel->get_barang(),
      'cart' => \Config\Services::cart(),
    ];

    return view('pelanggan/home_pelanggan', $data);
  }

  // crud shopping cart
  public function cek()
  {
    $cart = \Config\Services::cart();
    $response = $cart->contents();
    echo '<pre>';
    print_r($response);
    echo '</pre>';
  }

  // Insert shopping cart
  public function add()
  {
    $token = '';
    $cart = \Config\Services::cart();
    $cart->insert(array(
      'id'      => $this->request->getPost('id'),
      'qty'     => 1,
      'price'   => $this->request->getPost('price'),
      'name'    => $this->request->getPost('name'),
      'options' => array(
        'gambar' => $this->request->getPost('gambar'),
        'ukuran' => $this->request->getPost('ukuran'),
        'motif' => $this->request->getPost('motif'),
      )
    ));
    session()->setFlashdata('pesan', 'Barang Berhasil Dimasukan Keranjang !!!');
    return redirect()->to(base_url('pelanggan/cart'));
  }

  // Clear the shopping cart
  public function clear()
  {
    $cart = \Config\Services::cart();
    $cart->destroy();
  }


  public function ongkir()
  {
    $asal_kota = $this->request->getPost('asal');
    $tujuan_kota = $this->request->getPost('tujuan');
    $berat = $this->request->getPost('berat');
    $kurir = $this->request->getPost('kurir');

    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "origin=" . $asal_kota . "&destination=" . $tujuan_kota . "&weight=" . $berat . "&courier=" . $kurir,
      CURLOPT_HTTPHEADER => array(
        "content-type: application/x-www-form-urlencoded",
        "key: " . $this->api_key,
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    if ($err) {
      // echo "cURL Error #:" . $err;
      $data['hasil'] = array('error' => true);
    } else {
      // echo $response;
      $data['hasil'] = json_decode($response);
    };


    return view('pelanggan/view_cart/index', [$data]);
  }

  public function cart()
  {
    // menampilkan kota dari API RajaOngkir
    $data['token'] = null;
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.rajaongkir.com/starter/city",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "key: " . $this->api_key,
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    if ($err) {
      // echo "cURL Error #:" . $err;
      $kota = array('error' => true);
    } else {
      // echo $response;
      $kota = json_decode($response);
    };

    $cek = \Config\Services::cart();
    $cek = (count($cek->contents()));
    if ($cek == 0) {
      session()->setFlashdata('pesan', 'Data Keranjang Masih Kosong !!!');
      return redirect()->to(base_url('pelanggan'));
    }
    $data = [
      'barang' => $this->BarangModel->get_barang(),
      'cart' => \Config\Services::cart(),
      'kota' => $kota,
      'token' => null
    ];

    if (isset($_POST['submit'])) {
      $asal_kota = $this->request->getPost('asal');
      $tujuan_kota = $this->request->getPost('tujuan');
      $berat = $this->request->getPost('berat');
      $kurir = $this->request->getPost('kurir');

      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "origin=" . $asal_kota . "&destination=" . $tujuan_kota . "&weight=" . $berat . "&courier=" . $kurir,
        CURLOPT_HTTPHEADER => array(
          "content-type: application/x-www-form-urlencoded",
          "key: " . $this->api_key,
        ),
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);

      curl_close($curl);
      if ($err) {
        // echo "cURL Error #:" . $err;
        $data['hasil'] = array('error' => true);
      } else {
        // echo $response;
        $data['hasil'] = json_decode($response);
      };
    }

    if (isset($_POST['snap'])) {
      $db      = \Config\Database::connect();
      $Totalharga = $this->request->getPost('Totalharga');
      $id_order = time();
      $builder = $db->table('users');
      $builder->select('*');
      $builder->where('users.id', user()->id);
      $query = $builder->get()->getResultArray();
      $nama_depan = $query[0]['nama_depan'];
      $nama_belakang = $query[0]['nama_belakang'];
      $email = $query[0]['email'];
      $ponsel = $query[0]['no_hp'];
      $enable_payments = array('bri_va', 'bca_va');


      $item1_details = array(
        'id' => $id_order . '77',
        'price' => (int)$Totalharga,
        'quantity' => 1,
        'name' => 'Total Pembayaran',
      );

      $item_details = array($item1_details);
      $params = array(
        'transaction_details' => array(
          'order_id' => $id_order,
          'gross_amount' => (int)$Totalharga,
        ),
        'customer_details' => array(
          'first_name' => $nama_depan,
          'last_name' => $nama_belakang,
          'email' => $email,
          'phone' => $ponsel,
        ),
        // Optional
        'item_details' => $item_details,

        'enabled_payments' => $enable_payments
      );

      $snapToken = \Midtrans\Snap::getSnapToken($params);
      $token = $snapToken;
      $data = [
        // proses bukti pembelian
        'id_pembelian' => $id_order,
        'id_user' => user()->id,
        'total_harga' => $Totalharga,
        'token' => $token
      ];
      $this->pembelianModel->insert($data);

      $cart = \Config\Services::cart();
      //masukkan ke dalam tbl_keranjang
      foreach ($cart->contents() as $keranjang) {
        $this->KeranjangModel->insert([
          'id_pembelian' => $this->pembelianModel->getInsertID(),
          'id_produk' => $keranjang['id'],
          'qty' => $keranjang['qty'],
          'subtotal' => $keranjang['subtotal'],
        ]);
      }

      // $cart->destroy();
      $data = [
        'barang' => $this->BarangModel->get_barang(),
        'cart' => \Config\Services::cart(),
        'kota' => $kota,
        'token' => $token
      ];
      $cart->destroy();
      return redirect()->to('https://app.sandbox.midtrans.com/snap/v2/vtweb/' . $token);
    }


    return view('pelanggan/view_cart/index', $data);
    session()->setFlashdata('pesan', 'Brhasil Update');
    return redirect()->to(base_url('pelanggan/cart'));
  }


  public function proses()
  {
    $nama_depan = $this->request->getVar('nama_depan');
    $nama_belakang = $this->request->getVar('nama_belakang');
    $email = $this->request->getVar('email');
    $ponsel = $this->request->getVar('ponsel');
    $nominal = $this->request->getVar('nominal');
    $id_order = time();


    $params = array(
      'transaction_details' => array(
        'order_id' => $id_order,
        'gross_amount' => $nominal,
      ),
      'customer_details' => array(
        'first_name' => $nama_depan,
        'last_name' => $nama_belakang,
        'email' => $email,
        'phone' => $ponsel,
      ),
    );
    $snapToken = \Midtrans\Snap::getSnapToken($params);
    $token = $snapToken;
    $data = [
      // proses bukti pembelian
      'id_pembelian' => $id_order,
      'nama_depan' => $nama_depan,
      'nama_belakang' => $nama_belakang,
      'email' => $email,
      'ponsel' => $ponsel,
      'nominal' => $nominal,
      'token' => $token
    ];
    $this->pembelianModel->save($data);
    return redirect()->to(base_url('pelanggan/pembelian'));
  }

  public function delete($rowid)
  {
    $cart = \Config\Services::cart();
    $cart->remove($rowid);
    session()->setFlashdata('pesan', 'Barang Berhasil Di update !!!');
    return redirect()->to(base_url('pelanggan/cart'));
  }

  public function pembelian()
  {
    $pembelian = $this->pembelianModel->get_pembelian()->getResultArray();
    foreach ($pembelian as &$Pembelian) {
      $Pembelian['keranjang'] = $this->KeranjangModel
        ->join('tbl_produk', 'tbl_produk.id_produk = tbl_keranjang.id_produk')
        ->where('id_pembelian', $Pembelian['id_pembelian'])
        ->get()->getResultArray();
    }

    // foreach ($hasil as $h) {
    //   $notif =  \Midtrans\Transaction::status('9cfcfbad-9df9-4256-8d4c-bea0ffbb2b38');

    // var_dump($notif);
    // $transaction_status = $notif->transaction_status;
    // $fraud = $notif->fraud_status;
    // }


    // $status = \Midtrans\Transaction::status('9cfcfbad-9df9-4256-8d4c-bea0ffbb2b38');
    // var_dump($status);



    $data = [
      'barang' => $this->BarangModel->get_barang(),
      'cart' => \Config\Services::cart(),
      'tagihan' => $pembelian,
    ];


    return view('pelanggan/view_cart/pembelian', $data);
  }



  public function transaksi()
  {
    // // Set your Merchant Server Key
    // \Midtrans\Config::$serverKey = 'SB-Mid-server-yzB1hCmarPWIlsMcXVV3gMjv';
    // // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    // \Midtrans\Config::$isProduction = false;
    // // Set sanitization on (default)
    // \Midtrans\Config::$isSanitized = true;
    // // Set 3DS transaction for credit card to true
    // \Midtrans\Config::$is3ds = true;

    // $params = [
    //   'transaction_details' => array(
    //     'order_id' => rand(),
    //     'gross_amount' => 500000,
    //   )
    // ];

    // $data = [
    //   'snapToken' => \Midtrans\Snap::getSnapToken($params)
    // ];

    // return view('pelanggan/view_cart/transaksi', $data);
  }

  // public function save2()
  // {
  //   $validation = \Config\Services::validation();

  //   $data = [
  //     'Totalharga' => $this->request->getPost('Totalharga'),

  //   ];
  //   return redirect()->to(base_url('/pelanggan/pembelian'));
  // }

  public function save1($id_pembelian)
  {
    $data = [
      'Totalharga' => $this->request->getPost('Totalharga'),
    ];
    // return view('/pelanggan/cart', $data);
    return redirect()->to(base_url('pelanggan/pembelian'));
  }

  public function savetotal($id_pembelian)
  {
    $validation = \Config\Services::validation();


    $data = [
      'totalharga' => $this->request->getPost('Totalharga'),
    ];

    $this->pembelianModel->update_produk($data, $id_pembelian);
    // session()->setFlashdata('success', 'Data Berhasil Diupdate !!!');
    return redirect()->to(base_url('pelanggan/pembelian'));
  }


  public function smart($sip = null, $msg = null, $barang = null)
  {
    if ($sip == null && $barang == null) {
      $barang = $this->produkModel->findAll();
    } elseif ($barang == null) {

      foreach ($sip['result_sort'] as $produk) {
        $result[] = $produk['id'];
      }

      $barang = $this->produkModel->find(array_slice($result, 0, 4));
    }

    $data = [
      'barang' => $barang,
      'cart' => \Config\Services::cart(),
      'kriteria' => $this->KriteriaModel->get_kriteria(),
      'subkriteria' => $this->SubkriteriaModel->get_subkriteria_saja(),
      'perhitungan' => $sip,
      'pesan' => $msg
    ];

    return view('pelanggan/smart', $data);
  }

  /**
   * Metode SMART (Simple Multi Attribute Rating Technique)
   *
   * Dataset adalah data alternatif kuantitatif dalam bentuk array.
   * ex. $dataset = [
   *          [25000, 153, 15.3, 250],   #a1
   *          [33000, 177, 12.3, 380],   #a2
   *          [40000, 199, 11.1, 480]    #a3
   * ];
   *
   * Grades digunakan untuk menghitung bobot.
   * ex. $grades = [9, 5, 7, 6];
   *
   * Criterion Type: 'benefit' = 1 or 'cost' = 0.
   * ex. $criterion_type = [0, 1, 0, 1];
   */
  public function metode_smart(array $alternatif, array $dataset, array $grades, array $criterion_type)
  {
    // normalisasi bobot
    foreach ($grades as $bobot) {
      $w[] = $bobot / array_sum($grades);
    }

    //max & min value
    for ($i = 0; $i < count($grades); $i++) {
      $max[] = max(array_column($dataset, $i));
      $min[] = min(array_column($dataset, $i));
    }

    for ($i = 0; $i < count($dataset); $i++) {
      for ($j = 0; $j < count($dataset[$i]); $j++) {
        //utility
        if (
          $min[$j] - $max[$j] == 0
        ) {
          $u = 0;
        } else {
          if ($criterion_type[$j] == 0) {
            $u = ($max[$j] - $dataset[$i][$j]) / ($max[$j] - $min[$j]);
          } else {
            $u = ($dataset[$i][$j] - $min[$j]) / ($max[$j] - $min[$j]);
          }
        }

        $utility[$i][] = $u;

        //rangking
        $uw[$i][] = $u * $w[$j];
      }


      $result[$i]['id'] = $alternatif['id_produk'][$i];
      $result[$i]['alternatif'] = $alternatif['gambar_noken'][$i];
      $result[$i]['value'] = array_sum($uw[$i]);
    }

    //urutkan
    usort($result, fn ($a, $b) => $b['value'] <=> $a['value']);

    return [
      'bobot' => $w,
      'result_sort' => $result,
      'utility' => $utility,
      'result' => $uw,
      'dataset' => $dataset,
    ];
  }

  public function hitung_smart()
  {
    $kriteria = $this->KriteriaModel->findAll();

    //bobot
    foreach ($kriteria as $Kriteria) {
      $bobot[] = $Kriteria['normalisasi'];
    }

    //cari alternatif
    foreach ($this->produkModel->findAll() as $Produk) {
      $alternatif['id_produk'][] = $Produk['id_produk'];
    };

    foreach ($kriteria as $Kriteria) {
      $option = $this->request->getPost($Kriteria['id_kriteria']);

      if ($option) {

        $produk = $this->produkModel
          ->join('tbl_kriteria_produk', 'tbl_kriteria_produk.id_produk = tbl_produk.id_produk')
          ->join('tbl_subkriteria', 'tbl_subkriteria.id_subkriteria = tbl_kriteria_produk.id_subkriteria')
          ->where('tbl_subkriteria.id_subkriteria', $option)
          ->find($alternatif['id_produk']);

        if ($produk == null) {
          return $this->smart(null, 'produk tidak ditemukan');
        }

        $alternatif = [];

        foreach ($produk as $record) {
          $alternatif['id_produk'][] = $record['id_produk'];
          $alternatif['gambar_noken'][] = $record['gambar_noken'];
        }
      }
    }

    //jika hanya pencarian biasa
    if ($this->request->getPost('type') == 'cari') {
      return $this->smart(null, null, $this->produkModel->find($alternatif['id_produk']));
    }

    //dataset
    $i = 0;
    foreach ($produk as $dataset_produk) {
      foreach ($kriteria as $Kriteria) {
        $nilaisubkriteria = $this->produkModel
          ->join('tbl_kriteria_produk', 'tbl_kriteria_produk.id_produk = tbl_produk.id_produk')
          ->join('tbl_subkriteria', 'tbl_subkriteria.id_subkriteria = tbl_kriteria_produk.id_subkriteria')
          ->where('id_kriteria', $Kriteria['id_kriteria'])
          ->find($dataset_produk['id_produk']);
        if (isset($nilaisubkriteria['nilai_subkriteria'])) {
          $dataset[$i][] = $nilaisubkriteria['nilai_subkriteria'];
        }
      }
      $i++;
    }

    $result = $this->metode_smart($alternatif, $dataset, $bobot, [1, 1, 1, 1]);

    return $this->smart($result);
  }


  public function cekmidtrans()
  {
  }
}
