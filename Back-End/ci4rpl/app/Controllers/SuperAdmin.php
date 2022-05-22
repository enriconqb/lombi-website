<?php

namespace App\Controllers;

class SuperAdmin extends BaseController
{
    public function index()
    {
        return view('admin/v_superadmin');
    }
}
