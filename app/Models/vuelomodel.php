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
        'id_imagen',
    ];

    public function subirvuelos($vuelos)
    {
        var_dump($vuelos);
        $this->insert($vuelos);
    }
    public function vervuelos()
    {
        return $this->findAll();
    }
}