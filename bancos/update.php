<?php
include 'db.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$tipo_tarjeta = $_POST['tipo_tarjeta'];

$query = "UPDATE bancos SET nombre='$nombre', tipo_tarjeta='$tipo_tarjeta' WHERE id=$id";
echo $conexion->query($query) ? "ok" : "error";
?>
