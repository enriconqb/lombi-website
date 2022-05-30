<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\Mtim;
use App\Models\Mlistlomba;
use App\Models\Mberkas;



class KumpulBerkas extends BaseController
{
    public function pengisihan($id_tim,$id_lomba)
    {
        $model= new Mlistlomba();

        $datalistlomba  = $model
            ->where('id_tim',$id_tim)
            ->where('id_lomba',$id_lomba)
            ->first();
        $data['list_lomba'] = $datalistlomba;
        return view('user/v_kumpulberkas',$data);
        
    }

    public function save($id_tim,$id_lomba)
    {
        helper(['forms']);
        $modeltim = new Mtim();
        $modelberkas = new Mberkas();
        $modellistlomba = new Mlistlomba();

        if($modelberkas->where('id_tim',[$id_tim])->first() === NULL){
            $data = [
                'id_tim' => $id_tim,
                'nama_tim' => $modeltim->getDetailTim($id_tim)['nama_tim'],
                'status_kelengkapanberkas' => 'Belum Diperiksa',
                'id_lomba' => $id_lomba,
            ];
            $modelberkas->save($data);

            $save = $modellistlomba
            ->whereIn('id_tim',[$id_tim])
            ->set([
                'status_kelengkapanberkas' => 'Belum Diperiksa',
                ])
            ->update();
            
        }
        else{
            $save = $modellistlomba
            ->whereIn('id_tim',[$id_tim])
            ->set([
                'status_kelengkapanberkas' => 'Belum Diperiksa',
                ])
            ->update();
        }


        $data = [
            'karya' => $this->request->getVar('karya'),
            'orisinalitas' => $this->request->getVar('syarat'),
        ]; 
        $save = $modeltim
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'link_karya'=>$data['karya'],
            'link_orisinalitas'=>$data['orisinalitas'],
            ])
        ->update();
        return view('user/v_kumpulberkasdone');

    }
}