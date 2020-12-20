<?php

namespace App\Models;

use CodeIgniter\Model;

class dinasModel extends Model
{
    protected $table = 'department';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $allowedFields = ['department'];
}
