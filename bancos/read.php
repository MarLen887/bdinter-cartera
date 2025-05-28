<?php
include 'db.php';

$query = "SELECT * FROM bancos";
$result = $conexion->query($query);

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
?>
