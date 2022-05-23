<?php

namespace App\Controllers;

class DaftarLombaFinal extends BaseController
{
    public function index()
    {
        return view('user/v_daftarlomba_final');
    }

    public function kumpulberkas(){
        return view('user/v_kumpulberkas_final');
    }

    public function kumpulberkasdone(){
        return view('user/v_kumpulberkasdone');
    }
}
