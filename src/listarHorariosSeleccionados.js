function diaCorrectoSoloNumero() {//para tener solo el numero del día, porque como el bloque son 7 días, no se repiten
    var fecha = new Date();
    var fechaNum = fecha.getDate();
    return fechaNum;
}
function splitFecha(x) {// x debe ser igual a fecha, y igual a 1 para mes, 2 para dia, recibe un string 
    let fecha = x.split('-')
    return fecha;   
}

function verificarMayorHoy(x) {
    var hoy = new Date();
    var dia = new Date();
    let anho1 = x[0];
    let mes1 = x[1]-1;
    let dia1 = x[2];
    var bool = false;
    dia.setDate(dia1);
    dia.setMonth(mes1);
    dia.setFullYear(anho1);
    if (dia >= hoy) {
        bool = true;
    }
    return bool;
}


function contar() {//Cuenta cantidad de citas de un paciente,CORREGIR con splitfecha y diacorrectosolonumero
    var conteo = 0;
    for (let index = 0; index < objectJ.length; index++) {
        if (objectJ[index].id_paciente == id_paciente && verificarMayorHoy(splitFecha(objectJ[index].fecha))) {
            conteo++;
        }
    }
    return conteo;   
}
//función para obtener hora correcta
function horaCorrecta(x) {
    if (x>12) {
         x-=12;
         return x +":00"+" PM";
    }else{
        return x +":00"+" AM";
    }
}
//función para invertir fecha y agregar /
function fechaInv(x) {
    let fecha = x.split('-');
    let dia = fecha[2];
    let mes = fecha[1];
    let anho = fecha[0];
    return dia +"/"+ mes+"/"+ anho;
}
//JSON manipulación
var xhr = new XMLHttpRequest();
var objectJ = [];//variable donde se guarda el array de datos de la base de datos
xhr.open("GET", "php/listarHorarios.php");
xhr.onload = function () {
    if (xhr.status == 200) {
        objectJ = JSON.parse(xhr.responseText);
        //Creación de horarios dinámicos           
        if (contar() == 0) {
            const txt_no_existe = document.createTextNode("No hay ningúna cita disponible.");
            const div_existe = document.createElement("div");//div máscara 
            div_existe.setAttribute("class","div-existe");
            div_existe.appendChild(txt_no_existe);
            document.getElementsByClassName("contenedor-citas")[0].appendChild(div_existe); 
        }else{            
            const div_titulo = document.createElement("div");//div del titulo
            div_titulo.classList.add("titulo");
            const txt_titulo = document.createTextNode("CITAS AGENDADAS");//texto del titulo
            div_titulo.appendChild(txt_titulo);
            const ico = document.createElement("i");//icono del checkmark
            ico.setAttribute("class", "fas fa-calendar-check");
            div_titulo.appendChild(ico);            
            document.getElementsByClassName("contenedor-citas")[0].appendChild(div_titulo); 
            for (let index = 0; index < objectJ.length; index++) {
                var fecha = new Date();
                if (objectJ[index].id_paciente == id_paciente && verificarMayorHoy(splitFecha(objectJ[index].fecha))) {
                    
                    const div_citas = document.createElement("div");//div general
                    div_citas.setAttribute("class", "div-citas");
                    const div_cita = document.createElement("div");//div máscara del general
                    div_cita.setAttribute("class","div-cita");
                    const div_hora = document.createElement("div");//el div de la hora
                    div_hora.setAttribute("class", "div-hora");
                    const txt_div_hora = document.createTextNode(horaCorrecta(objectJ[index].hora));//texto que va en el div hora POTENTIALLY CHANGED
                    const div_fecha = document.createElement("div");//div de la fecha
                    div_fecha.setAttribute("class","div-fecha");
                    const txt_div_fecha = document.createTextNode(fechaInv(objectJ[index].fecha));//texto de la fecha
                    const div_terapeuta = document.createElement("div");//div del nombre del terapeuta
                    div_terapeuta.setAttribute("class","div-terapeuta");
                    const txt_div_terapeuta = document.createTextNode(objectJ[index].nombre+" "+objectJ[index].apellido);//texto que va en el div del terapeuta
                    const div_telefono = document.createElement("div");//div del telefono celular
                    div_telefono.setAttribute("class","div-telefono");
                    const txt_div_telefono = document.createTextNode(objectJ[index].telefono);//texto del celular
                    const div_mail = document.createElement("div");//div del email
                    div_mail.setAttribute("class","div-mail");
                    const txt_div_mail = document.createTextNode(objectJ[index].correo);//texto del mail

                    div_citas.appendChild(div_cita); 
                    div_cita.appendChild(div_hora);
                    div_cita.appendChild(div_fecha);
                    div_cita.appendChild(div_terapeuta);
                    div_cita.appendChild(div_mail);
                    div_cita.appendChild(div_telefono);
                    div_hora.appendChild(txt_div_hora);
                    div_fecha.appendChild(txt_div_fecha);
                    div_mail.appendChild(txt_div_mail);
                    div_telefono.appendChild(txt_div_telefono);
                    div_terapeuta.appendChild(txt_div_terapeuta);
                    document.getElementsByClassName("contenedor-citas")[0].appendChild(div_citas);
                }
            }           
        }
        
    } else {
        console.log("existe un error de tipo: " + xhr.status)
    }
}
xhr.send();
