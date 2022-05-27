<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\Mlomba;

class Admin extends BaseController
{
    public function index()
    {
        $model = new Mlomba();
        $id_user = session()->get('id_user');

        if(! isset($_SESSION['id_lomba']))
        {
            $data['id_lomba'] = $model->whereIn('id_user',[$id_user])->orderBy('id_lomba','ASC')->first()['id_lomba'];
            session()->set($data);
        }

        $id_lomba = session()->get('id_lomba');
        $data = [
            'lomba' => $model->whereIn('id_user',[$id_user])->orderBy('id_lomba')->findAll(),
            'nama_lomba' => $model->whereIn('id_lomba',[$id_lomba])->first()['nama_lomba'],
        ];
        return view('admin/v_admin',$data);
    }

    public function select($id_lomba)
    {
        $data = [
            'id_lomba' => $id_lomba,
        ];
        session()->set($data);
        return redirect()->to(base_url('admin'));
    }

    public function edit($id_lomba){
        $model = new Mlomba();
        $data= [
            'lomba_detail'=> $model->where('id_lomba',$id_lomba)->first(),
            'id_lomba'=> $id_lomba,
        ];
        return view('admin/v_editlomba',$data);
    }

    public function update($id_lomba){
        //include helper form
        helper(['form']);
        $model = new Mlomba();
        
        $data = [
            'id_lomba'                      => $this->request->getVar('id_lomba'),
            'nama_lomba'                    => $this->request->getVar('nama_lomba'),
            'kategori_lomba'                => $this->request->getVar('kategori_lomba'),
            'deskripsi_lomba'               => $this->request->getVar('deskripsi_lomba'),
            'nama_penyelenggara'            => $this->request->getVar('nama_penyelenggara'),
            'persyaratan_lomba'             => $this->request->getVar('persyaratan_lomba'),
            'hadiah'                        => $this->request->getVar('hadiah'),
            'tgl_daftar'                    => $this->request->getVar('tgl_daftar'),
            'tgl_kumpul'                    => $this->request->getVar('tgl_kumpul'),
            'tgl_pengumuman'                => $this->request->getVar('tgl_pengumuman'),
            'file_poster'                   => $this->request->getVar('file_poster'),
            'link_booklet'                  => $this->request->getVar('link_booklet'),
            'biaya_registrasitim'           => $this->request->getVar('biaya_registrasitim'),
            'biaya_registrasiindividu'      => $this->request->getVar('biaya_registrasiindividu'),
            'link_template_penilaianjuri'   => $this->request->getVar('link_template_penilaianjuri'),
        ];

        $save = $model
        ->whereIn('id_lomba', [$id_lomba])
        ->set([
            'id_lomba'                      => $data['id_lomba'],
            'nama_lomba'                    => $data['nama_lomba'],
            'kategori_lomba'                => $data['kategori_lomba'],
            'deskripsi_lomba'               => $data['deskripsi_lomba'],
            'nama_penyelenggara'            => $data['nama_penyelenggara'],
            'persyaratan_lomba'             => $data['persyaratan_lomba'],
            'hadiah'                        => $data['hadiah'],
            'tgl_daftar'                    => $data['tgl_daftar'],
            'tgl_kumpul'                    => $data['tgl_kumpul'],
            'tgl_pengumuman'                => $data['tgl_pengumuman'],
            'file_poster'                   => $data['file_poster'],
            'link_booklet'                  => $data['link_booklet'],
            'biaya_registrasitim'           => $data['biaya_registrasitim'],
            'biaya_registrasiindividu'      => $data['biaya_registrasiindividu'],
            'link_template_penilaianjuri'   => $data['link_template_penilaianjuri'],
            ])
        ->update();
        return redirect()->to(base_url('admin'));        
    }
}
