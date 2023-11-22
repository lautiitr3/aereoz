<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aereoz</title>
    <link rel="stylesheet" href="<?= base_url ("estilo.css")?>">
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
