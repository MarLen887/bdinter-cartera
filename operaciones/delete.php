<?php
include '../db.php';
$data = json_decode(file_get_contents("php://input"));

$sql = "DELETE FROM operaciones WHERE id = {$data->id} AND usuario_id = {$data->usuario_id}";
if ($conn->query($sql)) {
    echo json_encode(["status" => "deleted"]);
} else {
    echo json_encode(["status" => "error", "message" => $conn->error]);
}
?>
