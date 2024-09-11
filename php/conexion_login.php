<?php
// Datos de conexión a la base de datos
$servername = "44.202.83.36";
$username = "debian-sys-maint";
$password = "1234";
$dbname = "registro_db";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>