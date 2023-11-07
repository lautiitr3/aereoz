<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aereoz</title>
    <link rel="stylesheet" href="<?= base_url ("estilos.css")?>">
    <link rel="icon" href="<?php echo base_url("/image/logoo.png") ?>" type="image/x-icon">
</head>
<body>
    <h1>Destinos</h1>
    <table>
        <thead>
            <tr>
                <th>Origen</th>
                <th>Destino</th>
                <th>Fecha</th>
                <th>Precio</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vuel as $vuelos):?>
                <tr>
                    <td><?php echo $vuelos['origen']; ?></td>
                    <td><?php echo $vuelos['destino']; ?></td>
                    <td><?php echo $vuelos['fecha']; ?></td>
                    <td><?php echo $vuelos['precio']; ?></td>
                    <td><img src="<?php echo $vuelos['nombre']; ?>" alt="<?php echo $vuelos['destino']; ?>"></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>