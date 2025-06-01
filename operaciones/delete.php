<?php
include 'db.php';

$id = $_POST['id'];
$query = "DELETE FROM operaciones WHERE id=$id";

echo $conexion->query($query) ? "ok" : "error";
?>
