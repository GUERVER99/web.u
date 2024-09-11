<?php include 'verificar_sesion.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen - Primeros Auxilios para Heridas</title>
    <link rel="stylesheet" href="./css/examen1.css">
</head>
<body>
    <div class="container">
        <h1>Examen - Primeros Auxilios para Heridas</h1>
        <form action="./php/resultados_examen4.php" method="POST">
            <div class="question">
                <label>1. ¿Qué es una herida?</label><br>
                <input type="radio" name="q1" value="a"> Un daño causado por un objeto afilado.<br>
                <input type="radio" name="q1" value="b"> Una lesión en la piel o los tejidos subyacentes.<br>
                <input type="radio" name="q1" value="c"> Un golpe en la cabeza.<br>
                <input type="radio" name="q1" value="d"> Ninguna de las anteriores.<br>
            </div>

            <div class="question">
                <label>2. ¿Qué hacer si la herida es leve?</label><br>
                <input type="radio" name="q2" value="a"> Lavar la herida con agua y jabón.<br>
                <input type="radio" name="q2" value="b"> Cubrirla con una gasa estéril.<br>
                <input type="radio" name="q2" value="c"> Aplicar una crema con antibiótico.<br>
                <input type="radio" name="q2" value="d"> Todas las anteriores.<br>
            </div>

            <div class="question">
                <label>3. ¿Qué tipo de heridas requieren atención médica urgente?</label><br>
                <input type="radio" name="q3" value="a"> Heridas leves.<br>
                <input type="radio" name="q3" value="b"> Heridas profundas o por objetos sucios.<br>
                <input type="radio" name="q3" value="c"> Rasguños pequeños.<br>
                <input type="radio" name="q3" value="d"> Ninguna de las anteriores.<br>
            </div>

            <div class="question">
                <label>4. ¿Cómo se clasifican las heridas por aplastamiento?</label><br>
                <input type="radio" name="q4" value="a"> Heridas cerradas.<br>
                <input type="radio" name="q4" value="b"> Heridas causadas por una fuerza intensa que aplasta los tejidos.<br>
                <input type="radio" name="q4" value="c"> Heridas punzantes.<br>
                <input type="radio" name="q4" value="d"> Heridas por rozaduras.<br>
            </div>

            <div class="question">
                <label>5. ¿Qué hacer si un objeto está incrustado en la herida?</label><br>
                <input type="radio" name="q5" value="a"> Retirarlo rápidamente.<br>
                <input type="radio" name="q5" value="b"> No retirarlo y buscar atención médica.<br>
                <input type="radio" name="q5" value="c"> Cubrir la herida y aplicar presión.<br>
                <input type="radio" name="q5" value="d"> Ninguna de las anteriores.<br>
            </div>

            <div class="question">
                <label>6. ¿Qué debes evitar en el tratamiento de heridas?</label><br>
                <input type="radio" name="q6" value="a"> Aplicar hielo directamente sobre la herida.<br>
                <input type="radio" name="q6" value="b"> Limpiar la herida con agua y jabón.<br>
                <input type="radio" name="q6" value="c"> Aplicar presión para detener el sangrado.<br>
                <input type="radio" name="q6" value="d"> Mantener la herida cubierta.<br>
            </div>

            <div class="question">
                <label>7. ¿Qué hacer si la herida no deja de sangrar?</label><br>
                <input type="radio" name="q7" value="a"> Aplicar más presión.<br>
                <input type="radio" name="q7" value="b"> Elevar la herida por encima del nivel del corazón.<br>
                <input type="radio" name="q7" value="c"> Acudir a urgencias.<br>
                <input type="radio" name="q7" value="d"> Todas las anteriores.<br>
            </div>

            <div class="question">
                <label>8. ¿Cuál de las siguientes es una herida punzante?</label><br>
                <input type="radio" name="q8" value="a"> Una herida causada por un cuchillo.<br>
                <input type="radio" name="q8" value="b"> Una herida causada por un clavo.<br>
                <input type="radio" name="q8" value="c"> Una herida causada por una caída.<br>
                <input type="radio" name="q8" value="d"> Ninguna de las anteriores.<br>
            </div>

            <div class="question">
                <label>9. ¿Cuándo es necesario cambiar el vendaje?</label><br>
                <input type="radio" name="q9" value="a"> Cuando se ensucia o se moja.<br>
                <input type="radio" name="q9" value="b"> Cuando la herida se ve mejor.<br>
                <input type="radio" name="q9" value="c"> Nunca, se debe dejar el vendaje hasta que la herida sane.<br>
                <input type="radio" name="q9" value="d"> No es necesario cambiarlo.<br>
            </div>

            <div class="question">
                <label>10. ¿Qué signos indican una posible infección en una herida?</label><br>
                <input type="radio" name="q10" value="a"> Enrojecimiento y calor en la zona.<br>
                <input type="radio" name="q10" value="b"> Secreción de pus.<br>
                <input type="radio" name="q10" value="c"> Dolor persistente.<br>
                <input type="radio" name="q10" value="d"> Todas las anteriores.<br>
            </div>

            <button type="submit" class="submit-btn">Enviar Respuestas</button>
        </form>
    </div>
</body>
</html>
