<?php

namespace App\Controllers;

use App\Models\PengaduanModel;

class Home extends BaseController
{

	protected $dbpengaduan;

	public function __construct()
	{
		$this->dbpengaduan = new PengaduanModel();
	}

	public function index()
	{
		$data = [
			'validation' => \config\Services::validation()
		];

		return view('home', $data);
	}

	public function lapor()
	{
		if (!$this->validate([
			'nik' => 'required',
			'email' => 'required',
			'phone' => 'required',
			'department' => 'required',
			'message' => 'required'
		])) {

			$validation = \Config\Services::validation();
			return redirect()->to('/#git_in_touch')->withInput()->with('validation', $validation);
		}

		$data = [
			'nik' => $this->request->getVar('nik'),
			'nama' => $this->request->getVar('nama'),
			'email' => $this->request->getVar('email'),
			'phone' => $this->request->getVar('phone'),
			'department' => $this->request->getVar('department'),
			'message' => $this->request->getVar('message')
		];
		$this->dbpengaduan->save($data);

		session()->setFlashdata('msg', 'Pengaduan berhasil di simpan');
		return redirect()->to('/#git_in_touch');
	}

	//--------------------------------------------------------------------

}
