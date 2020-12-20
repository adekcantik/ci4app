<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $allowedFields = ['nik', 'passwd', 'department', 'isadmin'];
}
