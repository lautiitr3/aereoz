<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservaModel extends Model
{
    
    protected $table = 'reservas'; // Nombre de la tabla en la base de datos

    protected $allowedFields = [
        'id_reserva',
        'nombre', 
        'apellidos',
        'email', 
        'telefono', 
        'direccion', 
        'fecha_nacimiento', 
        'nacionalidad', 
        'dni', 
        'asientos',
        'id_vuelo',    
    ];
    
    public function procesar($data)
    {
        $this->insert($data);
    }

}