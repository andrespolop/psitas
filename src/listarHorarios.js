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
//función para obtener hora correcta
function horaCorrecta(x) {
    if (x>12) {
         x-=12;
         return x +":00"+" PM";
    }else{
        return x +":00"+" AM";
    }
}
//validamos checkboxes
function validarChck(){
    var valid = false;
    if (document.getElementsByClassName){

    }

}

//JSON manipulación
var xhr = new XMLHttpRequest();
var objectJ = [];//variable donde se guarda el array de datos de la base de datos
xhr.open("GET", "php/listarHorarios.php");
xhr.onload = function () {
    if (xhr.status == 200) {

        objectJ = JSON.parse(xhr.responseText);
        //Creación de horarios dinámicos        
        var counter = 0;
        var existeCounter = 0;
        for (let i = 0; i < 7; i++) {
            if (validacionDias(diaCorrectoSoloNumero(i))) {
                existeCounter++;
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
                    counter++;//el contador de las citas comienza a sumar
                    const form = document.createElement("form");//el formulario
                    form.setAttribute("class", "form-cita");
                    const div_cita = document.createElement("div");//div máscara del formulario
                    div_cita.setAttribute("class","div-cita");
                    const div_hora = document.createElement("div");//el div de la hora
                    div_hora.setAttribute("class", "div-hora");
                    const txt_div_hora = document.createTextNode(horaCorrecta(arr[j].hora));//texto que va en el div hora
                    const div_terapeuta = document.createElement("div");//div del nombre del terapeuta
                    div_terapeuta.setAttribute("class","div-terapeuta");
                    const txt_div_terapeuta = document.createTextNode("lorem ipsum");//texto que va en el div del terapeuta
                    const div_telefono = document.createElement("div");//div del telefono celular
                    div_telefono.setAttribute("class","div-telefono");
                    const txt_div_telefono = document.createTextNode("3212085616");//texto del celular
                    const div_mail = document.createElement("div");//div del email
                    div_mail.setAttribute("class","div-mail");
                    const txt_div_mail = document.createTextNode("lorem@gmail.com");//texto del mail
                    const div_check = document.createElement("div");//div del checkbox
                    div_check.setAttribute("class","div-check");
                    const input_check = document.createElement("input");//input del checkbox    
                    input_check.setAttribute("type","checkbox");                    
                    input_check.setAttribute("value","none");                
                    input_check.setAttribute("id","check"+counter);
                    input_check.setAttribute("name","check"+counter);
                    const label_check = document.createElement("label");//label del checkbox
                    label_check.setAttribute("for","check"+counter);
                    label_check.innerHTML = "Seleccionar";


                    //append child
                    div_check.appendChild(label_check);
                    div_check.appendChild(input_check);
                    div_cita.appendChild(div_check);
                    div_mail.appendChild(txt_div_mail);
                    div_cita.appendChild(div_mail);
                    div_telefono.appendChild(txt_div_telefono);
                    div_cita.appendChild(div_telefono);
                    div_terapeuta.appendChild(txt_div_terapeuta);
                    div_cita.appendChild(div_terapeuta);
                    div_hora.appendChild(txt_div_hora);
                    div_cita.appendChild(div_hora);
                    form.appendChild(div_cita);
                    document.getElementsByClassName("contenedor-horarios")[0].appendChild(form)
                }
            }

        }
        if (existeCounter == 0) {
            const txt_no_existe = document.createTextNode("No hay ningúna cita disponible.");
            const div_existe = document.createElement("div");//div máscara 
            div_existe.setAttribute("class","div-existe");
            div_existe.appendChild(txt_no_existe);
            document.getElementsByClassName("contenedor-horarios")[0].appendChild(div_existe);
        }
        return objectJ;//variable que se va a usar para manipular la base de datos desde js
    } else {
        console.log("existe un error de tipo: " + xhr.status)
    }
}
xhr.send();






