<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Muser;


class Login extends BaseController
{
    public function index(){
        return view('auth/v_login');
    }

    public function auth(){
        $session = session();//Buat obj session
        $model = new Muser();// Ambil database tabel di 'Muser' sebagai variabel 'model'
        
        // Mengambil data input form
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        
        //'first()' Ambil 1 baris data(row) berdasarkan ketentuan [where('element_table',$variable_dicari)]
        $data = $model->where('username', $username)->first();

        if($data){  //True(ditemukan)
            $pass = $data['password'];
            if($password === $pass){
                $verify_pass = true;
            }
            else{
                $verify_pass = false;
            }
            // $verify_pass = password_verify($password, $pass); //pakai 'password_verify' bila "register pass" pakai 'password_hash'
            if($verify_pass){ //True (password cocok)
                $ses_data = [
                    'id_user'       => $data['id_user'],
                    'username'      => $data['username'],
                    'email'         => $data['email'],
                    'hak_akses'     => $data['hak_akses'],
                    'log'           => TRUE //sebagai acuan session
                ];
                $session->set($ses_data);// ses_data masuk ke session
                return redirect()->to(base_url('/home'));
            }
            else{ //False (password tidak cocok)
                $session->setFlashdata('errors', 'Pasword salah');
                return redirect()->to(base_url('/login'));
            }
        }else{  //False (tidak ditemukan)
            $session->setFlashdata('errors', 'Username tidak terdaftar');
            return redirect()->to(base_url('/login'));
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        session()->setFlashdata('pesan','Berhasil Logout');
        return redirect()->to(base_url('/login'));
    }

}

