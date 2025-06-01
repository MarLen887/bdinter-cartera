<?php
include 'db.php';

$id = $_POST['id'];
$tipo_operacion = $_POST['tipo_operacion'];
$tipo_pago = $_POST['tipo_pago'];
$monto = $_POST['monto'];
$fecha = $_POST['fecha'];
$id_categoria = $_POST['id_categoria'];
$usuario_id = $_POST['usuario_id'];
$banco_id = $_POST['banco_id'];

$query = "UPDATE operaciones SET
            tipo_operacion='$tipo_operacion',
            tipo_pago='$tipo_pago',
            monto='$monto',
            fecha='$fecha',
            id_categoria='$id_categoria',
            usuario_id='$usuario_id',
            banco_id='$banco_id'
          WHERE id=$id";

echo $conexion->query($query) ? "ok" : "error";
?>
