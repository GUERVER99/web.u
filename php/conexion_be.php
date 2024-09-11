
<?php

$servername = "localhost";
$username = "root"; // Usuario por defecto en XAMPP
$password = ""; // Contraseña por defecto en XAMPP, puede estar vacío
$dbname = "registro_db"; // Nombre de la base de datos

// Crear la conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Opción para establecer el conjunto de caracteres (importante para manejar acentos y caracteres especiales)
$conexion->set_charset("utf8");

?>
