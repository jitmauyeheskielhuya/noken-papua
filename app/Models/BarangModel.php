<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
  protected $table = 'tbl_produk';

  public function get_barang($keyword = null)
  {
    return $this->findAll();
  }
}
