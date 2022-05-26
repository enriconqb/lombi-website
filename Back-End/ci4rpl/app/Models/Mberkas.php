<?php

namespace App\Models;

use CodeIgniter\Model;

class Mberkas extends Model
{
    protected $table      = 'berkas';

    protected $allowedFields = ['id_tim','nama_tim','status_kelengkapanberkas','id_lomba'];
}