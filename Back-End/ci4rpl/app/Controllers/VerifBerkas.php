<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Mberkas;
use App\Models\Mlistlomba;
use App\Models\Mlomba;
use App\Models\Mjuri;



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

    public function cek($id_tim,$id_lomba)
    {
        // === Update Data Link Bukti Bayar di database berkas ====
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

        // DEKLAR Untuk DB Juri
        $status = $this->request->getVar('status_kelengkapanberkas');
        helper(['form']);
        $modeljuri = new Mjuri();
        $modellistlomba = new Mlistlomba();
        $modellomba = new Mlomba();
        if($status === 'Sudah Diperiksa'){
            if(! isset($modeljuri->whereIn('id_tim',[$id_tim])->first()['id_tim'])){
                // === Add Data Link Bukti Bayar di database Juri ====
                $data = [
                    'id_lomba' => $id_lomba,
                    'id_tim' => $id_tim,
                    'nama_tim' => $modellistlomba->whereIn('id_tim',[$id_tim])->first()['nama_tim'],
                    'status_penilaian_juri' => 'belum',
                    'link_template_penilaianjuri' => $modellomba->whereIn('id_lomba',[$id_lomba])->first()['link_template_penilaianjuri'],
                ];
                $modeljuri->save($data);
            }
            // ----- END add -----
        }
        else{
            $data = $modeljuri->whereIn('id_tim',[$id_tim])->first();
            if(isset($data)){
                $modeljuri->whereIn('id_tim',[$id_tim])->delete();
            }
        }
        
        return redirect()->to(base_url('verifberkas'));
    }
}
