<?php
include '../db.php';
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$password = $_POST['password'];
$query = "UPDATE usuarios SET nombre='$nombre', correo='$correo', password='$password' WHERE id=$id";
echo $conexion->query($query) ? "ok" : "error";
?>
