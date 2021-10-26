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

<input type="hidden" disabled id="id_terapeuta" value="<?php echo $row["id"]; ?>">
    <!-- PRIMERO +++++++++++++++ -->
    <div class="contenedor">

        <div class="contenedor-horarios">




        </div>










        <!-- +++++++++++ DIV DE LOS HORARIOS DISPONIBLES O SELECCIONADOS +++++++++++++ -->


        <div class="contenedor-horarios-disponibles">
            <div class="fechas-horarios-disponibles">
                <span>HORARIOS SELECCIONADOS</span>
            </div>

            <div class="horarios-disponible">
                <form action="php/php_terapeuta-horarios.php" method="POST" class="horarios">

                    <div class="div-hora-disponible">
                        <input type="hidden" value="h1" name="id">
                        <input type="hidden" value="2021-11-04" name="fecha">
                        <input class="hora-disponible" type="text" disabled value="7:00">
                        <input type="text" class="nombre_terapeuta" disabled value="<?php echo $row["nombre"]; ?>">
                        <label class="label-activar" for="btn-activar"><b class="b_desactivar">Desactivar</b><i class="fas fa-trash-alt" style="color:#f72e2e;"></i></label>

                        <input type="submit" value="Activar" hidden id="btn-activar">
                    </div>

                </form>
            </div>






        </div>

    </div>





</body>

</html>