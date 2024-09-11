<?php include 'verificar_sesion.php'; // Verifica si el usuario está autenticado ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeros Auxilios para Asfixia</title>
    <!-- Enlace al archivo de estilos CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados para el contenido */
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
        <h1>Primeros Auxilios para Asfixia</h1>
        <h2>¿Qué es la asfixia?</h2>
        <p>
            La asfixia es una condición que ocurre cuando algo bloquea las vías respiratorias, impidiendo que el oxígeno llegue a los pulmones. Puede ser causada por alimentos, objetos pequeños, o incluso por una reacción alérgica severa.
        </p>

        <h2>Signos de asfixia</h2>
        <ul>
            <li>Dificultad para respirar o hablar</li>
            <li>Piel, labios o uñas de color azulado</li>
            <li>Manos alrededor del cuello</li>
            <li>Pérdida de conciencia</li>
        </ul>

        <h2>Primeros auxilios para asfixia en adultos</h2>
        <p>
            Sigue estos pasos si sospechas que una persona está asfixiándose:
        </p>
        <ol>
            <li><b>Pregunta si está asfixiándose:</b> Si la persona puede hablar, toser o respirar, anímala a seguir tosiendo.</li>
            <li><b>Asegúrate de que necesita ayuda:</b> Si no puede respirar, hablar o toser, actúa rápidamente.</li>
            <li><b>Usa la maniobra de Heimlich:</b> Párate detrás de la persona, coloca tus brazos alrededor de su cintura, haz un puño con una mano y colócalo justo encima del ombligo. Con la otra mano, agarra el puño y realiza compresiones rápidas hacia adentro y hacia arriba.</li>
            <li><b>Repite:</b> Realiza compresiones hasta que el objeto se desaloje o la persona pierda el conocimiento.</li>
        </ol>

        <h2>Primeros auxilios para asfixia en bebés</h2>
        <p>
            Los bebés menores de 1 año requieren un enfoque diferente:
        </p>
        <ol>
            <li><b>Coloca al bebé boca abajo:</b> Coloca al bebé sobre tu antebrazo, con la cabeza más baja que el cuerpo.</li>
            <li><b>Da golpes en la espalda:</b> Con el talón de tu mano, da 5 golpes firmes entre los omóplatos del bebé.</li>
            <li><b>Voltea al bebé:</b> Si los golpes no funcionan, voltea al bebé boca arriba y aplica 5 compresiones torácicas en el centro del pecho.</li>
            <li><b>Repite:</b> Alterna entre golpes en la espalda y compresiones hasta que el objeto salga o llegue ayuda médica.</li>
        </ol>

        <h2>Cuándo buscar ayuda médica</h2>
        <p>
            Siempre busca atención médica después de un episodio de asfixia, incluso si la persona parece estar bien. La asfixia puede causar daño en las vías respiratorias.
        </p>

        <!-- Botón para redirigir al examen -->
        <div class="text-center mt-4">
            <a href="examen_5.php" class="btn btn-primary">Realizar Examen</a>
        </div>
    </div>

    <!-- Scripts de Bootstrap (jQuery y Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
