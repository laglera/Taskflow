<?php

function calcularDescuento($precio, $categoria) {

    if ($categoria == "electronica") {
        $precio = $precio - ($precio * 0.15);
    } else if ($categoria == "ropa") {
        $precio = $precio - ($precio * 0.10);
    } else if ($categoria == "alimentacion") {
        $precio = $precio - ($precio * 0.05);
    }
    return $precio;
}

function fizzBuzz($numero) {
    if ($numero % 3 === 0 && $numero % 5 === 0) {
        return "fizzBuzz";
    } else if ($numero % 3 === 0) {
        return "fizz";
    } else if ($numero % 5 === 0) {
        return "Buzz";
    } else {
        return $numero;
    }
}

function validarContraseña($pass) {
    if (strlen($pass) <= 8) {
        return "DEBIL";
    }

    $tieneMayuscula = false;
    $tieneNumero = false;

    for ($i = 0; $i < strlen($pass); $i++) {
        $char = $pass[$i];

        if (ctype_upper($char)) {
            $tieneMayuscula = true;
        }

        if (is_numeric($char)) {
            $tieneNumero = true;
        }
        if ($tieneMayuscula && $tieneNumero) {
            break;
        }
    }

    if ($tieneMayuscula && $tieneNumero) {
        return "FUERTE";
    } else {
        return "MEDIA";
    }
}

function encontrarMaximo($array) {
    if (empty($array)) {
        return null;
    }

    $maximo = $array[0];

    foreach ($array as $numero) {
        if ($numero > $maximo) {
            $maximo = $numero;
        }
    }

    return $maximo;
}

function filtrarUsuarios($usuarios) {
    $filtrados = [];

    foreach ($usuarios as $usuario) {
        if ($usuario['edad'] >= 18 && $usuario['activo']) {
            $filtrados[] = $usuario;
        }
    }

    return $filtrados;
}
