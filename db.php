<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'planificador';

$conexion = new mysqli($host, $user, $pass, $db);
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
$conexion->set_charset("utf8");
?>
