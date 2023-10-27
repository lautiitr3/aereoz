<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aereoz</title>
    <link rel="stylesheet" href="<?= base_url ("style.css")?>"> <!-- Enlaza tu archivo de estilos CSS -->
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
                    <li><a href></a></li>
                    <!-- Agrega más enlaces de navegación aquí -->
                </ul>
            </nav>
        </div>
    </header>
    <h2>Subir Vuelo</h2>
    <form method="post" action="<?= base_url('VueloController/subirvuelos'); ?>">
    <label for="destino">Destino</label>
    <input type="text" name="destino" id="destino">

    <label for="precio">Precio</label>
    <input type="text" name="precio" id="precio">

    <input type="submit" value="Subir Vuelo">
    </form>
</body>
</html>