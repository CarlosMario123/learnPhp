<?php
session_start();

if(isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Eliminar el producto del carrito
    unset($_SESSION['cart'][$product_id]);
    header("Location: view_cart.php"); // Redirigir a la página del carrito
    exit();
}
?>
