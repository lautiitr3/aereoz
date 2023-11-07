<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\VueloModel;
use App\Models\ImagenModel;
  
class VuelosController extends Controller
{
    protected $vueloModel;
    protected $ImagenModel;
    
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
        $imagenmodelo = new ImagenModel();
        
        $vuelos = new \App\Models\VueloModel();
        $ImagenModel = new \App\Models\ImagenModel();
        $imagen = $this->request->getFile('imagen');
        var_dump($imagen);
        echo $imagen;  
        if ($imagen !== null && $imagen->isValid() && !$imagen->hasMoved()) {

            $nuevoNombreImagen = $imagen->getRandomName();
           
        //    $imagen->move('image', $nuevoNombreImagen);

            $rutaImagen = base_url('image/' . $nuevoNombreImagen);
            echo   $rutaImagen ;
            $idNuevaImagen = $ImagenModel->insert(["nombre" => $rutaImagen]);

            $vuelos = array(
                'destino' => $this->request->getPost('destino'),
                'precio' => $this->request->getPost('precio'),
                'origen' => $this->request->getPost('origen'),
                'fecha' => $this->request->getPost('fecha'),
                'id_imagen' => $idNuevaImagen,
            );
            var_dump($vuelos);
            $vuelomodelo->subirvuelos($vuelos);
            return redirect()->to(base_url('VuelosController/destinos'));
       }else {
          
        var_dump($imagen);

      }
       
    }
    public function destinos() 
        {
            $vuelomodelo = new VueloModel();
            $vuelos['vuel']=$vuelomodelo->vervuelos();
            return view('destinos', $vuelos);
           
        }   
} 