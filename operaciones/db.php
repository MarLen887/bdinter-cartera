<?php
$conexion = new mysqli("localhost", "root", "", "planificador");
$conexion->set_charset("utf8");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
