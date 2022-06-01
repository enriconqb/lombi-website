<?php

namespace App\Models;

use CodeIgniter\Model;

class Mlistlomba extends Model
{
    protected $table      = 'list_lomba';

    protected $allowedFields = ['id_user','nama_lomba','nama_tim','status_verif_bayar','status_kelengkapanberkas','id_lomba','id_tim','status_final','skor','juara'];

    
}