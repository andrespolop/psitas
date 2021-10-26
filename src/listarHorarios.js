//función fecha del día
function diaCorrecto(x) {
    var fecha = new Date();
    fecha.setDate(fecha.getDate() + x);
    let mes;
    switch (fecha.getMonth()) {
        case 0: mes = "Enero"; break;
        case 1: mes = "Febrero"; break;
        case 2: mes = "Marzo"; break;
        case 3: mes = "Abril"; break;
        case 4: mes = "Mayo"; break;
        case 5: mes = "Junio"; break;
        case 6: mes = "Julio"; break;
        case 7: mes = "Agosto"; break;
        case 8: mes = "Septiembre"; break;
        case 9: mes = "Octubre"; break;
        case 10: mes = "Noviembre"; break;
        case 11: mes = "Diciembre"; break;
    }
    let diaI = fecha.getDate() + ' de ' + mes + ' del ' + fecha.getFullYear();
    return diaI;
}
function diaCorrectoSoloNumero(x) {//para tener solo el numero del día, porque como el bloque son 7 días, no se repiten
    var fecha = new Date();
    fecha.setDate(fecha.getDate() + x);
    var fechaNum = fecha.getDate();
    return fechaNum;
}
//funcion de validación en base de datos
function validacionDias(x) {//validamos los días
    var arr = [];
    for (let it = 0; it < objectJ.length; it++) {
        arr.push(objectJ[it].dia);
    }
    function equalsTo(y) {
        return y == x;
    }
    return arr.some(equalsTo);
}

//agregamos todas las citas de un dia a un array
function horasEnDia(x) {
    var arr = [];
    for (let index = 0; index < objectJ.length; index++) {
        if (objectJ[index].dia == x) {
            arr.push(objectJ[index]);
        }
    }
    return arr;
}

//JSON manipulación
var xhr = new XMLHttpRequest();
var objectJ = [];//variable donde se guarda el array de datos de la base de datos
xhr.open("GET", "php/listarHorarios.php");
xhr.onload = function () {
    if (xhr.status == 200) {
        objectJ = JSON.parse(xhr.responseText);
        //Creación de horarios dinámicos        

        for (let i = 0; i < 7; i++) {
            if (validacionDias(diaCorrectoSoloNumero(i))) {
                const div_fecha = document.createElement("div");
                div_fecha.classList.add('fecha-estatica');
                const span_fecha = document.createElement("span");
                let fechaI = "fecha" + i;
                span_fecha.id = fechaI;
                document.getElementsByClassName("contenedor-horarios")[0].appendChild(div_fecha);
                div_fecha.appendChild(span_fecha);
                document.getElementById(fechaI).innerHTML = diaCorrecto(i);
                var arr = horasEnDia(diaCorrectoSoloNumero(i));
                for (let j = 0; j < arr.length; j++) {
                    const form = document.createElement("form");
                    form.setAttribute("class", "horarios");
                    const div_hora = document.createElement("div");
                    div_hora.setAttribute("class", "div-hora");
                    form.appendChild(div_hora);
                    document.getElementsByClassName("contenedor-horarios")[0].appendChild(form)
                }
            }

        }
        return objectJ;//variable que se va a usar para manipular la base de datos desde js
    } else {
        console.log("existe un error de tipo: " + xhr.status)
    }
}
xhr.send();






