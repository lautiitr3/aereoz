<?php

namespace App\Models;

use CodeIgniter\Model;

class ImagenModel extends Model
{
    protected $table = 'imagenes'; 
    
    protected $allowedFields = [
        'id_imagen',
        'nombre'
    ];

    public function subirvuelos($imagen)
    {
        $this->insert($imagen);
    }

    public function verimagen()
    {
        return $this->findAll();
    }
}