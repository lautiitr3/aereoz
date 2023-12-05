<?php

namespace App\Controllers;
use Dompdf\Dompdf;
use Dompdf\Options;

use App\Models\ReservaModel;

class PdfController extends BaseController
{
    public function generatePdf()
    {
        $reservamodelo = new ReservaModel();

        //$id_vuelo = $this->request->getPost('id_vuelo');

        //$id_vuelo = session()->get('id_vuelo');

        // Obtén el servicio de sesión
        $session = session();

        // Recupera la variable de sesión por su nombre
        $id_reserva = $session->get('id_reserva');

        $data['pase'] = $reservamodelo->boardingpass($id_reserva);
        
        // Cargar la vista pdf.php
        $html = view('pdf', $data);

        // Configurar Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $options->set(array('isRemoteEnabled' => true));

        $dompdf = new Dompdf($options);

        // Cargar el HTML en Dompdf
        $dompdf->loadHtml($html);

        // Establecer el tamaño del papel (A4)
        $dompdf->setPaper('A4', 'portrait');

        // Renderizar el PDF
        $dompdf->render();

        // Descargar el PDF en el navegador
        $dompdf->stream('boarding_pass.pdf', ['Attachment' => 0]);
    }
}