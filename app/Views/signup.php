<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estilon.css">
    <link rel="icon" href="<?php echo base_url("/images/logoo.png") ?>" type="image/x-icon">
    <title>aereoz.com</title>
</head>

<body>
    <header class="main-header">
        <div class="header-content">
            <div class="logo">
                <img src="<?php echo base_url("/images/logon.png")?>" alt="Aereoz Logo">
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="http://localhost/aereoz/public/index.php/profile">Inicio</a></li>
                    <li><a href="http://localhost/aereoz/public/">Registrarse</a></li>
                    <li><a href="http://localhost/aereoz/public/index.php/signin">Iniciar sesión</a></li>
                    <li><a href="http://localhost/pruebitaashe/public/destinos">Destinos</a></li>
                    <!-- Agrega más enlaces de navegación aquí -->
                </ul>
            </nav>
        </div>
    </header>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <h2>Register User</h2>

                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>

                <form action="<?php echo base_url(); ?>/SignupController/store" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="name" placeholder="Name" value="<?= set_value('name') ?>" class="form-control" >
                    </div>

                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                    </div>

                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control" >
                    </div>

                    <div class="form-group mb-3">
                        <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control" >
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Signup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer">
            <p>&copy; 2023 Aereoz. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>

</html>
