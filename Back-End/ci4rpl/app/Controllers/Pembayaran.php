<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Mtim;
use App\Models\Mbayar;
use App\Models\Mlistlomba;
use App\Models\Mlomba;

class Pembayaran extends BaseController
{
    public function index()
    {
        $model = new Mbayar();
        $modellomba = new Mlomba();
        $id_lomba = session()->get('id_lomba');
        $data = [
            'tbl_bayar' => $model->whereIn('id_lomba',[$id_lomba])->findAll(),
            'nama_lomba' => $modellomba->whereIn('id_lomba',[$id_lomba])->first()['nama_lomba'],
        ];
        return view('admin/v_pembayaran', $data);
    }

    public function cek($id_tim)
    {
        // === Update Data Link Bukti Bayar di database bayar ====
        helper(['form']);
        $model = new Mbayar();

        $data = [ //ambil data form
            'status' => $this->request->getVar('status_verif_bayar'),
        ]; 
        
        $save = $model
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'status_verif_bayar'=>$data['status']])
        ->update();
        // ----- END update -----


        // === Update Data Link Bukti Bayar di database bayar ====
        helper(['form']);
        $model = new Mtim();

        $data = [ //ambil data form
            'status' => $this->request->getVar('status_verif_bayar'),
        ]; 
        
        $save = $model
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'status_verif_bayar'=>$data['status']])
        ->update();
        // ----- END update -----


        // === Update Data Link Bukti Bayar di database bayar ====
        helper(['form']);
        $model = new Mlistlomba();

        $data = [ //ambil data form
            'status' => $this->request->getVar('status_verif_bayar'),
        ]; 
        
        $save = $model
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'status_verif_bayar'=>$data['status']])
        ->update();
        // ----- END update -----
        return redirect()->to(base_url('pembayaran'));
    }
}
