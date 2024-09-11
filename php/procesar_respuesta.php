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

$response = [];

// Verificar si se ha enviado un comentario y una respuesta
$data = json_decode(file_get_contents("php://input"));
if (isset($data->comentario_id) && isset($data->respuesta)) {
    $comentario_id = $data->comentario_id;
    $respuesta = $data->respuesta;

    // Actualizar el comentario con la respuesta
    $sql = "UPDATE comentarios SET respuesta = ?, leido = 1 WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $respuesta, $comentario_id);
    
    if ($stmt->execute()) {
        $response['status'] = 'success';
    } else {
        $response['status'] = 'error';
    }

    $stmt->close();
}

// Enviar respuesta en formato JSON
header('Content-Type: application/json');
echo json_encode($response);

$conn->close();
?>
