<?php
   require "regresar.php";

   function sectionAlumno(){
    $redirecionar = buttonLink("listAlumno.php","ver alumnos");
     return "<section class =  'bg-slate-300 w-64 h-32 flex flex-col items-center py-3'>
        <p class ='text-[1.2rem]'>Ver lista de todos los alumnos</p>
          $redirecionar
     </section>";
   }
?>