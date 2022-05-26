<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Mberkas;
use App\Models\Mlistlomba;
use App\Models\Mlomba;



class VerifBerkas extends BaseController
{
    public function index()
    {
        $model = new Mberkas();
        $modellomba = new Mlomba();
        $id_lomba = session()->get('id_lomba');
        $data = [
            'tbl_berkas' => $model->whereIn('id_lomba',[$id_lomba])->findAll(),
            'nama_lomba' => $modellomba->whereIn('id_lomba',[$id_lomba])->first()['nama_lomba'],
        ];
        return view('admin/v_verifberkas',$data);
    }

    public function cek($id_tim)
    {
        // === Update Data Link Bukti Bayar di database bayar ====
        helper(['form']);
        $model = new Mberkas();

        $data = [ //ambil data form
            'status' => $this->request->getVar('status_kelengkapanberkas'),
        ]; 
        
        $save = $model
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'status_kelengkapanberkas'=>$data['status']])
        ->update();
        // ----- END update -----


        // === Update Data Link Bukti Bayar di database bayar ====
        helper(['form']);
        $model = new Mlistlomba();

        $data = [ //ambil data form
            'status' => $this->request->getVar('status_kelengkapanberkas'),
        ]; 
        
        $save = $model
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'status_kelengkapanberkas'=>$data['status']])
        ->update();
        // ----- END update -----
        return redirect()->to(base_url('verifberkas'));
    }
}
