<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservaModel extends Model
{
    
    protected $table = 'reservas'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_reserva'; // Nombre de la clave primaria

    protected $allowedFields = ['nombre', 'apellidos', 'email', 'telefono', 'direccion', 'fecha_nacimiento', 'nacionalidad', 'dni', 'asientos'];
    public function procesar($data)
    {
        $this->insert($data);
    }

}