<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\Mlomba;
use App\Models\Mbayar;
use App\Models\Mberkas;
use App\Models\Mjuri;
use App\Models\Mlistlomba;
use App\Models\Mtim;
use App\Models\Muser;

class Admin extends BaseController
{
    public function __construct(){
        $this->Lomba = new Mlomba();
    }

    public function index()
    {
        $model = new Mlomba();
        $id_user = session()->get('id_user');
        $data = [
            'lomba' => NULL,
            'nama_lomba' => NULL,
        ];


        if($model->getInfoLombaUser($id_user))
        {
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
        }
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

    public function delete($id_lomba)
    {
        $modelbayar         = new Mbayar();
        $modelberkas        = new Mberkas();
        $modeljuri          = new Mjuri();
        $modellistlomba     = new Mlistlomba();
        $modellomba         = new Mlomba();
        $modeltim           = new Mtim();
        $modeluser          = new Muser();

        $data = $modelbayar->whereIn('id_lomba', [$id_lomba])->delete();
        $data = $modelberkas->whereIn('id_lomba', [$id_lomba])->delete();
        $data = $modeljuri->whereIn('id_lomba', [$id_lomba])->delete();
        $data = $modellistlomba->whereIn('id_lomba', [$id_lomba])->delete();
        $data = $modellomba->whereIn('id_lomba', [$id_lomba])->delete();
        $data = $modeltim->whereIn('id_lomba', [$id_lomba])->delete();
        $data = $modeluser->whereIn('id_lomba', [$id_lomba])->delete();

        session()->remove('id_lomba');

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
        $modellomba = new Mlomba();
        
        $file_poster = $this->request->getFile('file_poster');
            if ($file_poster->getError() == 4) {
                $data = array(
                    'id_lomba' => $id_lomba,
                    'nama_lomba' => $this->request->getPost('nama_lomba'),
                    'kategori_lomba' => $this->request->getPost('kategori_lomba'),
                    'deskripsi_lomba' => $this->request->getPost('deskripsi_lomba'),
                    'nama_penyelenggara' => $this->request->getPost('nama_penyelenggara'),
                    'persyaratan_lomba' => $this->request->getPost('persyaratan_lomba'),
                    'hadiah' => $this->request->getPost('hadiah'),
                    'tgl_daftar' => $this->request->getPost('tgl_daftar'),
                    'tgl_kumpul' => $this->request->getPost('tgl_kumpul'),
                    'tgl_pengumuman' => $this->request->getPost('tgl_pengumuman'),
                    'link_booklet' => $this->request->getPost('link_booklet'),
                    'biaya_registrasitim' => $this->request->getPost('biaya_registrasitim'),
                    'biaya_registrasiindividu' => $this->request->getPost('biaya_registrasiindividu'),
                    'link_template_penilaianjuri' => $this->request->getPost('link_template_penilaianjuri'),
                );
                $this->Lomba->edit($data);
            }
            else{
                $lomba = $this->Lomba->detail($id_lomba);
                if($lomba->file_poster != ""){
                    unlink('images/poster_lomba/'.$lomba->file_poster);
                }
                $nama_file = $file_poster->getRandomName();
                $data = array(
                    'id_lomba' => $id_lomba,
                    'nama_lomba' => $this->request->getPost('nama_lomba'),
                    'kategori_lomba' => $this->request->getPost('kategori_lomba'),
                    'deskripsi_lomba' => $this->request->getPost('deskripsi_lomba'),
                    'nama_penyelenggara' => $this->request->getPost('nama_penyelenggara'),
                    'persyaratan_lomba' => $this->request->getPost('persyaratan_lomba'),
                    'hadiah' => $this->request->getPost('hadiah'),
                    'tgl_daftar' => $this->request->getPost('tgl_daftar'),
                    'tgl_kumpul' => $this->request->getPost('tgl_kumpul'),
                    'tgl_pengumuman' => $this->request->getPost('tgl_pengumuman'),
                    'link_booklet' => $this->request->getPost('link_booklet'),
                    'biaya_registrasitim' => $this->request->getPost('biaya_registrasitim'),
                    'biaya_registrasiindividu' => $this->request->getPost('biaya_registrasiindividu'),
                    'link_template_penilaianjuri' => $this->request->getPost('link_template_penilaianjuri'),
                    'file_poster' => $nama_file,
                );
                $file_poster->move('images/poster_lomba', $nama_file);
                $this->Lomba->edit($data);
            }
        return redirect()->to(base_url('admin'));        
    }
}
