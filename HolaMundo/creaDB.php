<?php
include("config/configuracion.php");

$conexion = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD);
if ($conexion->connect_error) {
    die("La conexión ha fallado " . $conexion->connect_error);
}
$sql = "CREATE DATABASE " . DB_NOMBRE;
$sentencia = $conexion->prepare($sql);
$sentencia->execute();

$conexion->select_db(DB_NOMBRE);

$sql = "CREATE TABLE usuarios (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(255) NOT NULL,
        apellidos VARCHAR(255),
        email VARCHAR(255),
        telefono VARCHAR(50) UNIQUE)";

$sentencia = $conexion->prepare($sql);
$sentencia->execute();

$sentencia->close();
$conexion->close();