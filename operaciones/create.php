<?php
include 'db.php';

$tipo_operacion = $_POST['tipo_operacion'];
$tipo_pago = $_POST['tipo_pago'];
$monto = $_POST['monto'];
$fecha = $_POST['fecha'];
$id_categoria = $_POST['id_categoria'];
$usuario_id = $_POST['usuario_id'];
$banco_id = $_POST['banco_id'];

$query = "INSERT INTO operaciones (tipo_operacion, tipo_pago, monto, fecha, id_categoria, usuario_id, banco_id)
          VALUES ('$tipo_operacion', '$tipo_pago', '$monto', '$fecha', '$id_categoria', '$usuario_id', '$banco_id')";

echo $conexion->query($query) ? "ok" : "error";
?>
