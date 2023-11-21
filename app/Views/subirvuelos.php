<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aereoz</title>
    <link rel="stylesheet" href="<?= base_url ("style.css")?>"> 
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
                </ul>
            </nav>
        </div>
    </header>
    <h2>Subir Vuelo</h2>
    <form method="post" action="<?= base_url('VuelosController/subirvuelos'); ?>" enctype="multipart/form-data">
    <label for="destino">Destino</label>
    <input type="text" name="destino" id="destino">
    <label for="origen">Origen</label>
    <input type="text" name="origen" id="origen">
    <label for="precio">Precio</label>
    <input type="text" name="precio" id="precio">
    <label for="fecha">Fechas Disponibles</label>
    <input type="date" name="fecha" id="fecha">
    <label for="imagen">Archivo del vuelo:</label>
    <input type="file" name="imagen" id="imagen" required><br>
    <input type="submit" value="Subir Vuelo">
    </form>
</body>
</html>