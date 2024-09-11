<?php include 'verificar_sesion.php'; // Verifica si el usuario está autenticado ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soporte Vital Básico</title>
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
        <h1>Soporte Vital Básico</h1>
        <h2>¿Qué es el soporte vital básico?</h2>
        <p>
            El soporte vital básico (SVB) es un conjunto de técnicas y maniobras esenciales para preservar la vida de una persona en situaciones de emergencia, como paro cardíaco, asfixia o inconsciencia, mientras llega la ayuda profesional.
        </p>

        <h2>Cadena de supervivencia</h2>
        <p>La cadena de supervivencia consta de los siguientes pasos para incrementar las posibilidades de supervivencia en caso de una emergencia cardíaca:</p>
        <ul>
            <li><b>Reconocimiento temprano y llamada a emergencias:</b> Identificar los signos de una emergencia médica y llamar al número de emergencias.</li>
            <li><b>RCP inmediata:</b> Realizar la reanimación cardiopulmonar (RCP) para mantener el flujo sanguíneo hacia los órganos vitales.</li>
            <li><b>Desfibrilación temprana:</b> Aplicar un desfibrilador automático externo (DEA) si está disponible.</li>
            <li><b>Cuidados post-resucitación:</b> Una vez estabilizada la persona, los cuidados médicos avanzados son esenciales.</li>
        </ul>

        <h2>Pasos del soporte vital básico</h2>
        <ol>
            <li><b>Evaluar la situación:</b> Verifica si la persona está consciente y respira. Si no responde, llama a emergencias de inmediato.</li>
            <li><b>Realizar RCP:</b> Coloca las manos en el centro del pecho y aplica compresiones profundas y rápidas, alrededor de 100 a 120 por minuto.</li>
            <li><b>Uso del DEA:</b> Si está disponible, aplica el desfibrilador siguiendo las instrucciones hasta que llegue ayuda.</li>
        </ol>

        <h2>Cuándo buscar ayuda médica</h2>
        <p>
            Debes buscar ayuda médica si observas:
        </p>
        <ul>
            <li>Inconsciencia o falta de respuesta</li>
            <li>Ausencia de respiración o respiración anormal</li>
            <li>Signos de un paro cardíaco, como dolor en el pecho o pérdida de conocimiento</li>
        </ul>

        <!-- Botón para redirigir al examen -->
        <div class="text-center mt-4">
            <a href="examen_8.php" class="btn btn-primary">Realizar Examen</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
