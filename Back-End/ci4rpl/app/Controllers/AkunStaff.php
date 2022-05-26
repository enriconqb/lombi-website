<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\Mlomba;
use App\Models\Muser;

class AkunStaff extends BaseController
{
    public function index()
    {
        $model = new Mlomba();
        $modeluser = new Muser();
        $id_lomba = session()->get('id_lomba');
        $data = [
            'id_lomba' => $id_lomba,
            'nama_lomba' => $model->whereIn('id_lomba',[$id_lomba])->first()['nama_lomba'],
            'tbl_user' => $modeluser->whereIn('id_lomba',[$id_lomba])->findAll(),
        ];
        return view('admin/v_akunstaff',$data);
    }


    public function create()
    {
        $model = new Mlomba();
        $modeluser = new Muser();
        $id_lomba = session()->get('id_lomba');
        $data = [
            'id_lomba' => $id_lomba,
            'nama_lomba' => $model->whereIn('id_lomba',[$id_lomba])->first()['nama_lomba'],
            'tbl_user' => $modeluser->whereIn('id_lomba',[$id_lomba])->findAll(),
        ];
        return view('admin/v_akunstaff_add',$data);
    }


    public function add(){

        $model = new Mlomba();
        $modeluser = new Muser();
        $id_lomba = session()->get('id_lomba');

        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'username'      => [
                'rules'     => 'required|min_length[3]|max_length[20]|is_unique[user.username]',
                'errors'    => [
                    'is_unique' => 'Username Sudah dipakai',
                    ],
                ],
            'email'         => [
                'rules'     => 'required|min_length[2]|max_length[50]|valid_email|is_unique[user.email]',
                'errors'    => [
                    'is_unique' => 'Email Sudah dipakai',
                    ],
                ],
            'password'      => 'required|max_length[200]',
        ];
        
        if($this->validate($rules)){
            $modeluser = new Muser();
            $data = $this->request->getPost();
            $modeluser->save($data);
            session()->setFlashdata('pesan','Berhasil Membuat Akun');
            return redirect()->to(base_url('akunstaff'));
        }
        else{
            //data yang diinput pada form, ditampung array 'validation' untuk ditampilkan lagi
            $data = [
                'id_lomba' => $id_lomba,
                'nama_lomba' => $model->whereIn('id_lomba',[$id_lomba])->first()['nama_lomba'],
                'tbl_user' => $modeluser->whereIn('id_lomba',[$id_lomba])->findAll(),
                'validation' => $this->validator,
            ];
            
            return view('admin/v_akunstaff_add',$data);
        }
    }

    public function edit($id_user){

        $model = new Mlomba();
        $modeluser = new Muser();
        $id_lomba = session()->get('id_lomba');
        $data = [
            'id_lomba' => $id_lomba,
            'nama_lomba' => $model->whereIn('id_lomba',[$id_lomba])->first()['nama_lomba'],
            'tbl_user' => $modeluser->whereIn('id_lomba',[$id_lomba])->findAll(),

            'user_detail'=> $modeluser->whereIn('id_user',[$id_user])->first(),
        ];

        return view('admin/v_akunstaff_edit',$data);
    }

    public function update($id_user){
        //include helper form
        helper(['form']);
        $model = new Muser();
        
        $data = [
            'id_lomba'  => $this->request->getVar('id_lomba'),
            'username'  => $this->request->getVar('username'),
            'email'     => $this->request->getVar('email'),
            'password'  => $this->request->getVar('password'),
            'hak_akses' => $this->request->getVar('hak_akses'),
        ];

        $save = $model
        ->whereIn('id_user', [$id_user])
        ->set([
            'id_lomba'  => $data['id_lomba'],
            'username'  => $data['username'],
            'email'     => $data['email'],
            'password'  => $data['password'],
            'hak_akses' => $data['hak_akses'],
            ])
        ->update();
        return redirect()->to(base_url('akunstaff'));        
            
        
    }

    public function delete($id_user){
        $model = new Muser();
        $data = $model->whereIn('id_user', [$id_user])->delete();
        return redirect()->to(base_url('akunstaff'));
    }
}
