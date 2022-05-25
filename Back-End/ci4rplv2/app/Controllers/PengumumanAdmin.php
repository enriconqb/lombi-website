<?php

namespace App\Controllers;
use CodeIgniter\Controller;


class PengumumanAdmin extends BaseController
{
    public function index()
    {
        return view('admin/v_pengumuman');
    }
}
