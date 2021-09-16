
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
$numero2 = 19;

function sumaNumeros(){
    global $numero1;
    global $numero2;
    $suma = $numero1 + $numero2;
    echo "<br>" . $suma;

}

sumaNumeros();
?>
</body>
</html>

