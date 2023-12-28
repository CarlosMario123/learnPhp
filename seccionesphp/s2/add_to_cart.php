<?php
session_start();

//manamos por id
if(isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Agregar el producto al carrito
    $_SESSION['cart'][$product_id] = true;
    header("Location: index.php"); // Redirigir a la página principal
    exit();
}
?>
