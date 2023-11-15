<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aereoz</title>
    <link rel="stylesheet" href="<?= base_url("estilos_alternativos.css") ?>">
    <link rel="icon" href="<?php echo base_url("/image/logoo.png") ?>" type="image/x-icon">
</head>
<body>
    <h1>Destinos</h1>
    <div class="flight-list">
        <?php foreach ($vuel as $vuelos): ?>
            <div class="flight-alternative">
                <div class="flight-image">
                    <img src="<?php echo $vuelos['nombre']; ?>" alt="<?php echo $vuelos['destino']; ?>">
                </div>
                <div class="flight-details">
                <h2 class="destination"> Destino: <?php echo $vuelos['destino']; ?></h2>
                    <p>Origen: <?php echo $vuelos['origen']; ?></p>
                    <p>Fecha: <?php echo $vuelos['fecha']; ?></p>
                    <p>Precio: <?php echo $vuelos['precio']; ?></p>
                    <a class="reserve-link" href="<?= base_url('pagina_reserva/').$vuelos['id_vuelo'] ?>"> <button class="reserve-button">Reservar</button></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>