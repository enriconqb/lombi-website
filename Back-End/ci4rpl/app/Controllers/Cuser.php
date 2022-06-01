<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Muser;


class Cuser extends BaseController
{
    public function index()
    {
        return view('user/v_home');
    }

}