var xhr_citas = new XMLHttpRequest();
var citas = [];

//Open del xhr
xhr_citas.open("GET", "php/php_terapeuta-citas.php");
//ON LOAD DE xhr
xhr_citas.onload = function () {
    if (xhr_citas.status == 200) {
        citas = JSON.parse(xhr_citas.responseText);


        for (let i = 0; i < Object.keys(citas).length; i++) {

            const div_citas_caja = document.createElement("div");
            const div_citas = document.createElement("div");
            const span_hora = document.createElement("span");
            const text_span_hora = document.createTextNode(citas[i]["hora"]);
            const span_fecha = document.createElement("span");
            const text_span_fecha = document.createTextNode(citas[i]["fecha"]);
            const span_email = document.createElement("span");
            const text_span_email = document.createTextNode(citas[i]["correo"]);
            const span_telefono = document.createElement("span");
            const text_span_telefono = document.createTextNode("TEL: "+citas[i]["telefono"]);
            const span_cedula = document.createElement("span");
            const text_span_cedula = document.createTextNode("CC: "+citas[i]["cedula"]);
            const span_nombre = document.createElement("span");
            const text_span_nombre = document.createTextNode(citas[i]["nombre"]+" "+citas[i]["apellido"]);

            //Atributos de div_citas_caja
            div_citas_caja.setAttribute("class", "horarios");
            //Atributos de div_citas
            div_citas.setAttribute("class", "div-citas");
            //Atributos de span_hora
            span_hora.setAttribute("class", "span-muestra");
            //Atributos span_fecha
            span_fecha.setAttribute("class", "span-muestra");
            //Atributos span_email
            span_email.setAttribute("class", "span-muestra");
            //Atributos span_telefono
            span_telefono.setAttribute("class", "span-muestra");
            //Atributos span_cedula
            span_cedula.setAttribute("class", "span-muestra");
            //Atributos span_nombre
            span_nombre.setAttribute("class", "span-muestra");

            //APPEND DE LOS SPAN
            span_hora.appendChild(text_span_hora);
            span_fecha.appendChild(text_span_fecha);
            span_email.appendChild(text_span_email);
            span_telefono.appendChild(text_span_telefono);
            span_cedula.appendChild(text_span_cedula);
            span_nombre.appendChild(text_span_nombre);



            // Append children
            div_citas.appendChild(span_hora);
            div_citas.appendChild(span_fecha);
            div_citas.appendChild(span_email);
            div_citas.appendChild(span_telefono);
            div_citas.appendChild(span_cedula);
            div_citas.appendChild(span_nombre);
            div_citas_caja.appendChild(div_citas);
            document.getElementsByClassName("citas")[0].appendChild(div_citas_caja);








        }
    } else {
        console.log("Error de tipo" + xhr_dispo.status);
    };
}
xhr_citas.send();