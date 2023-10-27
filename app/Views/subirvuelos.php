<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aereoz</title>
</head>
<body>
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