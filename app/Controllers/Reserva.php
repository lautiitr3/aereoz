<?php

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\ReservaModel;

class Reserva extends Controller
{
    public function procesar()
    {
    return view('pagina_reserva');

    }
    public function datossubidos()
    {
        $model = new ReservaModel();

        $data = array(
            'nombre' => $this->request->getPost('nombre'),
            'apellidos' => $this->request->getPost('apellidos'),
            'email' => $this->request->getPost('email'),
            'telefono' => $this->request->getPost('telefono'),
            'direccion' => $this->request->getPost('direccion'),
            'fecha_nacimiento' => $this->request->getPost('fecha_nacimiento'),
            'nacionalidad' => $this->request->getPost('nacionalidad'),
            'dni' => $this->request->getPost('dni'),
            'asientos' => $this->request->getPost('asientos'),
        );
        $model->procesar($data);
        return view('metodos_pago');
    }
    
}
