<?php
include '../db.php';
$result = $conexion->query("SELECT * FROM bancos");
$data = [];
while ($row = $result->fetch_assoc()) {
  $data[] = $row;
}
echo json_encode($data);
?>
