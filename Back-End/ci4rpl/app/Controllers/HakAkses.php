<?php

namespace App\Controllers;
use CodeIgniter\Controller;


class HakAkses extends BaseController
{
    public function index()
    {
        return view('admin/v_hakakses');
    }
}
