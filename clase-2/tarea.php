<?php
// Ej 1
$name = "Tony";
echo "Hi, $name";

echo "<br>";
// Ej 2
$num_1 = 5;
$num_2 = 10;

if ($num_2 == 0) {
    echo "No es posible dividir por 0";
} else {
    echo "Resultado {$num_1} / {$num_2} = {($num_1 / $num_2)}";
}

echo "<br>";
// Ej 3

if ($num_1 % 2 == 0 && $num_2 % 2 == 0) {
    echo "Ambos números son par";
} else {
    echo "Uno o ambos números no son par";
}

echo "<br>";
// Ej 4

if ($num_1 < 0 || $num_2 < 0) {
    echo "Hay un número negativo";
} else {
    echo "Ninguno de ambos números es negativo";
}

echo "<br>";
// Ej 5

if ($num_1 < $num_2) {
    for ($i=$num_1; $i < $num_2 ; $i++) { 
        # code...
    }
} else {
    echo "{$num_2} es mayor a {$num_1}";
}

echo "<br>";
// Ej 6

$saldo = 10000;
$costos = [2000, 1000, 5000];
$total = 0;

foreach ($costos as $costo) {
    $total += $costo;
}

if ($saldo >= $total) {
    $saldo = $saldo - $total;
    echo "Nuevo saldo: {$saldo}";
} else {
    echo "Saldo Insuficiente";
}

echo "<br>";
// Ej 7

$saldo = 10000;
$total = 0;

$costos = [
    [
        'detalle' => 'Teclado para computadora',
        'precio' => 3000
    ],
    [
        'detalle' => 'Mouse',
        'precio' => 1000
    ],
    [
        'detalle' => 'Auriculares',
        'precio' => 5000
    ]
];

foreach ($costos as $costo) {
    $total += $costo["precio"];
}

if ($saldo >= $total) {
    $saldo = $saldo - $total;
    echo "Nuevo saldo: {$saldo}";
} else {
    echo "Saldo Insuficiente";
}

?>