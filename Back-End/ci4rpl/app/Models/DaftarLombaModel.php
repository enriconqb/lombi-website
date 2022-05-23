<?php namespace App\Models;

use CodeIgniter\Model;

class DaftarLombaModel extends Model
{
    protected $table      = 'tim';
    protected $primaryKey = 'id_tim';

    protected $allowedFields = ['emailketua', 'id_lomba','nama_tim', 'id_user', 'nama_instansi', 'ketua_nama', 'ketua_nim',  'link_ktm_ketua', 'norek', 'jenisbank', 'anggota1_nama', 'anggota1_nim', 'anggota2_nama', 'anggota2_nim', 'anggota3_nama', 'anggota3_nim', 'anggota4_nama', 'anggota4_nim', 'link_buktibayar', 'status_verif_bayar', 'link_karya', 'link_orisinalitas', 'status_finalist', 'link_suratfinalis', 'link_ktm_anggota1', 'link_ktm_anggota2', 'link_ktm_anggota3', 'link_ktm_anggota4' ];

    public function getAll()
    {             
        $builder = $this->db->table('tim');
        $builder->join('lomba', 'lomba.id_lomba = tim.id_lomba');
        $query = $builder->get();
        return $query->getResult();
    }

    function get_data_payment($emailketua){
        $builder = $this->db->table('tim');
        $builder->join('lomba', 'lomba.id_lomba = tim.id_lomba');
        $builder->where('emailketua',$emailketua);
        $query = $builder->get();
        return $query->getResult();
    }
}