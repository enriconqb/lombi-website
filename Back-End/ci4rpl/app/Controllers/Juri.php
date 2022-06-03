<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Mtim;
use App\Models\Mjuri;
use App\Models\Mlistlomba;
use App\Models\Mlomba;
use App\Models\Mberkas;

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

    public function linkberkas($id_tim,$id_lomba)
    {
        $model = new Mtim();
        $modeljuri = new Mjuri();
        $data= [
            'tim_detail'=> $model->whereIn('id_tim', [$id_tim])->first(),
            'juri_detail'=> $modeljuri->whereIn('id_lomba', [$id_lomba])->first(),
        ]; 
        return view('admin/v_inputpenilaianjuri', $data);
    }

    public function nilai()
    {
        //include helper form
        helper(['form']);
        $modeljuri = new Mjuri();
        $modellistlomba = new Mlistlomba();
        $modeltim = new Mtim();
        $id_tim = $this->request->getVar('id_tim');
        
        $data = [
            'link_penilaianjuri' => $this->request->getVar('link_penilaianjuri'),
            'skor' => $this->request->getVar('skor'),
        ];

        //Update data tim di DB Juri
        $save = $modeljuri
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'link_penilaianjuri' => $data['link_penilaianjuri'],
            'status_penilaian_juri' => 'sudah',
            'skor' => $data['skor'],
            ])
        ->update();

        //Update data tim di DB List Lomba
        $save = $modellistlomba
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'link_penilaianjuri' => $data['link_penilaianjuri'],
            'skor' => $data['skor'],
            ])
        ->update();

        //Update data tim di DB tim
        $save = $modeltim
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'link_penilaianjuri' => $data['link_penilaianjuri'],
            'skor' => $data['skor'],
            ])
        ->update();

        return redirect()->to(base_url('juri'));
    }

    public function final($id_tim,$id_lomba)
    {
        // === Update Data Link Bukti Bayar di database juri ====
        helper(['form']);
        $model = new Mjuri();

        $data = [ //ambil data form
            'status_final' => $this->request->getVar('status_final'),
        ];
         
        
        $save = $model
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'status_final'=>$data['status_final']])
        ->update();
        // ----- END update -----

        // === Update Data Link Bukti Bayar di database berkas ====
        helper(['form']);
        $model = new Mberkas();

        $data = [ //ambil data form
            'status_final' => $this->request->getVar('status_final'),
        ];
         
        
        $save = $model
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'status_final'=>$data['status_final']])
        ->update();
        // ----- END update -----


        // === Update Data Link Bukti Bayar di database listlomba ====
        helper(['form']);
        $model = new Mlistlomba();

        $data = [ //ambil data form
            'status_final' => $this->request->getVar('status_final'),
        ]; 
        
        $save = $model
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'status_final'=>$data['status_final']])
        ->update();
        // ----- END update -----

        // === Update Data Link Bukti Bayar di database tim ====
        helper(['form']);
        $model = new Mtim();

        $data = [ //ambil data form
            'status_final' => $this->request->getVar('status_final'),
        ]; 
        
        $save = $model
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'status_final'=>$data['status_final']])
        ->update();
        // ----- END update -----

        return redirect()->to(base_url('juri'));
    }

    public function juara($id_tim,$id_lomba)
    {
        // === Update Data Link Bukti Bayar di database juri ====
        helper(['form']);
        $model = new Mjuri();

        $data = [ //ambil data form
            'juara' => $this->request->getVar('juara'),
        ];
         
        
        $save = $model
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'juara'=>$data['juara']])
        ->update();
        // ----- END update -----


        // === Update Data Link Bukti Bayar di database listlomba ====
        helper(['form']);
        $model = new Mlistlomba();

        $data = [ //ambil data form
            'juara' => $this->request->getVar('juara'),
        ]; 
        
        $save = $model
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'juara'=>$data['juara']])
        ->update();
        // ----- END update -----

        // === Update Data Link Bukti Bayar di database tim ====
        helper(['form']);
        $model = new Mtim();

        $data = [ //ambil data form
            'juara' => $this->request->getVar('juara'),
        ]; 
        
        $save = $model
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'juara'=>$data['juara']])
        ->update();
        // ----- END update -----

        return redirect()->to(base_url('juri'));
    }

}
