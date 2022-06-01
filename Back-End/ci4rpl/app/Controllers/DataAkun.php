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

class DataAkun extends BaseController
{
    public function index()
    {
        $model = new Mlomba();
        $modeluser = new Muser();
        $id_lomba = session()->get('id_lomba');
        $data = [
            'tbl_user' => $modeluser->findAll(),
        ];
        return view('admin/v_dataakun',$data);
    }


    public function create()
    {
        return view('admin/v_dataakun_add');
    }


    public function add(){

        $model = new Mlomba();
        $modeluser = new Muser();

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
            $data = $this->request->getPost(); // ambil data form
            $modeluser->save($data); // save ke database
            session()->setFlashdata('pesan','Berhasil Membuat Akun');
            return redirect()->to(base_url('dataakun'));
        }
        else{
            //data yang diinput pada form, ditampung array 'validation' untuk ditampilkan lagi
            $data = [
                'validation' => $this->validator,
            ];
            
            return view('admin/v_dataakun_add',$data);
        }
    }

    public function edit($id_user){

        $model = new Mlomba();
        $modeluser = new Muser();
        $id_lomba = session()->get('id_lomba');
        $data = [
            'user_detail'=> $modeluser->whereIn('id_user',[$id_user])->first(),
        ];

        return view('admin/v_dataakun_edit',$data);
    }

    public function update($id_user){
        //include helper form
        helper(['form']);
        $model = new Muser();
        
        $data = [
            'username'  => $this->request->getVar('username'),
            'email'     => $this->request->getVar('email'),
            'password'  => $this->request->getVar('password'),
            'hak_akses' => $this->request->getVar('hak_akses'),
        ];

        $save = $model
        ->whereIn('id_user', [$id_user])
        ->set([
            'username'  => $data['username'],
            'email'     => $data['email'],
            'password'  => $data['password'],
            'hak_akses' => $data['hak_akses'],
            ])
        ->update();
        return redirect()->to(base_url('dataakun'));        
            
        
    }

    public function delete($id_user){
        $modelbayar         = new Mbayar();
        $modelberkas        = new Mberkas();
        $modeljuri          = new Mjuri();
        $modellistlomba     = new Mlistlomba();
        $modellomba         = new Mlomba();
        $modeltim           = new Mtim();
        $modeluser          = new Muser();

        $isStaff = false;
        if($modeluser->whereIn('id_user',[$id_user])->first()['id_lomba'] !== NULL){
            $isStaff = true;
        }

        if (! $isStaff){
            $datalomba = $modellomba->whereIn('id_user', [$id_user])->findAll();
            foreach($datalomba as $data){
                $id_lomba = $data['id_lomba'];
                $data = $modelbayar->whereIn('id_lomba', [$id_lomba])->delete();
                $data = $modelberkas->whereIn('id_lomba', [$id_lomba])->delete();
                $data = $modeljuri->whereIn('id_lomba', [$id_lomba])->delete();
                $data = $modellistlomba->whereIn('id_lomba', [$id_lomba])->delete();
                $data = $modellomba->whereIn('id_lomba', [$id_lomba])->delete();
                $data = $modeltim->whereIn('id_lomba', [$id_lomba])->delete();
                $data = $modeluser->whereIn('id_lomba', [$id_lomba])->delete();
            }
            $data = $modeluser->whereIn('id_user', [$id_user])->delete();
        }
        else{
            $data = $modeluser->whereIn('id_user', [$id_user])->delete();
        }
        return redirect()->to(base_url('dataakun'));
    }
}
