//xhr_hidden de horarios_disponibles
var xhr = new XMLHttpRequest();
var horarios_disponibles = [];

var indice = 0;
//Open del xhr
xhr.open("GET", "php/php_terapeuta-horarios.php");
//ON LOAD DE xhr
xhr.onload = () => {
  if (xhr.status == 200) {
    horarios_disponibles = JSON.parse(xhr.responseText);
    
    var horas = [8, 9, 10, 11, 12, 13, 14, 15];

    function diaCorrecto(x) {
      var fecha = new Date();
      fecha.setDate(fecha.getDate() + x);
      let mes;
      switch (fecha.getMonth()) {
        case 0:
          mes = "Enero";
          break;
        case 1:
          mes = "Febrero";
          break;
        case 2:
          mes = "Marzo";
          break;
        case 3:
          mes = "Abril";
          break;
        case 4:
          mes = "Mayo";
          break;
        case 5:
          mes = "Junio";
          break;
        case 6:
          mes = "Julio";
          break;
        case 7:
          mes = "Agosto";
          break;
        case 8:
          mes = "Septiembre";
          break;
        case 9:
          mes = "Octubre";
          break;
        case 10:
          mes = "Noviembre";
          break;
        case 11:
          mes = "Diciembre";
          break;
      }
      let diaI = fecha.getDate() + " de " + mes + " del " + fecha.getFullYear();
      return diaI;
    }

    //Creamos variable de tipo date()
    var p_fecha = new Date();
    var id_terapeuta = document.getElementById("id_terapeuta").value;
    //Valor C que le sumará a la fecha.
    var c = 0;

    for (let i = 0; i < 7; i++) {
      p_fecha.setDate(p_fecha.getDate() + c);
      var mostrarfecha =
        p_fecha.getFullYear() +
        "-" +
        (p_fecha.getMonth() + 1) +
        "-" +
        p_fecha.getDate();

      const div_fecha = document.createElement("div");
      div_fecha.classList.add("fecha-estatica");
      const span_fecha = document.createElement("span");
      let fechaI = "fecha" + i;
      span_fecha.id = fechaI;
      document
        .getElementsByClassName("contenedor-horarios")[0]
        .appendChild(div_fecha);
      div_fecha.appendChild(span_fecha);
      document.getElementById(fechaI).innerHTML = diaCorrecto(i);

      for (let j = 0; j < horas.length; j++) {
        indice++;

        var hora_real_h;

        var hora_muestra_h;
        hora_real_h = horas[j];

        if (hora_real_h < 10) {
          hora_muestra_h = "0" + hora_real_h + ":00 AM";
        } if (hora_real_h > 9 && hora_real_h < 12) {
          hora_muestra_h = hora_real_h + ":00 AM";
        } if (hora_real_h == 12) {
          hora_muestra_h = hora_real_h + ":00 PM";
        } if (hora_real_h > 12) {
          hora_muestra_h = "0" + (hora_real_h - 12) + ":00 PM";
        }


        const form = document.createElement("form");
        const div_hora = document.createElement("div");
        const input_id = document.createElement("input");
        const input_fecha = document.createElement("input");
        const input_hora_muestra = document.createElement("input");
        const in_id_terapeuta = document.createElement("input");
        const label_boton_activar = document.createElement("label");
        const input_submit = document.createElement("input");
        const b = document.createElement("b");
        const icono = document.createElement("i");
        const btext = "Activar";
        const input_hora = document.createElement("input");


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
        form.setAttribute("id", "formh" + indice);
        // form.setAttribute("hidden", "" );
        for (let x = 0; x < horarios_disponibles.length; x++) {
          if (
            horarios_disponibles[x]["id"] == "h" + indice &&
            horarios_disponibles[x]["id_terapeuta"] ==
            document.getElementById("id_terapeuta").value
          ) {
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
        //Atributos de input-hora-muestra
        input_hora_muestra.setAttribute("class", "hora");
        input_hora_muestra.setAttribute("type", "text");
        input_hora_muestra.setAttribute("readonly", "");
        input_hora_muestra.setAttribute("value", hora_muestra_h);


        // ATRIBUTOS INNPUT_HORA
        input_hora.setAttribute("type", "hidden");
        input_hora.setAttribute("value", horas[j]);
        input_hora.setAttribute("name", "hora" + indice);

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
        div_hora.appendChild(input_hora_muestra);
        div_hora.appendChild(input_submit);
        div_hora.appendChild(label_boton_activar);
        form.appendChild(div_hora);
        document
          .getElementsByClassName("contenedor-horarios")[0]
          .appendChild(form);
      }
      //SETeamos el C=1 para que el setDate sume 1.
      c = 1;
    }
  } else {
    console.log("Existe un error de tipo: " + xhr.status);
  }
};
xhr.send();

//  HORARIOS DISPONIBLES
//Variables de xhr_disponibles
var xhr_dispo = new XMLHttpRequest();
var horarios_dispo_des = [];
var cont_eliminar = 0;

// Abrimos el archivo.php
xhr_dispo.open("GET", "php/php_terapeuta-horarios-disponibles.php");
// Accedemos al JSON.
xhr_dispo.onload = function () {
  if (xhr_dispo.status == 200) {
    // Declarar las variables
    horarios_dispo_des = JSON.parse(xhr_dispo.responseText);
    var hora_real;
    var hora_muestra;
    var flag1 = false;
    var flag2 = false;
    var flag3 = false;
    var flag4 = false;
    var flag5 = false;
    var flag6 = false;
    var flag7 = false;

    for (let i = 0; i < horarios_dispo_des.length; i++) {

      //Separador de fechas - horas
      if (horarios_dispo_des[i]["id_terapeuta"] == document.getElementById("id_terapeuta").value) {
        cont_eliminar++;
        hora_real = horarios_dispo_des[i]["hora"];

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
        var separar_fecha = horarios_dispo_des[i]["fecha"].split('-');
        var dia_correcto = separar_fecha[2];



        p_fecha.setDate(p_fecha.getDate());

        if (dia_correcto == p_fecha.getDate()) {
          if (flag1 == false) {
            const div_fecha_estatica_disponible = document.createElement("div");
            const span_fecha_estatica_disponible = document.createElement("span");
            const span_fecha_dis_text = document.createTextNode(p_fecha.getDate() + ' del mes ' + (p_fecha.getMonth() + 1) + ' del año ' + p_fecha.getFullYear());
            div_fecha_estatica_disponible.setAttribute("class", "fecha-estatica-disponible");
            span_fecha_estatica_disponible.appendChild(span_fecha_dis_text);
            div_fecha_estatica_disponible.appendChild(span_fecha_estatica_disponible);
            document.getElementsByClassName("horarios-disponible")[0].appendChild(div_fecha_estatica_disponible);
          }
          listar_horarios_disponibles();
          flag1 = true;
        }
        // ++++++++++++++++++++++ DÍA 2 +++++++++++++++++
        p_fecha.setDate(p_fecha.getDate() + 1);
        if (dia_correcto == p_fecha.getDate()) {
          if (flag2 == false) {
            const div_fecha_estatica_disponible = document.createElement("div");
            const span_fecha_estatica_disponible = document.createElement("span");
            const span_fecha_dis_text = document.createTextNode(p_fecha.getDate() + ' del mes ' + (p_fecha.getMonth() + 1) + ' del año ' + p_fecha.getFullYear());
            div_fecha_estatica_disponible.setAttribute("class", "fecha-estatica-disponible");
            span_fecha_estatica_disponible.appendChild(span_fecha_dis_text);
            div_fecha_estatica_disponible.appendChild(span_fecha_estatica_disponible);
            document.getElementsByClassName("horarios-disponible")[0].appendChild(div_fecha_estatica_disponible);
          }
          listar_horarios_disponibles();
          flag2 = true;
        }

        //    ++++++++++++ DÍA 3 +++++++++++++++++

        p_fecha.setDate(p_fecha.getDate() + 1);
        if (dia_correcto == p_fecha.getDate()) {
          if (flag3 == false) {
            const div_fecha_estatica_disponible = document.createElement("div");
            const span_fecha_estatica_disponible = document.createElement("span");
            const span_fecha_dis_text = document.createTextNode(p_fecha.getDate() + ' del mes ' + (p_fecha.getMonth() + 1) + ' del año ' + p_fecha.getFullYear());
            div_fecha_estatica_disponible.setAttribute("class", "fecha-estatica-disponible");
            span_fecha_estatica_disponible.appendChild(span_fecha_dis_text);
            div_fecha_estatica_disponible.appendChild(span_fecha_estatica_disponible);
            document.getElementsByClassName("horarios-disponible")[0].appendChild(div_fecha_estatica_disponible);
          }
          listar_horarios_disponibles();
          flag3 = true;
        }

        // +++++++++++++ DÍA 4
        p_fecha.setDate(p_fecha.getDate() + 1);
        if (dia_correcto == p_fecha.getDate()) {
          if (flag4 == false) {
            const div_fecha_estatica_disponible = document.createElement("div");
            const span_fecha_estatica_disponible = document.createElement("span");
            const span_fecha_dis_text = document.createTextNode(p_fecha.getDate() + ' del mes ' + (p_fecha.getMonth() + 1) + ' del año ' + p_fecha.getFullYear());
            div_fecha_estatica_disponible.setAttribute("class", "fecha-estatica-disponible");
            span_fecha_estatica_disponible.appendChild(span_fecha_dis_text);
            div_fecha_estatica_disponible.appendChild(span_fecha_estatica_disponible);
            document.getElementsByClassName("horarios-disponible")[0].appendChild(div_fecha_estatica_disponible);
          }
          listar_horarios_disponibles();
          flag4 = true;
        }


        // ++++++++++ DÍA 5 ++++
        p_fecha.setDate(p_fecha.getDate() + 1);
        if (dia_correcto == p_fecha.getDate()) {
          if (flag5 == false) {
            const div_fecha_estatica_disponible = document.createElement("div");
            const span_fecha_estatica_disponible = document.createElement("span");
            const span_fecha_dis_text = document.createTextNode(p_fecha.getDate() + ' del mes ' + (p_fecha.getMonth() + 1) + ' del año ' + p_fecha.getFullYear());
            div_fecha_estatica_disponible.setAttribute("class", "fecha-estatica-disponible");
            span_fecha_estatica_disponible.appendChild(span_fecha_dis_text);
            div_fecha_estatica_disponible.appendChild(span_fecha_estatica_disponible);
            document.getElementsByClassName("horarios-disponible")[0].appendChild(div_fecha_estatica_disponible);
          }
          listar_horarios_disponibles();
          flag5 = true;
        }


        //++++++++++ DÍA NUMERO 6++++++++
        p_fecha.setDate(p_fecha.getDate() + 1);
        if (dia_correcto == p_fecha.getDate()) {
          if (flag6 == false) {
            const div_fecha_estatica_disponible = document.createElement("div");
            const span_fecha_estatica_disponible = document.createElement("span");
            const span_fecha_dis_text = document.createTextNode(p_fecha.getDate() + ' del mes ' + (p_fecha.getMonth() + 1) + ' del año ' + p_fecha.getFullYear());
            div_fecha_estatica_disponible.setAttribute("class", "fecha-estatica-disponible");
            span_fecha_estatica_disponible.appendChild(span_fecha_dis_text);
            div_fecha_estatica_disponible.appendChild(span_fecha_estatica_disponible);
            document.getElementsByClassName("horarios-disponible")[0].appendChild(div_fecha_estatica_disponible);
          }
          listar_horarios_disponibles();
          flag6 = true;
        }


        // +++++++ DÍA NUMERO 7 +++++
        p_fecha.setDate(p_fecha.getDate() + 1);
        if (dia_correcto == p_fecha.getDate()) {
          if (flag7 == false) {
            const div_fecha_estatica_disponible = document.createElement("div");
            const span_fecha_estatica_disponible = document.createElement("span");
            const span_fecha_dis_text = document.createTextNode(p_fecha.getDate() + ' del mes ' + (p_fecha.getMonth() + 1) + ' del año ' + p_fecha.getFullYear());
            div_fecha_estatica_disponible.setAttribute("class", "fecha-estatica-disponible");
            span_fecha_estatica_disponible.appendChild(span_fecha_dis_text);
            div_fecha_estatica_disponible.appendChild(span_fecha_estatica_disponible);
            document.getElementsByClassName("horarios-disponible")[0].appendChild(div_fecha_estatica_disponible);
          }
          listar_horarios_disponibles();
          flag7 = true;
        }





        function listar_horarios_disponibles() {

          const form_d = document.createElement("form");
          const div_hora_d = document.createElement("div");
          const input_id_d = document.createElement("input");
          const input_hora_d = document.createElement("input");
          const input_fecha_d = document.createElement("input");
          const input_id_t = document.createElement("input");
          const label_boton_desactivar = document.createElement("label");
          const input_submit_desactivar = document.createElement("input");
          const b_desactivar = document.createElement("b");
          const i_desactivar = document.createElement("i");
          const b_desactivar_text = document.createTextNode("Desactivar");

          // psi-tas_icon_No-Background.ico
          //Atributos
          form_d.setAttribute("action", "php/php_terapeuta-horarios-eliminar.php");
          form_d.setAttribute("method", "POST");
          form_d.setAttribute("class", "horarios");
          //atributos div_hora_d
          div_hora_d.setAttribute("class", "div-hora-disponible");
          //Atributos input_id_d;
          input_id_d.setAttribute("type", "hidden");
          input_id_d.setAttribute("value", horarios_dispo_des[i]["id"]);
          input_id_d.setAttribute("name", "id" + cont_eliminar);
          //atributos de Input_hora_d
          input_fecha_d.setAttribute("type", "hidden");
          input_fecha_d.setAttribute("readonly", "");
          input_fecha_d.setAttribute("class", "fecha-disponible-eliminar");
          input_fecha_d.setAttribute("value", horarios_dispo_des[i]["fecha"]);
          input_fecha_d.setAttribute("name", "fecha" + cont_eliminar);
          //Atributos de input_hora_d
          input_hora_d.setAttribute("class", "hora-disponible");
          input_hora_d.setAttribute("type", "text");
          input_hora_d.setAttribute("readonly", "");
          input_hora_d.setAttribute("value", hora_muestra);
          //Atributos input_id_t
          input_id_t.setAttribute("type", "text");
          input_id_t.setAttribute("name", "id_terapeuta" + cont_eliminar);
          input_id_t.setAttribute("value", document.getElementById("id_terapeuta").value);
          input_id_t.setAttribute("hidden", "");

          // Atributos label F te sale (26/10/2021)
          label_boton_desactivar.setAttribute("class", "label-activar");
          label_boton_desactivar.setAttribute("for", "btn-desactivar" + cont_eliminar);
          //atributos del b
          b_desactivar.setAttribute("class", "b_desactivar");
          b_desactivar.appendChild(b_desactivar_text);
          //atributos del i
          i_desactivar.setAttribute("class", "fas fa-trash-alt");
          i_desactivar.setAttribute("style", "color:#f72e2e;");
          // Atributos submit
          input_submit_desactivar.setAttribute("id", "btn-desactivar" + cont_eliminar);
          input_submit_desactivar.setAttribute("type", "submit");
          input_submit_desactivar.setAttribute("value", "desactivar");
          input_submit_desactivar.setAttribute("hidden", "");

          //APPEND CHILDREN

          div_hora_d.appendChild(input_id_d);
          div_hora_d.appendChild(input_hora_d);
          div_hora_d.appendChild(input_fecha_d);
          div_hora_d.appendChild(input_id_t);
          label_boton_desactivar.appendChild(b_desactivar);
          label_boton_desactivar.appendChild(i_desactivar);
          div_hora_d.appendChild(input_submit_desactivar);
          div_hora_d.appendChild(label_boton_desactivar);
          form_d.appendChild(div_hora_d);
          document
            .getElementsByClassName("horarios-disponible")[0]
            .appendChild(form_d);



        }


      }

    }
  } else {
    console.log("Error de tipo" + xhr_dispo.status);
  }
};
xhr_dispo.send();
