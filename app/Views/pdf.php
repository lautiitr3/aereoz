<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de la Reserva</title>
</head>
<body>
    <h1>Detalles de la Reserva</h1>
    <p>Nombre: <?= $detalleReserva->nombre ?></p>
    <p>Apellidos: <?= $detalleReserva->apellidos ?></p>
    <p>Destino del Vuelo: <?= $detalleReserva->destino ?></p>
    <p>Origen del Vuelo: <?= $detalleReserva->origen ?></p>
    <p>Precio del Vuelo: <?= $detalleReserva->precio ?></p>
    <p>Fecha del Vuelo: <?= $detalleReserva->fecha ?></p>
    <p>Hora de Salida del Vuelo: <?= $detalleReserva->salida ?></p>
</body>
</html>
