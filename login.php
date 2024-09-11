<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <style>
        body {
            background-image: url(../web.u/img/fondo_login.jpeg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 400px;
            max-width: 90%;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input {
            width: calc(100% - 12px);
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group input[type="submit"] {
            background-color: #1518c4;
            color: white;
            cursor: pointer;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            border-radius: 4px;
        }
        .form-group input[type="submit"]:hover {
            background-color: #1114ca;
        }
        .form-group a {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #1629cf;
            text-decoration: none;
        }
        .form-group a:hover {
            text-decoration: underline;
        }
        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Iniciar Sesión</h2>
        <form action="php/login_usuarios_be.php" method="POST">
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Iniciar Sesión">
            </div>
            <div class="form-group">
                <a href="registrarse.php">¿No tienes una cuenta? Regístrate</a>
            </div>
            <div class="form-group btn-container">
            <a href="index.html" class="btn">Volver</a>
        </div>
            <!-- Mostrar mensaje de error -->
            <div class="error-message">
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] === 'password') {
                        echo 'Contraseña incorrecta. Por favor, inténtelo de nuevo.';
                    } elseif ($_GET['error'] === 'notfound') {
                        echo 'El usuario no existe. Por favor, verifique los datos introducidos o vaya a registrar.';
                    }
                }
                ?>
            </div>
        </form>
    </div>
</body>
</html>


