<?php
include '../db.php';
$nombre = $_POST['nombre'];
$tipo_tarjeta = $_POST['tipo_tarjeta']; // 'D' o 'C'
$query = "INSERT INTO bancos (nombre, tipo_tarjeta) VALUES ('$nombre', '$tipo_tarjeta')";
echo $conexion->query($query) ? "ok" : "error";
?>
