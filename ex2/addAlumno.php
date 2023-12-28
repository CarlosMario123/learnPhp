<?php
 session_start();
require  "regresar.php";
//verificamos si extiste los alumno
if(!isset($_SESSION['alumnos'])) {
    $_SESSION['alumnos'] = array();
}

//Verficamos los datos enviados sean correctos
if($_POST["nombre"] != "" &&  $_POST["matricula"] != ""){
    //paso la verificacion

    //añadimos a los alumnos

     // Creamos un nuevo array con los datos del alumno
     $nuevo_alumno = array(
        'nombre' => $_POST["nombre"],
        'matricula' => $_POST["matricula"]
    );
// Añadimos el nuevo alumno al arreglo 'alumnos' en la sesión
array_push($_SESSION['alumnos'], $nuevo_alumno);
    echo "<p>Alumno creado correctamente</p>";
}else{
    echo "<p>Error al crear el alumno</p>";
}
echo buttonLink("index.php","Regresar al menu");


?>