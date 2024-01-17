<?php

namespace App\Models;

use CodeIgniter\Model;

class KeranjangModel extends Model
{
  protected $table            = 'tbl_keranjang';
  protected $primaryKey       = 'id_keranjang';
  protected $useAutoIncrement = true;
  protected $returnType       = 'object';
  protected $useSoftDeletes   = false;
  protected $protectFields    = false;

  // Dates
  protected $useTimestamps = false;
}
