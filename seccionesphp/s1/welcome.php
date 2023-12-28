<?php
session_start();

// Verificar si la sesión está iniciada
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "¡Bienvenido, $username!";
} else {
    // Si la sesión no está iniciada, redirigir al usuario al inicio de sesión
    header("Location: login.php");
    exit();
}
?>
