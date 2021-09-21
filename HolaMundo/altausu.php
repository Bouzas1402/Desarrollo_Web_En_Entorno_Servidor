<?php

include("config/configuracion.php");

$conexion = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE);
if ($conexion->connect_error) {
    die("La conexión ha fallado " . $conexion->connect_error);
}
$sql = "INSERT INTO usuarios (nombre, apellidos, email, telefono) 
       VALUES (?, ?, ?, ?)";




$nombre = "Palomo";
$apellidos = "Faci";
$email = "santiago@gamil.com";
$telefono = "123345144435435";
// bind_param solo admite nombres de variables ("ssss" indica el tipo de parametro de debemos meter, tantas eses como parametros me pide la instruccion):
$sentencia = $conexion->prepare($sql);
$sentencia->bind_param("ssss", $nombre, $apellidos, $email, $telefono);
$sentencia->execute();

printf("%d File insertade.\n", $sentencia->affected_rows);


$sentencia->close();
$conexion->close();
