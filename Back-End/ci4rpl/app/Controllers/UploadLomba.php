<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use CodeIgniter\Files\File;
use App\Models\Mlomba;


class UploadLomba extends BaseController
{

    public function __construct(){
        $this->Lomba = new Mlomba();
    }
    public function index()
    {
        $data =  [
            'user' => session()->get('id_user'),
    ];
        return view('admin/v_uploadlomba',$data);
    }

    public function add(){
        //include helper form
        helper(['form'],['url']);
        $modellomba = new Mlomba();

        $validated = [
            'file_poster' => [
                'label' => 'Image File',
                'rules' => 'uploaded[file_poster]'
                    . '|is_image[file_poster]'
                    . '|mime_in[file_poster,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
            ],
        ];
        $msg = 'Please select a valid file';
 
        if ($validated) {
            $file_poster = $this->request->getFile('file_poster');
            $nama_file = $file_poster->getRandomName();
            $data = array(
                'id_user' => $this->request->getPost('id_user'),
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
            $this->Lomba->add($data);
            return redirect()->to(base_url('admin'));
        }
        else return redirect()->base_url('uploadlomba')->with('msg', $msg);
    }
}
