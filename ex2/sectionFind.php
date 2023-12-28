<?php
  

  function sectionFind(){
  
    //seccion que nos permitira buscar 
    return  "<form class = 'bg-slate-300 w-64 h-36 flex flex-col items-center py-2 gap-y-2 ' method='post' action = 'LogicFind.php'>
     <label class ='text-[1rem text-center'>Ingrese el nombre del alumno a buscar</label>
      <input type='text' name='nombreFind' placeholder = 'ingrese su nombre'/>
      <button type='submit' class = 'bg-sky-400 text-white w-32 mt-4'>Enviar</button>
    </form>";
  }
?>