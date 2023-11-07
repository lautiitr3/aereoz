<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aereoz</title>
    <link rel="stylesheet" href="<?= base_url ("estilo.css")?>"> <!-- Enlaza tu archivo de estilos CSS -->
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
                    <li><a href="#">Inicio</a></li>
                    <li><a href="http://localhost/aereoz/public/">Registrarse</a></li>
                    <li><a href="http://localhost/aereoz/public/index.php/signin">Iniciar sesión</a></li>
                    <li><a href="http://localhost/aereoz/public/VuelosController/destinos"> Destinos</a></li>
                    <!-- Agrega más enlaces de navegación aquí -->
                </ul>
            </nav>
        </div>
    </header>
    
    <section class="hero">
        <div class="container">
            
            <h2>Descubre el mundo con Aereoz</h2>
            <p>Encuentra los mejores vuelos y destinos para tus próximas aventuras.</p>
            <a href="" class="btn">Reservar ahora</a>
        </div>
    </section>
    <section class="image-gallery">
    <div class="image">
        <img src="<?= base_url ("image/destino1.jpg")?>" alt="Imagen 1">
    </div>
    <div class="image">
        <img src="<?= base_url ("image/destino2.jpg")?>" alt="Imagen 2">
    </div>
    <div class="image">
        <img src="<?= base_url ("image/holaa.jpg")?>" alt="Imagen 3">
    </div>
    
    <!-- Agrega más imágenes aquí -->
</section>
    
    <footer>
        <div class="container">
            <p>&copy; 2023 Aereoz. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>