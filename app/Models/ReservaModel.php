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

    public function getReservaDetails($id_reserva)
    {
        $db = db_connect();

        $query = $db->table('reservas');
        $query->select('reservas.*, vuelos.destino, vuelos.origen, vuelos.precio, vuelos.fecha, vuelos.salida');

        $query->join('vuelos', 'reservas.id_vuelo = vuelos.id_vuelo');

        $query->where('reservas.id_reserva', $id_reserva);

        return $query->get()->getRow();
    }

}