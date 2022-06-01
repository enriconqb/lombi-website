<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Mlistlomba;
use App\Models\Mlomba;


class Pengumuman extends BaseController
{
    public function __construct(){
        $this->datalomba = new Mlomba();
        $this->datafinal = new Mlistlomba();
    }

    public function index()
    {
        return view('user/v_pengumuman');
    }

    public function final($id_tim,$id_lomba)
    {
        $data = array(
            'nama' => $this->datalomba->detail($id_lomba),
            'list_lomba' => $this->datafinal->final($id_lomba,$id_tim),
        );
        return view('user/v_pengumumanfinal', $data);
    }

    public function juara($id_lomba){
        $ada = $this->datalomba->juara($id_lomba);
        if($ada){
            $data = array(
                'nama' => $this->datalomba->detail($id_lomba),
                'juara1' => $this->datafinal->juara1($id_lomba),
                'juara2' => $this->datafinal->juara2($id_lomba),
                'juara3' => $this->datafinal->juara3($id_lomba),
            );
            return view('user/v_pengumuman', $data);
        }
        else{
            $nama = array(
                'nama' => $this->datalomba->detail($id_lomba),
            );
            return view('user/v_pengumumankosong', $nama);
        }
    }
}
