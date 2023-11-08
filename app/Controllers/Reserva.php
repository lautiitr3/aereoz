<?php

namespace App\Controllers;

class Reserva extends BaseController
{
    public function index()
    {
        return view('pagina_reserva');
    }

    public function procesar()
{
    $nombre = $this->request->getPost('nombre');
    $apellidos = $this->request->getPost('apellidos');
    $email = $this->request->getPost('email');
    $telefono = $this->request->getPost('telefono');
    $direccion = $this->request->getPost('direccion');
    $fecha_nacimiento = $this->request->getPost('fecha_nacimiento');
    $nacionalidad = $this->request->getPost('nacionalidad');
    $asientos = $this->request->getPost('asientos');

    // Realiza acciones adicionales, como guardar en la base de datos

    return view('procesar_reserva');
}

}
