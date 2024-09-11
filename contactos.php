<?php
// Incluir la verificación de sesión para asegurarse de que el usuario está autenticado
include 'verificar_sesion.php';

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

// Guardar comentario si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario_id = $_SESSION['usuario_id'];  // ID del usuario desde la sesión
    $comentario = $_POST['comentario'];

    // Insertar comentario en la base de datos
    $sql = "INSERT INTO comentarios (usuario_id, comentario) VALUES ('$usuario_id', '$comentario')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>¡Comentario enviado con éxito!</div>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Obtener los comentarios existentes con sus respuestas
$sql_comentarios = "SELECT c.comentario, c.respuesta, c.fecha, u.nombre 
                    FROM comentarios c 
                    JOIN usuarios u ON c.usuario_id = u.id 
                    ORDER BY c.fecha DESC";
$result_comentarios = $conn->query($sql_comentarios);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>CONTACTOS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace al archivo de estilos CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace al archivo de tu script JavaScript -->
    <script src="./js/nabvar.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">PA-LUDICOS | Interactivos</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="home.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu_games.php">Juegos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Salir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>CONTACTOS</h1>
        
        <!-- Formulario de contacto -->
        <form method="POST" action="">
            <div class="form-group">
                <label for="comentario">Deja tu comentario:</label>
                <textarea class="form-control" id="comentario" name="comentario" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <!-- Mostrar comentarios -->
        <h2 class="mt-5">Comentarios Recientes</h2>
        <?php if ($result_comentarios->num_rows > 0): ?>
            <?php while($comentario = $result_comentarios->fetch_assoc()): ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $comentario['nombre']; ?></h5>
                        <p class="card-text"><?php echo $comentario['comentario']; ?></p>
                        <?php if ($comentario['respuesta']): ?>
                            <p class="card-text"><small class="text-muted">Respuesta del admin:</small> <?php echo $comentario['respuesta']; ?></p>
                        <?php endif; ?>
                        <p class="card-text"><small class="text-muted">Fecha: <?php echo $comentario['fecha']; ?></small></p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No hay comentarios aún.</p>
        <?php endif; ?>
    </div>

    <!-- Scripts de Bootstrap (jQuery y Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Script de Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php
// Cerrar la conexión a la base de datos
$conn->close();
?>
