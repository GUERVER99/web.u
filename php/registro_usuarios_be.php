<?php
include 'conexion_be.php'; // Conectar a la base de datos

// Verificar si la solicitud es POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener y validar los datos del formulario
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $email = mysqli_real_escape_string($conexion, $_POST['email']);
    $password = mysqli_real_escape_string($conexion, $_POST['password']);

    // Comprobar si el correo ya está registrado
    $query_check = "SELECT id FROM usuarios WHERE email = ?";
    if ($stmt_check = mysqli_prepare($conexion, $query_check)) {
        mysqli_stmt_bind_param($stmt_check, "s", $email);
        mysqli_stmt_execute($stmt_check);
        mysqli_stmt_store_result($stmt_check);

        if (mysqli_stmt_num_rows($stmt_check) > 0) {
            // Si el correo ya está registrado, redirigir con un mensaje de error
            mysqli_stmt_close($stmt_check);
            header("Location: ../registrarse.php?error=Este correo electrónico ya está registrado");
            exit();
        } else {
            // El correo no está registrado, proceder con el registro
            mysqli_stmt_close($stmt_check);

            // Encriptar la contraseña
            $password_hash = password_hash($password, PASSWORD_BCRYPT);

            // Preparar la consulta SQL para evitar inyecciones SQL
            $query_insert = "INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)";

            if ($stmt_insert = mysqli_prepare($conexion, $query_insert)) {
                // Vincular los parámetros
                mysqli_stmt_bind_param($stmt_insert, "sss", $nombre, $email, $password_hash);

                // Ejecutar la consulta
                if (mysqli_stmt_execute($stmt_insert)) {
                    // Registro exitoso, redirigir a la página de inicio de sesión
                    header("Location: ../login.php");
                    exit();
                } else {
                    // Si ocurre un error al registrar, redirigir con un mensaje de error
                    header("Location: ../registrarse.php?error=Error al registrar el usuario");
                    exit();
                }
                mysqli_stmt_close($stmt_insert);
            } else {
                header("Location: ../registrarse.php?error=Error al preparar la consulta de inserción");
                exit();
            }
        }
    } else {
        header("Location: ../registro.php?error=Error al preparar la consulta de verificación");
        exit();
    }

    // Cerrar la conexión
    mysqli_close($conexion);
}
?>
