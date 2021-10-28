<?php
include("php/conexion.php");
session_start();
session_write_close();


if (!isset($_SESSION['id_paciente'])) {
    header("Location: index.php");
}
$id_paciente = $_SESSION['id_paciente'];



$sql = "SELECT * FROM usuarios WHERE id = '$id_paciente'";

$ejecutar = $conexion ->query($sql);

$row = $ejecutar->fetch_assoc();

/*ENVIO A LA BD DE LAS CITAS AGENDADAS*/ 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="iconos/psi-tas_icon_No-Background.ico" type="image/icon type">
    <script src="https://kit.fontawesome.com/50ca7f45e4.js" crossorigin="anonymous"></script>
    <script src="src/listarHorarios.js" defer></script>
    <link rel="stylesheet" href="estilos/paciente-citas.css">
    <title>AGENDAR CITAS</title>
</head>

<body>
    <!-- CREAMOS EL NAVBAR DEL APARTADO DE CITAS DEL PACIENTE-->

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"><a href="index.html">PSITAS</a></label>
        <ul>
            <li><a class="active" href="paciente-citas.php">AGENDAR CITAS</a></li>
            <li><a href="">VER CITAS AGENDADAS</a></li>
            <li><a href="paciente-perfil.php">PERFIL</a></li>
            <li><a href="php/salir.php">SALIR</a></li>
        </ul>
    </nav>

    <!-- CREAMOS LOS HORARIOS DE ATENCIÓN DISPONIBLES EN EL SISTEMA -->
    <div class="contenedor">
        <!--contenedor general inicio-->
        <div class="contenedor-horarios">
        </div>
        <!--contenedor de horarios final-->
    </div>
    <!--contenedor general final-->

</body>

</html>