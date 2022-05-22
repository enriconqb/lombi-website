<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id_user';

    protected $allowedFields = ['email', 'username', 'password' ];

    function user($id_user){
        return $this->db->table('tim')
        ->join('user', 'user.id_user = tim.id_user')
        ->where('id_user', $id_user)
        ->get()->getResultArray();
    }

    function get_data_user(){
        $hsl = $this->db->query("SELECT * FROM user");
        return $hsl->getResult();
    }
}