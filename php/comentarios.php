<?php
// Conectar a la base de datos
$servername = "44.202.83.36";
$username = "debian-sys-maint";
$password = "1234";
$dbname = "registro_db";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consultar los comentarios
$sql = "SELECT c.id, u.nombre, c.comentario, c.respuesta, c.fecha 
        FROM comentarios c 
        JOIN usuarios u ON c.usuario_id = u.id 
        ORDER BY c.fecha DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios de los Usuarios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
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
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            margin: 20px 0;
        }
        .sidebar a:hover {
            color: #007bff;
        }
        .main-content {
            flex-grow: 1;
            padding: 40px;
            background-color: white;
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
            text-align: center;
        }
        th {
            background-color: #333;
            color: white;
        }
        textarea {
            width: 100%;
            max-width: 300px;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .respondido {
            background-color: #d4edda;
        }
        .no-respondido {
            background-color: #f8d7da;
        }
        .btn-respondido {
            background-color: #28a745;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <h2>PRIMEROS AUXILIOS</h2>
            <a href="dashboard.php">Panel</a>
            <a href="notas.php">Notas</a>
            <a class="nav-link" href="../index.html">Salir</a>
            
        </aside>

        <!-- Contenido principal -->
        <main class="main-content">
            <h1>Comentarios de los Usuarios</h1>

            <table>
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Comentario</th>
                        <th>Respuesta</th>
                        <th>Fecha</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody id="comentarios-body">
                    <?php if ($result->num_rows > 0): ?>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr id="comentario-<?php echo $row['id']; ?>" class="<?php echo $row['respuesta'] ? 'respondido' : 'no-respondido'; ?>">
                                <td><?php echo $row['nombre']; ?></td>
                                <td><?php echo $row['comentario']; ?></td>
                                <td id="respuesta-<?php echo $row['id']; ?>"><?php echo $row['respuesta'] ? $row['respuesta'] : 'Sin respuesta'; ?></td>
                                <td><?php echo $row['fecha']; ?></td>
                                <td>
                                    <?php if (!$row['respuesta']): ?>
                                        <form id="formulario-respuesta-<?php echo $row['id']; ?>" onsubmit="enviarRespuesta(<?php echo $row['id']; ?>); return false;">
                                            <textarea id="respuesta-text-<?php echo $row['id']; ?>" required></textarea>
                                            <button type="submit" class="btn">Responder</button>
                                        </form>
                                    <?php else: ?>
                                        <button class="btn btn-respondido" disabled>Respondido</button>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5">No hay comentarios registrados.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </main>
    </div>

    <script>
        function enviarRespuesta(comentarioId) {
            // Obtener el texto de la respuesta
            const respuesta = document.getElementById('respuesta-text-' + comentarioId).value;

            // Enviar la respuesta usando fetch
            fetch('procesar_respuesta.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    comentario_id: comentarioId,
                    respuesta: respuesta,
                }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    // Actualizar la respuesta en la tabla
                    document.getElementById('respuesta-' + comentarioId).innerText = respuesta;

                    // Deshabilitar el formulario y el botón
                    const row = document.getElementById('comentario-' + comentarioId);
                    row.classList.remove('no-respondido');
                    row.classList.add('respondido');

                    const form = document.getElementById('formulario-respuesta-' + comentarioId);
                    form.innerHTML = '<button class="btn btn-respondido" disabled>Respondido</button>';
                } else {
                    alert('Hubo un error al enviar la respuesta.');
                }
            })
            .catch(error => console.error('Error:', error));
        }
    </script>
</body>
</html>

<?php
$conn->close();
?>
