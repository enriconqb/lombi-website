<?php

namespace App\Models;

use CodeIgniter\Model;

class Mlomba extends Model
{
    protected $table      = 'lomba';

    protected $allowedFields = ['id_lomba','nama_lomba', 'kategori_lomba','deskripsi_lomba','nama_penyelenggara',
    'persyaratan_lomba','hadiah',
    'tgl_daftar','tgl_kumpul','tgl_pengumuman',
    'file_poster','link_booklet','biaya_regisrasitim','biaya_regitrasiindividu',
    'link_template_penilaianjuri', 'id_user',
    ];

    function get_lomba_home(){
        $hsl = $this->db->query("SELECT * FROM lomba ORDER BY kategori_lomba ASC");
        return $hsl->getResult();
    }

    function get_lomba_sastra(){
        $hsl = $this->db->query("SELECT * FROM lomba WHERE kategori_lomba = '1' ORDER BY tgl_daftar DESC");
        return $hsl->getResult();

    }

    function get_lomba_programming(){
        $hsl = $this->db->query("SELECT * FROM lomba WHERE kategori_lomba = '2' ORDER BY tgl_daftar DESC");
        return $hsl->getResult();
    }

    function get_lomba_seni(){
        $hsl = $this->db->query("SELECT * FROM lomba WHERE kategori_lomba = '3' ORDER BY tgl_daftar DESC");
        return $hsl->getResult();
    }

    function detail($id_lomba){
        $hsl = $this->db->query("SELECT * FROM lomba WHERE id_lomba = $id_lomba");
        return $hsl->getRow();
    }

    function detailArray($id_lomba){
        $hsl = $this->db->query("SELECT * FROM lomba WHERE id_lomba = $id_lomba");
        return $hsl->getRowArray();
    }

}