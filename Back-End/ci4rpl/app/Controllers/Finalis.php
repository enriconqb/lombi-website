<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Mlistlomba;
use App\Models\Mtim;
use App\Models\Mlomba;
use App\Models\Mberkas;


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
        $modeltim = new Mtim();
        $modelberkas = new Mberkas();
        $modellistlomba = new Mlistlomba();
        // Update Data DB berkas
        $data = [
            'link_ktm_anggota1' => $this->request->getVar('link_ktm_anggota1'),
            'link_ktm_anggota2' => $this->request->getVar('link_ktm_anggota2'),
            'link_ktm_anggota3' => $this->request->getVar('link_ktm_anggota3'),
            'link_ktm_anggota4' => $this->request->getVar('link_ktm_anggota4'),
            'link_suratfinalis' => $this->request->getVar('link_suratfinalis'),
        ]; 
        $save = $modeltim
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'link_ktm_anggota1'=>$data['link_ktm_anggota1'],
            'link_ktm_anggota2'=>$data['link_ktm_anggota2'],
            'link_ktm_anggota3'=>$data['link_ktm_anggota3'],
            'link_ktm_anggota4'=>$data['link_ktm_anggota4'],
            'link_suratfinalis'=>$data['link_suratfinalis'],
            ])
        ->update();

        $save = $modelberkas 
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'status_kelengkapanberkas'=> 'Belum Diperiksa',
            ])
        ->update();

        $save = $modellistlomba 
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'status_kelengkapanberkas'=> 'Belum Diperiksa',
            ])
        ->update();

        return view('user/v_kumpulberkasdone');
    }
}
