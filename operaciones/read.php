<?php
include '../db.php';
$userId = $_GET['usuario_id'];
$sql = "SELECT * FROM operaciones WHERE usuario_id = $userId";
$result = $conn->query($sql);

$rows = [];
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}
echo json_encode($rows);
?>
