<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\PengaduanModel;

class Admin extends BaseController
{
    protected $dbusers;
    protected $dbpengaduan;

    public function __construct()
    {
        $this->dbusers = new AdminModel();
        $this->dbpengaduan = new PengaduanModel();
    }

    public function index()
    {

        $data = [
            'validation' => \config\Services::validation()
        ];

        return view('admin/home', $data);
    }

    public function login()
    {

        if (!$this->validate([
            'email' => 'required',
            'passwd' => 'required'
        ])) {

            $validation = \Config\Services::validation();
            return redirect()->to('/admin')->withInput()->with('validation', $validation);
        }

        $email = $this->request->getVar('email');
        $passwd = $this->request->getVar('passwd');

        $data = $this->dbusers->where('nik', $email)->first();

        if ($data) {
            $pass = $data['passwd'];
            if ($passwd == $pass) {
                $ses_data = [
                    'nik'       => $data['nik'],
                    'isadmin'    => $data['isadmin'],
                    'department'    => $data['department'],
                    'logged_in' => TRUE
                ];
                session()->set($ses_data);
                return redirect()->to('/admin/dashboard');
            } else {
                session()->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/admin');
            }
        } else {
            session()->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/admin');
        }
    }

    public function logout()
    {
        session_destroy();
        return redirect()->to('/admin');
    }

    public function dashboard()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/admin');
        }

        return view('admin/dashboard');
    }

    public function pengaduan()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/admin');
        }

        $isadmin = session()->get('isadmin');

        if ($isadmin == '1') {
            $department = 'Semua';
            $pengaduan = $this->dbpengaduan->findAll();
        } else {
            $department = session()->get('department');
            $pengaduan = $this->dbpengaduan->where('department', $department)->find();
        }

        $data = [
            'department' => $department,
            'pengaduan' => $pengaduan
        ];

        return view('admin/pengaduan', $data);
    }
}
