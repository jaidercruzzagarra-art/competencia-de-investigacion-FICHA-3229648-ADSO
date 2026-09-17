<?php
function sumar($a, $b) {
    return $a + $b;
}

function restar($a, $b) {
    return $a - $b;
}

function multiplicar($a, $b) {
    return $a * $b;
}

function dividir($a, $b) {
    if ($b == 0) {
        return "Error: no se puede dividir entre 0";
    }
    return $a / $b;
}

$numero1 = readline("Ingrese el primer número: ");
$numero2 = readline("Ingrese el segundo número: ");

echo "Seleccione una operación:\n";
echo "1. Sumar\n";
echo "2. Restar\n";
echo "3. Multiplicar\n";
echo "4. Dividir\n";
$opcion = readline("Opción: ");

if ($opcion == 1) {
    echo "Resultado: " . sumar($numero1, $numero2);
} elseif ($opcion == 2) {
    echo "Resultado: " . restar($numero1, $numero2);
} elseif ($opcion == 3) {
    echo "Resultado: " . multiplicar($numero1, $numero2);
} elseif ($opcion == 4) {
    echo "Resultado: " . dividir($numero1, $numero2);
} else {
    echo "Opción no válida";
}
?>