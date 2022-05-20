<?php namespace App\Models;

use CodeIgniter\Model;

class LombaModel extends Model
{
    protected $table = 'lomba';
    function get_lomba_home(){
        $hsl = $this->db->query("SELECT * FROM lomba ORDER BY tgl_daftar DESC");
        return $hsl->getResult();
    }

    function get_lomba_sastra(){
        // if($keyword != ''){
        //     $hsl = $this->db->query("SELECT * FROM lomba WHERE kategori_lomba = '1' AND 'nama_lomba' = '$keyword' ORDER BY tgl_daftar DESC");
        //     return $hsl->getResult();
        // }
        // else{
            $hsl = $this->db->query("SELECT * FROM lomba WHERE kategori_lomba = '1' ORDER BY tgl_daftar DESC");
            return $hsl->getResult();
        // }

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

    // function cari($keyword = null){
    //     $builder = $this->db->table('lomba');
    //     if($keyword != ''){
    //         $bulder->like('nama_lomba', $keyword);
    //     }
    //     return $builder->get()->getResult();
    // }

}