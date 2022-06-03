<?php

namespace App\Models;

use CodeIgniter\Model;

class Mjuri extends Model
{
    protected $table      = 'juri';

    protected $allowedFields = ['id_tim','nama_tim',
    'status_penilaian_juri','link_template_penilaianjuri','link_penilaianjuri',
    'skor','id_lomba','status_final','juara',
    ];
}