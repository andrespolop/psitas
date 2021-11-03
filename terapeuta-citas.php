<?php
include("php/conexion.php");
session_start();
session_write_close();


if (!isset($_SESSION['id_terapeuta'])) {
    header("Location: login.php");
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="iconos/psi-tas_icon_No-Background.ico" type="image/icon type">
    <script src="scripts/terapeuta-citas.js" defer></script>
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
        <label class="logo"><a href="login.php">Psitas</a></label>
        <ul>
            <li><a class="active" href="terapeuta-citas.php">CITAS</a></li>
            <li><a href="terapeuta-horarios.php">HORARIOS</a></li>
            <li><a href="terapeuta-perfil.php">MI PERFIL</a></li>
            <li><a href="php/salir.php">SALIR</a></li>
        </ul>
    </nav>


    <!-- CREAMOS LOS HORARIOS DE ATENCIÓN DISPONIBLES EN EL SISTEMA -->

    <input type="hidden" id="id_terapeuta" value="<?php echo $row["id"]; ?>">
    <input type="hidden" id="nombre_terapeuta" value="<?php echo $row["nombre"] ?>">
    <!-- PRIMERO +++++++++++++++ -->
    <div class="contenedor">

        <div class="contenedor-citas">

            
                <div class="citas-agendadas">
                    <span>CITAS AGENDADAS<i class="fas fa-calendar-check"></i></span>
                </div>
            <div class="citas">
                
            
            </div>

        </div>

    </div>





</body>

</html>