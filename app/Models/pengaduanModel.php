<?php

namespace App\Models;

use CodeIgniter\Model;

class PengaduanModel extends Model
{
    protected $table = 'pengaduan';
    protected $useTimestamps = true;
    protected $allowedFields = ['nik', 'nama', 'email', 'phone', 'message'];
}
