<?php
session_start();

if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
    // Si $_SESSION['cart'] es un array, se itera sobre sus elementos
    foreach ($_SESSION['cart'] as $value) {
        echo $value . "<br>";
    }
} else {
    // Si no es un array o no está definido, se muestra un mensaje de error
    echo "No hay elementos en el carrito o el formato no es un array.";
}
?>
