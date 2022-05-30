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
}
