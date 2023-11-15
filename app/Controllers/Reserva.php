<?php

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\ReservaModel;
use App\Models\VueloModel;

class Reserva extends Controller
{
    public function procesar($id_vuelo)
    {
    
    $data['id_vuelo'] = $id_vuelo;
    return view('pagina_reserva', $data);

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
        $precio = new VueloModel();
        $data['total']= $precio->verprecio();
        return view('metodos_pago', $data);
    }
    
}
