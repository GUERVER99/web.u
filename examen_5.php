<?php include 'verificar_sesion.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen - Primeros Auxilios para Asfixia</title>
    <link rel="stylesheet" href="./css/examen1.css">
</head>
<body>
    <div class="container">
        <h1>Examen - Primeros Auxilios para Asfixia</h1>
        <form action="./php/resultados_examen5.php" method="POST">
            <div class="question">
                <label>1. ¿Qué es la asfixia?</label><br>
                <input type="radio" name="q1" value="a"> Bloqueo en las vías respiratorias que impide la respiración.<br>
                <input type="radio" name="q1" value="b"> Infección respiratoria severa.<br>
                <input type="radio" name="q1" value="c"> Paro cardíaco.<br>
                <input type="radio" name="q1" value="d"> Hipotermia severa.<br>
            </div>

            <div class="question">
                <label>2. ¿Cuál de los siguientes NO es un signo de asfixia?</label><br>
                <input type="radio" name="q2" value="a"> Dificultad para respirar.<br>
                <input type="radio" name="q2" value="b"> Piel de color azul.<br>
                <input type="radio" name="q2" value="c"> Dolor de cabeza intenso.<br>
                <input type="radio" name="q2" value="d"> Incapacidad para hablar.<br>
            </div>

            <div class="question">
                <label>3. ¿Cuál es la técnica recomendada para desobstruir las vías respiratorias en adultos?</label><br>
                <input type="radio" name="q3" value="a"> RCP.<br>
                <input type="radio" name="q3" value="b"> Maniobra de Heimlich.<br>
                <input type="radio" name="q3" value="c"> Ventilación boca a boca.<br>
                <input type="radio" name="q3" value="d"> Golpes en la espalda.<br>
            </div>

            <div class="question">
                <label>4. ¿Qué debes hacer si la persona pierde el conocimiento?</label><br>
                <input type="radio" name="q4" value="a"> Continuar con la maniobra de Heimlich.<br>
                <input type="radio" name="q4" value="b"> Comenzar con RCP.<br>
                <input type="radio" name="q4" value="c"> Darle de beber agua.<br>
                <input type="radio" name="q4" value="d"> Intentar sacudir a la persona.<br>
            </div>

            <div class="question">
                <label>5. ¿Qué hacer en caso de asfixia en bebés?</label><br>
                <input type="radio" name="q5" value="a"> Dar golpes en la espalda y compresiones torácicas.<br>
                <input type="radio" name="q5" value="b"> Aplicar la maniobra de Heimlich.<br>
                <input type="radio" name="q5" value="c"> Dar ventilación boca a boca.<br>
                <input type="radio" name="q5" value="d"> Ninguna de las anteriores.<br>
            </div>

            <div class="question">
                <label>6. ¿Cuándo debes buscar ayuda médica en casos de asfixia?</label><br>
                <input type="radio" name="q6" value="a"> Inmediatamente después de liberar las vías respiratorias.<br>
                <input type="radio" name="q6" value="b"> Después de realizar la maniobra de Heimlich con éxito.<br>
                <input type="radio" name="q6" value="c"> Si la persona pierde el conocimiento.<br>
                <input type="radio" name="q6" value="d"> Siempre, incluso si la persona se recupera.<br>
            </div>

            <div class="question">
                <label>7. ¿Qué hacer si un objeto está incrustado en las vías respiratorias?</label><br>
                <input type="radio" name="q7" value="a"> Intentar retirarlo con los dedos.<br>
                <input type="radio" name="q7" value="b"> Aplicar la maniobra de Heimlich o golpes en la espalda.<br>
                <input type="radio" name="q7" value="c"> Dar de beber agua para intentar que salga.<br>
                <input type="radio" name="q7" value="d"> Realizar ventilación boca a boca.<br>
            </div>

            <div class="question">
                <label>8. ¿Cuál es el síntoma más visible en una persona que se está asfixiando?</label><br>
                <input type="radio" name="q8" value="a"> Llanto incontrolable.<br>
                <input type="radio" name="q8" value="b"> Labios azulados.<br>
                <input type="radio" name="q8" value="c"> Sudoración intensa.<br>
                <input type="radio" name="q8" value="d"> Dolor de estómago.<br>
            </div>

            <div class="question">
                <label>9. ¿Qué técnica se debe aplicar para un adulto consciente que se está asfixiando?</label><br>
                <input type="radio" name="q9" value="a"> Ventilación boca a boca.<br>
                <input type="radio" name="q9" value="b"> Maniobra de Heimlich.<br>
                <input type="radio" name="q9" value="c"> Compresiones torácicas.<br>
                <input type="radio" name="q9" value="d"> Ninguna.<br>
            </div>

            <div class="question">
                <label>10. ¿Qué hacer si una persona que se asfixiaba recupera la conciencia?</label><br>
                <input type="radio" name="q10" value="a"> Realizar maniobra de Heimlich.<br>
                <input type="radio" name="q10" value="b"> Pedirle que hable y respire profundamente.<br>
                <input type="radio" name="q10" value="c"> Administrar ventilación boca a boca.<br>
                <input type="radio" name="q10" value="d"> Aplicar hielo en el pecho.<br>
            </div>

            <button type="submit" class="submit-btn">Enviar Respuestas</button>
        </form>
    </div>
</body>
</html>
