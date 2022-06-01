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
    'link_karya','link_orisinalitas','status_final',
    'link_ktm_anggota1',
    'link_ktm_anggota2',
    'link_ktm_anggota3',
    'link_ktm_anggota4', 'link_suratfinalis',
    'skor','juara',
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

    function detail($id_tim){
        $hsl = $this->db->query("SELECT * FROM tim WHERE id_tim = $id_tim");
        return $hsl->getRow();
    }

    function final($id_lomba,$id_tim){
        $hsl = $this->db->query("SELECT * FROM tim WHERE id_lomba = $id_lomba AND id_tim = $id_tim AND status_final = 'ya' ");
        return $hsl->getRow();
    }

    function notfinal($id_lomba,$id_tim){
        $hsl = $this->db->query("SELECT * FROM tim WHERE id_lomba = $id_lomba AND id_tim = $id_tim");
        return $hsl->getRow();
    }

    function juara1($id_lomba){
        $hsl = $this->db->query("SELECT * FROM tim WHERE id_lomba = $id_lomba AND juara = '1' ");
        return $hsl->getRow();
    }

    function juara2($id_lomba){
        $hsl = $this->db->query("SELECT * FROM tim WHERE id_lomba = $id_lomba AND juara = '2' ");
        return $hsl->getRow();
    }

    function juara3($id_lomba){
        $hsl = $this->db->query("SELECT * FROM tim WHERE id_lomba = $id_lomba AND juara = '3' ");
        return $hsl->getRow();
    }
}
