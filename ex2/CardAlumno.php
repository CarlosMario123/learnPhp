<?php
  
  //una manera mas bonita de mostra la informacion de los alumnos

  function CardAlumno($nombre,$matricula){

    return "<article class = 'w-64 h-28 flex flex-col items-center bg-sky-600 text-white '>
     <p>Nombre: $nombre</p>
     <p>Matricula: $matricula</p>
    </article>";
  }
?>