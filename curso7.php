<?php include 'verificar_sesion.php'; // Verifica si el usuario está autenticado ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeros Auxilios para las Contusiones</title>
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
        <h1>Primeros Auxilios para las Contusiones</h1>
        <h2>¿Qué es una contusión?</h2>
        <p>
            Una contusión es una lesión en los tejidos blandos causada por un golpe directo, que provoca el daño de los vasos sanguíneos y el sangrado interno. Generalmente, no hay rotura en la piel.
        </p>

        <h2>Síntomas de una contusión</h2>
        <p>Las contusiones pueden causar los siguientes síntomas:</p>
        <ul>
            <li>Dolor en la zona afectada</li>
            <li>Hinchazón</li>
            <li>Decoloración de la piel (hematoma)</li>
            <li>Limitación del movimiento, dependiendo del área afectada</li>
        </ul>

        <h2>Primeros auxilios para una contusión</h2>
        <p>Sigue estos pasos para tratar una contusión leve:</p>
        <ol>
            <li><b>Aplicar hielo:</b> Usa compresas frías o hielo envuelto en un paño para reducir la hinchazón y el dolor.</li>
            <li><b>Descanso:</b> Descansa la zona afectada para evitar que empeore la lesión.</li>
            <li><b>Elevación:</b> Si es posible, eleva la parte del cuerpo lesionada para reducir la hinchazón.</li>
            <li><b>Compresión:</b> Usa vendajes elásticos para aplicar presión y minimizar la inflamación.</li>
        </ol>

        <h2>Cuándo buscar ayuda médica</h2>
        <p>
            Si la contusión es severa o los síntomas no mejoran en pocos días, debes buscar atención médica. También busca ayuda si tienes los siguientes síntomas:
        </p>
        <ul>
            <li>Dolor intenso o persistente</li>
            <li>Hinchazón excesiva</li>
            <li>Hematomas que no desaparecen</li>
            <li>Limitación severa del movimiento</li>
        </ul>

        <!-- Botón para redirigir al examen -->
        <div class="text-center mt-4">
            <a href="examen_7.php" class="btn btn-primary">Realizar Examen</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
