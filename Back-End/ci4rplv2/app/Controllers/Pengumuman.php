<?php

namespace App\Controllers;
use CodeIgniter\Controller;


class Pengumuman extends BaseController
{
    public function index()
    {
        return view('user/v_pengumuman');
    }
}
