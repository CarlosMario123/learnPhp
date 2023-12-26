<?php
// Obtener la fecha y hora actual
$fecha_actual = date("Y-m-d"); // Fecha actual en formato año-mes-día
$hora_actual = date("H:i:s"); // Hora actual en formato hora:minuto:segundo
$fecha_hora_actual = date("Y-m-d H:i:s"); // Fecha y hora actual combinadas

echo "Fecha actual: " . $fecha_actual . "<br>";
echo "Hora actual: " . $hora_actual . "<br>";
echo "Fecha y hora actual: " . $fecha_hora_actual . "<br>";

// Formatear una fecha específica
$timestamp = strtotime("2023-12-31 15:30:00");
$fecha_formateada = date("l, d F Y", $timestamp);

echo "Fecha formateada: " . $fecha_formateada . "<br>";

// Obtener partes específicas de una fecha
$dia = date("d"); // Día actual (01 a 31)
$mes = date("m"); // Mes actual (01 a 12)
$año = date("Y"); // Año actual (ej. 2023)

echo "Día actual: " . $dia . "<br>";
echo "Mes actual: " . $mes . "<br>";
echo "Año actual: " . $año . "<br>";

// Operaciones con fechas
$fecha = "2023-12-31";
$nueva_fecha = strtotime("+1 week", strtotime($fecha));
$fecha_formateada = date("Y-m-d", $nueva_fecha);

echo "Nueva fecha: " . $fecha_formateada . "<br>";

// Zonas horarias
date_default_timezone_set('America/New_York');
$hora_ny = date("H:i:s");

echo "Hora en Nueva York: " . $hora_ny . "<br>";

// Objetos DateTime
$fecha_actual = new DateTime();
echo "Fecha y hora actual (Objeto DateTime): " . $fecha_actual->format('Y-m-d H:i:s') . "<br>";
$fecha_actual->modify('+1 day');
echo "Fecha modificada (Objeto DateTime): " . $fecha_actual->format('Y-m-d') . "<br>";
?>
