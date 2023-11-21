<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;


class Adminfiltro implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Verifica el rol del usuario
        if (session()->get('id_rango') != '2'){
            // Si el usuario no tiene el rol 2, destruye la sesión y redirige a la página de inicio de sesión
            session()->destroy();
            return redirect()->to(base_url('/profile'));

        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}