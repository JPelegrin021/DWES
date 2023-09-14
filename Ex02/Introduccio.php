<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    $shopping_cart = isset($shopping_cart) ? $shopping_cart : 9.95;
    $tipo = isset($tipo) ? $tipo : 'cables';

    $shipping_price = 0.0;

    if ($shopping_cart < 20) {
        if ($tipo === 'cables') {
            $shipping_price = "No se puede enviar";
        } elseif ($tipo === 'perifericos') {
            $shipping_price = "Los gastos de envío son 4.99€";
        }
    } elseif ($shopping_cart >= 20 && $shopping_cart <= 50) {
        $shipping_price = "Los gastos de envío son 4.99€";
    } elseif ($shopping_cart > 50) {
        $shipping_price = "Los portes son gratis";
    }

    if ($shopping_cart > 150) {
        $discount_code = "GIMBERNAT_20_%";
    }

    echo "Importe del carrito: " . $shopping_cart;
    echo "Tipo de producto: " . $tipo;
    echo "Precio de envío: " . $shipping_price;

    if (isset($discount_code)) {
        echo "Código de descuento: " . $discount_code;
    }

    ?>
</p>
</body>
