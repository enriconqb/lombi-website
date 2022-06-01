<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Mtim;
use App\Models\Mlomba;

class CekBerkas extends BaseController
{
    public function index()
    {
        $model = new Mlomba();
        $modeltim = new Mtim();
        $id_lomba = session()->get('id_lomba');
        $data = [
            'id_lomba' => $id_lomba,
            'nama_lomba' => $model->whereIn('id_lomba',[$id_lomba])->first()['nama_lomba'],
            'tbl_berkas' => $model->whereIn('id_lomba',[$id_lomba])->findAll(),
        ];
        return view('admin/v_admincekberkas',$data);
    }

    public function linkberkas($id_tim)
    {
        $model = new Mtim();
        $data= [
            'tim_detail'=> $model->whereIn('id_tim', [$id_tim])->first(),
        ]; 
        return view('admin/v_admincekberkas',$data);
    }

    public function update($id_tim)
    {
        //include helper form
        helper(['form']);
        $model = new Mtim();
        
        $data = [
            'id_tim'            => $this->request->getVar('id_tim'),
            'email_ketua'       => $this->request->getVar('email_ketua'),
            'id_lomba'          => $this->request->getVar('id_lomba'),
            'id_user'           => $this->request->getVar('id_user'),
            'nama_tim'          => $this->request->getVar('nama_tim'),
            'nama_instansi'     => $this->request->getVar('nama_instansi'),
            'ketua_nama'        => $this->request->getVar('ketua_nama'),
            'ketua_nim'         => $this->request->getVar('ketua_nim'),
            'link_ktm_ketua'    => $this->request->getVar('link_ktm_ketua'),
            'norek'             => $this->request->getVar('norek'),
            'jenisbank'         => $this->request->getVar('jenisbank'),
            'anggota1_nama'     => $this->request->getVar('anggota1_nama'),
            'anggota1_nim'      => $this->request->getVar('anggota1_nim'),
            'anggota2_nama'     => $this->request->getVar('anggota2_nama'),
            'anggota2_nim'      => $this->request->getVar('anggota2_nim'),
            'anggota3_nama'     => $this->request->getVar('anggota3_nama'),
            'anggota3_nim'      => $this->request->getVar('anggota3_nim'),
            'anggota4_nama'     => $this->request->getVar('anggota4_nama'),
            'anggota4_nim'      => $this->request->getVar('anggota4_nim'),
            'link_buktibayar'   => $this->request->getVar('link_buktibayar'),
            'status_verif_bayar'=> $this->request->getVar('status_verif_bayar'),
            'link_karya'        => $this->request->getVar('link_karya'),
            'link_orisinalitas' => $this->request->getVar('link_orisinalitas'),
            'status_finalist'   => $this->request->getVar('status_finalist'),
            'link_suratfinalis' => $this->request->getVar('link_suratfinalis'),
            'link_ktm_anggota1' => $this->request->getVar('link_ktm_anggota1'),
            'link_ktm_anggota2' => $this->request->getVar('link_ktm_anggota2'),
            'link_ktm_anggota3' => $this->request->getVar('link_ktm_anggota3'),
            'link_ktm_anggota4' => $this->request->getVar('link_ktm_anggota4'),
        ];

        $save = $model
        ->whereIn('id_tim', [$id_tim])
        ->set([
            'id_tim'            => $data['id_tim'],
            'email_ketua'       => $data['email_ketua'],
            'id_lomba'          => $data['id_lomba'],
            'id_user'           => $data['id_user'],
            'nama_tim'          => $data['nama_tim'],
            'nama_instansi'     => $data['nama_instansi'],
            'ketua_nama'        => $data['ketua_nama'],
            'ketua_nim'         => $data['ketua_nim'],
            'link_ktm_ketua'    => $data['link_ktm_ketua'],
            'norek'             => $data['norek'],
            'jenisbank'         => $data['jenisbank'],
            'anggota1_nama'     => $data['anggota1_nama'],
            'anggota1_nim'      => $data['anggota1_nim'],
            'anggota2_nama'     => $data['anggota2_nama'],
            'anggota2_nim'      => $data['anggota2_nim'],
            'anggota3_nama'     => $data['anggota3_nama'],
            'anggota3_nim'      => $data['anggota3_nim'],
            'anggota4_nama'     => $data['anggota4_nama'],
            'anggota4_nim'      => $data['anggota4_nim'],
            'link_buktibayar'   => $data['link_buktibayar'],
            'status_verif_bayar'=> $data['status_verif_bayar'],
            'link_karya'        => $data['link_karya'],
            'link_orisinalitas' => $data['link_orisinalitas'],
            'status_finalist'   => $data['status_finalist'],
            'link_suratfinalis' => $data['link_suratfinalis'],
            'link_ktm_anggota1' => $data['link_ktm_anggota1'],
            'link_ktm_anggota2' => $data['link_ktm_anggota2'],
            'link_ktm_anggota3' => $data['link_ktm_anggota3'],
            'link_ktm_anggota4' => $data['link_ktm_anggota4'],
            ])
        ->update();
        return view('admin/v_admincekberkas');      
    }
}
