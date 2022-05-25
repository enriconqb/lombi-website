<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\Mlistlomba;

class DataAkun extends BaseController
{
    public function index()
    {
        return view('admin/v_dataakun');
    }
}
