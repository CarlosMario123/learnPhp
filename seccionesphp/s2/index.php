<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
</head>
<body>
    <h2>Productos</h2>
    <ul>
        <li>Producto 1 - <a href="add_to_cart.php?id=1">Agregar al carrito</a></li>
        <li>Producto 2 - <a href="add_to_cart.php?id=2">Agregar al carrito</a></li>
        <!-- Puedes añadir más productos aquí -->
    </ul>
    <p><a href="view_cart.php">Ver carrito</a></p>
</body>
</html>
