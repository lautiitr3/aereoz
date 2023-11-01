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
    public function vistasubirvuelos() 
        {
            return view('subirvuelos');
        }
    public function subirvuelos() {
       
        $vuelomodelo = new VueloModel();
        $vuelos = array(
            'destino' => $this->request->getPost('destino'),
            'precio' => $this->request->getPost('precio'),
            'origen' => $this->request->getPost('origen'),
            'fecha' => $this->request->getPost('fecha'),
            'imagen' => $this->request->getFile('imagen'),
        );

        $vuelomodelo->subirvuelos($vuelos);
        return redirect()->to(base_url('VuelosController/destinos'));
    }
    public function destinos() 
        {
            $vuelomodelo = new VueloModel();
            $vuelos['vuel']=$vuelomodelo->vervuelos();
            return view('destinos', $vuelos);
           
        }   
} 