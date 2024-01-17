<?php

namespace App\Controllers;

use \CodeIgniter\Controller;
use \App\Models\KriteriaModel;
use \App\Models\SubkriteriaModel;
use App\Controllers\BaseController;
use Myth\Auth\Models\UserModel;

class Admin extends BaseController
{
  protected $KriteriaModel;
  protected $SubkriteriaModel;
  protected $userModel;
  
  public function __construct()
  {
    $this->KriteriaModel = new KriteriaModel();
    $this->SubkriteriaModel = new SubkriteriaModel();
    $this->userModel = new UserModel();
  }


  // Dashboard
  public function index()
  {
    $data = [
      'akun_baru' => $this->userModel->countAllResults()
    ];

    return view('admin/home_admin', $data);
  }


  // Kriteria
  public function kriteria()
  {
    $data = [
      'kriteria' => $this->KriteriaModel->findAll(),
    ];
    return view('admin/kriteria/index', $data);
  }

  public function tambah_kriteria()
  {

    return view('admin/kriteria/tambah');
  }

  public function save()
  {
    $data = [
      'nama_kriteria' => $this->request->getPost('nama_kriteria'),
      'bobot' => $this->request->getPost('bobot'),
    ];
    $this->KriteriaModel->tambah_kriteria($data);
    session()->setFlashdata('success', 'Data Berhasil Ditambahkan');
    return redirect()->to(base_url('kriteria'));
  }

  public function edit($id_kriteria)
  {
    $data = [
      'kriteria' => $this->KriteriaModel->edit_kriteria($id_kriteria),
      'bobot' => $this->KriteriaModel->edit_kriteria($id_kriteria),
    ];
    return view('admin/kriteria/edit', $data);
  }

  public function update($id_kriteria)
  {
    $data = [
      'nama_kriteria' => $this->request->getPost('nama_kriteria'),
      'bobot' => $this->request->getPost('bobot'),
    ];
    $this->KriteriaModel->update_kriteria($data, $id_kriteria);
    session()->setFlashdata('success', 'Data Berhasil Diupdate !!!');
    return redirect()->to(base_url('kriteria'));
  }

  public function delete($id_kriteria)
  {
    $this->KriteriaModel->delete_kriteria($id_kriteria);
    session()->setFlashdata('success', 'Data Berhasil Dihapus !!!');
    return redirect()->to(base_url('kriteria'));
  }



  // Subkriteria
  public function subkriteria()
  {
    $data = [
      'subkriteria' => $this->SubkriteriaModel->get_subkriteria_saja(),
    ];
    return view('admin/subkriteria/index', $data);
  }

  public function tambah_subkriteria()
  {
    $data = [
      'kriteria' => $this->KriteriaModel->get_kriteria(),
    ];

    return view('admin/subkriteria/tambah', $data);
  }

  public function save_subkriteria()
  {
    $data = [
      'id_kriteria' => $this->request->getPost('id_kriteria'),
      'nama_subkriteria' => $this->request->getPost('nama_subkriteria'),
      'nilai_subkriteria' => $this->request->getPost('nilai_subkriteria'),
    ];
    $this->SubkriteriaModel->tambah_subkriteria($data);
    session()->setFlashdata('success', 'Data Berhasil Ditambahkan');
    return redirect()->to(base_url('subkriteria'));
  }

  public function edit_subkriteria($id_subkriteria)
  {
    $data = [
      'subkriteria' => $this->SubkriteriaModel->find($id_subkriteria),
      'kriteria' => $this->KriteriaModel->get_kriteria(),
    ];
    return view('admin/subkriteria/edit', $data);
  }

  public function update_subkriteria($id_subkriteria)
  {
    $data = [
      'id_kriteria' => $this->request->getPost('id_kriteria'),
      'nilai_subkriteria' => $this->request->getPost('nilai_subkriteria'),
      'nama_subkriteria' => $this->request->getPost('nama_subkriteria'),

    ];
    $this->SubkriteriaModel->update_subkriteria($data, $id_subkriteria);
    session()->setFlashdata('success', 'Data Berhasil Diupdate !!!');
    return redirect()->to(base_url('subkriteria'));
  }

  public function delete_subkriteria($id_subkriteria)
  {
    $this->SubkriteriaModel->delete_subkriteria($id_subkriteria);
    session()->setFlashdata('success', 'Data Berhasil Dihapus !!!');
    return redirect()->to(base_url('subkriteria'));
  }
}
