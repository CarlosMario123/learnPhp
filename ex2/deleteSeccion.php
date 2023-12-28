<?php


function sectionDeleteStudente(){
    return  "<form class = 'bg-slate-300 w-64 h-36 flex flex-col items-center py-2 gap-y-2 ' method='post' action = 'logicDelete.php'>
    <label class ='text-[1rem text-center'>Ingrese la matricula del alumno a eliminar</label>
     <input type='number' name='matriculaE' placeholder = 'ingrese la matricula' id = 'matriculaE'/>
     <button type='submit' class = 'bg-sky-400 text-white w-32 mt-4' id =  'botonDelete'>Enviar</button>
   </form>";
 }

?>