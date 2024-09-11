<?php include 'verificar_sesion.php'; // Verifica si el usuario está autenticado ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen - Soporte Vital Básico</title>
    <link rel="stylesheet" href="./css/examen1.css">
</head>
<body>
    <div class="container">
        <h1>Examen - Soporte Vital Básico</h1>
        <form action="./php/resultados_examen8.php" method="POST">
            <div class="question">
                <label>1. ¿Qué es el soporte vital básico?</label><br>
                <input type="radio" name="q1" value="a"> Un tratamiento avanzado de cuidados médicos<br>
                <input type="radio" name="q1" value="b"> Un conjunto de técnicas para preservar la vida en situaciones de emergencia<br>
                <input type="radio" name="q1" value="c"> Un procedimiento quirúrgico<br>
                <input type="radio" name="q1" value="d"> Una evaluación médica de rutina<br>
            </div>
            <div class="question">
                <label>2. ¿Qué pasos incluye la cadena de supervivencia?</label><br>
                <input type="radio" name="q2" value="a"> Evaluación médica, medicación, cirugía<br>
                <input type="radio" name="q2" value="b"> Llamada a emergencias, RCP, desfibrilación, cuidados avanzados<br>
                <input type="radio" name="q2" value="c"> Observación, diagnóstico, intervención médica<br>
                <input type="radio" name="q2" value="d"> Ninguna de las anteriores<br>
            </div>
            <div class="question">
                <label>3. ¿Cuál es el ritmo recomendado para las compresiones torácicas en una RCP?</label><br>
                <input type="radio" name="q3" value="a"> 50 a 70 por minuto<br>
                <input type="radio" name="q3" value="b"> 100 a 120 por minuto<br>
                <input type="radio" name="q3" value="c"> 30 a 40 por minuto<br>
                <input type="radio" name="q3" value="d"> 150 a 170 por minuto<br>
            </div>
            <div class="question">
                <label>4. ¿Qué debes hacer si una persona está inconsciente y no respira?</label><br>
                <input type="radio" name="q4" value="a"> Aplicar agua fría<br>
                <input type="radio" name="q4" value="b"> Realizar compresiones torácicas y llamar a emergencias<br>
                <input type="radio" name="q4" value="c"> Poner algo en la boca para evitar que se muerda<br>
                <input type="radio" name="q4" value="d"> Esperar a que se recupere sola<br>
            </div>
            <div class="question">
                <label>5. ¿Qué herramienta se utiliza para aplicar una descarga eléctrica en caso de paro cardíaco?</label><br>
                <input type="radio" name="q5" value="a"> Un ventilador mecánico<br>
                <input type="radio" name="q5" value="b"> Un desfibrilador automático externo (DEA)<br>
                <input type="radio" name="q5" value="c"> Un termómetro<br>
                <input type="radio" name="q5" value="d"> Un monitor cardíaco<br>
            </div>
            <div class="question">
                <label>6. ¿Cuándo se debe usar un desfibrilador (DEA)?</label><br>
                <input type="radio" name="q6" value="a"> Si la persona está consciente<br>
                <input type="radio" name="q6" value="b"> Cuando la persona no responde y no respira<br>
                <input type="radio" name="q6" value="c"> Cuando la persona está tosiendo<br>
                <input type="radio" name="q6" value="d"> Si la persona está dormida<br>
            </div>
            <div class="question">
                <label>7. ¿Cuál es el principal objetivo de la RCP?</label><br>
                <input type="radio" name="q7" value="a"> Mantener el flujo sanguíneo hacia los órganos vitales<br>
                <input type="radio" name="q7" value="b"> Detener el ritmo cardíaco<br>
                <input type="radio" name="q7" value="c"> Eliminar la causa de la inconsciencia<br>
                <input type="radio" name="q7" value="d"> Ninguna de las anteriores<br>
            </div>
            <div class="question">
                <label>8. ¿Qué se debe hacer antes de iniciar la RCP?</label><br>
                <input type="radio" name="q8" value="a"> Verificar si la persona responde y respira<br>
                <input type="radio" name="q8" value="b"> Iniciar compresiones torácicas inmediatamente<br>
                <input type="radio" name="q8" value="c"> Esperar ayuda sin hacer nada<br>
                <input type="radio" name="q8" value="d"> Verificar si la persona está despierta<br>
            </div>
            <div class="question">
                <label>9. ¿Cuándo se deben detener las compresiones torácicas durante la RCP?</label><br>
                <input type="radio" name="q9" value="a"> Cuando la persona recupere la conciencia o respire<br>
                <input type="radio" name="q9" value="b"> Después de 1 minuto<br>
                <input type="radio" name="q9" value="c"> Después de 5 compresiones<br>
                <input type="radio" name="q9" value="d"> Nunca, se deben realizar indefinidamente<br>
            </div>
            <div class="question">
                <label>10. ¿Qué hacer si no tienes un DEA disponible?</label><br>
                <input type="radio" name="q10" value="a"> Realizar solo ventilación boca a boca<br>
                <input type="radio" name="q10" value="b"> Continuar con la RCP hasta que llegue ayuda profesional<br>
                <input type="radio" name="q10" value="c"> No hacer nada hasta que llegue ayuda<br>
                <input type="radio" name="q10" value="d"> Aplicar primeros auxilios básicos<br>
            </div>
            <button type="submit" class="submit-btn">Enviar Respuestas</button>
        </form>
    </div>
</body>
</html>
