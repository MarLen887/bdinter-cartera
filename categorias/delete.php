<?php
include '../db.php';
$id = $_POST['id'];
$query = "DELETE FROM categorias WHERE id=$id";
echo $conexion->query($query) ? "ok" : "error";
?>
