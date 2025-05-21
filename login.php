<?php
include 'db.php';
$data = json_decode(file_get_contents("php://input"));
$correo = $conn->real_escape_string($data->correo);
$password = $data->password;

$sql = "SELECT * FROM usuarios WHERE correo = '$correo' LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        unset($user['password']); // no enviar el hash
        echo json_encode(["status" => "success", "user" => $user]);
    } else {
        echo json_encode(["status" => "error", "message" => "Contraseña incorrecta"]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Usuario no encontrado"]);
}
?>
