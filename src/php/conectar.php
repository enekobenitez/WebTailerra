<?php
$servername = "127.0.0.1";
$username = "root";
$password = "1WMG2023";
$dbname = "mekanizatua";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>