<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use Myth\Auth\Models\UserModel;
use Myth\Auth\Password;

class Akun extends BaseController
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

  public function akun_baru()
  {
    $data_user = $this->_user_model->getUser();
    // dd($data_user);
    $data = [
      "result" => $data_user
    ];

    return view('admin/akun_baru/index', $data);
  }

  public function tambah_akun()
  {
    return view('admin/akun_baru/tambah_akun');
  }

  public function save()
  {
    $this->user_myth->withGroup($this->request->getVar('role'))->save([
      'nama_depan' => $this->request->getVar('nama_depan'),
      'nama_belakang' => $this->request->getVar('nama_belakang'),
      'no_hp' => $this->request->getVar('no_hp'),
      'alamat' => $this->request->getVar('alamat'),
      'email' => $this->request->getVar('email'),
      'username' => $this->request->getVar('username'),
      'password_hash' => Password::hash("1234"),
      'active' => 1
    ]);

    session()->setFlashdata('success', 'Akun Berhasil Ditambahkan !!!');
    return redirect()->to(base_url('/akun'));
  }

  public function delete($id)
  {
    $this->usersModel->delete_akun($id);
    session()->setFlashdata('success', 'Akun Berhasil Dihapus !!!');
    return redirect()->to(base_url('/akun'));
  }

  public function reset_password($id)
  {
    $this->user_myth->save([
      'id' => $id,
      'password_hash' => Password::hash("1234"),
    ]);

    session()->setFlashdata('success', 'Passwor Berhasil Direset ke Default !!!');
    return redirect()->to(base_url('/akun'));
  }

}
