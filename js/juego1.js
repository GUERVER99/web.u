let casos = [];
//arreglo que guarda los casos para jugar
casos = ["ENFERMEDAD", "SALUD", "AYUDAR", "LESION", "SALVAR", "ESTABILIZAR", "FRACTURA", "INCIDENTE", "RIESGO", "EMERGENCIA","AUXILIAR"];
//arreglo donde se guradaran los casos desordenados
let casosDesordenados=[];
//variable que guarda la posicion actual
let posJuegoActual = 0;
//variable que guarda la cantidad acertada
let cantidadAcertados = 0;

//funcion para desordenar los casos
function desordenarCasos(){
    for(var i=0;i<casos.length;i++){
        //convertimos el caso en un arreglo
        let caso = casos[i];
        caso = caso.split('');
    
        let casoDesordenado;
    
        //desordenamos el areglo
        casoDesordenado = caso.sort(function(){return Math.random() - 0.5});
    
        //Convertimos el arreglo a string
        casoDesordenado = casoDesordenado.toString();
        casoDesordenado = casoDesordenado.replace(/,/g,"");
    
        //Guardamos el caso en el arreglo de casos desordenads
        casosDesordenados.push(casoDesordenado);
    }
}

function mostrarNuevoCaso(){

    //controlo si terminaron las palabras
    if(posJuegoActual >= casos.length){
        mostrarPantallaFinal();
    }
    let contenedorCaso = document.getElementById("caso");
    //eliminamos todo lo que tiene el div del caso
    contenedorCaso.innerHTML="";

    let caso = casosDesordenados[posJuegoActual];
    caso = caso.split('');

    x=0;
    clearInterval(idInterval);
    move();
    for(i=0;i<caso.length;i++){
        var div = document.createElement("div");
        div.className = "letra";
        div.innerHTML = caso[i];
        contenedorCaso.appendChild(div);
    }

}

function mostrarPantallaFinal(){
    clearInterval(idInterval);
    document.getElementById("pantalla-juego").style.display = "none";
    document.getElementById("pantalla-final").style.display = "flex";
    document.getElementById("acertadas").innerHTML = cantidadAcertados;
}




//Funcion que compara el caso ingresado con el caso correcto
function comparar(){
    var casoOrdanedo = casos[posJuegoActual];
    var casoIngresado = document.getElementById("casoIngresado").value;
    casoIngresado = casoIngresado.toUpperCase();

    if(casoOrdanedo == casoIngresado){
        posJuegoActual++;
        cantidadAcertados++;
        document.getElementById("contador").innerHTML = cantidadAcertados;
        casoIngresado = document.getElementById("casoIngresado").value="";
        mostrarNuevoCaso();
    }
}



let x = 0;
let idInterval;
function move() {
  if (x == 0) {
    x= 1;
    let elem = document.getElementById("myBar");
    let width = 1;
    idInterval = setInterval(frame, 150);
    function frame() {
      if (width >= 100) {
        clearInterval(idInterval);
        x = 0;
        posJuegoActual++;
        casoIngresado = document.getElementById("casoIngresado").value="";
        mostrarNuevoCaso();
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}

function comenzarJuego(){
    casosDesordenados=[];
    posJuegoActual = 0;
    cantidadAcertados = 0;
    desordenarCasos();
    document.getElementById("pantalla-inicio").style.display = "none";
    document.getElementById("pantalla-juego").style.display = "block";
    document.getElementById("pantalla-final").style.display = "none";
    mostrarNuevoCaso();
    document.getElementById("contador").innerHTML = 0;
    document.getElementById("casoIngresado").focus();
}