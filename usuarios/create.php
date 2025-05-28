<?php
include '../db.php';
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$password = $_POST['password']; // Solo texto, en práctica real deberías hashearla
$query = "INSERT INTO usuarios (nombre, correo, password) VALUES ('$nombre', '$correo', '$password')";
echo $conexion->query($query) ? "ok" : "error";
?>
