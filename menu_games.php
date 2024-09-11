<?php
// Incluir la verificación de sesión
include 'verificar_sesion.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>JUEGOS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Reset de márgenes y padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Estilos del navbar */
        nav {
            background-color: #333;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            width: 100px;
        }

        nav ul {
            list-style-type: none;
            display: flex;
            margin-left: auto; /* Empuja el menú hacia la derecha */
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        nav ul li a:hover {
            color: #f0a500;
        }

        h1 {
            text-align: center;
            margin: 30px 0;
            font-size: 4rem; /* Aumentar tamaño del título */
            font-weight: bold;
            color: #333;
            text-transform: uppercase; /* Convertir el título en mayúsculas */
        }

        /* Estilos de la lista de juegos */
        .games-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
        }

        ul {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            padding: 20px;
            list-style: none;
            justify-content: center;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            overflow: hidden;
            max-width: 250px;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover; /* Para que las imágenes no se corten */
        }

        .card a {
            display: block;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .card:hover {
            transform: scale(1.05);
        }

        /* Responsividad */
        @media (max-width: 1200px) {
            ul {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            ul {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            ul {
                grid-template-columns: repeat(1, 1fr);
            }
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
    <div class="hero">
        <nav>
            <div class="logo">
                <img src="./img/logo.JPG" alt="logo">
            </div>
            <ul>
                <li><a href="home.php">Inicio</a></li>
                <li><a href="nosotros.php">Nosotros</a></li>
                <li><a href="contactos.php">Contactos</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Salir</a>
                </li>
            </ul>
        </nav>
    </div>

    <h1>DISFRUTALO!</h1>
    <div class="games-container">
        <ul>
            <li>
                <div class="card">
                    <a href="juegos.html"><img src="./img/game1.jpg" alt="Adivina la imagen"> ADIVINA LA IMAGEN</a>
                </div>
            </li>
            <li>
                <div class="card">
                    <a href="juegos1.html"><img src="./img/juego2.png" alt="Ordena las palabras"> ORDENA LAS PALABRAS</a>
                </div>
            </li>
            <li>
                <div class="card">
                    <a href="juego2.html"><img src="./img/juego3.png" alt="ahorcado"> AHORCADO</a>
                </div>
            </li>
            <li>
                <div class="card">
                    <a href="juegos3.html"><img src="./img/juego4.png" alt="dino"> DINOSAURIO</a>
                </div>
            </li>
        </ul>
    </div>

    <footer>
        <p>© 2024 GerlinVB Ing</p>
    </footer>
</body>

</html>
