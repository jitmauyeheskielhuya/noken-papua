<?php

namespace App\Models;

use CodeIgniter\Model;

$db      = \Config\Database::connect();

class ProdukKriteriaModel extends Model
{
  protected $table      = 'tbl_kriteria_produk';
  protected $primaryKey = 'id_kriteria_produk';
  protected $allowedFields = ['id_produk', 'id_subkriteria', 'id_kriteria_produk'];
  protected $useTimestamps = false;

  public function get_kriteria_produk($id_produk)
  {
    return $this->db->table('tbl_kriteria_produk')->select('*')->join('tbl_subkriteria', 'tbl_subkriteria.id_subkriteria = tbl_kriteria_produk.id_subkriteria')->where('tbl_kriteria_produk.id_produk', $id_produk)->get()->getResultArray();
  }

  public function tambah_kriteria_produk($data)
  {
    return $this->db->table('tbl_kriteria_produk')->insert($data);
  }

  public function edit_kriteria_produk($id_kriteria_produk)
  {
    return $this->db->table('tbl_kriteria_produk')->select('*')->join('tbl_subkriteria', 'tbl_subkriteria.id_subkriteria = tbl_kriteria_produk.id_subkriteria')->where('tbl_kriteria_produk.id_kriteria_produk', $id_kriteria_produk)->get()->getRowArray();
  }

  public function update_produk_kriteria($data, $id_kriteria_produk)
  {
    return $this->db->table('tbl_kriteria_produk')->update($data, array('id_kriteria_produk' => $id_kriteria_produk));
  }

  public function delete_kriteria_produk($id_kriteria_produk)
  {
    return $this->db->table('tbl_kriteria_produk')->delete(array('id_kriteria_produk' => $id_kriteria_produk));
  }
}
