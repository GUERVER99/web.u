<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario_id'])) {
    die("Error: Usuario no autenticado.");
}

$usuario_id = $_SESSION['usuario_id'];

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

// Recoger las respuestas del formulario
$q1 = isset($_POST['q1']) ? $_POST['q1'] : '';
$q2 = isset($_POST['q2']) ? $_POST['q2'] : '';
$q3 = isset($_POST['q3']) ? $_POST['q3'] : '';
$q4 = isset($_POST['q4']) ? $_POST['q4'] : '';
$q5 = isset($_POST['q5']) ? $_POST['q5'] : '';
$q6 = isset($_POST['q6']) ? $_POST['q6'] : '';
$q7 = isset($_POST['q7']) ? $_POST['q7'] : '';
$q8 = isset($_POST['q8']) ? $_POST['q8'] : '';
$q9 = isset($_POST['q9']) ? $_POST['q9'] : '';
$q10 = isset($_POST['q10']) ? $_POST['q10'] : '';

// Definir las respuestas correctas para calcular la nota
$respuestas_correctas = array(
    'q1' => 'b',
    'q2' => 'b',
    'q3' => 'b',
    'q4' => 'd',
    'q5' => 'c',
    'q6' => 'a',
    'q7' => 'b',
    'q8' => 'd',
    'q9' => 'b',
    'q10' => 'b'
);

// Calcular la nota
$nota = 0;
$preguntas = array('q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10');

foreach ($preguntas as $pregunta) {
    if (isset($_POST[$pregunta]) && $_POST[$pregunta] == $respuestas_correctas[$pregunta]) {
        $nota++;
    }
}

$examen_nombre = 'Primeros Auxilios para las Contusiones';

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
                           SET q1 = '$q1', q2 = '$q2', q3 = '$q3', q4 = '$q4', q5 = '$q5', q6 = '$q6', q7 = '$q7', q8 = '$q8', q9 = '$q9', q10 = '$q10', nota = '$nota' 
                           WHERE usuario_id = '$usuario_id' AND examen_nombre = '$examen_nombre'";
        $conn->query($sql_actualizar);
    }
} else {
    // Si no existe entrada para este examen, insertar los datos
    $sql = "INSERT INTO resultados_examen (q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, nota, examen_nombre, usuario_id) 
            VALUES ('$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$nota', '$examen_nombre', '$usuario_id')";
    
    if ($conn->query($sql) === TRUE) {
        $resultados_id = $conn->insert_id; // Obtener el ID recién insertado
    }
}

// Redirigir a la página de resultados
header("Location: ../resultados_2.php?resultados_id=" . $resultados_id);
exit();

// Cerrar la conexión
$conn->close();
?>
