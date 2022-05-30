<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Juri extends BaseController
{
    public function index()
    {
        return view('admin/v_penilaianjuri');
    }
}
