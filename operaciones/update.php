<?php
include '../db.php';
$data = json_decode(file_get_contents("php://input"));

$sql = "UPDATE operaciones SET 
    tipo_operacion = '{$data->tipo_operacion}',
    tipo_pago = '{$data->tipo_pago}',
    monto = '{$data->monto}',
    fecha = '{$data->fecha}',
    id_categoria = '{$data->id_categoria}',
    banco_id = '{$data->banco_id}'
    WHERE id = {$data->id} AND usuario_id = {$data->usuario_id}";

if ($conn->query($sql)) {
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "error", "message" => $conn->error]);
}
?>
