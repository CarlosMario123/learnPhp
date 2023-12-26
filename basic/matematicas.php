<?php
// Operaciones básicas
$a = 10;
$b = 5;
$suma = $a + $b; // Suma: 15
$resta = $a - $b; // Resta: 5
$multiplicacion = $a * $b; // Multiplicación: 50
$division = $a / $b; // División: 2

// Funciones matemáticas
$potencia = pow(2, 3); // Potencia: 8
$raiz_cuadrada = sqrt(25); // Raíz cuadrada: 5
$absoluto = abs(-10); // Valor absoluto: 10
$redondeo = round(3.6); // Redondeo: 4
$truncar_abajo = floor(3.6); // Truncar hacia abajo: 3
$truncar_arriba = ceil(3.1); // Truncar hacia arriba: 4

// Funciones trigonométricas
$angulo = 30;
$seno = sin(deg2rad($angulo)); // Seno: 0.5
$coseno = cos(deg2rad($angulo)); // Coseno: 0.86602540378444
$tangente = tan(deg2rad($angulo)); // Tangente: 0.57735026918963

// Funciones exponenciales y logarítmicas
$exponencial = exp(2); // Exponencial: 7.3890560989307
$logaritmo = log(10); // Logaritmo natural: 2.302585092994

// Funciones más avanzadas
$aleatorio = rand(); // Número aleatorio

// Imprimir resultados
echo "Suma: $suma <br>";
echo "Resta: $resta <br>";
echo "Multiplicación: $multiplicacion <br>";
echo "División: $division <br>";

echo "Potencia: $potencia <br>";
echo "Raíz cuadrada: $raiz_cuadrada <br>";
echo "Valor absoluto: $absoluto <br>";
echo "Redondeo: $redondeo <br>";
echo "Truncar hacia abajo: $truncar_abajo <br>";
echo "Truncar hacia arriba: $truncar_arriba <br>";

echo "Seno: $seno <br>";
echo "Coseno: $coseno <br>";
echo "Tangente: $tangente <br>";

echo "Exponencial: $exponencial <br>";
echo "Logaritmo: $logaritmo <br>";

echo "Número aleatorio: $aleatorio <br>";
?>
