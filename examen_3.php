<?php
// Incluir la verificación de sesión
include 'verificar_sesion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen - Primeros Auxilios para Fracturas</title>
    <link rel="stylesheet" href="./css/examen1.css">
</head>

<body>
    <div class="container">
        <h1>Examen - Primeros Auxilios para Fracturas</h1>
        <form action="./php/resultados_examen3.php" method="POST">
            <div class="question">
                <label>1. ¿Qué es una fractura?</label><br>
                <input type="radio" name="q1" value="a"> Un desgarro muscular<br>
                <input type="radio" name="q1" value="b"> La rotura o fisura de un hueso<br>
                <input type="radio" name="q1" value="c"> Un esguince en una articulación<br>
                <input type="radio" name="q1" value="d"> La inflamación de un músculo<br>
            </div>

            <div class="question">
                <label>2. ¿Cuál de las siguientes es una fractura cerrada?</label><br>
                <input type="radio" name="q2" value="a"> El hueso sobresale a través de la piel<br>
                <input type="radio" name="q2" value="b"> El hueso se rompe, pero la piel no está lesionada<br>
                <input type="radio" name="q2" value="c"> El hueso está completamente pulverizado<br>
                <input type="radio" name="q2" value="d"> El hueso se aplasta<br>
            </div>

            <div class="question">
                <label>3. ¿Qué se debe hacer al inmovilizar una fractura?</label><br>
                <input type="radio" name="q3" value="a"> Realinear el hueso roto<br>
                <input type="radio" name="q3" value="b"> Aplicar hielo directamente sobre el hueso roto<br>
                <input type="radio" name="q3" value="c"> Inmovilizar la zona con una férula<br>
                <input type="radio" name="q3" value="d"> No hacer nada y esperar a emergencias<br>
            </div>

            <div class="question">
                <label>4. En una fractura abierta, ¿qué se debe hacer?</label><br>
                <input type="radio" name="q4" value="a"> Empujar el hueso de vuelta al cuerpo<br>
                <input type="radio" name="q4" value="b"> Cubrir la herida con una gasa estéril y buscar ayuda médica inmediata<br>
                <input type="radio" name="q4" value="c"> No hacer nada y esperar<br>
                <input type="radio" name="q4" value="d"> Aplicar hielo directamente sobre la herida<br>
            </div>

            <div class="question">
                <label>5. ¿Cuál de las siguientes es una fractura conminuta?</label><br>
                <input type="radio" name="q5" value="a"> Cuando el hueso se rompe en varios fragmentos<br>
                <input type="radio" name="q5" value="b"> Cuando el hueso solo está fisurado<br>
                <input type="radio" name="q5" value="c"> Cuando el hueso se dobla pero no se rompe<br>
                <input type="radio" name="q5" value="d"> Cuando el hueso se aplasta<br>
            </div>

            <div class="question">
                <label>6. ¿Qué acción NO se debe realizar en caso de fractura?</label><br>
                <input type="radio" name="q6" value="a"> Aplicar hielo envuelto en un paño<br>
                <input type="radio" name="q6" value="b"> Inmovilizar la extremidad<br>
                <input type="radio" name="q6" value="c"> Intentar mover el hueso a su posición original<br>
                <input type="radio" name="q6" value="d"> Llamar a emergencias<br>
            </div>

            <div class="question">
                <label>7. ¿Qué se debe hacer antes de trasladar a una persona con fractura a un hospital?</label><br>
                <input type="radio" name="q7" value="a"> Aplicar calor en la zona fracturada<br>
                <input type="radio" name="q7" value="b"> Inmovilizar la fractura<br>
                <input type="radio" name="q7" value="c"> Intentar caminar normalmente<br>
                <input type="radio" name="q7" value="d"> Ninguna de las anteriores<br>
            </div>

            <div class="question">
                <label>8. ¿Qué se debe hacer si no hay una férula disponible para inmovilizar una fractura?</label><br>
                <input type="radio" name="q8" value="a"> Usar cualquier objeto rígido disponible<br>
                <input type="radio" name="q8" value="b"> No hacer nada<br>
                <input type="radio" name="q8" value="c"> Solo aplicar hielo<br>
                <input type="radio" name="q8" value="d"> Intentar alinear el hueso sin ayuda<br>
            </div>

            <div class="question">
                <label>9. ¿Qué síntoma NO está relacionado con una fractura?</label><br>
                <input type="radio" name="q9" value="a"> Dolor intenso<br>
                <input type="radio" name="q9" value="b"> Hinchazón<br>
                <input type="radio" name="q9" value="c"> Deformidad de la extremidad<br>
                <input type="radio" name="q9" value="d"> Fiebre alta<br>
            </div>

            <div class="question">
                <label>10. ¿Cuál es la mejor acción en caso de fractura por compresión en la columna vertebral?</label><br>
                <input type="radio" name="q10" value="a"> Intentar mover al paciente<br>
                <input type="radio" name="q10" value="b"> Inmovilizar la cabeza y el cuello<br>
                <input type="radio" name="q10" value="c"> Dar masajes en la zona afectada<br>
                <input type="radio" name="q10" value="d"> Colocar una bolsa de hielo<br>
            </div>

            <button type="submit" class="submit-btn">Enviar Respuestas</button>
        </form>
    </div>
</body>

</html>
