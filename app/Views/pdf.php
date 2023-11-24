<!DOCTYPE html>
.<html lang="en">
<head>

</head>
<body>
    <div class="aboradaje">
        <?php foreach ($pase as $abordaje): ?>
            <div class="pase">
                <div class="pase-detalle">
                <h2 class="destination"> Destino: <?php echo $abordaje['destino']; ?></h2>
                    <p>Origen: <?php echo $abordaje['origen']; ?></p>
                    <p>Fecha: <?php echo $abordaje['fecha']; ?></p>
                    <p>Precio: <?php echo $abordaje['precio']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>l