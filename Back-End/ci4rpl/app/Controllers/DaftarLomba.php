<?php

namespace App\Controllers;
use App\Models\LombaModel;
use App\Models\DaftarLombaModel;
use App\Models\UsersModel;

class DaftarLomba extends BaseController
{
    protected $datalomba;
    
    public function __construct(){
        $this->datalomba = new LombaModel();
        $this->daftarlomba = new DaftarLombaModel();
        $this->userdata = new UsersModel();
    }

    public function daftar($id_lomba)
    {
        $data = array(
            'alldata' => $this->datalomba->get_lomba_home(),
            'detail' => $this->datalomba->detail($id_lomba),
        );
        return view('user/v_daftarlomba', $data);
    }

    public function payment(){
        $data = $this->request->getPost();
        $this->daftarlomba->insert($data);
        return view('user/v_verifikasipayment');
    }

    public function verifpayment(){
        // $data = $this->request->getPost();
        $data = array(
            'daftar' => $this->request->getPost(),
        );
        $this->daftarlomba->insert($data);
        return view('user/v_verifikasipayment');
    }

    public function verifdone(){
        return view('user/v_verifdone');
    }

    public function kumpulberkas(){
        return view('user/v_kumpulberkas');
    }

    public function kumpulberkasdone(){
        return view('user/v_kumpulberkasdone');
    }
}
