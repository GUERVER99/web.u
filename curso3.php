<?php
// Verificar sesión de usuario autenticado
include 'verificar_sesion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeros Auxilios para Fracturas</title>
    <!-- Enlace al archivo de estilos CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace al archivo de tu script JavaScript -->
    <style>
        /* Estilos personalizados para la barra de navegación */
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

        /* Estilos para el contenido */
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
        <h1>PRIMEROS AUXILIOS PARA FRACTURAS</h1>
        <h2>¿Qué es una fractura?</h2>
        <p>
            Una fractura es la rotura, fisura o fractura parcial de un hueso. Pueden ser causadas por accidentes, caídas o golpes severos, y es importante brindar primeros auxilios rápidos y adecuados para evitar complicaciones.
        </p>

        <h2>Tipos de fracturas</h2>
        <p>Las fracturas pueden clasificarse de diferentes maneras, como:</p>
        <ul>
            <li><b>Fractura cerrada:</b> El hueso se rompe, pero la piel no está lesionada.</li>
            <li><b>Fractura abierta:</b> El hueso rompe la piel y queda expuesto.</li>
            <li><b>Fractura conminuta:</b> El hueso se rompe en varios fragmentos pequeños.</li>
            <li><b>Fractura por compresión:</b> Ocurre cuando el hueso se aplasta o se comprime.</li>
        </ul>

        <h2>Primeros auxilios para fracturas</h2>
        <p>
            Sigue estos pasos si crees que una persona ha sufrido una fractura:
        </p>
        <ol>
            <li><b>Mantén la calma:</b> Tranquiliza a la persona y asegúrate de que no intente moverse.</li>
            <li><b>Inmoviliza la zona:</b> Usa una férula o un objeto rígido para inmovilizar la extremidad afectada. Si no tienes una férula, puedes usar almohadas o ropa para estabilizar la fractura.</li>
            <li><b>No intentes realinear el hueso:</b> Si el hueso está desalineado, no intentes corregirlo. Esto puede causar más daño.</li>
            <li><b>Aplica hielo:</b> Usa compresas frías o hielo envuelto en un paño para reducir la hinchazón.</li>
            <li><b>Llama a emergencias:</b> Busca atención médica lo antes posible, especialmente en caso de fracturas abiertas o graves.</li>
        </ol>

        <h2>Fracturas abiertas</h2>
        <p>
            En caso de fractura abierta, donde el hueso sobresale a través de la piel:
        </p>
        <ul>
            <li>No intentes empujar el hueso de vuelta al cuerpo.</li>
            <li>Aplica una gasa estéril o un paño limpio sobre la herida para evitar infecciones.</li>
            <li>Sigue los mismos pasos para inmovilizar la extremidad y busca ayuda médica inmediata.</li>
        </ul>

        <!-- Botón para redirigir al examen -->
        <div class="text-center mt-4">
            <a href="examen_3.php" class="btn btn-primary">Realizar Examen</a>
        </div>
    </div>

    <!-- Scripts de Bootstrap (jQuery y Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
