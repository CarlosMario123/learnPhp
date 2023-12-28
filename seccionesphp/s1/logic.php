<?php
session_start();

// Verificar las credenciales (aquí se simula con valores fijos)
$usuario_valido = 'usuario';
$contrasena_valida = '1234';

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === $usuario_valido && $password === $contrasena_valida) {
        // Credenciales correctas, iniciar sesión
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        // Credenciales incorrectas, mostrar mensaje de error
        echo "Nombre de usuario o contraseña incorrectos.";
    }
} else {
    echo "Por favor, ingresa nombre de usuario y contraseña.";
}
?>
