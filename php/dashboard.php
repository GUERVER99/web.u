<?php
// Incluir la verificación de sesión de admin
include 'verificar_admin.php';

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

// Consultar comentarios no leídos
$sql_no_leidos = "SELECT COUNT(*) AS total_no_leidos FROM comentarios WHERE leido = 0";
$result_no_leidos = $conn->query($sql_no_leidos);
$row_no_leidos = $result_no_leidos->fetch_assoc();
$notificaciones = $row_no_leidos['total_no_leidos'];

// Marcar todos los comentarios como leídos cuando se visualicen
if (isset($_GET['ver_comentarios'])) {
    $sql_marcar_leidos = "UPDATE comentarios SET leido = 1 WHERE leido = 0";
    $conn->query($sql_marcar_leidos);
}

// Eliminar usuario si se envía la solicitud
if (isset($_POST['delete_user'])) {
    $user_id = $_POST['user_id'];
    $delete_sql = "DELETE FROM usuarios WHERE id = ?";
    $stmt = $conn->prepare($delete_sql);
    $stmt->bind_param("i", $user_id);
    if ($stmt->execute()) {
        // Eliminar también los resultados del usuario
        $delete_results_sql = "DELETE FROM resultados_examen WHERE usuario_id = ?";
        $stmt_res = $conn->prepare($delete_results_sql);
        $stmt_res->bind_param("i", $user_id);
        $stmt_res->execute();
        $stmt_res->close();
    }
    $stmt->close();
}

// Obtener los usuarios registrados, excluyendo a los administradores
$sql = "SELECT id, email FROM usuarios WHERE rol != 'admin'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            transition: background-color 0.3s ease;
        }

        .dashboard-container {
            display: flex;
            min-height: 100vh;
        }

        /* Estilos de la barra lateral */
        .sidebar {
            background-color: #333;
            color: white;
            width: 250px;
            padding: 20px;
        }

        .sidebar-header h2 {
            text-align: center;
        }

        .sidebar-menu {
            list-style-type: none;
            padding: 0;
        }

        .sidebar-menu li {
            padding: 10px 0;
            cursor: pointer;
        }

        .sidebar-menu li.active {
            font-weight: bold;
        }

        .sidebar-menu a {
            text-decoration: none;
            color: white;
        }

        .sidebar-menu li a:hover {
            color: #007bff;
        }

        /* Estilos del contenido principal */
        .main-content {
            flex-grow: 1;
            padding: 20px;
            background-color: white;
            transition: background-color 0.3s ease;
        }

        .main-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .main-header h1 {
            margin: 0;
        }

        .user-cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .user-card {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .user-card:hover {
            transform: scale(1.05);
        }

        .user-card p {
            font-size: 14px;
            margin: 10px 0 0 0;
        }

        .user-card button {
            margin: 5px;
            padding: 8px 12px;
            font-size: 14px;
            cursor: pointer;
        }

        .edit-button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
        }

        .delete-button {
            background-color: #ff4444;
            color: white;
            border: none;
            border-radius: 4px;
        }

        /* Modo oscuro */
        body.dark-mode {
            background-color: #1c1c1c;
        }

        body.dark-mode .main-content {
            background-color: #333;
            color: white;
        }

        .notification-badge {
            background-color: red;
            color: white;
            padding: 5px 10px;
            border-radius: 50%;
            font-size: 12px;
            position: relative;
            top: -10px;
            left: 10px;
        }

        body.dark-mode .user-card {
            background-color: #444;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Barra lateral -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>PRIMEROS AUXILIOS VIRTUALES</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="notas.php">Notas</a></li>
                <li>
                    <a href="comentarios.php?ver_comentarios=1">Comentarios 
                        <?php if ($notificaciones > 0): ?>
                            <span class="notification-badge"><?php echo $notificaciones; ?></span>
                        <?php endif; ?>
                    </a>
                </li>
                <li><button onclick="toggleDarkMode()">Modo Oscuro</button></li>
                <a class="nav-link" href="../index.html">Salir</a>
            </ul>
        </aside>

        <!-- Contenido principal -->
        <main class="main-content">
            <header class="main-header">
                <h1>Usuarios Registrados</h1>
                <input type="text" id="search-input" placeholder="Buscar usuarios..." oninput="filterUsers()">
            </header>

            <div class="user-cards-container">
                <?php if ($result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <div class="user-card">
                            <h3><?php echo $row['email']; ?></h3>
                            <p>Acciones:</p>
                            <form method="POST" action="">
                                <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                                <button class="edit-button" type="button" onclick="confirmEdit(<?php echo $row['id']; ?>)">Editar</button>
                                <button class="delete-button" type="submit" name="delete_user" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">Eliminar</button>
                            </form>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>No hay usuarios registrados.</p>
                <?php endif; ?>
            </div>
        </main>
    </div>

    <script>
        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
        }

        function filterUsers() {
            const input = document.getElementById('search-input').value.toLowerCase();
            const userCards = document.querySelectorAll('.user-card');

            userCards.forEach(card => {
                const userEmail = card.querySelector('h3').innerText.toLowerCase();
                if (userEmail.includes(input)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function confirmEdit(userId) {
            if (confirm('¿Estás seguro de que deseas editar este usuario?')) {
                window.location.href = "edit_user.php?user_id=" + userId; // Redirigir a la página de edición del usuario
            }
        }
    </script>
</body>
</html>

<?php
// Cerrar la conexión
$conn->close();
?>
