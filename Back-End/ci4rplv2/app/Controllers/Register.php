<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\Muser;
 
class Register extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        return view('auth/v_register', $data);
    }

    public function save()
    {
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
            'pass_confirm'  => 'matches[password]'
        ];
        
        if($this->validate($rules)){
            $model = new Muser();
            $data = [
                'username' => $this->request->getVar('username'),
                'email'    => $this->request->getVar('email'),
                // 'password_hash()' = password jadi tidak terlihat di database
                // HARUS menggunakan 'password_verify()' ketika membandingkan password 
                // 'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
                'password' => $this->request->getVar('password'),
                'hak_akses'=> 'peserta',
            ];
            $model->save($data);
            session()->setFlashdata('pesan','Berhasil Membuat Akun');
            return redirect()->to(base_url('/login'));
        }
        else{
            //data yang diinput pada form, ditampung array 'validation' untuk ditampilkan lagi
            $data['validation'] = $this->validator;
            
            return view('auth/v_register',$data);
        }
    }
}