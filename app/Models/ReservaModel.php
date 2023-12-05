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

    public function boardingpass($id_reserva)
    {
        return $this->db->query(
            "SELECT r.nombre,r.apellidos,r.asientos,v.origen,v.destino,v.fecha,v.salida,v.precio FROM reservas AS r 
            INNER JOIN vuelo AS v ON v.id_vuelo = r.id_vuelo WHERE R.id_reserva = $id_reserva;"
        )->getResultArray();
    }

    public function ultima_resera($email)
    {
        $query = $this->select('id_reserva')
            ->where('email', $email)
            ->orderBy('id_reserva', 'DESC')
            ->limit(1)
            ->get();


        return $query->getRow()->id_reserva;
      
    }


}