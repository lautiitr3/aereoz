<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservaModel extends Model
{
    
    protected $table = 'reservas'; 

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

    public function boardingpass($id_vuelo)
    {
       
        return $this->db->query(
            "SELECT r.nombre,r.apellidos,r.asientos,v.origen,v.destino,v.fecha,v.salida,v.precio FROM reservas AS r 
            INNER JOIN vuelo AS v ON v.id_vuelo = 48 AND r.id_vuelo=48"
        )->getResultArray();
    }

}