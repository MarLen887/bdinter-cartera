<?php
include '../db.php';

$query = "
SELECT 
  o.id,
  o.tipo_operacion,
  o.tipo_pago,
  o.monto,
  o.fecha,
  b.nombre AS banco,
  c.establecimiento AS categoria
FROM operaciones o
JOIN bancos b ON o.banco_id = b.id
JOIN categorias c ON o.id_categoria = c.id
";

$result = $conexion->query($query);
$data = [];

while ($row = $result->fetch_assoc()) {
  $data[] = $row;
}

echo json_encode($data);
?>
