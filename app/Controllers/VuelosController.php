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
        );
        //$vuelomodelo->subirvuelos($vuelos);
        $coverImage = $this->request->getFile('imagen');
        if($coverImage->isValid()){
            if ($coverImage->getClientExension() === 'jpg'){
                $targetFolder = FCPATH . '/image';
                if (!is_dir($targetFolder)){
                    mkdir($targetFolder,0777,true);
                }
                $coverImage->move($targetFolder);
                $vueloData['imagen'] = $coverImage->getName();
            }
            else{
                $error = "La imagen seleccionada no es un archivo JPG valido.";
            }
        } else{
           $error = "Por favor, seleccione una imagen para subir.";
        }
        if(isset($error)){
            echo $error;
        }else {

        }
        return redirect()->to(base_url('VuelosController/destinos'));
    }
    public function destinos() 
        {
            $vuelomodelo = new VueloModel();
            $vuelos['vuel']=$vuelomodelo->vervuelos();
            return view('destinos', $vuelos);
           
        }

    public function tuMetodo()
    {
        session()->setFlashdata('Mensaje', 'Vuelo subido correctamente.');
    }   

   
} 