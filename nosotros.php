<?php
// Incluir la verificación de sesión
include 'verificar_sesion.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>NOSOTROS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        h1, h2 {
            text-align: center; /* Centrar los títulos */
            text-transform: uppercase; /* Convertir el texto en mayúsculas */
            color: #000000; /* Color negro para los títulos */
            font-weight: bold; /* Negrita para los títulos */
        }

        p {
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .team {
            margin: 40px 0;
            text-align: center;
        }

        .team img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .team h3 {
            margin-top: 10px;
            font-size: 1.5rem;
            color: #333;
        }

        .team p {
            color: #666;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            margin-top: auto; /* Hace que el footer esté siempre abajo */
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
        <h1>Conoce más sobre nosotros</h1>
        <h2>Nuestra Misión</h2>
        <p>
            En PA-LUDICOS, estamos comprometidos con la enseñanza de primeros auxilios de una manera interactiva y accesible para todas las edades. Creemos que el conocimiento es poder y que cualquier persona, con las herramientas adecuadas, puede salvar vidas.
        </p>

        <h2>Nuestros Valores</h2>
        <ul>
            <li><b>Accesibilidad:</b> Hacer que el aprendizaje sobre primeros auxilios esté disponible para todos, sin importar su ubicación o condición.</li>
            <li><b>Innovación:</b> Utilizar la tecnología para hacer que el aprendizaje sea divertido y efectivo.</li>
            <li><b>Calidad:</b> Ofrecer contenido educativo de primer nivel creado por expertos en la materia.</li>
            <li><b>Empatía:</b> Fomentar una cultura de apoyo y cuidado mutuo.</li>
        </ul>

        <h2>Equipo</h2>
        <div class="team">
            <div class="row">
                <div class="col-md-4">
                    <img src="./img/gerente.jpg" alt="Gerlin VB">
                    <h3>Gerlin VB</h3>
                    <p>Fundador & Director General</p>
                </div>
                <div class="col-md-4">
                    <img src="./img/siso.jfif" alt="Gerlin Victor">
                    <h3>Gerlin Victor</h3>
                    <p>Tecnólogo HSEQ</p>
                </div>
                <div class="col-md-4">
                    <img src="./img/desarrollador.avif" alt="Gerlin Victor">
                    <h3>Gerlin Victor</h3>
                    <p>Desarrollador Web & Ingeniero Informático</p>
                </div>
            </div>
        </div>

        <h2>Nuestra Historia</h2>
        <p>
            PA-LUDICOS fue fundado en 2023 con la misión de crear una plataforma educativa centrada en la enseñanza de primeros auxilios. Desde entonces, hemos crecido hasta convertirnos en un referente en el ámbito educativo en línea, trabajando con expertos en primeros auxilios para garantizar la calidad del contenido que ofrecemos.
        </p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <footer>
        <p>© 2024 GerlinVB Ing</p>
    </footer>
</body>

</html>
