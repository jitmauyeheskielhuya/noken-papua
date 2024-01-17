<?php

namespace App\Models;

use CodeIgniter\Model;
use PhpParser\Node\Expr\FuncCall;

class UsersModel extends Model
{
  // nama tabel
  protected $table            = 'users';
  protected $primaryKey       = 'id';
  protected $userTimestamps   = true;
  protected $useSoftDeletes   = true;
  protected $allowedFields     = ['nama_depan', 'nama_belakang', 'no_hp', 'alamat', 'email', 'username', 'password_hash', 'active'];

  public function getUser($id = false)
  {
    if ($id === false) {
      return $this->select('users.id, nama_depan, nama_belakang, no_hp, alamat, email, username, password_hash, gs.group_id, g.name group_name')
        ->join('auth_groups_users gs', 'users.id=gs.user_id')
        ->join('auth_groups g', 'g.id = gs.group_id')
        ->findAll();
    } else {
      return $this->where(['id' => $id])->first();
    }
  }

  public function delete_akun($id)
  {
    return $this->db->table('users')->delete(array('id' => $id));
  }
}
