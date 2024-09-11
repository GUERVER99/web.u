
<?php

$servername = "44.202.83.36";
$username = "debian-sys-maint";
$password = "1234";
$dbname = "registro_db";

// Crear la conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Opción para establecer el conjunto de caracteres (importante para manejar acentos y caracteres especiales)
$conexion->set_charset("utf8");

?>
