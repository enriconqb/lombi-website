<?php

namespace App\Controllers;
use CodeIgniter\Controller;


class SuperAdmin extends BaseController
{
    public function index()
    {
        return view('admin/v_superadmin');
    }
}
