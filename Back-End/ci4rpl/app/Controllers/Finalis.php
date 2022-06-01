<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Mlistlomba;
use App\Models\Mtim;
use App\Models\Mlomba;


class Finalis extends BaseController
{
    public function __construct(){
        $this->datalomba = new Mlomba();
        $this->datafinal = new Mtim();
    }

    public function index()
    {
        return view('user/v_daftarlomba_final');
    }

    public function daftar($id_tim,$id_lomba)
    {
        $data = array(
            'detail' => $this->datalomba->detail($id_lomba),
            'data' => $this->datafinal->detail($id_tim),
        );
        return view('user/v_daftarlomba_final', $data);
    }
    public function daftar_ulang($id_tim)
    {
        return view('user/v_kumpulberkasdone');
    }
}
