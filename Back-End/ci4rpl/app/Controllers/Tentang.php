<?php

namespace App\Controllers;
use CodeIgniter\Controller;


class Tentang extends BaseController
{
    public function index()
    {
        return view('user/v_tentang');
    }
}
