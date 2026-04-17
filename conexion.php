<?php

$host = "localhost";
$user = "a23eriperdel_apidaw"; 
$pass = "Eldepe2020"; 
$db   = "a23eriperdel_apidaw";

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}

$mysqli->set_charset("utf8");