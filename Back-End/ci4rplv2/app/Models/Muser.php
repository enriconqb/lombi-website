<?php

namespace App\Models;

use CodeIgniter\Model;

class Muser extends Model
{
    protected $table      = 'user';

    protected $allowedFields = ['username','email','password','hak_akses','id_lomba'];
}