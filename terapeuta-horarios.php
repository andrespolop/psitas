<?php
include("php/conexion.php");
session_start();
session_write_close();


if (!isset($_SESSION['id_terapeuta'])) {
    header("Location: index.php");
}
$id_terapeuta = $_SESSION['id_terapeuta'];



$sql = "SELECT * FROM usuarios WHERE id = '$id_terapeuta'";

$ejecutar = $conexion ->query($sql);

$row = $ejecutar->fetch_assoc();


?>

<!--ENVIO A LA BD DE LOS HORARIOS MARCADOS COMO DISPONIBLES +++++++++++ -->
<?php

include("php/conexion.php");
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

         //Variables para borrar
         



         $sql_comprobacion = "SELECT * FROM horarios_disponibles WHERE id = '$id' and id_terapeuta = '$id_terapeuta'";
         $result = $conexion ->query($sql_comprobacion);
         $filas = mysqli_num_rows($result); 
        
         $sql = "INSERT INTO horarios_disponibles(id, fecha, hora, id_terapeuta)
          values ('$id', '$fecha', '$hora', '$id_terapeuta')";
         
        
         if ($filas>0) {

            echo "<script>
               alert('Lo siento, ya tienes un registro con este horario');
               window.location = 'terapeuta-horarios.php'
               
               </script>
               ";
                     
         }else{
            $ejecutar = $conexion ->query($sql);
            if (!$ejecutar) {
               echo "Error al ejecutar el SQL";
               
            }else {
               echo "<script>
               alert('Horario registrado correctamente');
               window.location = 'terapeuta-horarios.php';
               </script>
               ";
            }
         }
   }
   }
}

?>

<!-- // +++++++++ ELIMINACION DE LA BASE DE DATOS +++++++++++++ -->








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="iconos/psi-tas_icon_No-Background.ico" type="image/icon type">
    <script src="src/terapeuta-horarios.js" defer></script>
    <script src="https://kit.fontawesome.com/50ca7f45e4.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="estilos/terapeuta-horarios.css">
    <title>Terapeuta-Citas</title>
</head>

<body>
    <!-- CREAMOS EL NAVBAR DEL APARTADO DE CITAS DEL TERAPEUTA-->
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"><a href="index.php">Psitas</a></label>
        <ul>
            <li><a href="terapeuta-citas.php">CITAS</a></li>
            <li><a class="active" href="terapeuta-horarios.php">HORARIOS</a></li>
            <li><a href="terapeuta-perfil.php">MI PERFIL</a></li>
            <li><a href="php/salir.php">SALIR</a></li>
        </ul>
    </nav>


    <!-- CREAMOS LOS HORARIOS DE ATENCIÓN DISPONIBLES EN EL SISTEMA -->

<input type="hidden" id="id_terapeuta" value="<?php echo $row["id"]; ?>">
<input type="hidden"id="nombre_terapeuta" value = "<?php echo $row["nombre"]?>">   
<!-- PRIMERO +++++++++++++++ -->
    <div class="contenedor">

        <div class="contenedor-horarios">
            <!-- <h1>Escoja un horario</h1> -->




        </div>










        <!-- +++++++++++ DIV DE LOS HORARIOS DISPONIBLES O SELECCIONADOS +++++++++++++ -->


        <div class="contenedor-horarios-disponibles">
           <!-- <h1>Horarios Seleccionados</h1> -->
            <div class="fechas-horarios-disponibles">
                <span>HORARIOS SELECCIONADOS</span>
            </div>

            <div class="horarios-disponible">
                





            </div>


        </div>

    </div>





</body>

</html>