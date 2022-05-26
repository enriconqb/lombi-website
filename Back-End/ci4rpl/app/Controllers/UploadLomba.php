<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use CodeIgniter\Files\File;
use App\Models\Mlomba;


class UploadLomba extends BaseController
{
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
            $imageFile = $this->request->getFile('file_poster');
            // $imageFile->move(WRITEPATH .'uploads');
            $form = $this->request->getPost(); //ambil semua data form
            $data = [
                // 'file_poster'                   => $imageFile->getName(),
                'file_poster'                   => 'stupid.png',
                'id_user'                       => $form['id_user'],
                'nama_lomba'                    => $form['nama_lomba'],
                'kategori_lomba'                => $form['kategori_lomba'],
                'deskripsi_lomba'               => $form['deskripsi_lomba'],
                'nama_penyelenggara'            => $form['nama_penyelenggara'],
                'persyaratan_lomba'             => $form['persyaratan_lomba'],
                'hadiah'                        => $form['hadiah'],
                'tgl_daftar'                    => $form['tgl_daftar'],
                'tgl_kumpul'                    => $form['tgl_kumpul'],
                'tgl_pengumuman'                => $form['tgl_pengumuman'],
                'link_booklet'                  => $form['link_booklet'],
                'biaya_registrasitim'           => $form['biaya_registrasitim'],
                'biaya_registrasiindividu'      => $form['biaya_registrasiindividu'],
                'link_template_penilaianjuri'   => $form['link_template_penilaianjuri'],
            ];
            $modellomba->save($data); //save data ke database tim
            return redirect()->to(base_url('admin'));
        }
        else return redirect()->base_url('uploadlomba')->with('msg', $msg);

    }

}
