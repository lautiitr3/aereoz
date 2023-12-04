<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aereoz</title>
    <link rel="stylesheet" href="<?= base_url("/estilos_alternativos.css")?>"> 
    <link rel="icon" href="<?php echo base_url("/image/logoo.png") ?>" type="image/x-icon">
</head>
<body>
    <header class="mainnnn">
        <div class="containerr">
            <div class="logo">
                <img src="<?php echo base_url("/image/logon.png")?>" alt="Aereoz Logo">
            </div>
            <nav class="mainnav">
                <input class="search-input" type="text" name="search_term" placeholder="Buscar Vuelos">
                <button class="seach-button" type="submit">Buscar</button>
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
                    <p>Hora De Salida: <?php echo $vuelos['salida']; ?></p>
                    <p>Precio: <?php echo $vuelos['precio']; ?></p>
                    <a class="reserve-link" href="<?= base_url('pagina_reserva/').$vuelos['id_vuelo'] ?>"> <button class="reserve-button">Reservar</button></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <footer>
        <div class="container">
            <p>&copy; 2023 Aereoz. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>