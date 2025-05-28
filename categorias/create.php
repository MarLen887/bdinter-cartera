<?php
include '../db.php';
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$query = "INSERT INTO categorias (nombre, descripcion) VALUES ('$nombre', '$descripcion')";
echo $conexion->query($query) ? "ok" : "error";
?>
