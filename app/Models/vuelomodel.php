<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    public function subirvuelos($vuelos){
        $this->db->insert('vuelos',$vuelos);
    }
}