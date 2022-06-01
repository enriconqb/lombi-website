<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Mlistlomba;


class Clistlomba extends BaseController
{
    public function index()
    {
        return view('user/v_lombalist');
    }

    public function read()
    {
        $model  = new Mlistlomba();
        $id_user = session()->get('id_user');
        $data['list_lomba'] = $model->whereIn('id_user',[$id_user])->orderBy('nama_lomba')->findAll();
        return view('user/v_lombalist',$data);
    }

    public function verifdone($id_tim,$id_lomba)
    {
        $model = new Mlistlomba();
        $datalistlomba  = $model
            ->where('id_tim',$id_tim)
            ->where('id_lomba',$id_lomba)
            ->first();
        if(isset($datalistlomba['status_verif_bayar'])){
            if($datalistlomba['status_verif_bayar'] === 'Sudah Verifikasi'){
                $data['list_lomba'] = $datalistlomba;
                return view('user/v_verifdone', $data);
            }
            else return redirect()->back();
        }
        else return redirect()->back();
        
    }

    public function berkas($id_tim,$id_lomba)
    {
        return view('user/v_home');
    }

}