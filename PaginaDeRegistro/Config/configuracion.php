<?php
define("DB_USERNAME", "root");
define("DB_PASSWORD", "quevedo");
define("DB_SERVER", "172.17.0.3");
define("DB_NAME", "usuarios");
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
