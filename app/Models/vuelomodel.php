<?php

namespace App\Models;

use CodeIgniter\Model;

class VueloModel extends Model
{
    protected $table = 'vuelos';

    public function subirvuelos($vuelos)
    {
        $this->insert($vuelos);
    }
}