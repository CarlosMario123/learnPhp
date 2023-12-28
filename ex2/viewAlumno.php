<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>Alumno</h1>
     <?php
       session_start();

if(isset($_SESSION["alumnoE"])){//Verficiamos que exista para no provocar errores6
//validamos si hay elementos antes
if(count($_SESSION["alumnoE"]) > 0){
    foreach(  $_SESSION["alumnoE"] as $alumno){
        $name = $alumno['nombre'];
        echo "<p>$name</p>";
    }
   }else{

    echo "No hubo resultados";
   }

    //eliminaremos lo de la seccion logic find
    unset($_SESSION["alumnoE"]);
}
       


     ?>
  <br>
     <?php
    include "regresar.php";
      echo buttonLink("index.php","regresar al inicio");
     ?>
</body>
</html>