<?php

namespace App\Controllers;

class DaftarLomba extends BaseController
{
    public function index()
    {
        return view('user/daftarlomba');
    }

    public function payment(){
        return view('user/payment');
    }

    public function verifpayment(){
        return view('user/verifikasipayment');
    }

    public function verifdone(){
        return view('user/verifdone');
    }

    public function kumpulberkas(){
        return view('user/kumpulberkas');
    }

    public function kumpulberkasdone(){
        return view('user/kumpulberkasdone');
    }
}
