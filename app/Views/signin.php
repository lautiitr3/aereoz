<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url ("estilito.css")?>">
    <link rel="icon" href="<?php echo base_url("/image/logoo.png") ?>" type="image/x-icon">
    <title>Aereoz</title>
  </head>
  <body>
  <header class="main-header">
        <div class="header-content">
            <div class="logo">
                <img src="<?php echo base_url("/image/logon.png")?>" alt="Aereoz Logo">
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="http://localhost/aereoz/public/index.php/profile">Inicio</a></li>
                    <li><a href="http://localhost/aereoz/public/">Registrarse</a></li>
                    <li><a href="http://localhost/aereoz/public/VuelosController/destinos">Destinos</a></li>
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
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <h2>Login in</h2>
                
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>

                <form action="<?php echo base_url(); ?>/SigninController/loginAuth" method="post">
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                    </div>

                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control" >
                    </div>
                    
                    <div class="d-grid">
                         <button type="submit" class="btn btn-success">Signin</button>
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