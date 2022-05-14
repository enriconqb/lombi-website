<?php

namespace App\Controllers;

class DaftarLomba extends BaseController
{
    public function index()
    {
        return view('user/v_daftarlomba');
    }

    public function payment(){
        return view('user/v_payment');
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
