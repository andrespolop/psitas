<?php
include("php/conexion.php");
session_start();
session_write_close();


if (!isset($_SESSION['id_paciente'])) {
    header("Location: login.php");
}
$id_paciente = $_SESSION['id_paciente'];



$sql = "SELECT * FROM usuarios WHERE id = '$id_paciente'";

$ejecutar = $conexion ->query($sql);

$row = $ejecutar->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="iconos/psi-tas_icon_No-Background.ico" type="image/icon type">
    <script type="text/javascript">var id_paciente=<?php echo $id_paciente;?></script>
    <script src="https://kit.fontawesome.com/50ca7f45e4.js" crossorigin="anonymous"></script>
    <script src="src/listarHorariosSeleccionados.js" defer></script>
    <link rel="stylesheet" href="estilos/citas-agendadas.css"><!--cambiar-->
    <title>CITAS AGENDADAS</title>
</head>
<body>
    <!-- CREAMOS EL NAVBAR DEL APARTADO DE CITAS DEL PACIENTE-->

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"><a href="login.php">PSITAS</a></label>
        <ul>
            <li><a href="paciente-citas.php">AGENDAR CITAS</a></li>
            <li><a class="active"href="citas-agendadas.php">CITAS AGENDADAS</a></li>
            <li><a href="paciente-perfil.php">PERFIL</a></li>
            <li><a href="php/salir.php">SALIR</a></li>
        </ul>
    </nav>
    <!-- CREAMOS LAS CITAS ESCOGIDAS POR EL PACIENTE EN EL SISTEMA -->
    <div class="contenedor">
        <div class="contenedor-citas" id="contenedorCitas">
        </div>
    </div>
</body>
</html>