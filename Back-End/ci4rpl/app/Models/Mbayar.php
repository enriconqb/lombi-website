<?php

namespace App\Models;

use CodeIgniter\Model;

class Mbayar extends Model
{
    protected $table      = 'bayar';

    protected $allowedFields = ['id_tim','nama_tim','tgl_bayar','status_verif_bayar','biaya_registrasitim','biaya_regitrasiindividu','link_buktibayar','id_lomba'];
}