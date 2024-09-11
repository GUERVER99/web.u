<?php
// Incluir la verificación de sesión
include 'verificar_sesion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeros Auxilios en Quemaduras</title>
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
        <h1>PRIMEROS AUXILIOS EN QUEMADURAS</h1>
        <h2>¿Qué es una quemadura?</h2>
        <p>
            Una quemadura es una lesión en los tejidos del cuerpo causada por el calor, el fuego, productos químicos, electricidad o la radiación. Las quemaduras pueden ser leves o graves, y requieren una atención rápida para evitar infecciones o complicaciones.
        </p>

        <h2>Tipos de quemaduras</h2>
        <p>
            Las quemaduras se clasifican en tres niveles según la profundidad y el daño en la piel:
        </p>
        <ul>
            <li><b>Quemaduras de primer grado:</b> Solo afectan la capa externa de la piel (epidermis). Causan enrojecimiento, dolor y, a veces, hinchazón.</li>
            <li><b>Quemaduras de segundo grado:</b> Afectan la epidermis y parte de la dermis. Pueden causar ampollas, enrojecimiento severo, dolor e hinchazón.</li>
            <li><b>Quemaduras de tercer grado:</b> Afectan las tres capas de la piel y pueden dañar tejidos más profundos. Estas quemaduras son graves y no causan dolor inmediato debido al daño en los nervios.</li>
        </ul>

        <h2>Primeros auxilios para quemaduras menores (primer y segundo grado)</h2>
        <p>
            Si la quemadura es pequeña y afecta solo una pequeña área de la piel, sigue estos pasos:
        </p>
        <ol>
            <li><b>Enfría la zona afectada:</b> Enjuaga la quemadura con agua fría durante 10-15 minutos o hasta que el dolor disminuya. No uses hielo ni agua muy fría.</li>
            <li><b>Cubre la quemadura:</b> Usa una gasa estéril o un paño limpio para cubrir la quemadura. No uses materiales adhesivos como las vendas.</li>
            <li><b>Evita romper las ampollas:</b> Si se forman ampollas, no las revientes. Si las ampollas se rompen, limpia el área con agua y jabón suave, y aplica una pomada antibiótica.</li>
            <li><b>Alivia el dolor:</b> Puedes tomar analgésicos de venta libre, como ibuprofeno o paracetamol, para aliviar el dolor y reducir la inflamación.</li>
        </ol>

        <h2>Primeros auxilios para quemaduras graves (segundo y tercer grado)</h2>
        <p>
            Las quemaduras graves pueden poner en peligro la vida y requieren atención médica inmediata:
        </p>
        <ol>
            <li><b>Retira la fuente de la quemadura:</b> Si es seguro hacerlo, retira al afectado de la fuente del calor o apaga las llamas.</li>
            <li><b>No retires la ropa pegada a la piel:</b> Si la ropa está pegada a la piel, no la retires. Si es posible, corta la ropa alrededor de la quemadura.</li>
            <li><b>Enfría el área quemada:</b> Aplica agua fría (no hielo) en el área afectada, pero evita sumergir las quemaduras graves.</li>
            <li><b>Cubre la quemadura:</b> Usa una gasa estéril o un paño limpio, sin apretar, para cubrir el área quemada.</li>
            <li><b>Solicita ayuda médica urgente:</b> Llama a emergencias o traslada a la persona a un hospital lo antes posible.</li>
        </ol>

        <h2>Qué evitar en caso de quemaduras</h2>
        <p>
            No apliques mantequilla, aceites, cremas o hielo directamente sobre la quemadura. Estos pueden atrapar el calor o dañar más la piel.
        </p>

        <!-- Botón para redirigir al examen -->
        <div class="text-center mt-4">
            <a href="examen_2.php" class="btn btn-primary">Realizar Examen</a>
        </div>
    </div>

    <!-- Scripts de Bootstrap (jQuery y Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
