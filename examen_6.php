<?php include 'verificar_sesion.php'; // Verifica si el usuario está autenticado ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen - Primeros Auxilios para la Epilepsia</title>
    <link rel="stylesheet" href="./css/examen1.css">
</head>
<body>
    <div class="container">
        <h1>Examen - Primeros Auxilios para la Epilepsia</h1>
        <form action="./php/resultados_examen6.php" method="POST">
            <div class="question">
                <label>1. ¿Qué es la epilepsia?</label><br>
                <input type="radio" name="q1" value="a"> Una enfermedad del sistema respiratorio<br>
                <input type="radio" name="q1" value="b"> Un trastorno neurológico que provoca convulsiones<br>
                <input type="radio" name="q1" value="c"> Una condición cardíaca<br>
                <input type="radio" name="q1" value="d"> Ninguna de las anteriores<br>
            </div>

            <div class="question">
                <label>2. ¿Cuál es el tipo de convulsión que afecta a todo el cuerpo?</label><br>
                <input type="radio" name="q2" value="a"> Convulsión focal<br>
                <input type="radio" name="q2" value="b"> Convulsión generalizada<br>
                <input type="radio" name="q2" value="c"> Convulsión parcial<br>
                <input type="radio" name="q2" value="d"> Convulsión mioclónica<br>
            </div>

            <div class="question">
                <label>3. ¿Qué se debe hacer durante una convulsión?</label><br>
                <input type="radio" name="q3" value="a"> Sujetar a la persona para evitar movimientos<br>
                <input type="radio" name="q3" value="b"> Colocar a la persona en posición lateral una vez que termine la convulsión<br>
                <input type="radio" name="q3" value="c"> Poner algo en la boca para evitar que se muerda<br>
                <input type="radio" name="q3" value="d"> Administrar medicación sin receta<br>
            </div>

            <div class="question">
                <label>4. ¿Qué no debes hacer durante una convulsión?</label><br>
                <input type="radio" name="q4" value="a"> Sujetar a la persona para evitar que se mueva<br>
                <input type="radio" name="q4" value="b"> Poner un objeto en su boca para evitar que se muerda<br>
                <input type="radio" name="q4" value="c"> Mantener la calma y asegurarte de que no se lastime<br>
                <input type="radio" name="q4" value="d"> Llamar a emergencias si la convulsión dura más de 5 minutos<br>
            </div>

            <div class="question">
                <label>5. ¿Cuál de estas acciones es apropiada después de una convulsión?</label><br>
                <input type="radio" name="q5" value="a"> Dejar a la persona sola<br>
                <input type="radio" name="q5" value="b"> Colocar a la persona en posición lateral de seguridad<br>
                <input type="radio" name="q5" value="c"> Administrar agua o alimentos inmediatamente<br>
                <input type="radio" name="q5" value="d"> Sacudir a la persona para que despierte<br>
            </div>

            <div class="question">
                <label>6. ¿Cuándo debes llamar a emergencias durante una convulsión?</label><br>
                <input type="radio" name="q6" value="a"> La convulsión dura más de 5 minutos<br>
                <input type="radio" name="q6" value="b"> La persona tiene más de una convulsión seguida<br>
                <input type="radio" name="q6" value="c"> La persona no recupera la conciencia tras la convulsión<br>
                <input type="radio" name="q6" value="d"> Todas las anteriores<br>
            </div>

            <div class="question">
                <label>7. ¿Qué debes hacer si la persona convulsiona mientras está de pie?</label><br>
                <input type="radio" name="q7" value="a"> Intentar sentarla en una silla<br>
                <input type="radio" name="q7" value="b"> Acostar a la persona con cuidado en el suelo<br>
                <input type="radio" name="q7" value="c"> Colocar un objeto suave debajo de su cabeza<br>
                <input type="radio" name="q7" value="d"> Alejarte para no interferir en la convulsión<br>
            </div>

            <div class="question">
                <label>8. ¿Qué NO es un desencadenante común de una convulsión?</label><br>
                <input type="radio" name="q8" value="a"> Luces parpadeantes<br>
                <input type="radio" name="q8" value="b"> Estrés severo<br>
                <input type="radio" name="q8" value="c"> Consumo de alcohol en exceso<br>
                <input type="radio" name="q8" value="d"> Dormir lo suficiente<br>
            </div>

            <div class="question">
                <label>9. ¿Qué hacer después de que una persona recupera la conciencia tras una convulsión?</label><br>
                <input type="radio" name="q9" value="a"> Darle agua inmediatamente<br>
                <input type="radio" name="q9" value="b"> Verificar si tiene alguna lesión y permanecer con ella hasta que esté completamente consciente<br>
                <input type="radio" name="q9" value="c"> Dejarla sola y permitir que se recupere<br>
                <input type="radio" name="q9" value="d"> Hacer que se levante inmediatamente<br>
            </div>

            <div class="question">
                <label>10. ¿Cuál de las siguientes acciones es incorrecta al ayudar a una persona con epilepsia?</label><br>
                <input type="radio" name="q10" value="a"> Mantener la calma durante la convulsión<br>
                <input type="radio" name="q10" value="b"> Poner un objeto en la boca para evitar que se muerda<br>
                <input type="radio" name="q10" value="c"> Asegurar el entorno para evitar que se golpee<br>
                <input type="radio" name="q10" value="d"> Colocar a la persona de lado después de la convulsión<br>
            </div>

            <button type="submit" class="submit-btn">Enviar Respuestas</button>
        </form>
    </div>
</body>
</html>
