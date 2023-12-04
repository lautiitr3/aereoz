<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de la Reserva</title>
    <link rel="stylesheet" href="estilos.css"> <!-- Agrega el enlace a tu hoja de estilos aquí -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <style>
        body{
	
	background-color: white ;
}


.bg-blue {
  background: white;
}

.dotted-line {
  border: 1px dashed #fff;
}

.img-fluid {
  width: 114px;
  height: auto;
}

.bg-top {
  background: #5bc0de;
}
    </style>
    <div class="container mt-5 mb-5">
        <?php foreach ($pase as $abordaje): ?>
            <div class="d-flex justify-content-center row">
                <div class="col-md-6">
                    <div class="card border-0">
                        <div class="card-body d-flex flex-column justify-content-between text-white p-0">
                            <div class="p-4 bg-top">
                                <div class="d-flex flex-row justify-content-between">
                                    <div class="d-flex flex-column justify-content-between align-items-center">
                                        <h1><?php echo $abordaje['origen']; ?></h1>
                                        <span class="mb-2"><?php echo $abordaje['origen']; ?></span>
                                        <span><?php echo $abordaje['fecha']; ?></span>
                                        <span><?php echo $abordaje['salida']; ?></span>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center"><i class="fa fa-plane fa-3x"></i></div>
                                    <div class="d-flex flex-column justify-content-between align-items-center">
                                        <h1><?php echo $abordaje['destino']; ?></h1>
                                        <span class="mb-2"><?php echo $abordaje['destino']; ?></span>
                                        <span><?php echo $abordaje['fecha']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-danger p-4">
                                <div class="d-flex flex-column justify-content-between">
                                    <div class="d-flex flex-row justify-content-between text-center">
                                        <div><span class="d-block font-weight-bold">Precio</span><span><?php echo $abordaje['precio']; ?></span></div>
                                        <div><span class="d-block font-weight-bold">Destino</span><span><?php echo $abordaje['destino']; ?></span></div>
                                        <div><span class="d-block font-weight-bold">Origen</span><span><?php echo $abordaje['origen']; ?></span></div>
                                        <div><span class="d-block font-weight-bold">Hora de Abordaje</span><span><?php echo $abordaje['salida']; ?></span></div>
                                    </div>
                                    <div class="doted-lines">
                                        <hr class="dotted-line">
                                    </div>
                                    <div class="d-flex flex-row justify-content-between">
                                        <div class="d-flex flex-column">
                                            <div><span class="d-block font-weight-bold">Pasajero</span><span><?php echo $abordaje['nombre']; ?></span></div>
                                            <div class="mt-3"><span class="d-block font-weight-bold">Asiento</span><span><?php echo $abordaje['asientos']; ?></span></div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-between"><img class="img-fluid" src="<?= base_url ("image/qr.png")?>" alt="Logo de la aerolínea"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>