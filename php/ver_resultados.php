<?php
session_start(); // Iniciar la sesión si no se ha iniciado aún

// Asegúrate de tener el ID del usuario almacenado en la sesión al momento de iniciar sesión
$usuario_id = $_SESSION['usuario_id'];

if (!isset($usuario_id)) {
    // Si el usuario no está autenticado, redirigirlo a la página de inicio de sesión
    header("Location: login_usuarios_be.php");
    exit();
}

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

// Consultar los resultados solo del usuario que ha iniciado sesión
$sql = "SELECT * FROM resultados_examen WHERE usuario_id = '$usuario_id'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Examen</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 20px auto;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: #4CAF50;
        }
        a:hover {
            text-decoration: underline;
        }
        p {
            text-align: center;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Resultados del Examen</h1>

        <?php if ($result && $result->num_rows > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nota</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['nota']; ?></td>
                            <td><a href="resultados_2.php?resultados_id=<?php echo $row['id']; ?>">Ver detalles</a></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No hay resultados disponibles.</p>
        <?php endif; ?>

        <?php
        // Cerrar la conexión a la base de datos
        $conn->close();
        ?>
    </div>
</body>
</html>
