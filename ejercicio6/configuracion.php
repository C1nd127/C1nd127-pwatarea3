<?php
$servername = "localhost";
$username = "root";
$password = "123cindy";
$dbname = "Tarea_3";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
