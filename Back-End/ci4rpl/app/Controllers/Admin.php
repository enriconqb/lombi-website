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
}
