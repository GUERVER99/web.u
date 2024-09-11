<?php
// Incluir la verificación de sesión
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

// Verificar si se ha enviado el formulario de búsqueda
$search_term = '';
if (isset($_GET['search'])) {
    $search_term = $_GET['search'];
    $search_term = $conn->real_escape_string($search_term);

    $sql = "SELECT u.nombre, r.nota, r.examen_nombre 
            FROM usuarios u 
            JOIN resultados_examen r ON u.id = r.usuario_id 
            WHERE u.rol != 'admin' AND u.nombre LIKE '%$search_term%'";
} else {
    $sql = "SELECT u.nombre, r.nota, r.examen_nombre 
            FROM usuarios u 
            JOIN resultados_examen r ON u.id = r.usuario_id 
            WHERE u.rol != 'admin'";
}

$result = $conn->query($sql);

if (!$result) {
    die("Error en la consulta: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas de los Usuarios</title>
    <link rel="stylesheet" href="./css/dashboard.css">
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

        .table-container {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Campo de búsqueda */
        .search-container {
            margin-bottom: 20px;
        }

        .search-input {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: calc(100% - 120px);
        }

        .search-button {
            padding: 10px 20px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .search-button:hover {
            background-color: #555;
        }

        /* Modo oscuro */
        body.dark-mode {
            background-color: #1c1c1c;
        }

        body.dark-mode .main-content {
            background-color: #333;
            color: white;
        }

        body.dark-mode table, body.dark-mode th, body.dark-mode td {
            border-color: #555;
        }

        body.dark-mode th {
            background-color: #555;
        }

        body.dark-mode tr:nth-child(even) {
            background-color: #444;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>PRIMEROS AUXILIOS VIRTUALES</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="dashboard.php">Panel</a></li>
                <li><a href="comentarios.php">Comentarios</a></li>
                <li><button onclick="toggleDarkMode()">Modo Oscuro</button></li>
                <a class="nav-link" href="../index.html">Salir</a>
            </ul>
        </aside>

        <main class="main-content">
            <header class="main-header">
                <h1>Notas de los Usuarios</h1>
            </header>

            <!-- Formulario de búsqueda -->
            <div class="search-container">
                <form method="GET" action="notas.php">
                    <input type="text" name="search" class="search-input" placeholder="Buscar por nombre de usuario" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                    <button type="submit" class="search-button">Buscar</button>
                </form>
            </div>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Examen</th>
                            <th>Nota</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result->num_rows > 0): ?>
                            <?php while($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><?php echo $row['nombre']; ?></td>
                                    <td><?php echo isset($row['examen_nombre']) ? $row['examen_nombre'] : 'Examen no definido'; ?></td>
                                    <td><?php echo $row['nota']; ?></td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="3">No se encontraron resultados para la búsqueda.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <script>
        // Función para activar el modo oscuro
        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
            localStorage.setItem('darkMode', document.body.classList.contains('dark-mode'));
        }

        // Cargar el estado del modo oscuro al cargar la página
        window.onload = function() {
            if (localStorage.getItem('darkMode') === 'true') {
                document.body.classList.add('dark-mode');
            }
        };
    </script>

    <?php
    $conn->close();
    ?>
</body>
</html>
