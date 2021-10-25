

const form = document.createElement("form");
const div_hora = document.createElement("div");
const input_id = document.createElement("input");
const input_fecha = document.createElement("input");
const input_hora = document.createElement("input");
const label_boton_activar = document.createElement("label");
const input_submit = document.createElement("input");
const b = document.createElement("b");
const icono = document.createElement("i");
const btext = "Activar";

// Atributos forms
form.setAttribute("action", "php/php_terapeuta-horarios.php");
form.setAttribute("method", "POST");
form.setAttribute("class", "horarios");
// Atributos div-hora
div_hora.setAttribute("class", "div-hora");
//Atributos input-id
input_id.setAttribute("type", "hidden");
input_id.setAttribute("value", "h"+"1");
input_id.setAttribute("name", "id"+"1");
//Atributos de Input-fecha
input_fecha.setAttribute("type", "hidden");
input_fecha.setAttribute("value", "2021-11-04");
input_fecha.setAttribute("name", "fecha"+"1");
//Atributos de input-hora
input_hora.setAttribute("class", "hora");
input_hora.setAttribute("type", "text");
input_hora.setAttribute("disabled", "");
input_hora.setAttribute("value", "07:00");
input_hora.setAttribute("name", "hora"+"1");
//Atributps de label
label_boton_activar.setAttribute("for", "btn-activar"+"1");
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
input_submit.setAttribute("id", "btn-activar"+"1");



//APPEND CHILDREN
label_boton_activar.appendChild(b);
label_boton_activar.appendChild(icono);
div_hora.appendChild(input_id);
div_hora.appendChild(input_fecha);
div_hora.appendChild(input_hora);
div_hora.appendChild(input_submit);
div_hora.appendChild(label_boton_activar);
form.appendChild(div_hora);
document.getElementsByClassName("contenedor-horarios")[0].appendChild(form);


//         <div class="fecha-estatica">
//                 <span id="pruebaa"></span>
//         </div> 
           
//             <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">
                
//                     <div class="div-hora">
//                         <input type="hidden" value="h1" name="id1">
//                         <input type="hidden" value="2021-11-04" name="fecha1">    
//                         <input class="hora" type="text" disabled value="07:00" name="hora1">
//                         <label for="btn-activar"><b class="b_activar">Activar</b><i class="fas fa-check-circle" style="color: #00a030;"></i></label>
                        
//                         <input type="submit" value="Activar" hidden id="btn-activar" >
//                     </div>
                
//             </form>
//     </div>            
// </div>