<?php
namespace App\Models;

use CodeIgniter\Model;

class Busqueda extends Model
{
    protected $table = 'vuelo';

    public function buscarVueloa($searchTerm){
        $builder = $this->db->table('vuelo');
        $builder->like('destino' , $searchTerm);
        $query = $builder->get();

        return $query->getResult();
    }
}