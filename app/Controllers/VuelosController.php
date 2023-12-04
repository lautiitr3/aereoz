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
        echo view ('header_admin');
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
                'salida' => $this->request->getPost('salida'),
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
        echo view ('footer_view');
    }

    public function buscarDestinos()
{
    $vuelomodelo = new VueloModel();
    $searchTerm = $this->request->getPost('search_term');
    $searchOption = $this->request->getPost('search_option');

    // Validación básica
    if (!empty($searchTerm)) {
        switch ($searchOption) {
            case 'nombre':
                $data['vuel'] = $vuelomodelo->buscarDestinosPorNombre($searchTerm);
                break;
            case 'precio':
                $data['vuel'] = $vuelomodelo->buscarDestinosPorPrecio($searchTerm);
                break;
            case 'fecha':
                $data['vuel'] = $vuelomodelo->buscarDestinosPorFecha($searchTerm);
                break;
            default:
                // Si la opción no es válida, carga todos los destinos
                $data['vuel'] = $vuelomodelo->vervuelos();
                break;
        }
    } else {
        // Si el término de búsqueda está vacío, carga todos los destinos
        $data['vuel'] = $vuelomodelo->vervuelos();
    }

    return view('destinos', $data);
}

    public function precio()
    {
        $Total= $this->request->getPost('precio');
        return view ('metodos_pago',['precio' => $Total]);
    }
    
}
