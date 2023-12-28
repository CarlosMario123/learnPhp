<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Carrito de compras</title>
</head>
<body>
    <h2>Carrito de compras</h2>
    <?php
    if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        echo "<ul>";
        foreach ($_SESSION['cart'] as $product_id => $value) {
            echo "<li>Producto $product_id <a href='remove_from_cart.php?id=$product_id'>Eliminar</a></li>";
        }
        echo "</ul>";
    } else {
        echo "<p>El carrito está vacío</p>";
    }
    ?>
    <p><a href="index.php">Seguir comprando</a></p>
</body>
</html>
