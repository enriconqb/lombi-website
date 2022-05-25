<?php

namespace App\Controllers;
use CodeIgniter\Controller;


class Peserta extends BaseController
{
    public function index()
    {
        return view('admin/v_peserta');
    }
}
