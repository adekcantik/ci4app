<?php

namespace App\Models;

use CodeIgniter\Model;

class komentarModel extends Model
{
    protected $table = 'komentar';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $allowedFields = ['idpengaduan', 'komentar'];
}
