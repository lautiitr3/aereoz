<?php

namespace App\Models;

use CodeIgniter\Model;

class ImagenModel extends Model
{
    protected $table = 'imagen'; 
    
    protected $allowedFields = [
        'id_imagen',
        'imagen'
    ];
}