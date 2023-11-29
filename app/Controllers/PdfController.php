<?php

namespace App\Controllers;

use App\Models\ReservaModel;

class PdfController extends BaseController
{
    public function boardingpass()
    {
        $reservamodelo = new ReservaModel();
        $id_vuelo=$this->request->getPost('id_vuelo');
        $abordaje['pase'] = $reservamodelo->boardingpass( $id_vuelo);
        return view('pdf', $abordaje);
    }
}