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

    public function cari()
    {
        if ($cari = $this->request->getGet('keyword')){
            $data = $this->datalomba->where('nama_lomba', $cari)->findAll();
            return view('user/v_cari', compact('data'));
        }
        elseif ($cari = $this->request->getGet('kategori')) {
            $data = $this->datalomba->where('kategori_lomba', $cari)->findAll();
            return view('user/v_kategori', compact('data'));
        }
    }
}
