
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
echo "Hola mundo, encantado de conocerte";

$numero1 = 47;
$numero2 = 67;
$letra = "f";
$cadena = "HOLA";

echo "<br>Variables usadas: <br> numero1: ", $numero1, "<br>numero2: ", $numero2, "<br>letra: ", $letra, "<br>cadena: ", $cadena;

function sumaNumeros(){
    global $numero1;
    global $numero2;
    $suma = $numero1 + $numero2;
    echo "<br>" . $suma;

}

sumaNumeros();

function sumaNumeros2($num1, $num2){
    $suma = $num1 + $num2;
    echo "<br>" . $suma;
}
echo "<br>Especificaciones para printf y sprintf:";
// Especificaciones de tipo para printf (y sprintf que luego veremos, este es igual pero permite almacenar en
// una variable el resultado):
// b, el argumento es tratado como un entero y presentado como un número binario.
printf("<br>Especificacion de tipo b: %b", $numero2);

// c, el argumento es tratado como un entero y presentado como el caracter con dicho valor ASCII
printf("<br>Especificacion de tipo c: %c, %c", $numero1, $numero2);

// d, el argumento es tratado como un entero y presentado como un número decimal:
printf("<br>Especificacion de tipo d: %d", $numero1);

// u, el argumento es tratado como un entero y presentado como un número decimal sin signo.
printf("<br>Especificacion de tipo u: %u", $numero2);

// o, el argumento es tratado como un entero y presentado como un número octal:
printf("<br>Especificacion de tipo o: %o", $numero1);

// x, el argumento es tratado como un entero y presentado como un número hexadecimal (con minusculas):
printf("<br>Especificacion de tipo x: %x", $numero1);

// X, el argumento es tratado como un entero y presentado como un número hexadecimal (con mayúsculas):
printf("<br>Especificacion de tipo X: %X", $numero1);

// f, el argumento es tratado como un doble y presentado como un número de coma flotante (teniendo en cuenta la localidad):
printf("<br>Especificacion de tipo f: %.2f o %.4f", $numero1, $numero1);

// F, el argumento es tratado como un doble y presentado como un número de coma flotante (sin tener en cuenta la localidad):
printf("<br>Especificacion de tipo F: %.2F o %.10F", $numero1, $numero1);

// e, el argumento es presentado en notación científica, utilizando la e minúscula (por ejemplo, 1.2e+3):
printf("<br>Especificacion de tipo e: %.2e o %e", $numero1, $numero1);

// E, el argumento es presentado en notación científica, utilizando la e mayúscula (por ejemplo, 1.2E+3):
printf("<br>Especificacion de tipo E: %E o %.2E", $numero1, $numero1);

// g, se usa la forma más corta entre %f y %e:
printf("<br>Especificacion de tipo g: %g", $numero1);

// G, se usa la forma más corta entre %F y %E.
printf("<br>Especificacion de tipo G: %G", $numero1);

// s, el argumento es tratado como una cadena y es presentado como tal:
printf("<br>Especificacion de tipo s: %s", $numero2);

// %, se muestra el carácter %. No necesita argumento:
// printf("<br>Especificacion de tipo %: %", $numero1); (Mirar como se usa no consegui hacerlo bien)

// Ejemplo de sprintf con la especificacion E:
$unSprintf = sprintf("<br>Especificacion de tipo E: %E o %.2E", $numero1, $numero1);
echo $unSprintf . " Pero imprimiendo una variable con sprintf donde le hemos dado el valor de la especificacion E";

?>

</body>
</html>

