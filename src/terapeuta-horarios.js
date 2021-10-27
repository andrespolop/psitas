
var xhr = new XMLHttpRequest();
var horarios_disponibles = [];
var indice = 0;
xhr.open('GET', 'php/php_terapeuta-horarios.php');

xhr.onload = ()=>{
    if(xhr.status ==200){
        horarios_disponibles = JSON.parse(xhr.responseText);
        
        

       
var horas = ["08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00"];

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

//Creamos variable de tipo date()
var p_fecha = new Date();
var id_terapeuta = document.getElementById("id_terapeuta").value;
//Valor C que le sumará a la fecha.
var c = 0;

for (let i = 0; i < 7; i++) {

    p_fecha.setDate(p_fecha.getDate()+c);
   var mostrarfecha = p_fecha.getFullYear() + '-' + (p_fecha.getMonth()+1) + '-' + p_fecha.getDate();
    


    const div_fecha = document.createElement("div");
    div_fecha.classList.add('fecha-estatica');
    const span_fecha = document.createElement("span");
    let fechaI = "fecha" + i;
    span_fecha.id = fechaI;
    document.getElementsByClassName("contenedor-horarios")[0].appendChild(div_fecha);
    div_fecha.appendChild(span_fecha);
    document.getElementById(fechaI).innerHTML = diaCorrecto(i);

    for (let j = 0; j < horas.length; j++) {
        
        indice++;
        
       
        const form = document.createElement("form");
        const div_hora = document.createElement("div");
        const input_id = document.createElement("input");
        const input_fecha = document.createElement("input");
        const input_hora = document.createElement("input");
        const in_id_terapeuta = document.createElement("input");
        const label_boton_activar = document.createElement("label");
        const input_submit = document.createElement("input");
        const b = document.createElement("b");
        const icono = document.createElement("i");
        const btext = "Activar";

        
        
         
        
        // Atributos div-hora
        div_hora.setAttribute("class", "div-hora");
        //Atributos input-id
        input_id.setAttribute("type", "hidden");
        input_id.setAttribute("value", "h" + indice);
        input_id.setAttribute("name", "id" + indice);
        // Atributos forms
        form.setAttribute("action", "terapeuta-horarios.php");
        form.setAttribute("method", "POST");
        form.setAttribute("class", "horarios");
        form.setAttribute("id", "formh"+indice);
        // form.setAttribute("hidden", "" );
        for (let x = 0; x < horarios_disponibles.length; x++) {
            if ((horarios_disponibles[x]['id']==('h'+indice)) && (horarios_disponibles[x]['id_terapeuta'] == document.getElementById('id_terapeuta').value))
             {
                form.setAttribute("hidden", "");
            }

            
        }

        //Atributos de input id_terapeuta
        in_id_terapeuta.setAttribute("type", "hidden");
        in_id_terapeuta.setAttribute("value", id_terapeuta);
        in_id_terapeuta.setAttribute("name", "id_terapeuta");
        //Atributos de Input-fecha
        input_fecha.setAttribute("type", "hidden");
        input_fecha.setAttribute("value", mostrarfecha);
        input_fecha.setAttribute("name", "fecha" + indice);
        //Atributos de input-hora
        input_hora.setAttribute("class", "hora");
        input_hora.setAttribute("type", "text");
        input_hora.setAttribute("readonly", "");
        input_hora.setAttribute("value", horas[j]);
        input_hora.setAttribute("name", "hora" +indice);
        //Atributps de label
        label_boton_activar.setAttribute("for", "btn-activar" + indice);
        //atributos del B
        b.setAttribute("class", "b_activar");
        b.innerHTML = btext;
        //atributos del icono
        icono.setAttribute("class", "fas fa-check-circle");
        icono.setAttribute("style", "color: #00a030");
        //Atributos del submit
        input_submit.setAttribute("type", "submit");
        input_submit.setAttribute("value", "Activar");
        input_submit.setAttribute("hidden", "");
        input_submit.setAttribute("id", "btn-activar" + indice);

        //APPEND CHILDREN
        label_boton_activar.appendChild(b);
        label_boton_activar.appendChild(icono);
        div_hora.appendChild(input_id);
        div_hora.appendChild(input_fecha);
        div_hora.appendChild(in_id_terapeuta);
        div_hora.appendChild(input_hora);
        div_hora.appendChild(input_submit);
        div_hora.appendChild(label_boton_activar);
        form.appendChild(div_hora);
        document.getElementsByClassName("contenedor-horarios")[0].appendChild(form);


    }
    //SETeamos el C=1 para que el setDate sume 1.
    c=1;
}

    }else{
        console.log("Existe un error de tipo: "+xhr.status);
    }
}
xhr.send();




//  HORARIOS DISPONIBLES

            // DECLARAMOS LAS VARIABLES DE HORAS DISPONIBLES
            for (let i = 0; i < 20; i++) {
                
                
            
var form_d = document.createElement("form");
var div_hora_d = document.createElement("div");
var input_id_d = document.createElement("input");
var input_hora_d = document.createElement("input");
var input_fecha_d = document.createElement("input");
var input_nombre_t = document.createElement("input");
var label_boton_desactivar = document.createElement("label");
var input_submit_desactivar = document.createElement("input");
var b_desactivar =document.createElement("b");
var i_desactivar = document.createElement("i");
var b_desactivar_text = document.createTextNode("Desactivar");



//Atributos
form_d.setAttribute("action", "terapeuta-horarios.php");
form_d.setAttribute("method", "POST");
form_d.setAttribute("class", "horarios");
//atributos div_hora_d
div_hora_d.setAttribute("class", "div-hora-disponible");
//Atributos input_id_d;
input_id_d.setAttribute("type", "hidden");
input_id_d.setAttribute("value", "h1");
input_id_d.setAttribute("name", "id1");
//atributos de Input_hora_d
input_fecha_d.setAttribute("type","hidden");
input_fecha_d.setAttribute("value","2021-11-04");
input_fecha_d.setAttribute("name","fecha");
//Atributos de input_hora_d
input_hora_d.setAttribute("class", "hora-disponible");
input_hora_d.setAttribute("type", "text");
input_hora_d.setAttribute("readonly", "");
input_hora_d.setAttribute("value", "8:00");
//Atributos input_nombre_t
input_nombre_t.setAttribute("type", "text");
input_nombre_t.setAttribute("class", "nombre_terapeuta");
input_nombre_t.setAttribute("disabled", "");
input_nombre_t.setAttribute("value", "Polo");
// Atributos label F te sale (26/10/2021)
label_boton_desactivar.setAttribute("class", "label-activar");
label_boton_desactivar.setAttribute("for", "btn-desactivar");
//atributos del b
b_desactivar.setAttribute("class", "b_desactivar");
b_desactivar.appendChild(b_desactivar_text);
//atributos del i
i_desactivar.setAttribute("class", "fas fa-trash-alt");
i_desactivar.setAttribute("style", "color:#f72e2e;");

//APPEND CHILDREN

div_hora_d.appendChild(input_id_d);
div_hora_d.appendChild(input_fecha_d);
div_hora_d.appendChild(input_hora_d);
div_hora_d.appendChild(input_nombre_t);
label_boton_desactivar.appendChild(b_desactivar);
label_boton_desactivar.appendChild(i_desactivar);
div_hora_d.appendChild(label_boton_desactivar);
form_d.appendChild(div_hora_d);
document.getElementsByClassName("horarios-disponible")[0].appendChild(form_d);
            }









