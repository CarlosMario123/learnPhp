<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha de hoy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
     <div class = "w-full h-screen flex  items-center bg-sky-400 flex-col px-4 ">
           <?php
           $fecha = date("d/m/Y"); //date para conseguir la fecha con dia/mes/año
            echo "<p class = 'text-white text-2xl font-bold w-full' >$fecha</p>";
           ?>
                   
            <div class = "w-full mt-10 justify-center flex flex-col">
            <h2 class = "text-2xl font-black text-2xl text-white">Paises</h2>
                <?php
                
                $paises = array("mexico","turquia","españa","uruguay","argentina");
            
            foreach($paises as $pais){
                echo "<p class = 'text-2xl font-semibold'>-$pais</p>";
              }
            ?>
            </div>
     </div>
</body>
</html>