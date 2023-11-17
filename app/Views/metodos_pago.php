<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Método de Pago</title>
    <script src="https://www.paypal.com/sdk/js?client-id=AZQBCaHQ4lHq6OI-mMRoxPv8nHioysdo_lnwAWuXxHgD31c5-3Nvw-fs0_WTL_-ghOvt8WeoipePRltE"></script>
    <link rel="stylesheet" href="<?= base_url ("styles.css")?>"> <!-- Enlaza tu archivo de estilos CSS -->
</head>
<body>
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
                        window.location.href = "<?= base_url('inicio') ?>";
                    });
                }
            }).render('#paypal-button-container').then(function() {
                document.querySelector('#paypal-button-container .paypal-button').click();
            });
        </script>
</body>
</html>