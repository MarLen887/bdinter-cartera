<?php
include '../db.php';
$data = json_decode(file_get_contents("php://input"));

$sql = "INSERT INTO operaciones (tipo_operacion, tipo_pago, monto, fecha, id_categoria, usuario_id, banco_id) VALUES (
  '{$data->tipo_operacion}',
  '{$data->tipo_pago}',
  '{$data->monto}',
  '{$data->fecha}',
  '{$data->id_categoria}',
  '{$data->usuario_id}',
  '{$data->banco_id}'
)";
if ($conn->query($sql)) {
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "error", "message" => $conn->error]);
}
?>
