<?php

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\ReservaModel;
use App\Models\VueloModel;
use Dompdf\Dompdf;


class Reserva extends Controller
{
    public function demoPDF (){
        $dompdf = new Dompdf();
        $dompdf->loadHtml('hello world');

        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();

        $dompdf->stream();
    }

    public function procesar($id_vuelo)
    {
    
    $data['id_vuelo'] = $id_vuelo;
    return view('pagina_reserva', $data);

    }

    public function datossubidos()
    {
        $model = new ReservaModel();
        
        $id_vuelo = $this->request->getPost('id_vuelo');
        $email = $this->request->getPost('email');

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
            'id_vuelo' => $id_vuelo,
        );

       
        
        $model->procesar($data);
        $precio = new VueloModel();
        $datos['total'] = $precio->verprecio($id_vuelo);
        
        $reserva = new ReservaModel();       

        // Obtén el servicio de sesión
        $session = session();

        $id_reserva = $reserva->ultima_resera($email);


        // Guarda la variable en sesión
        $session->set('id_reserva', $id_reserva);

        $miVariableRecuperada = $session->get('id_reserva');

       return view('metodos_pago', $datos);
    }
    
    public function reserva()
    {
        return view ('procesar_reserva');
    }

}
