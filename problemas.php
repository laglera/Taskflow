<?php>
//Problema 1.1: Perfil de Usuario

$nombre = "Nombre";
$apellido = "Apellido";
$edad = 21;
$altura = 1.87;
$esEstudiante = true;

echo $nombre;
echo $apellido;
echo $edad;
echo $altura;
echo $esEstudiante;

//Problema 1.2: Informacion de un producto

$nombreProducto = "Producto";
$precio =  4.99;
$stockDisponible = 100;
$estaOferta = true;
echo "Nombre del producto " . $nombreProducto . "<br>" . "Precio: " . $precio . "<br>" . "Stock Disponible: " . $stockDisponible . "<br>" . "¿Esta en oferta? " . $estaOferta;

//Problema 1.3: Constantes de la Aplicación

$NOMBRE_SITIO = "Mi tienda online";
$VERSION_APP = 1.0;

echo $NOMBRE_SITIO;
echo $VERSION_APP;

//Problema 2.1: Calculadora Básica

$num1 = 10;
$num2 = 5;

echo "Suma: " . ($num1 + $num2) . "<br>";
echo "Resta: " . ($num1 - $num2) . "<br>";
echo "Multiplicación: " . ($num1 * $num2) . "<br>";
echo "División: " . ($num1 / $num2) . "<br>";

//Problema 2.2: Actualización de Stock

$stock = 100;
echo $stock;

$venta = $stock - 25;
echo $venta;

%pedido = $stock + 50;
echo $pedido;

//Problema 2.3: Concatenación de Textos

$nombre = "Oskar";
$apellido = "Calvo";
$curso = "Desarrollo Web en Entorno Servidor";

$fraseCompleta = "El profesor" . $nombre . " " . $apellido . " imparte el curso de " . $curso;

echo $fraseCompleta;

//Problema 2.4: Comparaciones Simples

$edad = 20;
$edadMinima = 18;

echo "¿Edad mayor o igual que edad mínima?: ";
var_dump($edad >= $edadMinima);
echo "<br>";

$contraseñaGuardada = "1234";
$contraseñaUsuario = "123";

echo "¿Las contraseñas son exactamente iguales?: ";
var_dump($contraseñaGuardada === $contraseñaUsuario);
echo "<br>";

//Problema 2.5: ¿Par o impar?

$numero = 7;

if ($numero % 2 == 0) {
    echo "El número " . $numero . " es par<br>";
} else {
    echo "El número " . $numero . " es impar<br>";
}

//Problema 3.1: Còntrol de acceso

$edad = 17;

if ($edad >= 18) {
    echo "Puedes pasar";
} else {
    echo "No puedes pasar"
}

//Problema 3.2: Calificacion del examen

$nota = 7.5;

if ($nota >= 9) {
    echo "Sobresaliente";
} elseif ($nota >= 7 && $nota <= 8.9) {
    echo "Notable";
} elseif ($nota >= 5 && $nota <= 6.9) {
    echo "Bien";
} else {
    echo "Suspendido";
}

//Problema 3.3: Menu del dia con Switch

$diaSemana = "Lunes";

switch($diaSemana) {
    case Lunes:
        echo "Lentejas";
        break;
    case Miercoles:
        echo "Paella";
        break;
    case Viernes:
        echo "Pescado al horno";
        break;
    default:
        echo "No hay menu especial hoy";
        break;
}

//Problema 3.4: Verificacion de usuario avanzada

$rolUsuario = "admin";
$usuarioActivo = true;

if ($rolUsuario == "admin" && $usuarioActivo == true) {
    echo "Acceso concedido";
} else {
    echo "Acceso denegado";
}

//Problema 4.1: Tabla de multiplicar del 7

$numero = 0;

for ($numero = 0; $numero <= 10; $numero++) {
    echo $numero * 7 . "<br>";
}

//Problema 4.2: Cuenta atras para año nuevo

$numero = 10;

while ($numero >= 1) {
    echo $numero . "<br>"";
    $numero--;
}

echo "Feliz año nuevo";

//Problema 4.3: Recorrer nombres

$alumnos = ["Ana", "Juan", "Pedro", "Sofía"];

foreach ($alumnos as $value) {
    echo "Hola, " . $value . "<br>";
}

//Problema 4.4: Listado de productos

$productos = [
["nombre" => "Teclado", "precio" => 50],
["nombre" => "Ratón", "precio" => 25],
["nombre" => "Monitor", "precio" => 200]
];

foreach ($productos as $value) {
    echo "Producto: " . $value["nombre"] . " - Precio: " . $value["precio"] . "€<br>";
}

//Problema 5.1: Ficha de usuario

$fichaAlumno = [
["nombre" => "Alejandro", "edad" => 21, "email" => "alejandro@gmail.com", "esAlumno" => true],
["nombre" => "Javier", "edad" => 19, "email" => "javier@gmail.com", "esAlumno" => false],
["nombre" => "Paula", "edad" => 123, "email" => "paula@gmail.com", "esAlumno" => true]
];

foreach ($fichaAlumno as $value) {
    if ($value["nombre"] == "Alejandro") {
        echo "Nombre: " . $value["nombre"] . "<br>";
        echo "Edad: " . $value["edad"] . "<br>";
        echo "Email: " . $value["email"] . "<br>";
        echo "¿Es alumno?: " . ($value["esAlumno"] ? "Sí" : "No") . "<br>";
    }
}

//Problema 5.2: Filtrado de notas

$notas = [8.5, 4.2, 7.0, 9.8, 5.5, 3.9];

foreach ($notas as $nota) {
    if ($nota >= 5) {
        echo "Nota aprobada: " . $nota . "<br>";
    }
}

//Problema 5.3: Lista de la Compra Avanzada

$listaCompra = [
    "Frutas" => ["Manzanas", "Plátanos", "Naranjas"],
    "Lácteos" => ["Leche", "Queso"],
    "Limpieza" => ["Detergente", "Lejía"]
];

foreach ($listaCompra as $categoria => $productos) {
    echo "<strong>" . $categoria . ":</strong><br>";
    
    foreach ($productos as $producto) {
        echo "- " . $producto . "<br>";
    }

    echo "<br>";
}

//Problema 5.4: Calculando el Total del Carrito

$productos = [
    ["nombre" => "Teclado", "precio" => 50],
    ["nombre" => "Ratón", "precio" => 25],
    ["nombre" => "Monitor", "precio" => 200]
];

$total = 0;

foreach ($productos as $producto) {
    $total += $producto["precio"];
}

echo "El coste total es: " . $total . "€";

?>  