<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Mlistlomba;
use App\Models\Mlomba;
use App\Models\Mtim;


class Pengumuman extends BaseController
{
    public function __construct(){
        $this->datalomba = new Mlomba();
        $this->datatim = new Mtim();
    }

    public function index()
    {
        return view('user/v_pengumuman');
    }

    public function final($id_tim,$id_lomba)
    {
        $data = array(
            'nama' => $this->datalomba->detail($id_lomba),
            'tim' => $this->datatim->final($id_lomba,$id_tim),
        );
        return view('user/v_pengumumanfinal', $data);
    }

    public function notfinal($id_tim,$id_lomba)
    {
        $data = array(
            'nama' => $this->datalomba->detail($id_lomba),
            'tim' => $this->datatim->notfinal($id_lomba,$id_tim),
        );
        return view('user/v_pengumumanfinal_notfinal', $data);
    }

    public function juara($id_tim,$id_lomba){
        $ada = $this->datalomba->juara($id_lomba);
        if($ada){
            $data = array(
                'nama' => $this->datalomba->detail($id_lomba),
                'juara1' => $this->datatim->juara1($id_lomba),
                'juara2' => $this->datatim->juara2($id_lomba),
                'juara3' => $this->datatim->juara3($id_lomba),
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
