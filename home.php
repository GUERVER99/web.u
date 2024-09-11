<?php include 'verificar_sesion.php'; // Verificar si el usuario está autenticado ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>CONTENIDO</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./js/nabvar.js"></script>
    <link rel="stylesheet" href="./css/home.css">
</head>
<head>
    <title>CONTENIDO</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./js/nabvar.js"></script>
    <link rel="stylesheet" href="./css/home.css">
    
    <style>
          /* Estilos generales */
          body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        nav {
            background-color: #333;
            padding: 15px;
        }

        .logo img {
            width: 100px;
        }

        .hambargar {
            display: none;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        ul li {
            margin-right: 20px;
        }

        ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        .content {
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 36px;
            color: #333;
        }

        /* Estilos para las cartas */
        .content ul {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 4 columnas por fila */
            grid-gap: 20px;
            padding: 0;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            overflow: hidden;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 100%;
            height: 200px; /* Asegura que todas las imágenes tengan la misma altura */
            object-fit: cover; /* Recorta la imagen si es necesario */
        }

        .card a {
            display: block;
            padding: 10px;
            text-align: center;
            font-size: 16px;
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }

        .card a:hover {
            color: #007bff;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        /* Responsivo para pantallas pequeñas */
        @media (max-width: 1024px) {
            .content ul {
                grid-template-columns: repeat(2, 1fr); /* 2 columnas por fila en pantallas más pequeñas */
            }
        }

        @media (max-width: 768px) {
            .hambargar {
                display: block;
                cursor: pointer;
            }

            ul {
                display: none;
                flex-direction: column;
            }

            ul.open {
                display: flex;
                justify-content: flex-start;
                background-color: #333;
                padding: 10px;
            }

            ul li {
                margin: 10px 0;
            }

            ul li a {
                color: white;
            }

            .content ul {
                grid-template-columns: repeat(1, 1fr); /* 1 columna por fila en pantallas más pequeñas */
            }
        }
    </style>
</head>
<body>
    <div class="hero">
        <nav>
            <div class="hh">
                <div class="logo"><img src="./img/logo.JPG" alt="logo"></div>
                <div class="hambargar" onclick="toggleMenu()">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
            <ul id="menu">
                <li><a href="menu_games.php">Juegos</a></li>
                <li><a href="nosotros.php">Nosotros</a></li>
                <li><a href="contactos.php">Contactos</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Salir</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="content">
        <h1>PRIMEROS AUXILIOS</h1>
        <ul>
            <li>
                <div class="card">
                    <a href="curso1.php"><img src="./img/curso1.jpg" alt="Curso 1"> Iniciacion a los primeros auxilios</a>
                </div>
            </li>
            <li>
                <div class="card">
                    <a href="curso2.php"><img src="./img/quemaduras.jpg" alt="Curso 2"> Primeros auxilios en quemaduras</a>
                </div>
            </li>
            <li>
                <div class="card">
                    <a href="curso3.php"><img src="./img/fracturas.webp" alt="Curso 2"> Primeros auxilios para fracturas</a>
                </div>
            </li>
            <li>
                <div class="card">
                    <a href="curso4.php"><img src="./img/heridas.jfif" alt="Curso 2"> Primeros auxilios para heridas</a>
                </div>
            </li>
            <li>
                <div class="card">
                    <a href="curso5.php"><img src="./img/asfixia.jfif" alt="Curso 2"> Primeros auxilios para asfixia</a>
                </div>
            </li>
            <li>
                <div class="card">
                    <a href="curso6.php"><img src="./img/epilepsia.jfif" alt="Curso 2"> Primeros auxilios para la epilepsia</a>
                </div>
            </li>
            <li>
                <div class="card">
                    <a href="curso7.php"><img src="./img/contusiones.jfif" alt="Curso 2"> Primeros auxilios para las contusiones</a>
                </div>
            </li>
            <li>
                <div class="card">
                    <a href="curso8.php"><img src="./img/curso8.jpg" alt="Curso 2"> Soporte vital básico</a>
                </div>
            </li>
        </ul>
    </div>

    <footer>
        <p style="margin: 0;">© 2024 GerlinVB Ing</p>
    </footer>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('menu');
            menu.classList.toggle('open');
        }
    </script>
</body>

</html>
