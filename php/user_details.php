<?php
// Incluir la verificación de sesión
include 'verificar_admin.php'; // Asegurarnos de que el administrador esté autenticado

// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registro_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el ID del usuario desde la URL
$user_id = $_GET['user_id'];

// Obtener los detalles del usuario y las notas más altas por examen
$sql = "SELECT u.nombre, u.email, r.examen_nombre, MAX(r.nota) AS nota 
        FROM usuarios u 
        LEFT JOIN resultados_examen r ON u.id = r.usuario_id 
        WHERE u.id = ? 
        GROUP BY r.examen_nombre";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$user = $result->fetch_assoc();
if (!$user) {
    echo "Usuario no encontrado.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Usuario</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .user-details {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            margin: 10px 0;
        }

        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #0056b3;
        }

        .exam-details {
            margin-top: 20px;
        }

        .exam-details h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .exam-details p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="user-details">
        <h1>Detalles del Usuario</h1>
        <p><strong>Nombre:</strong> <?php echo $user['nombre']; ?></p>
        <p><strong>Email:</strong> <?php echo $user['email']; ?></p>

        <div class="exam-details">
            <h3>Notas por Examen</h3>
            <?php
            // Mostrar todas las notas del usuario
            if ($result->num_rows > 0) {
                // Reiniciar el puntero al primer resultado
                $result->data_seek(0);
                while ($row = $result->fetch_assoc()) {
                    echo "<p><strong>Examen:</strong> " . $row['examen_nombre'] . " | <strong>Nota más alta:</strong> " . $row['nota'] . "</p>";
                }
            } else {
                echo "<p>El usuario no ha realizado ningún examen.</p>";
            }
            ?>
        </div>

        <a href="dashboard.php" class="back-button">Volver</a>
    </div>
</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
