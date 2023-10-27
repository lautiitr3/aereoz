<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\VueloModel;
  
class VuelosController extends Controller
{
    protected $vueloModel;

    public function __construct()
    {
        $this->vueloModel = new VueloModel();
    }

    public function subirvuelos() {
        return view('subirvuelos');
        $vuelomodelo = new VueloModel();
        $vuelos = array(
            'Destino' => $this->request->getPost('destino'),
            'Precio' => $this->request->getPost('precio'),
        );
    }

    public function tuMetodo()
    {
        session()->setFlashdata('Mensaje', 'Vuelo subido correctamente.');
    }   
} 