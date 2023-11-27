<?php

namespace App\Controllers;

use App\Models\ReservasModel;

class PdfController extends BaseController
{
    public function detalleReserva($id_reserva)
    {
        $reservasModel = new ReservasModel();
        $detalleReserva = $reservasModel->getReservaDetails($id_reserva);

        return view('pdf', ['detalleReserva' => $detalleReserva]);
    }
}