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

    public function payment($id_lomba){
        $data = $this->request->getPost(); //ambil data form
        $this->daftarlomba->insert($data); //input data ke database lomba
        $id_tim = $this->daftarlomba->getDataTerbaru;
        $data = array( //ambil data lomba
            'detaillomba' => $this->datalomba->detail($id_lomba),
            'detailtim' => $this->daftarlomba->getDetailTim($id_tim),
        );
        return view('user/v_payment',$data);
    }

    public function verifpayment($id_lomba){
        $data = $this->request->getPost(); //ambil data form
        $daftarlomba->update($id_lomba, [
            'link_buktibayar' => $data,
        ]);
        $data = array( //ambil data lomba
            'detaillomba' => $this->datalomba->detail($id_lomba),
        );
        return view('user/v_verifikasipayment',$data);
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
