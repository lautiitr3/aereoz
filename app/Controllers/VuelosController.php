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

    public function subirvuelos()
    {
        $vuelomodelo = new VueloModel();
        $imagenmodelo = new ImagenModel();

        $imagen = $this->request->getFile('imagen');

        if ($imagen !== null && $imagen->isValid() && !$imagen->hasMoved()) {

            $nuevoNombreImagen = $imagen->getName();
            $imagen->move('image', $nuevoNombreImagen);

            $rutaImagen = base_url('image/' . $nuevoNombreImagen);

            $idNuevaImagen = $imagenmodelo->insert(["nombre" => $rutaImagen]);

            $vuelos = array(
                'destino' => $this->request->getPost('destino'),
                'precio' => $this->request->getPost('precio'),
                'origen' => $this->request->getPost('origen'),
                'fecha' => $this->request->getPost('fecha'),
                'id_imagen' => $idNuevaImagen,
            );

            $vuelomodelo->subirvuelos($vuelos);
            return redirect()->to(base_url('VuelosController/destinos'));
        } else {
            return view('subirvuelos', ['error' => 'La imagen no es válida.']);
        }
    }

    public function destinos()
    {
        $vuelomodelo = new VueloModel();
        $vuelos['vuel'] = $vuelomodelo->vervuelos();
        return view('destinos', $vuelos);
    }

    public function precio()
    {
        $Total= $this->request->getPost('precio');
        return view ('metodos_pago',['precio' => $Total]);
    }
    
}
