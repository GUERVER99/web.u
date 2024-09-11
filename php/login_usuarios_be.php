<?php
session_start(); // Iniciar la sesión para guardar los datos del usuario autenticado

include 'conexion_be.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($conexion, $_POST['email']);
    $password = $_POST['password'];

    // Buscar el usuario en la base de datos
    $query = "SELECT * FROM usuarios WHERE email='$email'";
    $resultado = mysqli_query($conexion, $query);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $usuario = mysqli_fetch_assoc($resultado);

        // Verificar la contraseña
        if (password_verify($password, $usuario['password'])) {
            // Guardar el ID del usuario en la sesión para identificarlo
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['nombre'] = $usuario['nombre']; // Opcional, si quieres mostrar el nombre del usuario en la interfaz

            // Redirigir al usuario a la página de inicio después de la autenticación
            header("Location: ../home.php");
            exit;
        } else {
            // Redirigir si la contraseña es incorrecta
            header("Location: ../login.php?error=password");
            exit;
        }
    } else {
        // Redirigir si el correo no existe
        header("Location: ../login.php?error=notfound");
        exit;
    }

    // Cerrar la conexión
    mysqli_close($conexion);
} else {
    echo 'Método no permitido';
}
?>


