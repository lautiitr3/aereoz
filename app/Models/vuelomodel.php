<?php

namespace App\Models;

use CodeIgniter\Model;

class VueloModel extends Model
{
    protected $table = 'vuelo'; 
    
    protected $allowedFields = [
        'id_vuelo',
        'origen',
        'destino',
        'precio',
        'fecha',
        'id_imagen',
        'id_avion',
    ];

    public function subirvuelos($vuelos)
    {
        var_dump($vuelos);
        $this->insert($vuelos);
    }
    public function vervuelos()
    {
        return $this->db->query(
            "SELECT v.id_vuelo,v.origen,v.destino,v.fecha,v.precio,i.nombre FROM vuelo AS v
            INNER JOIN imagenes AS i ON i.id_imagen = v.id_imagen"
        )->getResultArray();
    }
    public function verprecio()
    {
        return $this->db->query(
            "SELECT v.id_vuelo, v.precio FROM vuelo AS v"
        );
    }

}