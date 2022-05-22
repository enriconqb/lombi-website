<?php

namespace App\Controllers;

class DaftarLombaFinal extends BaseController
{
    public function index()
    {
        return view('user/v_daftarlomba_final');
    }

    public function kumpulberkasfinal(){
        // return redirect()->to(base_url('/kumpulberkasfinal'));
        return view('user/v_kumpulberkas_final');
    }

    public function kumpulberkasdonefinal(){
        return view('user/v_kumpulberkasdone_final');
    }
}
