<?php

namespace App\Models;

use CodeIgniter\Model;

class VueloModel extends Model
{
    protected $table = 'vuelo'; 
    
    protected $allowedFields = [
        'id',
        'origen',
        'destino',
        'precio',
        'fecha',
        'imagen',
    ];

    public function subirvuelos($vuelos)
    {
        $this->insert($vuelos);
    }
    public function vervuelos()
    {
        return $this->findAll();
    }
}