//Creación de horarios dinámicos
for(let i = 1; i<=7;i++){
    const div_fecha = document.createElement("div");
    div_fecha.classList.add('fecha-estatica');
    const span_fecha = document.createElement("span");
    let fechaI = "fecha"+i;
    span_fecha.id = fechaI;
    document.getElementsByClassName("contenedor-horarios")[0].appendChild(div_fecha);
    div_fecha.appendChild(span_fecha);
    document.getElementById(fechaI).innerHTML = diaCorrecto(i);
}
//función fecha del día
function diaCorrecto(x){
    var fecha = new Date();
    fecha.setDate(fecha.getDate()+x);
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
//funciones validación en base de datos
function validacionDias(){//validamos los días

}
function validacionHoras(){//valicamos horas

}


