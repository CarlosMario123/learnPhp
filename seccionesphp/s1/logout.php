<?php
session_start();

// Destruir la sesión y redirigir al usuario al inicio de sesión
session_destroy();
header("Location: login.php");
exit();
?>
