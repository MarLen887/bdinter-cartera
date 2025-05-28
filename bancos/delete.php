<?php
include 'db.php';

$id = $_POST['id'];
$query = "DELETE FROM bancos WHERE id=$id";
echo $conexion->query($query) ? "ok" : "error";
?>
