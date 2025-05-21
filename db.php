<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
$host = "localhost";
$user = "root";
$password = "";
$db = "planificador";

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die(json_encode(["error" => "Conexión fallida: " . $conn->connect_error]));
}
?>
