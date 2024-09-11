<?php include 'verificar_sesion.php'; // Verifica si el usuario está autenticado ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen de Primeros Auxilios</title>
    <link rel="stylesheet" href="./css/examen1.css">
</head>
<body>
    <div class="container">
        <h1>Examen de Primeros Auxilios</h1>
        <form action="./php/resultados.php" method="POST">
            <div class="question">
                <label>1. ¿Qué son los primeros auxilios?</label><br>
                <input type="radio" name="q1" value="a"> Medidas que se practican para proteger la vida hasta recibir cuidados médicos.<br>
                <input type="radio" name="q1" value="b"> Tratamientos médicos avanzados.<br>
                <input type="radio" name="q1" value="c"> Consultas médicas rutinarias.<br>
                <input type="radio" name="q1" value="d"> Procedimientos quirúrgicos.<br>
            </div>
            <div class="question">
                <label>2. ¿Por qué son importantes los primeros auxilios?</label><br>
                <input type="radio" name="q2" value="a"> Solo para estabilizar a la persona herida.<br>
                <input type="radio" name="q2" value="b"> Para asegurar la escena y prevenir más incidentes.<br>
                <input type="radio" name="q2" value="c"> Para proporcionar atención médica avanzada.<br>
                <input type="radio" name="q2" value="d"> Para realizar diagnósticos médicos.<br>
            </div>
            <div class="question">
                <label>3. ¿Qué es una emergencia?</label><br>
                <input type="radio" name="q3" value="a"> Una situación que no necesita atención inmediata.<br>
                <input type="radio" name="q3" value="b"> Una situación que representa un riesgo inmediato para la vida o la salud.<br>
                <input type="radio" name="q3" value="c"> Una situación que se resuelve con atención médica rutinaria.<br>
                <input type="radio" name="q3" value="d"> Un evento programado.<br>
            </div>
            <div class="question">
                <label>4. ¿Qué hacer primero en una emergencia?</label><br>
                <input type="radio" name="q4" value="a"> Evacuar el área sin preocuparse por la seguridad.<br>
                <input type="radio" name="q4" value="b"> Verificar que quienes están alrededor se mantengan a salvo.<br>
                <input type="radio" name="q4" value="c"> Llamar a un amigo para pedir ayuda.<br>
                <input type="radio" name="q4" value="d"> Esperar a que pase el tiempo.<br>
            </div>
            <div class="question">
                <label>5. ¿Cómo mantener la calma en una emergencia?</label><br>
                <input type="radio" name="q5" value="a"> Ignorar la situación.<br>
                <input type="radio" name="q5" value="b"> Tomar decisiones rápidas sin pensar.<br>
                <input type="radio" name="q5" value="c"> Respira profundo y mantén la calma.<br>
                <input type="radio" name="q5" value="d"> Entrar en pánico.<br>
            </div>
            <div class="question">
                <label>6. ¿Qué hacer si estás auxiliando a una persona y no eres tú quien llama a los servicios médicos?</label><br>
                <input type="radio" name="q6" value="a"> Ignorar la situación.<br>
                <input type="radio" name="q6" value="b"> Esperar que alguien más lo haga.<br>
                <input type="radio" name="q6" value="c"> Llamar a los servicios médicos y proporcionar toda la información necesaria.<br>
                <input type="radio" name="q6" value="d"> No hacer nada hasta que llegue ayuda.<br>
            </div>
            <div class="question">
                <label>7. ¿Qué debes hacer si una persona no está consciente?</label><br>
                <input type="radio" name="q7" value="a"> Hacerle preguntas.<br>
                <input type="radio" name="q7" value="b"> Moverla para verificar si se despierta.<br>
                <input type="radio" name="q7" value="c"> Revisar su respiración y pulso, y evitar darle agua o alimentos.<br>
                <input type="radio" name="q7" value="d"> Esperar a que recupere la consciencia.<br>
            </div>
            <div class="question">
                <label>8. ¿Qué hacer si una persona tiene vómito o convulsiones?</label><br>
                <input type="radio" name="q8" value="a"> Colocarla en una posición cómoda y darle agua.<br>
                <input type="radio" name="q8" value="b"> Ignorar el vómito.<br>
                <input type="radio" name="q8" value="c"> Voltear levemente su cabeza para evitar ahogamiento.<br>
                <input type="radio" name="q8" value="d"> Moverla a otro lugar.<br>
            </div>
            <div class="question">
                <label>9. ¿Cómo se realiza la respiración boca a boca?</label><br>
                <input type="radio" name="q9" value="a"> Colocando la persona de lado.<br>
                <input type="radio" name="q9" value="b"> Dando respiraciones rápidas sin compresiones.<br>
                <input type="radio" name="q9" value="c"> Haciendo compresiones en el pecho y dando bocanadas de aire.<br>
                <input type="radio" name="q9" value="d"> Solo dando compresiones en el pecho.<br>
            </div>
            <div class="question">
                <label>10. ¿Qué hacer si una persona tiene pulso pero no respira?</label><br>
                <input type="radio" name="q10" value="a"> Administrar solo respiración boca a boca.<br>
                <input type="radio" name="q10" value="b"> Hacer compresiones en el pecho.<br>
                <input type="radio" name="q10" value="c"> Administrar respiración boca a boca y compresiones en el pecho.<br>
                <input type="radio" name="q10" value="d"> Esperar a que llegue ayuda médica.<br>
            </div>
            <button type="submit" class="submit-btn">Enviar Respuestas</button>
        </form>
    </div>
</body>
</html>
