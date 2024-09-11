<?php include 'verificar_sesion.php'; // Verifica si el usuario está autenticado ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen - Primeros Auxilios para las Contusiones</title>
    <link rel="stylesheet" href="./css/examen1.css">
</head>
<body>
    <div class="container">
        <h1>Examen - Primeros Auxilios para las Contusiones</h1>
        <form action="./php/resultados_examen7.php" method="POST">
            <div class="question">
                <label>1. ¿Qué es una contusión?</label><br>
                <input type="radio" name="q1" value="a"> Una herida abierta<br>
                <input type="radio" name="q1" value="b"> Un sangrado interno causado por un golpe<br>
                <input type="radio" name="q1" value="c"> Una fractura de hueso<br>
                <input type="radio" name="q1" value="d"> Un esguince<br>
            </div>
            <div class="question">
                <label>2. ¿Cuál de los siguientes es un síntoma común de una contusión?</label><br>
                <input type="radio" name="q2" value="a"> Sangrado externo<br>
                <input type="radio" name="q2" value="b"> Dolor, hinchazón y hematomas<br>
                <input type="radio" name="q2" value="c"> Fiebre<br>
                <input type="radio" name="q2" value="d"> Mareos<br>
            </div>
            <div class="question">
                <label>3. ¿Cuál es la primera medida de primeros auxilios para una contusión?</label><br>
                <input type="radio" name="q3" value="a"> Aplicar calor<br>
                <input type="radio" name="q3" value="b"> Aplicar hielo<br>
                <input type="radio" name="q3" value="c"> Tomar medicamentos<br>
                <input type="radio" name="q3" value="d"> Poner una venda adhesiva<br>
            </div>
            <div class="question">
                <label>4. ¿Qué no debes hacer en caso de una contusión?</label><br>
                <input type="radio" name="q4" value="a"> Descansar<br>
                <input type="radio" name="q4" value="b"> Aplicar hielo<br>
                <input type="radio" name="q4" value="c"> Aplicar compresión con un vendaje<br>
                <input type="radio" name="q4" value="d"> Continuar usando la zona lesionada<br>
            </div>
            <div class="question">
                <label>5. ¿Cuándo deberías buscar atención médica para una contusión?</label><br>
                <input type="radio" name="q5" value="a"> Si la hinchazón disminuye después de unas horas<br>
                <input type="radio" name="q5" value="b"> Si el dolor es leve y soportable<br>
                <input type="radio" name="q5" value="c"> Si el hematoma persiste o empeora<br>
                <input type="radio" name="q5" value="d"> Si la piel se vuelve roja<br>
            </div>
            <div class="question">
                <label>6. ¿Qué debes hacer si hay un hematoma grande en una extremidad?</label><br>
                <input type="radio" name="q6" value="a"> Mantener la extremidad elevada<br>
                <input type="radio" name="q6" value="b"> Masajear el área<br>
                <input type="radio" name="q6" value="c"> Colocar una compresa caliente inmediatamente<br>
                <input type="radio" name="q6" value="d"> Seguir caminando como de costumbre<br>
            </div>
            <div class="question">
                <label>7. ¿Qué puede causar una contusión severa?</label><br>
                <input type="radio" name="q7" value="a"> Una caída leve<br>
                <input type="radio" name="q7" value="b"> Un golpe fuerte o accidente<br>
                <input type="radio" name="q7" value="c"> Un roce suave<br>
                <input type="radio" name="q7" value="d"> Una caminata prolongada<br>
            </div>
            <div class="question">
                <label>8. ¿Cuál de los siguientes NO es un tratamiento para una contusión?</label><br>
                <input type="radio" name="q8" value="a"> Aplicar hielo<br>
                <input type="radio" name="q8" value="b"> Aplicar presión con un vendaje elástico<br>
                <input type="radio" name="q8" value="c"> Mantener la parte afectada elevada<br>
                <input type="radio" name="q8" value="d"> Aplicar alcohol para desinfectar<br>
            </div>
            <div class="question">
                <label>9. ¿Qué debes hacer si una contusión afecta una articulación?</label><br>
                <input type="radio" name="q9" value="a"> Seguir moviendo la articulación<br>
                <input type="radio" name="q9" value="b"> Inmovilizar la articulación<br>
                <input type="radio" name="q9" value="c"> Hacer ejercicio para fortalecer la zona<br>
                <input type="radio" name="q9" value="d"> Poner una venda adhesiva pequeña<br>
            </div>
            <div class="question">
                <label>10. ¿Cuánto tiempo se debe aplicar hielo sobre una contusión?</label><br>
                <input type="radio" name="q10" value="a"> 5 minutos<br>
                <input type="radio" name="q10" value="b"> 10-15 minutos, varias veces al día<br>
                <input type="radio" name="q10" value="c"> 30 minutos<br>
                <input type="radio" name="q10" value="d"> No se debe aplicar hielo<br>
            </div>
            <button type="submit" class="submit-btn">Enviar Respuestas</button>
        </form>
    </div>
</body>
</html>
