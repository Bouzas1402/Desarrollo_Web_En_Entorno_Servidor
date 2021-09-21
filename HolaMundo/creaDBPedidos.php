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

$sql = "CREATE TABLE pedidos (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        descripcion VARCHAR(255) NOT NULL,
        precio VARCHAR(255),
        fecha_pedido VARCHAR(255))";

$sentencia = $conexion->prepare($sql);
$sentencia->execute();

$sql = "CREATE TABLE detalles (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        id_articulo VARCHAR(255) NOT NULL,
        precio VARCHAR(255))";

$sentencia = $conexion->prepare($sql);
$sentencia->execute();

$sentencia->close();
$conexion->close();