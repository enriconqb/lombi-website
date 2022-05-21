<?php

namespace App\Controllers;
use App\Models\LombaModel;
use App\Models\DaftarLombaModel;

class DaftarLomba extends BaseController
{
    protected $datalomba;
    
    public function __construct(){
        $this->datalomba = new LombaModel();
        $this->daftarlomba = new DaftarLombaModel();
    }

    public function index()
    {
        $data = array(
            'alldata' => $this->datalomba->get_lomba_home(),
        );
        return view('user/v_daftarlomba', $data);
    }

    public function payment(){
        $jenislomba =  $this->daftarlomba->getAll()->getResult();
        $data = array(
            'nama_tim' => $this->request->getPost('nama_tim'),
            'jenislomba' => $this->request->getPost('jenislomba'),
            'ketua_nama' => $this->request->getPost('ketua_nama'),
            'ketua_nim' => $this->request->getPost('ketua_nim'),
            'link_ktm_ketua' => $this->request->getPost('link_ktm_ketua'),
            'norek' => $this->request->getPost('norek'),
            'jenisbank' => $this->request->getPost('jenisbank'),
            'anggota1_nama' => $this->request->getPost('anggota1_nama'),
            'anggota1_nim' => $this->request->getPost('anggota1_nim'),
            'anggota2_nama' => $this->request->getPost('anggota2_nama'),
            'anggota2_nim' => $this->request->getPost('anggota2_nim'),
            'anggota3_nama' => $this->request->getPost('anggota3_nama'),
            'anggota3_nim' => $this->request->getPost('anggota3_nim'),
            'anggota4_nama' => $this->request->getPost('anggota4_nama'),
            'anggota4_nim' => $this->request->getPost('anggota4_nim'),
        );
        $this->daftarlomba->insert($data);
        return redirect()->to('user/v_payment');
        // return view('user/v_payment');
    }

    public function verifpayment(){
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
