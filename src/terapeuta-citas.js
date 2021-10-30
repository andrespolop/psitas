//funcion split fecha de fecha a string

function fechaStr(x) {
    var fecha= x.split('-')
    var mes = fecha[1];
    var fecha_otro = "";
    var dia = fecha[2];
    var anho = fecha[0];
    switch (mes-1) {
        case 0: fecha_otro = "Enero"; break;
        case 1: fecha_otro = "Febrero"; break;
        case 2: fecha_otro = "Marzo"; break;
        case 3: fecha_otro = "Abril"; break;
        case 4: fecha_otro = "Mayo"; break;
        case 5: fecha_otro = "Junio"; break;
        case 6: fecha_otro = "Julio"; break;
        case 7: fecha_otro = "Agosto"; break;
        case 8: fecha_otro = "Septiembre"; break;
        case 9: fecha_otro = "Octubre"; break;
        case 10: fecha_otro = "Noviembre"; break;
        case 11: fecha_otro = "Diciembre"; break;
    }
    
    let diaI = dia + ' de ' + fecha_otro + ' del ' + anho;
    return diaI;
}
var xhr_citas = new XMLHttpRequest();
var citas = [];

//Open del xhr
xhr_citas.open("GET", "php/php_terapeuta-citas.php");
//ON LOAD DE xhr
xhr_citas.onload = function () {
    if (xhr_citas.status == 200) {
        citas = JSON.parse(xhr_citas.responseText);

        var hora_real;
        var hora_muestra;
        var flag1 = false;
        var flag2 = false;
        var flag3 = false;
        var flag4 = false;
        var flag5 = false;
        var flag6 = false;
        var flag7 = false;
     
        for (let i = 0; i < Object.keys(citas).length; i++) {

           var hora_real = citas[i]["hora"];
            

        if (hora_real < 10) {
          hora_muestra = "0" + hora_real + ":00 AM";
        } if (hora_real > 9 && hora_real < 12) {
          hora_muestra = hora_real + ":00 AM";
        } if (hora_real == 12) {
          hora_muestra = hora_real + ":00 PM";
        } if (hora_real > 12) {
          hora_muestra = "0" + (hora_real - 12) + ":00 PM";
        }
          
        
            var p_fecha = new Date();
            var separar_fecha = citas[i]["fecha"].split('-');
            var dia_correcto = separar_fecha[2];
            

            //Primera fecha

            p_fecha.setDate(p_fecha.getDate());
            if (dia_correcto == p_fecha.getDate()) {
               if (flag1 == false) {
                const h3 = document.createElement("h3");
                h3.setAttribute("class", "h3");
                const h3_text = document.createTextNode(fechaStr(citas[i]["fecha"]));
                h3.appendChild(h3_text);
                const linea = document.createElement("span");
                linea.setAttribute("class", "linea");
                document.getElementsByClassName("citas")[0].appendChild(h3);
                document.getElementsByClassName("citas")[0].appendChild(linea);
               }  
            Creador_citas();

            flag1 = true;
            }

            
            //Segunda fecha
            p_fecha.setDate(p_fecha.getDate()+1);
            if (dia_correcto == p_fecha.getDate()) {
                if (flag2 == false) {
                    const h3 = document.createElement("h3");
                    h3.setAttribute("class", "h3");
                    const h3_text = document.createTextNode("29 de Octubre de 2021");
                    h3.appendChild(h3_text);
                    const linea = document.createElement("span");
                    linea.setAttribute("class", "linea");
                    document.getElementsByClassName("citas")[0].appendChild(h3);
                    document.getElementsByClassName("citas")[0].appendChild(linea);
                   }  
                Creador_citas();
    
                flag2 = true;
            }


            //Tercera fecha
            p_fecha.setDate(p_fecha.getDate()+1);
            if (dia_correcto == p_fecha.getDate()) {
                if (flag3 == false) {
                    const h3 = document.createElement("h3");
                    h3.setAttribute("class", "h3");
                    const h3_text = document.createTextNode("29 de Octubre de 2021");
                    h3.appendChild(h3_text);
                    const linea = document.createElement("span");
                    linea.setAttribute("class", "linea");
                    document.getElementsByClassName("citas")[0].appendChild(h3);
                    document.getElementsByClassName("citas")[0].appendChild(linea);
                   }  
                Creador_citas();
    
                flag3 = true;
            }


            //Cuarta fecha
            p_fecha.setDate(p_fecha.getDate()+1);
            if (dia_correcto == p_fecha.getDate()) {
                if (flag4 == false) {
                    const h3 = document.createElement("h3");
                    h3.setAttribute("class", "h3");
                    const h3_text = document.createTextNode("29 de Octubre de 2021");
                    h3.appendChild(h3_text);
                    const linea = document.createElement("span");
                    linea.setAttribute("class", "linea");
                    document.getElementsByClassName("citas")[0].appendChild(h3);
                    document.getElementsByClassName("citas")[0].appendChild(linea);
                   }  
                Creador_citas();
    
                flag4 = true;
            }


            //Quinta fecha
            p_fecha.setDate(p_fecha.getDate()+1);
            if (dia_correcto == p_fecha.getDate()) {
                if (flag5 == false) {
                    const h3 = document.createElement("h3");
                    h3.setAttribute("class", "h3");
                    const h3_text = document.createTextNode("29 de Octubre de 2021");
                    h3.appendChild(h3_text);
                    const linea = document.createElement("span");
                    linea.setAttribute("class", "linea");
                    document.getElementsByClassName("citas")[0].appendChild(h3);
                    document.getElementsByClassName("citas")[0].appendChild(linea);
                   }  
                Creador_citas();
    
                flag5 = true;
            }


            //Sexta fecha
            p_fecha.setDate(p_fecha.getDate()+1);
            if (dia_correcto == p_fecha.getDate()) {
                if (flag6 == false) {
                    const h3 = document.createElement("h3");
                    h3.setAttribute("class", "h3");
                    const h3_text = document.createTextNode("29 de Octubre de 2021");
                    h3.appendChild(h3_text);
                    const linea = document.createElement("span");
                    linea.setAttribute("class", "linea");
                    document.getElementsByClassName("citas")[0].appendChild(h3);
                    document.getElementsByClassName("citas")[0].appendChild(linea);
                   }  
                Creador_citas();
    
                flag6 = true;
            }


            //Septima fecha
            p_fecha.setDate(p_fecha.getDate()+1);
            if (dia_correcto == p_fecha.getDate()) {
                if (flag7 == false) {
                    const h3 = document.createElement("h3");
                    h3.setAttribute("class", "h3");
                    const h3_text = document.createTextNode("29 de Octubre de 2021");
                    h3.appendChild(h3_text);
                    const linea = document.createElement("span");
                    linea.setAttribute("class", "linea");
                    document.getElementsByClassName("citas")[0].appendChild(h3);
                    document.getElementsByClassName("citas")[0].appendChild(linea);
                   }  
                Creador_citas();
    
                flag7 = true;
            }




            

            function Creador_citas() {

            
            const div_citas_caja = document.createElement("div");
            const div_citas = document.createElement("div");
            const span_hora = document.createElement("span");
            const text_span_hora = document.createTextNode(hora_muestra);
            const span_fecha = document.createElement("span");
            var text_span_fecha = document.createTextNode(p_fecha.getDate()+'/'+(p_fecha.getMonth()+1)+'/'+p_fecha.getFullYear());
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
            
        }
    } else {
        console.log("Error de tipo" + xhr_dispo.status);
    };
}
xhr_citas.send();