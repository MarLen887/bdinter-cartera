<?php
include '../db.php';
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$query = "UPDATE categorias SET nombre='$nombre', descripcion='$descripcion' WHERE id=$id";
echo $conexion->query($query) ? "ok" : "error";
?>
