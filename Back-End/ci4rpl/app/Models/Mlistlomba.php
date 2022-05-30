<?php

namespace App\Models;

use CodeIgniter\Model;

class Mlistlomba extends Model
{
    protected $table      = 'list_lomba';

    protected $allowedFields = ['id_user','nama_lomba','nama_tim','status_verif_bayar','status_kelengkapanberkas','id_lomba','id_tim','skor','status_final'];

    function final($id_lomba,$id_tim){
        $hsl = $this->db->query("SELECT * FROM list_lomba WHERE id_lomba = $id_lomba AND id_tim = $id_tim AND status_final = 'ya' ");
        return $hsl->getRow();
    }

    function juara1($id_lomba){
        $hsl = $this->db->query("SELECT * FROM list_lomba WHERE id_lomba = $id_lomba AND juara = '1' ");
        return $hsl->getRow();
    }

    function juara2($id_lomba){
        $hsl = $this->db->query("SELECT * FROM list_lomba WHERE id_lomba = $id_lomba AND juara = '2' ");
        return $hsl->getRow();
    }

    function juara3($id_lomba){
        $hsl = $this->db->query("SELECT * FROM list_lomba WHERE id_lomba = $id_lomba AND juara = '3' ");
        return $hsl->getRow();
    }
}