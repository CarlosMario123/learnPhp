<?php
session_start(); // Iniciar o reanudar la sesión

if (!isset($_SESSION['miArreglo'])) {
    $_SESSION['miArreglo'] = array(); // Crear el arreglo en la sesión si no existe
}

if (!empty($_POST["nombre"])) {
    $prueba = $_POST["nombre"];
    array_push($_SESSION['miArreglo'], $prueba);

    foreach ($_SESSION['miArreglo'] as $nombre) {
        echo "<p>$nombre</p>";
    }
}
?>
