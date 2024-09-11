<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../css/login_panel.css">
    <style>
        /* Reset de márgenes y padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Imagen de fondo */
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('../img/fondo_panel.jpg') no-repeat center center fixed; /* Asegúrate de cambiar 'path_to_image.png' por la ruta correcta */
            background-size: cover;
        }

        /* Estilos del contenedor de inicio de sesión */
        .login-container {
            background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco semitransparente */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Estilos de los campos de input */
        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #333;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .input-group input:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.4);
        }

        /* Botón de inicio de sesión */
        .login-button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            color: white;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        .login-button:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        /* Mensaje de error */
        .error-message {
            color: red;
            margin-top: 10px;
            font-size: 14px;
        }

        /* Botón de regresar */
        .back-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #6c757d;
            border: none;
            color: white;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        .back-button:hover {
            background-color: #5a6268;
            transform: translateY(-2px);
        }

        /* Responsividad */
        @media (max-width: 600px) {
            .login-container {
                padding: 30px;
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form id="loginForm" action="/web.u/php/login_admin.php" method="POST">
            <div class="input-group">
                <label for="email">Correo:</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-button">Iniciar Sesión</button>
        </form>

        <!-- Sección para mensajes de error -->
        <p id="error-message" class="error-message">
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == 'password') {
                    echo "Contraseña incorrecta.";
                } elseif ($_GET['error'] == 'notfound') {
                    echo "Usuario no encontrado.";
                }
            }
            ?>
        </p>

        <!-- Botón para regresar al index -->
        <button onclick="location.href='../index.html'" class="back-button">Regresar al Inicio</button>
    </div>
</body>
</html>
