<?php include 'verificar_sesion.php'; // Verifica si el usuario está autenticado ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen de Primeros Auxilios en Quemaduras</title>
    <link rel="stylesheet" href="./css/examen1.css">
</head>
<body>
    <div class="container">
        <h1>Examen de Primeros Auxilios en Quemaduras</h1>
        <form action="./php/resultados_examen2.php" method="POST">
            <div class="question">
                <label>1. ¿Qué es una quemadura?</label><br>
                <input type="radio" name="q1" value="a"> Una lesión causada por la exposición al frío extremo.<br>
                <input type="radio" name="q1" value="b"> Una lesión en los tejidos del cuerpo causada por el calor, fuego, productos químicos, electricidad o radiación.<br>
                <input type="radio" name="q1" value="c"> Una infección en la piel causada por bacterias.<br>
                <input type="radio" name="q1" value="d"> Una inflamación de los tejidos causada por una picadura de insecto.<br>
            </div>
            <div class="question">
                <label>2. ¿Cuáles son los síntomas de una quemadura de primer grado?</label><br>
                <input type="radio" name="q2" value="a"> Enrojecimiento, dolor y a veces hinchazón.<br>
                <input type="radio" name="q2" value="b"> Ampollas severas y daño en los nervios.<br>
                <input type="radio" name="q2" value="c"> Daño profundo en todas las capas de la piel.<br>
                <input type="radio" name="q2" value="d"> No causa dolor inmediato debido al daño en los nervios.<br>
            </div>
            <div class="question">
                <label>3. ¿Qué hacer primero en caso de una quemadura menor?</label><br>
                <input type="radio" name="q3" value="a"> Aplicar mantequilla para enfriar la piel.<br>
                <input type="radio" name="q3" value="b"> Enfriar la quemadura con agua fría durante 10-15 minutos.<br>
                <input type="radio" name="q3" value="c"> Envolver la quemadura con una venda adhesiva.<br>
                <input type="radio" name="q3" value="d"> Romper las ampollas para liberar el líquido.<br>
            </div>
            <div class="question">
                <label>4. ¿Qué hacer si se forman ampollas?</label><br>
                <input type="radio" name="q4" value="a"> Romperlas para evitar infecciones.<br>
                <input type="radio" name="q4" value="b"> No reventarlas y cubrir la zona con una gasa estéril.<br>
                <input type="radio" name="q4" value="c"> Aplicar una crema perfumada sobre la ampolla.<br>
                <input type="radio" name="q4" value="d"> Sumergir la zona en agua caliente.<br>
            </div>
            <div class="question">
                <label>5. ¿Qué no debes hacer en caso de quemaduras?</label><br>
                <input type="radio" name="q5" value="a"> Aplicar hielo directamente sobre la quemadura.<br>
                <input type="radio" name="q5" value="b"> Aplicar agua fría durante 10-15 minutos.<br>
                <input type="radio" name="q5" value="c"> Usar una gasa estéril para cubrir la quemadura.<br>
                <input type="radio" name="q5" value="d"> Tomar analgésicos de venta libre como ibuprofeno.<br>
            </div>
            <div class="question">
                <label>6. ¿Qué hacer en caso de una quemadura grave?</label><br>
                <input type="radio" name="q6" value="a"> Retirar la ropa pegada a la piel.<br>
                <input type="radio" name="q6" value="b"> Enfriar el área con agua fría pero no retirar la ropa pegada.<br>
                <input type="radio" name="q6" value="c"> Aplicar mantequilla sobre la quemadura.<br>
                <input type="radio" name="q6" value="d"> No cubrir la quemadura para que se seque al aire libre.<br>
            </div>
            <div class="question">
                <label>7. ¿Qué hacer si la quemadura involucra productos químicos?</label><br>
                <input type="radio" name="q7" value="a"> Enjuagar con abundante agua y retirar la ropa contaminada.<br>
                <input type="radio" name="q7" value="b"> Cubrir con una venda adhesiva inmediatamente.<br>
                <input type="radio" name="q7" value="c"> Aplicar una crema antibiótica sin enjuagar.<br>
                <input type="radio" name="q7" value="d"> Evitar el contacto con agua para no empeorar la quemadura.<br>
            </div>
            <div class="question">
                <label>8. ¿Qué síntomas indican una quemadura de tercer grado?</label><br>
                <input type="radio" name="q8" value="a"> Ampollas pequeñas con dolor moderado.<br>
                <input type="radio" name="q8" value="b"> Enrojecimiento de la piel con hinchazón leve.<br>
                <input type="radio" name="q8" value="c"> Daño severo a todas las capas de la piel sin dolor inmediato debido a daño en los nervios.<br>
                <input type="radio" name="q8" value="d"> Enrojecimiento leve con picazón.<br>
            </div>
            <div class="question">
                <label>9. ¿Cuál es el tratamiento inicial recomendado para una quemadura menor?</label><br>
                <input type="radio" name="q9" value="a"> Sumergir la quemadura en agua caliente.<br>
                <input type="radio" name="q9" value="b"> Aplicar agua fría y luego cubrir con una gasa estéril.<br>
                <input type="radio" name="q9" value="c"> Aplicar aceites esenciales sobre la quemadura.<br>
                <input type="radio" name="q9" value="d"> Dejar la quemadura al aire libre sin cubrir.<br>
            </div>
            <div class="question">
                <label>10. ¿Qué hacer si una quemadura tiene más de 10 cm de diámetro o afecta una parte crítica del cuerpo?</label><br>
                <input type="radio" name="q10" value="a"> Tratarla en casa con cremas de venta libre.<br>
                <input type="radio" name="q10" value="b"> Llamar inmediatamente a los servicios de emergencia.<br>
                <input type="radio" name="q10" value="c"> Aplicar hielo sobre la quemadura.<br>
                <input type="radio" name="q10" value="d"> Envolverla firmemente con una venda adhesiva.<br>
            </div>
            <button type="submit" class="submit-btn">Enviar Respuestas</button>
        </form>
    </div>
</body>
</html>
