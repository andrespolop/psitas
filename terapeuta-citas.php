<?php
include("php/conexion.php");
session_start();
session_write_close();


if (!isset($_SESSION['id_terapeuta'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="iconos/psi-tas_icon_No-Background.ico" type="image/icon type">
    <script src="https://kit.fontawesome.com/50ca7f45e4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos/terapeuta-citas.css">
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
            <li><a class="active" href="terapeuta-citas.php">CITAS</a></li>
            <li><a href="terapeuta-horarios.php">HORARIOS</a></li>
            <li><a href="terapeuta-perfil.php">MI PERFIL</a></li>
            <li><a href="php/salir.php">SALIR</a></li>
        </ul>
    </nav>

    <!-- COLOCAREMOS LAS FECHAS Y LAS CITAS-->

    <div class="div-fecha">
        <h2 class="fecha">11 de Octubre del 2021</h2>
        <span class="linea"></span>
    </div>


    <!-- COLOCAMOS LAS CARDS DE LAS CITAS-->
    <div class="contenedor-citas">
        <div class="citas-card">
            <p id="nombre_cliente"><b>Nombre:</b> Andres Polo</p>
            <p id="correo_cliente"><b>Correo:</b> andrespolop@gmail.com</p>
            <p id="cedula_cliente"><b>Cédula:</b> 100xxxxx</p>
            <p id="celular_cliente"><b>Celular:</b> 30070xxxxx</p>
            <p id="hora_cliente"><b>Hora:</b> 10:30 PM</p>
        </div>
        <div class="citas-card">
            <p id="nombre_cliente"><b>Nombre:</b> Andres Polo</p>
            <p id="correo_cliente"><b>Correo:</b> andrespolop@gmail.com</p>
            <p id="cedula_cliente"><b>Cédula:</b> 100xxxxx</p>
            <p id="celular_cliente"><b>Celular:</b> 30070xxxxx</p>
            <p id="hora_cliente"><b>Hora:</b> 10:30 PM</p>
        </div>
        <div class="citas-card">
            <p id="nombre_cliente"><b>Nombre:</b> Andres Polo</p>
            <p id="correo_cliente"><b>Correo:</b> andrespolop@gmail.com</p>
            <p id="cedula_cliente"><b>Cédula:</b> 100xxxxx</p>
            <p id="celular_cliente"><b>Celular:</b> 30070xxxxx</p>
            <p id="hora_cliente"><b>Hora:</b> 10:30 PM</p>
        </div>
        <div class="citas-card">
            <p id="nombre_cliente"><b>Nombre:</b> Andres Polo</p>
            <p id="correo_cliente"><b>Correo:</b> apolop@unicarta.edu.co</p>
            <p id="cedula_cliente"><b>Cédula:</b> 100xxxxx</p>
            <p id="celular_cliente"><b>Celular:</b> 30070xxxxx</p>
            <p id="hora_cliente"><b>Hora:</b> 10:30 PM</p>
        </div>
    </div>


</body>

</html>