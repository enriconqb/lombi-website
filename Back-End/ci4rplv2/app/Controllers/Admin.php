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
        $data['matakuliah_detail'] = $model->whereIn('id_user',[$id_user])->orderBy('id_lomba')->findAll();
        return view('admin/v_admin',$data);
    }
}
