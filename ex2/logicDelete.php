<?php
 if($_POST["matriculaE"] == ""){
    header("Location: index.php"); // Redirigir a la página principal
 }

session_start();
$matricula_a_eliminar = $_POST["matriculaE"];
$alumno_encontrado = false; // Bandera para indicar si se encontró al alumno

// Buscamos y eliminamos al alumno por matrícula
if (!empty($_SESSION['alumnos'])) {
    foreach ($_SESSION['alumnos'] as $key => $alumno) {
        if ($alumno['matricula'] === $matricula_a_eliminar) {
            unset($_SESSION['alumnos'][$key]); // Eliminamos el alumno encontrando por su matrícula
            $alumno_encontrado = true; // Cambiamos la bandera ya que se encontró al alumno
            echo "<p>Alumno con matrícula $matricula_a_eliminar eliminado correctamente</p>";
           
            break; // Detenemos el bucle una vez que se elimina el alumno
        }
    }
}

// Si no se encontró al alumno, muestra un mensaje correspondiente
if (!$alumno_encontrado) {
    echo "<p>No se encontró ningún alumno con la matrícula $matricula_a_eliminar</p>";
}
echo "<p>Regresando al inicio.. </p>";
header("refresh:2;url=index.php"); // Redirecciona al inicio después de 2 segundos
exit();
?>
