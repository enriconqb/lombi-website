<?php

namespace App\Controllers;
use App\Models\LombaModel;

class Home extends BaseController
{
    protected $datalomba;
    
    public function __construct(){
        $this->datalomba = new LombaModel();
    }

    public function index(){
        $data = array(
            'datasastra' => $this->datalomba->get_lomba_sastra(),
            'dataseni' => $this->datalomba->get_lomba_seni(),
            'dataprogramming' => $this->datalomba->get_lomba_programming(),
        );

        return view('user/v_home', $data);
    }

    public function detail($id_lomba)
    {
        $data = array(
            'detail' => $this->datalomba->detail($id_lomba),
        );
        return view('user/v_detailLomba', $data);
    }
}
