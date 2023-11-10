<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class SessionA implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if('$ses_data'['r'] == 1 );
        return view('admin');
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if('$ses_data'['r'] == 2 );
        return view('inicio');
    }
}