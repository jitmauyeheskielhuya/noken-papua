<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use CodeIgniter\Debug\Toolbar\Collectors\Views;
use Myth\Auth\Models\UserModel;
use Myth\Auth\Password;

class Profil extends BaseController
{
  private $_user_model;
  protected $usersModel;
  protected $user_myth;


  public function __construct()
  {
    $this->_user_model = new UsersModel();
    $this->usersModel = new UsersModel();
    $this->user_myth = new UserModel();
  }


  public function index()
  {
    $data_user = $this->_user_model->getUser(user_id());
    $data = [
      "result" => $data_user
    ];

    return view('admin/profil/edit', $data);
  }


  public function update_profil($id)
  {
    $this->_user_model->update($id, [
      'nama_depan' => $this->request->getVar('nama_depan'),
      'nama_belakang' => $this->request->getVar('nama_belakang'),
      'no_hp' => $this->request->getVar('no_hp'),
      'alamat' => $this->request->getVar('alamat'),
      'email' => $this->request->getVar('email'),
      'username' => $this->request->getVar('username'),
    ]);

    session()->setFlashdata('success', 'Berhasil Mengubah Profil !!!');
    return redirect()->to(base_url('/profil'));
  }

  public function ubahPassword()
  {
    return view('admin/profil/ubah_password');
  }

  public function update_password($id)
  {
    //validasi
    if (!$this->validate([
      'password_lama' => 'required',
      'password_baru' => 'required',
      'konfirm_password' => 'required|matches[password_baru]',
    ])) {
      return redirect()->to('password/')->withInput();
    }

    $this->_user_model->update($id, [
      'id' => $id,
      'password_hash' => Password::hash($this->request->getVar('password_baru')),
    ]);

    session()->setFlashdata('success', 'Berhasil Mengubah Password !!!');
    return redirect()->to(base_url('password/'));
  }
}
