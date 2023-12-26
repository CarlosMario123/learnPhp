<?php
// Ejemplo de isset() y empty() en PHP

// Definimos diferentes variables con distintos valores
$var1 = 10;              // Variable definida con un valor numérico
$var2 = "";              // Variable definida con una cadena vacía
$var3 = null;            // Variable definida con valor null
$var4 = [];              // Variable definida como un array vacío
$var5;                   // Variable no definida

// Verificamos si las variables están definidas y tienen valores asignados

// isset() verifica si la variable está definida y tiene un valor distinto de NULL
echo "isset(\$var1): " . isset($var1) . "<br>";    // Devuelve 1 (true) ya que $var1 está definida y tiene un valor
echo "isset(\$var2): " . isset($var2) . "<br>";    // Devuelve 1 (true) ya que $var2 está definida y tiene un valor
echo "isset(\$var3): " . isset($var3) . "<br>";    // Devuelve "" (nada) ya que $var3 está definida pero su valor es null
echo "isset(\$var4): " . isset($var4) . "<br>";    // Devuelve 1 (true) ya que $var4 está definida y tiene un valor (un array vacío)
echo "isset(\$var5): " . isset($var5) . "<br>";    // Devuelve "" (nada) ya que $var5 no está definida

echo "<br>";

// empty() verifica si la variable está definida y su valor es considerado vacío
echo "empty(\$var1): " . empty($var1) . "<br>";    // Devuelve "" (nada) ya que $var1 tiene un valor (10) y no se considera vacío
echo "empty(\$var2): " . empty($var2) . "<br>";    // Devuelve 1 (true) ya que $var2 tiene una cadena vacía
echo "empty(\$var3): " . empty($var3) . "<br>";    // Devuelve 1 (true) ya que $var3 tiene un valor null
echo "empty(\$var4): " . empty($var4) . "<br>";    // Devuelve 1 (true) ya que $var4 es un array vacío
echo "empty(\$var5): " . empty($var5) . "<br>";    // Devuelve 1 (true) ya que $var5 no está definida

?>
