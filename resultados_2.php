<?php
// Conectar a la base de datos
$servername = "44.202.83.36";
$username = "debian-sys-maint";
$password = "1234";
$dbname = "registro_db";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Comprobar si el ID de los resultados está en la URL
if (isset($_GET['resultados_id'])) {
    $resultados_id = $_GET['resultados_id'];

    // Consultar los resultados del examen, incluyendo el nombre del examen
    $sql = "SELECT examen_nombre, nota FROM resultados_examen WHERE id = $resultados_id";
    $result = $conn->query($sql);

    // Verificar si se encontraron resultados
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $examen_nombre = $row['examen_nombre'];  // Recuperar el nombre del examen
        $nota = $row['nota'];                    // Recuperar la nota del examen
    } else {
        echo "Resultados no encontrados.";
        exit();
    }
} else {
    echo "ID de resultados no proporcionado.";
    exit();
}

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Examen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
        }
        .btn-primary {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Resultados del Examen: <?php echo $examen_nombre; ?></h1> <!-- Mostrar el nombre del examen -->
        <p>Tu calificación es: <strong><?php echo $nota; ?>/10</strong></p>

        <a href="home.php" class="btn btn-primary">Volver a la página principal</a>
    </div>
</body>
</html>
