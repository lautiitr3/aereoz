<?php 

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\VueloModel;




class VuelosController extends Controller
{
    public function pdf(){
        return view('pdf');
    }

    protected $vueloModel;

    public function paseaboradje(){
        $abordaje = array(
            'destino' => $this->request->getPost('destino'),
            'precio' => $this->request->getPost('precio'),
            'origen' => $this->request->getPost('origen'),
            'fecha' => $this->request->getPost('fecha'),
        );
    }
}