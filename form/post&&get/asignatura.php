<?php
 //utilizamos la variable global post para recibir
  $datos = $_POST["asignatura"];
  $name = $_POST["nombre"];
  echo "<p>Hola $name</p> 
  <p>la materia que escogiste fue: $datos</p>";
?>