<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class InputPenilaian extends BaseController
{
    public function index()
    {
        return view('admin/v_inputpenilaianjuri');
    }
}
