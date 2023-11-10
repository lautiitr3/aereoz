<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Vuelo</title>
</head>
<body>
    <h1>Reserva de Vuelo</h1>
    <div class="reserva-form">
        <h2>Completa tus datos de reserva:</h2>
        <form action="<?= base_url('procesado') ?>" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required>

            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required>

            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>

            <label for="nacionalidad">Nacionalidad:</label>
            <input type="text" id="nacionalidad" name="nacionalidad" required>

            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni" required>

            <label for="asientos">Número de asientos:</label>
            <input type="number" id="asientos" name="asientos" required>

            <button type="submit" class="reservar-button">Confirmar Reserva</button>
        </form>

    </div>
</body>
</html>
