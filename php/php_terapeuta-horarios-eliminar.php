<?php

include("conexion.php");
session_start();
session_write_close();

$id_terapeuta = $_SESSION['id_terapeuta'];

$indice = 0;
for ($j = 0; $j < 56; $j++) {
   $indice++;


   if (isset($_POST["id" . $indice]) and isset($_POST["id_terapeuta" . $indice])) {

      
      $id = $_POST["id" . $indice];


      $sql = "DELETE FROM `horarios_disponibles` WHERE id = '$id' and id_terapeuta = '$id_terapeuta'";

      $ejecutar = $conexion->query($sql);
      if (!$ejecutar) {
         echo "Error al ejecutar el SQL";
      } else {
         echo "<script>
                  alert('Horario eliminado correctamente');
                  window.location = '../terapeuta-horarios.php';
                  </script>
                  ";
      }
   }
}
