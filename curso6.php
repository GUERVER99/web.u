<?php
// Verificar sesión de usuario autenticado
include 'verificar_sesion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeros Auxilios para la Epilepsia</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-family: 'Quicksand', sans-serif;
            font-weight: 700;
        }
        .navbar-nav {
            margin-left: auto;
        }
        .navbar-nav .nav-item {
            margin-left: 10px;
        }
        .navbar-nav .nav-link {
            color: #000000;
        }
        .navbar-nav .nav-link:hover {
            color: #007bff;
        }
        body {
            padding-top: 80px;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        #contenido {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            color: #333333;
            margin-bottom: 10px;
            text-align: center;
        }
        h2 {
            font-size: 18px;
            color: #666666;
            margin-bottom: 20px;
        }
        p {
            line-height: 1.6;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">PA-LUDICOS | Interactivos</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu_games.php">Juegos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactos.php">Contactos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Salir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="contenido">
        <h1>PRIMEROS AUXILIOS PARA LA EPILEPSIA</h1>
        <h2>¿Qué es la epilepsia?</h2>
        <p>
            La epilepsia es un trastorno neurológico que provoca convulsiones recurrentes e inesperadas. Estas convulsiones son el resultado de la actividad eléctrica anormal en el cerebro.
        </p>

        <h2>Tipos de convulsiones</h2>
        <ul>
            <li><b>Convulsiones focales:</b> Ocurren en una sola parte del cerebro y pueden provocar movimientos involuntarios, sensaciones o cambios en el estado de conciencia.</li>
            <li><b>Convulsiones generalizadas:</b> Afectan a ambos hemisferios del cerebro, causando pérdida de la conciencia y movimientos convulsivos de todo el cuerpo.</li>
        </ul>

        <h2>Primeros auxilios para personas con epilepsia</h2>
        <p>
            Si ves a alguien que está teniendo una convulsión, sigue estos pasos:
        </p>
        <ol>
            <li><b>Mantén la calma:</b> Tranquiliza a las personas alrededor y asegúrate de que nadie intente restringir a la persona.</li>
            <li><b>Asegura el entorno:</b> Retira objetos peligrosos como muebles o artículos que puedan causar daño.</li>
            <li><b>No introduzcas nada en su boca:</b> Contrario a la creencia popular, no es necesario poner nada en la boca de la persona.</li>
            <li><b>Coloca a la persona de lado:</b> Una vez que la convulsión termine, coloca a la persona en posición lateral para mantener las vías respiratorias despejadas.</li>
            <li><b>Llama a emergencias si:</b> La convulsión dura más de 5 minutos, la persona tiene dificultad para respirar o si es la primera vez que la persona sufre una convulsión.</li>
        </ol>

        <h2>Qué no hacer durante una convulsión</h2>
        <ul>
            <li>No intentes sujetar a la persona para detener los movimientos.</li>
            <li>No intentes darle de beber ni comida hasta que recupere completamente la conciencia.</li>
        </ul>

        <!-- Botón para redirigir al examen -->
        <div class="text-center mt-4">
            <a href="examen_6.php" class="btn btn-primary">Realizar Examen</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
