<?php

include("conexion.php");
// FECHA 1
$indice = 0;
for ($i=0; $i < 7; $i++) { 
   for ($j=0; $j < 8; $j++) { 
      $indice++;
      if (isset($_POST["id".$indice]) and isset($_POST["id_terapeuta"]) and isset($_POST["fecha".$indice]) and isset($_POST["hora".$indice])) {
         
         $id = $_POST["id".$indice];
         $fecha = $_POST["fecha".$indice];
         $hora = $_POST["hora".$indice];
         $id_terapeuta = $_POST["id_terapeuta"];


         $sql_comprobacion = "SELECT * FROM horarios_disponibles WHERE id = '$id' and id_terapeuta = '$id_terapeuta'";
         $result = $conexion ->query($sql_comprobacion);
         $filas = mysqli_num_rows($result); 
        
         $sql = "INSERT INTO horarios_disponibles(id, fecha, hora, id_terapeuta)
          values ('$id', '$fecha', '$hora', '$id_terapeuta')";
         
        
         if ($filas>0) {

            echo "<script>
               alert('Lo siento, ya tienes un registro con este horario')
               </script>
               ";
            header("Location:../terapeuta-horarios.php");            
         }else{
            $ejecutar = $conexion ->query($sql);
            if (!$ejecutar) {
               echo "Error al ejecutar el SQL";
            }else {
               echo "<script>
               alert('Horario registrado correctamente')
               </script>
               ";
            }
         }


   }


   }
}














   
?>