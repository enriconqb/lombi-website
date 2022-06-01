<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Mtim;
use App\Models\Mjuri;
use App\Models\Mlistlomba;
use App\Models\Mlomba;

class Juri extends BaseController
{
    public function index()
    {
        $model = new Mjuri();
        $modellomba = new Mlomba();
        $id_lomba = session()->get('id_lomba');
        $data = [
            'tbl_juri' => $model->whereIn('id_lomba',[$id_lomba])->findAll(),
        ];
        return view('admin/v_penilaianjuri', $data);
    }

    public function cek($id_tim)
    {
        // === Update Data Link Bukti Bayar di database bayar ====
        helper(['form']);
        $model = new Mjuri();

        $data = [ //ambil data form
            'status' => $this->request->getVar('status_penilaian_juri'),
        ]; 
        
        $save = $model
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'status_penilaian_juri'=>$data['status']])
        ->update();
        // ----- END update -----


        // === Update Data Link Bukti Bayar di database bayar ====
        helper(['form']);
        $model = new Mtim();

        $data = [ //ambil data form
            'status' => $this->request->getVar('status_penilaian_juri'),
        ]; 
        
        $save = $model
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'status_penilaian_juri'=>$data['status']])
        ->update();
        // ----- END update -----


        // === Update Data Link Bukti Bayar di database bayar ====
        helper(['form']);
        $model = new Mlistlomba();

        $data = [ //ambil data form
            'status' => $this->request->getVar('status_penilaian_juri'),
        ]; 
        
        $save = $model
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'status_penilaian_juri'=>$data['status']])
        ->update();
        // ----- END update -----
        return redirect()->to(base_url('juri'));
    }
}
