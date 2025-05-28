<?php
include 'db.php';
$data = json_decode(file_get_contents("php://input"));
$nombre = $conn->real_escape_string($data->nombre);
$correo = $conn->real_escape_string($data->correo);
$password = password_hash($data->password, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nombre, correo, password) VALUES ('$nombre', '$correo', '$password')";
if ($conn->query($sql)) {
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "error", "message" => $conn->error]);
}
?>
