<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\PengaduanModel;
use App\Models\dinasModel;
use App\Models\komentarModel;
use CodeIgniter\I18n\Time;

class Admin extends BaseController
{
    protected $dbusers;
    protected $dbpengaduan;
    protected $dbdinas;

    public function __construct()
    {
        $this->dbusers = new AdminModel();
        $this->dbpengaduan = new PengaduanModel();
        $this->dbdinas = new dinasModel();
        $this->dbkomentar = new komentarModel();
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
            'nik' => 'required',
            'passwd' => 'required'
        ])) {
            return redirect()->to('/admin')->withInput();
        }

        $nik = $this->request->getVar('nik');
        $passwd = $this->request->getVar('passwd');

        $data = $this->dbusers->where('nik', $nik)->first();

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
                return redirect()->to('/admin/pengaduan/diterima');
            } else {
                session()->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/admin');
            }
        } else {
            session()->setFlashdata('msg', 'NIK not Found');
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

    public function pengaduan($status = false)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/admin');
        }

        $isadmin = session()->get('isadmin');

        if ($isadmin == '1') {
            $department = 'Admin';
            if ($status == false) {
                $pengaduan = $this->dbpengaduan->OrderBy('status')->findAll();
            } else {
                $pengaduan = $this->dbpengaduan->where('status', $status)->OrderBy('status')->findAll();
            }
        } else {
            $department = session()->get('department');
            if ($status == false) {
                $pengaduan = $this->dbpengaduan->where(['department' => $department, 'status <> ' => 'Diterima'])->OrderBy('status')->findAll();
            } else {
                $pengaduan = $this->dbpengaduan->where(['department' => $department, 'status' => $status])->OrderBy('status')->find();
            }
        }

        $dinas = $this->dbdinas->findAll();

        $data = [
            'department' => $department,
            'pengaduan' => $pengaduan,
            'dinas' => $dinas,
            'isadmin' => $isadmin,
            'status' => $status,
            'validation' => \config\Services::validation()
        ];

        return view('admin/pengaduan', $data);
    }

    public function proses()
    {

        if (!$this->validate([
            'proses_id' => 'required',
            'department' => 'required'
        ])) {
            return redirect()->to('/admin/pengaduan/diproses')->withInput();
        }

        $data = [
            'id' => $this->request->getVar('proses_id'),
            'department' => $this->request->getVar('department'),
            'status' => 'Diproses'
        ];
        $this->dbpengaduan->save($data);

        session()->setFlashdata('msg', '<div class="alert alert-success mt-2" role="alert">Pengaduan berhasil diproses</div>');
        return redirect()->to('/admin/pengaduan/diproses');
    }

    public function selesai()
    {

        if (!$this->validate([
            'selesai_id' => 'required',
            'komentar' => 'required'
        ])) {
            return redirect()->to('/admin/pengaduan/selesai')->withInput();
        }

        $data = [
            'id' => $this->request->getVar('selesai_id'),
            'status' => 'Selesai',
            'done_at' => Time::now()
        ];

        $data_komentar = [
            'idpengaduan' => $this->request->getVar('selesai_id'),
            'komentar' => $this->request->getVar('komentar')
        ];

        $this->dbpengaduan->save($data);
        $this->dbkomentar->save($data_komentar);


        session()->setFlashdata('msg', '<div class="alert alert-success mt-2" role="alert">Pengaduan berhasil Diselesaikan</div>');
        return redirect()->to('/admin/pengaduan/selesai');
    }
}
