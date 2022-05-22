<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;
use App\Models\AuthModel;

class Auth extends BaseController
{
    public function register(){
      $val = $this->validate(
          [
              'email' => 'required',
              'username' => [
                    'rules' => 'required|is_unique[user.username]',
                    'errors' =>[
                        'is_unique' =>'{field} Sudah dipakai'
                                ]
                            ],
              'password' => 'required',
          ],
        );

      if(!$val){
          $pesanvalidasi = \Config\Services::validation();
          return redirect()->to('/daftar')->withInput()->with('validate',$pesanvalidasi);
      }
      $password = $this->request->getPost('password');
      $upass = $this->request->getPost('pass_confirm');

      if($password !== $upass){
        session()->setFlashdata('pesan','Password harus sama!');
        return redirect()->to('/daftar');
      }
      else{
          $data = array(
            'email' => $this->request->getPost('email'),
            'username' => $this->request->getPost('username'),
            'password' => $password,
            'hak_akses' => 'peserta',
        );
        $model = new UsersModel;
        $model->insert($data);
        session()->setFlashdata('pesan','Selamat Anda berhasil Registrasi, silakan login!');
        return redirect()->to(base_url('/login'));
      }
    }

    public function login(){
        $model = new AuthModel;
        $table = 'user';
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $row = $model->get_data_login($username,$table);
        if ($row === NULL){
          session()->setFlashdata('pesan','Username tidak terdaftar');
          return redirect()->to(base_url('/login'));
        }
        if ($password === $row->password){
                $data = array(
                    'log' => TRUE,
                    'email' => $row->email,
                    'username' => $row->username,
                );
                session()->set($data);
                session()->setFlashdata('pesan','Berhasil Login');
                return redirect()->to(base_url('/home'));
        }
        session()->setFlashdata('pesan','Password Salah');
        return redirect()->to(base_url('/login'));
        
    }

    public function logout(){
        $session = session();
        $session->destroy();
        session()->setFlashdata('pesan','Berhasil Logout');
        return redirect()->to(base_url('/login'));
    }
}