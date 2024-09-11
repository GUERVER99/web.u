<?php
// Verificar sesión de usuario autenticado
include 'verificar_sesion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeros Auxilios para Heridas</title>
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
        <h1>PRIMEROS AUXILIOS PARA HERIDAS</h1>
        <h2>¿Qué es una herida?</h2>
        <p>
            Una herida es una lesión en la piel o en los tejidos subyacentes, causada por un corte, rasguño, desgarro, punzada o golpe. Las heridas pueden variar en gravedad, desde pequeños cortes hasta heridas profundas que afectan músculos y huesos.
        </p>

        <h2>Tipos de heridas</h2>
        <p>Las heridas se clasifican según la causa y el tipo de lesión en la piel:</p>
        <ul>
            <li><b>Heridas cortantes:</b> Causadas por objetos afilados como cuchillos o vidrio.</li>
            <li><b>Heridas punzantes:</b> Causadas por objetos puntiagudos como clavos o agujas.</li>
            <li><b>Heridas abrasivas:</b> Causadas por fricción, como raspaduras o rozaduras.</li>
            <li><b>Heridas laceradas:</b> Causadas por un desgarro en la piel, pueden ser irregulares y profundas.</li>
            <li><b>Heridas por aplastamiento:</b> Producidas por una fuerza intensa que aplasta los tejidos.</li>
        </ul>

        <h2>Primeros auxilios para heridas menores</h2>
        <p>
            Si la herida es leve y no es profunda, sigue estos pasos para atenderla:
        </p>
        <ol>
            <li><b>Lavarse las manos:</b> Antes de tocar la herida, asegúrate de que tus manos estén limpias para prevenir infecciones.</li>
            <li><b>Limpia la herida:</b> Lava la herida con agua y jabón suave. Evita el uso de alcohol o peróxido de hidrógeno directamente sobre la herida.</li>
            <li><b>Detén el sangrado:</b> Aplica presión suave con una gasa o un paño limpio hasta que el sangrado se detenga.</li>
            <li><b>Cubre la herida:</b> Usa una gasa estéril o una venda adhesiva para cubrir la herida y protegerla de infecciones.</li>
            <li><b>Cambia el vendaje:</b> Cambia el vendaje diariamente o cuando se ensucie o se moje.</li>
        </ol>

        <h2>Primeros auxilios para heridas graves</h2>
        <p>
            Las heridas profundas o que afectan áreas grandes requieren atención médica inmediata. Sigue estos pasos mientras buscas ayuda:
        </p>
        <ol>
            <li><b>Detén el sangrado:</b> Aplica presión directa con una gasa o un paño limpio. Si el sangrado no se detiene, sigue aplicando presión.</li>
            <li><b>No retires objetos incrustados:</b> Si hay un objeto incrustado en la herida, no intentes retirarlo. Esto puede causar más daño.</li>
            <li><b>Inmoviliza la zona:</b> Si la herida está en una extremidad, trata de inmovilizarla para evitar que empeore.</li>
            <li><b>Busca atención médica:</b> Llama a emergencias o acude a un hospital lo antes posible.</li>
        </ol>

        <h2>Cuándo buscar ayuda médica</h2>
        <p>
            Debes buscar atención médica si:
        </p>
        <ul>
            <li>La herida es profunda, grande o causada por un objeto sucio o oxidado.</li>
            <li>El sangrado no se detiene después de aplicar presión durante 10 minutos.</li>
            <li>La herida muestra signos de infección como enrojecimiento, hinchazón o pus.</li>
            <li>La persona herida no tiene la vacuna contra el tétanos al día.</li>
        </ul>

        <!-- Botón para redirigir al examen -->
        <div class="text-center mt-4">
            <a href="examen_4.php." class="btn btn-primary">Realizar Examen</a>
        </div>
    </div>

    <!-- Scripts de Bootstrap (jQuery y Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
