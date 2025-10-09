<?php

//Desafio 1: Sucesion de Fibonacci

$numeros = [];

for ($i = 0; $i < 20; $i++) {
    if ($i == 0) {
        $numeros[] = 0;
    } elseif ($i == 1) {
        $numeros[] = 1;
    } else {
        $numeros[] = $numeros[$i - 1] + $numeros[$i - 2];
    }
}

//Desafio 2: Comprobador de numeros primos

$numero = 29;
$esPrimo = true;

if ($numero <= 1) {
    $esPrimo = false;
} else {
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            $esPrimo = false;
            break;
        }
    }
}

if ($esPrimo) {
    echo "$numero es primo";
} else {
    echo "$numero no es primo";
}

//Desafio 3: ¿Es un palindromo?

$palabra = "sometemos";
$esPalindromo = true;

$longitud = strlen($palabra);

for ($i = 0; $i < $longitud / 2; $i++) {
    if ($palabra[$i] !== $palabra[$longitud - $i - 1]) {
        $esPalindromo = false;
        break;
    }
}

if ($esPalindromo) {
    echo "Es un palíndromo";
} else {
    echo "No es un palíndromo";
}

//Desafío 4: Ordenación Manual de un Array

$numeros = [5, 2, 8, 1, 9, 4];
$n = count($numeros);

for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($numeros[$j] > $numeros[$j + 1]) {
            // Intercambiamos los elementos
            $temp = $numeros[$j];
            $numeros[$j] = $numeros[$j + 1];
            $numeros[$j + 1] = $temp;
        }
    }
}

echo "Array ordenado: " . implode(", ", $numeros);

//Mini-Proyecto: Simulador de Cajero Automático (ATM)

$saldo = 1000;
$pinCorrecto = 1234;
$pinUsuario = 1234;
$opcion = 1;

if ($pinUsuario == $pinCorrecto) {
    echo "PIN Correcto<br>";

    switch ($opcion) {
        case 1:
            echo "Tu saldo actual es de " . $saldo . "€";
            break;

        case 2:
            $ingreso = 50;
            $saldo = $saldo + $ingreso;
            echo "Has ingresado " . $ingreso . "€. Tu saldo actual es de " . $saldo . "€";
            break;

        case 3:
            $retiro = 100;
            if ($retiro <= $saldo) {
                $saldo = $saldo - $retiro;
                echo "Has retirado " . $retiro . "€. Tu saldo actual es de " . $saldo . "€";
            } else {
                echo "Saldo insuficiente para realizar la operación.";
            }
            break;

        default:
            echo "Opción no válida.";
            break;
    }
} else {
    echo "PIN Incorrecto. Operación cancelada.";
}

//Desafio creativo: Arte con bucles

$altura = 10;

for ($i = 1; $i <= $altura; $i++) {
    // Imprimir espacios antes de los asteriscos
    for ($j = 1; $j <= $altura - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }

    // Imprimir los asteriscos
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }

    // Salto de línea
    echo "<br>";
}

?>
