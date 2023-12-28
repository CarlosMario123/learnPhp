<?php
  
  session_start();

 //en esta parte se implementara la busqueda por alumno
 //comprobamos si se envio dato 
  if($_POST["nombreFind"] != ""){

    //implementaremos la busqueda
     $_SESSION["alumnoE"] = realizarBusqueda($_POST["nombreFind"] );//realizamos la busqueda para enviarlo
    header("Location: viewAlumno.php"); // Redirigir a la vista alumno
      exit();
  }else{

    //lo enviara de nuevo al inicioo
    header("Location: index.php"); // Redirigir a la página principal
    exit();
  }


  function realizarBusqueda($nombre){
    $alumnosEncontrados = array();
     //procedemos a a realizar la busqueda


    for($i = 0; $i < count($_SESSION['alumnos']);$i++ ){
        $alumno = $_SESSION["alumnos"][$i];

        if (strpos(strtolower($alumno['nombre']), strtolower($nombre)) !== false) {
            // Si el nombre del alumno coincide (ignorando mayúsculas y minúsculas)
            array_push($alumnosEncontrados, $alumno);
        }
    }
     return $alumnosEncontrados;
  }
?>