<?php

namespace App\Controllers;

class Daftar extends BaseController
{
    public function index()
    {
        session();
        $data = [
            'validate' => \Config\Services::validation(),
        ];
        return view('auth/v_register', $data);
    }
}
