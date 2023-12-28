<?php

function viewForm(){

    return '  <form action="addAlumno.php" class="w-72 flex flex-col bg-slate-300 h-96 items-center justify-center" method="post">
    <label for="">Nombre de la alumno</label>
    <input type="text" name="nombre" id="" placeholder="Nombre">
    <label for="">Matricula</label>
    <input type="number" name="matricula" id="">
    <button type="submit" class = "bg-sky-400 text-white w-32 mt-4">Enviar</button>
</form>';
}

?>