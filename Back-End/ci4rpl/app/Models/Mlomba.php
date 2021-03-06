<?php

namespace App\Models;

use CodeIgniter\Model;

class Mlomba extends Model
{
    protected $table      = 'lomba';

    protected $allowedFields = ['id_lomba','nama_lomba', 'kategori_lomba','deskripsi_lomba','nama_penyelenggara',
    'persyaratan_lomba','hadiah',
    'tgl_daftar','tgl_kumpul','tgl_pengumuman',
    'file_poster','link_booklet','biaya_registrasitim','biaya_registrasiindividu',
    'link_template_penilaianjuri', 'id_user',
    'status_juara',
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

    function getInfoLombaUser($id_user){
        $value = false;
        $data = $this->whereIn('id_user',[$id_user])->orderBy('nama_lomba')->findAll();
        if($data != NULL){
            $value = true;
        }
        return $value;
    }

    function juara($id_lomba){
        $hsl = $this->db->query("SELECT * FROM lomba WHERE id_lomba = $id_lomba AND status_juara = 'sudah' ");
        return $hsl->getRow();
    }

    public function add($data){
        $this->db->table('lomba')->insert($data);
    }

    public function edit($data){
        $this->db->table('lomba')
        ->where('id_lomba', $data['id_lomba'])
        ->update($data);
    }
}