<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Método de Pago</title>
    <script src="https://www.paypal.com/sdk/js?client-id=AZQBCaHQ4lHq6OI-mMRoxPv8nHioysdo_lnwAWuXxHgD31c5-3Nvw-fs0_WTL_-ghOvt8WeoipePRltE"></script>
    <link rel="stylesheet" href="<?= base_url ("styles.css")?>"> 
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
    <h1>Seleccione su método de pago</h1>
    <div id="paypal-button-container"></div>

    <script>
            paypal.Buttons({
                style: {
                    shape: 'pill',
                    color: 'blue',
                    layout: 'vertical',
                    label: 'pay',
                },
                createOrder: function(data, actions) {
                    var Total = <?= $total[0]['precio'] ?>;
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: Total.toString()
                            }
                        }]
                    });
                },
                onCancel: function(data) {
                    alert('Pago cancelado');
                },
                onApprove: function(data, actions) {
                    actions.order.capture().then(function(details) {
                        window.location.href = "<?= base_url('reserva') ?>";
                    });
                }
            }).render('#paypal-button-container').then(function() {
                document.querySelector('#paypal-button-container .paypal-button').click();
            });
        </script>
</body>
</html>