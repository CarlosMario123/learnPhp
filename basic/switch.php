<?php
echo "Por favor, introduce el numero del dia\n ";
//fgets(STDIN); nos permite introducir datos por consola
$datoConsola = "1";

$day = intval($datoConsola);#intval parsea los datos a enteros

switch ($day) {
    case 1:
        echo "Hoy es lunes.";
        break;
    case 2:
        echo "Hoy es martes.";
        break;
    case 3:
        echo "Hoy es miércoles.";
        break;
    case 4:
        echo "Hoy es jueves.";
        break;
    case 5:
        echo "Hoy es viernes.";
        break;
    case 6:
        echo "Hoy es sábado.";
        break;
    case 7:
        echo "Hoy es domingo.";
        break;
    default:
        echo "Número inválido para representar un día de la semana.";
        break;
}

?>