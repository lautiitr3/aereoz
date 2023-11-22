<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aereoz</title>
    <link rel="stylesheet" href="<?= base_url ("styles.css")?>"> 
    <link rel="icon" href="<?php echo base_url("/image/logoo.png") ?>" type="image/x-icon">
</head>
<body>
    <header class="main-header">
        <div class="container">
            <div class="logo">
                <img src="<?php echo base_url("/image/logon.png")?>" alt="Aereoz Logo">
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="http://localhost/aereoz/public/index.php/profile">Inicio</a></li>
                    <li><a href="http://localhost/aereoz/public/VuelosController/destinos"> Destinos</a></li>
                    <?php if (!session()->get('isLoggedIn')) : ?>
                    <li><a href="<?= site_url('/signin') ?>">Iniciar sesión</a></li>
                     <?php endif; ?>
                    <li><?php if (session()->get('isLoggedIn')) : ?>
                        <a href="<?= site_url('/logout') ?>">Cerrar Sesion</a>
                        <?php endif; ?>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <h1>Reserva de Vuelo</h1>
    <div class="reserva-form">
        <h2>Completa tus datos de reserva:</h2>
        <form action="<?= base_url('procesado') ?>" method="post">
            
            <input type="hidden" id="id_vuelo" name="id_vuelo" value="<?php echo $id_vuelo; ?>" >
        
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
