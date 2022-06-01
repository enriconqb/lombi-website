<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\Mlomba;
use App\Models\Mtim;
use App\Models\Muser;
use App\Models\Mbayar;
use App\Models\Mlistlomba;


class Clomba extends BaseController
{
    public function __construct(){
        $this->datalomba = new Mlomba();
        $this->timlomba = new Mtim();
        $this->userdata = new Muser();
        $this->bayarlomba = new Mbayar();
        $this->listlomba = new Mlistlomba();

    }

    public function daftar($id_lomba)
    {
        //include helper form
        helper(['form']);
        $data = [
            'detail' => $this->datalomba->detail($id_lomba),
            'user' => session()->get('id_user'),
        ];
        return view('user/v_daftarlomba', $data);
    }

    public function payment($id_lomba)
    {
        //include helper form
        helper(['form']);
        $modeltim = new Mtim();
        $modelbayar = new Mbayar();
        $modellistlomba = new Mlistlomba();

        $data = $this->request->getPost(); //ambil semua data form
        $modeltim->save($data); //save data ke database tim

        $data = array(
            'detaillomba' => $this->datalomba->detail($id_lomba),
            'detailtim' => $this->timlomba->getLastTim(),
        );

        // Insert Data ke ModelBayar
        $databayar = [
            'id_tim'    => $this->timlomba->getLastTim()['id_tim'],
            'nama_tim'  => $this->timlomba->getLastTim()['nama_tim'],
            'biaya_registrasitim'       => $this->datalomba->detailArray($id_lomba)['biaya_registrasitim'],
            'biaya_registrasiindividu'  => $this->datalomba->detailArray($id_lomba)['biaya_registrasiindividu'],
            'id_lomba'  => $id_lomba,
            'status_verif_bayar' => 'Belum Verifikasi',
        ];
        $modelbayar->save($databayar);

        //Insert Data Ke ListLomba
        $datalistlomba = [
            'id_user'   => session()->get('id_user'),
            'id_tim'    => $this->timlomba->getLastTim()['id_tim'],
            'nama_tim'  => $this->timlomba->getLastTim()['nama_tim'],
            'id_lomba'  => $id_lomba,
            'nama_lomba'=> $this->datalomba->detailArray($id_lomba)['nama_lomba'],
            'status_verif_bayar' => 'Belum Verifikasi',
        ];
        $modellistlomba->save($datalistlomba);

        return view('user/v_payment',$data);
    }

    public function verifikasi($id_tim){
        // === Update Data Link Bukti Bayar di database tim ====
        helper(['form']);
        $modeltim = new Mtim();

        $data = [ //ambil data form
            'link' => $this->request->getVar('link_buktibayar'),
        ]; 

        $save = $modeltim 
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'link_buktibayar'=>$data['link'],
            'status_verif_bayar' => 'Belum Verifikasi',
            ])
        ->update();
        // ----- END update -----

        // === Update Data Link Bukti Bayar di database bayar ====
        helper(['form']);
        $modelbayar = new Mbayar();

        $data = [ //ambil data form
            'link' => $this->request->getVar('link_buktibayar'),
        ]; 
        
        $save = $modelbayar
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'link_buktibayar'=>$data['link']])
        ->update();
        // ----- END update -----

        return view('user/v_verifikasipayment');
    }

    public function vpayment($id_tim,$id_lomba)
    {   
        
        $data = array(
            'detaillomba' => $this->datalomba->detail($id_lomba),
            'detailtim' => $this->timlomba->getDetailTim($id_tim),
        );
        return view('user/v_payment',$data);
    }

    

}