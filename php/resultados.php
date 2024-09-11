<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario_id'])) {
    die("Error: Usuario no autenticado.");
}

$usuario_id = $_SESSION['usuario_id'];

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

// Recoger las respuestas del formulario
$preguntas = ['q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10'];
$respuestas_correctas = [
    'q1' => 'a', 'q2' => 'b', 'q3' => 'b', 'q4' => 'a', 
    'q5' => 'c', 'q6' => 'c', 'q7' => 'c', 'q8' => 'a', 
    'q9' => 'b', 'q10' => 'a'
];

$nota = 0;
foreach ($preguntas as $pregunta) {
    if (isset($_POST[$pregunta]) && $_POST[$pregunta] == $respuestas_correctas[$pregunta]) {
        $nota++;
    }
}

$examen_nombre = 'Iniciación a Primeros Auxilios';

// Verificar si el usuario ya tiene una entrada para este examen
$consulta_existente = "SELECT * FROM resultados_examen WHERE usuario_id = '$usuario_id' AND examen_nombre = '$examen_nombre'";
$resultado_existente = $conn->query($consulta_existente);

if ($resultado_existente->num_rows > 0) {
    // Si ya existe un resultado, comparar la nueva nota con la anterior
    $row = $resultado_existente->fetch_assoc();
    $resultados_id = $row['id']; // Obtener el ID existente
    
    if ($nota > $row['nota']) {
        // Actualizar solo si la nueva nota es más alta
        $sql_actualizar = "UPDATE resultados_examen 
                           SET q1 = ?, q2 = ?, q3 = ?, q4 = ?, q5 = ?, q6 = ?, q7 = ?, q8 = ?, q9 = ?, q10 = ?, nota = ? 
                           WHERE usuario_id = ? AND examen_nombre = ?";
        $stmt = $conn->prepare($sql_actualizar);
        $stmt->bind_param('ssssssssssiss', $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10, $nota, $usuario_id, $examen_nombre);
        $stmt->execute();
    }
} else {
    // Si no existe entrada para este examen, insertar los datos
    $sql_insert = "INSERT INTO resultados_examen (q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, nota, examen_nombre, usuario_id) 
                   VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql_insert);
    $stmt->bind_param('ssssssssssisi', $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10, $nota, $examen_nombre, $usuario_id);
    $stmt->execute();
    $resultados_id = $stmt->insert_id;
}

// Redirigir a la página de resultados
if (isset($resultados_id)) {
    header("Location: ../resultados_2.php?resultados_id=" . $resultados_id);
    exit();
} else {
    echo "Error al generar los resultados.";
}

// Cerrar la conexión
$conn->close();
?>
