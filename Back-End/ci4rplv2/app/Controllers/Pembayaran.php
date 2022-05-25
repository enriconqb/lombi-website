<?php

namespace App\Controllers;
use CodeIgniter\Controller;


class Pembayaran extends BaseController
{
    public function index()
    {
        return view('admin/v_pembayaran');
    }
}
