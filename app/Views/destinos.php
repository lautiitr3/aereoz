<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>destinoss</title>
</head>
<body>
    <h1>Vuelos subidos</h1>
    <tbody>
        <?php foreach ($vuel as $vuelos):?>
            <tr>
                <td><?php echo $vuelos['origen']; ?></td>
                <td><?php echo $vuelos['destino']; ?></td>
                <td><?php echo $vuelos['fecha']; ?></td>
                <td><?php echo $vuelos['precio']; ?></td>
                <img src="<?= base_url('image/'. $vuelos['id_imagen']);?>" alt="<?=$vuelos['destino'];?>">
            </tr>
    </tbody>

    <?php endforeach; ?>
</body>
</html>