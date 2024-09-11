//cargo en un arreglo las imganes. Este sera el orden que se mostrarán
let img = ["CALOR.jpg", "FRACTURA.jpg", "HERIDA.jpg", "LUXACION.jpg", "QUEMADURA.jpg"];

//arreglo que guardara la opcion correcta
let correcta = [2,2,1,1,0];

//arreglo que guardara los paises a mostrar en cada jugada
let opciones = [];
//cargo en el arreglo opciones las opciones a mostrar en cada jugada
opciones.push(["Dolor de cabeza",  "Fiebre","Golpe de calor"]);
opciones.push(["Dolor de pierna",  "Cansancio", "Fractura"]);
opciones.push([ "Pintura en la mano", "Herida", "Quemadura"]);
opciones.push([ "dolor de rodilla","Luxacion", "herida abierta"]);
opciones.push(["Quemadura", "Herida cerrada", "dolor de brazo"]);

//variable que guarda la posicion actual
let posActual = 0;
//variable que guarda la cantidad acertadas hasta el momento
let cantidadAcertadas = 0;

function comenzarJuego(){
    //reseteamos las variables
    posActual = 0;
    cantidadAcertadas = 0;
    //activamos las pantallas necesarias
    document.getElementById("pantalla-inicial").style.display = "none";
    document.getElementById("pantalla-juego").style.display = "block";
    cargarImagen();

}

//funcion que carga la siguiente imagen y sus opciones
function cargarImagen(){
    //controlo sis se acabaron las imagenes
    if(img.length <= posActual){
        terminarJuego();
    }
    else{//cargo las opciones
        //limpiamos las clases que se asignaron
        limpiarOpciones();

        document.getElementById("imgImagen").src = "img/" + img[posActual];
        document.getElementById("n0").innerHTML = opciones[posActual][0];
        document.getElementById("n1").innerHTML = opciones[posActual][1];
        document.getElementById("n2").innerHTML = opciones[posActual][2];
    }
}

function limpiarOpciones(){
    document.getElementById("n0").className = "nombre";
    document.getElementById("n1").className = "nombre";
    document.getElementById("n2").className = "nombre";

    document.getElementById("l0").className = "letra";
    document.getElementById("l1").className = "letra";
    document.getElementById("l2").className = "letra";
}

function comprobarRespuesta(opElegida){
    if(opElegida == correcta[posActual]) {// acertó
        // agregamos las clases para colocar el color verde a la opcion elegida
        document.getElementById("n" + opElegida).classList.add("nombreAcertada");
        document.getElementById("l" + opElegida).classList.add("letraAcertada");
        cantidadAcertadas++;
    } else { // no acertó
        // agregamos las clases para colocar en rojo la opcion elegida
        document.getElementById("n" + opElegida).classList.add("nombreNoAcertada");
        document.getElementById("l" + opElegida).classList.add("letraNoAcertada");

        // opción que era correcta
        document.getElementById("n" + correcta[posActual]).classList.add("nombreAcertada");
        document.getElementById("l" + correcta[posActual]).classList.add("letraAcertada");
    }
    posActual++;
    // Esperamos 1 segundo y pasamos a mostrar la siguiente imagen y sus opciones
    setTimeout(cargarImagen, 1000);
}

function terminarJuego(){
    //ocultamos las pantallas y mostramos la pantalla final
    document.getElementById("pantalla-juego").style.display = "none";
    document.getElementById("pantalla-final").style.display = "block";
    //agreamos los resultados
    document.getElementById("numCorrectas").innerHTML = cantidadAcertadas;
    document.getElementById("numIncorrectas").innerHTML = img.length - cantidadAcertadas;
}

function volverAlInicio(){
    //ocultamos las pantallas y activamos la inicial
    document.getElementById("pantalla-final").style.display = "none";
    document.getElementById("pantalla-inicial").style.display = "block";
    document.getElementById("pantalla-juego").style.display = "none";
}