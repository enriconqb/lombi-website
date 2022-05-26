<?php

namespace App\Models;

use CodeIgniter\Model;

class Mtim extends Model
{
    protected $table      = 'tim';

    protected $allowedFields = ['id_tim','emailketua','id_lomba','id_user','nama_tim','nama_instansi',
    'ketua_nama','ketua_nim','link_ktm_ketua',
    'norek','jenisbank',
    'anggota1_nama', 'anggota1_nim',
    'anggota2_nama', 'anggota2_nim',
    'anggota3_nama', 'anggota3_nim',
    'anggota4_nama', 'anggota4_nim',
    'link_buktibayar','status_verif_bayar',
    'link_karya','link_orisinalitas','status_finalist',
    'link_ktm_anggota1',
    'link_ktm_anggota2',
    'link_ktm_anggota3',
    'link_ktm_anggota4',
    ];

    function getDetailTim($id_tim){
        $model = new Mtim();
        $data = $model->where('id_tim',$id_tim)->first();
        return $data;
    }

    function getLastTim(){
        $model = new Mtim();
        $data = $model->orderBy('id_tim','DESC')->first();
        return $data;
    }

}
