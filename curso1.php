<?php include 'verificar_sesion.php'; // Verificar si el usuario está autenticado ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciación a los Primeros Auxilios</title>
    <!-- Enlace al archivo de estilos CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace al archivo de tu script JavaScript -->
    <style>
        /* Estilos personalizados para la barra de navegación */
        .navbar {
            background-color: #ffffff; /* Color de fondo de la barra de navegación */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Sombra suave debajo de la barra */
        }

        .navbar-brand {
            font-family: 'Quicksand', sans-serif; /* Fuente para el texto del logo */
            font-weight: 700; /* Peso de la fuente del logo */
        }

        .navbar-nav {
            margin-left: auto; /* Alineación de los elementos de la lista a la derecha */
        }

        .navbar-nav .nav-item {
            margin-left: 10px; /* Espaciado entre los elementos de la lista */
        }

        .navbar-nav .nav-link {
            color: #333333; /* Color del texto de los enlaces */
        }

        .navbar-nav .nav-link:hover {
            color: #007bff; /* Color del texto de los enlaces al pasar el ratón */
        }

        /* Estilos para el contenido */
        body {
            padding-top: 80px; /* Añade un espacio en la parte superior para evitar que el contenido sea ocultado por la barra de navegación */
            font-family: Arial, sans-serif; /* Fuente para el texto principal */
            background-color: #f0f0f0; /* Color de fondo para toda la página */
        }

        #contenido {
            max-width: 800px; /* Limita el ancho del contenido para una mejor legibilidad */
            margin: 0 auto; /* Centra el contenido horizontalmente */
            padding: 20px; /* Añade espacio interno al contenido */
            background-color: #ffffff; /* Color de fondo del área de contenido */
            border-radius: 8px; /* Bordes redondeados para el área de contenido */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra suave alrededor del área de contenido */
        }

        h1 {
            font-size: 28px; /* Tamaño de fuente para los títulos principales */
            color: #333333; /* Color de texto para los títulos principales */
            margin-bottom: 10px; /* Espaciado inferior entre los títulos */
            text-align: center; /* Centra el texto del título */
        }

        h2 {
            font-size: 18px; /* Tamaño de fuente para los subtítulos */
            color: #666666; /* Color de texto para los subtítulos */
            margin-bottom: 20px; /* Espaciado inferior entre los subtítulos */
        }

        p {
            line-height: 1.6; /* Altura de línea para mejorar la legibilidad del texto */
            margin-bottom: 10px; /* Espaciado inferior entre los párrafos */
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
        <h1>¿QUÉ SON LOS PRIMEROS AUXILIOS?</h1>
        <h2>
            Son medidas urgentes que se les practican a personas que sufrieron un accidente o una enfermedad repentina con
            el fin de proteger su vida hasta que puedan recibir cuidados médicos especializados.
        </h2>
        <br>

        <h1>¿POR QUÉ SON IMPORTANTES LOS PRIMEROS AUXILIOS?</h1>
        <h2>
            Los primeros auxilios no solo permiten estabilizar a una persona hasta que pueda recibir ayuda médica, sino que
            también posibilitan asegurar la escena en la que se dio la emergencia para que nadie más salga herido, no se repitan
            incidentes y no haya pánico colectivo.
        </h2>
        <br>

        <h1>¿QUÉ ES UNA EMERGENCIA?</h1>
        <h2>
            Es una situación imprevista que debe ser atendida cuanto antes porque representa un riesgo para la vida, la salud y
            la integridad de una o varias personas.
        </h2>
        <br>

        <h1>¿QUÉ HACER ANTE UNA EMERGENCIA?</h1>
        <h2>
            <p>1. Verifica primero que quienes están alrededor del herido se mantengan a salvo. Se recomienda que los auxiliadores no
                se expongan a riesgos, sino que busquen preservar en todo momento su seguridad.</p>
            <br>
            <p>2. Mantén la calma. Respira profundo y piensa que de tu tranquilidad depende el bienestar de quienes no están bien. Si
                en la escena hay alguien con más conocimiento que tú, mantente atento a lo que necesite.</p>
            <br>
            <p>3. Si vas a auxiliar a una persona, dile a alguien que solicite atención médica. Si no eres tú el auxiliador, comunícate
                con las autoridades. Di claramente la dirección del lugar en el que se encuentran, la urgencia, el número del que
                estás llamando (fijo o celular) y si se necesita apoyo de los bomberos o la policía.</p>
            <br>
            <p>4. Revisa el estado en el que se encuentra la persona: ¿está consciente?; si es así, ¿habla?, ¿dónde tiene dolor?,
                ¿puede moverse?, ¿reacciona ante diferentes estímulos? Si no está consciente, ¿respira?, ¿tiene pulso?, ¿responde a
                tus llamados?, ¿sangra?</p>
            <br>
            <p>5. No muevas al herido para evitar más lesiones. Pon su cabeza al mismo nivel del tronco para que respire mejor. Si hay
                vómito o convulsiones, voltea levemente su cabeza para evitar ahogamiento. No le des agua ni alimentos.</p>
            <br>
            <p>6. Si la persona no respira, hazle respiración boca a boca: ponla boca arriba, masajéale el pecho y hazle compresiones
                sobre el borde del esternón, baja su cabeza un poco para levantarle el mentón y que el conducto respiratorio no quede
                obstruido, cierra su nariz con tus dedos, pega tu boca a la de ella sin que haya salidas de aire, dale dos bocanadas
                de aire y repite el proceso verificando la respiración.</p>
        </h2>
        <!-- Botón para redirigir al examen -->
        <div class="text-center mt-4">
            <a href="examen_1.php" class="btn btn-primary">Realizar Examen</a>
        </div>
    </div>

    <!-- Scripts de Bootstrap (jQuery y Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Script de Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
